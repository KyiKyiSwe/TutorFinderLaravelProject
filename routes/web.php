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


Route::get('home', 'FrontendController@home')->name('homepage');

//frontend
Route::get('/', 'FrontendController@frontend')->name('frontendpage');
Route::get('about', 'FrontendController@about')->name('aboutpage');
Route::get('contact', 'FrontendController@contact')->name('contactpage');
Route::get('login', 'FrontendController@login')->name('loginpage');
Route::get('register', 'FrontendController@register')->name('registerpage');
Route::get('loginall', 'FrontendController@loginall')->name('loginallpage');
Route::get('tutorregister', 'FrontendController@tutorregister')->name('tutorregister');
Route::get('parentregister', 'FrontendController@parentregister')->name('parentregister');



Route::resource('tutor','TutorController');


//Authentication
Auth::routes(['register'=>false]);
Route::get('/home', 'HomeController@index')->name('home');

