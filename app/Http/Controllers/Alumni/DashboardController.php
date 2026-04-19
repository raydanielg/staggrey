<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $alumni = auth()->user()->alumni;
        
        if (!$alumni) {
            abort(403, 'Alumni profile not found.');
        }

        $alumni->load('student.program');

        $stats = [
            'total_donations' => $alumni->total_donations,
            'donations_count' => $alumni->donations()->where('status', 'completed')->count(),
            'graduation_year' => $alumni->graduation_date ? $alumni->graduation_date->year : 'N/A',
        ];

        $recent_donations = $alumni->donations()
            ->where('status', 'completed')
            ->latest()
            ->take(5)
            ->get();

        $notifications = auth()->user()->notifications()
            ->latest()
            ->take(5)
            ->get();

        return view('alumni.dashboard', compact(
            'alumni',
            'stats',
            'recent_donations',
            'notifications'
        ));
    }
}
