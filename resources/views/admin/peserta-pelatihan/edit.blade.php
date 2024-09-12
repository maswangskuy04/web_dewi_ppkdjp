@extends('layouts.app')
@section('title', 'Edit Peserta')
@section('content')

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('pesertapelatihan.update', $edit->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama_level" class="py-3">Peserta Pelatihan</label>
                        <select name="" id="" class="form-select">
                            <option value="">Pilih Status</option>
                            <option value="0">Tidak Lulus</option>
                            <option value="1">Lulus</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-outline-primary btn-sm">Perbarui</button>
                        <a href="{{ url('pesertapelatihan.index') }}" class="btn btn-outline-danger btn-sm">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
