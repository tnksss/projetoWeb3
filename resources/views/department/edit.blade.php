@extends('layouts.admin')
@section('content')
	@include('shared.form_errors')
		<div class="col-md-6">
			<fieldset class="fieldset">
			<legend> Atualizar Departamento </legend>
		
		    
	        {!! Form::open(['route' => ['departments.update', $department->id], 'method' => 'patch']) !!}
	
		    	<div class="form-group">
				    <label for="name"> Nome* </label>
				    <input  id="name" name="name" class="form-control" value="{{ old('name') ?? $department->name ?? null }}" autofocus>
				</div>

				<div class="form-group">
 					{!! Form::label('description', 'Descrição*', array('class' => 'control-label', 'rows' => 3 )) !!}
 					<textarea name="description" id="description" class="form-control" rows="5" >{{$department->description}}</textarea> 
				</div>

				<div class="form-group">
    				<input type="submit" class="btn btn-primary" value="Salvar">
    			</div>
			</fieldset>
				
		    {!! Form::close() !!} 
		</div>

@endsection





