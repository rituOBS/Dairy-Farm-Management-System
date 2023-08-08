<?php

namespace App\Http\Controllers;
use App\Models\IndianCow;
use Illuminate\Http\Request;

class IndianController extends Controller
{
    public function index()
    {
        $indianCow=IndianCow::all();
        //$cow=CowList::paginate(4);
        return view('backend.pages.indianCow.index',compact('indianCow'));
    }
    public function create()
    {
        return view('backend.pages.indianCow.create');
    }


    public function store(Request $request)
    {
        IndianCow::create([
            'name'=>$request->cow_name,
            'number'=>$request->cow_number,
            //'image'=>$fileName
            //'Description'=>$request->feed_description,
            
        ]);
        return redirect()->back()->with('msg','IndianCow Created successfully.');
   
       //return to_route('feed.list');

    }
}
