@extends('admin.layouts.master')
<x-image-cropper-assets />

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>Edit Logo</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form id="admin-logo-form" action="{{ route('admin_setting_logo_update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3"
                                    data-image-cropper
                                    data-source-input="#admin_logo_source"
                                    data-upload-input="#admin_logo_upload"
                                    data-preview-image="#admin_logo_preview"
                                    data-preview-wrapper="#admin_logo_preview_wrapper"
                                    data-recrop-button="#admin_logo_recrop"
                                    data-error="#admin_logo_client_error"
                                    data-form="#admin-logo-form"
                                    data-required="true"
                                    data-required-message="Selecciona y recorta el logo antes de actualizar."
                                    data-aspect-ratio="1"
                                    data-output-width="512"
                                    data-output-height="512"
                                    data-quality="0.84"
                                    data-fill-color="transparent"
                                    data-file-name="logo.webp"
                                    data-title="Recortar logo (1:1)">
                                    <label for="admin_logo_source" class="d-block mb-1">Cambiar logo</label>
                                    <input type="file" id="admin_logo_source" class="form-control mb-1" accept="image/jpeg,image/png,image/webp">
                                    <input type="file" id="admin_logo_upload" name="logo" class="d-none">
                                    <small class="form-text text-muted d-block">Se guardará cuadrado en 512×512 y optimizado en WebP.</small>

                                    <div class="row mt-3">
                                        <div class="col-sm-6 mb-3">
                                            <label>Logo actual</label>
                                            <div class="admin-image-cropper-preview" style="--image-cropper-preview-ratio: 1; --image-cropper-preview-width: 180px;">
                                                <img src="{{ asset('uploads/'.$setting->logo) }}" alt="Logo actual">
                                            </div>
                                        </div>
                                        <div id="admin_logo_preview_wrapper" class="col-sm-6 mb-3 d-none">
                                            <label>Logo nuevo</label>
                                            <div class="admin-image-cropper-preview" style="--image-cropper-preview-ratio: 1; --image-cropper-preview-width: 180px;">
                                                <img id="admin_logo_preview" src="" alt="Logo nuevo">
                                            </div>
                                            <button type="button" id="admin_logo_recrop" class="btn btn-outline-primary btn-sm mt-2">Ajustar recorte</button>
                                        </div>
                                    </div>
                                    <div id="admin_logo_client_error" class="text-danger mt-1 d-none"></div>
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
@endsection
