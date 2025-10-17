<h1>Daftar Customer</h1>

<a href="{{ route('customers.create') }}">Tambah Customer</a>

<ul>
    @foreach ($customers as $customer)
        <li>{{ $customer->name }} - {{ $customer->email }}</li>
    @endforeach
</ul>

