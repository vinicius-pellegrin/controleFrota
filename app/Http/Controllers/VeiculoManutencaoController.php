<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pneu;
use\App\Veiculo;
use\App\VeiculoManutencao;
use App\Http\Requests\VeiculoManutencaoRequest;
//use App\Http\Requests\VeiculoRequest;


class VeiculoManutencaoController extends Controller
{
    //
  

    public function index()
    {
        $totalVeiculo = Veiculo::count();
        $pneulist = Pneu::all();
        return view('veiculosManutencaos.index',compact('pneulist','totalVeiculo'));
        //return view('dashboard');
        
    }
    


    public function edit($id)
    {
        $veiculoManutencao = VeiculoManutencao::find($id);
        return view('veiculosManutencaos.edit',compact('veiculoManutencao'));
        //return view('dashboard');
    }
    public function create()
    {
        
        return view('veiculosManutencaos.create');
        //return view('dashboard');
    }
    public function store(VeiculoManutencaoRequest $request)
    {
        
        $novoVeiculoManutencao = $request->all();
        VeiculoManutencao::create($novoVeiculoManutencao);
        return redirect('veiculoManutencao/list');
        //return view('veiculos.edit');
        //return view('dashboard');
    }
    public function atualizaStatus(){
        //aqui deveremos atualizar o ststus do veiculo conforme sua manutencao

        $status = Veiculo::update(['status'=>$request->get('status'),]);
    }

    public function list()
    {
         
        $veiculosManutencaos = VeiculoManutencao::all();
        return view('veiculosManutencaos.list',['veiculosManutencaos'=>$veiculosManutencaos]);
        //return view('dashboard');
    }

    public function destroy($id)
    {
        VeiculoManutencao::find($id)->delete();
        return redirect('veiculosManutencaos.list');
        //return view('dashboard');
    }



    public function update(VeiculoManutencaoRequest $request, $id)
    {
        $veiculoManutencao = VeiculoManutencao::find($id)->update($request->all());
        return redirect('veiculoManutencaos.list');
        //return view('veiculos.edit');
        //return view('dashboard');
    }


}
