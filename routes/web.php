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
Route::get('loginstart', 'FrontendController@loginstart')->name('loginstartpage');


Route::get('singup', 'FrontendController@singup')->name('registerpage');

Route::get('loginall', 'FrontendController@loginall')->name('loginallpage');
Route::get('tutorregister', 'FrontendController@tutorregister')->name('tutorregister');
Route::get('parentregister', 'FrontendController@parentregister')->name('parentregister');


//for backend admin
Route::get('viewparent','BackendController@viewparent')->name('viewparentpage');
Route::get('viewappointment','BackendController@viewappointment')->name('viewappointmentpage');
Route::get('viewtutor','BackendController@viewtutor')->name('viewtutorpage');
Route::get('showdetail/{id}','BackendController@showdetail')->name('showdetailpage');
Route::get('index','BackendController@index')->name('indexpage');


Route::resource('tutor','TutorController');
Route::resource('user','UserController');
Route::resource('userparent','UserparentController');
Route::resource('usertutor','UsertutorController');



// for parent 
Route::get('parenthome', 'FrontendController@parenthome')->name('parenthomepage');
Route::get('parentrequest', 'FrontendController@parentrequest')->name('parentrequest');
Route::get('acceptedtutor', 'FrontendController@acceptedtutor')->name('acceptedtutor');
Route::get('booking', 'FrontendController@booking')->name('bookingpage');
Route::get('parentprofile', 'FrontendController@parentprofile')->name('parentprofile');


//for tutor
Route::get('tutorhome', 'TutorController@tutorhome')->name('tutorhomepage');
Route::get('tutorprofile','TutorController@tutorprofile')->name('tutorprofilepage');
Route::get('feedbackform','TutorController@feedbackform')->name('feedbackformpage');
Route::get('tutorappointed','TutorController@tutorappointed')->name('tutorappointedpage');
Route::get('tutorrequest','TutorController@tutorrequest')->name('tutorrequestpage');


//Authentication
Auth::routes(['register'=>false]);
// Route::get('/home', 'HomeController@index')->name('home');

