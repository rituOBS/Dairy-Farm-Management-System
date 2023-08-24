<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\CowList;
use App\Models\CowShade;

class CowController extends Controller
{
    public function list()
    {
       
       $cowData=CowList::with('shade')->paginate(4);
    //    dd($cowData);
        return view('backend.pages.cow.list',compact('cowData'));
    }
    public function create()
    {
        $shades= CowShade::all();
        return view('backend.pages.cow.create',compact('shades'));
    }

    public function delete($id)
    {
       $cow=CowList::find($id);

       $cow->delete();

       return redirect()->back()->with('msg','Cow Deleted Successfully');
    }


    public function edit($id)
    {
       $cow=CowList::find($id);
       $cows=CowList::all();

       return view('backend.pages.cow.edit',compact('cow','cows'));


    }
    public function store(Request $request)
    {

        // dd($request->all());

        $request->validate([
            'shade_id'=>'required',
             'cow_name'=>'required',
             'cow_weight'=>'required',
             'cow_color'=>'required',
             'cow_price'=>'required|gt:10'
         ]);
        //dd($request->all());
            CowList::create([
                'shade_id'=>$request->shade_id,
                'name'=>$request->cow_name,
                'weight'=>$request->cow_weight,
                'color'=>$request->cow_color,
                'price'=>$request->cow_price,
               
                
            ]);

            Toastr::success('Created Successfully', 'CowList', ['options']);
            return redirect()->back();

            return redirect()->back()->with('msg','Employee Created successfully.');
        }
        public function update(Request $request,$id)
        {
                   $request->validate([
                     'cow_name'=>'required',
                     'cow_weight'=>'required|gt:100',
                     'cow_color'=>'required',
                     'cow_price'=>'required|gt:100'
                 ]);

                 
            $cow=CowList::find($id);

            $cow->update([
                'name'=>$request->cow_name,
                'weight'=>$request->cow_weight,
                'color'=>$request->cow_color,
                'price'=>$request->cow_price,
             
                
            ]);
            return redirect()->back()->with('msg','Cow Updated successfully.');

        }

        public function cow_report(){
         return view('backend.pages.report.cow_report');
     }

    public function cow_report_search(Request $request){

        $request->validate([
            'from_date'=>'required|date',
            'to_date'=>'required|date|after:from_date'
        ]);

        $from=$request->from_date;
        $to=$request->to_date;

        $cow=CowList::whereBetween('created_at', [$from , $to])->get();
        return view('backend.pages.report.cow_report',compact('cow'));

    }
}
    


