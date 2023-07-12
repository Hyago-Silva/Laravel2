@extends('components.layout')
@section('content')
    <div class="container" >
        <div class="row" style="margin:20px" >
            <div class="col-md-12" >
                <div class="card">
                    <div class="card-header">
                        <h2 style="text-align: center">Chamados</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table ">
                                <thead class="table-dark">

                                    <tr style="text-center">
                                        <th>Id</th>
                                        <th>Assunto</th>
                                        <th>Descrição</th>
                                        <th>Data de Criação</th>
                                        <th>Status</th>
                                        <th>Vendedor</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($chamados as $c)
                                        <tr>
                                             <td>{{ $c->id }}</td>
                                             <td>{{ $c->assunto }}</td>
                                             <td>{{ $c->descricao }}</td>
                                             <td>{{ $c->data_criacao}}</td>
                                             <td>{{ $c->status }}</td>
                                             <td>{{ $c->vendedor }}</td>

                                            <td>
                                                <a href="{{ url('/chamados/' . $c->id) }}" title="View Chamados"><button
                                                        class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                            aria-hidden="true"></i> Visualizar</button></a>
                                                <a href="{{ url('/chamados/' . $c->id . '/edit') }}"
                                                    title="Edit Chamados"><button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Editar</button></a>

                                                <form method="POST" action="{{ url('/chamados' . '/' . $c->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Deletar Chamados" onclick="return confirm("Confirm
                                                        delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        Deletar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="{{ url('/chamados/create') }}" class="btn btn-success btn-sm" title="Cadastrar Novo Chamado">
                                Cadastrar Novo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
