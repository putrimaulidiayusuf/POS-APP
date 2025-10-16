<h1>Tambah Products</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nama Product" required>
    <input type="text" name="description" placeholder="Deskripsi">
    <input type="number" name="stock" placeholder="Stok" required>
    <input type="number" name="price" placeholder="Harga" required>
    <select name="category_id" required>
        @foreach {{$categories as $category}}
            <option value="{{ $category->id }}">{{ $category->name }}></option>
        @endforeach
    </select>
    <button type="submit">Simpan</button>
</form>
