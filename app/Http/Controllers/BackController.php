<?php

namespace App\Http\Controllers;

use App\Tutor;
use Illuminate\Http\Request;
use App\Level;
use App\Grade;

class BackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutors = Tutor::all();
        return view('tutor.index',compact('tutors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tutor = Tutor::find($id);
        return view('tutor.showdetail',compact('tutor'));
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
     * @param  \App\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function show(Tutor $tutor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutor $tutor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tutor $tutor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutor $tutor)
    {
        //
    }

    public function viewparent()
    {

        return view('backendadmin.viewparent');
    }
      public function viewappointment()
    {

        return view('backendadmin.viewappointment');
    }
     public function viewtutor()
    {
       
        $tutors=Tutor::all();
        $levels=Level::all();
        $grades=Grade::all();

        return view('backendadmin.index',compact('tutors','levels','grades'));
    }
}
