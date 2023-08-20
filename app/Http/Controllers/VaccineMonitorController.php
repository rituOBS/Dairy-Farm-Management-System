<?php

namespace App\Http\Controllers;
use App\Models\VaccineMonitor;
use Illuminate\Http\Request;

class VaccineMonitorController extends Controller
{
    public function list()
    {
       $vaccineMonitor=VaccineMonitor::all();
       //$vaccineSchedule=VaccineSchedule::paginate(4);
        return view('backend.pages.vaccineMonitor.list',compact('vaccineMonitor'));
    }
    public function create()
    {
        return view('backend.pages.vaccineMonitor.create');
    }

    
    public function store(Request $request)
    {
        VaccineMonitor::create([
            'name'=>$request->cow_name,
            'date'=>$request->vaccine_date,
            'remark'=>$request->vaccine_remark,
            //'image'=>$fileName
            //'Description'=>$request->feed_description,
            
        ]);
        return redirect()->back()->with('msg','Employee Created successfully.');
   
       //return to_route('feed.list');

   }
}
