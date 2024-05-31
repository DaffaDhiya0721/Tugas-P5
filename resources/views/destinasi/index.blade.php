@extends('layouts.app', ['pageSlug' => 'dashboard'])
@section('content')
<div class="container">
    <div class="row">
        <div class="col mb-8">
            @if(session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <div class="card border-secondary">
                <div class="card-header">Data Destinasi
                <a href="{{route('destinasi.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table">
                        <table class="table">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Tempat</th>
                            <th>Id Tiket</th>
                            <th>Deskripsi</th>
                            <th>Cover</th>
                            <th>Kategori</th>
                            <th>Lokasi</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <body>
                            @php $no = 1; @endphp
                        @foreach ($destinasi as $item)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->nama_tempat}}</td>
                            <td>{{$item->id_tiket}}</td>
                            <td>{{$item->deskripsi}}</td>
                            
                        </tr>
                        @endforeach
                        </body>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection