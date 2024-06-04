<?php

namespace App\Http\Controllers\Backend\User;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NurseryOwner\Product;
use Illuminate\Support\Facades\Auth;

class UserOrderController extends Controller
{
    public function index(){
        $userId = Auth::user()->id;
        $orders = Order::with('user', 'product')->where('user_id', $userId)->orderBy('id', 'DESC')->get();
        
        // dd( $orders->user->name );
        return view('backend.user.pages.order.index',compact('orders'));
    }
    public function orderHistory(){
        return view('backend.user.pages.order.history');
    }
    public function confirmOrder($user_id, $product_id){
        $product = Product::findOrFail($product_id);
        $order = new Order();
        $order->user_id   = $user_id;
        $order->product_id = $product_id;
        $order->name     = $product->name;
        $order->category = $product->category;
        $order->price    = $product->price;
        $check = $order->save();
        if($check){
            return redirect(route('user.orderList'));
        }
        else{
            return "Order Not Confirm ! Please try again..";
        }
    }
}
