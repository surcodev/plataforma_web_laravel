
@extends('front.layouts.master')

@section('main_content')

<style>
.tutorial-img {
    border-radius: 8px;
    border: 1px solid #ddd;
    max-height: 500px;
    margin-left:20px;
}
</style>

<div class="page-top" style="background-image: url({{ asset('uploads/'.$global_setting->banner) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>¿Cómo obtener la URL de Google Maps?</h2>
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
                @include('base_map_tutorial')
            </div>
        </div>
    </div>
</div>
@endsection