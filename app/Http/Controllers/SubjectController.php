<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;
use Auth;
use App\Tutor;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$tutor_id = Auth::id();
        $tu_id =Auth::id();
        $subject = Subject::all();
        return view('subject.index',compact('subject','tu_id'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subject.create');
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


        // $request->validate([
            
        //     "name"=>"required|min:4",
            
        //     "fee" => "required",
        //     "course"=>"required|mimes:pdf",
        //     "hours" => "required"


        // ]);

        //if the file include, please upload (eg:input type="file")
        if ($request->file()) {

            //78748785858_bella.jpg
            $fileName = time().'_'.$request->course->getClientOriginalName();
            //categoryimg/78748785858_bella.jpg
            $filepath =$request->file('course')->storeAs('coursepdf',$fileName,'public');
            $path ='/storage/'.$filepath;
        }
            // save into original table
            $subject =new Subject;
            $subject->name = $request->name;
            $subject->save();

            //dd($subject->name);
            //die();

            // $tutor =Tutor::find('id');
            // $tutor->user_id = Auth::id();
            // $tutor->save();
            $authuser = Auth::user();  // take the user that login now

            $tutor = $authuser->tutor;
            // dd($authuser);
            // die();

            //dd($authuser,$tutor);
            $tutor_id = $tutor->id;
             //dd($tutor_id);
            $subject->tutors()->attach($tutor_id,['fee'=>$request->fee,'course'=>$path,'hours'=>$request->hours]);

            //dd($subject);

         
        
            
            return redirect()->route('subject.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
