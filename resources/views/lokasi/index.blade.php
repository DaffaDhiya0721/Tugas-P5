@extends('layouts.app', ['pageSlug' => 'dashboard'])
@section('content')
<div class="container">
    <div class="row">
        <div class="col mb-8">
            @if(session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{ session('success') }}
            </div>
            <div class="card">
                @endif
                <div class="card border-secondary">
                <div class="card-header">Data Lokasi
                <a href="{{route('lokasi.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table">
                        <table class="table">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lokasi</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <body>
                            @php $no = 1; @endphp
                        @foreach ($lokasi as $item)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->nama_lokasi}}</td>
                            <td>
                                <form action="{{route('lokasi.destroy',$item->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <a href="{{route('lokasi.edit', $item->id)}}" class="btn btn-sm btn-success">Ubah</a>
                                <a href="{{route('lokasi.show', $item->id)}}" class="btn btn-sm btn-warning">Lihat</a>
                                
                                <button class="btn btn-sm btn-danger" type="submit"
                                    onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')">Hapus
                                </button>
                                </form>
                            </td>
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