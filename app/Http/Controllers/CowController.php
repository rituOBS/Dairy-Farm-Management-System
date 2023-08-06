<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CowList;


class CowController extends Controller
{
    public function list()
    {
        $cow=CowList::all();
        $cow=CowList::paginate(4);
        return view('backend.pages.cow.list',compact('cow'));
    }
    public function create()
    {
        return view('backend.pages.cow.create');
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
    //    dd($request);

        $request->validate([
             'cow_name'=>'required',
             'cow_weight'=>'required',
             'cow_color'=>'required',
             'cow_price'=>'required|gt:10'
         ]);
//dd($request->all());
            CowList::create([
                'name'=>$request->cow_name,
                'color'=>$request->cow_color,
                'weight'=>$request->cow_weight,
                'price'=>$request->cow_price,
                'Description'=>$request->cow_description,
                
            ]);
       
            return redirect()->back()->with('msg','Employee Created successfully.');
        }
        public function update(Request $request,$id)
        {
            //    dd($request);
        
                 $request->validate([
                     'cow_name'=>'required',
                     'cow_color'=>'required',
                     'cow_weight'=>'required|gt:100',
                     'cow_price'=>'required|gt:10'
                 ]);

                 
            $cow=CowList::find($id);

            $cow->update([
                'name'=>$request->cow_name,
                'color'=>$request->cow_color,
                'weight'=>$request->cow_weight,
                'price'=>$request->cow_price,
                'Description'=>$request->cow_description,
                
            ]);
            return redirect()->back()->with('msg','Cow Updated successfully.');

        }

        public function report()
        {
           return view('backend.pages.report.productReport');
        }
        
    public function reportSearch(Request $request){

        $request->validate([
            'from_date'=>'required|date',
            'to_date'=>'required|date|after:from_date'
        ]);

        $from=$request->from_date;
        $to=$request->to_date;

        $cows=CowList::whereBetween('created_at', [$from , $to])->get();
        return view('backend.pages.report.productReport',compact('cows'));

    }
}
    


