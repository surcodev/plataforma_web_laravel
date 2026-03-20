
@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')

<style>
.tutorial-img {
    border-radius: 8px;
    border: 1px solid #ddd;
    max-height: 500px;
    margin-left:20px;
}
</style>

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>¿Cómo obtener la URL de Google Maps?</h1>
        </div>
        <div class="section-body">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                @include('base_map_tutorial')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection