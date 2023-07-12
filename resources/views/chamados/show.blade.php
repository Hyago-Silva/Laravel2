@extends('components.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header" style="text-align: center">Chamados</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">ID : {{ $chamados->id }}</h5>
        <h5 class="card-title">Assunto : {{ $chamados->assunto }}</h5>
        <p class="card-text">Descrição : {{ $chamados->descricao }}</p>
        <p class="card-text">Data de Criação : {{ $chamados->data_criacao }}</p>
        <p class="card-text">Status: {{ $chamados->status }}</p>
        <p class="card-text">Vendedor: {{ $chamados->vendedor }}</p>
        </div>
    </hr>
  </div>
</div>
