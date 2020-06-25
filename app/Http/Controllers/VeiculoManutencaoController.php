<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iluminate\Database\Eloquent;
use App\Pneu;
use\App\Veiculo;
use\App\VeiculoManutencao;
use App\Http\Requests\VeiculoManutencaoRequest;
use App\Http\Requests\VeiculoRequest;


class VeiculoManutencaoController extends Controller
{
    private  $veiculoManutencao;
    //contrutor

  public function __construct(veiculoManutencao $veiculoManutencao){
      $this->veiculoManutencao = $veiculoManutencao;
  }

    public function index()
    {
        $totalVeiculo = Veiculo::count();
        $pneulist = Pneu::all();
        return view('veiculosManutencaos.index',compact('pneulist','totalVeiculo'));
        //return view('dashboard');

    }



    public function edit($id)
    {
        $veiculo = Veiculo::all();
        $veiculoManutencao = VeiculoManutencao::find($id);
        return view('veiculosManutencaos.edit',compact('veiculoManutencao','veiculo'),['veiculoManutencao'=>$veiculoManutencao]);
        //return view('dashboard');
    }
    public function create($veiculo_id)
    {
        $veiculo_id = $veiculo_id;
        $veiculo = Veiculo::all()->where('id','=',$veiculo_id);

        $modelo = Veiculo::where('id','=',$veiculo_id)->pluck('modelo');
        return view('veiculosManutencaos.create',compact('veiculo'),['veiculo_id'=>$veiculo_id,'veiculo'=>$veiculo,'modelo'=>$modelo]);
        //return view('dashboard');
    }
    public function store(VeiculoManutencaoRequest $request)
    {

        $novoVeiculoManutencao = $request->all();
        VeiculoManutencao::create($novoVeiculoManutencao);
        //atualizaStatus($novoVeiculoManutencao->veiculo_id, $novoVeiculoManutencao->status);

        //$veiculo = $request->veiculo_id;
        //$status = $request->status;
        Veiculo::find($request->veiculo_id)->update(['status'=>$request->status]);

        //Veiculo::update($veiculo,$novoVeiculoManutencao->status);
        //Veiculo::update(['id'=>$request->veiculo_id,'status'=>$request->status]);
        return redirect('veiculoManutencao/list');
        //return view('veiculos.edit');

        //return view('dashboard');
    }

    //função não usada
    public function atualizaStatus($id, $status){
        //aqui deveremos atualizar o ststus do veiculo conforme sua manutencao
        Veiculo::find($id)->update($status->all('status'));


        //$status = Veiculo::update(['status'=>$atualiza->get($request->'status'),]);
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
        return redirect('veiculoManutencao/list');
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
