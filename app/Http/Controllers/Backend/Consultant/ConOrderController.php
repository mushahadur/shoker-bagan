<?php

namespace App\Http\Controllers\Backend\Consultant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConOrderController extends Controller
{
    public function index(){
        return view('backend.user.pages.order.index');
    }
    public function orderHistory(){
        return view('backend.user.pages.order.history');
    }
}
