@extends('front.layouts.master')

<x-image-cropper-assets />

@push('styles')
<style>
    .profile-photo-card {
        max-width: 260px;
    }

    .profile-photo-preview {
        width: 100%;
        aspect-ratio: 1;
        overflow: hidden;
        border: 1px solid #d8dee6;
        border-radius: 0.75rem;
        background: #f3f4f6;
    }

    .profile-photo-preview img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

</style>
@endpush

@section('main_content')
<div class="page-top" style="background-image: url({{ asset('uploads/'.$global_setting->banner) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Agent Profile</h2>
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
                <form id="agent-profile-form" action="{{ route('agent_profile_submit') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div
                            class="col-md-12 mb-4"
                            data-image-cropper
                            data-source-input="#profile_photo_source"
                            data-upload-input="#profile_photo"
                            data-preview-image="#profile_photo_preview"
                            data-preview-wrapper="#profile_photo_preview_wrapper"
                            data-recrop-button="#profile_photo_recrop"
                            data-error="#profile_photo_client_error"
                            data-aspect-ratio="1"
                            data-width="800"
                            data-height="800"
                            data-quality="0.84"
                            data-file-name="profile-photo.webp"
                            data-title="Recortar foto de perfil"
                        >
                            <label for="profile_photo_source" class="form-label">Cambiar foto de perfil</label>
                            <input
                                type="file"
                                id="profile_photo_source"
                                class="form-control"
                                accept="image/jpeg,image/png,image/webp"
                            >
                            <input type="file" id="profile_photo" name="photo" class="d-none">
                            <small class="text-muted">
                                Selecciona una imagen, ajústala al formato cuadrado y se guardará optimizada en WebP.
                            </small>
                            @error('photo')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                            <div id="profile_photo_client_error" class="text-danger mt-1 d-none"></div>
                        </div>

                        <div class="col-md-12 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="profile-photo-card">
                                        <label class="form-label">Foto actual</label>
                                        <div class="profile-photo-preview">
                                            <img
                                                src="{{ asset('uploads/'.(Auth::guard('agent')->user()->photo ?: 'default.png')) }}"
                                                alt="Foto de perfil actual"
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div id="profile_photo_preview_wrapper" class="col-sm-6 d-none">
                                    <div class="profile-photo-card">
                                        <label class="form-label">Foto nueva</label>
                                        <div class="profile-photo-preview">
                                            <img id="profile_photo_preview" src="" alt="Vista previa de la nueva foto de perfil">
                                        </div>
                                        <button type="button" id="profile_photo_recrop" class="btn btn-outline-primary btn-sm mt-2">
                                            Ajustar recorte
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Nombre <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="{{ Auth::guard('agent')->user()->name }}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Correo electrónico <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" value="{{ Auth::guard('agent')->user()->email }}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Empresa <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="text" name="company" class="form-control" value="{{ Auth::guard('agent')->user()->company }}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Cargo <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="text" name="designation" class="form-control" value="{{ Auth::guard('agent')->user()->designation }}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Teléfono</label>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" value="{{ Auth::guard('agent')->user()->phone }}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Dirección</label>
                            <div class="form-group">
                                <input type="text" name="address" class="form-control" value="{{ Auth::guard('agent')->user()->address }}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">País</label>
                            <div class="form-group">
                                <input type="text" name="country" class="form-control" value="{{ Auth::guard('agent')->user()->country }}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Estado</label>
                            <div class="form-group">
                                <input type="text" name="state" class="form-control" value="{{ Auth::guard('agent')->user()->state }}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Ciudad</label>
                            <div class="form-group">
                                <input type="text" name="city" class="form-control" value="{{ Auth::guard('agent')->user()->city }}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Código Postal</label>
                            <div class="form-group">
                                <input type="text" name="zip" class="form-control" value="{{ Auth::guard('agent')->user()->zip }}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Facebook</label>
                            <div class="form-group">
                                <input type="text" name="facebook" class="form-control" value="{{ Auth::guard('agent')->user()->facebook }}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Twitter</label>
                            <div class="form-group">
                                <input type="text" name="twitter" class="form-control" value="{{ Auth::guard('agent')->user()->twitter }}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">LinkedIn</label>
                            <div class="form-group">
                                <input type="text" name="linkedin" class="form-control" value="{{ Auth::guard('agent')->user()->linkedin }}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Instagram</label>
                            <div class="form-group">
                                <input type="text" name="instagram" class="form-control" value="{{ Auth::guard('agent')->user()->instagram }}">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Sitio Web</label>
                            <div class="form-group">
                                <input type="text" name="website" class="form-control" value="{{ Auth::guard('agent')->user()->website }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Contraseña</label>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Confirmar contraseña</label>
                            <div class="form-group">
                                <input type="password" name="confirm_password" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Biografía</label>
                            <div class="form-group">
                                <textarea name="biography" class="form-control h-300" rows="5">{{ Auth::guard('agent')->user()->biography }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Update">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
