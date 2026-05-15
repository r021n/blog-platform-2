@extends('layouts.admin')

@section('title', 'Edit Tag')

@section('content')
<h1>Edit Tag</h1>

@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>

@endif

<form action="{{ route('admin.tags.update', $tag) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Nama Tag</label>
        <input type="text" name="name" id="name" value="{{ old('name', $tag->name) }}">
    </div>
    <button type="submit">Update</button>
</form>

@endsection