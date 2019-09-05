@extends('adminlte::layouts.app')

@section('htmlheader_title')
{{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
<form method="post" action="{{route('lotaipanio.create')}}" target="request" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Crear Año</h3>
				</div>
				<input type="hidden" class="form-control" name="id_usuario" id="id_usuario" value="{{Auth::user()->id}}">
				<div class="col-md-12">
					<label for="titulo">Año</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
						<input type="text" class="form-control" name="anio" id="anio" placeholder="Año" required>
					</div>
                </div>
                <input type="hidden" class="form-control" name="id_usuario" id="id_usuario" value="{{Auth::user()->id}}">

                <br>
                <div class="modal-footer">
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-save"></span> Guardar</button>   
          </div>
            </div>
        </div>
    </div>
</form>

@endsection