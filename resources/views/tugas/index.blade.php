@extends('layouts.app')

@section('title', 'Daftar Tugas')

@section('content')
    <h2>Daftar Tugas</h2>
    <ul class="list-group">
        @foreach ($tugas as $item)
            <li class="list-group-item">
                <a href="{{ url('/tugas/' . $item['id']) }}">
                    {{ $item['judul'] }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
