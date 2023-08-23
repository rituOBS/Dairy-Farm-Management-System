<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\StaffList;
use App\Models\VaccineMonitor;
use App\Models\FeedList;
use App\Models\MilkCollection;
use App\Models\FeedSchedule;
use App\Models\MilkList;

class DashboardController extends Controller
{
    public function dashboard(){

        $categories=Category::all()->count();
        
        $staffs=StaffList::all()->count();
        $vaccines=VaccineMonitor::all()->count();
               
        $feedList=FeedList::all()->count();
        $milkList=MilkCollection::all()->count();
        $feedSchedule=FeedSchedule::all()->count();


        return view('backend.pages.home',compact('categories','staffs','milkList','feedList','vaccines','feedSchedule'));
    }

    
}
