<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\StaffList;
use App\Models\MilkList;

class DashboardController extends Controller
{
    public function dashboard(){

        $categories=Category::all()->count();
        
        $staffs=StaffList::all()->count();
        $milks=MilkList::all()->count();
        return view('backend.pages.home',compact('categories'),compact('staffs'),compact('milks'));
    }

    
}
