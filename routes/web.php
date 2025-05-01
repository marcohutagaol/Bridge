<?php

use Illuminate\Support\Facades\Route;

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
// SECTION 2