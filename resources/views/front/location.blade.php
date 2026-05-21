@extends('front.layouts.master')

@section('title', 'Información de Ubicación: ' . $location->name)
@section('meta_description', 'Descubre información sobre '. $location->name. '. Casas, terrenos y oportunidades inmobiliarias en esta ubicación.')

@section('main_content')
<div class="page-top" style="background-image: url({{ asset('uploads/'.$global_setting->banner) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Ubicación: {{ $location->name }}</h2>
            </div>
        </div>
    </div>
</div>
<div class="property">
    <div class="container">
        <div class="row">
            @if($properties->count() == 0)
                <div class="text-danger mt_30 mb_30">
                    No se encontró ningun inmueble en esta ubicación.
                </div>
            @else
                @foreach($properties as $item)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <div class="photo">
                            <img class="main" src="{{ asset('uploads/'.$item->featured_photo) }}" alt="">
                            <div class="top">
                                @if($item->purpose == 'Venta')
                                <div class="status-sale">
                                    VENTA
                                </div>
                                @else
                                <div class="status-rent">
                                    ALQUILER
                                </div>
                                @endif
                                @if($item->is_featured == 'Yes')
                                <div class="featured">
                                    <i class="fas fa-bookmark"></i>
                                </div>
                                @endif
                            </div>
                            <div class="price d-none">S/ {{ rtrim(rtrim(number_format($item->price, 2, '.', ','), '0'), '.') }}</div>
                            <div class="wishlist d-none"><a href=""><i class="far fa-heart"></i></a></div>
                        </div>
                        <div class="text">
                            <h3><a href="{{ route('property_detail',$item->slug) }}">{{ $item->name }}</a></h3>
                            <h3 class="price">S/ {{ rtrim(rtrim(number_format($item->price, 2, '.', ','), '0'), '.') }} • USD {{ rtrim(rtrim(number_format($item->price_dolar, 2, '.', ','), '0'), '.') }}</h3>
                            <div class="detail">
                                <div class="stat d-none">
                                    <div class="i1">{{ $item->size }} m²</div>
                                    <div class="i2">{{ $item->bedroom }} Habitaciones</div>
                                    <div class="i3">{{ $item->bathroom }} Baños</div>
                                </div>
                                <div class="features main">
                                    @if($item->bedroom > 0)
                                        <div class="i1 fw-bold text-black" style="font-size: 16px;">
                                            <i class="fas fa-bed fs-5 me-2"></i> {{ $item->bedroom }}
                                        </div>
                                    @endif
                                    @if($item->bathroom > 0)
                                        <div class="i1 fw-bold text-black" style="font-size: 16px;">
                                            <i class="fas fa-bath fs-5 me-2"></i> {{ $item->bathroom }}
                                        </div>
                                    @endif
                                        <div class="i2 fw-bold text-black" style="font-size: 16px;">
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
                                <div class="address">
                                    <i class="fas fa-map-marker-alt"></i> {{ $item->address }}
                                </div>
                                <div class="agent-section d-none">
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
                <div class="col-md-12">
                    {{ $properties->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
