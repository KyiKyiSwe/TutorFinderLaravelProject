<?php

namespace App\Http\Controllers;

use App\Userparent;
use App\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;

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
        return view('parent.index',compact('userparents'));
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Userparent  $userparent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userparent $userparent)
    {
        //
    }
}
