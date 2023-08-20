<?php

namespace App\Http\Controllers;
use App\Models\FeedSchedule;
use Illuminate\Http\Request;

class FeedScheduleController extends Controller
{
    public function list()
    {
       $feedSchedule=FeedSchedule::all();
       //$vaccineSchedule=VaccineSchedule::paginate(4);
        return view('backend.pages.feedSchedule.list',compact('feedSchedule'));
    }
    public function create()
    {
        return view('backend.pages.feedSchedule.create');
    }

    
    public function store(Request $request)
    {
        FeedSchedule::create([
            'disease'=>$request->cow_disease,
            'name'=>$request->vaccine_name,
            'time'=>$request->vaccine_time,
            'immunity'=>$request->vaccine_immunity,
            'dose'=>$request->vaccine_dose,
            'remark'=>$request->vaccine_remark,
            //'image'=>$fileName
            //'Description'=>$request->feed_description,
            
        ]);
        return redirect()->back()->with('msg','FeedSchedule Created successfully.');
   
       //return to_route('feed.list');

   }
}
