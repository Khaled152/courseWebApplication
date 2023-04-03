<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin;

Route::get('/', function () {
    return view("admin.admin-dashboard") ;
});



Route::group(['namespace'=>'Admin' ], function(){
    Route::get('/courses','CoursesController@index')->name('admin-courses');
});




