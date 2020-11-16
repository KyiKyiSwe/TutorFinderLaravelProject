<?php

namespace App\Http\Controllers;

use App\Request_tutor;
use Illuminate\Http\Request;
use App\Userparent;

class RequestTutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $requesttutor = Request_tutor::all();
       $userparent =Userparent::all();
       

       //dd($requesttutor);


       $pending_orders = Request_tutor::where('status',0)->get();
       //dd($pending_orders);

       $confirmed_orders = Request_tutor::where('status',1)->get();
       //dd($confirmed_orders);
   
        return view('requesttutor.index',compact('requesttutor','userparent','pending_orders','confirmed_orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Request_tutor  $request_tutor
     * @return \Illuminate\Http\Response
     */
    public function show(Request_tutor $request_tutor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Request_tutor  $request_tutor
     * @return \Illuminate\Http\Response
     */
    public function edit(Request_tutor $request_tutor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Request_tutor  $request_tutor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Request_tutor $request_tutor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Request_tutor  $request_tutor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request_tutor $request_tutor)
    {
        //
    }

    public function confirm($id)
    {
        $request_tutor= Request_tutor::find($id);
        $request_tutor->status =1;
        $request_tutor->save();
        return back();
    }
}
