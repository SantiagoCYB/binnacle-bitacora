@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva Persona</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'bitacora/personas','method'=>'POST','autocomplete'=>'off'))!!}
			{!!Form::token()!!}
			<div class="form-group">
				<label for="documento">Documento</label>
				<input type="text" name="documento" class="form-control" placeholder="Documento">
			</div>
			<div class="form-group">
				<label for="apellidos">Apellidos</label>
				<input type="text" name="apellidos" class="form-control" placeholder="Apellidos">
			</div>
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre">
			</div>

			<div class="form-group">
				<label for="direccion">Dirección</label>
				<input type="text" name="direccion" class="form-control" placeholder="Dirección">
			</div>
			<div class="form-group">
		    <label for="genero">Genero</label> <br/>
		        <select id="" name="genero" class="form-control">
		          <option value="" selected="selected">- Selecciona -</option>
		          <option value="M">Masculino</option>
		          <option value="F">Femenino</option>
		    </select>
		    </div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit"> Guardar </button>
				<a href="/bitacora/personas" class="btn btn-danger" type="reset" role="button"> Cancelar </a>
			</div>
			{!!Form::close()!!}
		</div>
	</div>
@endsection