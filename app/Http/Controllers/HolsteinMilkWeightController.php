<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\HolsteinMilkWeight;
use Illuminate\Http\Request;

class HolsteinMilkWeightController extends Controller
{
    public function index()
    {
        $holsteinMilkWeight=HolsteinMilkWeight::all();
        //$cow=CowList::paginate(4);
        return view('backend.pages.holsteinmilkWeight.index',compact('holsteinMilkWeight'));
    }
    public function create()
    {
        return view('backend.pages.holsteinmilkWeight.create');
    }

    
    public function delete($id)
    {
        $holsteinMilkWeight=HolsteinMilkWeight::find($id);

        $holsteinMilkWeight->delete();
 
       return redirect()->back()->with('msg','HolsteinMilkWeight Deleted Successfully');
    }

    public function store(Request $request)
      {
        HolsteinMilkWeight::create([
            'name'=>$request->cow_name,
            'category'=>$request->milk_category,
            'weight'=>$request->milk_weight,  
        ]);

        Toastr::success('Created Successfully', 'HolsteinMilkWeight', ['options']);
        return redirect()->back();

        return redirect()->back()->with('msg','HolsteinMilkWeight Created successfully.');
    }
}
