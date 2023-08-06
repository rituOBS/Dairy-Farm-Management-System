<?php

namespace App\Http\Controllers;
use App\Models\BessieCow;
use Illuminate\Http\Request;

class BessieController extends Controller
{
    public function index()
    {
    $bessieCow=BessieCow::all();
    //$cow=CowList::paginate(4);
    return view('backend.pages.bessieCow.index',compact('bessieCow'));
    }
    public function create()
    {
    return view('backend.pages.bessieCow.create');
    }

    public function store(Request $request)
    {
        BessieCow::create([
            'name'=>$request->cow_name,
            'number'=>$request->cow_number,
            //'image'=>$fileName
            //'Description'=>$request->feed_description,
            
        ]);
        return redirect()->back()->with('msg','BessieCow Created successfully.');
   
       //return to_route('feed.list');

    }
}

