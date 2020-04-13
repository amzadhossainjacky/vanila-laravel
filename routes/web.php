<?php

//default route for guest user/landing page..
Route::get('/', function () {
    return view('landingpage.index');
})->name('landingpage');


//login route

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@store')->name('login');

//logout route

Route::get('/logout', 'LogoutController@index')->name('logout');

//admin
Route::get('/admin/home', 'AdminController\AdminHomeController@index')->name('admin.home');

//
Route::get('/student/home', 'StudentController\StudentHomeController@index')->name('student.home');
