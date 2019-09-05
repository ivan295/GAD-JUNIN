<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Lotaipmes;

class LotaipMesController extends Controller
{
    public function index(){
        return view('vendor.adminlte.nuevalotaipmes');
    }

    public function store(Request $request){
        $mes = new Lotaipmes;
        $mes->descripcion=$request->mes;
        $mes->id_anio=$request->anio;
        $mes->id_usuario=$request->id_usuario;
        $mes->save();
        return view('vendor.adminlte.nuevalotaipmes');
    }


}
