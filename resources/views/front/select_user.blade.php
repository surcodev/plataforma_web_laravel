@extends('front.layouts.master')

@section('main_content')
<div class="page-top" style="background-image: url({{ asset('uploads/'.$global_setting->banner) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Seleccionar tipo de usuario</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content py-5">
    <div class="container">
        <div class="row justify-content-center g-4">

            {{-- CLIENTE --}}
            {{-- <div class="col-md-5">
                <div class="card shadow-lg border-0 rounded-4 text-center p-4 hover-scale bg-light-blue">
                    <div class="icon-circle mb-3 mx-auto">
                        <i class="fa-solid fa-user fa-3x text-primary"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-3">Soy Cliente</h4>
                    <p class="text-muted mb-4">Regístrate o inicia sesión para buscar propiedades y contactar agentes.</p>
                    <div class="d-flex flex-column gap-2">
                        <a href="{{ route('registration') }}" class="btn btn-primary rounded-pill">
                            <i class="fa-solid fa-user-plus me-2"></i> Registro de cliente
                        </a>
                        <a href="{{ route('login') }}" class="btn btn-outline-primary rounded-pill">
                            <i class="fa-solid fa-right-to-bracket me-2"></i> Inicio de sesión del cliente
                        </a>
                    </div>
                </div>
            </div> --}}

            {{-- AGENTE --}}
            <div class="col-md-5">
                <div class="card shadow-lg border-0 rounded-4 text-center p-4 hover-scale bg-light-green">
                    <div class="icon-circle mb-3 mx-auto">
                        <i class="fa-solid fa-user-tie fa-3x text-success"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-3">Soy Agente</h4>
                    <p class="text-muted mb-4">Regístrate o inicia sesión para publicar propiedades y gestionar clientes.</p>
                    <div class="d-flex flex-column gap-2">
                        <a href="{{ route('agent_registration') }}" class="btn btn-success rounded-pill">
                            <i class="fa-solid fa-user-plus me-2"></i> Registro de agente
                        </a>
                        <a href="{{ route('agent_login') }}" class="btn btn-outline-success rounded-pill">
                            <i class="fa-solid fa-right-to-bracket me-2"></i> Inicio de sesión de agente
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- Estilos personalizados --}}
<style>
    .bg-light-blue {
        background-color: #e8f1ff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .bg-light-green {
        background-color: #e6f9ec;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-scale:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }
    .icon-circle {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #fff;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
</style>
@endsection