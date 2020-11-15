<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subject.index');
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

        $request->validate([
            
            "name"=>"required|min:4",
            
            "fee" => "required",
            "course"=>"required|mimes:pdf",
            "hours" => "required"

        ]);

        //if the file include, please upload (eg:input type="file")
        if ($request->file()) {

            //78748785858_bella.jpg
            $fileName = time().'_'.$request->course->getClientOriginalName();
            //categoryimg/78748785858_bella.jpg
            $filepath =$request->file('course')->storeAs('coursepdf',$fileName,'public');
            $path ='/storage/'.$filepath;
        }

            $subject =new Subject;
            $subject->name = $request->name;


            $subject->attach(['fee'=>'fee']);
            $subject->attach(['course'=>'$path']);
            $subject->attach(['hours'=>'hours']);

        
            $subject->save();

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
