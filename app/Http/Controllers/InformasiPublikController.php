<?php

namespace App\Http\Controllers;

use App\Models\InformasiPublik;
use App\Models\ListInformasiPublik;
use Illuminate\Http\Request;

class InformasiPublikController extends Controller
{
    public function indexAdmin()
    {
        if (request()->is('dashboard/informasi/informasi-berkala')) {
            $data = InformasiPublik::find(1);
            $breadcumb = [
                '<li class="breadcrumb-item">Menu Utama</li>',
                '<li class="breadcrumb-item">Informasi Publik</li>',
                '<li class="breadcrumb-item"><a href="' . route('admin_informasi_berkala') . '">Informasi Berkala</a></li>'
            ];
            $title = 'Informasi Berkala';
        } else if (request()->is('dashboard/informasi/informasi-setiap-saat')) {
            $data = InformasiPublik::find(2);
            $breadcumb = [
                '<li class="breadcrumb-item">Menu Utama</li>',
                '<li class="breadcrumb-item">Informasi Publik</li>',
                '<li class="breadcrumb-item"><a href="' . route('admin_informasi_setiap_saat') . '">Informasi Tersedia Setiap Saat</a></li>'
            ];
            $title = 'Informasi Tersedia Setiap Saat';
        } else if (request()->is('dashboard/informasi/informasi-dikecualikan')) {
            $data = InformasiPublik::find(4);
            $breadcumb = [
                '<li class="breadcrumb-item">Menu Utama</li>',
                '<li class="breadcrumb-item">Informasi Publik</li>',
                '<li class="breadcrumb-item"><a href="' . route('admin_informasi_dikecualikan') . '">Informasi Dikecualikan</a></li>'
            ];
            $title = 'Informasi Dikecualikan';
        }

        return view('tentang.profil', [
            'tentang' => $data,
            'breadcumb' => $breadcumb,
            'title' => $title,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ], [
            'judul.required' => 'Kolom judul tidak boleh kosong.',
            'isi.required' => 'Kolom isi tidak boleh kosong.',
        ]);

        $data = InformasiPublik::findOrFail($id);
        $data->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);
        return redirect()->back()->with('success', 'Data berhasil diupdate.');
    }

    public function listInformasi(InformasiPublik $data)
    {
        $id = $data->id;
        if ($id == 1) {
            $breadcumb = [
                '<li class="breadcrumb-item">Menu Utama</li>',
                '<li class="breadcrumb-item">Informasi Publik</li>',
                '<li class="breadcrumb-item"><a href="' . route('admin_informasi_berkala') . '">Informasi Berkala</a></li>',
                '<li class="breadcrumb-item"><a href="' . route('admin_list_informasi_publik', $id) . '">List Informasi</a></li>'
            ];
        } else {
            $breadcumb = [
                '<li class="breadcrumb-item">Menu Utama</li>',
                '<li class="breadcrumb-item">Informasi Publik</li>',
                '<li class="breadcrumb-item"><a href="' . route('admin_informasi_setiap_saat') . '">Informasi Tersedia Setiap Saat</a></li>',
                '<li class="breadcrumb-item"><a href="' . route('admin_list_informasi_publik', $id) . '">List Informasi</a></li>'
            ];
        }

        return view('informasi-publik.list-informasi-publik', [
            'data' => $data,
            'listData' => $data->list_informasi_publik()->paginate(10),
            'breadcumb' => $breadcumb,
        ]);
    }

    public function addListInformasi(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'isi' => 'required',
        ], [
            'isi.required' => 'Field isi tidak boleh kosong.',
        ]);

        ListInformasiPublik::create([
            'informasi_publik_id' => $request->informasi_publik_id,
            'judul' => ucfirst($request->judul),
            'isi' => $request->isi,
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan.');
    }

    public function updateListInformasi(Request $request, $id)
    {
        $data = ListInformasiPublik::findOrFail($id);
        // dd($data);
        $data->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);
        return redirect()->back()->with('success', 'Data berhasil diupdate.');
    }
    public function deleteListInformasi($id)
    {
        $data = ListInformasiPublik::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
