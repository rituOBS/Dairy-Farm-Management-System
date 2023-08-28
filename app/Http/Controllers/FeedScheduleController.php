<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\FeedSchedule;
use Illuminate\Http\Request;

class FeedScheduleController extends Controller
{
    public function list()
    {
       //$feedSchedule=FeedSchedule::all();
       $feedSchedule=FeedSchedule::paginate(4);
        return view('backend.pages.feedSchedule.list',compact('feedSchedule'));
    }
    public function create()
    {
        return view('backend.pages.feedSchedule.create');
    }

    public function delete($id)
    {
        $feedSchedule=FeedSchedule::find($id);

       $feedSchedule->delete();

       return redirect()->back()->with('msg','$FeedSchedule Deleted Successfully');
    }

    public function edit($id)
    {
        $feedSchedule=FeedSchedule::find($id);
        //$feedSchedules=FeedSchedule::all();

        return view('backend.pages.feedSchedule.edit',compact('feedSchedule'));


     }

    
    
    public function store(Request $request)
    {
        // dd($request->all());
        FeedSchedule::create([
            'animal'=>$request->animal_type,
            'during'=>$request->feeding_during,
            'grass'=>$request->green_grass,
            'fooder'=>$request->dry_fooder,
            'meal'=>$request->soybean_meal,
            'straw'=>$request->paddy_straw,
            'mixture'=>$request->concentrate_mixture,
            'bran'=>$request->wheat_bran,
            //'image'=>$fileName
            //'Description'=>$request->feed_description,
            
        ]);

        Toastr::success('Created Successfully', 'FeedingDetaile', ['options']);
        return redirect()->back();

        return redirect()->back()->with('FeedSchedule Created successfully.');
   
       //return to_route('feed.list');

   }

   public function update(Request $request,$id)
   {
              $request->validate([
                'animal_type'=>'required',
                'feeding_during'=>'required',
                'green_grass'=>'required',
                'dry_fooder'=>'required',
                'soybean_meal'=>'required',
                'paddy_straw'=>'required',
                'concentrate_mixture'=>'required',
                'wheat_bran'=>'required',
            ]);

            
       $feedSchedule=FeedSchedule::find($id);

       $feedSchedule->update([
        'animal'=>$request->animal_type,
        'during'=>$request->feeding_during,
        'grass'=>$request->green_grass,
        'fooder'=>$request->dry_fooder,
        'meal'=>$request->soybean_meal,
        'straw'=>$request->paddy_straw,
        'mixture'=>$request->concentrate_mixture,
        'bran'=>$request->wheat_bran,
           
       ]);
       return redirect()->back()->with('msg',' $FeedSchedule Updated successfully.');

   }


   public function feedSchedule_report(){
    return view('backend.pages.report.feedSchedule_report');
}

public function feedSchedule_report_search(Request $request){

    $request->validate([
        'from_date'=>'required|date',
        'to_date'=>'required|date|after:from_date'
    ]);

    $from=$request->from_date;
    $to=$request->to_date;

    $feedSchedule=FeedSchedule::whereBetween('created_at', [$from , $to])->get();
    return view('backend.pages.report.feedSchedule_report',compact('feedSchedule'));

   }

}
