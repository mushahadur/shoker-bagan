<?php

namespace App\Http\Controllers\Frontend;

use App\Models\VisitorModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NurseryOwner\Product;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){
        // Visitor IP track
        $userIP = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $timeDate = date('y-m-d h:i:sa');
        VisitorModel::insert(['ip_address'=>$userIP, 'visit_time'=>$timeDate]);

        //Get Products
        $products = Product::orderBy('id', 'DESC')->get();
        return view('frontend.pages.home.index', compact('products'));
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
