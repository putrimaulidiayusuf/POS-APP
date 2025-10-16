<h1>Tambah Customer</h1>

<a href="{{ route('customers.create') }}">
    <ul>
        @foreach ($customers as $customer)
            <li>{{ $customer->name }} - {{ $customer->email }}</li>
        @endforeach
    </ul>
</a>
