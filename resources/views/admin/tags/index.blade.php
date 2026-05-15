@extends('layouts.admin')

@section('title', 'Tags')

@section('content')
<h1>Tags</h1>
<a href="{{ route('admin.tags.create') }}">Tambah tag</a>

@foreach ($tags as $tag)
<div>
    <span>{{ $tag->name }}</span>
    <a href="{{ route('admin.tags.edit', $tag) }}">Edit</a>
    <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
    </form>
</div>
@endforeach

{{ $tags->links() }}

@endsection