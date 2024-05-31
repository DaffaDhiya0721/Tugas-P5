<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    use HasFactory;

    public $fillable = ['nama_tempat', 'id_tiket', 'deskripsi', 'cover', 'id_kategori', 'id_lokasi'];
    public $visible = ['nama_tempat', 'id_tiket', 'deskripsi', 'cover', 'id_kategori', 'id_lokasi'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class, 'id_lokasi');
    }

    // menghapus foto
    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/destinasi/' . $this->cover))) {
            return unlink(public_path('images/destinasi/' . $this->cover));
        }
    }
}
