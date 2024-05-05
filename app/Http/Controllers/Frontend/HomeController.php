<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\VisitorModel;

class HomeController extends Controller
{
    public function home(){
        Auth::logout();
        $userIP = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $timeDate = date('y-m-d h:i:sa');
        VisitorModel::insert(['ip_address'=>$userIP, 'visit_time'=>$timeDate]);
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
