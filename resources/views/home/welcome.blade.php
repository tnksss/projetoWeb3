@extends('layouts.app')

@section('content')
<div class="align-center">
	<section class="text-center">
	  <article class="card mb-5">
	    <div class="card-body">	
	      <header class="card-title">
			<h1>Projeto Web 3</h1>
	      </header>

	      <p class="card-text">
	        É a maneira mais fácil para gerenciar os colaboradores de sua empresa. Criar departamentos e incluir empregados neles é o princípio do controle	. Desta maneira a organização da empresa em departamentos fica muito rápida e clara!
	      </p>
	    </div>
	  </article>

	  <article class="card mb-5">
	    <div class="card-body">
	      <header class="card-title">
	        <h2>Por onde eu começo?</h2>
	      </header>

	      <p class="card-text">
	        Se você fez essa pergunta, deixa conosco!
	      </p>
			
	      <a href="{{ route('register') }}" class="btn btn-primary"> Registre-se agora mesmo!</a>
	    </div>
	  </article>
	</section>
</div>
@endsection

