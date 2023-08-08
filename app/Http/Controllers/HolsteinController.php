<?php

namespace App\Http\Controllers;
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

    public function store(Request $request)
    {
        HolsteinCow::create([
            'name'=>$request->cow_name,
            'number'=>$request->cow_number,
            //'image'=>$fileName
            //'Description'=>$request->feed_description,
            
        ]);
        return redirect()->back()->with('msg',' HolsteinCow Created successfully.');
   
       //return to_route('feed.list');

    }
}