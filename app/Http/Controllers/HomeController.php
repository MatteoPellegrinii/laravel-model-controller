<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function list(){
        $movies = \App\Movie::all();
        return view('list', compact('movies'));
    }
};