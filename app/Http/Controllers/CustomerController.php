<?php

namespace App\Http\Controllers;

use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:customers',
            'password'=>'required|min:6'
        ]);
        
        Customer::create([
            'name'=>$request->name,
            'password'=>bcrypt($request->password),
            'email'=>$request->email,
        ]);

    return redirect()->route('home')->with('msg','Registration Done Successfully.');

    }
    public function dologin(Request $request){
       
        $credentials=$request->except('_token');
        // dd($credentials);

        if(auth()->guard('customer')->attempt($credentials))
        {
            // dd('valid');
            return redirect ()->route('home');
        }else{
            // dd('invalid');
        }
        return redirect()->back();
    }

}