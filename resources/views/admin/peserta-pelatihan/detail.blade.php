@extends('layouts.app')

@section('title', 'Detail Peserta Page')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg border-light">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <div class="identity-card">
                            <div class="card-header bg-primary text-white">
                                <h4 class="card-title mb-0 text-light">{{ $peserta->nama_lengkap }}</h4>
                            </div>
                            <div class="card-body p-4">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <span class="text-muted">{{ $peserta->jurusans->nama_jurusan }}</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span class="text-muted">{{ $peserta->gelombangs->nama_gelombang }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>Status</th>
                                    <td class="text-end">
                                        @if ($peserta->status == 1)
                                            <span class="badge bg-danger p-3">TIDAK LULUS</span>
                                        @elseif($peserta->status == 2)
                                            <span class="badge bg-warning text-dark p-3">CADANGAN</span>
                                        @elseif($peserta->status == 3)
                                            <span class="badge bg-success p-3">LULUS</span>
                                        @else
                                            <div class="badge bg-secondary p-3">BELUM DIPROSES</div>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th class="w-25">NIK</th>
                                    <td class="text-end">{{ $peserta->nik }}</td>
                                </tr>
                                <tr>
                                    <th>Kartu Keluarga</th>
                                    <td class="text-end">{{ $peserta->kartu_keluarga }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td class="text-end">{{ $peserta->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <th>TTL</th>
                                    <td class="text-end">{{ $peserta->tempat_lahir }},
                                        {{ date('d-m-Y', strtotime($peserta->tanggal_lahir)) }}</td>
                                </tr>
                                <tr>
                                    <th>Pendidikan Terakhir</th>
                                    <td class="text-end">{{ $peserta->nama_sekolah }} {{ $peserta->pendidikan_terakhir }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Nomor HP</th>
                                    <td class="text-end">{{ $peserta->nomor_hp }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td class="text-end">{{ $peserta->email }}</td>
                                </tr>
                                <tr>
                                    <th>Aktivitas Saat Ini</th>
                                    <td class="text-end">{{ $peserta->aktivitas_saat_ini }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <a href="{{ route('peserta-pelatihan.index') }}" class="btn btn-primary">Kembali ke Daftar Peserta</a>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // Anda bisa menambahkan JavaScript tambahan di sini jika diperlukan
    </script>
@endsection

<style>
    .identity-card {
        border: 2px solid #007bff;
        border-radius: 15px;
        padding: 15px;
        margin-bottom: 20px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .identity-card .card-header {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    .identity-card .card-body {
        padding: 20px;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .badge {
        font-size: 1rem;
    }

    .table th,
    .table td {
        border: none;
        padding: 10px;
    }

    .table th {
        font-weight: bold;
        text-align: left;
    }
</style>
