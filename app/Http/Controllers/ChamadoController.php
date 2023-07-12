<?php

namespace App\Http\Controllers;

use App\Models\Chamado;
use App\Models\Vendedor;
use App\Http\VendedorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChamadoController extends Controller
{

    public function index()
    {
        $chamados = Chamado::all();
        return view('chamados.index', compact(['chamados'])); //->with('chamados', $chamados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chamados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        // $qtdVend = Vendedor::all();
        $qtdChamados = Vendedor::selectRaw('name, SUM(qtdAb) AS qtd')
        ->groupby('name')
        ->orderBY('qtd','ASC')
        ->first();

        // dd($qtdChamados);

        // $qtdChamados = Vendedor::selectRaw('name, count(qtdAb) as qtd')
        // ->groupBy('name')
        // ->orderBy('qtd', 'desc')
        // ->first();

        // dd($qtdChamados);

        $input = $request->all();
        $chamados = new Chamado();
        $chamados->id = $request->id;
        $chamados->assunto = $request->assunto;
        $chamados->descricao = $request->descricao;
        $chamados->data_criacao = $request->data_criacao;
        $chamados->status = 'Aberto';
        $chamados->vendedor = $qtdChamados->name;
        // $chamados->vendedor = $qtdVend->name;

        // dd($chamados);
        $chamados->save();




        // $chamados->save();

        return redirect('chamados')->with('flash_message', 'Chamado Adicionado!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chamados = Chamado::find($id);
        // return view('chamados.show')->with('chamados', $chamados);
        return view('chamados.show', compact(['chamados']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chamados = Chamado::find($id);
        // return view('chamados.edit')->with('chamados', $chamados);

        return view('chamados.edit', compact(['chamados']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $chamados = Chamado::find($id);
        $input = $request->all();
        $chamados->update($input);
        return redirect('chamados')->with('flash_message', 'Chamado Atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Chamado::destroy($id);
        return redirect('chamados')->with('flash_message', 'Chamados deletado!');
    }
}
