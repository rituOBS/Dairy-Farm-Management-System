<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
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
            
        ]);

        Toastr::success('Created Successfully', 'IndianCow', ['options']);
        return redirect()->back();

        return redirect()->back()->with('msg','IndianCow Created successfully.');

    }
}
