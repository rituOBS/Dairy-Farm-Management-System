<?php

namespace App\Http\Controllers;
use App\Models\BessieFeeding;
use Illuminate\Http\Request;

class BessieFeedingController extends Controller
{
    public function index()
    {
        $bessieFeeding=BessieFeeding::all();
        $bessieFeeding=BessieFeeding::paginate(4);
        return view('backend.pages.bessieFeeding.index',compact('bessieFeeding'));
    }
    public function create()
    {
        return view('backend.pages.bessieFeeding.create');
    }

    public function delete($id)
    {
       $bessieFeeding=BessieFeeding::find($id);

       $bessieFeeding->delete();

       return redirect()->back()->with('msg','BessieFeeding Deleted Successfully');
    }
    public function store(Request $request)
    {
        BessieFeeding::create([
            'name'=>$request->feeding_name,
            'quantity'=>$request->feeding_quantity,
            //'image'=>$fileName
            //'Description'=>$request->feed_description,
            
        ]);
        return redirect()->back()->with('msg','BessieFeeding Created successfully.');
   
       //return to_route('feed.list');

   }
}
