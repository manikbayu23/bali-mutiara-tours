<?php

namespace App\Http\Controllers\admin;

use App\Models\Gallery;
use App\Models\Kategori;
use App\Models\Destinasi;
use App\Models\PaketTour;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class PaketTourController extends Controller
{

    public function index(Request $request)
    {

        $tour = PaketTour::orderBy('created_at', 'desc')->paginate(10);

        foreach ($tour as $tours) {
            // Menggunakan fungsi explode untuk memisahkan genre yang dipisahkan dengan koma
            $genres = explode(",", $tours->kategori->nama_kategori);
        }

        Session::put('halaman_url', request()->fullUrl());

        return view('admin.paket-tour', [
            "title" => "Paket Tour",
            "description" => "Halaman Paket Tour",
            "keywords" => "Paket Tour"

        ], compact('tour'));
    }



    public function create()
    {

        $destinasi = Destinasi::all();

        $kategori = Kategori::all();

        $gallery = Gallery::all();

        return view('admin.tambah-tour', [
            "title" => "Tambah Tour",
            "description" => "Halaman Tambah Tour",
            "keywords" => "Tambah Tour"
        ], compact('destinasi', 'kategori', 'gallery'));
    }

    public function store(Request $request)
    {
        $nama_tour = $request->old('nama_tour');
        $durasi = $request->old('durasi');
        $harga_utama = $request->old('harga_utama');
        $lokasi = $request->old('lokasi');
        $tabel_harga = $request->old('tabel_harga');
        $head_keyword = $request->old('head_keyword');
        $rating = $request->old('rating');
        $id_destinasi = $request->old('id_destinasi');
        $id_kategori = $request->old('id_kategori');
        $deskripsi = $request->old('deskripsi');
        $head_deskripsi = $request->old('head_deskripsi');
        $id_gambar = $request->old('id_gambar');

        $request->validate([
            'nama_tour' => 'required|unique:paket_tour|max:255',
            'durasi' => 'required',
            'harga_utama' => 'required',
            'lokasi' => 'required',
            'rating' => 'required',
            'head_keyword' => 'required',
            'tabel_harga' => 'required',
            'id_destinasi' => 'required',
            'id_kategori' => 'required',
            'deskripsi' => 'required',
            'head_deskripsi' => 'required',
            'id_gambar' => 'required',

        ], [
            'nama_tour.required'   => 'Nama tour tidak boleh kosong',
            'nama_tour.unique'   => 'Nama tour sudah ada',
            'durasi.required'   => 'Durasi tidak boleh kosong',
            'harga_utama.required'   => 'Harga Utama tidak boleh kosong',
            'rating.required'   => 'Rating wajib dipilih',
            'head_keyword.required'   => 'Head keyword tidak boleh kosong',
            'tabel_harga.required'   => 'Tabel Harga tidak boleh kosong',
            'lokasi.required'   => 'Lokasi wajib dipilih',
            'id_destinasi.required'   => 'Destinasi wajib dipilih',
            'id_kategori.required'   => 'Kategori wajib dipilih',
            'deskripsi.required'   => 'Deskripsi tidak boleh kosong',
            'head_deskripsi.required'   => 'Head deskripsi tidak boleh kosong',
            'id_gambar.required'   => 'Gambar utama tidak boleh kosong',
        ]);

        $request['slug'] = Str::slug($request->nama_tour, '-');

        $tour = new PaketTour();
        $tour->nama_tour = $request->input('nama_tour');
        $tour->durasi = $request->input('durasi');
        $tour->harga_utama = $request->input('harga_utama');
        $tour->lokasi = $request->input('lokasi');
        $tour->rating = $request->input('rating');
        $tour->tabel_harga = $request->input('tabel_harga');
        $tour->head_keyword = $request->input('head_keyword');
        $tour->deskripsi = $request->input('deskripsi');
        $tour->head_deskripsi = $request->input('head_deskripsi');
        $tour->id_gambar = $request->input('id_gambar');
        $tour->slug = $request->slug;

        // Encode data destinasi menjadi string JSON
        $tour->id_destinasi = implode(",", $request->input('id_destinasi'));

        // Menggunakan fungsi json_encode() untuk mengencode array data kategori menjadi string JSON
        $tour->id_kategori = implode(",", $request->input('id_kategori'));

        $tour->save();


        return redirect()->route('paket-tour')->with('success', 'Paket Tour Berhasil Ditambahkan');
    }


    public function show($slug)
    {
        $tour = PaketTour::where('slug', $slug)->first();


        $kategori = Kategori::all();

        $gallery = Gallery::all();

        $destinasi = Destinasi::all();
        $id_destinasi = explode(',', $tour->id_destinasi);
        $destinasiList = Destinasi::whereIn('id', $id_destinasi)->get();

        $id_kategori = explode(',', $tour->id_kategori);
        $kategoriList = Kategori::whereIn('id', $id_kategori)->get();


        return view('admin.edit-tour', [
            "title" => "Edit Tour",
            "description" => "Halaman Edit Tour",
            "keywords" => "Paket Tour"

        ], compact('tour', 'kategori', 'destinasi', 'gallery', 'destinasiList', 'id_destinasi', 'id_kategori', 'kategoriList'));
    }


    public function edit($id)
    {
    }


    public function update(Request $request, $slug)
    {

        $tour = PaketTour::where('slug', $slug)->firstOrFail();

        $request->validate([
            'nama_tour' => 'required|unique:paket_tour,nama_tour,' . $tour->id,
            'durasi' => 'required',
            'harga_utama' => 'required',
            'lokasi' => 'required',
            'rating' => 'required',
            'head_keyword' => 'required',
            'harga_diskon' => 'required',
            'persentase' => 'required',
            'tabel_harga' => 'required',
            'id_destinasi' => 'required',
            'id_kategori' => 'required',
            'deskripsi' => 'required',
            'head_deskripsi' => 'required',
            'id_gambar' => 'required',
        ], [
            'nama_tour.required' => 'Nama Tour Wajib di Isi',
            'nama_tour.unique' => 'Nama Tour Sudah Digunakan',
            'durasi.required' => 'Durasi tidak boleh kosong',
            'harga_utama.required' => 'Harga Utama tidak boleh kosong',
            'tabel_harga.required' => 'Tabel Harga tidak boleh kosong',
            'head_keyword.required' => 'Head Keyword tidak boleh kosong',
            'rating.required' => 'Rating wajib dipilih',
            'lokasi.required' => 'Lokasi wajib dipilih',
            'id_destinasi.required' => 'Destinasi wajib dipilih',
            'id_kategori.required' => 'Kategori wajib dipilih',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'head_deskripsi.required' => 'Head deskripsi tidak boleh kosong',
            'id_gambar.required' => 'Gambar utama tidak boleh kosong',
        ]);

        $tour->nama_tour = $request->nama_tour;
        $tour->slug = Str::slug($request->nama_tour, '-');
        $tour->durasi = $request->durasi;
        $tour->harga_utama = $request->harga_utama;
        $tour->harga_diskon = $request->harga_diskon;
        $tour->persentase = $request->persentase;
        $tour->lokasi = $request->lokasi;
        $tour->head_keyword = $request->head_keyword;
        $tour->tabel_harga = $request->tabel_harga;
        $tour->rating = $request->rating;
        $tour->deskripsi = $request->deskripsi;
        $tour->head_deskripsi = $request->head_deskripsi;
        $tour->id_destinasi = implode(",", $request->input('id_destinasi'));
        $tour->id_kategori = implode(",", $request->input('id_kategori'));
        $tour->id_gambar = $request->id_gambar;

        $tour->save();

        if (session('halaman_url')) {
            return Redirect(session('halaman_url'))->with('success', 'Paket Tour berhasil diperbarui');
        }


        return redirect()->route('paket-tour')
            ->with('success', 'Paket Tour berhasil diperbarui.');
    }


    public function destroy($slug)
    {
        $hapus = PaketTour::where('slug', $slug)->firstOrFail();
        $hapus->delete();

        return redirect()->back();
    }


    public function archived($id, Request $request)
    {
        $tour = PaketTour::findOrFail($id);
        $tour->update($request->all());

        return redirect()->back()->with('success', 'Paket Tour Berhasil Di Update');
    }
}
