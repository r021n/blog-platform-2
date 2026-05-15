@extends('layouts.admin')

@section('title', 'Article')

@section('content')
<h1>Articles</h1>
<a href="{{ route('admin.articles.create') }}">Tambah Artikel</a>

@foreach ($articles as $article)
<div>
    @if ($article->thumbnail)
    <img src="{{ Storage::url($article->thumbnail) }}" alt="thumbnail" width="80">
    @endif
    <span>{{ $article->title }}</span>
    <span>{{ $article->category?->name ?? 'Tanpa Kategori' }}</span>
    <span>{{ $article->is_published ? 'Published' : 'Draft' }}</span>
    <a href="{{ route('admin.articles.show', $article) }}">Lihat</a>
    <a href="{{ route('admin.articles.edit', $article) }}">Edit</a>
    <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
    </form>
</div>

@endforeach

{{ $articles->links() }}

@endsection