<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\VaccineMonitor;
use Illuminate\Http\Request;

class VaccineMonitorController extends Controller
{
    public function list()
    {
       $vaccineMonitor=VaccineMonitor::all();
       $vaccineMonitor=VaccineMonitor::paginate(4);
        return view('backend.pages.vaccineMonitor.list',compact('vaccineMonitor'));
    }
    public function create()
    {
        return view('backend.pages.vaccineMonitor.create');
    }

    // public function delete($id)
    // {
    //     $vaccineMonitor=VaccineMonitor::find($id);

    //     $vaccineMonitor->delete();

    //    return redirect()->back()->with('msg','VaccineMonitor Deleted Successfully.');
    // }

    
    public function store(Request $request)
    {
        VaccineMonitor::create([
            'name'=>$request->cow_name,
            'date'=>$request->vaccine_date,
            'remark'=>$request->vaccine_remark,   
        ]);

        Toastr::success('Created Successfully', 'VaccineMonitor', ['options']);
        return redirect()->back();

        return redirect()->back()->with('msg','Employee Created successfully.');

   }
        public function vaccineMonitor_report(){
         return view('backend.pages.report.vaccineMonitor_report');
         }

   public function vaccineMonitor_Report_search(Request $request){

    $request->validate([
        'from_date'=>'required|date',
        'to_date'=>'required|date|after:from_date'
    ]);

    $from=$request->from_date;
    $to=$request->to_date;

    $vaccineMonitor=VaccineMonitor::whereBetween('created_at', [$from , $to])->get();
    return view('backend.pages.report.vaccineMonitor_report',compact('vaccineMonitor'));

   }
}
