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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($peserta as $p)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $p->jurusans->nama_jurusan }}</td>
                                <td>{{ $p->gelombangs->nama_gelombang }}</td>
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
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input type="radio" name="" id="" value="1" {{ $p->status == 1 ? 'checked' : '' }} class="form-check-input">
                                        <label for="" class="form-check-label">Aktif</label>
                                        <input type="radio" name="" id="" value="0" class="form-check-input" {{ $p->status == 0 ? 'checked' : '' }}>
                                        <label for="" class="form-check-label">Tidak Aktif</label>
                                    </div>
                                </td>
                                <td class="justify-content-center"><a href="{{ route('peserta-pelatihan.edit', $p->id) }}"
                                        class="btn btn-success btn-sm">Edit</a>
                                    <form class="d-inline" action="{{ route('peserta-pelatihan.destroy', $p->id) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete
                                        </button>
                                    </form>
                                </td>
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
