<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\ListInformasiPublik;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $sumBerkala = ListInformasiPublik::where('informasi_publik_id', 1)->count();
        $sumSetiapSaat = ListInformasiPublik::where('informasi_publik_id', 2)->count();
        $sumSertaMerta = Berita::where('kategori', 'informasi serta merta')->count();
        $sumBerita = Berita::where('kategori', 'berita')->count();

        return view('dashboard', [
            'sumBerkala' => $sumBerkala,
            'sumSetiapSaat' => $sumSetiapSaat,
            'sumSertaMerta' => $sumSertaMerta,
            'sumBerita' => $sumBerita,
        ]);
    }
}
