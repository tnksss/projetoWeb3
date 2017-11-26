@extends('layouts.admin')

@section('content')
<div class="margin-bottom ">
    <h3 class="text-center ">Listagem de Departamentos</h3>

</div>
<div>
    <a href="{{ route('departments.create') }}" class="btn btn-primary"> Cadastrar Departamento</a>
</div>
<hr>

<table class="table table-bordered">
    <tr>
        
        <th>Id</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Qtde de Funcionários</th>
        <th class="col-acoes">Ações</th>
    </tr>
@include('shared.empty_table', ['collection' => $departments])

@foreach($departments as $department)
    <tr>
        
        <td>{{ $department->id }}</td>
        <td>{{ $department->name }}</td>
        <td>{{ $department->description }}</td>
        <td>{{ $department->countEmployees}}</td>
        <td>
 
            
           @include('partials._department_buttons')
            
            
        
        </td>
    </tr>
    @endforeach    
</table>
<div class="text-center">
{{$departments->links()}}
</div>
@endsection
