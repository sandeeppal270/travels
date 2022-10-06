<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\ReportJourneyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;




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
    return view('welcome');
});
Route::get('/emailview', function () {
    return view('emails.edit');
});
//mam project controller
Route::controller(MyController::class)->group(function(){
     Route::get('/index','index');
     Route::get('/404','badrequest');
     Route::get('/blank','blank');
     Route::get('/button','button');
     Route::get('/chart','chart');
     Route::get('/element','element');
     Route::get('/form','form');
     Route::get('/signin','signin')->name('signin.page');
     Route::get('/signup','signup')->name('signup.page');
     Route::get('/table','table');
     Route::get('/typography','typography');
     Route::get('/widget','widget');
    //  Route::get('/email','email')->name('email.page');
     //Route::get('/emailpage','emailpage')->name('emailpage.page');



});
// Route::controller(EmailController::class)->group(function(){
//     Route::get('/addemail','create');
//     Route::post('/addemail','store');

// });
// Route::controller(EmailController::class)->group(function(){
//     Route::get('/indexpage','index');
//     Route::get('/show','show')->name(emailpages.page);
//     Route::post('/store','store');
//     Route::get('/create','create');
//     Route::get('/edit','edit');
//     Route::put('/update','update');
//     Route::delete('/destroy','destroy');

// });

// Email

Route::resource("/email", EmailController::class);
Route::controller(EmailController::class)->group(function(){
    Route::get('/email','index')->name('email.page');
});


// Users

Route::resource("/users", UserController::class);
// Route::resource("/user", UserController::class);
Route::controller(UserController::class)->group(function(){
Route::get('/user','user')->name('index.page');
});
Route::controller(UserController::class)->group(function(){
Route::get('/users','index')->name('user.page');
});

// Complaint

Route::resource("/complaint", ComplaintController::class);
Route::get('/complaint',[ComplaintController::class,'index']);
Route::controller(ComplaintController::class)->group(function(){
Route::get('/complaint','index')->name('locations.page');
});

// Report

Route::resource("/report", ReportJourneyController::class);
Route::get('/report',[ReportJourneyController::class,'index']);
Route::controller(ReportJourneyController::class)->group(function(){
    Route::get('/report','index')->name('report.page');
});






Route::get('/dashboard',[HomeController::class,'dashboard']);

Route::controller(HomeController::class)->group(function(){
    Route::get('/dashboard','dashboard')->name('dashboard.page');
});
Route::get('/home',[HomeController::class,'home']);
Route::get('/template',[HomeController::class,'template']);
Route::get('/index',[HomeController::class,'index']);



// Route::get('/dashboard',[UserController::class,'index']);






// Route::get('/dashboard','HomeController@dashboard');
Route::get('/sidebar', function () {
    return view('sidebar');
});
Route::get('/home', function () {
    return view('home');
});

// profile

Route::controller(ProfileController::class)->group(function(){
    Route::get('/profile','index')->name('profile.page');
});
Route::get('/editpage', function () {
    return view('emails.edit');
});
Route::get('/login',[LoginController::class,'index']);




