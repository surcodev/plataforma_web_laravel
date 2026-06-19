@extends('front.layouts.master')

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cropperjs@1.6.2/dist/cropper.min.css">
<style>
    .featured-photo-preview {
        width: min(100%, 520px);
        aspect-ratio: 16 / 9;
        overflow: hidden;
        border: 1px solid #d8dee6;
        border-radius: 0.5rem;
        background: #f3f4f6;
    }

    .featured-photo-preview img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .featured-photo-crop-stage {
        height: min(65vh, 650px);
        min-height: 280px;
        overflow: hidden;
        background: #111827;
    }

    .featured-photo-crop-stage img {
        display: block;
        max-width: 100%;
    }

    #featuredPhotoCropModal {
        z-index: 1000001;
    }

    .modal-backdrop {
        z-index: 1000000;
    }

    .bootstrap-property-form .form-label {
        margin-bottom: 0.5rem;
        font-weight: 600;
    }

    .bootstrap-property-form .form-control,
    .bootstrap-property-form .form-select {
        min-height: 46px;
        padding: 0.625rem 0.75rem;
        border: 1px solid #ced4da !important;
        border-radius: 0.5rem;
        background-color: #ffffff;
    }

    .bootstrap-property-form textarea.form-control {
        min-height: 180px;
    }

    .bootstrap-property-form .form-control:focus,
    .bootstrap-property-form .form-select:focus {
        border-color: #86b7fe !important;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }

    .bootstrap-property-form .input-group .btn {
        display: flex;
        align-items: center;
        border-radius: 0 0.5rem 0.5rem 0;
    }

    .bootstrap-property-form .form-check {
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
    }

    .bootstrap-property-form .tox-tinymce {
        border: 1px solid #ced4da;
        border-radius: 0.5rem;
    }

    .tox.tox-tinymce-aux {
        zoom: 1.111111;
        z-index: 1000002 !important;
    }

    .tox .tox-menu,
    .tox .tox-collection {
        z-index: 1000002 !important;
    }
</style>
@endpush

@section('main_content')
<div class="page-top" style="background-image: url({{ asset('uploads/'.$global_setting->banner) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Agente Editar propiedad</h2>
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
                <form id="property-edit-form" class="bootstrap-property-form" action="{{ route('agent_property_update',$property->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12 mb-4">
                        <label for="featured_photo_source" class="form-label">Foto destacada</label>
                        <input
                            type="file"
                            id="featured_photo_source"
                            class="form-control"
                            accept="image/jpeg,image/png,image/webp"
                        >
                        <input type="file" id="featured_photo" name="featured_photo" class="d-none">
                        <small class="text-muted">
                            Si eliges otra imagen, podrás recortarla a 16:9 y se guardará optimizada en WebP.
                        </small>
                        @error('featured_photo')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror

                        <div id="featured_photo_preview_wrapper" class="mt-3">
                            <div class="featured-photo-preview">
                                <img
                                    id="featured_photo_preview"
                                    src="{{ asset('uploads/' . $property->featured_photo) }}"
                                    alt="Vista previa de la foto destacada"
                                >
                            </div>
                            <button type="button" id="featured_photo_recrop" class="btn btn-outline-primary btn-sm mt-2">
                                Ajustar recorte
                            </button>
                        </div>
                        <div id="featured_photo_client_error" class="text-danger mt-1 d-none"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="name" class="form-label">Nombre <span class="text-danger">*</span></label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $property->name) }}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                            <input type="text" id="slug" name="slug" class="form-control" value="{{ old('slug', $property->slug) }}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="price_dolar" class="form-label">Precio (USD) <span class="text-danger">*</span></label>
                            <input type="number" id="price_dolar" name="price_dolar" class="form-control" value="{{ old('price_dolar', $property->price_dolar ?? 0) }}" min="0" step="0.01">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="price" class="form-label">Precio (S/) <span class="text-danger">*</span></label>
                            <input type="number" id="price" name="price" class="form-control" value="{{ old('price', $property->price) }}" min="0" step="0.01">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="description" class="form-label">Descripción</label>
                            <textarea id="description" name="description" class="form-control editor" rows="8">{{ old('description', $property->description) }}</textarea>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="location_id" class="form-label">Ubicación <span class="text-danger">*</span></label>
                            <select id="location_id" name="location_id" class="form-select">
                                @foreach($locations as $location)
                                    <option value="{{ $location->id }}" {{ old('location_id', $property->location_id) == $location->id ? 'selected' : '' }}>{{ $location->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="type_id" class="form-label">Tipo <span class="text-danger">*</span></label>
                            <select id="type_id" name="type_id" class="form-select">
                                @foreach($types as $type)
                                    <option value="{{ $type->id }}" {{ old('type_id', $property->type_id) == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="purpose" class="form-label">Propósito <span class="text-danger">*</span></label>
                            <select id="purpose" name="purpose" class="form-select">
                                <option value="Venta" {{ old('purpose', $property->purpose) == 'Venta' ? 'selected' : '' }}>Venta</option>
                                <option value="Alquiler" {{ old('purpose', $property->purpose) == 'Alquiler' ? 'selected' : '' }}>Alquiler</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="bedroom" class="form-label">Habitaciones <span class="text-danger">*</span></label>
                            <input type="number" id="bedroom" name="bedroom" class="form-control" value="{{ old('bedroom', $property->bedroom) }}" min="0" max="100">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="bathroom" class="form-label">Baños <span class="text-danger">*</span></label>
                            <input type="number" id="bathroom" name="bathroom" class="form-control" value="{{ old('bathroom', $property->bathroom) }}" min="0" max="100">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="size" class="form-label">Área (m²) <span class="text-danger">*</span></label>
                            <input type="number" id="size" name="size" class="form-control" value="{{ old('size', $property->size) }}" min="0" max="100000" step="0.01">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="floor" class="form-label">Número de pisos</label>
                            <input type="number" id="floor" name="floor" class="form-control" value="{{ old('floor', $property->floor) }}" min="0" max="100">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="garage" class="form-label">Garaje</label>
                            <input type="number" id="garage" name="garage" class="form-control" value="{{ old('garage', $property->garage) }}" min="0" max="100">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="balcony" class="form-label">Balcón</label>
                            <input type="number" id="balcony" name="balcony" class="form-control" value="{{ old('balcony', $property->balcony) }}" min="0" max="100">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="address" class="form-label">Dirección <span class="text-danger">*</span></label>
                            <input type="text" id="address" name="address" class="form-control" value="{{ old('address', $property->address) }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="built_year" class="form-label">Año de construcción</label>
                            <input type="number" id="built_year" name="built_year" class="form-control" value="{{ old('built_year', $property->built_year) }}" min="1900" max="{{ date('Y') }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="is_featured" class="form-label">¿Destacar aviso?</label>
                            <select id="is_featured" name="is_featured" class="form-select">
                                <option value="Yes" {{ old('is_featured', $property->is_featured) == 'Yes' ? 'selected' : '' }}>Sí</option>
                                <option value="No" {{ old('is_featured', $property->is_featured) == 'No' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="map" class="form-label">Mapa de ubicación <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" 
                                    class="form-control" 
                                    id="map" 
                                    name="map" 
                                    value="{{ old('map', $property->map) }}"
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
                        <div id="map_preview_container" class="col-md-12 mb-3 d-none">
                            <label class="form-label">Vista previa del mapa</label>
                            <div class="preview-map rounded overflow-hidden" style="border:1px solid #ced4da; height: 400px;">
                                <iframe id="map_preview" 
                                        src="{{ old('map', $property->map) }}"
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
                            <label class="form-label">Comodidades</label>
                            <div class="row g-2">
                                @foreach($amenities as $amenity)
                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <div class="form-check border rounded px-5 py-2">
                                        <input
                                            name="amenity[]"
                                            class="form-check-input"
                                            type="checkbox"
                                            value="{{ $amenity->id }}"
                                            id="chk{{ $loop->iteration }}"
                                            {{ in_array($amenity->id, old('amenity', $existing_amenities)) ? 'checked' : '' }}
                                        >
                                        <label class="form-check-label" for="chk{{ $loop->iteration }}">
                                            {{ $amenity->name }}
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary px-4">Actualizar propiedad</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="featuredPhotoCropModal" tabindex="-1" aria-labelledby="featuredPhotoCropModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="featuredPhotoCropModalLabel">Recortar foto destacada (16:9)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <div class="featured-photo-crop-stage">
                    <img id="featured_photo_crop_image" src="" alt="Imagen para recortar">
                </div>
                <small class="text-muted d-block mt-2">
                    Arrastra la imagen y usa la rueda del mouse o gestos táctiles para ajustar el encuadre.
                </small>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" id="featured_photo_apply_crop" class="btn btn-primary">Usar este recorte</button>
            </div>
        </div>
    </div>
</div>

{{-- Script para actualizar la vista previa del mapa en tiempo real --}}
<script>
    const mapInput = document.getElementById('map');
    const mapPreview = document.getElementById('map_preview');
    const mapPreviewContainer = document.getElementById('map_preview_container');
    const mapError = document.getElementById('map_error');

    function extractSrc(value) {
        const match = value.match(/src="([^"]+)"/);
        return match ? match[1] : value;
    }

    function isValidGoogleMap(url) {
        return url.startsWith('https://www.google.com/maps/embed?pb=');
    }

    function updateMapPreview(value) {
        let cleaned = extractSrc(value.trim()).trim();

        if (cleaned !== value) {
            mapInput.value = cleaned;
        }

        if (cleaned === '') {
            mapPreview.src = '';
            mapPreviewContainer.classList.add('d-none');
            mapError.style.display = 'none';
            return;
        }

        if (isValidGoogleMap(cleaned)) {
            mapPreview.src = cleaned;
            mapPreviewContainer.classList.remove('d-none');
            mapError.style.display = 'none';
        } else {
            mapPreview.src = '';
            mapPreviewContainer.classList.add('d-none');
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

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/cropperjs@1.6.2/dist/cropper.min.js"></script>
<script>
    (() => {
        const sourceInput = document.getElementById('featured_photo_source');
        const uploadInput = document.getElementById('featured_photo');
        const cropImage = document.getElementById('featured_photo_crop_image');
        const preview = document.getElementById('featured_photo_preview');
        const recropButton = document.getElementById('featured_photo_recrop');
        const applyCropButton = document.getElementById('featured_photo_apply_crop');
        const clientError = document.getElementById('featured_photo_client_error');
        const modalElement = document.getElementById('featuredPhotoCropModal');
        const cropModal = new bootstrap.Modal(modalElement);
        let cropper = null;
        let sourceUrl = @json(asset('uploads/' . $property->featured_photo));
        let temporarySourceUrl = '';
        let previewUrl = '';

        function showError(message) {
            clientError.textContent = message;
            clientError.classList.remove('d-none');
        }

        function clearError() {
            clientError.textContent = '';
            clientError.classList.add('d-none');
        }

        function openCropper() {
            if (!sourceUrl) {
                return;
            }

            cropImage.src = sourceUrl;
            cropModal.show();
        }

        sourceInput.addEventListener('change', function () {
            const file = this.files[0];
            clearError();

            if (!file) {
                return;
            }

            if (!['image/jpeg', 'image/png', 'image/webp'].includes(file.type)) {
                this.value = '';
                showError('Selecciona una imagen JPG, PNG o WebP.');
                return;
            }

            if (file.size > 15 * 1024 * 1024) {
                this.value = '';
                showError('La imagen original no debe superar los 15 MB.');
                return;
            }

            if (temporarySourceUrl) {
                URL.revokeObjectURL(temporarySourceUrl);
            }

            temporarySourceUrl = URL.createObjectURL(file);
            sourceUrl = temporarySourceUrl;
            openCropper();
        });

        modalElement.addEventListener('shown.bs.modal', function () {
            cropper?.destroy();
            cropper = new Cropper(cropImage, {
                aspectRatio: 16 / 9,
                viewMode: 1,
                autoCropArea: 1,
                responsive: true,
                background: false,
                checkOrientation: true,
            });
        });

        modalElement.addEventListener('hidden.bs.modal', function () {
            cropper?.destroy();
            cropper = null;
        });

        applyCropButton.addEventListener('click', function () {
            if (!cropper) {
                return;
            }

            const canvas = cropper.getCroppedCanvas({
                width: 1600,
                height: 900,
                imageSmoothingEnabled: true,
                imageSmoothingQuality: 'high',
                fillColor: '#ffffff',
            });

            canvas.toBlob((blob) => {
                if (!blob) {
                    showError('No se pudo procesar la imagen. Intenta con otro archivo.');
                    return;
                }

                if (typeof DataTransfer === 'undefined') {
                    showError('Tu navegador no permite preparar la imagen recortada. Actualízalo e intenta nuevamente.');
                    return;
                }

                const croppedFile = new File([blob], 'featured-photo.webp', {
                    type: 'image/webp',
                    lastModified: Date.now(),
                });
                const transfer = new DataTransfer();
                transfer.items.add(croppedFile);
                uploadInput.files = transfer.files;

                if (previewUrl) {
                    URL.revokeObjectURL(previewUrl);
                }

                previewUrl = URL.createObjectURL(blob);
                sourceUrl = previewUrl;
                preview.src = previewUrl;
                clearError();
                cropModal.hide();
            }, 'image/webp', 0.84);
        });

        recropButton.addEventListener('click', openCropper);
    })();
</script>
@endpush
