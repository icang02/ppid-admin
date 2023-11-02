<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        if (request()->is('api/informasi-publik/serta-merta')) {
            return Berita::where('kategori', 'informasi serta merta')->orderBy('tanggal', 'desc')->paginate(6);
        }
        return Berita::where('kategori', 'berita')->orderBy('tanggal', 'desc')->paginate(6);
    }

    public function detail($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        return $berita ?? [];
    }

    public function search($keyword)
    {
        if (request()->is('api/berita/search/info-serta-merta*')) {
            $berita = Berita::where('kategori', 'informasi serta merta')->where('judul', 'like', '%' . $keyword . '%')->paginate(6);
        } else {
            $berita = Berita::where('kategori', 'berita')->where('judul', 'like', '%' . $keyword . '%')->paginate(6);
        }
        return $berita ?? [];
    }
}
