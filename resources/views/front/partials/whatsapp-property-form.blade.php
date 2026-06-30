@php
    $suffix = $suffix ?? 'default';
@endphp

<div class="form-wsp">
    <div class="card shadow border-0">
        <div class="card-body p-4">
            <div class="mb-3 text-center">
                <h3 class="card-title fw-bold text-primary">
                    PUBLICA TU INMUEBLE EN 1 MINUTO
                </h3>
                <span class="card-text">Usted nos da los detalles, nosotros hacemos TODO EL TRABAJO</span>
            </div>

            <form class="row formulario-whatsapp" data-whatsapp-form data-url="{{ route('whatsapp_generar') }}">
                @csrf
                <div class="col-md-6 col-xl-12 col-xxl-6 mb-3 form-group">
                    <label for="wa_nombre_{{ $suffix }}" class="form-label fw-bold">Nombre</label>
                    <input type="text" class="form-control" id="wa_nombre_{{ $suffix }}" data-wa-name placeholder="Ej. Juan Pérez" required>
                </div>

                <div class="col-md-6 col-xl-12 col-xxl-6 mb-3 form-group">
                    <label for="wa_accion_{{ $suffix }}" class="form-label fw-bold">¿Qué deseas hacer?</label>
                    <select class="form-select" id="wa_accion_{{ $suffix }}" data-wa-action required>
                        <option value="" selected disabled>Venta o Alquiler...</option>
                        <option value="Vender">Vender mi inmueble</option>
                        <option value="Rentar">Rentar mi inmueble</option>
                    </select>
                </div>

                <div class="col-md-6 col-xl-12 col-xxl-6 mb-3 form-group">
                    <label for="wa_tipo_{{ $suffix }}" class="form-label fw-bold">Tipo de Inmueble</label>
                    <select class="form-select" id="wa_tipo_{{ $suffix }}" data-wa-type required>
                        <option value="" selected disabled>Selecciona el tipo...</option>
                        @foreach($types as $type)
                            <option value="{{ $type->name }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 col-xl-12 col-xxl-6 mb-4 form-group">
                    <label for="wa_email_{{ $suffix }}" class="form-label fw-bold">Email</label>
                    <input type="text" class="form-control" id="wa_email_{{ $suffix }}" data-wa-email placeholder="(Opcional)">
                </div>

                <button type="button" data-wa-submit class="col-12 d-flex justify-content-center align-items-center btn btn-wsp d-block mx-auto mb-2 w-80-p">
                    ENVIAR POR WHATSAPP
                    <i class="bi bi-whatsapp btn-icon ms-2 fs-4"></i>
                </button>

                <span class="text-center"><i class="bi bi-shield-lock-fill text-success"></i> Tus datos están protegidos y no se publicarán</span>
            </form>
        </div>
    </div>
</div>
