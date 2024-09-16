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
                <table class="table table-bordered table-striped cust">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jurusan</th>
                            <th>Gelombang</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Detail Peserta</th>
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
                                <td>{{ $p->email }}</td>
                                <td>
                                    <select name="status" class="form-select"  id="status-{{ $p->id }}" data-id="{{ $p->id }}">
                                        <option value="">--  Pilih Status --</option>
                                        <option value="1" {{ $p->status == 1 ? 'selected' : '' }}>TIDAK LULUS</option>
                                        <option value="2" {{ $p->status == 2 ? 'selected' : '' }}>CADANGAN</option>
                                        <option value="3" {{ $p->status == 3 ? 'selected' : '' }}>LULUS</option>
                                    </select>
                                </td>
                                <td>
                                    <span class="d-flex justify-content-center">
                                        <a href="{{ route('peserta-pelatihan.show', $p->id) }}" class="btn btn-warning btn-sm">Detail</a>
                                    </span>
                                </td>
                                <td>
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
@section('script')
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const itemStatus = document.querySelectorAll('.form-select');
        itemStatus.forEach(status => {
            status.addEventListener('change', (event) => {
                const itemId = event.target.getAttribute('data-id');
                const statusValue = event.target.value;
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                fetch(`peserta-pelatihan/update-status/${itemId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type':  'application/json',
                        'X-CSRF-TOKEN':  csrfToken,
                    },
                    body:  JSON.stringify({ status: statusValue })
                })
                .then(res => res.json())
                .then(data => {
                    console.log(data);
                })
            })
        })
    })
</script>
@endsection
