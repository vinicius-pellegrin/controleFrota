<?php


namespace App\Http\Controllers;
use App\Veiculo;
use App\pneu;
use App\Http\Requests\VeiculoRequest;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $totalVeiculo = Veiculo::count();
        $emManutencao = Veiculo::where('status','=','M')->count();
        $disponivel = Veiculo::where('status','=','L')->count();
        $veiculos = Veiculo::all();
        $emUso = Veiculo::where('status','=','U')->count();
        $pneulist = Pneu::all();



        $veiculo = Veiculo::pegaVeiculos();


        return view('home',compact('totalVeiculo','pneulist','emManutencao','disponivel','emUso','veiculo'),['veiculos'=>$veiculos]);
        //return view('dashboard');
    }

    public function dashboard()
    {
        //return view('home');
        return view('dashboard');
    }
}
