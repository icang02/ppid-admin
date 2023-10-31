<?php

namespace Database\Seeders;

use App\Models\ListInformasiPublik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListInformasiPublikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ListInformasiPublik::create([
            'informasi_publik_id' => 1,
            'judul' => 'Informasi Tentang Profil Universitas Halu Oleo',
            'isi' => '<p>Untuk mengetahui informasi lebih lanjut silahkan mengunjungi website resmi Universitas Halu Oleo melalui link berikut : <a target="_blank" href="https://uho.ac.id">uho.ac.id</a>.</p>'
        ]);
        ListInformasiPublik::create([
            'informasi_publik_id' => 1,
            'judul' => 'Informasi Tentang Profil Pimpinan Universitas Halu Oleo',
            'isi' => '<p>Profil pimpinan Universitas Halu Oleo : <a target="_blank" href="https://uho.ac.id/profil">Profil UHO</a></p>'
        ]);
        ListInformasiPublik::create([
            'informasi_publik_id' => 1,
            'judul' => 'Daftar Fakultas di Universitas Halu Oleo',
            'isi' => '<p>Daftar Fakultas Universitas Halu Oleo dapat dilihat pada tautan berikut : <a target="_blank" href="https://uho.ac.id/fakultas">Info Fakultas UHO</a></p>'
        ]);
        ListInformasiPublik::create([
            'informasi_publik_id' => 1,
            'judul' => 'Daftar Partner & Kerja Sama Universitas Halu Oleo',
            'isi' => '<p>Untuk mengetahui informasi lebih lanjut dapat dilihat pada tautan berikut : <a target="_blank" href="https://uho.ac.id/direktori-mou/">Kerja Sama MoU</a>.</p>'
        ]);

        ListInformasiPublik::create([
            'informasi_publik_id' => 2,
            'judul' => 'Peraturan Akademik di Lingkungan Universitas Halu Oleo',
            'isi' => '<p>Berikut ini adalah link untuk mendowload Peraturan Rektor Universitas Halu Oleo Nomor 1 Tahun 2019 Tentang Peraturan Akademik Di Lingkungan Universitas Halu Oleo.</p><a target="_blank" href="https://uho.ac.id/wp-content/uploads/2023/10/Peraturan-Rektor-Nomor-1-Tahun-2019-Tentang-Peraturan-Akademik-UHO.pdf">Download File</a>'
        ]);
        ListInformasiPublik::create([
            'informasi_publik_id' => 2,
            'judul' => 'Statuta Universitas Halu Oleo dalam Pengelolaan Perguruan Tinggi',
            'isi' => '<p>Statuta UHO adalah peraturan dasar pengelolaan UHO yang digunakan sebagai landasan penyusunan peraturan dan prosedur operasional di UHO.</p><p>Berikut ini adalah link untuk mendowload <b>PERATURAN MENTERI PENDIDIKAN DAN KEBUDAYAAN REPUBLIK INDONESIA NOMOR 43 TAHUN 2012 TENTANG STATUTA UNIVERSITAS HALUOLEO<b/>.</p><a target="_blank" href="https://luk.staff.ugm.ac.id/atur/statuta/Permendiknas43-2012Unhalu.pdf">Download File</a>'
        ]);
    }
}
