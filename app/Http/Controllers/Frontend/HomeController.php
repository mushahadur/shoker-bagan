<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('frontend.pages.home.index');
    }
    public function about(){
        return view('frontend.pages.about.index');
    }
    public function blog(){
        return view('frontend.pages.blog.index');
    }
    public function blogDetails(){
        return view('frontend.pages.blog.details');
    }
    public function faqs(){
        return view('frontend.pages.faqs.index');
    }
    public function contact(){
        return view('frontend.pages.contact.index');
    }
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
}
