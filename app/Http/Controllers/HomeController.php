<?php

namespace App\Http\Controllers;

use Jorenvh\Share\Share;
use App\Models\Destinasi;
use App\Models\PaketTour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {

        $tourbali = PaketTour::where('is_archived', '0')
            ->where('lokasi', 'Bali')
            ->get();
        $tournusa = PaketTour::where('is_archived', '0')
            ->where('lokasi', 'Nusa Penida')
            ->get();
        $tourlombok = PaketTour::where('is_archived', '0')
            ->where('lokasi', 'Lombok')
            ->get();


        return view('home', [
            "title" => "Eksplorasi Keindahan Alam Bali - Nusa Penida & Lombok",
            "description" => "Bersama Bali Mutiara Tours, jelajahi keindahan Bali dan Lombok dengan cara yang paling luar biasa. Kerja sama kami dengan hotel dan resort terkemuka, travel operator lokal dan operator cruise ternama, membuat kami menawarkan paket tour dan travel yang tidak tertandingi, dari paket perjalanan pribadi hingga kelompok, dari cruise mewah hingga pengalaman wisata yang eksotis. Nikmati perjalanan impian Anda dengan fleksibilitas dan kenyamanan yang luar biasa, kapan saja dan ke mana saja. Bali Mutiara Tour, membuat perjalanan Anda menjadi kenangan yang tak terlupakan.",
            "keywords" => "Paket tour Bali, travel operator lokal, paket tour Lombok, paket tour Nusa Penida, paket tour domestik, paket tour mancanegara, hotel Bali, resort Bali, cruise Bali, fleksibilitas paket tour, kenyamanan perjalanan, perjalanan impian, paket travelling Bali, paket travelling Lombok, paket travelling Nusa Penida, wisata Bali, Bali Mutiara Tour, wisata Lombok, wisata Nusa Penida, liburan Bali, liburan Lombok, liburan Nusa Penida, tour murah Bali, tour murah Lombok, tour murah Nusa Penida, pilihan hotel Bali, pilihan hotel Lombok, pilihan hotel Nusa Penida, promo paket tour Bali, promo paket tour Lombok, promo paket tour Nusa Penida, tour guide lokal, transportasi Bali, transportasi Lombok, transportasi Nusa Penida, aktivitas Bali, aktivitas Lombok, aktivitas Nusa Penida, sewa mobil Bali, sewa mobil Lombok, sewa mobil Nusa Penida, rental mobil Bali, rental mobil Lombok, rental mobil Nusa Penida, penyewaan mobil Bali, penyewaan mobil Lombok, penyewaan mobil Nusa Penida, harga sewa mobil Bali, harga sewa mobil Lombok, harga sewa mobil Nusa Penida, sewa mobil harian Bali, sewa mobil harian Lombok, sewa mobil harian Nusa Penida, sewa mobil mingguan Bali, sewa mobil mingguan Lombok, sewa mobil mingguan Nusa Penida, sewa mobil bulanan Bali, sewa mobil bulanan Lombok, sewa mobil bulanan Nusa Penida, rental mobil Bali murah, rental mobil Lombok murah, rental mobil Nusa Penida murah.",
            "tourbali" => $tourbali,
            "tournusa" => $tournusa,
            "tourlombok" => $tourlombok,

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

        $datatours = PaketTour::where('is_archived', '0')
            ->whereIn('durasi', ['3 Hari 2 Malam', '4 Hari 3 Malam', '1 Hari'])
            ->take(5)
            ->get();

        return view('paket-tour-show', [
            "title" => $title,
            "description" => $deskripsi,
            "keywords" => $keyword,
            "tour" => $tour,
            "destinasiList" => $destinasiList,
            "total_destinasi" => $total_destinasi,
            "datatours" => $datatours,
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

    public function paket_tour(Request $request)
    {

        $lokasi = $request->input('lokasi');
        $durasi = $request->input('durasi');
        $kategori = $request->input('kategori');

        // membuat query builder untuk paket tour
        $tours = DB::table('paket_tour')
            ->join('kategori', 'paket_tour.id_kategori', '=', 'kategori.id')
            ->select('paket_tour.*', 'kategori.nama_kategori')
            ->where(function ($query) use ($request) {
                if ($request->lokasi) {
                    $query->where('paket_tour.lokasi', $request->lokasi);
                }
                if ($request->durasi) {
                    $query->where('paket_tour.durasi', $request->durasi);
                }
                if ($request->kategori) {
                    $query->where('kategori.kategori_tour', $request->kategori);
                }
            })->where('is_archived', '0')
            ->orderByRaw("FIELD(paket_tour.lokasi, 'Bali', 'Nusa Penida', 'Lombok')")
            ->paginate(24);

        return view('paket-tour', [
            "title" => "Paket Tours - Bali - Nusa Penida & Lombok",
            "description" => "Paket Tours Bali, Nusa Penida, dan Lombok dari Bali Mutiara Tours. Nikmati liburan yang tak terlupakan dengan paket tour kami yang menampilkan keindahan alam Bali, Nusa Penida, dan Lombok. Dapatkan pengalaman yang menyenangkan dan berkualitas dengan Bali Mutiara Tours.",
            "keywords" => "Paket tour Bali, travel operator lokal, paket tour Lombok, paket tour Nusa Penida, paket tour domestik, paket tour mancanegara, hotel Bali, resort Bali, cruise Bali, fleksibilitas paket tour, kenyamanan perjalanan, perjalanan impian, paket travelling Bali, paket travelling Lombok, paket travelling Nusa Penida, wisata Bali, Bali Mutiara Tour, wisata Lombok, wisata Nusa Penida, liburan Bali, liburan Lombok, liburan Nusa Penida, tour murah Bali, tour murah Lombok, tour murah Nusa Penida, pilihan hotel Bali, pilihan hotel Lombok, pilihan hotel Nusa Penida, promo paket tour Bali, promo paket tour Lombok, promo paket tour Nusa Penida, tour guide lokal, transportasi Bali, transportasi Lombok, transportasi Nusa Penida, aktivitas Bali, aktivitas Lombok, aktivitas Nusa Penida, sewa mobil Bali, sewa mobil Lombok, sewa mobil Nusa Penida, rental mobil Bali, rental mobil Lombok, rental mobil Nusa Penida, penyewaan mobil Bali, penyewaan mobil Lombok, penyewaan mobil Nusa Penida, harga sewa mobil Bali, harga sewa mobil Lombok, harga sewa mobil Nusa Penida, sewa mobil harian Bali, sewa mobil harian Lombok, sewa mobil harian Nusa Penida, sewa mobil mingguan Bali, sewa mobil mingguan Lombok, sewa mobil mingguan Nusa Penida, sewa mobil bulanan Bali, sewa mobil bulanan Lombok, sewa mobil bulanan Nusa Penida, rental mobil Bali murah, rental mobil Lombok murah, rental mobil Nusa Penida murah.",
            "tours" => $tours,
            "lokasi" => $lokasi,
            "durasi" => $durasi,
            "kategori" => $kategori,
        ]);
    }

    public function kontak()
    {
        return view('kontak', [
            "title" => "Kontak - Pengalaman Liburan Terbaik di Bali",
            "description" => "Hubungi Bali Mutiara Tours untuk pengalaman liburan yang tak terlupakan di Bali. Dapatkan layanan berkualitas tinggi dan pelayanan pelanggan yang ramah dari tim ahli kami. Temukan cara terbaik untuk menghubungi kami di halaman kontak kami.",
            "keywords" => "Bali Mutiara Tours, kontak, liburan Bali, pelayanan pelanggan.",


        ]);
    }
}
