@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Informe</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
				</ul>
			</div>
			@endif


			{!!Form::open(array('url'=>'bitacora/informes','method'=>'POST','autocomplete'=>'off'))!!}
			{!!Form::token()!!}
			
			<div class="form-group">
				<label for="persona">Persona</label> <br/>
				<input name ="persona" class="form-control" id="persona-combo"/>
				<input type="hidden" name ="persona_id" id="persona-id">
		    </div>

		    <div class="form-group">
				<label for="concepto">Concepto</label> <br/>
				<input name ="concepto" class="form-control" id="concepto-combo"/>
				<input type="hidden" name ="concepto_id" id="concepto-id">
		    </div>

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