@extends('layouts.admin')

@section('content')
    <table class="table table-hover table-striped">
        <thead>
           <thead>
					<th>ID</th>
					<th>Documento</th>
					<th>Apellidos</th>
					<th>Nombre</th>
					<th>Dirección</th>
					<th>Genero</th>
				</thead>
				@foreach($personas as $per)
				<tr>
					<td>{{ $per->id }}</td>
					<td>{{ $per->documento }}</td>
					<td>{{ $per->apellidos }}</td>
					<td>{{ $per->nombre }}</td>
					<td>{{ $per->direccion }}</td>
					<td>{{ $per->genero }}</td>
				</tr>
            @endforeach
        </tbody>
    </table>
@endsection