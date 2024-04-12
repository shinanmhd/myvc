<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use voku\helper\ASCII;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('dashboard');
    }
}
