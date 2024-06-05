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
                    <div class="mb-2 text-white">
                        <label for="">Nama Kategori :</label>
                        <b>{{$kategori->nama_kategori}}</b>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection