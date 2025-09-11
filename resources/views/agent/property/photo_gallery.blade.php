@extends('front.layouts.master')

@section('main_content')
<div class="page-top" style="background-image: url({{ asset('uploads/'.$global_setting->banner) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Galería de fotos de propiedades del Agente</h2>
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
                <h4>Añadir foto</h4>
                <form action="{{ route('agent_property_photo_gallery_store',$property->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <input type="file" name="photo">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-sm" value="Submit">
                        </div>
                    </div>
                </form>

                <h4 class="mt-4">Foto existente</h4>
                <div class="photo-all">
                    <div class="row">
                        @if($photos->isEmpty())
                            <div class="col-md-12">
                                <div class="alert alert-danger">
                                    No se encontraron fotos.
                                </div>
                            </div>
                        @else
                            @foreach($photos as $item)
                            <div class="col-md-6 col-lg-3">
                                <div class="item item-delete">
                                    <a href="{{ asset('uploads/'.$item->photo) }}" class="magnific">
                                        <img src="{{ asset('uploads/'.$item->photo) }}" alt="" />
                                        <div class="icon">
                                            <i class="fas fa-plus"></i>
                                        </div>
                                        <div class="bg"></div>
                                    </a>
                                </div>
                                <a href="{{ route('agent_property_photo_gallery_delete',$item->id) }}" class="badge bg-danger mb_20" onClick="return confirm('Are you sure?');">Delete</a>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection