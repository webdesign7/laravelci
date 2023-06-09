<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Games extends Controller
{
    public function index(){
        return view('welcome');
    }
}
