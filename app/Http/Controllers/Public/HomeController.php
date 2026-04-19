<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\News;
use App\Models\Program;
use App\Models\Setting;
use App\Models\Staff;
use App\Models\Student;
use App\Models\Alumni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $settings = [
            'college_name' => Setting::get('college_name', 'St. Aggrey College of Arts'),
            'college_address' => Setting::get('college_address', 'P.O. Box 2954, Mbeya, Tanzania'),
            'college_phone' => Setting::get('college_phone', ''),
            'college_email' => Setting::get('college_email', ''),
        ];

        $stats = [
            'students' => Student::where('enrollment_status', 'active')->count(),
            'programs' => Program::where('status', 'active')->count(),
            'staff' => Staff::where('status', 'active')->count(),
            'alumni' => Alumni::where('status', 'active')->count(),
        ];

        $featured_news = News::published()->featured()->latest()->take(3)->get();
        $latest_news = News::published()->latest()->take(6)->get();
        $upcoming_events = Event::upcoming()->published()->take(4)->get();
        $programs = Program::where('status', 'active')->take(6)->get();

        return view('public.home', compact(
            'settings',
            'stats',
            'featured_news',
            'latest_news',
            'upcoming_events',
            'programs'
        ));
    }

    public function about()
    {
        $settings = [
            'college_name' => Setting::get('college_name', 'St. Aggrey College of Arts'),
            'college_address' => Setting::get('college_address', 'P.O. Box 2954, Mbeya, Tanzania'),
        ];

        return view('public.about', compact('settings'));
    }

    public function programs()
    {
        $programs = Program::where('status', 'active')->get();
        return view('public.programs', compact('programs'));
    }

    public function programShow(Program $program)
    {
        $program->load('courses');
        return view('public.program-show', compact('program'));
    }

    public function staff()
    {
        $staff = Staff::with('user')->where('status', 'active')->get();
        return view('public.staff', compact('staff'));
    }

    public function news()
    {
        $news = News::published()->latest()->paginate(10);
        return view('public.news', compact('news'));
    }

    public function newsShow(News $news)
    {
        $news->incrementViews();
        $relatedNews = News::published()->where('id', '!=', $news->id)
            ->where('category', $news->category)
            ->latest()
            ->take(3)
            ->get();
        return view('public.news-show', compact('news', 'relatedNews'));
    }

    public function events()
    {
        $upcomingEvents = Event::upcoming()->published()->get();
        $pastEvents = Event::past()->published()->take(6)->get();
        return view('public.events', compact('upcomingEvents', 'pastEvents'));
    }

    public function contact()
    {
        $settings = [
            'college_name' => Setting::get('college_name', 'St. Aggrey College of Arts'),
            'college_address' => Setting::get('college_address', 'P.O. Box 2954, Mbeya, Tanzania'),
            'college_phone' => Setting::get('college_phone', ''),
            'college_email' => Setting::get('college_email', ''),
        ];

        return view('public.contact', compact('settings'));
    }

    public function fees()
    {
        $programs = Program::where('status', 'active')->with('feeStructures')->get();
        return view('public.fees', compact('programs'));
    }
}
