<?php

namespace App\Models;

use App\Models\Gallery;
use App\Models\Kategori;
use App\Models\Destinasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaketTour extends Model
{
    use HasFactory;

    protected $table = 'paket_tour';
    protected $guarded = [];

    public function destinasi()
    {
        return $this->belongsTo(Destinasi::class, 'id_destinasi', 'id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }

    public function gambar()
    {
        return $this->belongsTo(Gallery::class, 'id_gambar', 'id');
    }
}
