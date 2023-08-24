<?php

namespace App\Http\Controllers;

use App\Models\MilkCollection;
use Illuminate\Http\Request;
use App\Models\MilkList;

class MilkController extends Controller
{
    public function list()
    {
        $milk=MilkCollection::all();
        $milk=MilkCollection::paginate(4);
        return view('backend.pages.milk.list',compact('milk'));
    }
    public function create()
    {
        return view('backend.pages.milk.create');
    }

    public function delete($id)
    {
       $milk=MilkCollection::find($id);

       $milk->delete();

       return redirect()->back()->with('msg','MilkCollection Deleted Successfully.');
    }
    public function edit($id)
    {
        $milk=MilkCollection::find($id);
        $milks=MilkCollection::all();

        return view('backend.pages.milk.edit',compact('milk','milks'));


     }
        public function store(Request $request)
        {
        //    dd($request);

            $request->validate([
                'cow_name'=>'required',
                'milk_quality'=>'required',
                'milk_quantity'=>'required',
                'milk_price'=>'required|gt:100',
                // 'employee_designation'=>'required|gt:10'
            ]);
    //dd($request->all());
                MilkCollection::create([
                    'name'=>$request->cow_name,
                    'quality'=>$request->milk_quality,
                    'quantity'=>$request->milk_quantity,
                    'price'=>$request->milk_price,
                   
                    
                ]);
                return redirect()->back()->with('msg','Employee Created successfully.');
        
            //return to_route('milk.list');
            }
            public function update(Request $request,$id)
        {
            
            $request->validate([
                'cow_name'=>'required',
                'milk_quality'=>'required',
                'milk_quantity'=>'required',
                'milk_price'=>'required|gt:100',
                // 'employee_designation'=>'required|gt:10'
            ]);
            $milk=MilkCollection::find($id);

            $milk->update([
                'name'=>$request->cow_name,
                'quality'=>$request->milk_quality,
                'quantity'=>$request->milk_quantity,
                'price'=>$request->milk_price,
                //'Description'=>$request->milk_description,
                
            ]);
            return redirect()->back()->with('msg','Milk Updated successfully.');
        }

        public function milk_report(){
            return view('backend.pages.report.milk_report');
        }
    
        public function milk_report_search(Request $request){
    
            $request->validate([
                'from_date'=>'required|date',
                'to_date'=>'required|date|after:from_date'
            ]);
    
            $from=$request->from_date;
            $to=$request->to_date;
    
            $milk=MilkCollection::whereBetween('created_at', [$from , $to])->get();
            return view('backend.pages.report.milk_report',compact('milk'));
    
        }

        
}
