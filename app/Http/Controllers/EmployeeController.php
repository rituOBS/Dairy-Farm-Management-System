<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    public function list()
    {
      
        $employee=Employee::all();
        
        //$employee=Employee::paginate(4);
        return view('backend.pages.employee.list',Compact('employee'));
    }
    public function create()
    {
        return view('backend.pages.employee.create');
    }

     public function delete($id)
     {
        $employee=Employee::find($id);

        $employee->delete();

        return redirect()->back()->with('msg','Employee Deleted Successfully');
     }
     public function edit($id)
     {
        $employee=Employee::find($id);
        $employees=Employee::all();

        return view('backend.pages.employee.edit',compact('employee','employees'));


     }
    public function store(Request $request)
    {
    //    dd($request);

         $request->validate([
            'employee_name'=>'required',
             'employee_workhour'=>'required',
             'employee_salary'=>'required|gt:100',
             'employee_designation'=>'required|gt:10'
         ]);

            Employee::create([
                'name'=>$request->employee_name,
                'designation'=>$request->employee_designation,
                'salary'=>$request->employee_salary,
                'workhour'=>$request->employee_workhour,
                'description'=>$request->employee_description,
                
            ]);
            return redirect()->back()->with('msg','Employee Created successfully.');
        }
        public function update(Request $request,$id)
        {
        $request->validate([
                'employee_name'=>'required',
                'employee_workhour'=>'required',
                'employee_salary'=>'required|gt:100',
                 'employee_designation'=>'required|gt:10'
            ]);

            $employee=Employee::find($id);

            
            $employee->update([
                'name'=>$request->employee_name,
                'designation'=>$request->employee_designation,
                'salary'=>$request->employee_salary,
                'workhour'=>$request->employee_workhour,
                'description'=>$request->employee_description,
                
            ]);

            return redirect()->back()->with('msg','Employee Updated successfully.');

        }

    }

