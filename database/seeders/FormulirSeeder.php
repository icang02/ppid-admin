<?php

namespace Database\Seeders;

use App\Models\Formulir;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormulirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Formulir::create([
            'judul' => 'Permohonan Informasi Publik',
            'jenis_formulir' => 'permohonan',
            'isi' => '<p>Formulir permohonan informasi publik adalah dokumen yang digunakan oleh individu untuk meminta informasi publik dari lembaga pendidikan tinggi atau universitas. Formulir ini memungkinkan pihak yang berkepentingan untuk mengajukan permohonan secara resmi untuk mendapatkan akses ke informasi yang dimiliki oleh institusi. Formulir permohonan informasi publik pada PPID kampus penting untuk memastikan transparansi dan akses terhadap informasi yang dimiliki oleh institusi pendidikan tinggi, sesuai dengan peraturan dan undang-undang yang berlaku.</p>
            <h4>Persyaratan Pelayanan</h4>
            <ol>
            <li>Masyarakat.</li>
            <li>Fotokopi KTP Pemohon atau fotokopi pendirian akte lembaga publik/ormas bagi pemohon atas nama.</li>
            </ol>
            <h4>Sistem Mekanisme dan Prosedur</h4>
            <ol>
            <li>Pemohon datang ke meja layanan informasi, PPID UHO atau mengunjungi laman informasi publik.</li>
            <li>Pemohon mengisi formulir permohonan informasi publik secara langsung atau daring dengan melampirkan KTP/akta pendirian badan publik.</li>
            <li>Petugas layanan mencatat di buku registrasi dan memberitahukan nomor pendaftaran kepada pemohon.</li>
            <li>Jika permohonan disetujui lanjut ke langkah selanjutnya. Jika tidak disetujui PPID memberikan alasan tertulis dan memberikan informasi pengajuan keberatan.</li>
            <li>Jika permohonan disetujui, PPID mengajukan permohonan informasi kepada unit terkait. Hasilnya, unit kerja memberikan data kepada PPID.</li>
            <li>PPID memberikan informasi tertulis kepada pemohon informasi.</li>
            <li>Apabila pemohon telah puas terhadap respon dari PPID maka proses selesai.</li>
            <li>Apabila pemohon tidak puas terhadap respon maka dapat mengajukan keberatan di atasan PPID maka proses selesai, sedangkan apabila tidak puas terhadap respon atasan PPID maka proses berlanjut di komisi informasi.</li>
            </ol>
            <h4>Jangka Waktu Penyelesaian</h4>
            <p>Waktu penyelesaian dilaksanakan paling lambat 10 (sepuluh) hari kerja sejak diterimanya permintaan, Pejabat Pengelola Informasi dan Dokumentasi (PPID) akan menyampaikan pemberitahuan yang berisikan informasi yang diminta berada di bawah penguasaannya atau tidak, PPID dapat memperpanjang waktu paling lambat 7 (tujuh) hari kerja.</p>
            <h4>Biaya Tarif</h4>
            <p>Biaya administrasi pelayanan gratis, kecuali biaya pengganti penggandaan apabila informasi diberikan dalam versi cetak (apabila diperlukan versi cetak).</p>',
            'link' => '#',
        ]);
        Formulir::create([
            'judul' => 'Keberatan Atas Layanan Informasi Publik',
            'jenis_formulir' => 'keberatan',
            'isi' => '<h4>Alur Pengajuan Keberatan Atas Informasi</h4>
            <ol>
                <li>Pemohon informasi mengajukan keberatan atas informasi paling lambat 30 hari kerja setelah ditemukannya alasan dengan menyertakan identitas Pemohon. Pengajuan dapat dilakukan secara langsung atau jika berhalangan dapat mengisi formulir keberatan melalui laman <a target="_blank" href="https://ppid.uho.ac.id/formulir/keberatan-layanan-informasi-publik">PPID UHO</a>.</li>
                <li>PPID mencatat pengajuan dalam daftar register dan memberikan tanda bukti penerimaan keberataan atas informasi.</li>
                <li>Atasan PPID memberikan respons atas keberatan yang diajukan. Jika pemohon informasi puas terhadap respons atasan PPID maka pengajuan keberatan selesai.</li>
            </ol>
            <h4>Alasan Pengajuan Keberatan Atas Informasi</h4>
            <p>Menurut Pasal 35 UU Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik Pemohon Informasi dapat mengajukan keberatan atas informasi dengan alasan sebagai berikut :</p>
            <ol>
                <li>Penolakan atas permintaan informasi berdasarkan alasan pengecualian sebagaimana dimaksud dalam Pasal 17 UU Nomor 14 tahun 2008;</li>
                <li>Tidak disediakannya informasi berkala sebagaimana dimaksud dalam Pasal 9 UU Nomor 14 Tahun 2008;</li>
                <li>Tidak ditanggapinya permintaan informasi;</li>
                <li>Permintaan informasi ditanggapi tidak sebagaimana yang diminta;</li>
                <li>Tidak dipenuhinya permintaan informasi;</li>
                <li>Pengenaan biaya yang tidak wajar; dan/atau;</li>
                <li>Penyampaian informasi yang melebihi waktu yang diatur dalam UU Nomor 14 Tahun 2008.</li>
            </ol>',
            'link' => '#',
        ]);
        Formulir::create([
            'judul' => 'Penyelesaian Sengketa Informasi',
            'jenis_formulir' => 'sengketa',
            'isi' => '<h4>Prosedur dan Tatacara Penyelesaian Sengketa</h4>
            <p><b>Pemohon atau kuasanya mengajukan ke petugas komisi informasi</b> datang secara langsung kepada atau mengirimkan
                berkas permohonan melalui pos, email, faksimili, atau metode pengiriman berkas lainnya dalam format yang telah
                ditetapkan yang memuat :</p>
            <ol>
                <li><b>Identitas pemohon</b>: nama pribadi dan/atau nama institusi, alamat lengkap, nomor telepon yang bisa
                    dihubungi, dan nomor faksimili/alamat email (apabila ada);</li>
                <li>Uraian mengenai <b>alasan pengajuan permohonan</b> penyelesaian Sengketa Informasi Publik;</li>
                <li>Salah satu atau beberapa hal yang dimohonkan untuk <b>diputus oleh Komisi Informasi.</b></li>
            </ol>
            <p>Pemohon <b>wajib menyertakan dokumen-dokumen</b> sebagai berikut :</p>
            <ol>
                <li><b>Bukti identitas pemohon yang sah</b>, yaitu :</li>
                <ol>
                    <li>Fotokopi Kartu Tanda Penduduk, Surat Ijin Mengemudi, Paspor atau Kartu Pelajar dalam hal Pemohon adalah
                        perorangan;</li>
                    <li><b>Akta pendirian dan pengesahan badan hukum</b> baik publik maupun privat dalam hal Pemohon adalah badan
                        hukum, surat keputusan pengangkatan kepengurusan, atau akta lain yang dianggap sah;</li>
                    <li><b>Fotokopi surat kuasa</b> (apabila Pemohon didampingi kuasa).</li>
                </ol>
                <li><b>Bukti telah mengajukan permohonan informasi kepada Badan Publik</b> berupa: surat permohonan atau formulir
                    permohonan atau tanda bukti permohonan informasi; dan/atau surat pemberitahuan tertulis permohonan informasi.
                </li>
                <li><b>Bukti telah mengajukan keberatan kepada Badan Pbulik</b>, yakni surat tanggapan tertulis atas keberatan,
                    dalam hal keberatan tidak direspon oleh atasan PPID dalam waktu 30 (tiga puluh) hari sejak permohonan diajukan.
                </li>
                <li><b>Bukti-bukti lain</b> (apabila dipandang perlu).</li>
            </ol>
            <p><b>Sumber:</b> <em>Peraturan Komisi Informasi Nomor 1 Tahun 2013 tentang Prosedur Penyelesaian Sengketa Informasi
                    Publik.</em></p>',
            'link' => '#',
        ]);
    }
}
