<?php

namespace App\Http\Controllers\Admin;

use App\Models\SewaMobil;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SewaMobilController extends Controller
{

    public function index()
    {
        $mobil = SewaMobil::paginate(10);

        return view('admin.sewa-mobil', [
            "title" => "Sewa Mobil",
            "description" => "Halaman Sewa Mobil",
            "keywords" => "Sewa Mobil"
        ], compact('mobil'));
    }

    public function store(Request $request)
    {
        $request['slug'] = Str::slug($request->nama_mobil, '-');

        $data = new SewaMobil($request->all());
        $data->save();


        if ($request->hasFile('foto_mobil')) {
            $request->file('foto_mobil')->move('images/mobil/', $request->file('foto_mobil')->getClientOriginalName());
            $data->foto_mobil = $request->file('foto_mobil')->getClientOriginalName();
            $data->save();
        }

        return redirect()->back()->with('success', 'Mobil berhasil dibuat');
    }


    public function update(Request $request, $slug)
    {
        $data = SewaMobil::where('slug', $slug)->firstOrFail();
        $data->nama_mobil = $request->input('nama_mobil');
        $data->harga_sewa = $request->input('harga_sewa');

        // Mengatur slug menggunakan Str::slug()
        $data->slug = Str::slug($request->input('nama_mobil'), '-');

        if ($request->hasFile('foto_mobil')) {
            // Mengambil file foto dari form input
            $foto = $request->file('foto_mobil');
            // Menyimpan file foto ke dalam folder public/images/mobil dengan nama yang unik berdasarkan timestamp
            $nama_file_foto = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('images/mobil'), $nama_file_foto);
            // Mengupdate nama file foto di dalam database
            $data->foto_mobil = $nama_file_foto;
        }
        $data->save();

        return redirect()->back()->with('success', 'Mobil Berhasil di Update');
    }


    public function destroy($id)
    {
        $mobil = SewaMobil::find($id);

        if (!is_null($mobil->foto_mobil)) {
            $path = public_path('images/mobil/' . $mobil->foto_mobil);
            if (file_exists($path)) {
                unlink($path);
            }
        }
        $mobil->delete();

        return redirect()->back();
    }
}
