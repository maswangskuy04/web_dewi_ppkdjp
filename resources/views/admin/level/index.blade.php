@extends('layouts.app')
@section('title', 'Level')
@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <a href="{{ route('level.create') }}" class="btn btn-outline-primary mb-2">Tambah</a>
            <div class="table table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th class="col-1">No</th>
                            <th>Nama level</th>
                            <th class="col-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($levels as $lv)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $lv->nama_level }}</td>
                                <td class="justify-content-center"><a href="{{ route('level.edit', $lv->id) }}"
                                        class="btn btn-success btn-sm">Edit</a>
                                    <form class="d-inline" action="{{ route('level.destroy', $lv->id) }}" method="post">
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
