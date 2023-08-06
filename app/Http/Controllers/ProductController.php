<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductLists;
class ProductController extends Controller
{
    public function list()
    {
        $product=ProductLists::all();
        $data=ProductLists::paginate(4);
        //$feed=ProductLists::paginate(4);
        return view('backend.pages.product.list',compact('data'));
    }
    public function create()
    {
        return view('backend.pages.product.create');
    }
    public function delete($id)
    {
       $product=ProductLists::find($id);

       $product->delete();

       return redirect()->back()->with('msg','ProductLists Deleted Successfully');
    }
    public function edit($id)
    {
        $product=ProductLists::find($id);
        $product=ProductLists::all();

        return view('backend.pages.product.edit',compact('product','product'));


     }
    public function store(Request $request)
    {
      //dd($request->all());

         $request->validate([
             'product_name'=>'required',
             'product_category'=>'required',
             'product_quantity'=>'required',
             'total_price'=>'required|gt:100',
             //'employee_designation'=>'required|gt:10'
         ]);
// dd($request->all());

// $fileName=null;
// if($request->hasFile('product_image')){
//     $image=$request->file('product_image');
//     $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
//     $image->storeAs('/products',$fileName);
    
// }
$fileName=null;
if($request->hasFile('product_image'))
{
    $image=$request->file('product_image');
    $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
    $image->storeAs('/products',$fileName);

}
// dd($fileName);
            ProductLists::create([
                'name'=>$request->product_name,
                'category'=>$request->product_category,
                'quantity'=>$request->product_quantity,
                'total_price'=>$request->total_price,
                'image'=>$fileName
                //'Description'=>$request->feed_description,
                
            ]);
            return redirect()->back()->with('msg','Employee Created successfully.');
       
           //return to_route('feed.list');

        }

    public function report(){
        return view('backend.pages.report.productReport');
    }

    public function reportSearch(Request $request){

        dd($request->all());

        $request->validate([
            'from_date'=>'required|date',
            'to_date'=>'required|date|after:from_date'
        ]);

        $from=$request->from_date;
        $to=$request->to_date;

        $products=ProductLists::whereBetween('created_at', [$from , $to])->get();
        // dd($products);
        return view('backend.pages.report.productReport',compact('products'));

    }
}
