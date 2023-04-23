<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $gambar = Gallery::paginate(12);
        return view('admin.gallery', [
            'title' => 'Gallery Foto',
            "description" => "Halaman Gallery Foto",
            "keywords" => "Gallery Foto"

        ], compact('gambar'));
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
        $image = $request->file('file');

        $originalName = $image->getClientOriginalName();

        $extension = $image->getClientOriginalExtension();

        $timestamp = round(microtime(true) * 1000); // generate unique timestamp

        $imageName = $timestamp . '-' . Str::slug(pathinfo($originalName, PATHINFO_FILENAME)) . '.' . $extension;

        $image->move(public_path('images/gallery'), $imageName);

        $image = new Gallery();
        $image->gambar = $imageName;
        $image->save();


        return response()->json(['success' => $imageName]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Gallery::find($id);

        if (!$image) {
            return response()->json(['error' => 'Image not found.'], 404);
        }

        // Hapus file dari direktori penyimpanan
        File::delete(public_path($image->gambar));

        // Hapus data gambar dari database
        $image->delete();

        return redirect()->route('gallery')->with('success', 'Gambar Berhasil di Hapus.');
    }
}
