<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $student = auth()->user()->student;
        
        if (!$student) {
            abort(403, 'Student profile not found.');
        }

        $student->load(['program', 'enrollments.course']);

        $stats = [
            'current_semester' => $student->current_semester,
            'total_courses' => $student->enrollments->where('semester', $student->current_semester)->count(),
            'fee_balance' => $student->fee_balance,
            'gpa' => $student->gpa,
        ];

        $upcoming_classes = $student->enrollments
            ->where('semester', $student->current_semester)
            ->flatMap(function ($enrollment) {
                return $enrollment->course->timetables
                    ->where('day', now()->format('l'));
            });

        $recent_results = $student->results()
            ->with('course')
            ->where('is_published', true)
            ->latest()
            ->take(5)
            ->get();

        $notifications = auth()->user()->notifications()
            ->latest()
            ->take(5)
            ->get();

        $unread_notifications_count = auth()->user()->unreadNotifications()->count();

        return view('student.dashboard', compact(
            'student',
            'stats',
            'upcoming_classes',
            'recent_results',
            'notifications',
            'unread_notifications_count'
        ));
    }
}
