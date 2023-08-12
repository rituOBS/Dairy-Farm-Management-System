<?php

namespace App\Http\Controllers;
use App\Models\VaccineSchedule;
use Illuminate\Http\Request;

class VaccineScheduleController extends Controller
{
    public function list()
    {
       $vaccineSchedule=VaccineSchedule::all();
       $vaccineSchedule=VaccineSchedule::paginate(4);
        return view('backend.pages.vaccineSchedule.list',compact('vaccineSchedule'));
    }
    public function create()
    {
        return view('backend.pages.vaccineSchedule.create');
    }

    
    public function store(Request $request)
    {
        VaccineSchedule::create([
            'disease'=>$request->cow_disease,
            'name'=>$request->vaccine_name,
            'time'=>$request->vaccine_time,
            'immunity'=>$request->vaccine_immunity,
            'dose'=>$request->vaccine_dose,
            'remark'=>$request->vaccine_remark,
            //'image'=>$fileName
            //'Description'=>$request->feed_description,
            
        ]);
        return redirect()->back()->with('msg','VaccineSchedule Created successfully.');
   
       //return to_route('feed.list');

   }
}
