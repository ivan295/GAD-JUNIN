@extends('adminlte::layouts.app')

@section('htmlheader_title')
{{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
<form method="post"  action="{{route('noticia.create')}}" target="request" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Noticias</h3>
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
				<br>
				<div class="col-md-12">
				<textarea class="form-control ckeditor" id="text1" name="text1"></textarea>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success">Crear Noticia</button>
				</div>

			</div>
		</div>

	</div>


</form>

<!--<script src="{{ asset('ckeditor/ckeditor.js') }}"></script> -->
<script src="{{ asset('ckeditorfull/ckeditor.js') }}"></script>
@endsection