<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;


class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendedor = Vendedor::all();
        return view('vendedor.index')->with('vendedor', $vendedor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $input = $request->all();

        $vendedor = new Vendedor();
        $vendedor->name = $request->name;
        $vendedor->telefone = $request->telefone;
        $vendedor->email = $request->email;
        $vendedor->status = 'Ativo';
        $vendedor->qtdAb = $request->qtdAb;
        $vendedor->qtdEAnd = $request->qtdEAnd;
        $vendedor->qtdRes = $request->qtdRes;
        $vendedor->save();

        return redirect('vendedor')->with('flash_message', 'Vendedor Adicionado!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendedor = Vendedor::find($id);
        return view('vendedor.show')->with('vendedor', $vendedor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendedor = Vendedor::find($id);
        return view('vendedor.edit')->with('vendedor', $vendedor);
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
        $vendedor = Vendedor::find($id);
        $input = $request->all();
        $vendedor->update($input);
        return redirect('vendedor')->with('flash_message', 'Vendedor Atualizado!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vendedor::destroy($id);
        return redirect('vendedor')->with('flash_message', 'Vendedor deletado!');

    }
}
