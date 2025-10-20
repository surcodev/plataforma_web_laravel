@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>Ubicaciones</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_location_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Añadir nuevo</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example1">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Foto</th>
                                            <th>Nombre</th>
                                            <th>Slug</th>
                                            <th class="w_100">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($locations as $location)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/'.$location->photo) }}" alt="" class="w_100">
                                            </td>
                                            <td>{{ $location->name }}</td>
                                            <td>{{ $location->slug }}</td>
                                            <td>
                                                <a href="{{ route('admin_location_edit',$location->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('admin_location_delete',$location->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></a>
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
        </div>
    </section>
</div>
@endsection