<!-- resources/views/categories/create.blade.php -->

<h1>Tambah Kategori</h1>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nama Kategori" required>
    <input type="text" name="description" placeholder="Deskripsi">
    <button type="submit">Simpan</button>
</form>
