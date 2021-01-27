<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/home/{id}',function ($id){
    return $id;
 return  view('home');
});
Route::get('/portfolio',function (){
 return  view('portfolio');
});
Route::get('/service',function (){
 return  view('service');
});
Route::get('/index',function (){
 return  view('index');
});
Route::get('/about',function (){
    return  view('about');
   });
Route::get('/contact',function (){
return  view('contact');
});
Route::get('/single',function (){
    return  view('single');
});
//  Route::post('/addcontact','Users@SubmitContact');
Route::post('/sendmail','Users@SubmitMail');
// Route::post('/addcontact', 'App\Http\Controllers\Users@SubmitContact');/*** different types of routing*/ 
Route::post('/addcontact',[Users::class,'SubmitContact']);/*** different types of routing*/ 
