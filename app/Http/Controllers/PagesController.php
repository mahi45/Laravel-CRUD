<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $page_name = "Home Page";
        return view('home', compact('page_name'));
    }

    public function about(){
        $page_name = 'About Page';
        return view('/about', compact('page_name'));
    }

    public function contact(){
        $page_name = 'Contact Page';
        return view('/contact', compact('page_name'));
    }
}
