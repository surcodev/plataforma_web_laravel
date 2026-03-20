@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>Editar Pagina de Contacto</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_setting_contact_update') }}" method="post">
                                @csrf
                                
                                <div class="form-group mb-3">
                                    <label>URL de inserción de Google Maps</label>
                                    <div class="input-group">
                                        <input type="text" 
                                            class="form-control" 
                                            id="contact_map_url" 
                                            name="contact_map_url" 
                                            value="{{ $setting->contact_map_url }}" 
                                            placeholder="Pega aquí la URL del iframe de Google Maps"
                                            pattern="https://www\.google\.com/maps/embed\?pb=.*"
                                            required>

                                        <a href="{{ route('admin_map_tutorial') }}" 
                                        target="_blank" 
                                        class="btn btn-info">
                                            ¿Cómo obtener la URL?
                                        </a>
                                    </div>
                                    <small class="text-danger" id="map_error" style="display:none;">
                                        *URL inválida. Debe ser un embed de Google Maps.
                                    </small>
                                    <small class="text-muted">Ej: https://www.google.com/maps/embed?pb=...</small>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Vista previa del mapa</label>
                                    <div class="preview-map" style="border:1px solid #ccc; height: 400px;">
                                        <iframe id="map_preview" 
                                                src="{{ $setting->contact_map_url }}" 
                                                width="100%" 
                                                height="100%" 
                                                style="border:0;" 
                                                allowfullscreen="" 
                                                loading="lazy" 
                                                referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

{{-- Script para actualizar la vista previa en tiempo real --}}
<script>
    const mapInput = document.getElementById('contact_map_url');
    const mapPreview = document.getElementById('map_preview');
    const mapError = document.getElementById('map_error');

    function extractSrc(value) {
        // Si el usuario pegó un iframe completo
        const match = value.match(/src="([^"]+)"/);
        return match ? match[1] : value;
    }

    function isValidGoogleMap(url) {
        return url.startsWith('https://www.google.com/maps/embed?pb=');
    }

    mapInput.addEventListener('input', function() {
        let cleaned = extractSrc(this.value);

        if (cleaned !== this.value) {
            this.value = cleaned; // reemplaza automáticamente
        }

        if (cleaned === '') {
            mapPreview.style.display = 'none';
            mapError.style.display = 'none';
            return;
        }

        if (isValidGoogleMap(cleaned)) {
            mapPreview.src = cleaned;
            mapPreview.style.display = 'block';
            mapError.style.display = 'none';
        } else {
            mapPreview.src = '';
            mapPreview.style.display = 'none';
            mapError.style.display = 'block';
        }
    });
</script>
@endsection