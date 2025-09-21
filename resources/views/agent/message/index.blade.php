@extends('front.layouts.master')

@section('main_content')
<div class="page-top" style="background-image: url({{ asset('uploads/'.$global_setting->banner) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Mensajes del agente</h2>
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
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Item</th>
                                <th>Asunto</th>
                                <th>Cliente</th>
                                <th>Fecha y Hora</th>
                                <th class="w-100">Acción</th>
                            </tr>
                            @foreach ($messages as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->subject }}</td>
                                <td>
                                    {{ $item->user->name }},<br>
                                    {{ $item->user->email }}
                                </td>
                                <td>
                                    {{ $item->created_at->format('d M Y') }}<br>
                                    {{ $item->created_at->format('h:i A') }}
                                </td>
                                <td>
                                    <a href="{{ route('agent_message_reply',$item->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
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