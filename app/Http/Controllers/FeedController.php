<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\FeedList;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function list()
    {
        $feed=FeedList::all();
        $feed=FeedList::paginate(4);
        return view('backend.pages.feed.list',compact('feed'));
    }
    public function create()
    {
        return view('backend.pages.feed.create');
    }

    public function delete($id)
    {
       $feed=FeedList::find($id);

       $feed->delete();

       return redirect()->back()->with('msg','FeedList Deleted Successfully');
    }
    public function edit($id)
    {
        $feed=FeedList::find($id);
        $feeds=FeedList::all();

        return view('backend.pages.feed.edit',compact('feed','feeds'));


     }
    public function store(Request $request)
    {
      //dd($request->all());

         $request->validate([
             'feed_name'=>'required',
             'feed_item'=>'required',
             'feed_daily_consumption'=>'required',
             //'employee_designation'=>'required|gt:10'
         ]);
//dd($request->all());
            FeedList::create([
                'name'=>$request->feed_name,
                'item'=>$request->feed_item,
                'daily_consumption'=>$request->feed_daily_consumption,
                'Description'=>$request->feed_description,
                
            ]);
            Toastr::success('Created Successfully', 'FeedList', ['options']);
            return redirect()->back();
            
            return redirect()->back()->with('msg','Employee Created successfully.');
       
           //return to_route('feed.list');
        }
        public function update(Request $request,$id)
        {
            $request->validate([
                'feed_name'=>'required',
                'feed_item'=>'required',
                'feed_daily_consumption'=>'required',
                //'employee_designation'=>'required|gt:10'
            ]);

            $feed=FeedList::find($id);
            $feed->update([
                'name'=>$request->feed_name,
                'item'=>$request->feed_item,
                'daily_consumption'=>$request->feed_daily_consumption,
                
            ]);
            return redirect()->back()->with('msg','FeedList Updated successfully.');
        }

        public function feed_report(){
            return view('backend.pages.report.feed_report');
        }
    
        public function feed_report_search(Request $request){
    
            $request->validate([
                'from_date'=>'required|date',
                'to_date'=>'required|date|after:from_date'
            ]);
    
            $from=$request->from_date;
            $to=$request->to_date;
    
            $feed=FeedList::whereBetween('created_at', [$from , $to])->get();
            return view('backend.pages.report.feed_report',compact('feed'));
    
        }
    }

