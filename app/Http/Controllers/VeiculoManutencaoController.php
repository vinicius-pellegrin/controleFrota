<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pneu;
use\App\Veiculo;
use\App\VeiculoManutencao;
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
        return view('veiculosManutencaos.edit',compact('veiculomanutencao'));
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
        Veiculo::create($novoVeiculoManutencao);
        return redirect('veiculosmanutencaos.list');
        //return view('veiculos.edit');
        //return view('dashboard');
    }
    public function list()
    {
        $veiculosManutencaos = VeiculoManutencao::all();
        return view('veiculosManutencaos.list',['veiculosmanutencaos'=>$veiculosManutencaos]);
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
        return redirect('veiculosManutencaos.list');
        //return view('veiculos.edit');
        //return view('dashboard');
    }


}
