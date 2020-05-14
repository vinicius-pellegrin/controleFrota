@extends('layouts.app')

@section('content')
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Lista de pneus') }}</h1>
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
                            <h4 class="card-title ">Tabela de Pneus</h4>
                            <p class="card-category">Abaixo tipos de Pneus que possuimos na Empresa</p>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table">
                                <thead class=" text-primary">
                                  <th>
                                    ID
                                  </th>
                                  <th>
                                    veiculo
                                  </th>
                                  <th>
                                    Ano Veiculo
                                  </th>
                                  <th>
                                    Placa
                                  </th>
                                  <th>
                                    Marca
                                  </th>
                                  <th>
                                    Ação
                                  </th>
                                </thead>
                                <tbody>
                                    @foreach ($veiculosManutencaos as $vm)
                                  <tr>
                                    <td>
                                        {{$vm->id}}
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                         
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                    <a href="{{route('veiculoManutencaos.edit',['id'=>$vm->id])}}" class="btn-sm btn-sucsess">Editar</a>
                                    <a href="{{route('veiculoManutencaos.destroy',['id'=>$vm->id])}}" class="btn-sm btn-danger">Excluir</a>
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
                        <p class="card-category"> Here is a subtitle for this table</p>
                      </div>
                    </div>
            </div>
        </div>

    </div>
@endsection