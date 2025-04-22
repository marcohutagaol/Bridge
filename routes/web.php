<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/topic-listing', function () {
    return view('pages.topic_listing');
});

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/home', function () {
    return view('pages.index');
});

