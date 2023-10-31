<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    // UPDATE VIEW
    public function updateView($id)
    {
        $data = Berita::find($id);
        $data->increment('view');
        return response()->json(['msg' => 'View berita bertambah.. id: ' . $id]);
    }

    // INDEX ADMIN BERITA
    public function indexAdmin()
    {
        if (request()->is('dashboard/berita*')) {
            $data = Berita::where('kategori', 'berita')->orderBy('tanggal', 'desc')->paginate(10);
            $breadcumb = [
                '<li class="breadcrumb-item">Menu Utama</li>',
                '<li class="breadcrumb-item"><a href="' . route('admin_berita') . '">Berita & Informasi</a></li>'
            ];
            $title = 'Berita & Informasi';
        } else {
            $data = Berita::where('kategori', 'informasi serta merta')->orderBy('tanggal', 'desc')->paginate(10);
            $breadcumb = [
                '<li class="breadcrumb-item">Menu Utama</li>',
                '<li class="breadcrumb-item">Informasi Publik</li>',
                '<li class="breadcrumb-item"><a href="' . route('admin_informasi_serta_merta') . '">Informasi Serta Merta</a></li>'
            ];
            $title = 'Informasi Serta Merta';
        }

        return view('berita.berita', [
            'data' => $data,
            'breadcumb' => $breadcumb,
            'title' => $title,
        ]);
    }

    public function addAdmin(Request $request)
    {
        $request->validate([
            'isi' => 'required',
            'gambar' => 'mimes:png,jpg,jpeg|max:1024',
        ], [
            'isi.required' => 'Isi berita / informasi tidak boleh kosong.',
            'gambar.mimes' => 'Upload file dengan format jpeg, jpg, atau png.',
            'gambar.max' => 'Ukuran gambar maksimal 1Mb.',
        ]);
        $imgPath = null;
        if ($request->has('gambar')) {
            $imgPath = 'storage/' .  $request->file('gambar')->store('img');
        }

        request()->is('dashboard/berita*') ? $kategori = 'berita' : $kategori = 'informasi serta merta';

        Berita::create([
            'kategori' => $kategori,
            'judul' => ucfirst($request->judul),
            'slug' => str()->slug($request->judul),
            'tanggal' => $request->tanggal,
            'penulis' => $request->penulis,
            'isi' => $request->isi,
            'gambar' => $imgPath,
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan.');
    }

    public function updateAdmin(Request $request, $id)
    {
        $request->validate([
            'isi' => 'required',
            'gambar' => 'mimes:png,jpg,jpeg|max:1024',
        ], [
            'isi.required' => 'Isi berita / informasi tidak boleh kosong.',
            'gambar.mimes' => 'Upload file dengan format jpeg, jpg, atau png.',
            'gambar.max' => 'Ukuran gambar maksimal 1Mb.',
        ]);

        $data = Berita::findOrFail($id);
        $imgPath = $data->gambar;
        if ($request->has('gambar')) {
            Storage::delete(str_replace('storage/', '', $imgPath));
            $imgPath = 'storage/' . $request->file('gambar')->store('img');
        }
        $data->update([
            'judul' => $request->judul,
            'slug' => str()->slug($request->judul),
            'tanggal' => $request->tanggal,
            'penulis' => $request->penulis,
            'isi' => $request->isi,
            'gambar' => $imgPath
        ]);

        return redirect()->back()->with('success', 'Data berhasil diupdate.');
    }

    public function deleteAdmin($id)
    {
        $data = Berita::find($id);
        Storage::delete(str_replace('storage/', '', $data->gambar));
        $data->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus.');;
    }
}
