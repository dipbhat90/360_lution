<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class solutionController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function service(){
        return view('service');
    }
    public function package(){
        return view('package');
    }
    public function project(){
        return view('project');
    }
    public function team(){
        return view('team');
    }
    public function testimonial(){
        return view('testimonial');
    }
    public function contact(){
        return view('contact');
    }
    public function career(){
        return view('career');
    }
   
}
