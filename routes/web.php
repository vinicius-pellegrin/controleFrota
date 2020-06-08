<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Auth::routes();

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'PageController@upgrade']);
});
//rota veiculo
Route::group(['prefix'=>'veiculo', 'middleware' => 'auth'], function () {
	Route::get('', ['as' => 'veiculo.index', 'uses' => 'VeiculoController@index']);
	Route::get('{id}/edit', ['as' => 'veiculo.edit', 'uses' => 'VeiculoController@edit']);
	Route::get('list', ['as' => 'veiculo.list', 'uses' => 'VeiculoController@list']);
	Route::get('create', ['as' => 'veiculo.create', 'uses' => 'VeiculoController@create']);
	Route::post('store', ['as' => 'veiculo.store', 'uses' => 'VeiculoController@store']);
	Route::get('{id}/destroy',['as' => 'veiculo.destroy', 'uses' => 'VeiculoController@destroy']);
	Route::put('{id}/update',['as' => 'veiculo.update', 'uses' => 'VeiculoController@update']);
	});



//Rota manutenções
Route::group(['prefix'=>'manutencao', 'middleware' => 'auth'], function () {
	Route::get('', ['as' => 'manutencao.index', 'uses' => 'ManutencaoController@index']);
	Route::get('{id}/edit', ['as' => 'manutencao.edit', 'uses' => 'ManutencaoController@edit']);
	Route::get('list', ['as' => 'manutencao.list', 'uses' => 'ManutencaoController@list']);
	Route::get('create', ['as' => 'manutencao.create', 'uses' => 'ManutencaoController@create']);
	Route::post('store', ['as' => 'manutencao.store', 'uses' => 'ManutencaoController@store']);
	Route::get('{id}/destroy',['as' => 'manutencao.destroy', 'uses' => 'ManutencaoController@destroy']);
	Route::put('{id}/update',['as' => 'manutencao.update', 'uses' => 'ManutencaoController@update']);


	});

//Rota Veiculos - manutenções
Route::group(['prefix'=>'veiculoManutencao', 'middleware' => 'auth'], function () {
	Route::get('', ['as' => 'veiculoManutencao.index', 'uses' => 'VeiculoManutencaoController@index']);
	Route::get('{id}/edit', ['as' => 'veiculoManutencao.edit', 'uses' => 'VeiculoManutencaoController@edit']);
	Route::get('list', ['as' => 'veiculoManutencao.list', 'uses' => 'VeiculoManutencaoController@list']);
	Route::get('{veiculo_id}/create', ['as' => 'veiculoManutencao.create', 'uses' => 'VeiculoManutencaoController@create']);
	Route::post('store', ['as' => 'veiculoManutencao.store', 'uses' => 'VeiculoManutencaoController@store']);
	Route::get('{id}/destroy',['as' => 'veiculoManutencao.destroy', 'uses' => 'VeiculoManutencaoController@destroy']);
	Route::put('{id}/update',['as' => 'veiculoManutencao.update', 'uses' => 'VeiculoManutencaoController@update']);


	});






//Rota Combustiveis
Route::group(['prefix'=>'combustivel', 'middleware' => 'auth'], function () {
	Route::get('', ['as' => 'combustivel.index', 'uses' => 'CombustivelController@index']);
	Route::get('{id}/edit', ['as' => 'combustivel.edit', 'uses' => 'CombustivelController@edit']);
	Route::get('list', ['as' => 'combustivel.list', 'uses' => 'CombustivelController@list']);
	Route::get('create', ['as' => 'combustivel.create', 'uses' => 'CombustivelController@create']);
	Route::post('store', ['as' => 'combustivel.store', 'uses' => 'CombustivelController@store']);
	Route::get('{id}/destroy',['as' => 'combustivel.destroy', 'uses' => 'CombustivelController@destroy']);
	Route::put('{id}/update',['as' => 'combustivel.update', 'uses' => 'CombustivelController@update']);


	});

	//Rota TipoVeiculos
Route::group(['prefix'=>'tipoVeiculo', 'middleware' => 'auth'], function () {
	Route::get('', ['as' => 'tipoVeiculo.index', 'uses' => 'TipoVeiculoController@index']);
	Route::get('{id}/edit', ['as' => 'tipoVeiculo.edit', 'uses' => 'TipoVeiculoController@edit']);
	Route::get('list', ['as' => 'tipoVeiculo.list', 'uses' => 'TipoVeiculoController@list']);
	Route::get('create', ['as' => 'tipoVeiculo.create', 'uses' => 'TipoVeiculoController@create']);
	Route::post('store', ['as' => 'tipoVeiculo.store', 'uses' => 'TipoVeiculoController@store']);
	Route::get('{id}/destroy',['as' => 'tipoVeiculo.destroy', 'uses' => 'TipoVeiculoController@destroy']);
	Route::put('{id}/update',['as' => 'tpoVeiculo.update', 'uses' => 'TipoVeiculoController@update']);


	});


	// Rota Pneus
	Route::group(['prefix'=>'pneu', 'middleware' => 'auth'], function () {
		Route::get('', ['as' => 'pneu.index', 'uses' => 'PneuController@index']);
		Route::get('{id}/edit', ['as' => 'pneu.edit', 'uses' => 'PneuController@edit']);
		Route::get('list', ['as' => 'pneu.list', 'uses' => 'PneuController@list']);
		Route::get('create', ['as' => 'pneu.create', 'uses' => 'PneuController@create']);
		Route::post('store', ['as' => 'pneu.store', 'uses' => 'PneuController@store']);
		Route::get('{id}/destroy',['as' => 'pneu.destroy', 'uses' => 'PneuController@destroy']);
		Route::put('{id}/update',['as' => 'pneu.update', 'uses' => 'PneuController@update']);
		});







//Route::group(['middleware' => 'auth'], function () {
//	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
//});
//Route::group(['prefix'=>'cidades', 'where'=>['id'=>'[0-9]+']], function(){

//Route::group(['middleware' => 'auth'], function () {
//	Route::resource('login', 'LoginController', ['except' => ['show']]);
	//Route::get('login', ['as' => 'auth.login', 'uses' => 'LoginController@index']);
	//Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	//Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

