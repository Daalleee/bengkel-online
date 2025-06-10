@extends('layouts.app')

@section('title', 'Edit Bengkel')

@section('content')
    <h1>Edit Bengkel</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('bengkels.update', $bengkel) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama Bengkel</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $bengkel->name) }}"
                required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Alamat</label>
            <textarea class="form-control" id="address" name="address" rows="3" required>{{ old('address', $bengkel->address) }}</textarea>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="latitude" class="form-label">Latitude</label>
                <input type="number" step="any" class="form-control" id="latitude" name="latitude"
                    value="{{ old('latitude', $bengkel->latitude) }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="longitude" class="form-label">Longitude</label>
                <input type="number" step="any" class="form-control" id="longitude" name="longitude"
                    value="{{ old('longitude', $bengkel->longitude) }}" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $bengkel->description) }}</textarea>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="opening_time" class="form-label">Jam Buka</label>
                <input type="time" class="form-control" id="opening_time" name="opening_time"
                    value="{{ old('opening_time', \Carbon\Carbon::parse($bengkel->opening_time)->format('H:i')) }}"
                    required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="closing_time" class="form-label">Jam Tutup</label>
                <input type="time" class="form-control" id="closing_time" name="closing_time"
                    value="{{ old('closing_time', \Carbon\Carbon::parse($bengkel->closing_time)->format('H:i')) }}"
                    required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('bengkels.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
