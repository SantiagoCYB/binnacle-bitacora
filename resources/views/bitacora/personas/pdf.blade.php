
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Personas </title>
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
<h1 class="page-header">Listado de personas</h1>
	<table  style="width:100%">
		<tr>
			<th>ID</th>
			<th>Documento</th>
			<th>Apellidos</th>
			<th>Nombre</th>
			<th>Dirección</th>
			<th>Genero</th>
		</tr>
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
	</table>
</body>
</html>