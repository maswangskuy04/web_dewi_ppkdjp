@extends('layouts.app')

@section('title', 'Tambah User Jurusan')

@section('content')
<div class="col-md-4">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('user-jurusan.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Nama PIC</label>
                    <select name="id_user" class="form-select">
                        <option value="">-- Pilih Nama PIC</option>
                        @foreach ($user->where('id_level', 3) as $u)
                            <option value="{{ $u->id }}">{{ $u->nama_lengkap }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nama_level" class="py-3">Level</label>
                    <select name="id_level" class="form-select">
                        <option value="">-- Pilih Level --</option>
                        @foreach ($level->where('id', 3) as $lv)
                            <option value="{{ $lv->id }}">{{ $lv->nama_level }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nama_level" class="py-3">Jurusan</label>
                    <select name="id_jurusan" class="form-select">
                        <option value="">-- Pilih Jurusan --</option>
                        @foreach ($jurusan as $jr)
                            <option value="{{ $jr->id }}">{{ $jr->nama_jurusan }}</option>
                        @endforeach
                    </select>
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