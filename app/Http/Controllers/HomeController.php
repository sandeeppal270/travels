<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Illuminate\Support\Facades\DB;

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
    public function dash(){
        $post=DB::table('locations')->get('*')->toArray();
        // $post=DB::table('locations')->limit(10)->get()->toArray();
        // $post=DB::table('locations')->limit(10)->offset(10);
        // $post=DB::table('locations')->select(DB::raw('sum(crime_count) as crime_count,city,zip'))->groupBy('city','zip')->limit(10)->offset(10)->get();
        $post=DB::table('locations')->select(DB::raw('sum(crime_count) as crime_count,city,zip'))->groupBy('city','zip')->get();

        foreach($post as $row)

        {   
            $data[] = array
            (
            'label'=>$row->city,
            'y'=>$row->crime_count,
            'z'=>$row->zip
            
            );
            
        }
        return view('showMap',['data' => $data]);

    }
}
