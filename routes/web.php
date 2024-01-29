<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FronendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [FronendController::class, 'showHome'])->name('home');
Route::get('/registration_enroll', [EnrollmentController::class, 'registration_enroll'])->name('registration_enroll');
Route::get('/card_details/{id}', [FronendController::class, 'card_details'])->name('card_details');
Route::get('/all_card', [FronendController::class, 'all_card'])->name('all_card');
Route::get('/all_testimonial', [FronendController::class, 'all_testimonial'])->name('all_testimonial');
Route::get('/all_faq', [FronendController::class, 'all_faq'])->name('all_faq');
Route::get('/all_teachers', [FronendController::class, 'all_teachers'])->name('all_teachers');



Route::resource('enroll', EnrollmentController::class);
Route::resource('teacher_backend', TeacherController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/backend_about', [BackendController::class, 'backend_about'])->name('backend.about');
    Route::post('/backend_about/create', [BackendController::class, 'backend_about_create'])->name('backend_about.create');
    Route::get('/backend_about/edit', [BackendController::class, 'backend_about_edit'])->name('backend.about.edit');
    Route::put('/backend_about/{id}/update', [BackendController::class, 'backend_about_update'])->name('backend.about.update');
    Route::get('/backend_course', [BackendController::class, 'backend_course'])->name('backend.course');
    Route::post('/backend_course/create', [BackendController::class, 'backend_course_create'])->name('backend.course.create');
    Route::resource('backend_card', CardController::class);
    Route::resource('backend_testimonial', TestimonialController::class);
    Route::resource('faq', FaqController::class);


});

require __DIR__.'/auth.php';

