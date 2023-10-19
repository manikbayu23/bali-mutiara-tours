<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class KategoriController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $kategori = Kategori::paginate(10);

        // if (request()->ajax()) {
        //     $kategori = Kategori::latest()->get();
        //     return DataTables::of($kategori)->make(true);
        // } else {
        // }

        return view('admin.kategori', [
            'title' => 'Kategori Tour',
            "description" => "Kategori Tour",
            "keywords" => "Kategori Tour",

        ]);
    }

    public function list()
    {

        $data = Kategori::orderBy('kategori_tour', 'asc');
        return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
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
        $data = Kategori::where('id', $id)->first();
        return response()->json(['data' => $data]);
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



        return redirect()->back()
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
        // Temukan kategori berdasarkan ID
        $kategori = Kategori::findOrFail($id);

        // Hapus kategori
        $kategori->delete();

        // Berikan respons atau umpan balik
        return response()->json([
            'message' => 'Kategori berhasil dihapus.'
        ]);
    }
}
