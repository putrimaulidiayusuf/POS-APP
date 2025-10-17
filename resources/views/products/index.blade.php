<h1>Daftar Produk</h1>

<a href="{{ route('products.create') }}">Tambah Produk</a>

<ul>
    @foreach ($products as $product)
    <li>{{ product->name }} - {{ product->stock }} pcs - Rp{{ product->price }}</li>
    @endforeach
</ul>
