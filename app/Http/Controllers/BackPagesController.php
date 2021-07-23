<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackPagesController extends Controller
{
    public function dashboard(){
        return view('backend.dashboard');
    }

    public function orders(){
        return view('backend.orders');
    }

    public function addProduct(){
        return view('backend.add-account');
    }

    public function editProduct(){
        return view('backend.edit-product');
    }

    public function login(){
        return view('backend.login');
    }
}
