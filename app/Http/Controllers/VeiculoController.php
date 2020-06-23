<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veiculo;
use App\pneu;
use App\Http\Requests\VeiculoRequest;

class VeiculoController extends Controller
{
  

    public function index()
    {
        $totalVeiculo = Veiculo::count();
        $emManutencao = Veiculo::where('status','=','M')->count();
        $disponivel = Veiculo::where('status','=','L')->count();
        $veiculos = Veiculo::all();
        $emUso = Veiculo::where('status','=','U')->count();
        $pneulist = Pneu::all();
        return view('veiculos.index',compact('totalVeiculo','pneulist','emManutencao','disponivel','emUso'),['veiculos'=>$veiculos]);
        //return view('dashboard');
        
    }
    


    public function edit($id)
    {
        $veiculo = Veiculo::find($id);
        return view('veiculos.edit',compact('veiculo'));
        //return view('dashboard');
    }
    public function create()
    {
        
        return view('veiculos.create');
        //return view('dashboard');
    }
    public function store(VeiculoRequest $request)
    {
        $novoVeiculo = $request->all();
        Veiculo::create($novoVeiculo);
        return redirect('veiculo/list');
        //return view('veiculos.edit');
        //return view('dashboard');
    }
    public function list()
    {
        $veiculos = Veiculo::all();
        return view('veiculos.list',['veiculos'=>$veiculos]);
        //return view('dashboard');
    }

    public function destroy($id)
    {
        Veiculo::find($id)->delete();
        return redirect('veiculo/list');
        //return view('dashboard');
    }

    public function update(VeiculoRequest $request, $id)
    {
        $veiculo = Veiculo::find($id)->update($request->all());
        return redirect('veiculo/list');
        //return view('veiculos.edit');
        //return view('dashboard');
    }


}
