@extends('layouts.app', ['pageSlug' => 'dashboard'])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Kategori
                    <a href="{{route('kategori.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                    </div>
                <div class="card-body">
                    <p>Nama Kategori: {{ $kategori->nama_kategori }}</p>
            </div>
        </div>
    </div>
</div>
@endsection