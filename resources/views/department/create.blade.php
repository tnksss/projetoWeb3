@extends('layouts.admin')
@section('content')
	@include('shared.form_errors')
		<div class="col-md-6">
			<fieldset class="fieldset">
			<legend> Cadastrar Departamento </legend>
		
		    {!! Form::open(['route' => 'departments.store']) !!} 
		    	
		    	<div class="form-group">
				    <label for="name"> Nome* </label>
				    <input  id="name" name="name" class="form-control" value="" autofocus>
				</div>

				<div class="form-group">
 					{!! Form::label('description', 'Descrição*', array('class' => 'control-label', 'rows' => 3 )) !!}
 					<textarea name="description" id="description" class="form-control" rows="5"></textarea> 
				</div>

				<div class="form-group">
    				<input type="submit" class="btn btn-primary" value="Salvar">
    			</div>
			</fieldset>
				
		    {!! Form::close() !!} 
		</div>

@endsection





