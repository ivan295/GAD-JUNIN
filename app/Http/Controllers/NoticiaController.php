<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticias;

class NoticiaController extends Controller
{
    public function index(){
    return view('vendor.adminlte.noticia');
    //, compact('NuevaHabitacion'));
    }

    public function store(Request $request){
            //dd($request);    
        $Noticia = new Noticias;
        $Noticia->titulo = $request->titulo;
        $Noticia->resumen = $request->resumen;
        $Noticia->imagen = $request->imagen;
        $Noticia->id_usuario = $request->id_usuario;
        $Noticia->descripcion = $request->text1;
        $Noticia->save();
        return redirect('/noticia');
        
        }
}
