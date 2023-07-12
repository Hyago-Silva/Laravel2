@extends('components.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header" style="text-align: center">Editar Vendedor</div>
  <div class="card-body">

      <form action="{{ url('vendedor/' .$vendedor->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$vendedor->id}}" id="id" />
        <label>Nome</label></br>
        <input type="text" name="name" id="name" value="{{$vendedor->name}}" class="form-control"></br>
        <label>Telefone</label></br>
        <input type="text" name="telefone" id="telefone" value="{{$vendedor->telefone}}" class="form-control"></br>
        <label>E-mail</label></br>
        <input type="email" name="email" id="email" value="{{$vendedor->email}}" class="form-control"></br>
        <label>Status</label></br>
                <select class="form-control" name="status" aria-label="Default select example" placeholder="Status do Vendedor">
                    <option selected value="Ativo">Ativo</option>
                    <option value="Inativo">Inativo</option>
                  </select>
                </br>
        <input type="submit" value="Atualizar" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
