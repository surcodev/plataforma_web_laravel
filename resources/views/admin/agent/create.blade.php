@extends('admin.layouts.master')
<x-image-cropper-assets />

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>Create Agent</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_agent_index') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View All</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form id="admin-agent-create-form" action="{{ route('admin_agent_store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3"
                                    data-image-cropper
                                    data-source-input="#admin_agent_photo_source"
                                    data-upload-input="#admin_agent_photo_upload"
                                    data-preview-image="#admin_agent_photo_preview"
                                    data-preview-wrapper="#admin_agent_photo_preview_wrapper"
                                    data-recrop-button="#admin_agent_photo_recrop"
                                    data-error="#admin_agent_photo_client_error"
                                    data-form="#admin-agent-create-form"
                                    data-required="true"
                                    data-required-message="Selecciona y recorta la foto del agente antes de guardar."
                                    data-aspect-ratio="1"
                                    data-output-width="800"
                                    data-output-height="800"
                                    data-quality="0.84"
                                    data-file-name="agent-photo.webp"
                                    data-title="Recortar agente (1:1)">
                                    <label for="admin_agent_photo_source" class="d-block mb-1">Imagen principal *</label>
                                    <input type="file" id="admin_agent_photo_source" class="form-control mb-1" accept="image/jpeg,image/png,image/webp">
                                    <input type="file" id="admin_agent_photo_upload" name="photo" class="d-none">
                                    <small class="form-text text-muted d-block">Se guardará cuadrada en 800×800 y optimizada en WebP.</small>

                                    <div id="admin_agent_photo_preview_wrapper" class="mt-3 d-none">
                                        <label>Vista previa</label>
                                        <div class="admin-image-cropper-preview" style="--image-cropper-preview-ratio: 1; --image-cropper-preview-width: 220px;">
                                            <img id="admin_agent_photo_preview" src="" alt="Vista previa">
                                        </div>
                                        <button type="button" id="admin_agent_photo_recrop" class="btn btn-outline-primary btn-sm mt-2">Ajustar recorte</button>
                                    </div>
                                    <div id="admin_agent_photo_client_error" class="text-danger mt-1 d-none"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Nombre *</label>
                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Correo electrónico *</label>
                                            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Empresa *</label>
                                            <input type="text" class="form-control" name="company" value="{{ old('company') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Cargo *</label>
                                            <input type="text" class="form-control" name="designation" value="{{ old('designation') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Teléfono</label>
                                            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Dirección</label>
                                            <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>País</label>
                                            <input type="text" class="form-control" name="country" value="{{ old('country') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Estado</label>
                                            <input type="text" class="form-control" name="state" value="{{ old('state') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Ciudad</label>
                                            <input type="text" class="form-control" name="city" value="{{ old('city') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Código Postal</label>
                                            <input type="text" class="form-control" name="zip" value="{{ old('zip') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Facebook</label>
                                            <input type="text" class="form-control" name="facebook" value="{{ old('facebook') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Twitter</label>
                                            <input type="text" class="form-control" name="twitter" value="{{ old('twitter') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Linkedin</label>
                                            <input type="text" class="form-control" name="linkedin" value="{{ old('linkedin') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Instagram</label>
                                            <input type="text" class="form-control" name="instagram" value="{{ old('instagram') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Sitio Web</label>
                                    <input type="text" class="form-control" name="website" value="{{ old('website') }}">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Contraseña *</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Confirmar contraseña *</label>
                                            <input type="password" class="form-control" name="confirm_password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Biografía</label>
                                    <textarea name="biography" class="form-control h_200" cols="30" rows="10">{{ old('biography') }}</textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Estado *</label>
                                    <select name="status" class="form-select">
                                        <option value="0">Pendiente</option>
                                        <option value="1">Activo</option>
                                        <option value="2">Suspendido</option>
                                    </select>
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
