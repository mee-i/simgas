@extends('layouts.app')

@section('title', 'Detail Tugas')

@section('content')
    <h2>{{ $tugas['judul'] }}</h2>
    <p>{{ $tugas['deskripsi'] }}</p>
    <a href="/tugas" class="btn btn-secondary">Kembali</a>
@endsection
