<?php

namespace Database\Seeders;

use App\Models\InformasiPublik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InformasiPublikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InformasiPublik::create([
            'judul' => 'Informasi Publik Yang Wajib Disediakan dan Diumumkan Secara Berkala',
            'isi' => '<p>Setiap Badan Publik wajib mengumumkan informasi publik secara berkala. Informasi berkala merupakan informasi yang diperbaharui kemudian disediakan dan diumumkan kepada publik secara rutin atau berkala sekurang-kurangnya setiap 6 bulan sekali. Informasi berkala mengenai kegiatan dan kinerja Badan Publik terkait; informasi mengenai laporan keuangan; dan atau informasi lain yang diatur dalam peraturan perundang-undangan. Adapun informasi berkala yang ada di Universitas Halu Oleo sebagai berikut :</p>',
        ]);
        InformasiPublik::create([
            'judul' => 'Informasi Tersedia Setiap Saat',
            'isi' => '<p>Informasi Tersedia Setiap Saat adalah informasi yang siap tersedia untuk bisa langsung diberikan kepada Pemohon Informasi Publik ketika terdapat permohonan mengajukan permohonan atas Informasi Publik tersebut.</p>',
        ]);
        InformasiPublik::create([
            'judul' => 'Informasi Serta Merta',
            'isi' => '<p>Informasi Serta Merta adalah informasi berkaitan dengan hajat hidup orang banyak dan ketertiban umum, serta wajib diumumkan secara serta merta tanpa penundaan.</p>',
        ]);
        InformasiPublik::create([
            'judul' => 'Informasi Yang Dikecualikan',
            'isi' => '<p><strong>Informasi publik yang dikecualikan tidak dapat diberikan kepada pemohon informasi publik.</strong></p><p>Adapun Daftar Informasi yang Dikecualikan Universitas Halu Oleo sebagai berikut :</p><ol><li>Soal dan Jawaban Tes Ujian Masuk Mahasiswa. <a href="#" target="_blank" rel="noopener noreferrer">(SK Penetapan)</a></li><li>Kriteria Pengolahan Nilai, Penyajian Data, Dan Pertimbangan Seleksi Ujian Mandiri. <a href="#" target="_blank" rel="noopener noreferrer">(SK Penetapan)</a></li><li>Data Pribadi : <a href="#" target="_blank" rel="noopener noreferrer">(SK Penetapan)</a><ul><li>Pegawai (Dosen dan Tenaga Kependidikan);</li><li>Mahasiswa;</li><li>Alumni;</li><li>Mitra Kerja Sama.</li></ul></li><li>Dokumen penilaian hasil pengujian skripsi, tesis, dan disertasi dari penilai (Hasil review proposal dan rekomendasi penilai). <a href="#" target="_blank" rel="noopener noreferrer">(SK Penetapan)</a></li><li>Rancangan peraturan dan keputusan. <a href="#" target="_blank" rel="noopener noreferrer">(SK Penetapan)</a></li><li>Penelitian yang Masih Dalam Proses. <a href="#" target="_blank" rel="noopener noreferrer">(SK Penetapan)</a></li><li>Dokumen Perjanjian Kerja Sama. <a href="#" target="_blank" rel="noopener noreferrer">(SK Penetapan)</a></li><li>Dokumen Pengadaan Barang/Jasa. <a href="#" target="_blank" rel="noopener noreferrer">(SK Penetapan)</a></li><li>Dokumen Kerangka Acuan Kerja Perencanaan Pengadaan. <a href="#" target="_blank" rel="noopener noreferrer">(SK Penetapan)</a></li><li>Data Evaluasi Diri Program Studi. <a href="#" target="_blank" rel="noopener noreferrer">(SK Penetapan)</a></li><li>Dokumen Audit Internal, Laporan Hasil Audit Internal, dan Laporan Keuangan yang Belum Diaudit (Unaudited). <a href="#" target="_blank" rel="noopener noreferrer">(SK Penetapan)</a></li><li>Identitas Informan, Pelapor, Saksi, atau Korban. <a href="#" target="_blank" rel="noopener noreferrer">(SK Penetapan)</a></li><li>Dokumen penilaian hasil pengujian skripsi, tesis, dan disertasi dari penilai (Hasil review proposal dan rekomendasi penilai). <a href="#" target="_blank" rel="noopener noreferrer">(SK Penetapan)</a></li><li>Konfigurasi Data Centre, Database dan Aplikasi, serta User Name dan Password. <a href="#" target="_blank" rel="noopener noreferrer">(SK Penetapan)</a></li><li>Borang Akreditasi. <a href="#" target="_blank" rel="noopener noreferrer">(SK Penetapan)</a></li></ol>'
        ]);
    }
}
