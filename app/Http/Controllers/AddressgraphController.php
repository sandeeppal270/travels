<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Illuminate\Support\Facades\DB;

class AddressgraphController extends Controller
{
    public function index(){
       
        $post=DB::table('locations')->get('*')->toArray();
        // $post=DB::table('app_users')->select(DB::raw('sum(gender) as male,name,age'))->groupBy('name','age')->get();

        foreach($post as $row)

        {   
            $data[] = array
            (
            'label'=>$row->address,
            'y'=>$row->incident_type,
            // 'z'=>$row->gender
            
            );
            
        }
        return view('usergraph',['data' => $data]);

        
 
       
      
} 
}
