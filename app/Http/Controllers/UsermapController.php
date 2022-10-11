<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userapp;
use Illuminate\Support\Facades\DB;

class UsermapController extends Controller
{
    public function index(){
       
        $post=DB::table('app_users')->get('*')->toArray();
        // $post=DB::table('app_users')->select(DB::raw('sum(gender) as male,name,age'))->groupBy('name','age')->get();

        foreach($post as $row)

        {   
            $data[] = array
            (
            'label'=>$row->name,
            'y'=>$row->age,
            // 'z'=>$row->gender
            
            );
            
        }
        return view('usergraph',['data' => $data]);

        
 
       
      
} 
}
