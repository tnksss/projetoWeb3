<div class=".btn-group">
	
	<a href="{{ route('departments.show',['id' => $department->id]) }}" class="btn-sm btn btn-info"><img src="/find_in_page_white.png" class="icon"></a>

	<a href="{{ route('departments.edit',['id' => $department->id]) }}" class="btn-sm btn btn-warning"><img src="/build_white.png" class="icon"></a>
	
	{!! Form::open([
	    'method' => 'delete', 'route' => ['departments.destroy', $department->id], 'class' => 'inline-block'
	]) !!}

	<button class="btn btn-sm btn-danger" type="submit" title="Deletar" onclick="return confirm('Tem certeza?')">
	    <img src="/delete_forever_white.png" class="icon"></span>
	</button>
	{!! Form::close() !!}
	
</div>