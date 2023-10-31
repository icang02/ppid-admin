<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Landing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LandingController extends Controller
{
    // DASHBOARD METHOD
    public function data()
    {
        // if (request()->is('dashboard/landing/ppid')) {
        if (request()->routeIs('admin_landing_ppid')) {
            $ppid = Landing::where('bagian', 'ppid')->get()->first();
            return view('landing.ppid', [
                'ppid' => $ppid,
            ]);
        }
        if (request()->routeIs('admin_landing_infografis')) {
            $infografis = Landing::where('bagian', 'tata cara permohonan')->get();
            return view('landing.infografis', [
                'info' => $infografis,
            ]);
        }
        if (request()->routeIs('admin_landing_permohonan')) {
            $formulir = Landing::where('bagian', 'formulir')->get()->first();
            return view('landing.permohonan', [
                'formulir' => $formulir,
            ]);
        }
        if (request()->routeIs('admin_landing_slogan')) {
            $qoutes = Landing::where('bagian', 'qoutes')->get()->first();
            return view('landing.slogan', [
                'quotes' => $qoutes,
            ]);
        }
        if (request()->routeIs('admin_landing_footer')) {
            $infografis = Landing::where('bagian', 'footer')->get();
            return view('landing.footer', [
                'info' => $infografis,
            ]);
        }
    }


    public function update(Request $request)
    {
        if (request()->routeIs('admin_landing_ppid_update')) {
            $request->validate([
                'judul' => 'required',
                'isi' => 'required',
            ], [
                'judul.required' => 'Kolom judul tidak boleh kosong.',
                'isi.required' => 'Kolom isi tidak boleh kosong.',
            ]);

            $data = Landing::where('bagian', 'ppid')->get()->first();
        }
        if (request()->routeIs('admin_landing_slogan_update')) {
            $request->validate([
                'judul' => 'required',
                'isi' => 'required',
            ], [
                'judul.required' => 'Kolom judul tidak boleh kosong.',
                'isi.required' => 'Kolom isi tidak boleh kosong.',
            ]);

            $data = Landing::where('bagian', 'qoutes')->get()->first();
        }
        if (request()->routeIs('admin_landing_permohonan_update')) {
            $request->validate([
                'judul' => 'required',
                'isi' => 'required',
            ], [
                'judul.required' => 'Kolom judul tidak boleh kosong.',
                'isi.required' => 'Kolom isi tidak boleh kosong.',
            ]);

            $data = Landing::where('bagian', 'formulir')->get()->first();
        }
        if (request()->routeIs('admin_landing_infografis_update')) {
            $request->validate([
                'judul' => 'required',
                'img' => 'mimes:png,jpg,jpeg|max:1024',
            ], [
                'judul.required' => 'Kolom judul tidak boleh kosong.',
                'img.mimes' => 'Upload file dengan format jpeg, jpg, atau png.',
                'img.max' => 'Ukuran gambar maksimal 1Mb.',
            ]);

            $data = Landing::find($request->id);
            $imgPath = $data->gambar;


            if ($request->has('img')) {
                Storage::delete(str_replace('storage/', '', $imgPath));
                $imgPath = 'storage/' . $request->file('img')->store('img');
            }
        }
        if (request()->routeIs('admin_landing_footer_update')) {
            $request->validate([
                'judul' => 'required',
                'isi' => 'required',
            ], [
                'judul.required' => 'Kolom judul tidak boleh kosong.',
                'isi.required' => 'Kolom isi tidak boleh kosong.',
            ]);

            $data = Landing::find($request->id);
        }

        $data->update([
            'judul' => ucfirst($request->judul),
            'isi' => $request->isi ?? null,
            'gambar' => $imgPath ?? null,
        ]);

        return redirect()->back()->with('success', 'Data berhasil diupdate.');
    }
}
