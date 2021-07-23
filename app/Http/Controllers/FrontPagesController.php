<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPagesController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function about(){
        return view('frontend.about');
    }

    public function models(){
        return view('frontend.model');
    }

    public function modelDetails(){
        return view('frontend.model-details');
    }

    public function blog(){
        return view('frontend.blog');
    }

    public function blogDetails(){
        return view('frontend.blog-details');
    }

    public function service(){
        return view('frontend.service');
    }

    public function contact(){
        return view('frontend.contact');
    }
}
