<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseRateController extends Controller
{
    public function index()
    {
        $data_baseRate = \App\Base_Rate::all();
        return view('Management.baseRate',['data_baseRate' => $data_baseRate]);
    }
}
