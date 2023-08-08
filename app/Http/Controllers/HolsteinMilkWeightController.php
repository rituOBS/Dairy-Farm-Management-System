<?php

namespace App\Http\Controllers;
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
    public function store(Request $request)
      {
        HolsteinMilkWeight::create([
            'name'=>$request->cow_name,
            'category'=>$request->milk_category,
            'weight'=>$request->milk_weight,
           // 'quantity'=>$request->feed_quantity,
            //'image'=>$fileName
            //'Description'=>$request->feed_description,
            
        ]);
        return redirect()->back()->with('msg','HolsteinMilkWeight Created successfully.');
   
       //return to_route('feed.list');

    }
}
