@extends('layouts.app')
@section('title', 'Tambah User')

@section('content')
<div class="col-md-4">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="py-3" class="form-label">Level</label>
                    <select name="id_level" id="" class="form-select" required>
                        <option value=""></option>
                        @foreach ($level as $l)
                        <option value="{{ $l->id }}">{{ $l->nama_level }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-outline-primary btn-sm">Simpan</button>
                    <a href="{{ url('user.index') }}" class="btn btn-outline-danger btn-sm">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
