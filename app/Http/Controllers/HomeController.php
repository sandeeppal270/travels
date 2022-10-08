<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
        return view('dashboard');
        // $label = ['Shirts', 'T-Shirt', 'Pants', 'Coat', 'Kurta', 'Pajama'];
        // $price = ['10', '5', '100', '90', '50', '30'];
        // return view('dashboard',['labels' => $label, 'prices' => $price]);
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
