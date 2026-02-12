@extends('front.layouts.master')

@section('main_content')
<div class="page-top" style="background-image: url({{ asset('uploads/'.$global_setting->banner) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Listado de propiedades</h2>
            </div>
        </div>
    </div>
</div>

<div class="property-result">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <form action="{{ route('property_search') }}" method="get" id="property-filter-form">
                    <div class="property-filter">

                        <div class="widget">
                            <h2>Filtra por lo que estas buscando</h2>
                            <input type="text" name="name" class="form-control" placeholder="Buscar por nombre ..." value="{{ $form_name }}">
                        </div>

                        <div class="widget">
                            <h2>Ubicación</h2>
                            <select name="location" class="form-control select2">
                                <option value="">Seleccionar ubicación</option>
                                @foreach($locations as $location)
                                    <option value="{{ $location->id }}" @if($form_location == $location->id) selected @endif>{{ $location->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="widget">
                            <h2>Tipo</h2>
                            <select name="type" class="form-control select2">
                                <option value="">Seleccionar tipo</option>
                                @foreach($types as $type)
                                    <option value="{{ $type->id }}" @if($form_type == $type->id) selected @endif>{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- <div class="widget d-none">
                            <h2>Propósito</h2>
                            <select name="purpose" class="form-control select2" onchange="this.form.submit()">
                                <option value="Seleccionar propósito"></option>
                                <option value="Rent" @if($form_purpose == 'Rent') selected @endif>En alquiler</option>
                                <option value="Sale" @if($form_purpose == 'Sale') selected @endif>En venta</option>
                            </select>
                        </div> --}}

                        {{-- <div class="widget">
                            <h2>Comodidades</h2>
                            <select name="amenity" class="form-control select2" onchange="this.form.submit()">
                                <option value="">Seleccionar comodidad</option>
                                @foreach($amenities as $amenity)
                                    <option value="{{ $amenity->id }}" @if($form_amenity == $amenity->id) selected @endif>{{ $amenity->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="widget">
                            <h2>Habitaciones</h2>
                            <select name="bedroom" class="form-control select2" onchange="this.form.submit()">
                                <option value="">Número de habitaciones</option>
                                @for($i=1;$i<=50;$i++)
                                    <option value="{{ $i }}" @if($form_bedroom == $i) selected @endif>{{ $i }}</option>
                                @endfor
                            </select>
                        </div>

                        <div class="widget">
                            <h2>Baños</h2>
                            <select name="bathroom" class="form-control select2" onchange="this.form.submit()">
                                <option value="">Número de baños</option>
                                @for($i=1;$i<=50;$i++)
                                    <option value="{{ $i }}" @if($form_bathroom == $i) selected @endif>{{ $i }}</option>
                                @endfor
                            </select>
                        </div> --}}

                        <div class="widget">
                            <h2>Rango de Precio</h2>
                            <div class="d-flex align-items-center gap-2">
                                <!-- Precio mínimo -->
                                <input type="text"
                                    name="min_price"
                                    class="form-control price-input"
                                    placeholder="Precio mínimo"
                                    value="{{ $form_min_price ?? '' }}">

                                <span class="mx-1">-</span>

                                <!-- Precio máximo -->
                                <input type="text"
                                    name="max_price"
                                    class="form-control price-input"
                                    placeholder="Precio máximo"
                                    value="{{ $form_max_price ?? '' }}">
                            </div>
                        </div>

                        <div class="filter-button">
                            <button type="submit" class="btn btn-primary">Filtros</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="property">
                    <div class="container">
                        <div class="row">

                            @if($properties->count() == 0)
                            <div class="text-danger">No se encontró ninguna propiedad</div>
                            @else
                            @foreach($properties as $item)
                            <div class="col-lg-6 col-md-6 col-sm-12">
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
                                                destacado
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
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                {{ $properties->appends($_GET)->links() }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function formatNumberWithCommas(input) {
        // Guardamos la posición del cursor
        let caret = input.selectionStart;

        // Guardamos el valor anterior
        let oldValue = input.value;

        // Eliminamos todo lo que no sea número
        let value = oldValue.replace(/[^\d]/g, '');
        if(value === '') {
            input.value = '';
            return;
        }

        // Formateamos con comas
        let formatted = Number(value).toLocaleString('en-US');
        input.value = formatted;

        // Restauramos la posición del cursor
        let diff = formatted.length - oldValue.length;
        input.selectionStart = input.selectionEnd = caret + diff;
    }

    // Seleccionamos los inputs de precio
    document.querySelectorAll('.price-input').forEach(function(input){
        // Formatea al cargar si hay valor
        if(input.value) input.value = Number(input.value).toLocaleString('en-US');

        // Formateo mientras escribes
        input.addEventListener('input', function(){
            formatNumberWithCommas(input);
        });
    });

    function formatNumberWithCommas(input) {    
        let caret = input.selectionStart;
        let oldValue = input.value;

        let value = oldValue.replace(/[^\d]/g,'');
        if(value === '') {
            input.value = '';
            return;
        }

        let formatted = Number(value).toLocaleString('en-US');
        input.value = formatted;

        let diff = formatted.length - oldValue.length;
        input.selectionStart = input.selectionEnd = caret + diff;
    }

    // Antes de enviar, quitamos las comas
    document.getElementById('property-filter-form').addEventListener('submit', function(e){
        this.querySelectorAll('.price-input').forEach(function(input){
            input.value = input.value.replace(/,/g,'');
        });
    });
</script>
@endpush
