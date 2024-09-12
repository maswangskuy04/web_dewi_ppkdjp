@extends('layouts.app')
@section('title', 'Tambah Jurusan')

@section('content')
<div class="col-md-4">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('jurusan.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="py-3">Nama Jurusan</label>
                    <input type="text" name="nama_jurusan" id="nama_jurusan" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-outline-primary btn-sm">Simpan</button>
                    <a href="{{ url('jurusan.index') }}" class="btn btn-outline-danger btn-sm">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
