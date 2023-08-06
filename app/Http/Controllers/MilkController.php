<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MilkList;

class MilkController extends Controller
{
    public function list()
    {
        $milk=MilkList::all();
        $milk=MilkList::paginate(4);
        return view('backend.pages.milk.list',compact('milk'));
    }
    public function create()
    {
        return view('backend.pages.milk.create');
    }

    public function delete($id)
    {
       $milk=MilkList::find($id);

       $milk->delete();

       return redirect()->back()->with('msg','MilkList Deleted Successfully.');
    }
    public function edit($id)
    {
        $milk=MilkList::find($id);
        $milks=MilkList::all();

        return view('backend.pages.milk.edit',compact('milk','milks'));


     }
        public function store(Request $request)
        {
        //    dd($request);

            $request->validate([
                'milk_quality'=>'required',
                'milk_quantity'=>'required',
                'milk_price'=>'required|gt:100',
                // 'employee_designation'=>'required|gt:10'
            ]);
    //dd($request->all());
                MilkList::create([
                    'quality'=>$request->milk_quality,
                    'quantity'=>$request->milk_quantity,
                    'price'=>$request->milk_price,
                    'Description'=>$request->milk_description,
                    
                ]);
                return redirect()->back()->with('msg','Employee Created successfully.');
        
            //return to_route('milk.list');
            }
            public function update(Request $request,$id)
        {
            
            $request->validate([
                'milk_quality'=>'required',
                'milk_quantity'=>'required',
                'milk_price'=>'required|gt:100',
                // 'employee_designation'=>'required|gt:10'
            ]);
            $milk=MilkList::find($id);

            $milk->update([
                'quality'=>$request->milk_quality,
                'quantity'=>$request->milk_quantity,
                'price'=>$request->milk_price,
                //'Description'=>$request->milk_description,
                
            ]);
            return redirect()->back()->with('msg','Milk Updated successfully.');
        }
        
}
