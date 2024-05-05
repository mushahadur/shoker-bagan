<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\VisitorModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NurseryOwner\Product;

class DashboardController extends Controller
{
   
    public function index(){
        return view('backend.admin.dashboard');
    }
    public function profile(){
        return view('backend.admin.pages.profile.index');
    }
    public function webVisitor(){
        $visitors = VisitorModel::orderBy('id', 'DESC')->get();
        return view('backend.admin.pages.visitor.index', ['visitors' => $visitors]);
    }
    public function productList(){
        $products = Product::orderBy('id', 'DESC')->get();
        return view('backend.admin.pages.product.index', compact('products'));
    }
}

