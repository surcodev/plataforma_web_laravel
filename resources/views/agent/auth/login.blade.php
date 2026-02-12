@extends('front.layouts.master')

@section('main_content')
<div class="page-top" style="background-image: url({{ asset('uploads/'.$global_setting->banner) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12" Style="text-align: center;">
                <h2>Iniciar sesión como</h2>
                <h1>AGENTE</h1>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="login-form">
                    <form action="{{ route('agent_login_submit') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Correo Electrónico *</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Contraseña *</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <a href="{{ route('agent_forget_password') }}" class="primary-color">
                                ¿Olvidó su contraseña?
                            </a>
                            <button type="submit" class="btn btn-primary bg-website">
                                Iniciar Sesión
                            </button>

                        </div>
                        <div class="mb-3">
                            <a href="{{ route('agent_registration') }}" class="primary-color">¿No tienes una cuenta? Crear una cuenta</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection