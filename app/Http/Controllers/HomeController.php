<?php

namespace App\Http\Controllers;

use Jorenvh\Share\Share;
use App\Models\Destinasi;
use App\Models\PaketTour;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        $tour = PaketTour::where('is_archived', '0')->take(5)->get();

        return view('home', [
            "title" => "Eksplorasi Keindahan Alam Bali - Nusa Penida & Lombok",
            "description" => "Bersama Bali Mutiara Tours, jelajahi keindahan Bali dan Lombok dengan cara yang paling luar biasa. Kerja sama kami dengan hotel dan resort terkemuka, travel operator lokal dan operator cruise ternama, membuat kami menawarkan paket tour dan travel yang tidak tertandingi, dari paket perjalanan pribadi hingga kelompok, dari cruise mewah hingga pengalaman wisata yang eksotis. Nikmati perjalanan impian Anda dengan fleksibilitas dan kenyamanan yang luar biasa, kapan saja dan ke mana saja. Bali Mutiara Tour, membuat perjalanan Anda menjadi kenangan yang tak terlupakan.",
            "keywords" => "Paket tour Bali, travel operator lokal, paket tour Lombok, paket tour Nusa Penida, paket tour domestik, paket tour mancanegara, hotel Bali, resort Bali, cruise Bali, fleksibilitas paket tour, kenyamanan perjalanan, perjalanan impian, paket travelling Bali, paket travelling Lombok, paket travelling Nusa Penida, wisata Bali, Bali Mutiara Tour, wisata Lombok, wisata Nusa Penida, liburan Bali, liburan Lombok, liburan Nusa Penida, tour murah Bali, tour murah Lombok, tour murah Nusa Penida, pilihan hotel Bali, pilihan hotel Lombok, pilihan hotel Nusa Penida, promo paket tour Bali, promo paket tour Lombok, promo paket tour Nusa Penida, tour guide lokal, transportasi Bali, transportasi Lombok, transportasi Nusa Penida, aktivitas Bali, aktivitas Lombok, aktivitas Nusa Penida, sewa mobil Bali, sewa mobil Lombok, sewa mobil Nusa Penida, rental mobil Bali, rental mobil Lombok, rental mobil Nusa Penida, penyewaan mobil Bali, penyewaan mobil Lombok, penyewaan mobil Nusa Penida, harga sewa mobil Bali, harga sewa mobil Lombok, harga sewa mobil Nusa Penida, sewa mobil harian Bali, sewa mobil harian Lombok, sewa mobil harian Nusa Penida, sewa mobil mingguan Bali, sewa mobil mingguan Lombok, sewa mobil mingguan Nusa Penida, sewa mobil bulanan Bali, sewa mobil bulanan Lombok, sewa mobil bulanan Nusa Penida, rental mobil Bali murah, rental mobil Lombok murah, rental mobil Nusa Penida murah.",
            "tour" => $tour,

        ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($slug)
    {
        $tour = PaketTour::where('slug', $slug)->first();
        $title = $tour->nama_tour;
        $deskripsi = $tour->head_deskripsi;
        $keyword = $tour->head_keyword;

        $id_destinasi = explode(',', $tour->id_destinasi);
        $destinasiList = [];
        foreach ($id_destinasi as $id) {
            $destinasi = Destinasi::find($id);
            $destinasiList[] = $destinasi;
        }
        $total_destinasi = count($destinasiList);

        return view('paket-tour', [
            "title" => $title,
            "description" => $deskripsi,
            "keywords" => $keyword,
            "tour" => $tour,
            "destinasiList" => $destinasiList,
            "total_destinasi" => $total_destinasi,
        ]);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
