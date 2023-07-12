@extends('components.layout')

@section('body')
    <div class="jumbotron bg-light border border-secondary">
        <div class="row">
            <div class="card-deck">
                <div class="card border boder-primaty">
                    <div class="card-body">
                        <h5 class="card-title"> Cadastro de Chamados </h5>
                        <p class="card-text">
                            Aqui Você irá ver os chamado.
                        </p>
                        <a href="/chamados" class="btn btn-primary"> Cadastrar Chamado</a>
                    </div>
                </div>
                <div class="card border boder-primaty">
                    <div class="card-body">
                        <h5 class="card-title"> Cadastro de Chamados </h5>
                        <p class="card-text">
                            Aqui Você irá cadastrar um chamado.
                        </p>
                        <a href="/chamados" class="btn btn-primary"> Cadastrar Chamado</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
