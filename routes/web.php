<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





//frontend
Route::get('/', 'FrontendController@frontend')->name('frontendpage');
Route::get('about', 'FrontendController@about')->name('aboutpage');
Route::get('contact', 'FrontendController@contact')->name('contactpage');



Route::get('singup', 'FrontendController@singup')->name('registerpage');
Route::get('loginuser','FrontendController@loginuser')->name('loginuserpage');



Route::get('tutorregister', 'FrontendController@tutorregister')->name('tutorregister');
Route::get('parentregister', 'FrontendController@parentregister')->name('parentregister');


//for backend admin
Route::get('viewparent','BackController@viewparent')->name('viewparentpage');
Route::get('viewappointment','BackController@viewappointment')->name('viewappointmentpage');
Route::get('viewtutor','BackController@viewtutor')->name('viewtutorpage');
Route::get('showdetail/{id}','BackController@showdetail')->name('showdetailpage');
Route::get('index','BackController@index')->name('indexpage');
Route::post('confirm/{id}','RequestTutorController@confirm')->name('requesttutor.confirm');


Route::resource('tutor','TutorController');
Route::resource('user','UserController');
Route::resource('userparent','UserparentController');
Route::resource('usertutor','UsertutorController');
Route::resource('subject','SubjectController');
Route::resource('tutorprofile','TutorprofileController');

Route::resource('feedback','feedbackreplyController');
Route::resource('backend','BackController');
Route::resource('requesttutor','RequestTutorController');





// for parent 


Route::get('parentrequest', 'FrontendController@parentrequest')->name('parentrequest');
Route::get('acceptedtutor', 'FrontendController@acceptedtutor')->name('acceptedtutor');
Route::get('booking', 'FrontendController@booking')->name('bookingpage');
Route::post('filter', 'FrontendController@filterGrade')->name('filterGrade');
Route::get('tutordetail/{id}', 'FrontendController@tutordetail')->name('tutordetail');




//for tutor

// Route::get('feedbackform','TutorController@feedbackform')->name('feedbackformpage');
Route::get('tutorappointed','TutorController@tutorappointed')->name('tutorappointedpage');
// Route::get('tutorrequest','TutorController@tutorrequest')->name('tutorrequestpage');



//Authentication
Auth::routes(['register'=>false]);
Route::get('/home', 'HomeController@index')->name('home');

