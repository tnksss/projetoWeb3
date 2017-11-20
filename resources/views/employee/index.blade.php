@extends('layouts.admin')

@section('content')
<div class="margin-bottom ">
    <h3 class="text-center ">Listagem de Funcionários</h3>

</div>
<div>
    <a href="{{ route('employees.create') }}" class="btn btn-primary"> Cadastrar Funcionário</a>
</div>
<hr>

<table class="table table-bordered">
    <tr>
        
        <th>Id</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Cargo</th>
        <th>Departamento</th>
        <th class="col-acoes">Ações</th>
    </tr>
@include('shared.empty_table', ['collection' => $employees])

@foreach($employees as $employee)
    <tr>
        
        <td>{{ $employee->id }}</td>
        <td>{{ $employee->name }}</td>
        <td>{{ $employee->lastName }}</td>
        <td>{{ $employee->role }}</td>
        <td>00</td>
        <td>
 
            
           @include('partials._employee_buttons')
            
            
        
        </td>
    </tr>
    @endforeach    
</table>

    {{ $employees->links() }}

@endsection
