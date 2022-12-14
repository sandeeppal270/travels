<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Illuminate\Support\Facades\DB;

class CitycrimeController extends Controller
{
    public function index(){
        $post=DB::table('locations')->get('*')->toArray();
        $post=DB::table('locations')->select(DB::raw('sum(crime_count) as crime_count,city,incident_type'))->groupBy('city','incident_type')->orderByDesc("crime_count")->take(10)->offset(0)->get();

        // $post=DB::table('locations')->limit(10)->get()->toArray();
        // $post=DB::table('locations')->limit(10)->offset(10);
        // $post=DB::table('locations')->select(DB::raw('sum(crime_count) as crime_count,city,zip'))->groupBy('city','zip')->orderByDesc("crime_count")->take(10)->offset(0)->get();

        foreach($post as $row)

        {   
            $data[] = array
            (
            'label'=>$row->city,
            'y'=>$row->crime_count,
            'z'=>$row->incident_type
            
            );
            
        }
        return view('citycrime',['data' => $data]);


    }
}
