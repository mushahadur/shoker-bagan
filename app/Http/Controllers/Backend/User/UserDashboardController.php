<?php

namespace App\Http\Controllers\Backend\User;

use App\Models\User;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserDashboardController extends Controller
{
    
    public function index(){
        return view('backend.user.dashboard');
        $sessionId = Session::getId();
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
        $userId = Auth::user()->id;
        $appointments = DB::table('appointments')
            ->join('users as u', 'appointments.user_id', '=', 'u.id') // User
            ->join('users as c', 'appointments.consultant_id', '=', 'c.id') // Consultant
            ->select(
                'appointments.*',
                'u.name as user_name',
                'u.email as user_email',
                'u.phone as user_phone',
                'u.description as user_description',
                'c.name as consultant_name',
                'c.email as consultant_email',
                'c.phone as consultant_phone',
                'c.description as consultant_description',
                'consultants.title as consultant_title',
                'consultants.service as consultant_service',
                'consultants.morning_time as consultant_morning_time',
                'consultants.evening_time as consultant_evening_time',
                'consultants.night_time as consultant_night_time',
                'consultants.certificate as consultant_certificate'
            )
            ->join('consultants', 'appointments.consultant_id', '=', 'consultants.user_id') // Join consultants table
            ->where('appointments.user_id', $userId)
            ->where('u.role', 4) // Ensure 'u' is a user with role 4
            ->where('c.role', 3) // Ensure 'c' is a consultant with role 3
            ->orderBy('appointments.id', 'DESC')
            ->get();
        return view('backend.user.pages.consultant.index',compact('appointments'));
    }
    public function contactConsultantsHistory(){
        return view('backend.user.pages.consultant.contact-history');
    }
}
