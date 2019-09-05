<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransparenciaController extends Controller
{
    public function index(){
        return view('vendor.adminlte.transparencia');
    }
}
