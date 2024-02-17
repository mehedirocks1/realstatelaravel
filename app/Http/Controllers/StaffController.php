<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    //Staff Controller

    public function StaffDashboard(){



        return view('staff.staff_dashboard');

    }
}
