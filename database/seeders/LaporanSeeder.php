<?php

namespace Database\Seeders;

use App\Models\ImgLaporanGambar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Laporan::create([
            'kategori' => 'layanan',
            'link' => 'https://ppid.uho.ac.id',
            'tahun' => '2023',
            'gambar' => 'img/cover-laporan1.png'
        ]);
        Laporan::create([
            'kategori' => 'layanan',
            'link' => 'https://ppid.uho.ac.id',
            'tahun' => '2022',
            'gambar' => 'img/cover-laporan1.png'
        ]);
        Laporan::create([
            'kategori' => 'layanan',
            'link' => 'https://ppid.uho.ac.id',
            'tahun' => '2021',
            'gambar' => 'img/cover-laporan1.png'
        ]);
        Laporan::create([
            'kategori' => 'layanan',
            'link' => 'https://ppid.uho.ac.id',
            'tahun' => '2020',
            'gambar' => 'img/cover-laporan1.png'
        ]);

        // LAPORAN GAMBAR
        LaporanGambar::create([
            'link' => 'https://ppid.uho.ac.id',
            'tahun' => '2023',
        ]);
        LaporanGambar::create([
            'link' => 'https://ppid.uho.ac.id',
            'tahun' => '2022',
        ]);
        LaporanGambar::create([
            'link' => 'https://ppid.uho.ac.id',
            'tahun' => '2021',
        ]);
        // INI DATA GAMBARNYA
        ImgLaporanGambar::create([
            'tahun' => '2023',
            'gambar' => 'img/berita.jpg',
        ]);
        ImgLaporanGambar::create([
            'tahun' => '2023',
            'gambar' => 'img/berita.jpg',
        ]);
        ImgLaporanGambar::create([
            'tahun' => '2023',
            'gambar' => 'img/berita.jpg',
        ]);

        ImgLaporanGambar::create([
            'tahun' => '2022',
            'gambar' => 'img/berita.jpg',
        ]);
        ImgLaporanGambar::create([
            'tahun' => '2022',
            'gambar' => 'img/berita.jpg',
        ]);

        ImgLaporanGambar::create([
            'tahun' => '2021',
            'gambar' => 'img/berita.jpg',
        ]);
    }
}
