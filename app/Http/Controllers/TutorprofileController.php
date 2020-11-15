<?php

namespace App\Http\Controllers;

use App\Tutor;
use Illuminate\Http\Request;
use App\Level;
use App\Grade;
use App\User;

class TutorprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutors=Tutor::all();
        return view('tutorprofile.index',compact('tutors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $levels = Level::all();
       $grades = Grade::all();
       $users = User::all();
       
       return view('tutorprofile.create',compact('levels','grades','users'));
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
        $request->validate([
        
            "photo"=>"required|mimes:jpeg,bmp,png",
            "phone"=>"required",
            "school" =>"required",
            "qualification" => "required",
            "address" =>"required",
            "city" => "required",
            "level" => "required",
            "grade" => "required",
            "user" =>"required"
        ]);

        //if the file include, please upload (eg:input type="file")
        if ($request->file()) {

            //78748785858_bella.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();
            //categoryimg/78748785858_bella.jpg
            $filepath =$request->file('photo')->storeAs('tutorimg',$fileName,'public');
            $path ='/storage/'.$filepath;
        }

            $tutor =new Tutor;
            $tutor->photo = $path;
            $tutor->phoneno = $request->phone;
            $tutor->schoolname = $request->school;
            $tutor->qualification = $request->qualification;
            $tutor->address = $request->address;
            $tutor->city = $request->city;
            $tutor->level_id =$request->level;
            $tutor->grade_id = $request->grade;
            $tutor->user_id = $request->user;

            $tutor->save();

            return redirect()->route('tutorprofile.index');
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
}
