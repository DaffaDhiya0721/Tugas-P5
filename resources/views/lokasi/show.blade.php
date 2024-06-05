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
                    <div class="mb-2 text-white">
                        <label for="">Nama Lokasi :</label>
                        <b>{{$lokasi->nama_lokasi}}</b>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection