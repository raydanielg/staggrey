<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Program;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApplicationController extends Controller
{
    public function index()
    {
        $programs = Program::where('status', 'active')->get();
        $applicationFee = Setting::get('application_fee', 10000);
        
        return view('public.application', compact('programs', 'applicationFee'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'program_id' => 'required|exists:programs,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date|before:18 years ago',
            'gender' => 'required|in:male,female,other',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:500',
            'nationality' => 'required|string|max:100',
            'id_number' => 'nullable|string|max:50',
            'education_background' => 'required|string|max:1000',
            'previous_school' => 'required|string|max:255',
            'certificate_attachment' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'photo' => 'nullable|image|max:1024',
            'agree_terms' => 'required|accepted',
        ]);

        // Handle file uploads
        $certificatePath = null;
        $photoPath = null;

        if ($request->hasFile('certificate_attachment')) {
            $certificatePath = $request->file('certificate_attachment')
                ->store('applications/certificates', 'public');
        }

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')
                ->store('applications/photos', 'public');
        }

        // Generate application number
        $year = now()->year;
        $count = Application::whereYear('created_at', $year)->count() + 1;
        $applicationNumber = 'APP/' . $year . '/' . str_pad($count, 5, '0', STR_PAD_LEFT);

        $application = Application::create([
            'application_number' => $applicationNumber,
            'program_id' => $request->program_id,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'nationality' => $request->nationality,
            'id_number' => $request->id_number,
            'education_background' => $request->education_background,
            'previous_school' => $request->previous_school,
            'certificate_attachment' => $certificatePath,
            'photo' => $photoPath,
            'status' => 'pending',
        ]);

        return redirect()->route('public.application.success')
            ->with(['application_number' => $applicationNumber, 'success' => true]);
    }

    public function success()
    {
        if (!session('success')) {
            return redirect()->route('public.home');
        }

        return view('public.application-success', [
            'application_number' => session('application_number')
        ]);
    }

    public function checkStatus(Request $request)
    {
        $request->validate([
            'application_number' => 'required|string',
        ]);

        $application = Application::where('application_number', $request->application_number)->first();

        if (!$application) {
            return back()->with('error', 'Application not found. Please check your application number.');
        }

        return view('public.application-status', compact('application'));
    }
}
