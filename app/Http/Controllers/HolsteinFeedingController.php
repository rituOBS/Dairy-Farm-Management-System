<?php

namespace App\Http\Controllers;

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

    public function store(Request $request)
    {
        HolsteinFeeding::create([
            'name'=>$request->feeding_name,
            'quantity'=>$request->feeding_quantity,
            //'image'=>$fileName
            //'Description'=>$request->feed_description,
            
        ]);
        return redirect()->back()->with('msg','holsteinFeeding Created successfully.');
   
       //return to_route('feed.list');

   }
}