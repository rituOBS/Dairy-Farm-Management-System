<?php

namespace App\Http\Controllers;
use App\Models\IndianCowGender;
use Illuminate\Http\Request;

class IndianCowGenderController extends Controller
{
    public function index()
    {
       $indianCowGender=IndianCowGender::all();
       //$bessieCowGender=BessieCowGender::paginate(4);
        return view('backend.pages.indianCowGender.index',compact('indianCowGender'));
    }
    public function create()
    {
        return view('backend.pages.indianCowGender.create');
    }

    public function store(Request $request)
    {
        IndianCowGender::create([
            'name'=>$request->cow_name,
            'weight'=>$request->cow_weight,
            'gender'=>$request->cow_gender,
            //'image'=>$fileName
            //'Description'=>$request->feed_description,
            
        ]);
        return redirect()->back()->with('msg','IndianCowGender Created successfully.');
   
       //return to_route('feed.list');

    }
}