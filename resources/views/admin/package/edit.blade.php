@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>Editar paquete</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_package_index') }}" class="btn btn-primary"><i class="fas fa-eye"></i> Ver todo</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_package_update',$package->id) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Nombre *</label>
                                            <input type="text" class="form-control" name="name" value="{{ $package->name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Precio *</label>
                                            <input type="number" class="form-control" name="price" value="{{ $package->price }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Días permitidos *</label>
                                            <input type="text" class="form-control" name="allowed_days" value="{{ $package->allowed_days }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Propiedades permitidas *</label>
                                            <input type="text" class="form-control" name="allowed_properties" value="{{ $package->allowed_properties }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label>Propiedades destacadas permitidas *</label>
                                            <input type="text" class="form-control" name="allowed_featured_properties" value="{{ $package->allowed_featured_properties }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label>Fotos permitidas *</label>
                                            <input type="text" class="form-control" name="allowed_photos" value="{{ $package->allowed_photos }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label>Vídeos permitidos *</label>
                                            <input type="text" class="form-control" name="allowed_videos" value="{{ $package->allowed_videos }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection