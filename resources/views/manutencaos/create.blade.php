@extends('layouts.app')

@section('content')
<div class="header py-7 py-lg-8">
    <div class="container">

    </div>
</div>
<!-- corpo do projeto-->
    <div class="card">
        <div class="card-header">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Manutenções') }}</h1>
                        <p class="category">Preencha as informações Das Manutenções</p>
                    </div>
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

         {!! Form::open(['url'=>'manutencao/store']) !!}

             <div class="card-body">
                @csrf
                @method('post')

                @include('alerts.success')

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('descricao') ? ' has-danger' : '' }}">

                            {!!Form::label ('descricao','Descricao') !!}
                            {!! Form::text('descricao', null, ['type'=>'text','class'=> 'form-control', 'placeholder'=>'Descreva a manutencao']) !!}
                            <!--<input type="text" name="largura" class="form-control" placeholder="Largura do manutencao">-->
                            @include('alerts.feedback', ['field' => 'descricao'])
                        </div>

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
                        {{--!! Form::submit('Cancelar', ['type'=>'submit', 'class'=>'btn btn-danger btn-fill float-center']) !!--}}
                        <button type="danger" class="btn btn-fill btn-danger float-center">
                            <a href="list">Cancelar</a>

                        </button>
                  </div>
                  <div class="clearfix"></div>
                </div>
                </div>

             </div>
         {!! Form::close() !!}
    </div>
@endsection

