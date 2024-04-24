<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        return view('activities');
    }
    public function services (){
        return view('services');
    }
    public function proyects (){
        return view('proyects');
    }

}
