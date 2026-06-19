@extends('front.layouts.master')

@section('main_content')

<div class="slider">
    <div class="container-fluid m-0 p-0 h-100-p">
        <div class="item">
            <div class="item-content">
                {{-- TEXTO (width: 610px;) --}}
                <div class="text d-flex align-items-start">
                    <h2 class="text-start mb-0">ENCONTRAMOS EL CLIENTE IDEAL PARA TU INMUEBLE</h2>
                    <h2 class="text-start text-important">SIN COMPLICACIONES</h2>
                    <p class="text-start mb-0">
                        Nos encargamos de la publicidad en portales web, redes sociales y encontrar a interesados reales y calificados. 
                    </p>
                    <p class="text-start">
                        Tu inmueble en las mejores manos. 
                    </p>
                </div>

                {{-- FILTROS (OCULTO)--}}
                <div class="search-section d-none">
                    <form action="{{ route('property_search') }}" method="get">
                        <div class="inner">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Encuentra lo que buscas ..." value="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <select name="location" class="form-select select2 w-100-p">
                                            <option value="">Seleccionar ubicación</option>
                                            @foreach($search_locations as $location)
                                                <option value="{{ $location->id }}">{{ $location->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <select name="type" class="form-select select2 w-100-p">
                                            <option value="">Selecionar tipo</option>
                                            @foreach($search_types as $type)
                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-search"></i>
                                        Buscar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                {{-- ICONOS Y BOTONES --}}
                <div class="search-section mt-0">
                    <div class="inner border-0 p-0">

                        {{-- ICONOS --}}
                        <div class="feature-card">
                            <div class="feature-row">
                                <div class="feature-item">
                                    <div class="icon-circle">
                                        <i class="bi bi-megaphone"></i>
                                    </div>
                                    <div class="feature-text">
                                        Publicamos tu inmueble
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="icon-circle">
                                        <i class="bi bi-bar-chart-line"></i>
                                    </div>
                                    <div class="feature-text">
                                        Promocionamos en portales y redes
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="icon-circle">
                                        <i class="bi bi-house-check"></i>
                                    </div>

                                    <div class="feature-text">
                                        Gestionamos visitas y consultas
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Botones --}}
                        <div class="row mt-2 g-3">
                            <div class="col-auto">
                                <a href="{{ route('publicar_wsp') }}" target="_blank" rel="noopener noreferrer">
                                    <button class="btn text-white btn-wsp d-flex align-items-center px-4">
                                        <span class="btn-text-full">
                                            QUIERO PUBLICAR MI INMUEBLE
                                        </span>
                                        <span class="btn-text-short">
                                            QUIERO PUBLICAR
                                        </span>
                                        <i class="bi bi-whatsapp btn-icon ms-3 fs-4"></i>
                                    </button>
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="#property">
                                    <button type="submit" class="btn btn-outline-primary px-4">
                                        VER INMUEBLES
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="property d-flex" id="property">
    <div class="outstanding col-12 col-xl-8">
        {{-- INFO --}}
        <div class="section">
            {{-- Heading --}} 
            <div class="heading">
                <h4 class="mb-0">
                    ¿TIENES UN
                    <span class="text-important">INMUEBLE</span>
                    PARA ALQUILAR O VENDER?
                </h4>
                <span>
                    Nosotros lo publicamos y conectamos con clientes interesados reales y calificados.
                </span>
            </div>
            <div class="cards-info row justify-content-center g-4">
                <div class="col col-6 col-lg-3">
                    <div class="card">
                        <div class="card-icon icon-circle">
                            <i class="bi bi-megaphone fs-1"></i>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">MÁS DIFUSIÓN</h5>
                            <p class="card-text">Publicamos en nuestra web, portales inmobiliarios y redes sociales</p>
                        </div>
                    </div>
                </div>
                <div class="col col-6 col-lg-3">
                    <div class="card">
                    <div class="card-icon icon-circle">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">INTERESADOS REALES</h5>
                        <p class="card-text">Filtramos y seleccionamos personas realmente interesadas.</p>
                    </div>
                    </div>
                </div>
                <div class="col col-6 col-lg-3">
                    <div class="card">
                        <div class="card-icon icon-circle">
                            <i class="bi bi-headset fs-1"></i>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">ATENCIÓN CONSTANTE</h5>
                            <p class="card-text">Respondemos consultas por whatsapp, llamadas y mensajes.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-6 col-lg-3">
                    <div class="card">
                        <div class="card-icon icon-circle">
                            <i class="bi bi-shield-check fs-1"></i>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">PROCESO SIMPLE</h5>
                            <p class="card-text">Gestionamos todo el proceso de venta o alquiler por ti.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- PASOS --}}
        <div class="section">
            {{-- Heading --}} 
            <div class="heading mb-2">
                <h4 class="mb-0 d-flex justify-content-center align-items-center">
                    <div class="custom-line me-2 me-md-3"></div>
                    ASI TRABAJAMOS - EN 3 PASOS
                    <div class="custom-line ms-2 ms-md-3"></div>
                </h4>
            </div>
            <div class="cards-steps row justify-content-center g-3">
                <div class="col col-12 col-md-6 col-lg-4 col-xl-6 col-xxl-4">
                    <div class="card py-3 px-4 d-flex flex-row align-items-center">
                        <i class="step-1 bi bi-1-circle-fill fs-1 me-4"></i>
                        <div>
                            <p class="card-title fw-bold">NOS ESCRIBES</p>
                            <p class="card-text">Envíanos los datos y fotos de tu inmueble por Whatsapp.</p>
                        </div>
                        <i class="bi d-none d-md-block bi-arrow-right text-primary fs-1 ms-2"></i>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-4 col-xl-6 col-xxl-4">
                    <div class="card py-3 px-4 d-flex flex-row align-items-center">
                        <i class="step-2 bi bi-2-circle-fill fs-1 me-4"></i>
                        <div>
                            <p class="card-title fw-bold">LO DIFUNDIMOS</p>
                            <p class="card-text">Publicamos en nuestra web, portales y redes sociales.</p>
                        </div>
                        <i class="bi d-none d-md-block bi-arrow-right text-primary fs-1 ms-2"></i>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-4 col-xl-6 col-xxl-4">
                    <div class="card py-3 px-4 d-flex flex-row align-items-center">
                        <i class="step-3 bi bi-3-circle-fill fs-1 me-4"></i>
                        <div class="me-3">
                            <p class="card-title fw-bold">LLEGAN INTERESADOS</p>
                            <p class="card-text">Agendamos visitas estratégicas con los mejores candidatos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- PROPIEDADES DESTACADAS (outstanding) --}}
        <div class="property-section">
            {{-- Heading --}} 
            <div class="heading">
                <h4>INMUEBLES DESTACADOS</h4>
            </div>

            {{-- Carrucel de propiedades --}}
            <div class="property-carousel owl-carousel">
                @foreach($properties as $item)
                    <div class="item">
                        {{-- PARTE SUPERIOR --}}
                        <div class="photo">
                            <img class="main" src="{{ asset('uploads/'.$item->featured_photo) }}" alt="{{ $item->name }}">
                            <div class="top">
                                @if($item->purpose == 'Venta')
                                <div class="status-sale fw-bold">
                                    VENTA
                                </div>
                                @else
                                <div class="status-rent fw-bold">
                                    ALQUILER
                                </div>
                                @endif
                                @if($item->is_featured == 'Yes')
                                <div class="featured d-none">
                                    <i class="fas fa-bookmark"></i>
                                </div>
                                @endif
                            </div>
                            <div class="price d-none">USD {{ rtrim(rtrim(number_format($item->price_dolar, 2, '.', ','), '0'), '.') }} • S/ {{ rtrim(rtrim(number_format($item->price, 2, '.', ','), '0'), '.') }}</div>
                            {{-- <div class="wishlist"><a href="{{ route('wishlist_add',$item->id) }}"><i class="far fa-heart"></i></a></div> --}}
                        </div>
                        {{-- PARTE INFERIOR --}}
                        <div class="text py-auto">
                            <h3><a href="{{ route('property_detail',$item->slug) }}">{{ $item->name }}</a></h3>
                            <h3 class="price">S/ {{ rtrim(rtrim(number_format($item->price, 2, '.', ','), '0'), '.') }} • USD {{ rtrim(rtrim(number_format($item->price_dolar, 2, '.', ','), '0'), '.') }}</h3>
                            <div class="detail">
                                <div class="stat d-none">
                                    <div class="i1 d-none"><i class="fa-solid fa-ruler-vertical"></i> {{ $item->size }} m²</div>
                                    @if($item->bedroom > 0)
                                        <div class="i2">
                                            {{ $item->bedroom }} {{ $item->bedroom == 1 ? 'Habitación' : 'Habitaciones' }}
                                        </div>
                                    @endif
                                    @if($item->bedroom > 0)
                                        <div class="i3">
                                            {{ $item->bathroom }} {{ $item->bathroom == 1 ? 'Baño' : 'Baños' }}
                                        </div>
                                    @endif
                                </div>
                                <div class="address d-none">
                                    <i class="fas fa-map-marker-alt"></i> {{ $item->address }}
                                </div>
                                <div class="features main">
                                    @if($item->bedroom > 0)
                                        <div class="i1 fw-bold text-black">
                                            <i class="fas fa-bed fs-5 me-2"></i> {{ $item->bedroom }}
                                        </div>
                                    @endif
                                    @if($item->bathroom > 0)
                                        <div class="i1 fw-bold text-black">
                                            <i class="fas fa-bath fs-5 me-2"></i> {{ $item->bathroom }}
                                        </div>
                                    @endif
                                        <div class="i2 fw-bold text-black">
                                            <i class="fa-solid fa-ruler-vertical fs-5 me-2"></i> {{ $item->size }} m²
                                        </div>
                                </div>
                                <div class="features">
                                    <div class="i1">
                                        <i class="fas fa-edit"></i> {{ $item->type->name }}
                                    </div>
                                    <div class="i2">
                                        <i class="fas fa-location-arrow"></i> {{ $item->location->name }}
                                    </div>
                                </div>
                                {{-- <div class="agent-section">
                                    @if($item->agent->photo != null)
                                    <img class="agent-photo" src="{{ asset('uploads/'.$item->agent->photo) }}" alt="">
                                    @else
                                    <img class="agent-photo" src="{{ asset('uploads/default.png') }}" alt="">
                                    @endif
                                    <a href="{{ route('agent',$item->agent->id) }}">{{ $item->agent->name }} ({{ $item->agent->company }})</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Boton --}}
            <div class="row">
                <div class="col-12 text-center">
                    <a href="{{ url('/property-search') }}" class="btn btn-outline-primary px-5">
                        <span>VER MÁS INMUEBLES</span>
                        <i class="fas fa-angle-double-right ms-2"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="banner-right col-xl-4 d-none d-xl-block">
        {{-- FORMULARIO WSP (form-wsp) --}}
        <div class="form-wsp">
            <div class="card shadow border-0">
                <div class="card-body p-4">
                    <div class="mb-3 text-center">
                        <h3 class="card-title fw-bold text-primary">
                            PUBLICA TU INMUEBLE EN 1 MINUTO
                        </h3>
                        <span class="card-text">Usted nos da los detalles, nosotros hacemos TODO EL TRABAJO</span>
                    </div>
                    
                    <form class="row" id="formulario-whatsapp" data-url="{{ route('whatsapp_generar') }}">
                        @csrf
                        <div class="col-12 col-xxl-6 mb-3 form-group">
                            <label for="wa_nombre" class="form-label fw-bold">Nombre</label>
                            <input type="text" class="form-control" id="wa_nombre" placeholder="Ej. Juan Pérez" required>
                        </div>

                        <div class="col-12 col-xxl-6 mb-3 form-group">
                            <label for="wa_accion" class="form-label fw-bold">¿Qué deseas hacer?</label>
                            <select class="form-select" id="wa_accion" required>
                                <option value="" selected disabled>Venta o Alquiler...</option>
                                <option value="Vender">Vender mi inmueble</option>
                                <option value="Rentar">Rentar mi inmueble</option>
                            </select>
                        </div>

                        <div class="col-12 col-xxl-6 mb-3 form-group">
                            <label for="wa_tipo" class="form-label fw-bold">Tipo de Inmueble</label>
                            <select class="form-select" id="wa_tipo" required>
                                <option value="" selected disabled>Selecciona el tipo...</option>
                                @foreach($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12 col-xxl-6 mb-4 form-group">
                            <label for="wa_email" class="form-label fw-bold">Email</label>
                            <input type="text" class="form-control" id="wa_email" placeholder="(Opcional)">
                        </div>

                        <button type="button" id="btn-enviar-wa" class="col-12 d-flex justify-content-center align-items-center btn btn-wsp d-block mx-auto mb-2 w-80-p">
                            ENVIAR POR WHATSAPP
                            <i class="bi bi-whatsapp btn-icon ms-2 fs-4"></i>
                        </button>

                        <span class="text-center"><i class="bi bi-shield-lock-fill text-success"></i> Tus datos están protegidos y no se publicarán</span>
                    </form>
                    
                </div>
            </div>
        </div>
        <div class="banner-wsp">
            <div class="card shadow border-0 py-4">
                <div class="row g-0 align-items-center">
                    <div class="col p-0 my-4">
                        <h3 class="card-title">¿Listo para publicar tu inmueble?</h3>
                        <p class="card-text">Escribenos ahora por WhatsApp y empezemos a buscar interesados.</p>
                    </div>
                    <div class="col-auto d-flex flex-column align-items-end">
                        <img
                            src="{{ asset('uploads/whatsapp_icon.png') }}"
                            alt="WhatsApp"
                            class="img-wsp"
                        >
                        <div class="img-arrow"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="why-choose">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>¿Por qué escogernos?</h2>
                    <p>
                            Somos la plataforma ideal para encontrar inmuebles: casas, departamentos y terrenos con facilidad, confianza y transparencia. Te ofrecemos herramientas avanzadas de búsqueda y asesoría personalizada para que tomes la mejor decisión en bienes raíces.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="inner">
                    <div class="icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="text">
                        <h2>Años de experiencia</h2>
                        <p>
                            Con décadas de experiencia combinada en la industria, nuestros agentes tienen la experiencia y el conocimiento para brindarle una experiencia de compra de vivienda perfecta.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="inner">
                    <div class="icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="text">
                        <h2>Precios competitivos</h2>
                        <p>
                            Entendemos que comprar una casa es una inversión importante, por eso nos esforzamos por ofrecer precios competitivos a nuestros clientes.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="inner">
                    <div class="icon">
                        <i class="fas fa-share-alt"></i>
                    </div>
                    <div class="text">
                        <h2>Comunicación receptiva</h2>
                        <p>
                            Nuestros agentes receptivos están aquí para responder sus preguntas y abordar sus inquietudes, garantizando una experiencia de compra de vivienda fluida y sin estrés.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-none agent">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Agentes</h2>
                    <p>
                        Conozca a nuestros agentes inmobiliarios expertos de la siguiente lista
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($agents as $item)
            <div class="col-lg-3 col-md-3">
                <div class="item">
                    <div class="photo">
                        <a href="{{ route('agent',$item->id) }}"><img src="{{ asset('uploads/'.$item->photo) }}" alt=""></a>
                    </div>
                    <div class="text">
                        <h2>
                            <a href="{{ route('agent',$item->id) }}">{{ $item->name }}</a>
                        </h2>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="d-none location pb_40">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Ubicaciones</h2>
                    <p>
                        Conoce nuestras ubicaciones más populares y encuentra tu próximo hogar en el lugar perfecto para ti
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($locations as $item)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="item">
                    <div class="photo">
                        <a href="{{ route('location',$item->slug) }}"><img src="{{ asset('uploads/'.$item->photo) }}" alt=""></a>
                    </div>
                    <div class="text">
                        <h2><a href="{{ route('location',$item->slug) }}">{{ $item->name }}</a></h2>
                        <h4>({{ $item->properties_count }} Inmuebles)</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="d-none testimonial">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-header">Nuestros Clientes Felices</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-carousel owl-carousel">
                    
                    @foreach($testimonials as $item)
                    <div class="item">
                        <div class="photo">
                            <img src="{{ asset('uploads/'.$item->photo) }}" alt="">
                        </div>
                        <div class="text">
                            <h4>{{ $item->name }}</h4>
                            <p>{{ $item->designation }}</p>
                        </div>
                        <div class="description">
                            {!! $item->comment !!}
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Últimas noticias</h2>
                    <p>
                        Consulta nuestras últimas novedades en la siguiente sección
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($posts as $item)
            <div class="col-lg-4 col-md-6">
                <div class="item">
                    <div class="photo">
                        <img src="{{ asset('uploads/'.$item->photo) }}" alt="">
                    </div>
                    <div class="text">
                        <h2>
                            <a href="{{ route('post',$item->slug) }}">{{ $item->title }}</a>
                        </h2>
                        <div class="short-des">
                            <p>
                                {!! $item->short_description !!}
                            </p>
                        </div>
                        <div class="button">
                            <a href="{{ route('post',$item->slug) }}" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
