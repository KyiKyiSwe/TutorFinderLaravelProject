<?php

namespace App\Http\Controllers;

use App\Tutor;
use Illuminate\Http\Request;
use App\Level;
use App\Grade;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }
    public function tutorhome()
    {
       
        return view('tutor.tutorhome');
    }

     public function tutorprofile()
    {
       
        return view('tutor.tutorprofile');
    }
    public function feedbackform()
    {
       
        return view('tutor.feedbackform');
    }
    public function tutorappointed()
    {
       
        return view('tutor.tutorappointed');
    }
    public function tutorrequest()
    {
       
        return view('tutor.tutorrequest');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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
        $tutor->delete();
         return redirect()->route('Backendadmin.index');
    }

      
}
