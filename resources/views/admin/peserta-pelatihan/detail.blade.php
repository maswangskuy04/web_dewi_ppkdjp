@extends('layouts.app')

@section('title', 'Profil Detail Peserta')

@section('content')

    <div class="card col-4">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h5>{{ $peserta->nama_lengkap }}</h5>
                </div>
                <div class="col-6">
                    @if ($peserta->status == 1)
                        <div class="badge badge-danger float-end p-2">TIDAK LULUS</div>
                    @elseif($peserta->status == 2)
                        <div class="badge badge-warning float-end p-2">CADANGAN</div>
                    @elseif($peserta->status == 3)
                        <div class="badge badge-success float-end p-2">LULUS</div>
                    @else
                        <div class="badge badge-secondary float-end p-2">BELUM DIPROSES</div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <span class="text-muted">{{ $peserta->nomor_hp }}</span>
                </div>
                <div class="col-6">
                    <span class="text-muted">{{ $peserta->email }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
