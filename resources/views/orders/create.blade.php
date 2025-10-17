<h1>Buat Pesanan Baru</h1>

<form action="{{ route($orders.store) }}" method="POST">
    @csrf
    <select name="customer_id" id="" required>
        <option value="">Pilih Customer</option>
        @foreach ($customers as $customer)
            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
        @endforeach
    </select>

    <input type="number" name="total" placeholder="Total" required>
    <button type="submit">Simpan</button>
</form>
