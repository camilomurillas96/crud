<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crud extends Controller
{
    //

    public function index(){
        return view('index');
    }

    public function producto(){
        return view('crear');
    }
}
