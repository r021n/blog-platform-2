@extends('layouts.admin')

@section('title', 'Tambah Kategori')

@section('content')
<h1>Tambah Kategori</h1>

@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form action="{{ route('admin.categories.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nama Kategori</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
    </div>
    <button type="submit">Simpan</button>
</form>

@endsection