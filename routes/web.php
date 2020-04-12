<?php

//default route for guest user/landing page..
Route::get('/', function () {
    return view('landingpage.index');
});



