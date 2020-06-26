<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AbastecimentoRequest;
use App\Abastecimento;
use App\Veiculo;
use App\pneu;
use App\Http\Requests\VeiculoRequest;

class AbastecimentoController extends Controller
{


    public function index()
    {
        $totalVeiculo = Veiculo::count();
        $emManutencao = Veiculo::where('status','=','M')->count();
        $disponivel = Veiculo::where('status','=','L')->count();
        $veiculos = Veiculo::all();
        $emUso = Veiculo::where('status','=','U')->count();
        $pneulist = Pneu::all();
        return view('abastecimentos.index',compact('totalVeiculo','pneulist','emManutencao','disponivel','emUso'),['veiculos'=>$veiculos]);
        //return view('dashboard');

    }



    public function edit($id)
    {
        $abastecimento = Abastecimento::find($id);
        return view('abastecimentos.edit',compact('abastecimento'));
        //return view('dashboard');
    }
    public function create()
    {

        return view('abastecimentos.create');
        //return view('dashboard');
    }
    public function store(AbastecimentoRequest $request)
    {
        $novoAbastecimento = $request->all();
        Abastecimento::create($novoAbastecimento);
        return redirect('abastecimento/list');
        //return view('abastecimentos.edit');
        //return view('dashboard');
    }
    public function list()
    {
        $veiculos = Veiculo::all();
        $kmpercorrido = Abastecimento::pegaKM();
        $abastecimentos = Abastecimento::all();
        return view('abastecimentos.list',['abastecimentos'=>$abastecimentos],['veiculos'=>$veiculos]);
        //return view('dashboard');
    }

    public function destroy($id)
    {
        Abastecimento::find($id)->delete();
        return redirect('abastecimento/list');
        //return view('dashboard');
    }

    public function update(AbastecimentoRequest $request, $id)
    {
        $abastecimento = Abastecimento::find($id)->update($request->all());
        return redirect('abastecimento/list');
        //return view('abastecimentos.edit');
        //return view('dashboard');
    }

    public function createMaster(){
        return view('abastecimento.createMaster');
    }
    public function masterDetail(){
        return redirect()->route('abastecimento');
    }


}
