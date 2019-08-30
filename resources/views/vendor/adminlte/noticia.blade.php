@extends('adminlte::layouts.app')

@section('htmlheader_title')
{{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
<form method="post" action="{{route('noticia.create')}}" target="request" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Datos de Noticia</h3>
				</div>
				<input type="hidden" class="form-control" name="id_usuario" id="id_usuario" value="{{Auth::user()->id}}">
				<div class="col-md-12">
					<label for="titulo">Título</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
						<input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título" required>
					</div>
				</div>
				<div class="col-md-12">
					<label for="resumen">Resumen</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
						<input type="text" class="form-control" name="resumen" id="resumen" placeholder="Resumen" required>
					</div>
				</div>
				<div class="col-md-12">
					<label for="resumen">Imagen</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
						<input type="file" class="form-control" name="imagen" id="imagen" placeholder="imagen" required>
					</div>
				</div>
				<div class="col-md-12">
					<label>Lugar de Visualización</label>
					<div class="select-group">
						<select class="form-control selectpicker" name="lugar" id="lugar">
							<option value="0">Seleccionar Sección de Visualización</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</div>
				</div>
				<div class="modal-footer">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Contenido de la Noticia</h3>
				</div>
				<div class="col-md-12">
					<textarea class="form-control ckeditor" id="text1" name="text1"></textarea>
				</div>
				<button type="submit" class="btn btn-success">Crear Noticia</button>
			</div>
		</div>
	</div>
</form>

<!--<script src="{{ asset('ckeditor/ckeditor.js') }}"></script> -->
<script src="{{ asset('ckeditorfull/ckeditor.js') }}"></script>
@endsection