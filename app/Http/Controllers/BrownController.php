<?php

namespace App\Http\Controllers;
use App\Models\BrownCow;
use Illuminate\Http\Request;

class BrownController extends Controller
{
    public function index()
    {
        $brownCow=BrownCow::all();
        //$cow=CowList::paginate(4);
        return view('backend.pages.brownCows.index',compact('brownCow'));
    }
    public function create()
    {
        return view('backend.pages.brownCows.create');
    }

  

    public function store(Request $request)
    {
        BrownCow::create([
            'name'=>$request->cow_name,
            'number'=>$request->cow_number,
            //'image'=>$fileName
            //'Description'=>$request->feed_description,
            
        ]);
        return redirect()->back()->with('msg','BrownCow Created successfully.');
   
       //return to_route('feed.list');

    }
}
