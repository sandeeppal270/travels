<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;

class GraphController extends Controller
{
    public function index(Request $request){
        // $fruit = Complaint::where('district','lucknow')->get();
    	// $veg = Complaint::where('district','lucknow')->get();
    	// $grains = Complaint::where('district','lucknow')->get();
    	// $fruit_count = count($fruit);    	
    	// $veg_count = count($veg);
    	// $grains_count = count($grains);
        // return view('showMap',compact('fruit_count','veg_count','grains_count'));
        $label = ['Lucknow', 'Barabanki', 'Kanpur', 'Sitapur', 'Hardoi', 'Banarus','Lucknow', 'Barabanki', 'Kanpur', 'Sitapur', 'Hardoi', 'Banarus'];
        $price = ['10', '5', '100', '90', '50', '30','10', '5', '100', '90', '50', '30'];
        return view('showMap',['labels' => $label, 'prices' => $price]);
       
        

    }
}

