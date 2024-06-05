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
                        <td><img src="{{asset('/images/destinasi/'.$item->cover)}}"
                            style="width: 2000px;" alt="">
                        </td>
                        <td>{{$item->kategori->nama_kategori}}</td>
                        <td>{{$item->lokasi->nama_lokasi}}</td>
                        <td>
                            <form action="{{route('destinasi.destroy',$item->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <a href="{{route('destinasi.edit',$item->id)}}" class="btn btn-sm btn-success mb-2">
                                    Ubah
                                </a>
                                <a href="{{route('destinasi.show',$item->id)}}" class="btn btn-sm btn-warning mb-2">
                                    Lihat
                                </a>
                                <button class="btn btn-sm btn-danger mb-2" type="submit"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    Hapus
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