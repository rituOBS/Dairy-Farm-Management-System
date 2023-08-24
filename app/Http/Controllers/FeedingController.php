<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\FeedingDetaile;
use Illuminate\Http\Request;

class FeedingController extends Controller
{
    public function index()
    {
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
    public function edit($id)
    {
        $feeding=FeedingDetaile::find($id);

        return view('backend.pages.feeding.edit',compact('feeding'));

     }

    
    public function store(Request $request)
    {
        FeedingDetaile::create([
            'name'=>$request->feed_name,
            'quantity'=>$request->feed_quantity,
            
        ]);

        Toastr::success('Created Successfully', 'FeedingDetaile', ['options']);
        return redirect()->back();

        return redirect()->back()->with('msg','FeedingDetaile Created successfully.');
   
       //return to_route('feed.list');

    }
    public function update(Request $request,$id)
    {
               $request->validate([
                 'feed_name'=>'required',
                 'feed_quantity'=>'required',
                
             ]);

             
             $feeding=FeedingDetaile::find($id);

             $feeding->update([
                'name'=>$request->feed_name,
                'quantity'=>$request->feed_quantity,
         
            
        ]);
        return redirect()->back()->with('msg','FeedingDetaile Updated successfully.');

    }
}
