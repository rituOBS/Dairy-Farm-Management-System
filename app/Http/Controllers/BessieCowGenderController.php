<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\BessieCowGender;
use Illuminate\Http\Request;

class BessieCowGenderController extends Controller
{
    public function index()
    {
       $bessieCowGender=BessieCowGender::all();
       //$bessieCowGender=BessieCowGender::paginate(4);
        return view('backend.pages.bessieCowGender.index',compact('bessieCowGender'));
    }
    public function create()
    {
        return view('backend.pages.bessieCowGender.create');
    }

    public function store(Request $request)
    {
        BessieCowGender::create([
            'name'=>$request->cow_name,
            'weight'=>$request->cow_weight,
            'gender'=>$request->cow_gender,
           
        ]);

        Toastr::success('Created Successfully', 'BessieCowGender', ['options']);
        return redirect()->back();

        return redirect()->back()->with('msg','BessieCowGender Created successfully.');

    }
}
