@extends('layouts.app')
@section('title', 'Tambah Level')

@section('content')
<div class="col-md-4">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('level.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_level" class="py-3">Nama Level</label>
                    <input type="text" name="nama_level" id="nama_level" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-outline-primary btn-sm">Simpan</button>
                    <a href="{{ url('level.index') }}" class="btn btn-outline-danger btn-sm">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
