@extends('layouts.app')

@section('content')
    <div class="container container__listarPedidos">
        <div class="row">
            <div class="col-md-12">
                <h1 class="titulo">Pedidos</h1>
                <div class="button__criar__pedidos">
                    <a href="{{ route('orders.create') }}" class="btn btn-primary">
                        <button>
                            Criar Pedido
                        </button>
                    </a>
                </div>
                <table class="table__pedidos mt-3 ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>OS</th>
                            <th>Data da compra</th>
                            <th>Delivery Date</th>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>Contato</th>
                            <th>Tipo de lente</th>
                            <th>Frame</th>
                            <th>Método de pagamento</th>
                            <th>Valor</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->OS }}</td>
                                <td>{{ $order->purchase_date }}</td>
                                <td>{{ $order->delivery_date }}</td>
                                <td>{{ $order->customer_name }}</td>
                                <td>{{ $order->address }}</td>
                                <td>{{ $order->contact }}</td>
                                <td>{{ $order->lens_type }}</td>
                                <td>{{ $order->frame }}</td>
                                <td>{{ $order->payment_method }}</td>
                                <td>{{ $order->value }}</td>
                                <td>
                                    <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info">View</a>
                                    <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
