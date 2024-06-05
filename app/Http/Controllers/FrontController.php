<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Kategori;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function Destinasi()
    {
        $destinasi = Destinasi::latest()->get();
        $lokasi = Lokasi::all();
        $kategori = Kategori::all();
        return view('welcome', compact('destinasi', 'lokasi', 'kategori'));
    }
    public function DestinasiByKategori($id_kategori)
    {
        $destinasi = Destinasi::where('id_kategori', $id_kategori)->get();
        return view('filterByKategori', compact('destinasi'));
    }
}
