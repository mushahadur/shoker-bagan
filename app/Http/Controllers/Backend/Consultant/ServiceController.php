<?php

namespace App\Http\Controllers\Backend\Consultant;

use App\Models\Consultant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::user()->id;
        $check = Consultant::where('user_id', $userId)->first();
        // dd( $check);
        $serviceList = Consultant::where('user_id', $userId)->orderBy('id', 'DESC')->get();
        // dd( $serviceList);
        return view('backend.consultant.pages.service.index', compact('serviceList', 'check'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.consultant.pages.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $service = new Consultant();
        if ($request->hasFile('certificate')) {
            $destinationPath = 'public/consultant/certificates/';
            $certificate = $request->file('certificate');
            $fileName = time() . '.' . $certificate->getClientOriginalExtension();
            $certificate->storeAs($destinationPath, $fileName);
            $service->certificate = $fileName;
        }

        $service->user_id = $request->user_id;
        $service->title = $request->title;
        $service->service = $request->service;
        $service->morning_time = $request->mn_time;
        $service->evening_time = $request->ev_time;
        $service->night_time = $request->nt_time;
        $service->save();
        return redirect(route('service.index'))->with('message', 'Add Services successfully !.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
