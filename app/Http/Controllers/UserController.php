<?php

namespace App\Http\Controllers;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
      
    public function login() 
    {
       
        return view('backend.pages.login');
    }

    public function doLogin(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
       $auth=$request->except('_token');

       if (Auth::attempt ($auth)){
        return to_route('dashboard');
       }
       else{
        return to_route('admin.login');
       }
       
    }
    
   public function logout()
   {
       
      
       Auth::logout();

       return redirect()->route('admin.login')->with('msg','Logout Done Successfully');
   }


   public function profile(){
    $profile=User::all();

    
     return view('backend.pages.profiles.index',compact('profile'));
 }

 public function update(Request $request,$id){
     $user= User::find($id);
     $user->update([
         'name'=>$request->user_name,
         'email'=>$request->user_email,
         'password'=>$request->change_pass
     ]);

     Toastr::success('Update successfully');
     return redirect()->route('profile.show');
}
 }


    


    


