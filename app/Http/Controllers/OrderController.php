<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderList;

class OrderController extends Controller
{
    public function list()
    {
        $data=OrderList::paginate(4);
        return view('backend.pages.order.list',compact('data'));
    }
    public function create()
    {
        return view('backend.pages.order.create');
    }


    public function delete($id)
    {
       $order=OrderList::find($id);

       $order->delete();

       return redirect()->back()->with('msg','OrderList Deleted Successfully.');
    }

    
    public function store(Request $request)
    {
    //    dd($request);

        $request->validate([
            'customer_name'=>'required',
            'product_quantity'=>'required',
            'order_date'=>'required|gt:100',
            'total_price'=>'required|gt:10'
        ]);
//dd($request->all());
            OrderList::create([
                'name'=>$request->customer_name,
                'quantity'=>$request->salesreport_quantity,
                'total_price'=>$request->total_price,
                'date'=>$request->order_date,
                //'Description'=>$request->salesreport_description,
                
            ]);
    
        return to_route('order.list');
        }
}

