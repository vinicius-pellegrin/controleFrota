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
                <div class="col-lg-5 col-md-6">
                    <h1 class="text-white">{{ __('Cadastro de Pneus') }}</h1>            
                <p class="category">Preencha com a descrição das medidas do Pneu</p>
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

         {!! Form::open(['url'=>'pneu/store']) !!}
        
             <div class="card-body">
                @csrf
                @method('post') 

                @include('alerts.success')

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('largura') ? ' has-danger' : '' }}">

                            {!!Form::label ('largura','Largura') !!}
                            {!! Form::number('largura', null, ['type'=>'number','class'=> 'form-control', 'placeholder'=>'Largura do Pneu']) !!}
                            <!--<input type="text" name="largura" class="form-control" placeholder="Largura do Pneu">-->
                            @include('alerts.feedback', ['field' => 'largura'])
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('largura') ? ' has-danger' : '' }}">
                            {!!Form::label ('altura','Atltura') !!}   
                            {!! Form::number('altura', null, ['class'=> 'form-control', 'placeholder'=>'Altura do Pneu']) !!}
                           
                            @include('alerts.feedback', ['field' => 'altura'])
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('roda') ? ' has-danger' : '' }}">
                            {!!Form::label ('roda','Roda') !!}   
                            {!! Form::number('roda', null, ['class'=> 'form-control', 'placeholder'=>'tamanho da Roda']) !!}
                            
                            @include('alerts.feedback', ['field' => 'roda'])
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('marca') ? ' has-danger' : '' }}">
                            {!!Form::label ('marca','Marca') !!}   
                            {!! Form::text('marca', null, ['class'=> 'form-control', 'placeholder'=>'Marca do Pneu']) !!}
                            
                            @include('alerts.feedback', ['field' => 'marca'])
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

