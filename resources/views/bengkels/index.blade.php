@extends('layouts.app')

@section('title', 'Daftar Bengkel')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Daftar Bengkel</h1>
        <a href="{{ route('bengkels.create') }}" class="btn btn-primary">Tambah Bengkel</a>
    </div>

    @if ($bengkels->isEmpty())
        <p>Tidak ada data bengkel.</p>
    @else
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jam Buka</th>
                    <th>Jam Tutup</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bengkels as $bengkel)
                    <tr>
                        <td><a href="{{ route('bengkels.show', $bengkel) }}">{{ $bengkel->name }}</a></td>
                        <td>{{ $bengkel->address }}</td>
                        <td>{{ \Carbon\Carbon::parse($bengkel->opening_time)->format('H:i') }}</td>
                        <td>{{ \Carbon\Carbon::parse($bengkel->closing_time)->format('H:i') }}</td>
                        <td>
                            <a href="{{ route('bengkels.edit', $bengkel) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('bengkels.destroy', $bengkel) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Yakin ingin hapus bengkel ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
