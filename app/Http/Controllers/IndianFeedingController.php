<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\IndianFeeding;
use Illuminate\Http\Request;

class IndianFeedingController extends Controller
{
    
    public function index()
    {
        $indianFeeding=IndianFeeding::all();
        $indianFeeding=IndianFeeding::paginate(4);
        return view('backend.pages.indianFeeding.index',compact('indianFeeding'));
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
        ]);

        Toastr::success('Created Successfully', 'IndianFeeding', ['options']);
        return redirect()->back();

        return redirect()->back()->with('msg','IndianFeeding Created successfully.');
   
   }
}
