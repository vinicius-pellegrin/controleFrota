@extends('layouts.app', ['pageSlug' => 'veiculosManutencaos.list'])
@section('content')
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Lista de Veiculos em Manutenção') }}</h1>
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
                            <h4 class="card-title ">Tabela de veiculos em manutenção</h4>
                            <p class="card-category">Abaixo todos os Veiculos em veiculoManutenção</p>
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
                                    Manutenção
                                  </th>
                                  <th>
                                    Km Inicio Manutenção
                                  </th>
                                  <th>
                                    Km Retorno Manutencao
                                  </th>
                                  <th>
                                    Data inicio Manutenção
                                  </th>
                                  <th>
                                    Data Retorno Mnutenção
                                  </th>
                                  <th>
                                    Descrição
                                  </th>
                                </thead>
                                
                                <tbody>
                                
                                    @foreach ($veiculosManutencaos as $vm)
            
                                  <tr>
                                    <td>
                                        {{$vm->id}}
                                    </td>
                                    <td>  
                                         {{$vm->veiculo_id}}                              
                                      
                                    </td>
                                    <td>
                                        {{$vm->manutencao_id}}
                                    </td>
                                    <td>
                                         {{$vm->kmInicioManutencao}}
                                    </td>
                                    <td>
                                      @if ($vm->kmRetornoManutencao == '')
                                      {{'aguardando retorno'}}  
                                      @else
                                      {{$vm->kmRetornoManutencao}}
                                      @endif
                                    
                                        
                                    </td>
                                    <td>
                                      {{$vm->dataInicioManutencao}}
                                  </td>
                                  <td>
                                    @if ($vm->dataRetornoManutencao == '')
                                        {{'Aguardando Retorno'}}
                                    @else
                                    {{$vm->dataRetornoManutencao}}    
                                    @endif
                                    
                                </td>
                                <td>
                                  {{$vm->status}}
                              </td>
                                    <td>
                                    <a href="{{route('veiculoManutencao.edit',['id'=>$vm->id])}}" class="btn-sm btn-sucsess">Editar</a>
                                    <a href="{{route('veiculoManutencao.destroy',['id'=>$vm->id])}}" class="btn-sm btn-danger">Excluir</a>
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