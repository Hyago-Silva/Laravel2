@extends('components.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 style="text-align: center">Vendedores</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table ">
                                <thead class="table-dark">

                                    <tr style="text-center">
                                        <th>Id</th>
                                        <th>Nome</th>
                                        <th>Telefone</th>
                                        <th>E-mail</th>
                                        <th>Status</th>
                                        <th>Quant. Aberto</th>
                                        <th>Quant. Em And</th>
                                        <th>Quant. Resolvido</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vendedor as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->telefone }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>{{ $item->QtdAb }}</td>
                                            <td>{{ $item->QtdEAnd }}</td>
                                            <td>{{ $item->QtdRes }}</td>


                                            <td>
                                                <a href="{{ url('/vendedor/' . $item->id) }}" title="View Vendedor"><button
                                                        class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                            aria-hidden="true"></i> Visualizar</button></a>
                                                <a href="{{ url('/vendedor/' . $item->id . '/edit') }}"
                                                    title="Edit Vendedor"><button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Editar</button></a>

                                                <form method="POST" action="{{ url('/vendedor' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Deletar Vendedor" onclick="return confirm("Confirm
                                                        delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        Deletar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="{{ url('/vendedor/create') }}" class="btn btn-success btn-sm"
                                title="Cadastrar Novo vendedor">
                                Cadastrar Novo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
