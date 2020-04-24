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




//middleware
Route::group(['middleware' => ['vanilaMiddleware']], function(){


//admin

//admin profile
Route::get('/admin/home', 'AdminController\AdminHomeController@index')->name('admin.home');
Route::get('/admin/profile/edit/{id}', 'AdminController\AdminHomeController@edit')->name('admin.profileEdit');
Route::get('/admin/profile/update/{id}', 'AdminController\AdminHomeController@update')->name('admin.profileUpdate');

//admin create course
Route::get('/admin/createCourse', 'AdminController\AdminCreateCourseController@index')->name('admin.createCourse');
Route::post('/admin/createCourse', 'AdminController\AdminCreateCourseController@store')->name('admin.createCourse');
Route::get('/admin/viewCourse', 'AdminController\AdminCreateCourseController@create')->name('admin.viewCourse');
Route::get('/admin/destroyCourse/{id}', 'AdminController\AdminCreateCourseController@destroy')->name('admin.destroyCourse');
Route::get('/admin/editCourse/{id}', 'AdminController\AdminCreateCourseController@edit')->name('admin.editCourse');
Route::post('/admin/updateCourse/{id}', 'AdminController\AdminCreateCourseController@update')->name('admin.updateCourse');

//admin approve user
Route::get('/admin/approve/student', 'AdminController\AdminApproveUserController@index')->name('admin.approveStudent');
Route::get('/admin/approve/student/{id}', 'AdminController\AdminApproveUserController@approveStudent')->name('admin.confirmApproveStudent');
Route::get('/admin/deny/student/{id}', 'AdminController\AdminApproveUserController@denyStudent')->name('admin.denyStudent');


Route::get('/admin/approve/teacher', 'AdminController\AdminApproveUserController@create')->name('admin.approveTeacher');
Route::get('/admin/approve/teacher/{id}', 'AdminController\AdminApproveUserController@approveTeacher')->name('admin.confirmApproveTeacher');
Route::get('/admin/deny/teacher/{id}', 'AdminController\AdminApproveUserController@denyTeacher')->name('admin.denyTeacher');


//view student info

Route::get('/admin/viewStudent', 'AdminController\AdminViewStudentController@index')->name('admin.viewStudent');

/* Route::post('/admin/viewStudent', 'AdminController\AdminViewStudentController@search')->name('admin.viewStudent'); */

Route::get('/admin/viewAllStudent', 'AdminController\AdminViewStudentController@getData')->name('admin.viewAllStudent');

Route::post('/admin/viewStudent/{id}', 'AdminController\AdminViewStudentController@destroy')->name('admin.deleteStudent');

//view teacher info
Route::get('/admin/viewTeacher', 'AdminController\AdminViewTeacherController@index')->name('admin.viewTeacher');
Route::get('/admin/viewAllTeacher', 'AdminController\AdminViewTeacherController@getData')->name('admin.viewAllTeacher');
Route::post('/admin/viewTeacher/{id}', 'AdminController\AdminViewTeacherController@destroy')->name('admin.deleteTeacher');

//Notice upload

Route::get('/admin/noticeUpload', 'AdminController\AdminNoticeController@index')->name('admin.noticeUpload');

Route::post('/admin/noticeUpload', 'AdminController\AdminNoticeController@store')->name('admin.noticeUpload');




//Marks upload

Route::get('/admin/marksUpload', 'AdminController\AdminCreateMarksController@index')->name('admin.marksCreate');

Route::post('/admin/marksUpload', 'AdminController\AdminCreateMarksController@store')->name('admin.marksCreate');

//Entry Salary

Route::get('/admin/entrySalary', 'AdminController\AdminEntrySalaryController@index')->name('admin.entrySalary');
Route::post('/admin/entrySalary', 'AdminController\AdminEntrySalaryController@store')->name('admin.entrySalary');

Route::get('/admin/viewSalary', 'AdminController\AdminEntrySalaryController@create')->name('admin.viewSalary');

Route::get('/admin/editSalary/{id}', 'AdminController\AdminEntrySalaryController@edit')->name('admin.editSalary');

Route::post('/admin/editSalary/{id}', 'AdminController\AdminEntrySalaryController@update')->name('admin.updateSalary');




});





//student
Route::get('/student/home', 'StudentController\StudentHomeController@index')->name('student.home');


//teacher
Route::get('/teacher/home', 'TeacherController\TeacherHomeController@index')->name('teacher.home');
