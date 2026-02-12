@extends('front.layouts.master')

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
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.635987877565!2d-77.0238138!3d-12.0961306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c86563beaea5%3A0x42aa1828ef456521!2sOf.%20302%2C%20C.%20German%20Schreiber%20Gulsmanco%20272%2C%20San%20Isidro%2015047%2C%20Peru!5e0!3m2!1ses!2spe!4v1725916800000!5m2!1ses!2spe"
                        width="600"
                        height="450"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

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
                        iziToast.success({
                            message: data.success_message,
                            position: 'topRight',
                            timeout: 5000,
                            progressBarColor: '#00FF00',
                        });
                    }
                    
                }
            });
        });
    })(jQuery);
</script>
<div id="loader"></div>
@endsection