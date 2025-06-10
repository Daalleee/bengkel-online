@extends('layouts.app')

@section('title', 'Detail Bengkel')

@section('content')
    <h1>Detail Bengkel</h1>

    <div class="card">
        <div class="card-body">
            <h3 class="card-title">{{ $bengkel->name }}</h3>
            <p><strong>Alamat:</strong> {{ $bengkel->address }}</p>
            <p><strong>Deskripsi:</strong> {{ $bengkel->description ?? '-' }}</p>
            <p><strong>Jam Buka:</strong> {{ \Carbon\Carbon::parse($bengkel->opening_time)->format('H:i') }}</p>
            <p><strong>Jam Tutup:</strong> {{ \Carbon\Carbon::parse($bengkel->closing_time)->format('H:i') }}</p>
            <p><strong>Lokasi:</strong> Latitude {{ $bengkel->latitude }}, Longitude {{ $bengkel->longitude }}</p>
        </div>
    </div>

    <a href="{{ route('bengkels.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar</a>
@endsection
