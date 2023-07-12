@extends('components.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header" style="text-align: center">Criar Novos Vendedores</div>
        <div class="card-body">

            <form action="{{ url('vendedor') }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nome do Vendedor"></br>
                <label>Telefone</label></br>
                <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Telefone do Vendedor"></br>
                <label>E-mail</label></br>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email do Vendedor"></br>
                <label>Status</label></br>
                <select class="form-control" name="status" aria-label="Default select example" placeholder="Status do Vendedor">
                    <option selected value="Ativo">Ativo</option>
                    <option value="Inativo">Inativo</option>
                  </select>
                </br>
                <label>Quantidade em Aberto</label></br>
                <input type="text" name="qtdAb" id="qtdAb" class="form-control" value="0"></br>
                <label>Quantidade em Andamento</label></br>
                <input type="text" name="qtdEAnd" id="qtdEAnd" class="form-control" value="0"></br>
                <label>Quantidade Resolvido</label></br>
                <input type="text" name="qtdRes" id="qtdRes" class="form-control" value="0"></br>
                <input type="submit" value="Cadastrar" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
