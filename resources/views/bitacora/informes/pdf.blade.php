<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Informes </title>
	<style type="text/css">
		table {
			border-collapse: collapse;

		}
		td,th{
			border: 1px solid;
			padding: 15px;
		}
	</style>
</head>
<body>
<h1 class="page-header">Listado de informes</h1>
	<table  style="width:100%">
		<tr>
			<th>ID</th>
					<th>Persona</th>
					<th>Concepto</th>
					<th>Descripción</th>
					<th>Fecha-Reporte</th>
				</thead>
				@foreach($informes as $inf)
				<tr>
					<td>{{ $inf->id }}</td>
					<td>{{ $inf->nombre }}</td>
					<td>{{ $inf->codigo }}</td>
					<td>{{ $inf->descripcion }}</td>
					<td>{{ $inf->created_at}}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>