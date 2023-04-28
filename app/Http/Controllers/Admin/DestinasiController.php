<?php

namespace App\Http\Controllers\Admin;

use App\Models\Destinasi;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinasi = Destinasi::paginate(20);



        return view('admin.destinasi', [
            'title' => 'Destinasi Tour',
            "description" => "Destinasi Tour",
            "keywords" => "Destinasi Tour"
        ], compact('destinasi'));
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

        $kategori_destinasi = $request->old('kategori_destinasi');
        $nama_destinasi = $request->old('nama_destinasi');

        $request->validate([
            'kategori_destinasi' => 'required',
            'nama_destinasi' => 'required',
        ], [
            'kategori_destinasi.required' => 'Kategori Destinasi wajib dipilih',
            'nama_destinasi' => 'Nama Destinasi tidak boleh kosong',
        ]);

        Destinasi::create($request->all());

        return redirect()->route('destinasi')->with('success', 'Destinasi berhasil dibuat');
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

        $request->validate([
            'kategori_destinasi' => 'required',
            'nama_destinasi' => 'required',
        ], [
            'kategori_destinasi.required' => 'Kategori Destinasi wajib dipilih',
            'nama_destinasi' => 'Nama Destinasi tidak boleh kosong',
        ]);

        $destinasi = Destinasi::findOrFail($id);
        $destinasi->update($request->all());

        return redirect()->back()
            ->with('success', 'Destinasi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destinasi = Destinasi::find($id);
        $destinasi->delete();

        return redirect()->back()->with('success', 'Destinasi Berhasil di Hapus');
    }
}
