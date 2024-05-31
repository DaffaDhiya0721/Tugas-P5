@extends('layouts.app', ['pageSlug' => 'dashboard'])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Edit Destinasi
                    <a href="{{ route('destinasi.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('destinasi.update', $destinasi->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col">
                                <div class="mb-2">
                                    <label for="nama_tempat">Nama Tempat</label>
                                    <input type="text" class="form-control @error('nama_tempat') is-invalid @enderror"
                                        name="nama_tempat" value="{{ old('nama_tempat', $destinasi->nama_tempat) }}">
                                    @error('nama_tempat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="id_tiket">Id Tiket</label>
                                    <input type="number" class="form-control @error('id_tiket') is-invalid @enderror"
                                        name="id_tiket" value="{{ old('id_tiket', $destinasi->id_tiket) }}">
                                    @error('id_tiket')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="deskripsi">Deskripsi</label>
                                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror"
                                        name="deskripsi" value="{{ old('deskripsi', $destinasi->deskripsi) }}">
                                    @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-2">
                                    <label for="cover">Cover</label>
                                    @if($destinasi->cover)
                                    <p><img src="{{ asset('images/destinasi/' . $destinasi->cover) }}" alt="Cover" width="300px"></p>
                                    @endif
                                    <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror">
                                    @error('cover')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="id_kategori">Kategori</label>
                            <select name="id_kategori" class="form-control @error('id_kategori') is-invalid @enderror">
                                <option value="">Pilih Kategori</option>
                                @foreach ($kategori as $data)
                                <option value="{{ $data->id }}" {{ $data->id == $destinasi->id_kategori ? 'selected' : ''
                                    }}>{{ $data->nama_kategori }}</option>
                                @endforeach
                            </select>
                            @error('id_kategori')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="id_lokasi">Lokasi</label>
                            <select name="id_lokasi" class="form-control @error('id_lokasi') is-invalid @enderror">
                                <option value="">Pilih Lokasi</option>
                                @foreach ($lokasi as $data)
                                <option value="{{ $data->id }}" {{ $data->id == $destinasi->id_lokasi ? 'selected' : ''
                                    }}>{{ $data->nama_lokasi }}</option>
                                @endforeach
                            </select>
                            @error('id_lokasi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-sm btn-success" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection