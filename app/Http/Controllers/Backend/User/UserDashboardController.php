<?php

namespace App\Http\Controllers\Backend\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    
    public function index(){
        return view('backend.user.dashboard');
    }
    public function profile(){
        $user = Auth::user();
        return view('backend.user.pages.profile.index', compact('user'));
        // return view('backend.user.pages.profile.index');
    }
    public function profileUpdate(Request $request, $id)
    {
        $user = User::find($id);
        // dd($request->all());
        if ($request->hasFile('image')) {
            $destinationPath = 'public/user/profile-images/';
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
        return redirect(route('user.profile'))->with('message', 'Active Status update to Inactive successfully.');
    }
    public function faq(){
        return view('backend.user.pages.faq.index');
    }
    public function contactConsultants(){
        return view('backend.user.pages.consultant.index');
    }
    public function contactConsultantsHistory(){
        return view('backend.user.pages.consultant.contact-history');
    }
}
