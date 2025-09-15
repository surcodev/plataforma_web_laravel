@extends('front.layouts.master')

@section('main_content')
<div class="page-top" style="background-image: url({{ asset('uploads/'.$global_setting->banner) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Propiedades del agente</h2>
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
                <div class="table-responsive">
                    <table class="table table-bordered" id="datatable">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Foto destacada</th>
                                <th>Nombre</th>
                                <th>Agente</th>
                                <th>Ubicación</th>
                                <th>Tipo</th>
                                <th>Objetivo</th>
                                <th>¿Es destacado?</th>
                                <th>Estado</th>
                                <th class="w-150">Opciones</th>
                                <th class="w-100">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($properties as $property)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ asset('uploads/' . $property->featured_photo) }}" alt="" class="w-100">
                                </td>
                                <td>{{ $property->name }}</td>
                                <td>{{ $property->agent->name }}</td>
                                <td>{{ $property->location->name }}</td>
                                <td>{{ $property->type->name }}</td>
                                <td>{{ $property->purpose }}</td>
                                <td>
                                    @if($property->is_featured == 'Yes')
                                        <span class="badge bg-success">Sí</span>
                                    @else
                                        <span class="badge bg-danger">No</span>
                                    @endif
                                </td>
                                <td>
                                    @if($property->status == 'Active')
                                        <span class="badge bg-success">Activo</span>
                                    @else
                                        <span class="badge bg-danger">Pendiente</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('agent_property_photo_gallery',$property->id) }}" class="btn btn-primary btn-sm btn-sm-custom w-100-p mb_5">Galería de fotos</a>
                                    <a href="{{ route('agent_property_video_gallery',$property->id) }}" class="btn btn-primary btn-sm btn-sm-custom w-100-p mb_5">Galería de vídeos</a>
                                </td>
                                <td>
                                    <a href="{{ route('agent_property_edit', $property->id) }}" class="btn btn-warning btn-sm text-white"><i class="fas fa-edit"></i></a>
                                    <a href="{{ route('agent_property_delete', $property->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i></a>
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