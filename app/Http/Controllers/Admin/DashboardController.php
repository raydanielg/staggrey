<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Course;
use App\Models\Donation;
use App\Models\Event;
use App\Models\News;
use App\Models\Payment;
use App\Models\Program;
use App\Models\Student;
use App\Models\Staff;
use App\Models\Alumni;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_students' => Student::count(),
            'active_students' => Student::where('enrollment_status', 'active')->count(),
            'total_staff' => Staff::count(),
            'total_alumni' => Alumni::count(),
            'total_programs' => Program::where('status', 'active')->count(),
            'total_courses' => Course::where('status', 'active')->count(),
            'pending_applications' => Application::where('status', 'pending')->count(),
            'total_donations' => Donation::where('status', 'completed')->sum('amount'),
            'monthly_payments' => Payment::where('status', 'completed')
                ->whereMonth('payment_date', now()->month)
                ->sum('amount'),
        ];

        $recent_applications = Application::latest()->take(5)->get();
        $recent_payments = Payment::with('student')->latest()->take(5)->get();
        $recent_news = News::latest()->take(5)->get();
        $upcoming_events = Event::upcoming()->take(5)->get();

        return view('admin.dashboard', compact(
            'stats',
            'recent_applications',
            'recent_payments',
            'recent_news',
            'upcoming_events'
        ));
    }
}
