@extends('layouts.admin')

@section('title', 'Edit Kategori')

@section('content')
<h1>Edit Kategori</h1>

@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>

@endif

<form action="{{ route('admin.categories.update', $category) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Nama Kategori</label>
        <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}">
    </div>
    <button type="submit">Update</button>
</form>

@endsection