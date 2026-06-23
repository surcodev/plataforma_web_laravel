@extends('admin.layouts.master')
<x-image-cropper-assets />

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Editar Perfil</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_profile_submit') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3"
                                            data-image-cropper
                                            data-source-input="#admin_profile_photo_source"
                                            data-upload-input="#admin_profile_photo_upload"
                                            data-preview-image="#admin_profile_photo_preview"
                                            data-preview-wrapper="#admin_profile_photo_preview_wrapper"
                                            data-recrop-button="#admin_profile_photo_recrop"
                                            data-error="#admin_profile_photo_client_error"
                                            data-aspect-ratio="1"
                                            data-output-width="800"
                                            data-output-height="800"
                                            data-quality="0.84"
                                            data-file-name="admin-profile-photo.webp"
                                            data-title="Recortar perfil (1:1)">
                                            <label for="admin_profile_photo_source" class="d-block mb-1">Cambiar foto</label>
                                            <input type="file" id="admin_profile_photo_source" class="form-control mb-1" accept="image/jpeg,image/png,image/webp">
                                            <input type="file" id="admin_profile_photo_upload" name="photo" class="d-none">
                                            <small class="form-text text-muted d-block">Si eliges otra imagen, se guardará cuadrada en 800×800 y optimizada en WebP.</small>

                                            <div class="row mt-3">
                                                <div class="col-sm-6 mb-3">
                                                    <label>Foto actual</label>
                                                    <div class="admin-image-cropper-preview" style="--image-cropper-preview-ratio: 1; --image-cropper-preview-width: 180px;">
                                                        <img src="{{ asset('uploads/'.(Auth::guard('admin')->user()->photo ?: 'default.png')) }}" alt="Foto actual">
                                                    </div>
                                                </div>
                                                <div id="admin_profile_photo_preview_wrapper" class="col-sm-6 mb-3 d-none">
                                                    <label>Foto nueva</label>
                                                    <div class="admin-image-cropper-preview" style="--image-cropper-preview-ratio: 1; --image-cropper-preview-width: 180px;">
                                                        <img id="admin_profile_photo_preview" src="" alt="Foto nueva">
                                                    </div>
                                                    <button type="button" id="admin_profile_photo_recrop" class="btn btn-outline-primary btn-sm mt-2">Ajustar recorte</button>
                                                </div>
                                            </div>
                                            <div id="admin_profile_photo_client_error" class="text-danger mt-1 d-none"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mb-4">
                                            <label class="form-label">Nombre *</label>
                                            <input type="text" class="form-control" name="name" value="{{ Auth::guard('admin')->user()->name }}">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Correo Electrónico *</label>
                                            <input type="text" class="form-control" name="email" value="{{ Auth::guard('admin')->user()->email }}">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Contraseña</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Vuelve a escribir la contraseña</label>
                                            <input type="password" class="form-control" name="confirm_password">
                                        </div>
                                        <div class="mb-4">
                                            <button type="submit" class="btn btn-primary">Actualizar</button>
                                        </div>
                                    </div>
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
