<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\HolsteinCowGender;
use Illuminate\Http\Request;

class HolsteinCowGenderController extends Controller
{
    public function index()
    {
       $holsteinCowGender=HolsteinCowGender::all();
       //$bessieCowGender=BessieCowGender::paginate(4);
        return view('backend.pages.holsteinCowGender.index',compact('holsteinCowGender'));
    }
    public function create()
    {
        return view('backend.pages.holsteinCowGender.create');
    }

    public function store(Request $request)
    {
        HolsteinCowGender::create([
            'name'=>$request->cow_name,
            'weight'=>$request->cow_weight,
            'gender'=>$request->cow_gender,   
        ]);

        Toastr::success('Created Successfully', 'HolsteinCowGender', ['options']);
        return redirect()->back();

        return redirect()->back()->with('msg','HolsteinCowGender Created successfully.');
   
    }
}
