@extends('layouts.admin')

@section('title', 'Dashboard - Admin Panel')

@section('content')
<div>
    <h1>Dashboard</h1>
    <p>Selamat Datang, {{ auth()->user()->name }} </p>
</div>

@endsection