<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\User;
use App\Models\Contact;
use App\Models\VisitorModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NurseryOwner\Product;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index()
    {
        return view('backend.admin.dashboard');
    }
    public function profile()
    {
        $user = Auth::user();
        return view('backend.admin.pages.profile.index', compact('user'));
    }
    public function profileUpdate(Request $request, $id)
    {
        // dd($request->all());
        $user = User::find($id);
        if ($request->hasFile('image')) {
            $destinationPath = 'public/admin/profile-images/';
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($destinationPath, $fileName);
            $user->image = $fileName;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->description = $request->description;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->job = $request->job;
        $user->twitter_link = $request->twitter_link;
        $user->facebook_link = $request->facebook_link;
        $user->instagram_link = $request->instagram_link;
        $user->linkedin_link = $request->linkedin_link;
        $user->update();
        return redirect(route('admin.profile'))->with('message', 'Active Status update to Inactive successfully.');

        // return view('backend.admin.pages.profile.index', compact('user'));
    }

    public function webVisitor()
    {
        $visitors = VisitorModel::orderBy('id', 'DESC')->get();
        return view('backend.admin.pages.visitor.index', ['visitors' => $visitors]);
    }

    // Service Section
    public function productList()
    {
        $products = Product::orderBy('id', 'DESC')->get();
        return view('backend.admin.pages.service.product.index', compact('products'));
    }
    public function activeStatus($id)
    {
        $inactive = "inactive";
        $findProduct = Product::find($id);
        $findProduct->status = $inactive;
        $findProduct->update();
        return redirect(route('admin.product'))->with('message', 'Active Status update to Inactive successfully.');
    }
    public function inactiveStatus($id)
    {
        $active = "active";
        $findProduct = Product::find($id);
        $findProduct->status = $active;
        $findProduct->update();
        return redirect(route('admin.product'))->with('message', 'Inactive Status update to Active successfully.');
    }
    public function productDetails($id)
    {
        $product = Product::find($id);

        return view('backend.admin.pages.service.product.details', compact('product'));
    }


    public function consultantList(){
        $consultants = User::where('role','=','3')->orderBy('id', 'DESC')->get();
        return view('backend.admin.pages.service.consultants.index', compact('consultants'));
    }
    public function nurseryList(){
        $nurseryOwners = User::where('role','=','2')->orderBy('id', 'DESC')->get();
        return view('backend.admin.pages.service.nursery-owners.index', compact('nurseryOwners'));
    }





    public function contactList()
    {
        $contacts = Contact::orderBy('id', 'DESC')->get();
        return view('backend.admin.pages.contact.index', compact('contacts'));
    }
}