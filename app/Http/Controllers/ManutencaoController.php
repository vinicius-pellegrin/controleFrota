<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manutencao;
use App\Http\Requests\ManutencaoRequest;

class ManutencaoController extends Controller
{
    //
    public function index()
    {
        return view('manutencaos.index');
        //return view('dashboard');
    }
   
    public function edit($id)
    {
        $manutencao = Manutencao::find($id);
        return view('manutencaos.edit',compact('manutencao'));
        //return view('dashboard');
    }
    public function create()
    {
        return view('manutencaos.create');
        //return view('dashboard');
    }
    public function store(ManutencaoRequest $request)
    {
        $novoManutencao = $request->all();
        Manutencao::create($novoManutencao);
        return redirect('manutencao/list');
        //return view('manutencaos.edit');
        //return view('dashboard');
    }
    public function list()
    {
        $manutencaos = Manutencao::all();
        return view('manutencaos.list',['manutencaos'=>$manutencaos]);
        //           ^nome da pasta
        //return view('dashboard');
    }

    public function destroy($id)
    {
        Manutencao::find($id)->delete();
        return redirect('manutencao/list');
        //return view('dashboard');
    }

    public function update(ManutencaoRequest $request, $id)
    {
        $manutencao = Manutencao::find($id)->update($request->all());
        return redirect('manutencao/list');
        //return view('manutencaos.edit');
        //return view('dashboard');
    }



}
