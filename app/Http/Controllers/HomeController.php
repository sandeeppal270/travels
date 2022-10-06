<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
    public function home(){
        return view('home');
    }
    public function template(){
        return view('template.index');
    }
    public function index(){
        return view('template.complaint.index');
    }
}
