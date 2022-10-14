<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use App\Models\Userapp;
use Illuminate\Support\Facades\DB;

class AddressgraphController extends Controller
{
    public function index(){
        
        $post=DB::table('locations')->get('*')->toArray();
       
        $post=DB::table('locations')->select(DB::raw('sum(crime_count) as crime_count,city,created_at'))->groupBy('city','created_at')->orderByDesc("crime_count")->limit(10)->offset(0)->get();

        foreach($post as $row)

        {   
            $data[] = array
            (
            'label'=>$row->city,
            'y'=>$row->crime_count,
            'z'=>$row->created_at,
          
            
            );
            
        }
        return view('addressgraph',['data' => $data]);

        
 
       
      
} 
}
