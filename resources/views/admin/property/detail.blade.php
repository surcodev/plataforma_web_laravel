@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>Property Detail - {{ $property->name }}</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-sm">
                                    <tr>
                                        <th class="w_200">Foto destacado</th>
                                        <td>
                                            <img src="{{ asset('uploads/'.$property->featured_photo) }}" alt="" class="w_200">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Nombre</th>
                                        <td>{{ $property->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Slug</th>
                                        <td>{{ $property->slug }}</td>
                                    </tr>
                                    <tr>
                                        <th>Descripción</th>
                                        <td>{!! $property->description !!}</td>
                                    </tr>
                                    <tr>
                                        <th>Precio</th>
                                        <td>$ {{ $property->price }}</td>
                                    </tr>
                                    <tr>
                                        <th>Agente</th>
                                        <td>{{ $property->agent->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Ubicación</th>
                                        <td>{{ $property->location->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tipo</th>
                                        <td>{{ $property->type->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Comodidades</th>
                                        <td>
                                            @php
                                            $amenity_arr = explode(',', $property->amenities);
                                            $amenity = \App\Models\Amenity::whereIn('id', $amenity_arr)->get();
                                            foreach($amenity as $item) {
                                                echo '<span class="badge bg-primary me-1">'.$item->name.'</span>';
                                            }
                                            @endphp
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Objetivo</th>
                                        <td>{{ $property->purpose }}</td>
                                    </tr>
                                    <tr>
                                        <th>Habitaciones</th>
                                        <td>{{ $property->bedroom }}</td>
                                    </tr>
                                    <tr>
                                        <th>Baños</th>
                                        <td>{{ $property->bathroom }}</td>
                                    </tr>
                                    <tr>
                                        <th>Área</th>
                                        <td>{{ $property->size }} m²</td>
                                    </tr>
                                    <tr>
                                        <th>Número de pisos</th>
                                        <td>{{ $property->floor }}</td>
                                    </tr>
                                    <tr>
                                        <th>Garaje</th>
                                        <td>{{ $property->garage }}</td>
                                    </tr>
                                    <tr>
                                        <th>Balcón</th>
                                        <td>{{ $property->balcony }}</td>
                                    </tr>
                                    <tr>
                                        <th>Dirección</th>
                                        <td>{{ $property->address }}</td>
                                    </tr>
                                    <tr>
                                        <th>Años de construcción</th>
                                        <td>{{ $property->built_year }}</td>
                                    </tr>
                                    <tr>
                                        <th>Mapa</th>
                                        <td>{!! $property->map !!}</td>
                                    </tr>
                                    <tr>
                                        <th>¿Es destacado?</th>
                                        <td>{{ $property->is_featured }}</td>
                                    </tr>
                                    <tr>
                                        <th>Galería de fotos</th>
                                        <td>
                                            @foreach($property->photos as $item)
                                            <img src="{{ asset('uploads/'.$item->photo) }}" alt="" class="w_200">
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Galería de vídeos</th>
                                        <td>
                                            @foreach($property->videos as $item)
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $item->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            @endforeach
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection