@extends('layouts.admin')
@section('content')
	@include('shared.form_errors')
		<div class="col-md-6">
			<fieldset class="fieldset">
			<legend> Cadastrar Funcionário </legend>
		
		    {!! Form::open(['route' => 'employees.store']) !!} 
		    	
		    	<div class="form-group">
				    <label for="name"> Nome </label>
				    <input  id="name" name="name" class="form-control" value="" autofocus>
				</div>
				<div class="form-group">
				    <label for="lastName"> Sobrenome </label>
				    <input  id="lastName" name="lastName" class="form-control" value="">
				</div>

				<div class="form-group">
				    <label for="role"> Cargo </label>
				    <input  id="role" name="role" class="form-control" value="">
				</div>
				<div class="form-group">
					<select class="custom-select" for="department_name">
	  					<option selected>Departamento:</option>
					    <option value="1">Recursos Humanos</option>
					    <option value="2">Administrativo</option>
					    <option value="3">Three</option>
					</select>

				</div>

				<div class="form-group">
    				<input type="submit" class="btn btn-primary" value="Salvar">
    			</div>
			</fieldset>
				
		    {!! Form::close() !!} 
		</div>

@endsection





