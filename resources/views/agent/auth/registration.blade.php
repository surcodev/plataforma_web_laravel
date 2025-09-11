@extends('front.layouts.master')

@section('main_content')
<div class="page-top" style="background-image: url({{ asset('uploads/'.$global_setting->banner) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Registro de agente</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="login-form">
                    <form action="{{ route('agent_registration_submit') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre *</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Empresa *</label>
                            <input type="text" name="company" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Cargo *</label>
                            <input type="text" name="designation" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Correo electrónico *</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Contraseña *</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Confirmar contraseña *</label>
                            <input type="password" name="confirm_password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary bg-website">
                                Crear Cuenta
                            </button>
                        </div>
                    </form>
                    <div class="mb-3">
                        <a href="{{ route('agent_login') }}" class="primary-color">¿Ya eres agente? Inicia sesión ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection