@extends('layouts.admin')

@section('content')
<h3 class="text-center">Administração</h3>
<div class="container">
    <div class="row">
        <div class="col-md-10 panel">
            <div class="panel panel-default">
                

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                            <div class="card card-inverse card-info">
                            <img class="card-img-top" src="network.png">
                                <div class="card-block">
                                    
                                    <h4 class="card-title">Departamentos</h4>
                                    <div class="card-text">
                                        Trabalhe com os departamentos da empresa
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route ('departments.index') }}" class="btn btn-info btn-sm">Exibir</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                            <div class="card card-inverse card-info">
                            <img class="card-img-top" src="employee.png">
                                <div class="card-block">
                                    
                                    <h4 class="card-title">Empregados</h4>
                                    <div class="card-text">
                                        Veja todos os funcionários da empresa
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route ('employees.index') }}" class="btn btn-info btn-sm">Exibir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
