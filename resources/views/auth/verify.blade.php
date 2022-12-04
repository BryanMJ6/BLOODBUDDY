@extends('layouts.app')

@section('content')
<br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white text-center"><h3>{{ __('Confirma tu direccion de Correo') }}</h3></div>
                 
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                    <div style="text-align:center;">
                    <img src="/img/confirmar.png" class="img-fluid" alt="" width="250" height="250">
                    <h4>{{ __('Antes de poder continuar, por favor, confirma tu correo electrónico con el enlace que te hemos enviado,
                        Si aun no has recibido preciona aqui para que podamos enviar otro a tu correo') }},</h4>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <br>
                        <button type="submit" class="btn btn-danger btn-centerjustify-content-center">{{ __('Enviar enlace de Confirmacion') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
