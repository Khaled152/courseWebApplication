<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin;

Route::get('/', function () {
    return view("admin.admin-dashboard") ;
})->name('admin-home');

Route::get('/students', function () {
    return view("admin.admin-student-list") ;
})->name("admin-students");

Route::get('/instructors', function () {
    return view("admin.admin-instructor-list") ;
})->name("admin-instructors");

Route::get('/instructors/requests', function () {
    return view("admin.admin-instructor-request") ;
})->name("admin-instructors-requests");

Route::group(['namespace'=>'Admin' ], function(){
        #courses
    Route::get('/courses','CoursesController@index')->name('admin-courses');
    Route::get('/courses/add-course','CoursesController@create')->name('admin-course-create');

    #caregory
    Route::get('/courses/categories','CategoryController@index')->name('admin-courses-categories');
    Route::get('/courses/add-category','CategoryController@create')->name('admin-category-create');
});




