<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('backend.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $loggedInUerRole = $request->user()->role;

        if($loggedInUerRole == 1){
            Session::put('user_id', $request->user()->id);
            Session::put('user_name', $request->user()->name);
            return redirect()->intended(route('admin.dashboard', absolute: false));
        }
        elseif($loggedInUerRole == 2){
            Session::put('user_id', $request->user()->id);
            Session::put('user_name', $request->user()->name);
            return redirect()->intended(route('nurseryOwner.dashboard', absolute: false));
        }
        elseif($loggedInUerRole == 3){
            Session::put('user_id', $request->user()->id);
            Session::put('user_name', $request->user()->name);
            return redirect()->intended(route('consultant.dashboard', absolute: false));
        }
        elseif($loggedInUerRole == 4){
            Session::put('user_id', $request->user()->id);
            Session::put('user_name', $request->user()->name);
            return redirect()->intended(route('user.dashboard', absolute: false));
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
