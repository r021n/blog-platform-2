@use(Illuminate\Support\Facades\Storage)
@extends('layouts.admin')

@section('title', $article->title)

@section('content')
<h1>{{ $article->title }}</h1>
<p>Slug: {{ $article->slug }}</p>
<p>Kategori: {{ $article->category?->name ?? 'Tanpa Kategori'}}</p>
<p>Penulis: {{ $article->user->name }}</p>
<p>Status: {{ $article->is_published ? 'Published' : 'Draft'}}</p>

@if ($article->thumbnail)
<img src="{{ Storage::url($article->thumbnail) }}" alt="thumbnail" width="300">
@endif

<div>
    Tags:
    @foreach ($article->tags as $tag)
    <span>{{ $tag->name }}</span>
    @endforeach
</div>

<hr>
<div>{!! $article->body !!}</div>

<a href="{{ route('admin.articles.edit', $article) }}">Edit</a>
<a href="{{ route('admin.articles.index') }}">Kembali</a>
@endsection