@extends('front.layouts.master')

@section('main_content')
<div class="page-top" style="background-image: url({{ asset('uploads/'.$global_setting->banner) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $property->name }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="property-result pt_50 pb_50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="left-item">
                    <div class="main-photo">
                        <img src="{{ asset('uploads/'.$property->featured_photo) }}" alt="">
                    </div>
                    <h2>
                        Descripción
                    </h2>
                    {!! $property->description !!}
                </div>
                <div class="left-item">
                    <h2>
                        Fotos
                    </h2>
                    <div class="photo-all">
                        <div class="row">
                            @if($property->photos->count() == 0)
                                <span class="text-danger">No hay fotos disponibles</span>
                            @else
                                @foreach($property->photos as $photo)
                                <div class="col-md-6 col-lg-4">
                                    <div class="item">
                                        <a href="{{ asset('uploads/'.$photo->photo) }}" class="magnific">
                                            <img src="{{ asset('uploads/'.$photo->photo) }}" alt="">
                                            <div class="icon">
                                                <i class="fas fa-plus"></i>
                                            </div>
                                            <div class="bg"></div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="left-item">
                    <h2>
                        Videos
                    </h2>
                    <div class="video-all">
                        <div class="row">
                            @if($property->videos->count() == 0)
                                <span class="text-danger">No hay vídeos disponibles</span>
                            @else
                                @foreach($property->videos as $video)
                                <div class="col-md-6 col-lg-4">
                                    <div class="item">
                                        <a class="video-button" href="http://www.youtube.com/watch?v={{ $video->video }}">
                                            <img src="http://img.youtube.com/vi/{{ $video->video }}/0.jpg" alt="" />
                                            <div class="icon">
                                                <i class="far fa-play-circle"></i>
                                            </div>
                                            <div class="bg"></div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <div class="left-item mb_50">
                    <h2>Compartir</h2>
                    <div class="share">
                        @php
                        $url = url('property/'.$property->slug);
                        $photo = asset('uploads/'.$property->featured_photo);
                        @endphp
                        <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}&picture={{ $photo }}" target="_blank">
                            Facebook
                        </a>
                        <a class="twitter" href="https://twitter.com/share?url={{ $url }}&text={{ $property->name }}" target="_blank">
                            Twitter
                        </a>
                        <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url={{ $url }}&title={{ $property->name }}&summary={{ $property->description }}" target="_blank">
                            LinkedIn
                        </a>
                    </div>
                </div>


                <div class="left-item">
                    <h2>
                        Propiedades relacionadas
                    </h2>
                    <div class="property related-property pt_0 pb_0">
                        <div class="row">
                            @php
                            $related_properties = \App\Models\Property::where('type_id', $property->type_id)
                                ->where('id', '!=', $property->id)
                                ->orderBy('id', 'desc')
                                ->where('status', 'Active')
                                ->take(2)
                                ->get();    
                            @endphp
                            @if($related_properties->count() == 0)
                                <span class="text-danger">No se encontraron propiedades relacionadas</span>
                            @else
                                @foreach($related_properties as $item)
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="item">
                                        <div class="photo">
                                            <img class="main" src="{{ asset('uploads/'.$item->featured_photo) }}" alt="">
                                            <div class="top">
                                                @if($item->purpose == 'Sale')
                                                <div class="status-sale">
                                                    For Sale
                                                </div>
                                                @else
                                                <div class="status-rent">
                                                    For Rent
                                                </div>
                                                @endif
                                                @if($item->is_featured == 'Yes')
                                                <div class="featured">
                                                    Featured
                                                </div>
                                                @endif
                                            </div>
                                            <div class="price">S/ {{ rtrim(rtrim(number_format($item->price, 2, '.', ','), '0'), '.') }}</div>
                                            <div class="wishlist"><a href=""><i class="far fa-heart"></i></a></div>
                                        </div>
                                        <div class="text">
                                            <h3><a href="{{ route('property_detail',$item->slug) }}">{{ $item->name }}</a></h3>
                                            <div class="detail">
                                                <div class="stat">
                                                    <div class="i1">{{ $item->size }} sqft</div>
                                                    <div class="i2">{{ $item->bedroom }} Bed</div>
                                                    <div class="i3">{{ $item->bathroom }} Bath</div>
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
                                                    <a href="">{{ $item->agent->name }} ({{ $item->agent->company }})</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">

                <div class="right-item">
                    <h2>Agente</h2>
                    <div class="agent-right d-flex justify-content-start">
                        <div class="left">
                            @if($property->agent->photo != null)
                            <img src="{{ asset('uploads/'.$property->agent->photo) }}" alt="">
                            @else
                            <img src="{{ asset('uploads/default.png') }}" alt="">
                            @endif
                        </div>
                        <div class="right">
                            <h3><a href="">{{ $property->agent->name }}</a></h3>
                            <h4>{{ $property->agent->designation }}</h4>
                        </div>
                    </div>
                    <div class="table-responsive mt_25">
                        <table class="table table-bordered">
                            <tr>
                                <td>Publicado el: </td>
                                <td>
                                    {{ $property->created_at->format('d M, Y') }}
                                </td>
                            </tr>
                            <tr>
                                <td>Correo electrónico: </td>
                                <td>{{ $property->agent->email }}</td>
                            </tr>

                            @if($property->agent->phone != '')
                            <tr>
                                <td>Teléfono: </td>
                                <td>{{ $property->agent->phone }}</td>
                            </tr>
                            @endif

                            @if($property->agent->facebook != '' || $property->agent->twitter != '' || $property->agent->instagram != '' || $property->agent->linkedin != '')
                            <tr>
                                <td>Social: </td>
                                <td>
                                    <ul class="agent-ul">
                                        @if($property->agent->facebook != '')
                                        <li><a href="{{ $property->agent->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                        @endif
                                        @if($property->agent->twitter != '')
                                        <li><a href="{{ $property->agent->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                        @endif
                                        @if($property->agent->instagram != '')
                                        <li><a href="{{ $property->agent->instagram }}"><i class="fab fa-instagram"></i></a></li>
                                        @endif
                                        @if($property->agent->linkedin != '')
                                        <li><a href="{{ $property->agent->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                                        @endif
                                    </ul>
                                </td>
                            </tr>
                            @endif
                        </table>
                    </div>
                </div>

                <div class="right-item">
                    <h2>Caracteristicas</h2>
                    <div class="summary">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <td><b>Precio</b></td>
                                    <td>S/ {{ rtrim(rtrim(number_format($property->price, 2, '.', ','), '0'), '.') }}</td>
                                </tr>
                                <tr>
                                    <td><b>Departamento</b></td>
                                    <td>
                                        {{ $property->location->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Tipo</b></td>
                                    <td>
                                        {{ $property->type->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Proósito</b></td>
                                    <td>{{ $property->purpose }}</td>
                                </tr>
                                <tr>
                                    <td><b>Habitaciones:</b></td>
                                    <td>{{ $property->bedroom }}</td>
                                </tr>
                                <tr>
                                    <td><b>Baños:</b></td>
                                    <td>{{ $property->bathroom }}</td>
                                </tr>
                                <tr>
                                    <td><b>Áarea:</b></td>
                                    <td>{{ $property->size }} m²</td>
                                </tr>
                                <tr>
                                    <td><b>Número de pisos:</b></td>
                                    <td>{{ $property->floor }}</td>
                                </tr>
                                <tr>
                                    <td><b>Garaje:</b></td>
                                    <td>{{ $property->garage }}</td>
                                </tr>
                                <tr>
                                    <td><b>Balcón:</b></td>
                                    <td>{{ $property->balcony }}</td>
                                </tr>
                                <tr>
                                    <td><b>Dirección:</b></td>
                                    <td>{{ $property->address }}</td>
                                </tr>
                                <tr>
                                    <td><b>Año de construcción:</b></td>
                                    <td>{{ $property->built_year }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="right-item">
                    <h2>Comodidades</h2>
                    <div class="amenity">
                        <ul class="amenity-ul">
                            @php
                            $amenity_arr = explode(',', $property->amenities);
                            $amenity = \App\Models\Amenity::whereIn('id', $amenity_arr)->get();
                            @endphp
                            @foreach($amenity as $item)
                                <li><i class="fas fa-check-square"></i> {{ $item->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                @if($property->map != '')
                <div class="right-item">
                    <h2>Mapa de ubicación</h2>
                    <div class="location-map">
                        {!! $property->map !!}
                    </div>
                </div>
                @endif

                <div class="right-item">
                    <h2>Formulario de consulta</h2>
                    <div class="enquery-form">
                        <form action="{{ route('property_send_message',$property->id) }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <input name="name" type="text" class="form-control" placeholder="Nombre completo">
                            </div>
                            <div class="mb-3">
                                <input name="email" type="email" class="form-control" placeholder="Correo Electrónico">
                            </div>
                            <div class="mb-3">
                                <input name="phone" type="text" class="form-control" placeholder="Número de teléfono">
                            </div>
                            <div class="mb-3">
                                <textarea name="message" class="form-control h-150" rows="3" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
