<?php

use App\Http\Controllers\UtbkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\UniversitasController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('pages.index');
})->middleware(['auth', 'verified'])->name('index');

Route::get('/profil', function () {
    return view('pages.index');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




//online deggre
Route::get('/module', [UniversityController::class, 'index'])->name('module.detail');
Route::get('/program/bachelor', [UniversityController::class, 'bachelor'])->name('universities.bachelor');
Route::get('/program/master', [UniversityController::class, 'master'])->name('universities.master');
Route::get('/program/all', [UniversityController::class, 'all'])->name('universities.all');
Route::get('/program/postgraduate', [UniversityController::class, 'postgraduate'])->name('universities.postgraduate');

//carrer
Route::get('/exam', [CareerController::class, 'showCareers'])->name('careers');
//certifikat
Route::get('/certificate-detail', [CourseController::class, 'index'])
     ->name('certificate.detail');

//kursus
Route::get('/next', function () {
    return view('pages.detail.nextkursus.learning_goals');
});




// HOME
Route::get('/home', function () {
    return view('pages.index');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/topic-listing', function () {
    return view('pages.topic_listing');
});

//MASUK SECTION 1
Route::get('/topic-detail', [UtbkController::class, 'index']);
Route::get('/materi-detail', function () {
    return view('pages.section1.materi_detail');
})->name('materi.detail');


// MASUK SECTION 1
Route::get('/courses', function () {
    return view('pages.detail.courses_detail');
});

// SECTION 2
Route::get('/info-kampus', function () {
    return view('section2.info_kampus');
});

Route::get('/direktori-kampus', [KampusController::class, 'index'])->name('section2.direktori_kampus');

Route::get('/detail-kampus/{id}', [KampusController::class, 'show'])->name('section2.detail_kampus');
// SECTION 2

require __DIR__ . '/auth.php';
