@extends('front.layouts.master')

@section('main_content')
<div class="page-top" style="background-image: url({{ asset('uploads/'.$global_setting->banner) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Planes de Subscripción</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content pricing">
    <div class="container">
        <div class="row pricing">
            @foreach($packages as $package)
            @php
            if($package->allowed_properties == 0) {
                $allowed_properties_icon = 'fas fa-times';
                $allowed_properties_value = 'No';
            } elseif($package->allowed_properties == -1) {
                $allowed_properties_icon = 'fas fa-check';
                $allowed_properties_value = 'Unlimited';
            } else {
                $allowed_properties_icon = 'fas fa-check';
                $allowed_properties_value = $package->allowed_properties;
            }

            if($package->allowed_featured_properties == 0) {
                $allowed_featured_properties_icon = 'fas fa-times';
                $allowed_featured_properties_value = 'No';
            } elseif($package->allowed_featured_properties == -1) {
                $allowed_featured_properties_icon = 'fas fa-check';
                $allowed_featured_properties_value = 'Unlimited';
            } else {
                $allowed_featured_properties_icon = 'fas fa-check';
                $allowed_featured_properties_value = $package->allowed_featured_properties;
            }

            if($package->allowed_photos == 0) {
                $allowed_photos_icon = 'fas fa-times';
                $allowed_photos_value = 'No';
            } elseif($package->allowed_photos == -1) {
                $allowed_photos_icon = 'fas fa-check';
                $allowed_photos_value = 'Unlimited';
            } else {
                $allowed_photos_icon = 'fas fa-check';
                $allowed_photos_value = $package->allowed_photos;
            }

            if($package->allowed_videos == 0) {
                $allowed_videos_icon = 'fas fa-times';
                $allowed_videos_value = 'No';
            } elseif($package->allowed_videos == -1) {
                $allowed_videos_icon = 'fas fa-check';
                $allowed_videos_value = 'Unlimited';
            } else {
                $allowed_videos_icon = 'fas fa-check';
                $allowed_videos_value = $package->allowed_videos;
            }
            @endphp
            <div class="col-lg-4 mb_30">
                <div class="card mb-5 mb-lg-0">
                    <div class="card-body">
                        <h2 class="card-title">{{ $package->name }}</h2>
                        <h3 class="card-price">${{ $package->price }}</h3>
                        <h4 class="card-day">({{ $package->allowed_days }} Días)</h4>
                        <hr />
                        <ul class="fa-ul">
                            <li>
                                <span class="fa-li"><i class="{{ $allowed_properties_icon }}"></i></span>{{ $allowed_properties_value }} Propiedades Permitidas
                            </li>
                            <li>
                                <span class="fa-li"><i class="{{ $allowed_featured_properties_icon }}"></i></span>{{ $allowed_featured_properties_value }} Propiedades Destacadas
                            </li>
                            <li>
                                <span class="fa-li"><i class="{{ $allowed_photos_icon }}"></i></span>{{ $allowed_photos_value }} Fotos por propiedad
                            </li>
                            <li>
                                <span class="fa-li"><i class="{{ $allowed_videos_icon }}"></i></span>{{ $allowed_videos_value }} Vídeos por propiedad
                            </li>
                        </ul>
                        <div class="buy">
                            <a href="{{ route('agent_payment') }}" class="btn btn-primary">
                                Elegir plan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection