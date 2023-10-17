<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class VendorController extends Controller
{
    //Dashboard
    public function VendorDashboard(): View
    {
        return view('vendor.vendordashboard');
    }
}
