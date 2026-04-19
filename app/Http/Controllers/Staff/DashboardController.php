<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $staff = auth()->user()->staff;
        
        if (!$staff) {
            abort(403, 'Staff profile not found.');
        }

        $staff->load('timetables.course');

        $stats = [
            'classes_today' => $staff->timetables()
                ->where('day', strtolower(now()->format('l')))
                ->count(),
            'total_courses' => $staff->timetables->unique('course_id')->count(),
            'pending_assignments' => $staff->assignments()
                ->where('due_date', '>=', now())
                ->count(),
        ];

        $todays_classes = $staff->timetables
            ->where('day', strtolower(now()->format('l')))
            ->sortBy('start_time');

        $recent_assignments = $staff->assignments()
            ->latest()
            ->take(5)
            ->get();

        return view('staff.dashboard', compact(
            'staff',
            'stats',
            'todays_classes',
            'recent_assignments'
        ));
    }
}
