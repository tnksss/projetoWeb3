<ul class="nav nav-pills flex-column">
    <a class="navbar-brand" href="{{ route ('home')}}">Dashboard</a>
    <li class="nav-item">

      <a href="{{ route('departments.index') }}">Departamentos</a>
      <a href="{{ route('employees.index') }}">Funcionários</a>
    </li>
  
</ul>

<div class='fixed-bottom btn-logout'>   

	<a href="{{ route('logout') }}" class="btn btn-danger btn-logout" onclick="
	 	event.preventDefault();
     	document.getElementById('logout-form').submit();"> Logout </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
  
</div>