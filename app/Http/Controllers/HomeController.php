<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Homepage()
    {
        return view ('admin.homepage');
    }

    // public function EmployeeHomepage()
    // {
    //     return view('employee.master');
    // }

    public function Firstpage()
    {
        return view ('admin.firstpage');
    }

    
}
