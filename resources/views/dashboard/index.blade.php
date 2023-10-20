@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Preview Postingan</h1>
</div>

@foreach ($beritas as $berita)    
<div class="border-bottom mt-2">
    <h5>Berita harian {{$loop->iteration}}</h5>
    <h3>{{$berita->judul}}</h5>
    <p>{{$berita->isi}}</p>
</div>
@endforeach
@endsection


