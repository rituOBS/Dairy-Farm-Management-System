<?php

namespace App\Http\Controllers;
use App\Models\BrownCowGender;
use Illuminate\Http\Request;

class BrownCowGenderController extends Controller
{
    public function index()
    {
        $brownCowGender=BrownCowGender::all();
        //$cow=CowList::paginate(4);
        return view('backend.pages.brownCowGender.index',compact('brownCowGender'));
    }
    public function create()
    {
        return view('backend.pages.brownCowGender.create');
    }
    public function store(Request $request)
    {
        BrownCowGender::create([
            'name'=>$request->cow_name,
            'weight'=>$request->cow_weight,
            'gender'=>$request->cow_gender,
            //'image'=>$fileName
            //'Description'=>$request->feed_description,
            
        ]);
        return redirect()->back()->with('msg','BrownCowGender Created successfully.');
   
       //return to_route('feed.list');

    }
}
