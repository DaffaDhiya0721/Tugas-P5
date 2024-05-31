@extends('layouts.app', ['pageSlug' => 'dashboard'])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Lokasi
                    <a href="{{route('lokasi.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                    </div>
                <div class="card-body">
                    <p>Nama Lokasi: {{ $lokasi->nama_lokasi }}</p>
            </div>
        </div>
    </div>
</div>
@endsection