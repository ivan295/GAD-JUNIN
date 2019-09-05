<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Lotaip;
class LotaipController extends Controller
{
    public function index(){
        
        return view('vendor.adminlte.nuevalotaip');
    }

    public function store(Request $request){

        $lotaip = new Lotaip;
        $lotaip->titulo = $request->titulo;
        $lotaip->url=$request->url;
        $lotaip->id_mes=$request->mes;
        $lotaip->id_usuario=$request->id_usuario;
        $lotaip->save();
        return view('vendor.adminlte.nuevalotaip');

    }
}
