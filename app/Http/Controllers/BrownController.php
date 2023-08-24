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

    public function delete($id)
    {
       $brownCow=BrownCow::find($id);

       $brownCow->delete();

       return redirect()->back()->with('msg','BrownCow Deleted Successfully');
    }
    public function edit($id)
    {
        $brown=BrownCow::find($id);
        $browns=BrownCow::all();

       return view('backend.pages.brownCows.edit',compact('brown','browns'));


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
    public function update(Request $request,$id)
    {
               $request->validate([
                 'brown_name'=>'required',
                 'brown_number'=>'required',
             ]);

             
        $brownCow=BrownCow::find($id);

        $brownCow->update([
            'name'=>$request->name,
            'number'=>$request->number,
         
            
        ]);
        return redirect()->back()->with('msg','BrownCow Updated successfully.');

  }
}
