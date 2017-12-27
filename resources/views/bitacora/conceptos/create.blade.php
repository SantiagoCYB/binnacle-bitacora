@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Concepto</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
				</ul>
			</div>
			@endif


			{!!Form::open(array('url'=>'bitacora/conceptos','method'=>'POST','autocomplete'=>'off'))!!}
			{!!Form::token()!!}

			<div class="form-group">
		    <label for="codigo">Código</label> <br/>
		        <select id="" name="codigo" class="form-control">
		          <option value="" selected="selected">- Selecciona -</option>
		          <option value="01">01</option>
		          <option value="02">02</option>
		          <option value="03">03</option>
		          <option value="04">04</option>
		          <option value="05">05</option>
		          <option value="06">06</option>
		          <option value="07">07</option>
		          <option value="08">08</option>
		          <option value="09">09</option>
		          <option value="10">10</option>
		    </select>
		    </div>

			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre">
			</div>

			<div class="form-group">
				<label for="descripcion">Descripción</label>
				<textarea type="text" name="descripcion" class="form-control"></textarea> 
			</div>

			<div class="form-group">
				<button class="btn btn-primary" type="submit"> Guardar </button>
				<a href="/Proyecto/public/bitacora/conceptos" class="btn btn-danger" type="reset" role="button"> Cancelar </a>
			</div>
			{!!Form::close()!!}
		</div>
	</div>
@endsection