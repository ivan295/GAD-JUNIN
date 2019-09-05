@extends('adminlte::layouts.app')

@section('htmlheader_title')
{{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
<div class="container-fluid spark-screen">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title"><strong>Noticias</strong></h3>
				</div>
				<div class="box-body">
					<table class="table table-hover table-bordered" id="tablaproductos">
						<thead>
							<tr bgcolor="#00B189">
								<th class='text-center'>Usuario</th>
								<th class='text-center'>Número de Casilla</th>
								<th class="text-center">Titulo</th>
								<th class="text-center">Opciones</th>
							</tr>
						</thead>
						<tbody>
							@if(isset($Noticia))
							@foreach($Noticia as $Not)
							<tr class='text-center'>
								<td>{{$Not->usuario}}</td>
								<td>{{$Not->lugar}}</td>
								<td>{{$Not->titulo}}</td>
								<td class="text-center">
									<div class="row">
										<div class="col-md-1 col-md-offset-2">
											<form action="{{route('publicar.public', $Not->id)}}" method="post">
												{{csrf_field()}}
												<button type="submit" class="btn btn-success btn-sm">Publicar</button></form>
										</div>
										<div class="col-md-2 col-md-offset-2">
											<form action="{{route('publicar.editar', $Not->id)}}" method="post">
												{{csrf_field()}}
												<button type="submit" class="btn btn-warning btn-sm">Editar</button></form>
										</div>
										<div class="col-md-2 col-md-offset-1">
											<form action="" method="post">
												<input type="hidden" name="_method" value="DELETE">
												<input type="hidden" name="_token" value="{{ csrf_token() }}">
												<button type="submit" class="btn btn-danger btn-sm" onclick="return borrar()">Borrar</button>
											</form>
										</div>

									</div>
								</td>
							</tr>
							@endforeach
							@else
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection