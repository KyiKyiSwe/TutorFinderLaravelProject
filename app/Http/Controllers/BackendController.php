<?php

namespace App\Http\Controllers;

use App\Tutor;
use App\Level;
use App\Grade;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index()
    {
    	$tutors = Tutor::all();
        return view('Backendadmin.index',compact('tutors'));
    }

    public function showdetail(Tutor $id)
    {
    	$tutor = Tutor::find($id);
        return view('Backendadmin.showdetail',compact('tutor'));
        
    }

    public function viewparent()
    {

        return view('Backendadmin.viewparent');
    }
      public function viewappointment()
    {

        return view('Backendadmin.viewappointment');
    }
     public function viewtutor()
    {
       
        $tutors=Tutor::all();
        $levels=Level::all();
        $grades=Grade::all();

        return view('Backendadmin.index',compact('tutors','levels','grades'));
    }



    
}
