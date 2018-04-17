@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Informe: {{ $informes->nombre }}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($informes,['method'=>'PATCH', 'route'=>['informes.update', $informes->id]])!!}
			{!!Form::token()!!}
			<div class="form-group">
				<label for="descripcion">Descripción</label>
				<textarea type="text" name="descripcion" class="form-control"></textarea> 
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit"> Guardar </button>
				<a href="/bitacora/informes" class="btn btn-danger" type="reset" role="button"> Cancelar </a>
			</div>
			{!!Form::close()!!}
		</div>
	</div>
@endsection