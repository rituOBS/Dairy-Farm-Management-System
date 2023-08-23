<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function all_report()
    {
        return view('backend.pages.report.all_report');
    }
    public function staff_report()
    {
        return view('backend.pages.report.staff_report');
    }
    public function cowShade_report()
    {
        return view('backend.pages.report.cowShade_report');
    }
    public function cowList_report()
    {
        return view('backend.pages.report.cowList_report');
    }
    public function category_report()
    {
        return view('backend.pages.report.category_report');
    }
    public function feed_report()
    {
        return view('backend.pages.report.feed_report');
    }
    public function feedSchedule_report()
    {
        return view('backend.pages.report.feedSchedule_report');
    }
    public function milk_report()
    {
        return view('backend.pages.report.milk_report');
    }
    public function vaccineMonitor_report()
    {
        return view('backend.pages.report.vaccineMonitor_report');
    }
    public function vaccineSchedule_report()
    {
        return view('backend.pages.report.vaccineSchedule_report');
    }
}
