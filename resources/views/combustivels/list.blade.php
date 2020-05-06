
@extends('layouts.app')

@section('content')
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Lista de manutencoes') }}</h1>
                        <p class="text-lead text-light">
                            {{ __('Pagina de Listagem') }}
                        </p>
                    </div>
                </div> 
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Tabela de manutencoes</h4>
                            <p class="card-category">Abaixo tipos de manutencoes que possuimos na Empresa</p>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table">
                                <thead class=" text-primary">
                                  <th>
                                    ID
                                  </th>
                                  <th>
                                    Descricao
                                  </th>
                                
                                  <th>
                                    Ação
                                  </th>
                                </thead>
                                <tbody>
                                    @foreach ($combustivels as $man)
                                  <tr>
                                    <td>
                                        {{$man->id}}
                                    </td>
                                    <td>
                                        {{$man->descricao}}
                                    </td>
                                
                                    <td>
                                    <a href="{{route('combustivel.edit',['id'=>$man->id])}}" class="btn-sm btn-sucsess">Editar</a>
                                    <a href="{{route('combustivel.destroy',['id'=>$man->id])}}" class="btn-sm btn-danger">Excluir</a>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-plain">
                      <div class="card-header card-header-primary">
                        <p class="card-category"> aqui sera passada uma informação rotativa referente aq algum tipo de status </p>
                      </div>
                    </div>
            </div>
        </div>

    </div>
@endsection