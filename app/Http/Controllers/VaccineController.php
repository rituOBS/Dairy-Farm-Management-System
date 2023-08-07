<?php

namespace App\Http\Controllers;
use App\Models\Vaccine;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    public function list()
    {
       $vaccine=Vaccine::all();
        //$staff=StaffList::paginate(4);
        return view('backend.pages.vaccine.list',compact('vaccine'));
    }
    public function create()
    {
        return view('backend.pages.vaccine.create');
    }

    
    public function store(Request $request)
    {
        Vaccine::create([
            'name'=>$request->cow_name,
            'date'=>$request->vaccine_date,
            'remark'=>$request->vaccine_remark,
            //'image'=>$fileName
            //'Description'=>$request->feed_description,
            
        ]);
        return redirect()->back()->with('msg','Vaccine Created successfully.');
   
       //return to_route('feed.list');

   }
}
