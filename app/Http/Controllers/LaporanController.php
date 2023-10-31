<?php

namespace App\Http\Controllers;

use App\Models\ImgLaporanGambar;
use App\Models\Laporan;
use App\Models\LaporanGambar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    // METHOD ADMIN
    public function indexAdmin(Request $request)
    {
        if ($request->route()->getName() == 'admin_laporan_layanan') {
            $data = Laporan::where('kategori', 'layanan')->orderBy('tahun', 'desc')->get();
            $breadcumb = [
                '<li class="breadcrumb-item">Menu Utama</li>',
                '<li class="breadcrumb-item">Laporan</li>',
                '<li class="breadcrumb-item"><a href="' . route('admin_laporan_layanan') . '">Layanan Informasi Publik</a></li>'
            ];
            $title = 'Laporan Layanan Informasi Publik';
        } elseif ($request->route()->getName() == 'admin_laporan_survei') {
            $data = Laporan::where('kategori', 'survei')->orderBy('tahun', 'desc')->get();
            $breadcumb = [
                '<li class="breadcrumb-item">Menu Utama</li>',
                '<li class="breadcrumb-item">Laporan</li>',
                '<li class="breadcrumb-item"><a href="' . route('admin_laporan_survei') . '">Survei Layanan Informasi</a></li>'
            ];
            $title = 'Laporan Survei Layanan Informasi';
        }

        return view('laporan.index', [
            'data' => $data,
            'breadcumb' => $breadcumb,
            'title' => $title,
        ]);
    }

    public function addLaporanAkses(Request $request)
    {
        $cek = LaporanGambar::where('tahun', $request->tahun)->first();
        if ($cek) {
            return redirect()->back()->with("error", "Periode tahun $request->tahun sudah ada .")->withInput();
        }

        LaporanGambar::create([
            'link' => $request->link,
            'tahun' => $request->tahun,
        ]);
        if ($request->has('gambar')) {
            foreach ($request->file('gambar') as $item) {
                ImgLaporanGambar::create([
                    'tahun' => $request->tahun,
                    'gambar' => 'storage/' . $item->store('img'),
                ]);
            }
        }
        return redirect()->back()->with("success", "Data berhasil ditambahkan.");
    }

    public function updateLaporanAkses(Request $request, $id)
    {
        // cek tahun updatenya

        $data = LaporanGambar::find($id);

        if ($request->tahun != $data->tahun) {

            $cekTahun = LaporanGambar::where('tahun', $request->tahun)->first();
            if ($cekTahun) {
                return redirect()->back()->withInput()->with('error', "Tidak dapat mengubah periode/tahun ke $request->tahun karena data sudah ada.");
            }
            $data->update([
                // 'tahun' => $request->tahun,
                'link' => $request->link,
            ]);
        } else {
            $data->update([
                // 'tahun' => $request->tahun,
                'link' => $request->link,
            ]);
        }

        if ($request->has('gambar')) {
            foreach ($request->file('gambar') as $item) {
                ImgLaporanGambar::create([
                    'tahun' => $data->tahun,
                    'gambar' => 'storage/' . $item->store('img'),
                ]);
            }
        }

        return redirect()->back()->with('success', 'Data berhasil diupdate.');
    }

    public function addAdmin(Request $request)
    {
        $cek = Laporan::where('kategori', $request->kategori)->where('tahun', $request->tahun)->count();
        if ($cek > 0) {
            return redirect()->back()->with('error', "Periode tahun $request->tahun sudah ada.");
        }

        $request->validate([
            'gambar' => 'required|mimes:png,jpg,jpeg|max:1024',
        ], [
            'gambar.required' => 'Kolom gambar tidak boleh kosong.',
            'gambar.mimes' => 'Upload file dengan format jpeg, jpg, atau png.',
            'gambar.max' => 'Ukuran gambar maksimal 1Mb.',
        ]);

        Laporan::create([
            'kategori' => $request->kategori,
            'link' => $request->link,
            'tahun' => $request->tahun,
            'gambar' => 'storage/' . $request->file('gambar')->store('img'),
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan.');
    }

    public function updateAdmin(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'mimes:png,jpg,jpeg|max:1024',
        ], [
            'gambar.mimes' => 'Upload file dengan format jpeg, jpg, atau png.',
            'gambar.max' => 'Ukuran gambar maksimal 1Mb.',
        ]);

        $data = Laporan::find($id);
        $imgPath = $data->gambar;
        if ($request->has('gambar')) {
            Storage::delete(str_replace('storage/', '', $data->gambar));
            $imgPath = "storage/" . $request->file('gambar')->store('img');
        }

        $data->update([
            'link' => $request->link,
            'tahun' => $request->tahun,
            'gambar' => $imgPath,
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan.');
    }

    public function deleteAdmin($id)
    {
        $data = Laporan::find($id);
        Storage::delete(str_replace('storage/', '', $data->gambar));
        $data->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }

    public function deleteLaporanAkses($id)
    {
        $data = LaporanGambar::find($id);

        $dataGambar = ImgLaporanGambar::where('tahun', $data->tahun)->get();
        if ($dataGambar) {
            foreach ($dataGambar as $item) {
                Storage::delete(str_replace('storage/', '', $item->gambar));
                $item->delete();
            }
        }
        $data->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }

    public function indexAdmin1()
    {
        $data = LaporanGambar::orderBy('tahun', 'desc')->get();
        // dd($data);
        $breadcumb = [
            '<li class="breadcrumb-item">Menu Utama</li>',
            '<li class="breadcrumb-item">Laporan</li>',
            '<li class="breadcrumb-item"><a href="' . route('admin_laporan_akses') . '">Akses Informasi Publik</a></li>'
        ];
        $title = 'Laporan Akses Informasi Publik';

        return view('laporan.laporan_gambar', [
            'data' => $data,
            'breadcumb' => $breadcumb,
            'title' => $title,
        ]);
    }

    public function imgLaporanAkses($tahun)
    {
        $data = ImgLaporanGambar::where('tahun', $tahun)->get();
        $dataLaporan = LaporanGambar::where('tahun', $tahun)->first();
        // dd($data);
        $breadcumb = [
            '<li class="breadcrumb-item">Menu Utama</li>',
            '<li class="breadcrumb-item">Laporan</li>',
            '<li class="breadcrumb-item"><a href="' . route('admin_laporan_akses') . '">Akses Informasi Publik</a></li>',
            '<li class="breadcrumb-item"><a href="' . route('admin_img_laporan_akses', $tahun) . '">Data Gambar</a></li>'
        ];
        $title = 'Data Gambar | Laporan Akses Informasi Publik';

        return view('laporan.img_laporan_gambar', [
            'data' => $data,
            'dataLaporan' => $dataLaporan,
            'breadcumb' => $breadcumb,
            'title' => $title,
        ]);
    }

    public function imgDeleteLaporanAkses($id)
    {
        $data = ImgLaporanGambar::findOrFail($id);
        Storage::delete(str_replace('storage/', '', $data->gambar));
        $data->delete();

        return redirect()->back()->with('success', 'Gambar berhasil dihapus.');
    }
}
