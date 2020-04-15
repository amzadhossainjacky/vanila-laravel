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

//student registration
Route::get('/student/registration', 'StudentController\StudentRegController@index')->name('student.reg');
Route::post('/student/registration', 'StudentController\StudentRegController@store')->name('student.reg');

//teacher registration
Route::get('/teacher/registration', 'TeacherController\TeacherRegController@index')->name('teacher.reg');
Route::post('/teacher/registration', 'TeacherController\TeacherRegController@store')->name('teacher.reg');


//admin
Route::get('/admin/home', 'AdminController\AdminHomeController@index')->name('admin.home');



//student
Route::get('/student/home', 'StudentController\StudentHomeController@index')->name('student.home');


//teacher
Route::get('/teacher/home', 'TeacherController\TeacherHomeController@index')->name('teacher.home');
