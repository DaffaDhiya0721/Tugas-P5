@extends('layouts.app', ['pageSlug' => 'dashboard'])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Destinasi
                    <a href="{{ route('destinasi.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2 text-white">
                        <label for="">Nama Tempat :</label>
                        <b>{{$destinasi->nama_tempat}}</b>
                    </div>
                    <div class="mb-2 text-white">
                        <label for="">Id Tiket :</label>
                        <b>{{ $destinasi->id_tiket }}</b>
                    </div>
                    <div class="mb-2 text-white">
                        <label for="">Deskripsi :</label>
                        <b>{{ $destinasi->deskripsi}}</b>
                    </div>
                    <div class="mb-2 text-white">
                        <img src="{{ asset('images/destinasi/' . $destinasi->cover) }}" alt="" style="width: 200px;">
                    </div>
                    <div class="mb-2 text-white">
                        <label for="">Kategori :</label>
                        <b>{{ $destinasi->kategori->nama_kategori }}</b>
                    </div>
                    <div class="mb-2 text-white">
                        <label for="">Lokasi :</label>
                        <b>{{ $destinasi->lokasi->nama_lokasi }}</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection