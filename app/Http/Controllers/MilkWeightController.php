<?php

namespace App\Http\Controllers;

use App\Models\MilkWeight;
use Illuminate\Http\Request;

class MilkWeightController extends Controller
{
    public function index()
    {
        $milkWeight=MilkWeight::all();
        //$cow=CowList::paginate(4);
        return view('backend.pages.milkWeight.index',compact('milkWeight'));
    }
    public function create()
    {
        return view('backend.pages.milkWeight.create');
    }
    public function store(Request $request)
      {
        MilkWeight::create([
            'name'=>$request->cow_name,
            'category'=>$request->milk_category,
            'weight'=>$request->milk_weight,
           // 'quantity'=>$request->feed_quantity,
            //'image'=>$fileName
            //'Description'=>$request->feed_description,
            
        ]);
        return redirect()->back()->with('msg','MilkWeight Created successfully.');
   
       //return to_route('feed.list');

    }
}
