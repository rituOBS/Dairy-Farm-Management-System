<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
//use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function home()
    {

      $categories=Category::all();
        return view('frontend.pages.home',compact('categories'));
    }

   

    public function search()
    {
      $searchKey=request()->search;
    }

}
