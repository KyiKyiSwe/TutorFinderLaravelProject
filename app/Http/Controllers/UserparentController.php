<?php

namespace App\Http\Controllers;

use App\Userparent;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use App\Tutor;
use Auth;

class UserparentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userparents = Userparent::all();
        $tutors = Tutor::take(6)->get();
        return view('parent.index',compact('userparents','tutors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('parent.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        // Validation
        $request-> validate([
            "photo" => "required|mimes:jpeg,bmp,png", // a.jpg
            "phone" => "required",
            "address" => "required",
            "city" => "required",
            
        ]);

        // If include file, upload
        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // brandimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('parentimg', $fileName, 'public');

            $path = '/storage/'.$filePath;

        }

        // store
        $parent = new Userparent;
        $parent->photo = $path;
        $parent->phoneno = $request->phone;
        $parent->address = $request->address;
        $parent->city = $request->city;
        $parent->user_id = Auth::id();
        $parent->save();

        // redirect
        return redirect()->route('userparent.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Userparent  $userparent
     * @return \Illuminate\Http\Response
     */
    public function show(Userparent $userparent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Userparent  $userparent
     * @return \Illuminate\Http\Response
     */
    public function edit(Userparent $userparent)
    {
        $userparents = Userparent::all();
        $users = User::all();
        return view('parent.edit',compact('userparents','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Userparent  $userparent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Userparent $userparent)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Userparent  $userparent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userparent $userparent)
    {   
        $parents = Userparent::all();
        $userparent->delete();
        //return redirect()->route('parent.index');
        return view('Backendadmin.viewparent');
    }
}
