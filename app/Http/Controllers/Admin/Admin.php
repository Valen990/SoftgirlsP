<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Admin extends Controller
{
    function index(){
        return view('TestView');
    }

    function test(){
        return view('AdminView.Teacher');
    }

    function example(){
        return view('AdminView.teacher_list');
    }
}