<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function ChartJs()
    {
        return view('backend.layouts.chartJs');
    }
}
