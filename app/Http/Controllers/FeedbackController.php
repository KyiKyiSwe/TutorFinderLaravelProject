<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;
use Auth;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedback = Feedback::all();
        return view('feedback.index',compact('feedback'));
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        //
    }

    public function comment(Request $request)
    {
        // dd($request);

        // validation

        // data store
        $myfeedback = json_decode($request->feedback);
        $comment = $request->comment;
        $date = date('Y-m-d');
        

        foreach ($myfeedback as $row) {
            
            
                $tutor_id = $row->id;
                
            

                $subject_id = $row->subject; 
            
           
        }
        

        $feedback = new Feedback;
        $feedback->comment = $comment;
        $feedback->date = $date;
        $feedback->tutor_id = $tutor_id;
        $feedback->subject_id = $subject_id;


        $authuser = Auth::user();
        $parent = $authuser->userparent;
        $userparent_id = $parent->id;
        $feedback->userparent_id = $userparent_id;

        $feedback->save();
        
        // foreach ($myorder as $row) { 
        //     $order->items()->attach($row->id,['quantity'=>$row->qty]);
        // }

        return response()
            ->json(['msg' => 'Successful You Order!']);
    }
}
