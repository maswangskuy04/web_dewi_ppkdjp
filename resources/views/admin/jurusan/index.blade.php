@extends('layouts.app')

@section('title', 'Jurusan')

@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <a href="{{ route('jurusan.create') }}" class="btn btn-outline-primary mb-2 btn-sm">Tambah Jurusan</a>
            <div class="table table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th class="col-1">No</th>
                            <th>Nama Jurusan</th>
                            <th class="col-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = ($jurusan->currentPage() - 1) * $jurusan->perPage() + 1;
                        @endphp
                        @foreach ($jurusan as $j)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $j->nama_jurusan }}</td>
                                <td class="justify-content-center"><a href="{{ route('jurusan.edit', $j->id) }}"
                                        class="btn btn-success btn-sm">Edit</a>
                                    <form class="d-inline" action="{{ route('level.destroy', $j->id) }}" method="post">
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
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    @if ($jurusan->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">&laquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $jurusan->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                    @endif

                    @foreach ($jurusan->links()->elements[0] as $page => $url)
                        @if ($page == $jurusan->currentPage())
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">{{ $page }}</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach

                    @if ($jurusan->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $jurusan->nextPageUrl() }}" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <span class="page-link">&raquo;</span>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>

@endsection
