@extends('layouts.app')
@section('title', 'Edit Gelombang')
@section('content')

<div class="col-md-4">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('gelombang.update', $edit->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama_level" class="py-3">Nama Gelombang</label>
                    <input type="text" name="nama_gelombang" id="nama_gelombang" class="form-control" value="{{ $edit->nama_gelombang }}">
                </div>
                <div class="mb-3">
                    <label for="nama_level" class="py-3">Aktif</label>
                    <input type="text" name="aktif" id="aktif" class="form-control" value="{{ $edit->aktif }}">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-outline-primary btn-sm">Perbarui</button>
                    <a href="{{ url('gelombang.index') }}" class="btn btn-outline-danger btn-sm">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
