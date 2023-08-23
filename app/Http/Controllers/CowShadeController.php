<?php

namespace App\Http\Controllers;
use App\Models\CowShade;
use Illuminate\Http\Request;

class CowShadeController extends Controller
{
    public function list()
    {
        $cowShade=CowShade::all();
        $cowShade=CowShade::paginate(4);
        return view('backend.pages.cowShade.list',compact('cowShade'));
    }
    public function create()
    {
        return view('backend.pages.CowShade.create');
    }

    public function delete($id)
    {
       $cowShade=CowShade::find($id);

       $cowShade->delete();

       return redirect()->back()->with('msg','CowShade Deleted Successfully');
    }
    public function edit($id)
    {
        $cowShade=CowShade::find($id);
        $cowShades=CowShade::all();

        return view('backend.pages.staff.edit',compact('cowShade','cowShades'));


     }

   
    public function store(Request $request)
    {
      //dd($request->all());

        // $request->validate([
             //'product_name'=>'required',
             //'product_category'=>'required',
             //'product_quantity'=>'required',
             //'total_price'=>'required|gt:100',
             //'employee_designation'=>'required|gt:10'
         //]);
// dd($request->all());

// dd($fileName);
            CowShade::create([
                'name'=>$request->shade_name,
                'space'=>$request->standing_space,
                'width'=>$request->standing_width,
                'passage'=>$request->central_passage,
                'alley'=>$request->feed_alley,
                //'image'=>$fileName
                //'Description'=>$request->feed_description,
                
            ]);
            return redirect()->back()->with('msg','Employee Created successfully.');
       
           //return to_route('feed.list');

        }

        public function cowShade_report(){
            return view('backend.pages.report.cowShade_report');
        }
    
        public function cowShade_report_search(Request $request){
    
            $request->validate([
                'from_date'=>'required|date',
                'to_date'=>'required|date|after:from_date'
            ]);
    
            $from=$request->from_date;
            $to=$request->to_date;
    
            $cowShade=CowShade::whereBetween('created_at', [$from , $to])->get();
            return view('backend.pages.report.cowShade_report',compact('cowShade'));
    
        }
}
