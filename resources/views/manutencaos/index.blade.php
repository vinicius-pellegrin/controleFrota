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
        <form action="" method="post" autocomplete="off">
            <div class="card-body">
    
                <div class="row">
                    <div class="col-md-12">                                                        
                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <label>{{ __('Descrição') }}</label>
                            <input type="text" name="descricao" class="form-control" placeholder="Descrição">
                            @include('alerts.feedback', ['field' => 'descricao'])
                        </div>
    
                    </div>
                </div>
                <div class="text-center">
                    <base-button round type="submit" class="btn btn-info btn-fill float-center" @click.prevent="updateProfile">
                      Salvar
                    </base-button>
                    <button type="danger" class="btn btn-fill btn-danger float-center" @click.prevent="updateProfile">
                      Cancelar
                    </button>
              </div>
              <div class="clearfix"></div>
            </div>
        </form>


    </div>







@endsection
