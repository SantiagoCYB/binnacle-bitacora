<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Conceptos </title>
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
<h1 class="page-header">Listado de conceptos</h1>
	<table  style="width:100%">
		<tr>
			<th>ID</th>
					<th>Documento</th>
					<th>Nombre</th>
					<th>Código</th>
					<th>Detalle</th>
					<th>Descripción</th>
					<th>Fecha-Reporte</th>
				</thead>
				@foreach($conceptos as $con)
				<tr>
					<td>{{ $con->id }}</td>
					<td>{{ $con->documento }}</td>
					<td>{{ $con->nombre }}</td>
					<td>{{ $con->codigo }}</td>
					<td>{{ $con->detalle }}</td>
					<td>{{ $con->descripcion }}</td>
					<td>{{ $con->created_at}}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>