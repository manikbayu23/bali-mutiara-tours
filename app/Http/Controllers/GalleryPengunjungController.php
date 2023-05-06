<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GalleryPengunjungController extends Controller
{
    public function index()
    {
        $gambar = Gallery::paginate(12);

        return view('gallery-pengunjung', [
            'title' => 'Gallery Foto',
            "description" => "Halaman Gallery Foto",
            "keywords" => "Gallery Foto"

        ], compact('gambar'));
    }
}
