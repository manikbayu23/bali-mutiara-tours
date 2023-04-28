<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('admin.artikel', [
            "title" => "Artikel - Admin",
            "description" => "Halaman Dashboard Artikel",
            "keywords" => "Artikel"
        ]);
    }
}
