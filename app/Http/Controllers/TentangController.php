<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use App\Models\Landing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TentangController extends Controller
{
    public function indexAdmin()
    {
        // BAGIAN TENTANG
        if (request()->routeIs('tentang_profile_admin')) {
            $tentang = Landing::where('bagian', 'profil')->get()->first();
            $breadcumb = [
                '<li class="breadcrumb-item">Tentang</li>',
                '<li class="breadcrumb-item">Menu Utama</li>',
                '<li class="breadcrumb-item"><a href="' . route('tentang_profile_admin') . '">Profil</a></li>'
            ];
            $title = 'Profil';
        }
        if (request()->routeIs('tentang_visi_misi_admin')) {
            $tentang = Landing::where('bagian', 'visi')->get()->first();
            $breadcumb = [
                '<li class="breadcrumb-item">Tentang</li>',
                '<li class="breadcrumb-item">Menu Utama</li>',
                '<li class="breadcrumb-item"><a href="' . route('tentang_visi_misi_admin') . '">Visi & Misi</a></li>'
            ];
            $title = 'Visi & Misi';
        }
        if (request()->routeIs('tentang_tugas_fungsi_admin')) {
            $tentang = Landing::where('bagian', 'tugas')->get()->first();
            $breadcumb = [
                '<li class="breadcrumb-item">Tentang</li>',
                '<li class="breadcrumb-item">Menu Utama</li>',
                '<li class="breadcrumb-item"><a href="' . route('tentang_tugas_fungsi_admin') . '">Tugas & Fungsi</a></li>'
            ];
            $title = 'Tugas & Fungsi';
        }
        if (request()->routeIs('tentang_struktur_ppid_admin')) {
            $tentang = Landing::where('bagian', 'struktur')->get()->first();
            $breadcumb = [
                '<li class="breadcrumb-item">Tentang</li>',
                '<li class="breadcrumb-item">Menu Utama</li>',
                '<li class="breadcrumb-item"><a href="' . route('tentang_struktur_ppid_admin') . '">Struktur Organisasi</a></li>'
            ];
            $title = 'Struktur Organisasi';
        }
        if (request()->routeIs('regulasi_dashboard')) {
            $tentang = Landing::where('bagian', 'regulasi')->get()->first();
            $breadcumb = [
                '<li class="breadcrumb-item">Tentang</li>',
                '<li class="breadcrumb-item">Menu Utama</li>',
                '<li class="breadcrumb-item"><a href="' . route("regulasi_dashboard") . '">Regulasi</a></li>'
            ];
            $title = 'Regulasi';
        }

        // BAGIAN FORMULIR PERMOHONAN
        if (request()->routeIs('formulir_permohonan')) {
            $tentang = Formulir::where('jenis_formulir', 'permohonan')->get()->first();
            $breadcumb = [
                '<li class="breadcrumb-item">Menu Utama</li>',
                '<li class="breadcrumb-item">Formulir</li>',
                '<li class="breadcrumb-item"><a href="' . route('formulir_permohonan') . '">Permohonan Informasi Publik</a></li>'
            ];
            $title = 'Permohonan Informasi Publik';
        }
        if (request()->routeIs('formulir_keberatan')) {
            $tentang = Formulir::where('jenis_formulir', 'keberatan')->get()->first();
            $breadcumb = [
                '<li class="breadcrumb-item">Menu Utama</li>',
                '<li class="breadcrumb-item">Formulir</li>',
                '<li class="breadcrumb-item"><a href="' . route('formulir_keberatan') . '">Keberatan Layanan Informasi Publik</a></li>'
            ];
            $title = 'Keberatan Layanan Informasi Publik';
        }
        if (request()->routeIs('formulir_sengketa')) {
            $tentang = Formulir::where('jenis_formulir', 'sengketa')->get()->first();
            $breadcumb = [
                '<li class="breadcrumb-item">Menu Utama</li>',
                '<li class="breadcrumb-item">Formulir</li>',
                '<li class="breadcrumb-item"><a href="' . route('formulir_sengketa') . '">Penyelesaian Sengketa Informasi Publik</a></li>'
            ];
            $title = 'Penyelesaian Sengketa Informasi Publik';
        }

        return view('tentang.profil', [
            'tentang' => $tentang,
            'breadcumb' => $breadcumb,
            'title' => $title,
        ]);
    }

    public function updateTentang(Request $request, $id)
    {
        if (request()->is('dashboard-formulir/update*')) {
            $request->validate([
                'judul' => 'required',
                'isi' => 'required',
                'link' => 'required',
            ], [
                'judul.required' => 'Kolom judul tidak boleh kosong.',
                'isi.required' => 'Kolom isi tidak boleh kosong.',
                'link.required' => 'Kolom link tidak boleh kosong.',
            ]);

            $tentang = Formulir::findOrFail($id);
        } else {
            if (request()->has('img')) {
                $request->validate([
                    'judul' => 'required',
                    'isi' => 'required',
                    'img' => 'mimes:png,jpg,jpeg|max:1024',
                ], [
                    'judul.required' => 'Kolom judul tidak boleh kosong.',
                    'isi.required' => 'Kolom isi tidak boleh kosong.',
                    'img.mimes' => 'Upload file dengan format jpeg, jpg, atau png.',
                    'img.max' => 'Ukuran gambar maksimal 1Mb.',
                ]);
            } else {
                $request->validate([
                    'judul' => 'required',
                    'isi' => 'required',
                ], [
                    'judul.required' => 'Kolom judul tidak boleh kosong.',
                    'isi.required' => 'Kolom isi tidak boleh kosong.',
                ]);
            }

            $tentang = Landing::findOrFail($id);
        }

        // upload gambar
        if (request()->is('dashboard-formulir/update*')) {
            $tentang->update([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'link' => $request->link ?? null
            ]);
        } else {
            $imgPath = $tentang->gambar;

            if ($request->has('img')) {
                Storage::delete(str_replace('storage/', '', $imgPath));
                $imgPath = 'storage/' . $request->file('img')->store('img');
            }

            $tentang->update([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'gambar' => $imgPath ?? null
            ]);
        }

        return redirect()->back()->with('success', 'Data berhasil diupdate.');
    }
}
