<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
      
        $category=Category::paginate(4);
        return view('backend.pages.categories.list',compact('category'));
    }
    public function create()
    {
        return view('backend.pages.categories.create');
    }
    public function delete($id)
     {
        $category=Category::find($id);

        $category->delete();

        return redirect()->back()->with('msg','Category Deleted Successfully');
     }


     public function edit($id)
     {
        $categories=Category::find($id);
        $category=Category::all();

        return view('backend.pages.categories.edit',compact('category','categories'));


     }
    public function store(Request $request)
    {
    //    dd($request);

         //$request->validate([
             //'catrgory_name'=>'required',
             //'employee_workhour'=>'required',
             //'employee_salary'=>'required|gt:100',
             //'employee_designation'=>'required|gt:10'
        // ]);
        $fileName=null;
        if($request->hasFile('category_image')){
            $image=$request->file('category_image');
            $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/categories',$fileName);
        }
        //dd($fileName);

            Category::create([
                'name'=>$request->category_name,
                'image'=>$fileName
                
            ]);
         
            return redirect()->back()->with('msg','Employee Created successfully.');
        }
        public function update(Request $request,$id)
        {
            //    dd($request);
        
                 $request->validate([
                     'categories_name'=>'required',
                     //'employee_status'=>'required',
                    
                 
                 ]);
                 $category=Category::find($id);

                 $category::update([
                    'name'=>$request->category_name,
                    
                ]);
                return redirect()->back()->with('msg','Category Updated successfully.');
            }

            public function category_report(){
                return view('backend.pages.report.category_report');
            }
        
            public function category_report_search(Request $request){
        
                $request->validate([
                    'from_date'=>'required|date',
                    'to_date'=>'required|date|after:from_date'
                ]);
        
                $from=$request->from_date;
                $to=$request->to_date;
        
                $category=Category::whereBetween('created_at', [$from , $to])->get();
                return view('backend.pages.report.category_report',compact('category'));
        
            }
                 
                
}
