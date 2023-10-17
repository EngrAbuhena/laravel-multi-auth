<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    //Dashboard
    public function AdminDashboard(): View
    {
        return view('admin.admindashboard');
    }

}
