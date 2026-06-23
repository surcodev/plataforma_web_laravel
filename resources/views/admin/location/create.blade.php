@extends('admin.layouts.master')
<x-image-cropper-assets />

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>Crear localización</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_location_index') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View All</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form id="admin-location-create-form" action="{{ route('admin_location_store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3"
                                    data-image-cropper
                                    data-source-input="#admin_location_photo_source"
                                    data-upload-input="#admin_location_photo_upload"
                                    data-preview-image="#admin_location_photo_preview"
                                    data-preview-wrapper="#admin_location_photo_preview_wrapper"
                                    data-recrop-button="#admin_location_photo_recrop"
                                    data-error="#admin_location_photo_client_error"
                                    data-form="#admin-location-create-form"
                                    data-required="true"
                                    data-required-message="Selecciona y recorta la foto de la ubicación antes de guardar."
                                    data-aspect-ratio="1.5"
                                    data-output-width="1200"
                                    data-output-height="800"
                                    data-quality="0.84"
                                    data-file-name="location-photo.webp"
                                    data-title="Recortar ubicación (3:2)">
                                    <label for="admin_location_photo_source" class="d-block mb-1">Foto *</label>
                                    <input type="file" id="admin_location_photo_source" class="form-control mb-1" accept="image/jpeg,image/png,image/webp">
                                    <input type="file" id="admin_location_photo_upload" name="photo" class="d-none">
                                    <small class="form-text text-muted d-block">Se guardará en proporción 3:2 y optimizada en WebP.</small>

                                    <div id="admin_location_photo_preview_wrapper" class="mt-3 d-none">
                                        <label>Vista previa</label>
                                        <div class="admin-image-cropper-preview" style="--image-cropper-preview-ratio: 1.5; --image-cropper-preview-width: 360px;">
                                            <img id="admin_location_photo_preview" src="" alt="Vista previa">
                                        </div>
                                        <button type="button" id="admin_location_photo_recrop" class="btn btn-outline-primary btn-sm mt-2">Ajustar recorte</button>
                                    </div>
                                    <div id="admin_location_photo_client_error" class="text-danger mt-1 d-none"></div>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Nombre *</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Slug *</label>
                                    <input type="text" class="form-control" name="slug" value="{{ old('slug') }}">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
