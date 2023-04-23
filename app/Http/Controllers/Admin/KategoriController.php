<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::paginate(20);

        return view('admin.kategori', [
            'title' => 'Kategori Tour',
            "description" => "Kategori Tour",
            "keywords" => "Kategori Tour"
        ], compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori_tour = $request->old('kategori_tour');
        $nama_kategori = $request->old('nama_kategori');

        $request->validate([
            'kategori_tour' => 'required',
            'nama_kategori' => 'required',
        ], [
            'kategori_tour.required' => 'Jenis Kategori wajib dipilih',
            'nama_kategori' => 'Nama Kategori tidak boleh kosong',
        ]);

        Kategori::create($request->all());

        return redirect()->route('kategori')->with('success', 'Kategori berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // $request->validate([
        //     'kategori_tour' => 'required',
        //     'nama_kategori' => 'required',
        // ], [
        //     'kategori_tour.required' => 'Jenis Kategori wajib dipilih',
        //     'nama_kategori' => 'Nama Destinasi tidak boleh kosong',
        // ]);

        $kategori = Kategori::findOrFail($id);
        $kategori->update($request->all());


        return redirect()->route('kategori')
            ->with('success', 'Kategori berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect()->route('kategori')->with('success', 'Kategori Berhasil di Hapus');
    }
}
