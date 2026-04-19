<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\HomeController as PublicHomeController;
use App\Http\Controllers\Public\ApplicationController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\StudentController as AdminStudentController;
use App\Http\Controllers\Student\DashboardController as StudentDashboardController;
use App\Http\Controllers\Staff\DashboardController as StaffDashboardController;
use App\Http\Controllers\Alumni\DashboardController as AlumniDashboardController;

/*
|--------------------------------------------------------------------------
| Landing Page Routes (New Design)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('landing.home');
})->name('landing.home');

Route::get('/news-details', function () {
    return view('landing.news-details');
})->name('landing.news.details');

/*
|--------------------------------------------------------------------------
| Public Routes (No Authentication Required)
|--------------------------------------------------------------------------
*/

Route::get('/public', [PublicHomeController::class, 'index'])->name('public.home');
Route::get('/about', [PublicHomeController::class, 'about'])->name('public.about');
Route::get('/programs', [PublicHomeController::class, 'programs'])->name('public.programs');
Route::get('/programs/{program}', [PublicHomeController::class, 'programShow'])->name('public.program.show');
Route::get('/staff', [PublicHomeController::class, 'staff'])->name('public.staff');
Route::get('/news', [PublicHomeController::class, 'news'])->name('public.news');
Route::get('/news/{news}', [PublicHomeController::class, 'newsShow'])->name('public.news.show');
Route::get('/events', [PublicHomeController::class, 'events'])->name('public.events');
Route::get('/contact', [PublicHomeController::class, 'contact'])->name('public.contact');
Route::get('/fees', [PublicHomeController::class, 'fees'])->name('public.fees');

// Application Routes
Route::get('/apply', [ApplicationController::class, 'index'])->name('public.application');
Route::post('/apply', [ApplicationController::class, 'store'])->name('public.application.store');
Route::get('/apply/success', [ApplicationController::class, 'success'])->name('public.application.success');
Route::get('/check-status', [ApplicationController::class, 'checkStatus'])->name('public.application.status');
Route::post('/check-status', [ApplicationController::class, 'checkStatus'])->name('public.application.status.check');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

Auth::routes();

/*
|--------------------------------------------------------------------------
| Student Routes (Requires Student Role)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:student'])->prefix('student')->name('student.')->group(function () {
    Route::get('/dashboard', [StudentDashboardController::class, 'index'])->name('dashboard');
});

/*
|--------------------------------------------------------------------------
| Staff Routes (Requires Staff Role)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:staff'])->prefix('staff')->name('staff.')->group(function () {
    Route::get('/dashboard', [StaffDashboardController::class, 'index'])->name('dashboard');
});

/*
|--------------------------------------------------------------------------
| Alumni Routes (Requires Alumni Role)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:alumni'])->prefix('alumni')->name('alumni.')->group(function () {
    Route::get('/dashboard', [AlumniDashboardController::class, 'index'])->name('dashboard');
});

/*
|--------------------------------------------------------------------------
| Admin Routes (Requires Admin Role)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    
    // Student Management
    Route::resource('students', AdminStudentController::class);
    Route::get('/students/import', [AdminStudentController::class, 'bulkImport'])->name('students.import');
});

/*
|--------------------------------------------------------------------------
| Legacy Home Route (Redirects to appropriate dashboard)
|--------------------------------------------------------------------------
*/

Route::get('/home', function () {
    $user = auth()->user();
    
    if ($user->isAdmin()) {
        return redirect()->route('admin.dashboard');
    } elseif ($user->isStudent()) {
        return redirect()->route('student.dashboard');
    } elseif ($user->isStaff()) {
        return redirect()->route('staff.dashboard');
    } elseif ($user->isAlumni()) {
        return redirect()->route('alumni.dashboard');
    }
    
    return redirect('/');
})->middleware('auth')->name('home');
