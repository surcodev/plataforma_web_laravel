@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>Pedidos</h1>
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
                                            <th>Identificación de la factura</th>
                                            <th>Información del agente</th>
                                            <th>Nombre del paquete</th>
                                            <th>Precio</th>
                                            <th>Fecha de pago</th>
                                            <th>Fecha de vencimiento</th>
                                            <th>Método de pago e ID de transacción</th>
                                            <th>Estado</th>
                                            <th>Imprimir factura</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $order)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                {{ $order->invoice_no }}<br>
                                                @if($order->currently_active == 1)
                                                <span class="badge bg-success">Actualmente activo</span>
                                                @endif
                                            </td>
                                            <td>
                                                {{-- <b>{{ $order->agent->name }}</b><br> --}}
                                                {{-- {{ $order->agent->email }} --}}
                                                <b>{{ optional($order->package)->name ?? 'Sin paquete' }}</b><br>
                                                {{ optional($order->agent)->email ?? '' }}
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
                                                <a href="{{ route('admin_order_invoice',$order->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-print"></i></a>
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