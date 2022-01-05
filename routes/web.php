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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'WelcomeController@index');
Route::get('/courses', 'WelcomeController@courses')->name('courses');
Route::get('/about', 'WelcomeController@about');
Route::get('/faq', 'WelcomeController@faq');
Route::get('/gelary', 'WelcomeController@gelary');
Route::get('/blog', 'WelcomeController@blog');
Route::get('/contact', 'WelcomeController@contact');
Route::get('/addmision', 'WelcomeController@addmision');
Route::get('/stafff', 'WelcomeController@staff');

Route::group(['middleware'=>['admin','auth']], function(){
  // Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
  Route::get('/dashboard', 'AdminController@index');
  Route::resource('staff', 'StaffController');
  //Route::get('/staff/create', 'StaffController@create');
   //Route::get('/staff/index', 'StaffController@index');
 // Route::post('/staff/create', 'StaffController@store');
  
  //Route::get('/slider/all', 'SliderController@index');
  //Route::resource('tamilStaff', 'TamilStaffController');
   
});
Route::group(['middleware'=>['auth']], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    
});
//Route::get('/task/index', 'TaskController@index');

Route::resource('labimage','LabimageController');
Auth::routes();
Route::fallback(fn()=>view('404'));
 //Route::resource('tamilStaff', 'TamilStaffController');