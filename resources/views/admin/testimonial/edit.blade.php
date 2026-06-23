@extends('admin.layouts.master')
<x-image-cropper-assets />

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>Edit Testimonial</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_testimonial_index') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View All</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_testimonial_update',$testimonial->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3"
                                    data-image-cropper
                                    data-source-input="#admin_testimonial_photo_source"
                                    data-upload-input="#admin_testimonial_photo_upload"
                                    data-preview-image="#admin_testimonial_photo_preview"
                                    data-preview-wrapper="#admin_testimonial_photo_preview_wrapper"
                                    data-recrop-button="#admin_testimonial_photo_recrop"
                                    data-error="#admin_testimonial_photo_client_error"
                                    data-aspect-ratio="1"
                                    data-output-width="800"
                                    data-output-height="800"
                                    data-quality="0.84"
                                    data-file-name="testimonial-photo.webp"
                                    data-title="Recortar testimonio (1:1)">
                                    <label for="admin_testimonial_photo_source" class="d-block mb-1">Cambiar foto</label>
                                    <input type="file" id="admin_testimonial_photo_source" class="form-control mb-1" accept="image/jpeg,image/png,image/webp">
                                    <input type="file" id="admin_testimonial_photo_upload" name="photo" class="d-none">
                                    <small class="form-text text-muted d-block">Si eliges otra imagen, se guardará cuadrada en 800×800 y optimizada en WebP.</small>

                                    <div class="row mt-3">
                                        <div class="col-sm-6 mb-3">
                                            <label>Foto actual</label>
                                            <div class="admin-image-cropper-preview" style="--image-cropper-preview-ratio: 1; --image-cropper-preview-width: 220px;">
                                                <img src="{{ asset('uploads/'.($testimonial->photo ?: 'default.png')) }}" alt="Foto actual">
                                            </div>
                                        </div>
                                        <div id="admin_testimonial_photo_preview_wrapper" class="col-sm-6 mb-3 d-none">
                                            <label>Foto nueva</label>
                                            <div class="admin-image-cropper-preview" style="--image-cropper-preview-ratio: 1; --image-cropper-preview-width: 220px;">
                                                <img id="admin_testimonial_photo_preview" src="" alt="Foto nueva">
                                            </div>
                                            <button type="button" id="admin_testimonial_photo_recrop" class="btn btn-outline-primary btn-sm mt-2">Ajustar recorte</button>
                                        </div>
                                    </div>
                                    <div id="admin_testimonial_photo_client_error" class="text-danger mt-1 d-none"></div>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Nombre *</label>
                                    <input type="text" class="form-control" name="name" value="{{ $testimonial->name }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Cargo *</label>
                                    <input type="text" class="form-control" name="designation" value="{{ $testimonial->designation }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Comentario *</label>
                                    <textarea name="comment" class="form-control h_100" cols="30" rows="10">{{ $testimonial->comment }}</textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
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
