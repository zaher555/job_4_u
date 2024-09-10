<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components/landing');
});
Route::get('/login', function () {
    return view('components/login-registeration/login-registeration');
});
Route::get('/home-page', function () {
    return view('components/candidate/homePage');
});
Route::get('/view-job', function () {
    return view('components/candidate/viewJob');
});
Route::get('/job-application', function () {
    return view('components/candidate/jobApplication');
});
