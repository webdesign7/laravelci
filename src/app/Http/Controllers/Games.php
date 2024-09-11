<?php

namespace App\Http\Controllers;

class Games extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function index(){
        return view('welcome');
    }

    public function another_function_very_long(){
        $x = 0;    
        if ($x = 1) {
        return view('welcome');
        } else {
        return view('welcome');
        }
        
        return view('welcome');
    }
}
