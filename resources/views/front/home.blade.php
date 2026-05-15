@extends('front.layouts.master')

@section('main_content')

<div class="slider" style="background-image: url({{ asset('uploads/slider-home-background.webp') }})">
    <div class="bg"></div>
    <div class="container-fluid m-0 p-0" style="height: 100%">
        <div class="row" style="width:100%; height: 100%">
            <div class="col-md-12" style="height: 100%">
                <div class="item">
                    <div class="item-content">
                        {{-- TEXTO --}}
                        <div class="text d-flex align-items-start" style="flex-direction: column; width: 610px;">
                            <h2 class="text-start mb-0">ENCONTRAMOS EL CLIENTE IDEAL PARA TU PROPIEDAD</h2>
                            <h2 class="text-start text-important">SIN COMPLICACIONES</h2>
                            <p class="text-start mb-0">
                                Nos encargamos de la publicidad en portales web, redes sociales y atención a interesados reales y calificados. 
                            </p>
                            <p class="text-start">
                                Tu propiedad en las mejores manos. 
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
                                                <select name="location" class="form-select select2" style="width: 100%">
                                                    <option value="">Seleccionar ubicación</option>
                                                    @foreach($search_locations as $location)
                                                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="form-group">
                                                <select name="type" class="form-select select2" style="width: 100%">
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
                                <div class="row mt-4 g-3">
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
                                        <a href="{{ url('property-search') }}">
                                            <button type="submit" class="btn btn-outline-primary px-4">
                                                VER PROPIEDADES
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
    </div>
</div>

<div class="property py-5">
    <div class="container">
        {{-- Heading --}}
        <div class="row">
            <div class="col-md-12">
                <div class="heading mb-0">
                    <h2>Propiedades destacadas</h2>
                    <p>Descubre las increíbles propiedades que te encantarán</p>
                </div>
            </div>
        </div>
        {{-- Carrucel de propiedades --}}
        <div class="row">
            @foreach($properties as $item)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="item">
                    <div class="photo">
                        <img class="main" src="{{ asset('uploads/'.$item->featured_photo) }}" alt="">
                        <div class="top">
                            @if($item->purpose == 'Venta')
                            <div class="status-sale">
                                En venta
                            </div>
                            @else
                            <div class="status-rent">
                                En alquiler
                            </div>
                            @endif
                            @if($item->is_featured == 'Yes')
                            <div class="featured">
                                Destacado
                            </div>
                            @endif
                        </div>
                        <div class="price">S/ {{ rtrim(rtrim(number_format($item->price, 2, '.', ','), '0'), '.') }}</div>
                        {{-- <div class="wishlist"><a href="{{ route('wishlist_add',$item->id) }}"><i class="far fa-heart"></i></a></div> --}}
                    </div>
                    <div class="text">
                        <h3><a href="{{ route('property_detail',$item->slug) }}">{{ $item->name }}</a></h3>
                        <div class="detail">
                            <div class="stat">
                                <div class="i1">{{ $item->size }} m²</div>
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
                            <div class="address">
                                <i class="fas fa-map-marker-alt"></i> {{ $item->address }}
                            </div>
                            <div class="type-location">
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
            </div>
            @endforeach

        </div>
        {{-- Boton --}}
        <div class="row property-section">
            <div class="col-12 text-center">
                <a href="{{ url('/property-search') }}" class="btn btn-primary">
                    <span style="font-size: 18px;">Ver todas las propiedades</span>
                    <i class="fas fa-angle-double-right" style="font-size: 18px;"></i> 
                </a>
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
                            Somos la plataforma ideal para encontrar propiedades, casas y departamentos con facilidad, confianza y transparencia. Te ofrecemos herramientas avanzadas de búsqueda y asesoría personalizada para que tomes la mejor decisión en bienes raíces.
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
                    <div class="text" style="text-align: left;">
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


<div class="agent d-none">
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

<div class="location pb_40 d-none">
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
                        <h4>({{ $item->properties_count }} Propiedades)</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="testimonial d-none" style="background-image: url({{ asset('uploads/testimonial-bg.jpg') }})">
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
