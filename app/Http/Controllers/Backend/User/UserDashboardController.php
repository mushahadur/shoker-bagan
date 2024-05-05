<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    
    public function index(){
        return view('backend.user.dashboard');
    }
    public function profile(){
        return view('backend.user.pages.profile.index');
    }
}
