@extends('front.layouts.master')

@section('main_content')
<div class="slider" style="background-image: url({{ asset('uploads/banner-home.jpg') }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="item">
                    <div class="text">
                        <h2>Descubre tu nuevo hogar</h2>
                        <p>
                            Descubre las mejores oportunidades inmobiliarias — casas, departamentos y terrenos — según nombre, categoría o ubicación.
                        </p>
                    </div>
                    <div class="search-section">
                        <form action="{{ route('property_search') }}" method="get">
                            <div class="inner">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Encuentra lo que buscas ..." value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select name="location" class="form-select select2">
                                                <option value="">Seleccionar ubicación</option>
                                                @foreach($search_locations as $location)
                                                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select name="type" class="form-select select2">
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
                </div>
            </div>
        </div>
    </div>
</div>


<div class="property">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Propiedades destacadas</h2>
                    <p>Descubre las increíbles propiedades que te encantarán</p>
                </div>
            </div>
        </div>
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
                        <div class="wishlist"><a href="{{ route('wishlist_add',$item->id) }}"><i class="far fa-heart"></i></a></div>
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
                            <div class="agent-section">
                                @if($item->agent->photo != null)
                                <img class="agent-photo" src="{{ asset('uploads/'.$item->agent->photo) }}" alt="">
                                @else
                                <img class="agent-photo" src="{{ asset('uploads/default.png') }}" alt="">
                                @endif
                                <a href="{{ route('agent',$item->agent->id) }}">{{ $item->agent->name }} ({{ $item->agent->company }})</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>


<div class="why-choose" style="background-image: url({{ asset('uploads/why-choose.jpg') }})">
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


<div class="agent">
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



<div class="location pb_40">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Ubicaciones</h2>
                    <p>
                        Consulta todas las propiedades de lugares importantes
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



<div class="testimonial" style="background-image: url({{ asset('uploads/testimonial-bg.jpg') }})">
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
