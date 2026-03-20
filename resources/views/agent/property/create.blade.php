@extends('front.layouts.master')

@section('main_content')
<div class="page-top" style="background-image: url({{ asset('uploads/'.$global_setting->banner) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Crear Nueva Propiedad</h2>
            </div>
        </div>
    </div>
</div>
<div class="page-content user-panel">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="card">
                    @include('agent.sidebar.index')
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <form action="{{ route('agent_property_store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-4 mb-3">
                        <label for="" class="form-label">Foto destacada *</label>
                        <input type="file" name="featured_photo">
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="" class="form-label">Nombre *</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="form-label">Slug *</label>
                            <input type="text" name="slug" class="form-control" value="{{ old('slug') }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="form-label">Precio *</label>
                            <input type="number" name="price" class="form-control" value="{{ old('price') }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label">Descripción</label>
                            <textarea name="description" class="form-control editor" cols="30" rows="10">{{ old('description') }}</textarea>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="form-label">Ubicación *</label>
                            <select name="location_id" class="form-control select2">
                                @foreach($locations as $location)
                                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="form-label">Tipo *</label>
                            <select name="type_id" class="form-control select2">
                                @foreach($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="form-label">Propósito *</label>
                            <select name="purpose" class="form-control select2">
                                <option value="Sale">Venta</option>
                                <option value="Rent">Alquiler</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="form-label">Habitaciones *</label>
                            <input type="number" name="bedroom" class="form-control" value="{{ old('bedroom') }}" min="0" max="100">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="form-label">Baños *</label>
                            <input type="number" name="bathroom" class="form-control" value="{{ old('bathroom') }}" min="0" max="100">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="form-label">Área (m²) *</label>
                            <input type="number" name="size" class="form-control" value="{{ old('size') }}" min="0" max="100000">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="form-label">Número de pisos</label>
                            <input type="number" name="floor" class="form-control" value="{{ old('floor') }}" min="0" max="100">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="form-label">Garaje</label>
                            <input type="number" name="garage" class="form-control" value="{{ old('garage') }}" min="0" max="100">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="form-label">Balcón</label>
                            <input type="number" name="balcony" class="form-control" value="{{ old('balcony') }}" min="0" max="100">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="form-label">Dirección *</label>
                            <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="form-label">Año de contrucción</label>
                            <input type="number" name="built_year" class="form-control" value="{{ old('built_year') }}" min="1900" max="{{ date('Y') }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="form-label">¿Destacar aviso?</label>
                            <select name="is_featured" class="form-control select2">
                                <option value="Yes" {{ old('is_featured') == 'Yes' ? 'selected' : '' }}>Sí</option>
                                <option value="No" {{ old('is_featured') == 'No' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label">Mapa de ubicación</label>
                            <div class="input-group">
                                <input type="text" 
                                    class="form-control" 
                                    id="map" 
                                    name="map" 
                                    value="{{ old('map') }}" 
                                    placeholder="Pega aquí la URL del iframe de Google Maps"
                                    pattern="https://www\.google\.com/maps/embed\?pb=.*"
                                >
                                <a href="{{ route('agent_map_tutorial') }}" 
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
                                        src="{{ old('map') }}" 
                                        width="100%" 
                                        height="100%" 
                                        style="border:0;" 
                                        allowfullscreen="" 
                                        loading="lazy" 
                                        referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label">Comodidades</label>
                            <div class="row">
                                @foreach($amenities as $amenity)
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input name="amenity[]" class="form-check-input" type="checkbox" value="{{ $amenity->id }}" id="chk{{ $loop->iteration }}">
                                        <label class="form-check-label" for="chk{{ $loop->iteration }}">
                                            {{ $amenity->name }}
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Script para actualizar la vista previa en tiempo real --}}
<script>
    const mapInput = document.getElementById('map');
    const mapPreview = document.getElementById('map_preview');
    const mapError = document.getElementById('map_error');

    function extractSrc(value) {
        const match = value.match(/src="([^"]+)"/);
        return match ? match[1] : value;
    }

    function isValidGoogleMap(url) {
        return url.startsWith('https://www.google.com/maps/embed?pb=');
    }

    function updateMapPreview(value) {
        let cleaned = extractSrc(value);

        if (cleaned !== value) {
            mapInput.value = cleaned;
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
    }

    // Tiempo real
    mapInput.addEventListener('input', function() {
        updateMapPreview(this.value);
    });

    // Al cargar la página
    window.addEventListener('load', function() {
        updateMapPreview(mapInput.value);
    });
</script>
@endsection