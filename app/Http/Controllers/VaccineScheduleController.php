<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\VaccineSchedule;
use Illuminate\Http\Request;

class VaccineScheduleController extends Controller
{
    public function list()
    {
       $vaccineSchedule=VaccineSchedule::paginate(4);
        return view('backend.pages.vaccineSchedule.list',compact('vaccineSchedule'));
    }
    public function create()
    {
        return view('backend.pages.vaccineSchedule.create');
    }
    public function delete($id)
    {
        $vaccineSchedule=VaccineSchedule::find($id);

        $vaccineSchedule->delete();

       return redirect()->back()->with('msg','VaccineSchedule Deleted Successfully.');
    }
    public function edit($id)
    {
        $vaccineSchedule=VaccineSchedule::find($id);
     // $vaccineMonitors=VaccineMonitor::all();

        return view('backend.pages.vaccineSchedule.edit',compact('vaccineSchedule'));


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
        ]);

        Toastr::success('Created Successfully', 'VaccineSchedule', ['options']);
        return redirect()->back();

        return redirect()->back()->with('msg','VaccineSchedule Created successfully.');

   }

   public function update(Request $request,$id)
   {
              $request->validate([
                'cow_disease'=>'required',
                'vaccine_name'=>'required',
                'vaccine_time'=>'required',
                'vaccine_immunity'=>'required',
                'vaccine_dose'=>'required',
                'vaccine_remark'=>'required',
            ]);

            
     $vaccineSchedule=VaccineSchedule::find($id);
     $vaccineSchedule->update([
        'disease'=>$request->cow_disease,
        'name'=>$request->vaccine_name,
        'time'=>$request->vaccine_time,
        'immunity'=>$request->vaccine_immunity,
        'dose'=>$request->vaccine_dose,
        'remark'=>$request->vaccine_remark,  
        
           
       ]);
       return redirect()->back()->with('msg','VaccineSchedule Updated successfully.');

   }

   public function destroy($id){

            return $id;

   }

   public function vaccineSchedule_report(){
    return view('backend.pages.report.vaccineSchedule_report');
    }

   public function vaccineSchedule_report_search(Request $request){

    $request->validate([
        'from_date'=>'required|date',
        'to_date'=>'required|date|after:from_date'
    ]);

    $from=$request->from_date;
    $to=$request->to_date;

    $vaccineSchedule=VaccineSchedule::whereBetween('created_at', [$from , $to])->get();
    return view('backend.pages.report.vaccineSchedule_report',compact('vaccineSchedule'));

   }

}
