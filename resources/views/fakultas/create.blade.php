@extends('main')
@section('title', 'Tambah Data Fakultas')
@section('content')
    <form action="{{ route('Fakultas.store') }}" method="POST">
        <div class="from-grup">
            <label for="">Nama Fakultas</label>
            
        <input type="text" name="nama_fakultas"
        class="form-control" value="{{ old('nama_fakultas') }}">
        </div>
        @error('nama_fakultas')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <div class="from-grup">
            <label for="">Singkatan</label>
            
        <input type="text" name="singkatan"
        class="form-control" value="{{ old('singkatan') }}">
        </div>
        @error('singkatan')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

        <button type="submit"  class="btn btn-primary mt-3">Simpan</button>

    </form>
@endsection