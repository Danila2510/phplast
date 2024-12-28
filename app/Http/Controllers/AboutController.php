<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index(){
        $name = "Stepan";
        return view('about', compact('name'));
    }
}
