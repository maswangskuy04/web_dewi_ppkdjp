@extends('layouts.app')
@section('title', 'Gelombang')
@section('content')

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <a href="{{ route('gelombang.create') }}" class="btn btn-outline-primary mb-2 btn-sm">Tambah Gelombang</a>
            <a href="" class="btn btn-outline-info mb-2 btn-sm">Recovery</a>
            <div class="table table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th class="col-1">No</th>
                            <th>Nama Gelombang</th>
                            <th>Aktif</th>
                            <th class="col-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($gelombang as $gelo)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $gelo->nama_gelombang }}</td>
                                <td>{{ $gelo->aktif }}</td>
                                <td class="justify-content-center"><a href="{{ route('gelombang.edit', $gelo->id) }}"
                                        class="btn btn-success btn-sm">Edit</a>
                                    <form class="d-inline" action="{{ route('gelombang.destroy', $gelo->id) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
