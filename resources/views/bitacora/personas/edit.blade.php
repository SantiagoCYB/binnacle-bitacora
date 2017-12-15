@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Persona: {{ $personas->nombre }}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($personas,['method'=>'PATCH', 'route'=>['personas.update', $personas->id]])!!}
			{!!Form::token()!!}
			<div class="form-group">
				<label for="documento">Documento</label>
				<input type="text" name="documento" class="form-control" value="{{$personas->documento}}" placeholder="Documento">
			</div>			
			<div class="form-group">
				<label for="apellidos">Apellidos</label>
				<input type="text" name="apellidos" class="form-control" value="{{$personas->apellidos}}" placeholder="Apellidos">
			</div>
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" value="{{$personas->nombre}}" placeholder="Nombre">
			</div>

			<div class="form-group">
				<label for="direccion">Dirección</label>
				<input type="text" name="direccion" class="form-control" value="{{$personas->direccion}}" placeholder="Dirección">
			</div>
			<div class="form-group">
		    <label for="genero">Genero</label> <br/>
		        <select id="" name="genero" class="form-control" value="{{$personas->genero}}">
		          <option value="" selected="selected">- Selecciona -</option>
		          <option value="M">Masculino</option>
		          <option value="F">Femenino</option>
		    </select>
		    </div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit"> Guardar </button>
				<button class="btn btn-danger" type="reset"> <a href="/Proyecto/public/bitacora/personas"> Cancelar </button></a>
			</div>
			{!!Form::close()!!}
		</div>
	</div>
@endsection