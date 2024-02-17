<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Admin Dasboard

    public function AdminDashboard(){





        return view('admin.admin_dashboard');
    } //End of the Function
}
