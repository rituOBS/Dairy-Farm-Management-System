<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\CowShade;
use Illuminate\Http\Request;

class CowShadeController extends Controller
{
    public function list()
    {
       
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

        return view('backend.pages.cowShade.edit',compact('cowShade'));

     }
   
    public function store(Request $request)
    {
      //dd($request->all());

            CowShade::create([
                'name'=>$request->shade_name,
                'space'=>$request->standing_space,
                'width'=>$request->standing_width,
                'passage'=>$request->central_passage,
                'alley'=>$request->feed_alley,
              
                
            ]);
            Toastr::success('Created Successfully', 'CowShade', ['options']);
            return redirect()->back();
            
            return redirect()->back()->with('msg','Employee Created successfully.');
       
           //return to_route('feed.list');

        }

        public function update(Request $request,$id)
        {
                   $request->validate([
                     'shade_name'=>'required',
                     'standing_space'=>'required',
                     'standing_width'=>'required',
                     'central_passage'=>'required',
                     'feed_alley'=>'required',
                 ]);

                 
                 $cowShade=CowShade::find($id);

                 $cowShade->update([
                    'name'=>$request->shade_name,
                    'space'=>$request->standing_space,
                    'width'=>$request->standing_width,
                    'passage'=>$request->central_passage,
                    'alley'=>$request->feed_alley,
             
                
            ]);
            return redirect()->back()->with('msg','CowShade Updated successfully.');

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
