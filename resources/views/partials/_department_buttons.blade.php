<div class="btn-group">
	<a href="{{ route('departments.show',['id' => $department->id]) }}" class="btn-sm btn btn-info"><img src="find_in_page_white.png" class="icon"></a>

	<a href="{{ route('departments.edit',['id' => $department->id]) }}" class="btn-sm btn btn-warning"><img src="build_white.png" class="icon"></a>

	
	<a href="{{ route('departments.destroy',['id'=> $department->id]) }}" class="btn-sm btn btn-danger" onclick="event.preventDefault();
		document.getElementById('delete-form').submit();">
		<img src="delete_forever_white.png" class="icon">
	</a>

	<form id="delete-form" action="{{ route('departments.destroy',['id'=> $department->id]) }}" method="POST" style="display: none;">
		{{ csrf_field() }}
	</form>

</div>