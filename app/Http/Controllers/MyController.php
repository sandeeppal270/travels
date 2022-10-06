<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
   public function index(){
    return view('index');
   }
   public function badrequest(){
    return view('404');
   }
   public function blank(){
    return view('blank');
   }
   public function button(){
    return view('button');
   }
   public function chart(){
    return view('chart');
   }
   public function element(){
    return view('element');
   }
   public function form(){
    return view('form');
   }
   public function signin(){
    return view('signin');
   }
   public function signup(){
    return view('signup');
   }
   public function table(){
    return view('table');
   }
   public function typography(){
    return view('typography');
   }
   public function widget(){
    return view('widget');
   }
   public function email(){
      return view('email');
     }
     public function emailpage(){
      return view('emailpage');
     }
}
