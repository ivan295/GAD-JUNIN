<?php

namespace App\Http\Controllers;

use App\Noticias;
use Illuminate\Http\Request;

class PublicarController extends Controller
{
    public function index(){
        $Noticia = \DB::table('noticias')->join('users','users.id','=','noticias.id_usuario')
        ->where('noticias.estado','=', 'Espera')
        ->select('noticias.*','users.nombre as usuario')
        ->orderBy('id', 'desc')
        ->get();
        return view('adminlte::Publicar', compact('Noticia'));
    }

    public function public($id){
        $publicar = Noticias::find($id);
        $publicar->estado='Publicado';
        $publicar->update();
        return redirect('publicar');// publicar es el nombre de la ruta que lleva directamente al index
    }
    public function edit($id)
    {
        
    }
    public function update(){

    }
}
