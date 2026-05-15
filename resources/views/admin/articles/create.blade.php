@extends('layouts.admin')

@section('title', 'Tambah Artikel')

@section('content')
<h1>Tambah Artikel</h1>

@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div>
        <label for="title">Judul</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
    </div>

    <div>
        <label for="category_id">Kategori</label>
        <select name="category_id" id="category_id">
            <option value="">-- Pilih Kategori --</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
            @endforeach
        </select>
    </div>

    <div>
        <label>Tags</label>
        @foreach ($tags as $tag)
        <label>
            <input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                {{ in_array($tag->id, old('tags', [])) ? 'checked' : '' }}>
            {{ $tag->name }}
        </label>
        @endforeach
    </div>

    <div>
        <label for="thumbnail">Thumbnail</label>
        <input type="file" id="thumbnail" name="thumbnail" accept="image/*">
    </div>

    <div>
        <label>
            <input type="checkbox" name="is_published" value="1" {{ old('is_published') ? 'checked' : '' }}>
            Publikasikan sekarang
        </label>
    </div>

    <button type="submit">Simpan</button>
</form>

@endsection