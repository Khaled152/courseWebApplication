<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
   
    public function index(Request $req){

        
        return view("admin.admin-course-list");
    }


}
