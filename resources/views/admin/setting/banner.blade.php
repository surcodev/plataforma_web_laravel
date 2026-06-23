@extends('admin.layouts.master')
<x-image-cropper-assets />

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>Editar Banner</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form id="admin-banner-form" action="{{ route('admin_setting_banner_update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3"
                                    data-image-cropper
                                    data-source-input="#admin_banner_source"
                                    data-upload-input="#admin_banner_upload"
                                    data-preview-image="#admin_banner_preview"
                                    data-preview-wrapper="#admin_banner_preview_wrapper"
                                    data-recrop-button="#admin_banner_recrop"
                                    data-error="#admin_banner_client_error"
                                    data-form="#admin-banner-form"
                                    data-required="true"
                                    data-required-message="Selecciona y recorta el banner antes de actualizar."
                                    data-aspect-ratio="8.0720338983"
                                    data-output-width="1905"
                                    data-output-height="236"
                                    data-quality="0.84"
                                    data-file-name="banner.webp"
                                    data-title="Recortar banner (1905×236)">
                                    <label for="admin_banner_source" class="d-block mb-1">Cambiar banner</label>
                                    <input type="file" id="admin_banner_source" class="form-control mb-1" accept="image/jpeg,image/png,image/webp">
                                    <input type="file" id="admin_banner_upload" name="banner" class="d-none">
                                    <small class="form-text text-muted d-block">Se guardará como base alta 1905×236; en espacios 1905×150 se podrá recortar verticalmente sin deformarse.</small>

                                    <div class="row mt-3">
                                        <div class="col-sm-6 mb-3">
                                            <label>Banner actual</label>
                                            <div class="admin-image-cropper-preview" style="--image-cropper-preview-ratio: 8.0720338983; --image-cropper-preview-width: 640px;">
                                                <img src="{{ asset('uploads/'.$setting->banner) }}" alt="Banner actual">
                                            </div>
                                        </div>
                                        <div id="admin_banner_preview_wrapper" class="col-sm-6 mb-3 d-none">
                                            <label>Banner nuevo</label>
                                            <div class="admin-image-cropper-preview" style="--image-cropper-preview-ratio: 8.0720338983; --image-cropper-preview-width: 640px;">
                                                <img id="admin_banner_preview" src="" alt="Banner nuevo">
                                            </div>
                                            <button type="button" id="admin_banner_recrop" class="btn btn-outline-primary btn-sm mt-2">Ajustar recorte</button>
                                        </div>
                                    </div>
                                    <div id="admin_banner_client_error" class="text-danger mt-1 d-none"></div>
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
