@extends('layouts.admin')

@section('title', 'Tambah Tag')

@section('content')
<h1>Tambah Tag</h1>

@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form action="{{ route('admin.tags.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nama Tag</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
    </div>
    <button type="submit">Simpan</button>
</form>
@endsection