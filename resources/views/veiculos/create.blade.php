@extends('layouts.app')




@section('content')
   <div class="header py-7 py-lg-8">
       <div class="container">
           <div class="header-body text-center mb-7">
               <div class="row justify-content-center">
                   <div class="container-fluid">
                          <div class="card">

                            <div class="card-header">
                                <div class="header-body text-center mb-7">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5 col-md-6">
                                            <h1 class="text-white">{{ __('Veículos') }}</h1>
                                            <p class="category">Preencha as informações Dos Veículos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>

                                @endforeach
                            </ul>

                            @endif

              {!! Form::open(['route'=>'veiculo.store']) !!}


                               <!--inicio do card-->
                               <div class="card-body">
                                     @csrf
                                     @method('post')

                                     @include('alerts.success')



                                 <div class="row">
                                   <div class="col-md-4">

                                     <div class="form-group{{ $errors->has('veiculo') ? ' has-danger' : '' }}">
                                      {!! Form::label('modelo', 'Modelo do Veiculo') !!}
                                        {!! Form::text('modelo', null, ['class'=>'form-control', 'placeholder'=>'veiculo']) !!}
                                         @include('alerts.feedback', ['field' => 'veiculo'])
                                     </div>

                                   </div>

                                   <div class="col-md-2">

                                    <div class="form-group{{ $errors->has('veiculo') ? ' has-danger' : '' }}">
                                     {!! Form::label('ano', 'Ano do Veiculo') !!}
                                       {!! Form::text('ano', null, ['class'=>'form-control', 'placeholder'=>'veiculo']) !!}
                                        @include('alerts.feedback', ['field' => 'veiculo'])
                                    </div>

                                  </div>

                                   <div class="col-sm-">
                                     <div class="form-group{{ $errors->has('placa') ? ' has-danger' : '' }}">
                                      {!! Form::label('placa', 'Placa') !!}
                                      {!! Form::text('placa', null, ['class'=>'form-control', 'placeholder'=>'Placa do Veículo', 'maxlength'=>'7']) !!}
                                         @include('alerts.feedback', ['field' => 'placa'])
                                     </div>
                                   </div>

                                   <div class="col-md-2">

                                      <div class="form-group{{ $errors->has('marca') ? ' has-danger' : '' }}">
                                        {!! Form::label('marca', 'Marca')!!}
                                          {!! Form::text('marca', null, ['class'=>'form-control', 'placeholder'=>'Maca do Veiculo']) !!}
                                          @include('alerts.feedback', ['field' => 'marca'])
                                      </div>
                                  </div>

                                   <div class="col-md-2">
                                      <div class="form-group{{ $errors->has('ocupantes') ? ' has-danger' : '' }}">
                                        {!! Form::label('ocupantes', 'Ocupantes') !!}
                                          {!! Form::number('ocupantes', null, ['class'=>'form-control', 'placeholder'=>'Numero de Ocupantes']) !!}
                                          @include('alerts.feedback', ['field' => 'name'])
                                      </div>
                                  </div>

                                  <div class="col-md-2">
                                    <div class="form-group{{ $errors->has('Kolomentragem') ? ' has-danger' : '' }}">
                                      {!! Form::label('km_inicial', 'Kilomentragem') !!}
                                        {!! Form::number('km_inicial', null, ['class'=>'form-control', 'placeholder'=>'km do veiculo']) !!}
                                        @include('alerts.feedback', ['field' => 'name'])
                                    </div>
                                </div>


                                </div>


                                <div class="row">
                                  <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('tipoVeiculo') ? ' has-danger' : '' }}">
                                      {!! Form::label('tipoVeiculo', 'Tipo Veiculo') !!}

                                    {!! Form::select('tipoVeiculo_id',\App\TipoVeiculo::orderBy('id')->pluck('descricao','id')->toArray(),null,
                                     ['class'=>'btn btn-default btn-md text-light col-md row-sm','title'=>'Tipo Veículo','data-toggle'=>'dropdown'])!!}
                                     @include('alerts.feedback', ['field' => 'tipoVeiculo'])

                                  </div>
                                </div>

                                 <div class="col-md-4">
                                     <div class="form-group{{ $errors->has('combustivel') ? ' has-danger' : '' }}">
                                         {!! Form::label('combustivel', 'Combustivel') !!}
                                         {!! Form::select('combustivel_id',\App\Combustivel::orderby('id')->pluck('descricao','id')->toArray(),null,
                                         ['class'=>'btn btn-default btn-md text-light col-md row-sm','title'=>'Tipo Veículo','data-toggle'=>'dropdown'])!!}
                                          @include('alerts.feedback', ['field' => 'tipoVeiculo'])

                                     </div>
                                  </div>


                                    <div class="col-md-4">
                                      <div class="form-group{{ $errors->has('pneu') ? ' has-danger' : '' }}">

                                        {!! Form::label('pneu', 'Pneu') !!}
                                        {!! Form::select('pneu_id',\App\Pneu::orderby('id')->pluck('largura','id')->toArray(),null,
                                        ['class'=>'btn btn-default btn-md text-light col-md row-sm','title'=>'Tipo Veículo','data-toggle'=>'dropdown'])!!}

                                       @include('alerts.feedback', ['field' => 'pneu'])

                                    </div>
                                    <div class="col-sm">
                                      <div class="form-group">
                                       {!! Form::label('status', 'Satatus') !!}

                                       {!! Form::text('status','L',['class'=>'form-control', 'placeholder'=>'Placa do Veículo','hidden']) !!}

                                      </div>
                                    </div>



                                  </div>

                                </div>
                                <div class="text-center">
                                  {!! Form::submit('Salvar', ['type'=>'submit', 'class'=>'btn btn-info btn-fill float-center']) !!}
                                  <!--<base-button round type="submit" class="btn btn-info btn-fill float-center" @click.prevent="updateProfile">
                                    Salvar
                                  </base-button>-->

                                  <a href="{{ route('veiculo.index') }}">
                                    <i class="btn btn-danger"><b>Cancelar</b></i>

                                </a>

                                  <!--<button type="danger" class="btn btn-fill btn-danger float-center" @click.prevent="updateProfile">
                                    Cancelar
                                  </button>-->
                            </div>
                                <div class="clearfix"></div>
                                </div> <!--inicio do card-->


                             {!! Form::close() !!}

                          </div>

                      </div>
                  </div>
              </div>
        </div>
   </div>
@endsection
@section('scripts')
<script>

    $(document).ready(function(){
        $('#placa').mask('999-9999');
    });
</script>
@endsection
