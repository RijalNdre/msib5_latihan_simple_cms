@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Berita</h1>
    </div>
    {{-- <div class="card" style="width: 18rem;">
        <div class="card-body">
        </div>
    </div> --}}
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    <a href="{{ route('berita.create') }}">
        <button class="btn btn-primary py-2 mt-2">Tambah data</button>
    </a>
    
    <div class="table-responsive mt-3">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Isi</th>
                    <th scope="col">Tanggal Publikasi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($beritas as $berita)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $berita->kategori->nama_kategori }}</td>
                        <td>{{ $berita->judul }}</td>
                        <td>{{ $berita->isi }}</td>
                        <td>{{ $berita->tanggal_publikasi }}</td>
                        <td>
                            <a href="/berita/{{$berita->id}}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                            <form action="/berita/{{$berita->id}}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="badge bg-danger border-0"
                                    onclick="return confirm('Yakin ingin menghapus data?')">
                                    <span data-feather="x-circle"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
