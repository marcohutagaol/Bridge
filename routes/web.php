<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UtbkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MateriController;

Route::get('/', [AdminController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('index');

Route::get('/profil', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});


// UTBK Routes
Route::get('/utbk', [UtbkController::class, 'index'])->name('utbk.index');
Route::get('/materi/{sub_kategori}', [UtbkController::class, 'show'])->name('materi.detail');
Route::post('/utbk/submit-jawaban', [UtbkController::class, 'submitJawaban'])->name('utbk.submit');

// Alternative route jika menggunakan nama lain
Route::get('/topic-detail', [UtbkController::class, 'index'])->name('topic.detail');

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



Route::get('/message', function () {
    return view('pages.message');
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

Route::get('/materi/{sub_kategori}', [MateriController::class, 'show'])->name('materi.detail');

Route::post('/submit-jawaban', [UtbkController::class, 'submitJawaban'])->name('jawaban.submit');

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
