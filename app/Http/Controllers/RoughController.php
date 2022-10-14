<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Illuminate\Support\Facades\DB;

class RoughController extends Controller
{
    public function index(){
        $locations=DB::table('locations')->get('*');
            $store['locations'] = $locations;
           
            return view('rough',$store);
    }
}
