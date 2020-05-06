<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\TipoVeiculo;
use\App\Http\Requests\TipoVeiculoRequest;

class TipoVeiculoController extends Controller
{
    //
    public function index()
    {
        return view('tipoVeiculos.index');
        //return view('dashboard');
    }
   
    public function edit($id)
    {
        $tipoVeiculo = TipoVeiculo::find($id);
        return view('tipoVeiculos.edit',compact('tipoVeiculo'));
        //return view('dashboard');
    }
    public function create()
    {
        return view('tipoVeiculos.create');
        //return view('dashboard');
    }
    public function store(TipoVeiculoRequest $request)
    {
        $novoTipoVeiculo = $request->all();
        TipoVeiculo::create($novoTipoVeiculo);
        return redirect('tipoVeiculo/list');
        //return view('tipoVeiculos.edit');
        //return view('dashboard');
    }
    public function list()
    {
        $tipoVeiculos = TipoVeiculo::all();
        return view('tipoVeiculos.list',['tipoVeiculos'=>$tipoVeiculos]);
        //           ^nome da pasta
        //return view('dashboard');
    }

    public function destroy($id)
    {
        TipoVeiculo::find($id)->delete();
        return redirect('tipoVeiculo/list');
        //return view('dashboard');
    }

    public function update(TipoVeiculoRequest $request, $id)
    {
        $tipoVeiculo = TipoVeiculo::find($id)->update($request->all());
        return redirect('tipoVeiculo/list');
        //return view('tipoVeiculos.edit');
        //return view('dashboard');
    }

}
