@extends('layouts.admin')
@section('content')
	@include('shared.form_errors')
		<div class="col-md-6">
			<fieldset class="fieldset">
			<legend> Atualizar Funcionário </legend>
		
		    {!! Form::open(['route' => ['employees.update', $employee->id], 'method' => 'patch']) !!} 
		    	
		    	<div class="form-group">
				    <label for="name"> Nome </label>
				    <input  id="name" name="name" class="form-control" value="{{old('name') ?? $employee->name ?? null }}" autofocus>
				</div>
				<div class="form-group">
				    <label for="lastName"> Sobrenome </label>
				    <input  id="lastName" name="lastName" class="form-control" value="{{old('lastName') ?? $employee->lastName ?? null }}">
				</div>

				<div class="form-group">
				    <label for="role"> Cargo </label>
				    <input  id="role" name="role" class="form-control" value="{{old('role') ?? $employee->role ?? null }}">
				</div>
				<div class="form-group">
    				<label for="department">Departamento</label>
    				<select name="department_id" class="form-control">
    					@foreach ($departments as $department)
    						<option class="form-control" value="{{$department->id}}">{{$department->name}}</option>
    					@endforeach
    				</select>
				</div>
				{{Form::label('employee_photo', 'Foto do Perfil',['class' => 'control-label'])}}
				{{Form::file('image',['class'=>'btn btn-info btn-lg'])}}

				<div class="form-group">
    				<input type="submit" class="btn btn-primary" value="Salvar">
    			</div>
			</fieldset>
				
		    {!! Form::close() !!} 
		</div>

@endsection





