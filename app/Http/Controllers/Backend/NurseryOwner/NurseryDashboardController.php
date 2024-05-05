<?php

namespace App\Http\Controllers\Backend\NurseryOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NurseryDashboardController extends Controller
{
    public function index(){
        return view('backend.nursery-owner.dashboard');
    }
    public function profile(){
        return view('backend.nursery-owner.pages.profile.index');
    }
}
