


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
                            <h4 class="card-title ">Tabela de abastecimentos</h4>
                            <p class="card-category">Abaixo lista dos abasteciemntos</p>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table">
                                <thead class=" text-primary">
                                  <th>
                                    Veiculo
                                  </th>
                                  <th>
                                    Placa
                                  </th>
                                  <th>
                                    Status
                                  </th>
                                  <th>
                                    Data abastecimento
                                  </th>

                                </thead>
                                <tbody>
                                    @foreach ($veiculos as $ve)
                                  <tr>
                                    <td>
                                        {{$ve->modelo}}
                                    </td>
                                    <td>
                                        {{$ve->placa}}
                                    </td>
                                    <td>
                                        {{$ve->status}}
                                    </td>
                                    <td>
                                        @foreach ($ve->veiculo_abastecimentos as $ab)
                                    <li>{{ $ab->dataAbastecimento}}</li>
                                        @endforeach
                                    </td>

                                    <td>
                                    <a href="{{route('pneu.edit',['id'=>$ve->id])}}" class="btn-sm btn-sucsess">Editar</a>
                                    <a href="{{route('pneu.destroy',['id'=>$ve->id])}}" class="btn-sm btn-danger">Excluir</a>
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
