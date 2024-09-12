@extends('layouts.app')
@section('title', 'Peserta Pelatihan')
@section('content')

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <a href="{{ route('peserta-pelatihan.create') }}" class="btn btn-outline-primary btn-sm mb-3">Tambah Peserta</a>
            <div class="table table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th class="col-1">No</th>
                            <th>Id Jurusan</th>
                            <th>Id Gelombang</th>
                            <th>Nama Lengkap</th>
                            <th>NIK</th>
                            <th>Kartu Keluarga</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Nama Sekolah</th>
                            <th>Kejuruan</th>
                            <th>Nomor Hp</th>
                            <th>Email</th>
                            <th>Aktivitas Saat Ini</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($peserta as $p)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $p->id_jurusan }}</td>
                                <td>{{ $p->id_gelombang }}</td>
                                <td>{{ $p->nama_lengkap }}</td>
                                <td>{{ $p->nik }}</td>
                                <td>{{ $p->kartu_keluarga }}</td>
                                <td>{{ $p->jenis_kelamin }}</td>
                                <td>{{ $p->tempat_lahir }}</td>
                                <td>{{ $p->tanggal_lahir }}</td>
                                <td>{{ $p->pendidikan_terakhir }}</td>
                                <td>{{ $p->nama_sekolah }}</td>
                                <td>{{ $p->kejuruan }}</td>
                                <td>{{ $p->nomor_hp }}</td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->aktivitas_saat_ini }}</td>
                                <td>{{ $p->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">

        </div>
    </div>

@endsection
