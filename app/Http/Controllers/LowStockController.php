<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LowStockController extends Controller
{
    public function index()
    {
        return view('low-stock'); 
    }
}
