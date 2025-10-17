<h1>Tambah Customer</h1>

<form action="{{ route('customers.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nama Customer" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="address" placeholder="Alamat">
    <input type="text" name="phone" placeholder="No. Hp">
    <button type="submit">Simpan</button>
</form>
