@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de personas <a href="personas/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('bitacora.personas.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover ">
				<thead>
					<th>ID</th>
					<th>Documento</th>
					<th>Apellidos</th>
					<th>Nombre</th>
					<th>Dirección</th>
					<th>Genero</th>
					<th>Opciones</th>
				</thead>
				@foreach($personas as $per)
				<tr>
					<td>{{ $per->id }}</td>
					<td>{{ $per->documento }}</td>
					<td>{{ $per->apellidos }}</td>
					<td>{{ $per->nombre }}</td>
					<td>{{ $per->direccion }}</td>
					<td>{{ $per->genero }}</td>
					<td>
						<a href="{{URL::action('PersonasController@edit', $per->id)}}"><div class="btn btn-info">Editar</div></a>
						<a href="" data-target="#modal-delete-{{$per->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						<a href="{{ route('personas.pdf') }}" class="btn btn-warning">Descargar reporte en PDF</a>					
					</td>
				</tr>
				@include('bitacora.personas.modal')
				@endforeach
			</table>
		</div>
		{{$personas->render()}}
	</div>
</div>
@stop