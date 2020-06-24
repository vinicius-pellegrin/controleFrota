@extends('layouts.app')

@section('content')
        <div class="header py-7 py-lg-8">
             <div class="container">
                 <div class="header-body text-center mb-7">
                     <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6">
                            <h1 class="text-white">{{ __('VEICULOS') }}</h1>

                        </div>
                     </div>
                 </div>
             </div>
         </div>
<div class="container">
  <div class="row">

    @if ($pageSlug ?? '' == 'veiculos') class="active " @endif


  </div>
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          veiculos em uso
        </div>
        <div class="card-body">
          <h1>{{$emUso}}</h1>

         {{-- @foreach ($pneulist as $pl)
         {{$pl}}
         @endforeach--}}
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          veiculos disponiveis
        </div>
        <div class="card-body">
            @if ($disponivel == 0)
              {{--$cor ='red'--}}
              <h1 style="color:red;">{{$disponivel}}</h1>
              @else
              <h1>{{$disponivel}}</h1>
            @endif

        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          Veiculos em Manutenção

        </div>
        <div class="card-body">
          <h1>{{$emManutencao}}</h1>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          total veiculos cadstrados
        </div>
        <div class="card-body">
         <h1> {{$totalVeiculo ?? ''}}</h1>

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
            <h4 class="card-title ">Veiculos Cadastrados</h4>
            <p class="card-category"> lista de Veiculos Cadastrados</p>
          </div>
          <div class="card-body">
            <a href="{{ route('veiculo.create') }}">
              <i class="btn btn-fill float-center ">Novo Veiculo </i>

           </a>
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
                    ---
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
                      {{$ve->placa}}
                    </td>
                    <td>
                      @if ($ve->status=='U')
                             {{'em uso'}}
                        @elseif ($ve->status=='M')
                          {{'em Manutenção'}}
                          @elseif($ve->status=='L')
                            {{'Veiculo Livre'}}
                       @endif


                    </td>
                    <td class="text-primary">
                      $36,738
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
        <!--   <div class="col-md-12">
               <div class="card card-plain">
                   <div class="card-header card-header-primary">
                     <h4 class="card-title mt-0"> Table on Plain Background</h4>
                     <p class="card-category"> Here is a subtitle for this table</p>
                   </div>
               </div>
            </div>-->
    </div>
</div>
@endsection




