<?php

namespace App\Http\Controllers;

use App\Tutor;
use Illuminate\Http\Request;
use App\Level;
use App\Grade;
use App\User;
use App\Request_tutor;
use App\Userparent;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users =User::all();
        $tutors=Tutor::all();
        $grades = Grade::all();
        $levels = Level::all();
        return view('backendadmin.index',compact('tutors','users','grades','levels'));
    }
    
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $levels = Level::all();
       // $grades = Grade::all();
       // $users = User::all();
       
       // return view('tutor.create',compact('levels','grades','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function show(Tutor $tutor)
    {
       return view('Backendadmin.showdetail',compact('tutor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutor $tutor)
    {
        // $levels = Level::all();
       // $grades = Grade::all();
       // $users = User::all();
       // return view('tutor.edit',compact('tutor','levels','grades','users'));
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
        // $request->validate([
        
        //     "photo"=>"required|mimes:jpeg,bmp,png",
        //     "phone"=>"required",
        //     "school" =>"required",
        //     "qualification" => "required",
        //     "address" =>"required",
        //     "city" => "required",
        //     "level" => "required",
        //     "grade" => "required",
        //     "name" =>"required"
        // ]);

        // //if the file include, please upload (eg:input type="file")
        // if ($request->file()) {

        //     //78748785858_bella.jpg
        //     $fileName = time().'_'.$request->photo->getClientOriginalName();
        //     //categoryimg/78748785858_bella.jpg
        //     $filepath =$request->file('photo')->storeAs('tutorimg',$fileName,'public');
        //     $path ='/storage/'.$filepath;
        // }else{
        //     $path=$request->oldphoto;
        // }

        //     $tutor =new Tutor;
        //     $tutor->photo = $path;
        //     $tutor->phone = $request->phone;
        //     $tutor->school = $request->school;
        //     $tutor->qualification = $request->qualification;
        //     $tutor->address = $request->address;
        //     $tutor->city = $request->city;
        //     $tutor->level_id =$request->level;
        //     $tutor->grade_id = $request->grade;
        //     $tutor->user_id = $request->user;

        //     $item->save();

     return redirect()->route('tutor.index');
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
        return redirect()->route('tutor.index');
    }

    
    public function tutorappointed()
    {
       
        return view('tutor.tutorappointed');
    }
  

    public function viewparent()
    {

        return view('tutor.viewparent');
    }

     
     

      
}
