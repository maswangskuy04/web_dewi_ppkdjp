@extends('layouts.app')

@section('title', 'User Jurusan Page')

@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{ route('user-jurusan.create') }}" class="btn btn-outline-primary mb-2 btn-sm mb-3">Add User Jurusan</a>
            <div class="table table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th class="col-1">No</th>
                            <th>Level</th>
                            <th>Nama PIC</th>
                            <th>Jurusan</th>
                            <th class="col-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($userjurusan as $uj)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $uj->level->nama_level }}</td>
                                <td>{{ $uj->user->nama_lengkap }}</td>
                                <td>{{ $uj->jurusan->nama_jurusan }}</td>
                                <td class="justify-content-center">
                                    <form class="d-inline" action="{{ route('user-jurusan.destroy', $uj->id) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
