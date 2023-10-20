@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Berita</h1>
    </div>
    <div class="mb-5">
        <form action="{{ route('berita.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control @error('judul') is-invalid @enderror"
                    required autofocus value="{{ old('judul') }}">
                @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select" name="kategori_id">
                    @foreach ($kategoris as $kategori)
                        @if (old('kategori_id') == $kategori->id)
                            <option value="{{ $kategori->id }}"selected>{{ $kategori->nama_kategori }}</option>
                        @else
                            <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Isi</label>
                <input style="height: 100px" type="text" name="isi" id="isi"
                    class="form-control @error('isi') is-invalid @enderror" required value="{{ old('isi') }}">
                @error('isi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Publikasi</label>
                <input type="datetime-local" name="tanggal_publikasi" id="tanggal_publikasi"
                    class="form-control @error('tanggal_publikasi') is-invalid @enderror" required
                    value="{{ old('tanggal_publikasi') }}">
                @error('tanggal_publikasi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
