<!-- resources/views/categories/index.blade.php -->

<h1>Daftar Kategori</h1>

<a href="{{ route('categories.crate') }}">Tambah Kategori</a>
<ul>
    @foreach ($categories as $category)
        <li>
            {{ $category->name }}
        </li>
    @endforeach
</ul>
