@extends('components.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header" style="text-align: center">Editar Chamados</div>
        <div class="card-body">

            <form action="{{ url('chamados/' . $chamados->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $chamados->id }}" id="id" />
                <label>Assunto</label></br>
                <input type="text" name="assunto" id="assunto" value="{{ $chamados->assunto }}"
                    class="form-control"></br>
                <label>Descrição</label></br>
                <input type="text" name="descricao" id="descricao" value="{{ $chamados->descricao }}"
                    class="form-control"></br>
                <label>Status</label></br>
                <select class="form-control" name="status" aria-label="Default select example"
                    placeholder="Selecionar Status">
                    <option value="Aberto">Aberto</option>
                    <option value="Em andamento">Em andamento</option>
                    <option value="Atrasado">Atrasado</option>
                    <option value="Resolvido">Resolvido</option>
                </select>
                </br>
                <input type="submit" value="Atualizar" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
