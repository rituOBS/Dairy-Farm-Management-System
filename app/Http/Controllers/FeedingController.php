<?php

namespace App\Http\Controllers;
use App\Models\FeedingDetaile;
use Illuminate\Http\Request;

class FeedingController extends Controller
{
    public function index()
    {
        $feeding=FeedingDetaile::all();
        $feeding=FeedingDetaile::paginate(4);
        return view('backend.pages.feeding.index',compact('feeding'));
    }
    public function create()
    {
        return view('backend.pages.feeding.create');
    }

    public function delete($id)
    {
       $feeding=FeedingDetaile::find($id);

       $feeding->delete();

       return redirect()->back()->with('msg','FeedingDetaile Deleted Successfully');
    }
    
    public function store(Request $request)
    {
        FeedingDetaile::create([
            'name'=>$request->feed_name,
            'quantity'=>$request->feed_quantity,
            //'image'=>$fileName
            //'Description'=>$request->feed_description,
            
        ]);
        return redirect()->back()->with('msg','FeedingDetaile Created successfully.');
   
       //return to_route('feed.list');

    }
}
