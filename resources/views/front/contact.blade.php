@extends('front.layouts.master')

@section('title', 'Información de Contacto')
@section('meta_description', 'Información de contacto. Escríbenos o llámanos para resolver tus dudas sobre nuestros servicios inmobiliarios.')

@section('main_content')
<div class="page-top" style="background-image: url({{ asset('uploads/'.$global_setting->banner) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Contáctanos</h2>
                <h6 style="margin-top: 20px;">Desea más información sobre nuestros proyectos o propiedades? No dude en contactarnos, estaremos encantados de atenderle.</h6>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="contact-form">
                    <form action="{{ route('contact_submit') }}" method="post" class="form_contact">
                        @csrf
                        <div style="position:absolute; left:-9999px;">
                            <input type="text" name="website" tabindex="-1" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="name">
                            <span class="text-danger error-text name_error"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Correo electrónico</label>
                            <input type="text" class="form-control" name="email">
                            <span class="text-danger error-text email_error"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Mensaje</label>
                            <textarea class="form-control" rows="3" name="message"></textarea>
                            <span class="text-danger error-text message_error"></span>
                        </div>
                        <div class="mb-3">
                            <div class="cf-turnstile" data-sitekey="{{ config('services.turnstile.site_key') }}" data-theme="light"></div>
                            <span class="text-danger error-text captcha_error"></span>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary bg-website">
                                Enviar mensaje
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="map">
                    <iframe
                        @if($global_setting && $global_setting->contact_map_url)
                            <iframe src="{{ $global_setting->contact_map_url }}" ...></iframe>
                        @else
                            <p>Mapa aún no configurado</p>
                        @endif
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
<script>
    (function($){
        $(".form_contact").on('submit', function(e){
            e.preventDefault();
            $('#loader').show();
            var form = this;
            $.ajax({
                url:$(form).attr('action'),
                method:$(form).attr('method'),
                data:new FormData(form),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(form).find('span.error-text').text('');
                },
                success:function(data)
                {
                    $('#loader').hide();
                    if(data.code == 0)
                    {
                        $.each(data.error_message, function(prefix, val) {
                            $(form).find('span.'+prefix+'_error').text(val[0]);
                        });
                    }
                    else if(data.code == 1)
                    {
                        $(form)[0].reset();
                        if (typeof turnstile !== 'undefined') {
                            turnstile.reset();
                        }
                        iziToast.success({
                            message: data.success_message,
                            position: 'topRight',
                            timeout: 5000,
                            progressBarColor: '#00FF00',
                        });
                    }
                },
                error: function(xhr)
                {
                    $('#loader').hide();

                    if (xhr.status === 429) {
                        iziToast.error({
                            message: 'Demasiados intentos. Intenta nuevamente en unos momentos.',
                            position: 'topRight',
                        });
                    }
                }
            });
        });
    })(jQuery);
</script>
<div id="loader"></div>
@endsection