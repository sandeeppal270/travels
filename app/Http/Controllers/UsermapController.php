<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userapp;
use App\Models\Complaint;
use Illuminate\Support\Facades\DB;

class UsermapController extends Controller
{
    public function index(){
        // $a=DB::table('locations')->get('*')->toArray();
        // $b=DB::table('app_users')->get('*')->toArray();
        
        // $post = array_merge($a, $b);
        // $post=DB::table('locations as loc')->join('app_users as app', 'loc.col1', '=', 'app.col1');
       
        //  $post=DB::table('locations')->select(DB::raw('sum(crime_count) as crime_count,incident_type,r_type'))->groupBy('incident_type','r_type')->get();
        $post = DB::table('locations')
            ->join('app_users', 'locations.id', '=', 'app_users.id')
            ->select('locations.*', 'app_users.*')->limit(10)->offset(5)->orderByDesc("age")
            ->get();

        foreach($post as $row)

        {   
            $data[] = array
            (
            'label'=>$row->city,
            'y'=>$row->age,
            'z'=>$row->zip
            
            );
            
        }
        return view('usergraph',['data' => $data]);

        
 
       
      
} 
}
