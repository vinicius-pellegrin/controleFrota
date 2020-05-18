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

                           
              {!! Form::open(['route'=>'veiculoManutencao.store']) !!}
                           
                               <!--inicio do card-->
                               <div class="card-body">
                                     @csrf
                                     @method('post') 
         
                                     @include('alerts.success')
         
                                     
       
                                 <div class="row">

                                  <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('veiculo') ? ' has-danger' : '' }}"> 
                                                                         
                                      {!! Form::label('veiculo', 'Veiculo') !!}
                                      {!! Form::select('veiculo_id',\App\Veiculo::orderby('id')->pluck('modelo','id')->toArray(),null,
                                      ['class'=>'btn btn-default btn-md text-light col-md row-sm','title'=>'Selecione o Veiculo','data-toggle'=>'dropdown'])!!}
                                     @include('alerts.feedback', ['field' => 'veiculo'])
                                     
                                     </div>

                                  
                                    <div class="form-group{{ $errors->has('manutencao') ? ' has-danger' : '' }}"> 
                                                                         
                                      {!! Form::label('manutencao', 'Manutenção') !!}
                                      {!! Form::select('manutencao_id',\App\Manutencao::orderby('id')->pluck('descricao','id')->toArray(),null,
                                      ['class'=>'btn btn-default btn-md text-light col-md row-sm','title'=>'Tipo de Manutencao','data-toggle'=>'dropdown'])!!}
                                     @include('alerts.feedback', ['field' => 'manutencao'])
                                     
                                     </div>
       
                                   </div>

                                   <div class="col-md-4">
                     
                                    <div class="form-group{{ $errors->has('km_inicioManutencao') ? ' has-danger' : '' }}">
                                     {!! Form::label('kmInicioManutencao', 'KM Inicial Manutencao') !!}
                                       {!! Form::number('kmInicioManutencao', null, ['class'=>'form-control', 'placeholder'=>'km saida para manutenção']) !!}                                        
                                        @include('alerts.feedback', ['field' => 'km_inicioManutencao'])
                                    </div>
      
                                  </div>
                                  
                                   <div class="col-sm-">
                                     <div class="form-group{{ $errors->has('km_retorno') ? ' has-danger' : '' }}">
                                      {!! Form::label('kmRetornoManutencao', 'KM Retrono Manutenção') !!}  
                                      {!! Form::number('kmRetornoManutencao', null, ['class'=>'form-control', 'placeholder'=>'km ao retornar']) !!}
                                         @include('alerts.feedback', ['field' => 'km_retorno'])
                                     </div>
                                   </div>
                     
                                   <div class="col-md-4">
                     
                                      <div class="form-group{{ $errors->has('dataInicioManutencao') ? ' has-danger' : '' }}">
                                        {!! Form::label('dataInicioManutencao', 'Data saida para manutencao')!!}
                                          {!! Form::Date('dataInicioManutencao', null, ['class'=>'form-control', 'placeholder'=>'Date de hoje']) !!}
                                          @include('alerts.feedback', ['field' => 'dataInicioManutencao'])
                                      </div>
                                  </div> 
    
                                   <div class="col-md-4">                     
                                      <div class="form-group{{ $errors->has('dataRetornoManutencao') ? ' has-danger' : '' }}">
                                        {!! Form::label('dataRetornoManutencao', 'Data de Retrono') !!}  
                                          {!! Form::Date('dataRetronoManutencao', null, ['class'=>'form-control', 'placeholder'=>'Data de Retrono da manuytencão']) !!}
                                          @include('alerts.feedback', ['field' => 'dataRetornoManutencao'])
                                      </div>
                                  </div>                                   
                                </div>
                              
                     
                                <div class="row">    
                                  <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('descricao') ? ' has-danger' : '' }}">
                                      {!! Form::label('descricao', 'Descricao do que sera feito no veiculo') !!}  
                                        {!! Form::textarea('descricao', null, ['class'=>'form-control', 'placeholder'=>'Descreca o que sera feito no veiculo', 'rows'=>'10']) !!}
                                        @include('alerts.feedback', ['field' => 'descricao'])
                                    </div>
                                </div>   
                                   
                                 <div class="col-md-4">
                                     
                                 
                    
                                    <div class="col-sm">
                                      <div class="form-group">
                                       {!! Form::label('status', 'Satatus') !!} 
                                          
                                       {!! Form::text('status','A',['class'=>'form-control', 'placeholder'=>'status']) !!}
                                          
                                      </div>
                                    </div>
                                  </div> 
                                 
                                        
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
                                </div> <!--inicio do card-->
                             
                             {!! Form::close() !!}
                          </div>
                      </div>
                  </div>
              </div>
        </div>
   </div>
@endsection
