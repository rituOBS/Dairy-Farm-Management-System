<?php

namespace App\Http\Controllers;
use App\Models\StaffList;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function list()
    {
        $staff=StaffList::all();
        $staff=StaffList::paginate(4);
        return view('backend.pages.staff.list',compact('staff'));
    }
    public function create()
    {
        return view('backend.pages.staff.create');
    }

    public function delete($id)
    {
       $staff=StaffList::find($id);

       $staff->delete();

       return redirect()->back()->with('msg','StaffList Deleted Successfully');
    }
    public function store(Request $request)
    {
      //dd($request->all());

        // $request->validate([
             //'product_name'=>'required',
             //'product_category'=>'required',
             //'product_quantity'=>'required',
             //'total_price'=>'required|gt:100',
             //'employee_designation'=>'required|gt:10'
         //]);
// dd($request->all());


$fileName=null;
if($request->hasFile('staff_image'))
{
    $image=$request->file('staff_image');
    $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
    $image->storeAs('/staffs',$fileName);
    // dd($fileName);

}
// dd($fileName);
            StaffList::create([
                'name'=>$request->staff_name,
                'designation'=>$request->staff_designation,
                'email'=>$request->staff_email,
                'image'=>$fileName
                //'Description'=>$request->feed_description,
                
            ]);
            return redirect()->back()->with('msg','Employee Created successfully.');
       
           //return to_route('feed.list');

        }
        public function staff_report(){
            return view('backend.pages.report.staff_report');
        }
    
        public function staff_report_search(Request $request){
    
            $request->validate([
                'from_date'=>'required|date',
                'to_date'=>'required|date|after:from_date'
            ]);
    
            $from=$request->from_date;
            $to=$request->to_date;
    
            $staff=StaffList::whereBetween('created_at', [$from , $to])->get();
            return view('backend.pages.report.staff_report',compact('staff'));
    
        }
}
