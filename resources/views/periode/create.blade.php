@extends('main')
@section('title', 'Tambah Data Periode')
@section('content')
    <form action="{{ route('Periode.store') }}" method="POST">
        <div class="from-grup">
            <label for="">Tahun Akademik</label>
            
        <input type="text" name="Tahun_Akademik"
        class="form-control" value="{{ old('Tahun_Akademik') }}">
        </div>
        @error('Tahun_Akademik')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <div class="from-grup">
            <label for="">Semester</label>
            
        <input type="text" name="Semester"
        class="form-control" value="{{ old('Semester') }}">
        </div>
        @error('Semester')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

        <button type="submit"  class="btn btn-primary mt-3">Simpan</button>

    </form>
@endsection