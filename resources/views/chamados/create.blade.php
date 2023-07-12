@extends('components.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header"style="text-align: center">Criar Novos chamados</div>
        <div class="card-body">

            <form action="{{ url('chamados') }}" method="post">
                {!! csrf_field() !!}
                <label>Assunto</label></br>
                <input type="text" name="assunto" id="assunto" class="form-control" placeholder="Assunto do Chamado"></br>
                <label>Descrição</label></br>
                <input type="text" name="descricao" id="descricao" class="form-control"
                    placeholder="Descrição do Chamado"></br>
                <input type="submit" value="Cadastrar" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
