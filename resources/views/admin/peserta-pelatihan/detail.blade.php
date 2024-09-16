@extends('layouts.app')

@section('title', 'Detail Peserta Page')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <div class="row">
                    <div class="col-sm-10">
                        <label for="" class="form-label">Jurusan</label>
                    </div>
                    <div class="col-sm-2">
                        <p>{{ $peserta->jurusans->nama_jurusan }}</p>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col-sm-10">
                        <label for="" class="form-label">Angkatan</label>
                    </div>
                    <div class="col-sm-2">
                        <p>{{ $peserta->gelombangs->nama_gelombang }}</p>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col-sm-10">
                        <label for="" class="form-label">Status</label>
                    </div>
                    <div class="col-sm-2">
                        @if ($peserta->status == 1)
                            <div class="badge badge-danger p-3">TIDAK LULUS</div>
                        @elseif ($peserta->status == 2)
                            <div class="badge badge-warning p-3">CADANGAN</div>
                        @else
                            <div class="badge badge-success p-3">LULUS</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col-sm-10">
                        <label for="" class="form-label">Nama Peserta</label>
                    </div>
                    <div class="col-sm-2">
                        <p>{{ $peserta->nama_lengkap }}</p>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col-sm-10">
                        <label for="" class="form-label">NIK</label>
                    </div>
                    <div class="col-sm-2">
                        <p>{{ $peserta->nik }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
