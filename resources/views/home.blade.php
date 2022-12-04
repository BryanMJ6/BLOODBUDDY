@extends('layouts.app')

@section('content')
<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-5 text-center">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            @auth
            <img src="img/perfil.png" alt="" width="180" height="180" align="center">
            <h3>
                <br>

                Hola🖐️
                <h2 class="text-danger">
                    {{ Auth::user()->name }}
                </h2>

                <h2>
                    <h2>🎉¡Has iniciado Session!🎉</h2><br>
                    <h2>Bienvenido a BloodBuddy<h1>
                            <h3>

                                <script>
                                Push.create("BloodBuddy!", {
                                    body: "Felicidades has iniciado sesion!",
                                    icon: "img/sesion.jpg",
                                    timeout: 5000,
                                    onClick: function() {
                                        window.location = "";
                                        this.close();
                                    }
                                });
                                </script>
                                @endauth
        </div>
    </div>
    </div>
</div>
@endsection