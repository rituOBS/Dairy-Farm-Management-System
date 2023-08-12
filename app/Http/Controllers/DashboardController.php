<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\StaffList;
use App\Models\FeedList;
use App\Models\MilkList;

class DashboardController extends Controller
{
    public function dashboard(){

        $categories=Category::all()->count();
        
        $staffs=StaffList::all()->count();
               
        //$feeds=FeedList::all()->count();
        //$milkList=MilkList::all()->count();
        return view('backend.pages.home',compact('categories'),compact('staffs'));
    }

    
}
