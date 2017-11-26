@extends('layouts.admin')
@section('content')
<div class="row">
<div class="col-md-9">
<h3 class="text-center ">Detalhes do Funcionário</h3>


<div class="text-center">
	<div class="container-center">
		<div class=" btn btn-warning">
			<img src="..\ryan.jpg" style="border-radius: 60px; height: 123px; width:123px;">		
		</div>
		<h4 class="title">{{$employee->name." ".$employee->lastName }}</h4>
		<p class="category">{{$employee->department->name}}</p>
		<p class="category">{{$employee->role}}</p>
		
		@include('partials._employee_buttons')
	</div>
</div>
</div>		
</div>


@endsection