@extends('layouts.admin')

@section('title', 'Categories')

@section('content')
<h1>Categories</h1>
<a href="{{ route('admin.categories.create') }}">Tambah Kategori</a>

@foreach ($categories as $category)
<div>
    <span>{{ $category->name }}</span>
    <a href="{{ route('admin.categories.edit', $category) }}">Edit</a>
    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
    </form>
</div>

@endforeach

{{ $categories->links() }}
@endsection