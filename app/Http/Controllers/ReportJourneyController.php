<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReportJourney;
use Carbon\Carbon;
// use DB;

class ReportJourneyController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $report_journeys = ReportJourney::all();
        return view ('report.index')->with('report_journeys', $report_journeys);
        // $data = DB::table('report_journeys')
        // ->join('app_users','app_users.id','=','report_journeys','report_journeys.app_user_id')
        // ->select('report_journey.app_user_id','app_users.name')
        // ->get();
        // return view ('report.index',compact('data'));


    }

    /**
     ** Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('report.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        ReportJourney::create($input);
        return redirect('report')->with('flash_message', 'Report journey Addedd!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report_journeys = ReportJourney::find($id);
        return view('report.show')->with('report_journeys', $report_journeys);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report_journeys = ReportJourney::find($id);
        return view('report.edit')->with('report_journeys', $report_journeys);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $report_journeys = ReportJourney::find($id);
        $input = $request->all();
        $report_journeys->update($input);
        return redirect('report')->with('flash_message', 'Report Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ReportJourney::destroy($id);
        return redirect('report')->with('flash_message', 'Report deleted!');  
    }
}
