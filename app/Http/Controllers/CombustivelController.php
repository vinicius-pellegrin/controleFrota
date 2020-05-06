<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Combustivel;
use App\Http\Requests\CombustivelRequest;


class CombustivelController extends Controller
{
    //

    public function index()
    {
        return view('combustivels.index');
        //return view('dashboard');
    }
   
    public function edit($id)
    {
        $combustivel = Combustivel::find($id);
        return view('combustivels.edit',compact('combustivel'));
        //return view('dashboard');
    }
    public function create()
    {
        return view('combustivels.create');
        //return view('dashboard');
    }
    public function store(CombustivelRequest $request)
    {
        $novoCombustivel = $request->all();
        Combustivel::create($novoCombustivel);
        return redirect('combustivel/list');
        //return view('combustivels.edit');
        //return view('dashboard');
    }
    public function list()
    {
        $combustivels = Combustivel::all();
        return view('combustivels.list',['combustivels'=>$combustivels]);
        //           ^nome da pasta
        //return view('dashboard');
    }

    public function destroy($id)
    {
        Combustivel::find($id)->delete();
        return redirect('combustivel/list');
        //return view('dashboard');
    }

    public function update(CombustivelRequest $request, $id)
    {
        $combustivel = Combustivel::find($id)->update($request->all());
        return redirect('combustivel/list');
        //return view('combustivels.edit');
        //return view('dashboard');
    }
}
