<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Contact;
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
        $nurseryCount = User::where('role', 2)->count();
        $consultantCount = User::where('role', 3)->count();
        $userCount = User::where('role', 4)->count();
        $visitorCount = VisitorModel::count();
        // dd(get_defined_vars());

        return view('frontend.pages.about.index', get_defined_vars());
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
    public function messageSend(Request $request){
        // dd($request->all());
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return redirect(route('contact'))->with('message','Your message has been sent. Thank you!');
    }

    // Service Section
    public function allProduct(){
        $products = Product::where('status','=','active')->orderBy('id', 'DESC')->get();
        // dd($products);
        return view('frontend.pages.service.products.index', compact('products'));
    }
    public function productDetails($id){
        // dd($id);
        $product = Product::findOrFail($id);
        return view('frontend.pages.service.products.details', compact('product'));
    }
    
    public function allConsultant(){
        $consultants = User::where('role','=','3')->orderBy('id', 'DESC')->get();
        return view('frontend.pages.service.consultants.index', compact('consultants'));
    }
    public function consultantDetails($id){
        $consultant = User::findOrFail($id);
        return view('frontend.pages.service.consultants.details', compact('consultant'));
    }


    public function nurseryOwners(){
        $nursery_owners = User::where('role','=','2')->orderBy('id', 'DESC')->get(); //2
        return view('frontend.pages.service.nursery-owner.index', compact('nursery_owners'));
    }
    public function nurseryOwnerDetails($id){
        $nurseryOwner = User::findOrFail($id);
        return view('frontend.pages.service.nursery-owner.details', compact('nurseryOwner'));
    }

















    // Auth Section
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
   
}
