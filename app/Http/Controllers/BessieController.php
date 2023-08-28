<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
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

    
    public function delete($id)
    {
       $bessieCow=BessieCow::find($id);

       $bessieCow->delete();

       return redirect()->back()->with('msg','BessieCowDeleted Successfully');
    }

    public function edit($id)
    {
        $bessie=BessieCow::find($id);


       return view('backend.pages.bessieCow.edit',compact('bessie'));


    }





    public function store(Request $request)
    {
        BessieCow::create([
            'name'=>$request->cow_name,
            'number'=>$request->cow_number,
            
        ]);

        Toastr::success('Created Successfully', 'BessieCow', ['options']);
        return redirect()->back();

        return redirect()->back()->with('msg','BessieCow Created successfully.');

    }
    public function update(Request $request,$id)
    {
               $request->validate([
                 'cow_name'=>'required',
                 'cow_number'=>'required',
             ]);

             
             $bessieCow=BessieCow::find($id);

             $bessieCow->update([
            'name'=>$request->cow_name,
            'number'=>$request->cow_number,
         
            
        ]);
        return redirect()->back()->with('msg','BessieCow Updated successfully.');

  }
}

