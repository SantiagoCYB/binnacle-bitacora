@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de Informes <a href="informes/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('bitacora.informes.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>ID</th>
					<th>Persona</th>
					<th>Concepto</th>
					<th>Descripción</th>
					<th>Fecha-Reporte</th>
					<th>Opciones</th>
				</thead>
				@foreach($informes as $inf)
				<tr>
					<td>{{ $inf->id }}</td>
					<td>{{ $inf->nombre }}</td>
					<td>{{ $inf->codigo }}</td>
					<td>{{ $inf->descripcion }}</td>
					<td>{{ $inf->created_at}}</td>
					<td>
						<a href="{{URL::action('InformesController@edit', $inf->id)}}"><div class="btn btn-info">Editar</div></a>
						<a href="" data-target="#modal-delete-{{$inf->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						<a href="{{ route('informes.pdf') }}?id=1" data-target=""><button class="btn btn-warning fa fa-file-pdf-o">Reporte en PDF</button></a>
					</td>
				</tr>
				@include('bitacora.informes.modal')
				@endforeach
			</table>
		</div>
		{{$informes->render()}}
	</div>
</div>
@stop