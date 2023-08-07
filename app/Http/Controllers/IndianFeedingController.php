<?php

namespace App\Http\Controllers;
use App\Models\IndianFeeding;
use Illuminate\Http\Request;

class IndianFeedingController extends Controller
{
    
    public function index()
    {
        $indianFeeding=IndianFeeding::all();
       // $bessieFeeding=BessieFeeding::paginate(4);
        return view('backend.pages.indianFeeding.index');
    }
    public function create()
    {
        return view('backend.pages.indianFeeding.create');
    }

    public function store(Request $request)
    {
        IndianFeeding::create([
            'name'=>$request->feeding_name,
            'quantity'=>$request->feeding_quantity,
            //'image'=>$fileName
            //'Description'=>$request->feed_description,
            
        ]);
        return redirect()->back()->with('msg','IndianFeeding Created successfully.');
   
       //return to_route('feed.list');

   }
}
