@extends('layouts.admin')
@section('content')
<h1 class="text-center ">Detalhes do Departamento</h1>
<div class="card">
  <div class="card-header">
	<div class="text-right">
	    @include('partials._department_buttons')
    </div>
    <h3 class="card-title text-center"> <strong>{{$department->name}}</strong></h3>
    
  </div>
  <div class="card-block">
  	<div class="col-md-6">
    <h5 class="card-title">Descrição</h5>
    <p class="card-text">{{$department->description}}</p>
    </div>
    <div class="col-md-6">
    <h5 class="card-title">Funcionários</h5>
    <table class="table table-bordered">
	    <tr>     
	        <th>Id</th>
	        <th>Nome</th>
	        <th>Ações</th>
	    </tr>
		@include('shared.empty_table', ['collection' => $employees])

		@foreach($employees as $employee)
	    <tr>
	        
	        <td>{{ $employee->id }}</td>
	        <td>{{ $employee->name }}</td>
	        <td >
	        	@include('partials._employee_buttons')
	        </td>
	    </tr>
	    @endforeach    
	</table>
	{{$employees->links()}}
    </div>
  </div>
</div>

@endsection