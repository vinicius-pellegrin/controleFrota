@extends('layouts.app')

@section('content')
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Welcome!') }}</h1>
                        <p class="text-lead text-light">
                            {{ __('Use Black Dashboard theme to create a great project.') }}
                        </p>
                    </div>
                </div>
            </div>            
        </div>
    </div>
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          veiculos em uso
        </div>
        <div class="card-body">
          @foreach ($pneulist as $pl)
         {{$pl}}
         @endforeach
        </div>
      </div>  
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          veiculos disponiveis
        </div>
        <div class="card-body">
          quantidade
        </div>
      </div>  
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          Veiculos em Manutenção
        </div>
        <div class="card-body">
          Quantidade vinda do banco
        </div>
      </div>  
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          total veiculos cadstrados        
        </div>
        <div class="card-body">
          {{$totalVeiculo ?? ''}}

        </div>
      </div>  
    </div>

    
  </div>
</div>
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Simple Table</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Modelo
                  </th>
                  <th>
                    Placa
                  </th>
                  <th>
                    Status
                  </th>
                  <th>
                    Salary
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td class="text-primary">
                      $36,738
                    </td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary">
            <h4 class="card-title mt-0"> Table on Plain Background</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
        </div>
@endsection
