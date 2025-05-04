<?php

use App\Http\Controllers\Universitas;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('pages.index');
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

Route::get('/topic-detail', function () {
    return view('pages.topic_detail');
});

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

Route::get('/direktori-kampus', [Universitas::class, 'index'])->name('section2.direktori_kampus');

Route::get('/detail-kampus/{id}', [Universitas::class, 'show'])->name('section2.detail_kampus');
// SECTION 2