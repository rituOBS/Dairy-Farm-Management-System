<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\HolsteinCow;
use Illuminate\Http\Request;

class HolsteinController extends Controller
{
    public function index()
    {
        $holsteinCow=HolsteinCow::all();
        //$cow=CowList::paginate(4);
        return view('backend.pages.holsteinCow.index',compact('holsteinCow'));
    }
    public function create()
    {
        return view('backend.pages.holsteinCow.create');
    }

    public function delete($id)
    {
        $holsteinCow=HolsteinCow::find($id);

        $holsteinCow->delete();

       return redirect()->back()->with('msg','HolsteinCow Deleted Successfully');
    }
    public function edit($id)
    {
        $holstein=HolsteinCow::find($id);


       return view('backend.pages.holsteinCow.edit',compact('holstein'));
    }

    

    public function store(Request $request)
    {
        HolsteinCow::create([
            'name'=>$request->cow_name,
            'number'=>$request->cow_number,
            
        ]);

        Toastr::success('Created Successfully', 'HolsteinCow', ['options']);
        return redirect()->back();

        return redirect()->back()->with('msg',' HolsteinCow Created successfully.');
    }

    public function update(Request $request,$id)
    {
               $request->validate([
                 'cow_name'=>'required',
                 'cow_number'=>'required',
             ]);

             
             $holsteinCow=HolsteinCow::find($id);

             $holsteinCow->update([
            'name'=>$request->cow_name,
            'number'=>$request->cow_number,
         
            
        ]);
        return redirect()->back()->with('msg','HolsteinCow Updated successfully.');

  }
}

