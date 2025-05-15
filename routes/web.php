<?php

use App\Http\Controllers\UniversitasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('pages.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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
Route::get('/topic-detail', function () {
    return view('pages.section1.topic_detail');
});
// MASUK SECTION 1

Route::get('/exam', function () {
    return view('pages.detail.exam_detail');
});

Route::get('/module', function () {
    return view('pages.detail.module_detail');
});
// HOME

// SECTION 2
Route::get('/info-kampus', function () {
    return view('section2.info_kampus');
});

Route::get('/direktori-kampus', [UniversitasController::class, 'index'])->name('section2.direktori_kampus');

Route::get('/detail-kampus/{id}', [UniversitasController::class, 'show'])->name('section2.detail_kampus');
// SECTION 2

require __DIR__.'/auth.php';
