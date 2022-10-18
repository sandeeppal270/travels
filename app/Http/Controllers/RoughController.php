<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Illuminate\Support\Facades\DB;

class RoughController extends Controller
{
    public function index(Request $request){
        // $locations=DB::table('locations')->orderBy('district','asc')->orderBy('city','asc')->orderBy('incident_type','asc')->get('*');
        // $data['locations'] = $locations;
             
        // return view('rough',$data);
        $data['locations']=DB::table('locations')->orderBy('district','asc')->orderBy('city','asc')->orderBy('incident_type','asc')->get('*');
        return view('rough',$data);
        // $post=DB::table('locations')->limit(10)->get('*')->toArray();
        // $post=DB::table('locations')->select(DB::raw('sum(crime_count) as crime_count,city'))->groupBy('city','crime_count')->orderByDesc("crime_count")->limit(10)->offset(0)->get();
     
       
    }
     public function getCity(Request $request){
         $did=$request->post('did');
         $city=DB::table('locations')->where('district',$did)->orderBy('city','asc')->get('*');
         $html='<option value="">Select City</option>';
        foreach($city as $list){
             $html.='<option value="'.$list->id.'">'.$list->city.'</option>';
         };
        

         echo $html;
    }
     public function getZip(Request $request){
         $cid=$request->post('cid');
         $zip=DB::table('locations')->where('city',$cid)->orderBy('zip','asc')->get('*');
         $html='<option value="">Select Zip</option>';
         foreach($zip as $list){
             $html.='<option value="'.$list->id.'">'.$list->zip.'</option>';
         }
         echo $html;
        }

         
     }
    
   