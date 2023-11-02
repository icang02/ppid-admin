<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ImgLaporanGambar;
use App\Models\Laporan;
use App\Models\LaporanGambar;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function laporanLayanan()
    {
        $data = Laporan::select('link', 'tahun', 'gambar')->orderBy('tahun', 'desc')->get();
        return $data;
    }

    public function laporanAkses($tahun)
    {
        $laporan = Laporan::where('tahun', $tahun)->first();
        $data = LaporanGambar::orderBy('tahun', 'desc')->get();

        if ($data) {
            $dataGambar = ImgLaporanGambar::where('tahun', $laporan->tahun)->get();
        }

        $combinedData = [
            'laporan' => ['data' => $laporan, 'data_gambar' => $dataGambar],
            'list_tahun' => $data,
        ];

        return $combinedData;
    }
}
