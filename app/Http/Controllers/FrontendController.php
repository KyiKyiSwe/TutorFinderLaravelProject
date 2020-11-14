<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function parenthome()
    {
        
    	return view('parent.parenthome');
    }

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

    public function loginstart()
    {
        return view('frontend.loginstart');
    }

    public function register()
    {
         return view('frontend.register');
    }

    public function loginall()
    {
        return view('frontend.loginall');
    }

    public function tutorregister()
    {
        return view('frontend.registertutor');
    }

    public function parentregister()
    {
        return view('frontend.registerparent');
    }
}
