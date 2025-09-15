@extends('front.layouts.master')

@section('main_content')
<div class="page-top" style="background-image: url({{ asset('uploads/'.$global_setting->banner) }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Órdenes del agente</h2>
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
                                <th>Identificación de la factura</th>
                                <th>Nombre del paquete</th>
                                <th>Precio</th>
                                <th>Fecha de pago</th>
                                <th>Fecha de vencimiento</th>
                                <th>
                                    Método de pago e ID de transacción
                                </th>
                                <th>Estado</th>
                                <th>Imprimir factura</th>
                            </tr>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $order->invoice_no }}<br>
                                    @if($order->currently_active == 1)
                                    <span class="badge bg-success">Actualmente activo</span>
                                    @endif
                                </td>
                                <td>{{ $order->package->name }}</td>
                                <td>${{ $order->paid_amount }}</td>
                                <td>{{ $order->purchase_date }}</td>
                                <td>{{ $order->expire_date }}</td>
                                <td style="word-wrap: break-word; word-break: break-all;">
                                    <b>{{ $order->payment_method }}</b><br>
                                    {{ $order->transaction_id }}
                                </td>
                                <td>
                                    @if($order->status == 'Completed')
                                    <span class="badge bg-success">{{ $order->status }}</span>
                                    @else
                                    <span class="badge bg-danger">{{ $order->status }}</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('agent_invoice', $order->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-print"></i></a>
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