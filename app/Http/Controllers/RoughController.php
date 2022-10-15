<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Illuminate\Support\Facades\DB;

class RoughController extends Controller
{
    public function index(Request $request){
        $locations=DB::table('locations')->orderBy('district','asc')->get('*');
            $store['locations'] = $locations;
           
            return view('rough',$store);
    }
    // public function index(Request $request){
    //     $data['locations']=DB::table('locations')->orderBy('district','asc')->get();

    //         return view('rough',$data);
    // } 

    // public function getCity(Request $request){
    //     $did=$request->post('did');
    //     $locations=DB::table('locations')->where('district',$did)->orderBy('city','asc')->get('*');
    //      $store['locations'] = $locations;
    //     $html='<option value="">Select City</option>';
    //     foreach($city as $item){
    //         $html.='<option value="'.$item->id.'">'.$item->city.'</option>';
        
           
    //     }
    //     echo $html;

}
//     public function getZip(Request $request){
//         $cid=$request->post('cid');
//         $locations=DB::table('locations')->where('city',$cid)->orderBy('zip','asc')->get('*');
//         // $store['locations'] = $locations;
//         $html='<option value="">Select Zip</option>';
//         foreach($zip as $item){
//             $html.='<option value="'.$item->id.'">'.$item->zip.'</option>';
        
           
//         }
//         echo $html;

//     }
// }
