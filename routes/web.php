<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components/landing');   //done
});
Route::get('/login', function () {
    return view('components/login-registeration/login-registeration'); //done
});
Route::get('/candidate-home-page', function () {
    return view('components/candidate/homePage'); //done
});
Route::get('/candidate-view-job', function () {
    return view('components/candidate/viewJob');//done
});
Route::get('/job-application', function () {
    return view('components/candidate/jobApplication');//done
});
Route::get('/profile', function () {
    return view('components/profile');//done
});
Route::get('/edit-Profile', function () {
    return view('components/editProfile');//done
});
// ************************************************************************************
Route::get('/employer-home-page', function () {
    return view('components/employer/homePage');//done
});
Route::get('/employer-view-job', function () {
    return view('components/employer/viewJob');//done
});
Route::get('/newJob', function () {
    return view('components/employer/newJob');//done
});
Route::get('/editJob', function () {
    return view('components/employer/editJob');//done
});
Route::get('/applications', function () {
    return view('components/employer/applications');//done
});
Route::get('/viewApplications', function () {
    return view('components/employer/viewApplications');//done
});
// ************************************************************************************
Route::get('/dashboard', function () {
    return view('components/admin/dashboard');
});
