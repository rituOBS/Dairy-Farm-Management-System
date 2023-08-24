<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\StaffList;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function list()
    {

        $staff=StaffList::paginate(4);
        return view('backend.pages.staff.list',compact('staff'));
    }
    public function create()
    {
        return view('backend.pages.staff.create');
    }
    
    public function store(Request $request)
    {
      


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
            ]);

            Toastr::success('Created Successfully', 'StaffList', ['options']);
            return redirect()->back();

            return redirect()->back()->with('msg','Employee Created successfully.');
        }


        public function edit($id)
        {
            $staff=StaffList::find($id);
            $staffs=StaffList::all();
    
            return view('backend.pages.staff.edit',compact('staff','staffs'));
    
    
         }
    
         public function delete($id)
         {
            $staff=StaffList::find($id);
     
            $staff->delete();
     
            return redirect()->back()->with('msg','StaffList Deleted Successfully');
         }


        public function staff_report(){
            return view('backend.pages.report.staff_report');
        }
    
    
        public function update(Request $request,$id)
        {
                   $request->validate([
                     'staff_name'=>'required',
                     'staff_designation'=>'required',
                     'staff_email'=>'required',
                 ]);

                 
            $staff=StaffList::find($id);

            $staff->update([
                'name'=>$request->staff_name,
                'designation'=>$request->staff_designation,
                'email'=>$request->staff_email,
             
                
            ]);
            return redirect()->back()->with('msg','StaffList Updated successfully.');

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