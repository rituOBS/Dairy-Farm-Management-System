<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\HolsteinFeeding;
use Illuminate\Http\Request;

class HolsteinFeedingController extends Controller
{
    public function index()
    {
        $holsteinFeeding=HolsteinFeeding::all();
        $holsteinFeeding=HolsteinFeeding::paginate(4);
        return view('backend.pages.holsteinFeeding.index',compact('holsteinFeeding'));
    }
    public function create()
    {
        return view('backend.pages.holsteinFeeding.create');
    }

    public function delete($id)
    {
       $holsteinFeeding=HolsteinFeeding::find($id);

       $holsteinFeeding->delete();

       return redirect()->back()->with('msg','HolsteinFeeding Deleted Successfully');
    }

    public function edit($id)
    {
        $holsteinFeeding=HolsteinFeeding::find($id);
        $holsteinFeedings=HolsteinFeeding::all();

        return view('backend.pages.holsteinFeeding.edit',compact('holsteinFeeding','holsteinFeedings'));


     }

    public function store(Request $request)
    {
        HolsteinFeeding::create([
            'name'=>$request->feeding_name,
            'quantity'=>$request->feeding_quantity,
 
        ]);

        Toastr::success('Created Successfully', 'HolsteinFeeding', ['options']);
        return redirect()->back();

        return redirect()->back()->with('msg','holsteinFeeding Created successfully.');
   
   }

   public function update(Request $request,$id)
   {
    
    $request->validate([
        'feeding_name'=>'required',
        'feeding_quantity'=>'required',
     
    ]);

    $holsteinFeeding=HolsteinFeeding::find($id);

    $holsteinFeeding->update([
        'name'=>$request->feeding_name,
        'quantity'=>$request->feeding_quantity,
         
    ]);
    return redirect()->back()->with('msg','HolsteinFeeding Updated successfully.');
}
}
