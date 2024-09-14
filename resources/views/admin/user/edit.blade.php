@extends('layouts.app')
@section('title', 'Edit User')

@section('content')
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('user.update', $edit->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="py-3" class="form-label">Level</label>
                        <select name="id_level" id="" class="form-select" required>
                            <option value=""></option>
                            @foreach ($level as $l)
                                <option value="{{ $l->id }}"{{ $edit->id_level == $l->id ? 'selected' : '' }}>{{ $l->nama_level }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama_lengkap" class="py-3">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                            value="{{ $edit->nama_lengkap }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="py-3">Email</label>
                        <input type="email" name="email" id="email" class="form-control"
                            value="{{ $edit->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="py-3">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-outline-primary btn-sm">Perbarui</button>
                        <a href="{{ url('user.index') }}" class="btn btn-outline-danger btn-sm">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
