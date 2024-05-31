<?php

namespace App\Http\Controllers\Backend\NurseryOwner;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NurseryDashboardController extends Controller
{
    public function index(){
        return view('backend.nursery-owner.dashboard');
    }
    
    public function profile(){
        $user = Auth::user();
        return view('backend.nursery-owner.pages.profile.index', compact('user'));
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
        return redirect(route('nursery_owner.profile'))->with('message', 'Active Status update to Inactive successfully.');
    }
    public function faq(){
        return view('backend.nursery-owner.pages.faq.index');
    }
}
