<?php

namespace App\Http\Controllers\Backend\User;

use App\Models\Order;
use App\Models\Consultant;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\NurseryOwner\Product;
use Illuminate\Support\Facades\Auth;

class UserOrderController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;

        $orders = DB::table('orders')
            ->join('users as nurseries', 'orders.nursery_id', '=', 'nurseries.id')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $userId)
            ->select(
                'orders.*',
                'nurseries.name as nursery_name',
                'nurseries.phone as nursery_phone',
                'products.name as product_name',
                'products.price as product_price',
                'products.image as product_image'
            )
            ->orderBy('orders.id', 'DESC')
            ->get();
        return view('backend.user.pages.order.index', compact('orders'));
    }
    public function orderHistory()
    {
        return view('backend.user.pages.order.history');
    }
    public function confirmOrder($nursery_id, $product_id)
    {
        $userId = Auth::user()->id;
        $product = Product::findOrFail($product_id);
        $order = new Order();
        $order->user_id = $userId;
        $order->nursery_id = $nursery_id;
        $order->product_id = $product_id;
        $order->name = $product->name;
        $order->category = $product->category;
        $order->price = $product->price;
        $check = $order->save();
        if ($check) {
            return redirect(route('user.orderList'));
        } else {
            return "Order Not Confirm ! Please try again..";
        }
    }


    public function confirmAppointment($user_id, $consultant_id)
    {
        $appointment = new Appointment();
        $appointment->user_id = $user_id;
        $appointment->consultant_id = $consultant_id;
        $check = $appointment->save();
        if ($check) {
            return redirect(route('user.contactConsultants'));
        } else {
            return "Appointment Not Confirm ! Please try again..";
        }
    }
}