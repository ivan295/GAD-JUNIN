<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TransparenciaController extends Controller
{
    public function index(){
        
        return view('vendor.adminlte.transparencia');
    }
}
