<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //frontend

    public function frontend()
    {
    	return view('frontend.home');
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
        return view('parent.requestdemo');
    }

    public function acceptedtutor()
    {
       return view('parent.acceptedtutor');
    }

    public function booking(){
        return view('parent.booking');
    }

    // public function parentprofile()
    // {
    //     return view('parent.create');
    // }
}
