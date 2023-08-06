<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VaccineController extends Controller
{
    public function list()
    {
       // $staff=StaffList::all();
        //$staff=StaffList::paginate(4);
        return view('backend.pages.vaccine.list');
    }
    public function create()
    {
        return view('backend.pages.vaccine.create');
    }
}
