@extends('adminlte::layouts.app')

@section('htmlheader_title')
{{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
<script type="text/javascript">
  function consultar(){
    var dato = document.getElementById('consulta_anio').value;
    document.getElementById('anio').value = dato;
  }
</script>
<form method="post" action="{{route('lotaipmes.create')}}" target="request" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Crear Mes</h3>
				</div>
				
                <div class="col-md-12">
              <label>Año</label>
              <div class="select-group">
                <select class="form-control selectpicker" name="anio" id="consulta_anio" onchange="consultar()">                 
                  <option value="0">Seleccionar Año</option>
                  <?php $anio = DB::table('lotaipanio')->get(); ?>
                  @foreach($anio as $a)
                  <option value="<?php  echo $a->id ; ?>"> <?php echo $a->descripcion; ?>  </option>
                  @endforeach
                </select>
              </div>
            </div>
            <input type="hidden" id="anio" name="anio" >
            <div class="col-md-12">
					<label for="titulo">Mes</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
						<input type="text" class="form-control" name="mes" id="mes" placeholder="Mes" required>
					</div>
                </div>
                <input type="hidden" class="form-control" name="id_usuario" id="id_usuario" value="{{Auth::user()->id}}">

                <div class="modal-footer">
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-save"></span> Guardar</button>   
          </div>
            </div>
        </div>
    </div>
</form>
@endsection