@extends('layouts.app')

@section('title', 'Tambah Bengkel')

@section('content')
    <h1>Tambah Bengkel</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('bengkels.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Bengkel</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Alamat</label>
            <textarea class="form-control" id="address" name="address" rows="3" required>{{ old('address') }}</textarea>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="latitude" class="form-label">Latitude</label>
                <input type="number" step="any" class="form-control" id="latitude" name="latitude"
                    value="{{ old('latitude') }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="longitude" class="form-label">Longitude</label>
                <input type="number" step="any" class="form-control" id="longitude" name="longitude"
                    value="{{ old('longitude') }}" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="opening_time" class="form-label">Jam Buka</label>
                <input type="time" class="form-control" id="opening_time" name="opening_time"
                    value="{{ old('opening_time') ?? '08:00' }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="closing_time" class="form-label">Jam Tutup</label>
                <input type="time" class="form-control" id="closing_time" name="closing_time"
                    value="{{ old('closing_time') ?? '17:00' }}" required>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('bengkels.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
