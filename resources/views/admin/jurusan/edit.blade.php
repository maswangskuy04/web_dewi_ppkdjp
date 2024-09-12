@extends('layouts.app')
@section('title', 'Edit Jurusan')

@section('content')
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('jurusan.update', $edit->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama_level" class="py-3">Nama Jurusan</label>
                        <input type="text" name="nama_jurusan" id="nama_jurusan" class="form-control" value="{{ $edit->nama_jurusan }}">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-outline-primary btn-sm">Perbarui</button>
                        <a href="{{ url('jurusan.index') }}" class="btn btn-outline-danger btn-sm">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
