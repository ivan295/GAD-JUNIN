<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyVController extends Controller
{
    public function index(){
        return view('vendor.adminlte.misionyvision');
    }
}
