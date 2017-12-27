@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de conceptos <a href="conceptos/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('bitacora.conceptos.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Código</th>
					<th>Nombre</th>
					<th>Descripción</th>
					<th>Opciones</th>
				</thead>
				@foreach($conceptos as $con)
				<tr>				
					<td>{{ $con->codigo }}</td>
					<td>{{ $con->nombre }}</td>	
					<td>{{ $con->descripcion }}</td>
					<td>
						<a href="{{URL::action('ConceptosController@edit', $con->id)}}"><div class="btn btn-info">Editar</div></a>
						<a href="" data-target="#modal-delete-{{$con->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('bitacora.conceptos.modal')
				@endforeach
			</table>
		</div>
		{{$conceptos->render()}}
	</div>
</div>
@stop