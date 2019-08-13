<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Noticias;
use DB;

class NoticiaController extends Controller
{
    public function index(){
        return view('vendor.adminlte.noticia');
        //,compact('noticia'));
    //return view('adminlte::index', compact('noticia'));
    }
    public function store(Request $request){
            //dd($request);    
        $Noticia = new Noticias;
        $Noticia->titulo = $request->titulo;
        $Noticia->resumen = $request->resumen;
        $Noticia->imagen = $request->imagen;
        $Noticia->id_usuario = $request->id_usuario;
        $Noticia->descripcion = $request->text1;

        $img=$request->file('imagen');//trae la imagen
        $file_ruta= time().'_'.$img->getClientOriginalName();//usa el tiempo y el nombre de la imagen para definir nuevo nombre
        Storage::disk('imgNoticias')->put($file_ruta, file_get_contents( $img->getRealPath() ));
        
        $Noticia->imagen= $file_ruta;

        $Noticia->save();
        return redirect('/noticia');
        
        }
}
