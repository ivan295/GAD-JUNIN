<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Lotaipanio;
class LotaipAnioController extends Controller
{
   public function index(){
    // $anio = \DB::table('lotaipanio')
    //->join('users','users.id','=','lotaipanio.id_usuario')
    // ->select('lotaipanio.*','users.nombre as usuario')
    // ->orderBy('id', 'desc')
    // ->get();
    // return view('adminlte::Publicar', compact('Noticia'));
       return view('vendor.adminlte.nuevalotaipanio');

   }

   public function store(Request $request){
        $lota = new Lotaipanio;
        $lota->descripcion = $request->anio;
        $lota->id_usuario = $request->id_usuario;
        $lota->save();
        return redirect('/lotaipanio');

   }
}
