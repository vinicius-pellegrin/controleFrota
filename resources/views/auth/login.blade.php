@extends('layouts.app', ['class' => 'login-page', 'page' => __('Pagina de Login'), 'contentClass' => 'login-page'])

@section('content')
    <div class="col-md-10 text-center ml-auto mr-auto">
        <h3 class="mb-5">Faça login ou dasatre-se para entrar no Sistema</h3>
    </div>
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <form class="form" method="post" action="{{ route('login') }}">
            @csrf

            <div class="card card-login card-white">
                <div class="card-header">
                    <img src="{{ asset('black') }}/img/card-primary.png" alt="">
                    <h1 class="card-title">{{ __('Log In') }}</h1>
                </div>
                <div class="card-body">
                    <p class="text-dark mb-2">Entre com <strong>admin@black.com</strong> e a senha -> <strong>secret</strong></p>
                    <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-email-85"></i>
                            </div>
                        </div>
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>
                    <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-lock-circle"></i>
                            </div>
                        </div>
                        <input type="password" placeholder="{{ __('Senha') }}" name="password" class="form-control{{ $errors->has('senha') ? ' incorreta' : '' }}">
                        @include('alerts.feedback', ['field' => 'senha'])
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" href="" class="btn btn-primary btn-lg btn-block mb-3">{{ __('Iniciar') }}</button>
                    <div class="pull-left">
                        <h6>
                            <a href="{{ route('register') }}" class="link footer-link">{{ __('Criar Conta') }}</a>
                        </h6>
                    </div>
                    <div class="pull-right">
                        <h6>
                            <a href="{{ route('password.request') }}" class="link footer-link">{{ __('Esqueceu a senha?') }}</a>
                        </h6>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
