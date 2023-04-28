<?php

namespace App\Http\Controllers;

use App\Models\SewaMobil;
use Illuminate\Http\Request;

class SewaMobilViewController extends Controller
{

    public function index()
    {
        $data = SewaMobil::paginate(18);

        return view('sewa-mobil-view', [
            "title" => "Sewa Mobil Dengan Sopir",
            "description" => "Sewa mobil murah di Bali dengan supir dapat menjadi pilihan yang tepat untuk Anda jika Anda ingin mengunjungi berbagai tempat di Bali dengan fleksibilitas dan kenyamanan yang
            lebih tinggi. Dengan menyewa mobil dengan supir, Anda dapat mengeluarkan biaya transportasi yang lebih rendah
            dibandingkan jika Anda menyewa mobil tanpa supir atau menggunakan taksi. Selain itu, Anda juga dapat menikmati
            perjalanan yang lebih nyaman karena supir yang Anda sewa akan mengetahui jalur terbaik dan tempat-tempat menarik
            yang dapat dikunjungi di Bali.",
            "keywords" => "Sewa mobil di Bali, Mobil dengan sopir di Bali, Rental mobil di Bali, Jasa sewa mobil di Bali, Pemandu wisata di Bali, Objek wisata di Bali, Transportasi di Bali, Liburan di Bali, Transportasi bandara di Bali.",
            "data" => $data,

        ]);
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
        //
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
        //
    }
}
