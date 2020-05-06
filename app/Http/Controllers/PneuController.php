<?php

namespace App\Http\Controllers;
use App\Pneu;
use App\Http\Requests\PneuRequest;
use Illuminate\Http\Request;

class PneuController extends Controller
{
    //
    public function index()
    {
        return view('pneus.index');
        //return view('dashboard');
    }

    public function edit($id)
    {
        $pneu = Pneu::find($id);
        return view('pneus.edit',compact('pneu'));
        //return view('dashboard');
    }
    public function create()
    {
        return view('pneus.create');
        //return view('dashboard');
    }
    public function store(PneuRequest $request)
    {
        $novoPneu = $request->all();
        Pneu::create($novoPneu);
        return redirect('pneu/list');
        //return view('pneus.edit');
        //return view('dashboard');
    }
    public function list()
    {
        $pneus = Pneu::all();
        return view('pneus.list',['pneus'=>$pneus]);
        //return view('dashboard');
    }

    public function destroy($id)
    {
        Pneu::find($id)->delete();
        return redirect('pneu/list');
        //return view('dashboard');
    }

    public function update(PneuRequest $request, $id)
    {
        $pneu = Pneu::find($id)->update($request->all());
        return redirect('pneu/list');
        //return view('pneus.edit');
        //return view('dashboard');
    }


    
}
