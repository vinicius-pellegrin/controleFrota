@extends('layouts.app')

@section('content')
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Lista de Veiculos') }}</h1>
                        <p class="text-lead text-light">
                            {{ __('Pagina de Listagem') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
          <div class="row">

            @if ($pageSlug ?? '' == 'veiculos') class="active " @endif>
                <a href="{{ route('veiculo.create') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('cadatro de Veiculos') }}</p>
                </a>

          </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Tabela de Veiculos</h4>
                            <p class="card-category">Abaixo veiculos que possuimos na Empresa</p>
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
                                    @foreach ($veiculos as $ve)
                                  <tr>
                                    <td>
                                        {{$ve->id}}
                                    </td>
                                    <td>
                                        {{$ve->modelo}}
                                    </td>
                                    <td>
                                        {{$ve->ano}}
                                    </td>
                                    <td>
                                        {{$ve->placa}}
                                    </td>
                                    <td>
                                        {{$ve->marca}}
                                    </td>
                                    <td>

                                    <a href="{{route('veiculoManutencao.create',['veiculo_id'=>$ve->id])}}" class="btn-sm btn-sucsess">enviar manutenção</a>
                                    <a href="{{route('veiculoManutencao.destroy',['id'=>$ve->id])}}" class="btn-sm btn-danger">Retorno manutenção</a>
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
