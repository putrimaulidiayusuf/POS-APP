<h1>Daftar Pesanan</h1>

<a href="{{ route('orders.create') }}">
    <ul>
        @foreach {{ $orders as $order }}
            <li>Invoice : {{ $order->invoice }} - Total : {{ $order->total }}</li>
        @endforeach
    </ul>
</a>
