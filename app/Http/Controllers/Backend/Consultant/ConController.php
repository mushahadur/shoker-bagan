<?php

namespace App\Http\Controllers\Backend\Consultant;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ConController extends Controller
{
    public function index(){
        return view('backend.consultant.dashboard');
        $sessionId = Session::getId();
    }
    public function profile(){
        $user = Auth::user();
        return view('backend.consultant.pages.profile.index', compact('user'));
    }
    public function profileUpdate(Request $request, $id)
    {
        $user = User::find($id);
        if ($request->hasFile('image')) {
            $destinationPath = 'public/consultant/profile-images/';
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
        return redirect(route('consultant.profile'))->with('message', 'Active Status update to Inactive successfully.');
    }
    public function faq(){
        return view('backend.consultant.pages.faq.index');
    }

    public function consultantContact(){
        $userId = Auth::user()->id;

        // Join the appointments, users, and consultants tables
        $appointments = DB::table('appointments')
            ->join('users as u', 'appointments.user_id', '=', 'u.id') // User
            ->join('users as c', 'appointments.consultant_id', '=', 'c.id') // Consultant
            ->select(
                'appointments.*',
                'u.name as user_name',
                'u.email as user_email',
                'u.phone as user_phone',
                'u.description as user_description',
                'u.image as user_image', // Assuming there is an image field for users
                'c.name as consultant_name',
                'c.email as consultant_email',
                'c.phone as consultant_phone',
                'c.description as consultant_description'
            )
            ->where('appointments.consultant_id', $userId)
            ->where('c.role', 3) // Ensure 'c' is a consultant with role 3
            ->orderBy('appointments.id', 'DESC')
            ->get();

            // dd($appointments);

        return view('backend.consultant.pages.contact.index', compact('appointments'));
    }
}
