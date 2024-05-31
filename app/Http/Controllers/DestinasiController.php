<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Kategori;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $destinasi = Destinasi::latest()->get();
        return view('destinasi.index', compact('destinasi'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        $lokasi = Lokasi::all();
        return view('destinasi.create', compact('kategori', 'lokasi'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_tempat' => 'required',
            'id_tiket' => 'required',
            'deskripsi' => 'required',
            'cover' => 'required|max:2048|mimes:png,jpg',
            'id_kategori' => 'required',
            'id_lokasi' => 'required',
        ]);

        $destinasi = new Destinasi();
        $destinasi->nama_tempat = $request->nama_tempat;
        $destinasi->id_tiket = $request->id_tiket;
        $destinasi->deskripsi = $request->deskripsi;
        $destinasi->id_kategori = $request->id_kategori;
        $destinasi->id_lokasi = $request->id_lokasi;

        // upload foto
        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/destinasi/', $name);
            $destinasi->cover = $name;
        }

        $destinasi->save();
        return redirect()->route('destinasi.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    public function show($id)
    {
        $destinasi = Destinasi::findOrFail($id);
        return view('destinasi.show', compact('destinasi'));
    }

    public function edit($id)
    {
        $destinasi = Destinasi::findOrFail($id);
        $kategori = Kategori::all();
        $lokasi = Lokasi::all();
        return view('destinasi.edit', compact('destinasi', 'kategori', 'lokasi'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_tempat' => 'required',
            'id_tiket' => 'required',
            'deskripsi' => 'required',
            'id_kategori' => 'required',
            'id_lokasi' => 'required',
        ]);

        $destinasi = Destinasi::findOrFail($id);
        $destinasi->nama_tempat = $request->nama_tempat;
        $destinasi->id_tiket = $request->id_tiket;
        $destinasi->deskripsi = $request->deskripsi;
        $destinasi->id_kategori = $request->id_kategori;
        $destinasi->id_lokasi = $request->id_lokasi;

        // upload foto
        if ($request->hasFile('cover')) {
            $destinasi->deleteImage();
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/destinasi/', $name);
            $destinasi->cover = $name;
        }

        $destinasi->save();
        return redirect()->route('destinasi.index')
            ->with('success', 'data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $destinasi = Destinasi::findOrFail($id);
        $destinasi->deleteImage();
        $destinasi->delete();
        return redirect()->route('destinasi.index')
            ->with('success', 'data berhasil dihapus');
    }
}
