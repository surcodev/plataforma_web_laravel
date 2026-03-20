
@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')

<style>
.tutorial-img {
    border-radius: 8px;
    border: 1px solid #ddd;
    max-height: 500px;
    margin-left:20px;
}
</style>

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>¿Cómo obtener la URL de Google Maps?</h1>
        </div>
        <div class="section-body">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4">
                                    <h6>1. Buscar la ubicación</h6>
                                    <p>Abre Google Maps y busca la dirección o lugar que deseas mostrar en el mapa.</p>
                                    <img src="{{ asset('uploads/tutorials/map/paso_1.png') }}" 
                                        class="img-fluid mb-3 tutorial-img"
                                        alt="Paso 1 - Buscar ubicación">
                                </div>

                                <div class="mb-4">
                                    <h6>2. Click derecho en el mapa</h6>
                                    <p>Haz click derecho sobre el punto donde se encuentra tu dirección.</p>
                                    <img src="{{ asset('uploads/tutorials/map/paso_2.png') }}" 
                                        class="img-fluid mb-3 tutorial-img"
                                        alt="Paso 1 - Buscar ubicación">
                                </div>

                                <div class="mb-4">
                                    <h6>3. Compartir la ubicación</h6>
                                    <p>Selecciona la opción <strong>“Compartir”</strong> o <strong>“Compartir esta ubicación”</strong>.</p>
                                    <img src="{{ asset('uploads/tutorials/map/paso_3.png') }}" 
                                        class="img-fluid mb-3 tutorial-img"
                                        alt="Paso 1 - Buscar ubicación">
                                </div>

                                <div class="mb-4">
                                    <h6>4. Ir a "Insertar un mapa"</h6>
                                    <p>En la ventana que aparece, cambia a la pestaña <strong>“Insertar un mapa”</strong>.</p>
                                    <img src="{{ asset('uploads/tutorials/map/paso_4.png') }}" 
                                        class="img-fluid mb-3 tutorial-img"
                                        alt="Paso 1 - Buscar ubicación">
                                </div>

                                <div class="mb-4">
                                    <h6>5. Copiar el código</h6>
                                    <p>Copia el HTML que aparece.</p>
                                    <img src="{{ asset('uploads/tutorials/map/paso_5.png') }}" 
                                        class="img-fluid mb-3 tutorial-img"
                                        alt="Paso 1 - Buscar ubicación">
                                </div>

                                <div class="mb-4">
                                    <h6>6. Colocar solo la URL</h6>
                                    <p>
                                        Para que el mapa funcione, elimina todo excepto la URL dentro de <code>src=""</code>.<br>
                                        Ejemplo:
                                    </p>

                                    <div class="bg-light p-2 mb-2">
                                        <small>&lt;iframe src="<strong>https://www.google.com/maps/embed?pb=...</strong>" ...&gt;&lt;/iframe&gt;</small>
                                    </div>

                                    <img src="{{ asset('uploads/tutorials/map/paso_6_error.png') }}" 
                                        class="img-fluid mb-3 tutorial-img"
                                        alt="Paso 1 - Buscar ubicación">

                                    <p class="mb-1"><strong>Debes pegar solo esto:</strong></p>
                                    <div class="bg-light p-2 mb-2">
                                        <small>https://www.google.com/maps/embed?pb=...</small>
                                    </div>

                                    <img src="{{ asset('uploads/tutorials/map/paso_6_success.png') }}" 
                                        class="img-fluid mb-3 tutorial-img"
                                        alt="Paso 1 - Buscar ubicación">
                                </div>

                                <div class="alert alert-info mt-4">
                                    <strong>Tip:</strong> Guarda tu ubicación en Favoritos de Google Maps para encontrarlo más facilmente.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection