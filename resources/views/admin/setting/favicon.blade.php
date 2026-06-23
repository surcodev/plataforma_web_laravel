@extends('admin.layouts.master')
<x-image-cropper-assets />

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>Editar Favicon</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form id="admin-favicon-form" action="{{ route('admin_setting_favicon_update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3"
                                    data-image-cropper
                                    data-source-input="#admin_favicon_source"
                                    data-upload-input="#admin_favicon_upload"
                                    data-preview-image="#admin_favicon_preview"
                                    data-preview-wrapper="#admin_favicon_preview_wrapper"
                                    data-recrop-button="#admin_favicon_recrop"
                                    data-error="#admin_favicon_client_error"
                                    data-form="#admin-favicon-form"
                                    data-required="true"
                                    data-required-message="Selecciona y recorta el favicon antes de actualizar."
                                    data-aspect-ratio="1"
                                    data-output-width="512"
                                    data-output-height="512"
                                    data-quality="0.84"
                                    data-file-name="favicon.webp"
                                    data-title="Recortar favicon (1:1)">
                                    <label for="admin_favicon_source" class="d-block mb-1">Cambiar favicon</label>
                                    <input type="file" id="admin_favicon_source" class="form-control mb-1" accept="image/jpeg,image/png,image/webp">
                                    <input type="file" id="admin_favicon_upload" name="favicon" class="d-none">
                                    <small class="form-text text-muted d-block">Aunque se vea pequeño en navegador o Google, 512×512 es una buena imagen base para escalar sin perder calidad.</small>

                                    <div class="row mt-3">
                                        <div class="col-sm-6 mb-3">
                                            <label>Favicon actual</label>
                                            <div class="admin-image-cropper-preview" style="--image-cropper-preview-ratio: 1; --image-cropper-preview-width: 140px;">
                                                <img src="{{ asset('uploads/'.$setting->favicon) }}" alt="Favicon actual">
                                            </div>
                                        </div>
                                        <div id="admin_favicon_preview_wrapper" class="col-sm-6 mb-3 d-none">
                                            <label>Favicon nuevo</label>
                                            <div class="admin-image-cropper-preview" style="--image-cropper-preview-ratio: 1; --image-cropper-preview-width: 140px;">
                                                <img id="admin_favicon_preview" src="" alt="Favicon nuevo">
                                            </div>
                                            <button type="button" id="admin_favicon_recrop" class="btn btn-outline-primary btn-sm mt-2">Ajustar recorte</button>
                                        </div>
                                    </div>
                                    <div id="admin_favicon_client_error" class="text-danger mt-1 d-none"></div>
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
