<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Illuminate\Support\Facades\DB;

class GraphController extends Controller
{
    public function index(){
        // $fruit = Complaint::where('district','lucknow')->get();
    	// $veg = Complaint::where('district','lucknow')->get();
    	// $grains = Complaint::where('district','lucknow')->get();
    	// $fruit_count = count($fruit);    	
    	// $veg_count = count($veg);
    	// $grains_count = count($grains);
        // return view('showMap',compact('fruit_count','veg_count','grains_count'));
        // $label = ['Lucknow', 'Barabanki', 'Kanpur', 'Sitapur', 'Hardoi', 'Banarus','Lucknow', 'Barabanki', 'Kanpur', 'Sitapur', 'Hardoi', 'Banarus'];
        // $price = ['10', '5', '100', '90', '50', '30','10', '5', '100', '90', '50', '30'];
        // return view('showMap',['labels' => $label, 'prices' => $price]);
        $post=DB::table('locations')->get('*')->toArray();

        foreach($post as $row)

        {   
            $data[] = array
            (
            'label'=>$row->city,
            'y'=>$row->crime_count
            
            );
            
        }
        return view('showMap',['data' => $data]);
   
}

}