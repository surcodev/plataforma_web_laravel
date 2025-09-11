@extends('front.layouts.master')

@section('main_content')
<div class="page-top" style="background-image: url({{ asset('uploads/'.$global_setting->banner) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Agent Dashboard</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content user-panel">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="card">
                    @include('agent.sidebar.index')
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <h3>Hola, {{ Auth::guard('agent')->user()->name }}</h3>
                <p>Vea todas las estadísticas de un vistazo:</p>

                <div class="row box-items">
                    <div class="col-md-4">
                        <div class="box1">
                            <h4>{{ $total_active_properties }}</h4>
                            <p>Propiedades activas</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box2">
                            <h4>{{ $total_pending_properties }}</h4>
                            <p>Propiedades pendientes</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box3">
                            <h4>{{ $total_featured_properties }}</h4>
                            <p>Propiedades Destacadas</p>
                        </div>
                    </div>
                </div>

                <h3 class="mt-5">Propiedades recientes</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Item</th>
                                <th>Nombre</th>
                                <th>Ubicación</th>
                                <th>Tipo</th>
                                <th>Propósito</th>
                                <th>Precio</th>
                                <th>Is ¿Destacado?</th>
                                <th>Fecha de creación</th>
                            </tr>
                            @foreach($recent_properties as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->location->name }}</td>
                                <td>{{ $item->type->name }}</td>
                                <td>{{ $item->purpose }}</td>
                                <td>${{ $item->price }}</td>
                                <td>
                                    @if($item->is_featured == 'Yes')
                                        <span class="badge bg-success">Sí</span>
                                    @else
                                        <span class="badge bg-danger">No</span>
                                    @endif
                                </td>
                                <td>
                                    {{ $item->created_at->format('d M Y') }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection