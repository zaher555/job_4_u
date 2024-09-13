<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components/landing');
});
Route::get('/login', function () {
    return view('components/login-registeration/login-registeration');
});
Route::get('/candidate-home-page', function () {
    return view('components/candidate/homePage');
});
Route::get('/candidate-view-job', function () {
    return view('components/candidate/viewJob');
});
Route::get('/job-application', function () {
    return view('components/candidate/jobApplication');
});
Route::get('/profile', function () {
    return view('components/profile');
});
Route::get('/edit-Profile', function () {
    return view('components/editProfile');
});
// ************************************************************************************
Route::get('/employer-home-page', function () {
    return view('components/employer/homePage');
});
Route::get('/employer-view-job', function () {
    return view('components/employer/viewJob');
});
