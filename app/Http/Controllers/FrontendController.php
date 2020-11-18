<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grade;
use App\Tutor;
use App\User;
use App\Subject;
use App\Request_tutor;
use Auth;
use App\Feedback;


class FrontendController extends Controller
{
    //frontend

    public function frontend()
    {   
        $tutors = Tutor::take(6)->get();
    	return view('frontend.home',compact('tutors'));
    }

    public function about()
    {
    	return view('frontend.about');
    }

    public function contact()
    {
    	return view('frontend.contact');
    }

  
    public function singup()
    {
         return view('frontend.singup');
    }
    public function loginuser()
    {
         return view('frontend.loginuser');
    }


    public function tutorregister()
    {
        return view('frontend.registertutor');
    }

    public function parentregister()
    {
        return view('frontend.registerparent');
    }

    //parent
    // public function parenthome()
    // {
        
    //     return view('parent.index');
    // }
    
    public function parentrequest()
    {  
       $authuser = Auth::user();  // take the user that login now
       $userparent = $authuser->userparent;
       //dd($userparent);
       $parentid = $userparent->id; 
       $requesttutor = Request_tutor::all();
       $tutor =Tutor::all();
       $pending_orders = Request_tutor::where('status',0)->get();
       $confirmed_orders = Request_tutor::where('status',1)->get();
       //dd($confirmed_orders);
        return view('parent.requestdemo',compact('requesttutor','tutor','pending_orders','confirmed_orders','parentid'));
    }

    public function acceptedtutor()
    {
       return view('parent.acceptedtutor');
    }

    public function booking()
    {   
        $grades = Grade::all();
        $tutors = Tutor::all();
        $users = User::all();
        return view('parent.booking',compact('grades','tutors','users'));
    }

    // public function parentprofile()
    // {
    //     return view('parent.create');
    // }
    public function filterGrade(Request $request)
    {
        $gid = $request->gid;
        $tutors = Tutor::where('grade_id',$gid)->with('user')->get();
        // $tutorid = Tutor::find($id);
        // $username = Tutor::where('user_id',$tutorid);
        // dd($username);
        return $tutors;

    }

    public function tutordetail($id)
    {   
        $tutor = Tutor::find($id);
        $subject = Subject::find($id);
        return view('parent.tutordetail',compact('tutor','subject'));
    }

    public function parentfeedback($id)
    {
        return view('parent.feedback');
    }

    public function newfeedback()
    {   
        $feedback = Feedback::all();
        return view('feedback.index',compact('feedback'));
    }
}
