@extends('components.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header" style="text-align: center">Vendedor</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Nome : {{ $vendedor->name }}</h5>
        <p class="card-text">Telefone : {{ $vendedor->telefone }}</p>
        <p class="card-text">E-mail : {{ $vendedor->email }}</p>
        <p class="card-text">Status: {{ $vendedor->status }}</p>
        </div>
    </hr>
  </div>
</div>
