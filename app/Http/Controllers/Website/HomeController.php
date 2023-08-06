<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }
    public function login() 
    {
      return view('frontend.pages.login');  
    }
    public function registration() 
    {
      return view('frontend.pages.registration');  
    }

    public function search()
    {
      $searchKey=request()->search;
    }

}
