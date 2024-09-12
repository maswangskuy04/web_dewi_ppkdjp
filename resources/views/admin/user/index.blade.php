@extends('layouts.app')

@section('title', 'users')

@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <a href="{{ route('user.create') }}" class="btn btn-outline-primary btn-sm mb-2">Tambah User</a>
            <div class="table table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th class="col-1">No</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th class="col-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($users as $u)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $u->nama_lengkap }}</td>
                                <td>{{ $u->email }}</td>
                                <td>{{ $u->level->nama_level }}</td>
                                <td class="justify-content-center"><a href="{{ route('user.edit', $u->id) }}"
                                        class="btn btn-success btn-sm">Edit</a>
                                    <form class="d-inline" action="{{ route('user.destroy', $u->id) }}" method="post">
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
