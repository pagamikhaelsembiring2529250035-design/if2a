@extends('main')

@section('title', 'Periode')

@section('content')
    <a href="{{ route('Periode.create')}}" class="btn btn-primary">Tambah</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tahun Akademik</th>
                <th>Semester</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($result as $item)
                <tr>
                    <td>{{ $item ->Tahun_Akademik }}</td>
                    <td>{{ $item ->Semester }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <h1>Periode</h1> --}}
@endsection