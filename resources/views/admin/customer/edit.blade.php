@extends('admin.layouts.master')
<x-image-cropper-assets />

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>Edit Customer</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_customer_index') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View All</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_customer_update',$customer->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3"
                                    data-image-cropper
                                    data-source-input="#admin_customer_photo_source"
                                    data-upload-input="#admin_customer_photo_upload"
                                    data-preview-image="#admin_customer_photo_preview"
                                    data-preview-wrapper="#admin_customer_photo_preview_wrapper"
                                    data-recrop-button="#admin_customer_photo_recrop"
                                    data-error="#admin_customer_photo_client_error"
                                    data-aspect-ratio="1"
                                    data-output-width="800"
                                    data-output-height="800"
                                    data-quality="0.84"
                                    data-file-name="customer-photo.webp"
                                    data-title="Recortar cliente (1:1)">
                                    <label for="admin_customer_photo_source" class="d-block mb-1">Foto *</label>
                                    <input type="file" id="admin_customer_photo_source" class="form-control mb-1" accept="image/jpeg,image/png,image/webp">
                                    <input type="file" id="admin_customer_photo_upload" name="photo" class="d-none">
                                    <small class="form-text text-muted d-block">Si eliges otra imagen, se guardará cuadrada en 800×800 y optimizada en WebP.</small>

                                    <div class="row mt-3">
                                        <div class="col-sm-6 mb-3">
                                            <label>Foto actual</label>
                                            <div class="admin-image-cropper-preview" style="--image-cropper-preview-ratio: 1; --image-cropper-preview-width: 220px;">
                                                <img src="{{ asset('uploads/'.($customer->photo ?: 'default.png')) }}" alt="Foto actual">
                                            </div>
                                        </div>
                                        <div id="admin_customer_photo_preview_wrapper" class="col-sm-6 mb-3 d-none">
                                            <label>Foto nueva</label>
                                            <div class="admin-image-cropper-preview" style="--image-cropper-preview-ratio: 1; --image-cropper-preview-width: 220px;">
                                                <img id="admin_customer_photo_preview" src="" alt="Foto nueva">
                                            </div>
                                            <button type="button" id="admin_customer_photo_recrop" class="btn btn-outline-primary btn-sm mt-2">Ajustar recorte</button>
                                        </div>
                                    </div>
                                    <div id="admin_customer_photo_client_error" class="text-danger mt-1 d-none"></div>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Nombre *</label>
                                    <input type="text" class="form-control" name="name" value="{{ $customer->name }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Correo electrónico *</label>
                                    <input type="text" class="form-control" name="email" value="{{ $customer->email }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Contraseña</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Confirmar contraseña</label>
                                    <input type="password" class="form-control" name="confirm_password">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Estado *</label>
                                    <select name="status" class="form-select">
                                        <option value="0" {{ $customer->status == 0 ? 'selected' : '' }}>Pendiente</option>
                                        <option value="1" {{ $customer->status == 1 ? 'selected' : '' }}>Activo</option>
                                        <option value="2" {{ $customer->status == 2 ? 'selected' : '' }}>Suspendido</option>
                                    </select>
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
