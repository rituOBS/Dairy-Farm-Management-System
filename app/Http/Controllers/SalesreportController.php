<?php

namespace App\Http\Controllers;

use App\Models\SalesReport;
use Illuminate\Http\Request;

class SalesreportController extends Controller
{
    public function list()
    {
      $data=SalesReport::all();
        return view('backend.pages.salesreport.list',compact('data'));
    }
    public function create()
    {
        return view('backend.pages.salesreport.create');
    }
    public function store(Request $request)
    {
    //    dd($request);

        // $request->validate([
        //     'employee_name'=>'required',
        //     'employee_workhour'=>'required',
        //     'employee_salary'=>'required|gt:100',
        //     'employee_designation'=>'required|gt:10'
        // ]);
//dd($request->all());
            SalesReport::create([
                'name'=>$request->customer_name,
                'quantity'=>$request->salesreport_quantity,
                'total_price'=>$request->salesreport_total_price,
                'date'=>$request->salesreport_date,
                //'Description'=>$request->salesreport_description,
                
            ]);
    
        return to_route('salesreport.list');
        }
}
