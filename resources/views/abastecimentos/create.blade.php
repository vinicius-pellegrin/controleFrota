@extends('layouts.app')

@section('content')
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="places-buttons">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="text-white">{{ __('Lançamento de Abastecimentos') }}</h1>            
                    <p class="category"></p>
                </h5>
              </div>
            </div>
         </div>
         <!-- corpo da pagina  -->
         @if ($errors->any())
           <ul class="alert alert-danger">
               @foreach ($errors->all() as $error)
               <li>{{$error}}</li>
                   
               @endforeach
           </ul>             
         @endif
<!-- abaixo o formulario de cadastro-->
         {!! Form::open(['url'=>'abastecimento/store']) !!}        
             <div class="card-body">
                @csrf
                @method('post') 

                @include('alerts.success')

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('Data Abastecimento') ? ' has-danger' : '' }}">

                            {!!Form::label ('veiculo','Veiculo') !!}
                            
                            {!! Form::select('veiculo_id',\App\Veiculo::orderby('id')->pluck('placa','id')->toArray(),null,
                                      ['class'=>'btn btn-default btn-md text-light col-md row-sm','title'=>'Selecione o Veiculo'])!!}
                            {{$vid = null}}
                            @if ($vid!= null)
                            {!!Form::label ('Retorno','retornoVeiculo js') !!}
                                
                            @else
                                
                            @endif
                            
                            @include('alerts.feedback', ['field' => 'veiculo'])
                            
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('Data Abastecimento') ? ' has-danger' : '' }}">

                            {!!Form::label ('DataAbastecimento','Data Abastecimento') !!}
                            {!! Form::Date('dataAbastecimento', null, ['type'=>'Date','class'=> 'form-control', 'placeholder'=>'Data do Abasteciemnto']) !!}
                            <!--<input type="text" name="largura" class="form-control" placeholder="Largura do Pneu">-->
                            @include('alerts.feedback', ['field' => 'Data Abastecmento'])
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('Numero Cupom') ? ' has-danger' : '' }}">
                            {!!Form::label ('NumeroCupom','Numero do Cupom') !!}   
                            {!! Form::number('numeroCupom', null, ['class'=> 'form-control', 'placeholder'=>'Numero do  Cupom de abasteciemnto']) !!}
                           
                            @include('alerts.feedback', ['field' => 'Numero Cupom'])
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('Valor') ? ' has-danger' : '' }}">
                            {!!Form::label ('valor','Valor') !!}   
                            {!! Form::number('valor', null, ['class'=> 'form-control', 'placeholder'=>'Valor abastecido']) !!}
                            
                            @include('alerts.feedback', ['field' => 'Valor'])
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('Litros') ? ' has-danger' : '' }}">
                            {!!Form::label ('litros','Litros') !!}   
                            {!! Form::text('litros', null, ['class'=> 'form-control', 'placeholder'=>'quantidade em Litros']) !!}
                            
                            @include('alerts.feedback', ['field' => 'litros'])
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('Kilometragem') ? ' has-danger' : '' }}">
                            {!!Form::label ('kilometragem','Kilometragem') !!}   
                            {!! Form::number('kilometragem', null, ['class'=> 'form-control', 'placeholder'=>'Kilometragem do veículo']) !!}
                            
                            @include('alerts.feedback', ['field' => 'Kilometragem'])
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="text-center">
                        {!! Form::submit('Salvar', ['type'=>'submit', 'class'=>'btn btn-info btn-fill float-center']) !!}
                        <!--<base-button round type="submit" class="btn btn-info btn-fill float-center" @click.prevent="updateProfile">
                          Salvar
                        </base-button>-->
                        {!! Form::submit('Cancelar', ['type'=>'submit', 'class'=>'btn btn-danger btn-fill float-center']) !!}
                        <!--<button type="danger" class="btn btn-fill btn-danger float-center" @click.prevent="updateProfile">
                          Cancelar
                        </button>-->
                  </div>
                  <div class="clearfix"></div>
                </div>
                </div>

             </div>
         {!! Form::close() !!}
    </div>
@endsection
<script>




</script>

