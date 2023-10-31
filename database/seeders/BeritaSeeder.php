<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // INFORMASI SERTA MERTA
        Berita::create([
            'kategori' => 'informasi serta merta',
            'judul' => 'Cegah Sebaran Covid-19, UHO Terapkan Bekerja dari Rumah dan Buka Call Center untuk Sivitas Akademik',
            'slug' => str()->slug('Cegah Sebaran Covid-19, UHO Terapkan Bekerja dari Rumah dan Buka Call Center untuk Sivitas Akademik'),
            'tanggal' => '2021-01-23',
            'penulis' => 'PPID',
            'isi' => '<p>Universitas Halu Oleo memberlakukan Work From Home (WFH) atau bekerja dari rumah, mulai tanggal 12 s.d. 23 Januari 2021. Kebijakan ini tertuang pada Surat Edaran Rektor UHO tentang Penyesuaian Sistem Kerja Dosen dan Tenaga Kependidikan dalam Rangka Upaya Pencegahan Penyebaran Covid-19 di Lingkungan Universitas Halu Oleo.</p>',
            'gambar' => 'storage/img/covid-serta-merta.jpeg'
        ]);

        // DATA BERITA
        Berita::create([
            'kategori' => 'berita',
            'judul' => 'UHO Kembali Kukuhkan Empat Guru Besar',
            'slug' => str()->slug('UHO Kembali Kukuhkan Empat Guru Besar'),
            'tanggal' => '2023-09-22',
            'penulis' => 'PPID',
            'isi' => '<p>Senat Guru Besar Universitas Halu Oleo (UHO) kembali menyelenggarakan Rapat Senat Luar Biasa untuk pengukuhan empat Guru Besar pada Jumat, 22 September 2023 di gedung Auditorium Mokodompit UHO. Emp at dosen yang dikukuhkan ini berasal dari<a t itle="" href="https://feb.uho.ac.id/" target="_blank" rel="noopener">Fakultas Ekonomi dan Bisnis</a>(FEB ) dan<a t itle="" href="https://fp.uho.ac.id/" target="_blank" rel="noopener">Fakultas Pertanian</a>(FP) . Masing-masing dosen yang dikukuhkan menyampaikan orasi ilmiah dalam Rapat Senat Luar Biasa.</p> <p>Dr. Nasrul, S.E., M.Si. yang memperoleh gelar Guru Besar pada bidang Ilmu Manajemen Pemasaran (FEB) menyampaikan orasi dengan judul &ldquo;Pembangunan Loyalitas Nasabah Melalui Citra Perbankan, Kepuasan Nasabah, Komitmen, Customer Learning, dan Kualitas Layanan&rdquo;. Nasrul melakukan riset dengan menggunakan lima indikator pelayanan:<em> reliability, responsiveness, tangible, assurance,</em >dan<em>empa thy</em>. Hasil penelitiannya menunjukkan bahwa indikator terkuat untuk mengukur kualitas suatu layanan perbankan di Sulawesi Tenggara adalah aspek<em> tangible</em>.</p><p>Pidato ilmiah dengan tajuk &ldquo;Padi Adaptif Kekeringan untuk Lahan Sawah Tadah Hujan&rdquo; disampaikan oleh Dr. La Ode Afa, S.P., M.Si. yang mendapat gelar Guru Besar pada bidang Agronomi dan Hortikultura (FP). La Ode Afa menyampaikan gagasan penggunaan padi hibrida yang toleran pada kekeringan (BI599A/BP15). Padi jenis ini berpotensi dikembangkan di lahan sawah tadah hujan, karena pada kondisi kekeringan parah, produksinya dapat mencapai tiga kali lebih tinggi dibandingkan dengan varietas cek. Sementara dalam kondisi genangan, produksinya dapat menyamai varietas cek yakni di atas 6 ton per hektar.</p><p>Selanjutnya, Iskandar, S.P., M.Si., Ph.D. yang memperoleh gelar Guru Besar pada bidang Ilmu Pemberdayaan Masyarakat (FP) memberikan orasi ilmiah dengan judul &ldquo;Membangun Ketahanan dan Kesejahteraan Masyarakat Melalui Pendekatan Model Pemberdayaan Kolaborasi Multi<em> Stakeholder</em>dala m Praktik CSR di Sulawesi Tenggara&rdquo;. Riset yang dilakukan Iskandar menemukan tiga komponen penting yang menjadi kunci keberhasilan<em> Corporate Social Responsibility</em>(CSR ) yaitu: karakteristik program CSR, pelibatan para pihak, dan proses pemberdayaan kolaborasi.</p><p>Orasi ilmiah terakhir disampaikan Dr. La Ode Anto, S.E., M.Si., Ak., QIA., CA. CTT., CRP., CRPM., QGIA., CIISA., ADEAN CPA. yang mendapat gelar Guru Besar pada bidang Ilmu Akuntansi (FEB). Pidato ilmiahnya bertajuk &ldquo;Akuntansi Aset Pemerintah: Pemaknaan dalam Perspektif Pengelolaan Keuangan Daerah&rdquo;. La Ode Anto mengajukan preposisi bahwa aset pemerintah dimaknai berdasarkan sumber pendanaan, kewenangan pengelolaan, serta fungsi dan kegunaan aset. Dia menyimpulkan, pemaknaan terhadap akuntansi aset lebih dipengaruhi oleh karakteristik organisasi pemerintah dan nilai-nilai budaya yang melekat pada diri pengelola keuangan daerah.</p> <p>Setelah orasi ilmiah, keempat guru besar dikukuhkan oleh Rektor UHO Muhammad Zamrun. Sebagai bentuk komitmen dan tanggung jawab atas jabatan akademik yang disandang, pengukuhan kemudian dilanjutkan dengan penandatanganan Pakta Integritas Guru Besar.</p>',
            'gambar' => 'storage/img/uho-kembali-kukuhkan.jpeg'
        ]);
        Berita::create([
            'kategori' => 'berita',
            'judul' => 'Empat Guru Besar UHO, Dikukuhkan',
            'slug' => str()->slug('Empat Guru Besar UHO, Dikukuhkan'),
            'tanggal' => '2023-09-21',
            'penulis' => 'PPID',
            'isi' => '<p>Senat Guru Besar Universitas Halu Oleo (UHO) menyelenggarakan Rapat Senat Luar Biasa untuk pengukuhan empat Guru Besar pada Kamis, 21 September 2023 di gedung Auditorium Mokodompit UHO.  Empat dosen yang dikukuhkan ini berasal dari Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA), Fakultas Teknik (FT), serta Fakultas Keguruan dan Ilmu Pendidikan (FKIP). Masing-masing dosen yang dikukuhkan menyampaikan orasi ilmiah dalam Rapat Senat Luar Biasa.</p>
            <p>Drs. H. Muhammad Zakir Muzakkar, M.Si., Ph.D. yang memperoleh gelar Guru Besar pada bidang Ilmu Kimia Fisika (FMIPA) menyampaikan orasi dengan judul “Kajian Fundamental dan Aplikasi Sel Surya DSSC (Dye-Sensitized Solar Cells) dan PSC (Perovskite Solar Cell) sebagai Energi Listrik Alternatif dan Terbarukan”. Muhammad Zakir Muzakkar mengajukan gagasan tentang optimalisasi komponen utama DSSC yaitu zat warna, elektroda, dan larutan elektrolit yang digunakan, untuk energi pengganti bahan bakar fosil di masa depan. Prospek energi alternatif lain yang sedang ia kembangkan adalah PSC yang tidak membutuhkan zat warna. Penggunaan PSC dapat melampaui DSSC karena pada PSC cahaya matahari langsung dikonversi menjadi arus listrik.</p>
            <p>Pidato ilmiah dengan tajuk “Mitigasi Bencana Likuifaksi dengan Pendekatan Perbaikan Sifat-sifat Geoteknis Tanah” disampaikan oleh Dr.Eng. Ir. Minson Simatupang, ST., MT. yang mendapat gelar Guru Besar pada bidang Teknik Sipil (FT). Minson Simatupang menyampaikan pendekatan inovatif sekaligus ramah lingkungan untuk mengatasi likuifaksi dengan metode presipitasi kalsit (kristal kalsium karbonat). Presipitasi kalsit ini akan mengikat partikel tanah sekaligus meningkatkan tahanan likuifaksi.</p>
            <p>Selanjutnya, Dr. Nur Arfa Yanti, S.Si., M.Si. yang memperoleh gelar Guru Besar pada bidang Ilmu Mikrobiologi (FMIPA) memberikan orasi ilmiah dengan judul “Pemanfaatan Mikroorganisme untuk Produksi Bioplastik sebagai Kemasan Pangan Ramah Lingkungan”. Riset yang dilakukan Nur Arfa Yanti menunjukkan bahwa bioplastik polihidroksibutirat (PHB) dan selulosa bakterial berpotensi untuk dikembangkan sebagai kemasan pangan pengganti plastik, kaleng, dan gelas. Bahan ini selain aman, juga mudah diurai. Bioplastik PHB dapat didegradasi secara alami dalam waktu kurang lebih dua bulan. Sementara selulosa bakterial kurang lebih lima hingga tujuh hari.</p>
            <p>Orasi ilmiah terakhir disampaikan Dr. La Misu, S.Pd., M.Pd. yang mendapat gelar Guru Besar pada bidang Ilmu Pendidikan Matematika (FMIPA). Pidato ilmiahnya bertajuk “Strategi Metakognisi dalam Pembelajaran Matematika: Suatu Alternatif Pembelajaran pada Abad ke-21 dan Era Revolusi Industri 4.0”. La Misu mengajukan preposisi tentang strategi pembelajaran berkolaborasi dalam kelompok untuk berdiskusi, bertukar pikiran, berinovasi dalam membangun ide yang dituangkan dalam suatu tugas, dan saling menyuarakan ide tersebut kepada peserta didik yang lain. Strategi ini diharapkan berdampak pada meningkatnya kemampuan metakognisi dan literasi matematika peserta didik. Selain itu, dampak pengiringnya adalah munculnya kemampuan berkomunikasi, bekerja sama, berpikir kritis dalam memecahkan masalah, serta kreatif dan inovatif.</p>
            <p>Setelah orasi ilmiah, keempat guru besar dikukuhkan oleh Rektor UHO Muhammad Zamrun yang kemudian dirangkaikan dengan penandatanganan Pakta Integritas Guru Besar.***</p>',
            'gambar' => 'storage/img/empat-guru-besar.jpeg'
        ]);
        Berita::create([
            'kategori' => 'berita',
            'judul' => 'Rektor UHO Menyerahkan 24 SK Guru Besar',
            'slug' => str()->slug('Rektor UHO Menyerahkan 24 SK Guru Besar'),
            'tanggal' => '2023-09-18',
            'penulis' => 'PPID',
            'isi' => '<p>Upacara Hari Kesadaran Nasional yang diperingati pada Senin, 18 September 2023 menjadi momen yang digunakan Rektor Universitas Halu Oleo (UHO) Muhammad Zamrun &mdash;didampingi oleh Wakil Rektor II Weka Widayati&mdash; untuk menyerahkan secara resmi Surat Keputusan (SK) Penetapan Guru Besar.<em> Civitas academica</em>yang  hadir dalam upacara yang terdiri dari civitas akademika UHO menyaksikan penyerahan SK ini dengan suka cita.</p> 
            <p>Dua puluh empat Guru Besar yang menerima SK tersebut berasal dari delapan fakultas. Rektor Muhammad Zamrun menegaskan, dengan ini seluruh fakultas di lingkup UHO telah memiliki Guru Besar. Tanggal Mulai Terhitung (TMT) jabatan fungsional Guru Besar ini beragam, mulai dari 1 Mei hingga 1 September 2023.</p>
            <p>Berikut nama penerima SK Guru Besar yang mengukuhannya direncanakan akan berlangsung pada tanggal 21 &ndash; 22 September 2023:</p>
            <p><a title="" href="https://fmipa.uho.ac.id/" target="_blank" rel="noopener">Fakultas Matematika dan Ilmu Pengetahuan Alam</a></p>
            <ol>
            <li>Prof. Armid, S.Si., M.Si., M.Sc., D.Sc.</li >
            <li>Prof. Dr. Nur Arfa Yanti, S.Si., M.Si.</li>
            <li>Prof. Dr. Ida Usman, S.Si., M.Si.</li>
            <li>Prof. Dr. Suriani, M.Si.</li>
            <li>Prof. Dr. Hasria, S.Pd., M.Si.</li>
            <li>Prof. Dr. Mukhsar, S.Si., M.Si.</li>
            </ol>
            <p><a title="" href="http://eng.uho.ac.id/" target="_blank" rel="noopener">Fakultas Teknik</a></p>
            <ol start="7">
            <li>Prof. Dr. La Ode Muhammad Golok Jaya, S.T., M.T.</li>
            <li>Prof. Dr. Adris Ade Putra, S.T., M.T.</li>
            </ol>
            <p><a title="" href="https://fpik.uho.ac.id/" target="_blank" rel="noopener">Fakultas Perikanan dan Ilmu Kelautan</a></p>
            <ol start="9">
            <li>Prof. Dr. Ir. Abdul Hamid, M.Si.</li>
            <li>Prof. Agus Kurnia, S.Pi., M.Si., Ph.D.</li>
            </ol>
            <p><a title="" href="http://fkip.uho.ac.id/" target="_blank" rel="noopener">Fakultas Keguruan dan Ilmu Pendidikan</a></p>
            <ol start="11">
            <li>Prof. Dr. La Misu, S.Pd., M.Pd.</li>
            <li>Prof. Dr. Edy Karno, S.Pd., M.Pd.</li>
            <li>Prof. Albert, S.Pd., M.A., Ph.D.</li>
            <li>Prof. Dr. Mohamad Salam, S.Pd., M.Si.</li>
            </ol>
            <p><a title="" href="https://kedokteran.uho.ac.id/" target="_blank" rel="noopener">Fakultas Kedokteran</a></p>
            <ol start="15">
            <li>Prof. Dr. dr. Juminten, Sp., OG (K)</li>
            </ol>
            <p><a title="" href="https://feb.uho.ac.id/" target="_blank" rel="noopener">Fakultas Ekonomi dan Bisnis</a></p>
            <ol start="16">
            <li>Prof. Dr. Nasrul, SE., M.Si.</li>
            <li>Prof. La Ode Anto, SE., M.Si., Ak., QIA., CA</li>
            <li>Prof. Dr. Heppi Millia, SE., M.Si.</li>
            </ol>
            <p><a title="" href="https://fp.uho.ac.id/" target="_blank" rel="noopener">Fakultas Pertanian</a></p>
            <ol start="19">
            <li>Prof. Dr. La Ode Afa, M.Si.</li>
            <li>Prof. Iskandar, S.P., M.Si., Ph.D.</li>
            <li>Prof. Dr. Ir. Sitti Aida Adha Taridala, M.Si.</li>
            <li>Prof. Dr. Yani Taufik, M.Si.</li>
            <li>Prof. Dr. Hasbullah Syaf, S.P., M.Si.</li>
            </ol>
            <p><a title="" href="https://fhil.uho.ac.id/" target="_blank" rel="noopener">Fakultas Kehutanan dan Ilmu Lingkungan</a> </p>
            <p>24. Prof. Dr. Ir. La Baco, M.Si.</p>',
            'gambar' => 'storage/img/rektor uho menyerahkan.jpeg'
        ]);
        Berita::create([
            'kategori' => 'berita',
            'judul' => 'Kalender Akademik Universitas Halu Oleo Tahun Akademik 2023-2024',
            'slug' => str()->slug('Kalender Akademik Universitas Halu Oleo Tahun Akademik 2023-2024'),
            'tanggal' => '2023-07-20',
            'penulis' => 'PPID',
            'isi' => '<p>Terlampir Informasi Kalender Akademik Universitas Halu Oleo Tahun Akademik 2023-2024.<br><a href="https://uho.ac.id/wp-content/uploads/2023/07/KALENDER-AKADEMIK-TAHUN-AKADEMIK-2023-2024.pdf" data-id="https://uho.ac.id/wp-content/uploads/2023/07/KALENDER-AKADEMIK-TAHUN-AKADEMIK-2023-2024.pdf" data-type="URL">Download Kalender Akademink Tahun 2023-2024</a></p>',
        ]);
        Berita::create([
            'kategori' => 'berita',
            'judul' => 'Pemberitahuan Sistem Informasi PBJ UHO',
            'slug' => str()->slug('Pemberitahuan Sistem Informasi PBJ UHO'),
            'tanggal' => '2023-09-18',
            'penulis' => 'PPID',
            'isi' => '<p>Nomor : 3531/UN29/PBJ/2023<br>Lampiran : &ndash;<br>Perihal : Pemberitahuan Sistim Informasi PBJ UHO</p><p>Kepada Yth,<br>Pelaku Pengadaan Barang dan Jasa UHO<br>di-<br>Kendari</p><p>Dalam rangka implementasi Peraturan Rektor Nomor 2 Tahun 2023 tentang Pedoman Pengadaan Barang/Jasa Badan Layanan Umum Universitas Halu Oleo, dengan ini disampaikan bahwa proses pengadaan barang/jasa yang semula diakses pada laman: <a href="https://lpse.kemdikbud.go.id">https://lpse.kemdikbud.go.id</a>, selanjutnya Universitas Halu Oleo secara resmi menggunakan Sistem Informasi Pengadaan Barang/Jasa secara mandiri melalui laman <a href="https://si.uho.ac.id/.Untuk">https://si.uho.ac.id/.Untuk</a> Daftar Penyedia Terpilih (DPT) dapat diakses melalui <a href="https://sidapet.uho.ac.id/">https://sidapet.uho.ac.id/</a> dan tender melalui <a href="https://tender.uho.ac.id/.Informasi">https://tender.uho.ac.id/.Informasi</a> Pengadaan Barang/Jasa Universitas Halu Oleo dapat juga diakses pada laman <a href="https://uho.ac.id/">https://uho.ac.id/</a> melalui tautan cepat ProMISe UHO.</p><p>Demikian pemberitahuan ini kami sampaikan, untuk dapat dipergunakan sebagaimana mestinya.</p><p>REKTOR<br>MUHAMMAD ZAMRUN F.<br>NIP. 19720422 199803 1 001</p>',
        ]);
        Berita::create([
            'kategori' => 'berita',
            'judul' => 'Srikandi BUMN Menggugah Gerakan Untuk Lingkungan',
            'slug' => str()->slug('Srikandi BUMN Menggugah Gerakan Untuk Lingkungan'),
            'tanggal' => '2023-09-14',
            'penulis' => 'PPID',
            'isi' => '<p>Universitas Halu Oleo (UHO) terpilih sebagai salah satu tempat kegiatan <em>Srikandi BUMN Goes To Campus</em >yang dikemas dalam sesi<em> Leader Talk Show</em>. Kegiatan yang berlangsung sejak pagi hingga siang ini bertempat di Auditorium Mokodompit, Kamis 14 September 2023. Tema &ldquo;<em>Integrated Sustainability Indonesia Movement</em>&rdquo; yang diangkat dalam kesempatan ini yang memberi titik tekan pada pentingnya gerakan bersama dalam menjaga lingkungan hidup.</p>
            <p>Dalam kesempatan tersebut, salah satu pembicara adalah Direktur Sumber Daya Manusia PT Surveyor Indonesia Lussy Ariani Seba. Dia menyampaikan bahwa<em> Srikandi BUMN Goes To Campus</em>ini merupakan forum BUMN (Badan Usaha Milik Negara) yang menyasar 25 Perguruan Tinggi negeri maupun swasta di Indonesia. Oleh karena itu, dia mengajak mahasiswa agar aktif menjaga lingkungan sebab merekalah generasi emas yang akan memimpin Indonesia nanti. Di pundak mereka, misi lingkungan hijau, ditambatkan. Jika semuanya berjalan selaras, kelak diharapkan<em> Sustainable Development Goals</em>(SDG s) sudah bisa terimplementasi dengan baik di tahun 2030.</p>
            <p>Dalam sambutannya, Rektor UHO Muhammad Zamrun menyampaikan mengapresiasi kepada Srikandi BUMN yang sudah memilih UHO menjadi salah satu tujuan sosialisasi. Kehadiran para mahasiswa dalam kegiatan ini juga diharapkan dapat menambah wawasan dan kesadaran tentang peluang-peluang yang terbuka lebar di sejumlah BUMN. Dia berharap semoga kegiatan ini memberikan manfaat secara khusus bagi mahasiswa dan berimplikasi luas kepada masyarakat Sulawesi Tenggara.</p>',
            'gambar' => 'storage/img/srikandi.jpeg'
        ]);
        Berita::create([
            'kategori' => 'berita',
            'judul' => 'Rektor Menerima Mahasiswa Baru UHO Angkatan 2023',
            'slug' => str()->slug('Rektor Menerima Mahasiswa Baru UHO Angkatan 2023'),
            'tanggal' => '2023-09-04',
            'penulis' => 'PPID',
            'isi' => '<p>Ribuan mahasiswa mengikuti upacara penerimaan mahasiswa baru di Stadion Sepak Bola Universitas Halu Oleo (UHO) pada Senin, 4 September 2023. Dalam upacara penerimaan ini, Rektor UHO Muhammad Zamrun menyampaikan selamat datang kepada seluruh mahasiswa yang berhasil masuk ke UHO. Seluruh mahasiswa, khususnya di jenjang Sarjana, diterima melalui jalur Seleksi Nasional Berdasarkan Prestasi (SNBP), Seleksi Nasional Berdasarkan Tes (SNBT), atau Seleksi Mandiri Masuk (SMM) UHO.</p><p>Jumlah keseluruhan mahasiswa jenjang Strata Satu (S1) yang terjaring masuk UHO di tahun 2023 sebanyak 8.315 orang dengan rincian:</p><ul>
            <li>Fakultas Keguruan dan Ilmu Pendidikan: 1.795 orang</li>
            <li>Fakultas Ekonomi dan Bisnis: 673 orang</li>
            <li>Fakultas Ilmu Sosial dan Ilmu Politik: 1.263 orang</li>
            <li>Fakultas Pertanian: 401 orang</li>
            <li>Fakultas Teknik: 999 orang</li>
            <li>Fakultas Matematika dan Ilmu Pengetahuan Alam: 853 orang</li>
            <li>Fakultas Hukum: 383 orang</li>
            <li>Fakultas Perikanan dan Ilmu Kelautan: 220 orang</li>
            <li>Fakultas Kesehatan Masyarakat: 411 orang</li>
            <li>Fakultas Kedokteran: 168 orang</li>
            <li>Fakultas Peternakan: 120 orang</li>
            <li>Fakultas Kehutanan dan Ilmu Lingkungan: 259 orang</li>
            <li>Fakultas Ilmu Budaya: 483 orang</li>
            <li>Fakultas Farmasi: 287 orang</li>
            </ul>
            <p>Sementara mahasiswa baru Pascasarjana di tahun 2023 terdaftar 596 orang dengan rincian: jenjang Strata Dua (S2) 508 orang dan mahasiswa baru jenjang Strata Tiga (S3) sebanyak 88 orang.</p><p>Penerimaan mahasiswa ini secara simbolik ditandai dengan pemakaian jaket almamater UHO dan penyerahan dokumen mahasiswa ke masing-masing dekan fakultas dan direktur pascasarjana</p>',
            'gambar' => 'storage/img/rektor uho menerima maba.jpeg'
        ]);
        Berita::create([
            'kategori' => 'berita',
            'judul' => 'UHO Wisuda 2.568 Periode April – Juli 2023',
            'slug' => str()->slug('UHO Wisuda 2.568 Periode April – Juli 2023'),
            'tanggal' => '2023-09-04',
            'penulis' => 'PPID',
            'isi' => '<p>Universitas Halu Oleo (UHO) melangsungkan wisuda untuk jenjang sarjana dan pascasarjana pada 8 dan 9 Agustus 2023 di Auditorium Mokodompit. Kegiatan ini merupakan wisuda Program Sarjana yang ke-98, Profesi Dokter yang ke-33, Magister yang ke-65, dan Program Doktor yang ke-36. Wisuda periode April hingga Juli 2023 ini, melibatkan 2.568 wisudawan ini tersebar dengan rincian:</p>
            <ol>
            <li>Program Pascasarjana (PPs) yang terdiri dari Program Doktor sebanyak 12 orang. Jenjang mahasiswa di jenjang doktor memiliki rata-rata Indeks Prestasi Kumulatif (IPK) 3,87 dengan rata-rata lama studi 4 tahun 4 bulan. Program Magister sebanyak 104 orang dengan lPK rata-rata 3,76 dan lama studi rata-rata 2 tahun 4 bulan.</li >
            <li><a title="" href="http://fkip.uho.ac.id/" target="_blank" rel="noopener">Fakultas Keguruan dan Ilmu Pendidikan</a>(FKI P) sebanyak 458 orang sarjana, dengan IPK rata-rata 3,36 dan rata-rata lama studi 4 tahun 8 bulan. Program Magister (S2) sebanyak 33 orang dengan IPK rata-rata 3,64 dan lama rata-rata stu di 1 tahun 11 bulan.</li >
            <li><a title="" href="https://fp.uho.ac.id/" target="_blank" rel="noopener">Fakultas Pertanian</a>(FP)  sebanyak 166 orang sarjana. IPK rata-rata 3,24 dan rata-rata lama studi 5 tahun 2 bulan. Program Magister (S2) sebanyak 8 orang, dengan IPK 3,77 dan rata-rata lama studi 2 tahun 7 bulan.</li >
            <li>Fakultas Hukum (FH) sebanyak 134 orang sarjana, dengan IPK rata-rata 3,41 dan rata-rata lama studi 4 tahun 6 bulan. Program Magister (S2) sebanyak 17 orang, dengan IPK 3,91 dan rata-rata lama studi 2 tahun 1 bulan.</li >
            <li><a title="" href="https://kedokteran.uho.ac.id/" target="_blank" rel="noopener">Fakultas Kedokteran</a>(FK)  sebanyak 21 orang Sarjana, dengan rata-rata IPK 2,99 dan lama studi 4 tahun 6 bulan. Profesi Dokter sebanyak 55 orang, dengan IPK rata-rata 3,40 dan rata-rata lama studi 2 tahun 4 bulan.</li >
            <li><a title="" href="https://farmasi.uho.ac.id/" target="_blank" rel="noopener">Fakultas Farmasi</a>(FF)  sebanyak 67 orang sarjana, dengan IPK rata-rata 3,26 dan rata-rata lama studi 3 tahun 11 bulan.</li >
            <li>Fakultas Peternakan (FPt) sebanyak 47 orang sarjana, dengan IPK rata-rata 3,36 dan rata-rata lama studi 4 tahun 5 bulan. Program Magister (S2) sebanyak 4 orang, dengan IPK 4,0 dan rata-rata lama studi 1 tahun 10 bulan.</li>
            <li><a title="" href="https://fpik.uho.ac.id/" target="_blank" rel="noopener">Fakultas Perikanan dan Ilmu Kelautan</a>(FPI K) sebanyak 69 orang sarjana, dengan IPK rata-rata 3,23 dan rata-rata lama studi 4 tahun 10 bulan.</li >
            <li><a title="" href="https://feb.uho.ac.id/" target="_blank" rel="noopener">Fakultas Ekonomi dan Bisnis</a>(FEB ) sebanyak 238 orang sarjana, dengan IPK rata-rata 3,43 dan rata-rata lama studi 4 tahun 6 bulan. Program Magister (S2) sebanyak 23 orang, dengan IPK rata-rata 3,74 dan rata-rata lama studi 2 tahun 4 bulan.</li >
            <li><a title="" href="https://fmipa.uho.ac.id/" target="_blank" rel="noopener">Fakultas Matematika dan Ilmu Pengetahuan Alam</a>(FMI PA) sebanyak 220 orang sarjana, dengan IPK rata-rata 3,25 dan rata-rata lama studi 5 tahun 2 bulan. Program Magister (S2) sebanyak 10 orang, dengan IPK rata-rata 3,77 dan rata-rata lama studi 2 tahun 6 bulan. Diploma Tiga (D3) sebanyak 5 orang, dengan IPK 3,18 dan rata-rata lama studi 3 tahun 11 bulan.</li >
            <li><a title="" href="http://eng.uho.ac.id/" target="_blank" rel="noopener">Fakultas Teknik</a>(FT)  sebanyak 133 orang sarjana, dengan IPK rata-rata 3,27 dan rata-rata lama studi 5 tahun 3 bulan. Diploma Tiga sebanyak 69 orang, dengan IPK rata-rata 3,26 dan rata-rata lama studi 4 tahun 1 bulan.</li >
            <li><a title="" href="http://fkm.uho.ac.id/" target="_blank" rel="noopener">Fakultas Kesehatan Masyarakat</a>(FKM ) sebanyak 125 orang sarjana, dengan IPK rata-rata 3,62 dan rata-rata lama studi 4 tahun 1 bulan. Program Magister (S2) sebanyak 19 orang, dengan IPK rata-rata 3,82 dan rata-rata lama studi 2 tahun 9 bulan.</li >
            <li>Fakultas Ilmu Sosial dan Ilmu Politik (FISIP) sebanyak 357 orang sarjana, dengan IPK rata-rata 3,40 dan rata-rata lama studi 4 tahun 8 bulan.</li >
            <li><a title="" href="https://fib.uho.ac.id/" target="_blank" rel="noopener">Fakultas Ilmu Budaya</a>(FIB ) sebanyak 134 orang sarjana, dengan IPK rata-rata 3,43 dan rata-rata lama studi 4 tahun 8 bulan.</li >
            <li><a title="" href="https://fhil.uho.ac.id/" target="_blank" rel="noopener">Fakultas Kehutanan dan Ilmu Lingkungan</a>(FHI L) sebanyak 40 orang sarjana, dengan IPK rata-rata 3,27 dan rata-rata lama studi 4 tahun 10 bulan.</li>
            </ol>',
            'gambar' => 'storage/img/uho wisuda.jpeg'
        ]);
        Berita::create([
            'kategori' => 'berita',
            'judul' => 'Empat Amanat Utama Rektor UHO di Awal Tahun 2023',
            'slug' => str()->slug('Empat Amanat Utama Rektor UHO di Awal Tahun 2023'),
            'tanggal' => '2023-06-21',
            'penulis' => 'PPID',
            'isi' => '<p>Dalam upacara Kesadaran Nasional di lingkup Universitas Halu Oleo (UHO), Rektor Muhammad Zamrun menyampaikan empat amanat penting. Pertama, meminta semua Program Studi dan Fakultas di UHO untuk memeriksa kembali masa berlaku akreditasinya. Dengan demikian mereka dapat mempersiapkan segala hal yang dibutuhkan untuk melakukan reakreditasi atau penyesuaian akreditasi. Rektor menyampaikan pesan ini pada Selasa (17/11/2023) di Lapangan Upacara Rektorat UHO.</p>
            <p>Melengkapi amanat yang pertama tadi, Rektor meminta para Dekan dan Direktur untuk segera melakukan konversi akreditasi. Untuk unit yang masih terakreditasi B diminta untuk segera dikonversi ke akreditasi ‘Baik Sekali’. Begitu pula yang terakreditasi A, untuk dikonversi ke akreditasi ‘Unggul’. Proses tersebut diharapkan paling lambat dilaksanakan pada bulan Maret 2023. Jika terlaksana seperti waktu yang telah ditentukan tadi, diharapkan tidak ada lagi unit yang terakreditasi B atau A, melainkan sudah berganti menjadi ‘Baik Sekali’ atau ‘Unggul’.</p>
            <p>Rektor juga menyampaikan agar para pimpinan fakultas dan program studi memeriksa kembali status jabatan akademik sejumlah tenaga pendidik. Mereka yang masih Lektor, diupayakan agar dapat berada di posisi Lektor Kepala. Demikian pula yang sekarang menjabat sebagai Lektor Kepala, diharapkan agar segera dapat melakukan pengusulan untuk menjadi Guru Besar. “Pada dasarnya, ini bukan untuk kepentingan pribadi orang per orang saja, namun berimplikasi pula pada peningkatan kualitas universitas ke depan,” kata Rektor. Sebagai tambahan informasi, data saat terakhir menunjukkan, sebagian besar dosen PNS di UHO berada dalam jenjang akademik Lektor sebanyak 45,15%, Lektor Kepala 25,56%, dan Guru Besar 8,32%.</p>
            <p>Selain ketiga pesan tadi, Rektor juga meminta para dosen untuk aktif memberikan masukan, saran, dan ide untuk pengembangan UHO. Rektor menyampaikan, Dalam waktu dekat, akan ada Rapat Kerja. Usulan program-program di setiap unit sangat dibutuhkan untuk kegiatan di tahun 2023. “Universitas sudah memberi banyak hal,” kata Rektor, “karena itu sudah seharusnya kita memberi dedikasi yang lebih untuk kampus ini.” UHO memiliki 17 fakultas, termasuk Program Pendidikan Vokasi dan Pascasarjana. Selain itu terdapat 7 lembaga dan biro, serta 8 unit pelaksana teknis (UPT). Kinerja dan sinergi setiap elemen yang ada di dalamnya sangat menentukan performa UHO.***</p>',
            'gambar' => 'storage/img/empat amanat.jpg'
        ]);
        Berita::create([
            'kategori' => 'berita',
            'judul' => 'Peresmian dan Kuliah Umum Pojok Statistik UHO',
            'slug' => str()->slug('Peresmian dan Kuliah Umum Pojok Statistik UHO'),
            'tanggal' => '2022-07-21',
            'penulis' => 'PPID',
            'isi' => '<p>KENDARI, Misi Media Kampus UHO – Badan Pusat Statistik (BPS) Sulawesi Tenggara (Sultra) berkolaborasi dengan Universitas Halu Oleo (UHO) Kendari menghadirkan Pojok Statistik yang bisa dimanfaatkan seluruh civitas akademika.</p>
            <p>Pojok Statistik ini diresmikan langsung oleh Deputi Bidang Statistik Distribusi dan Jasa Badan Pusat Statistik (BPS) RI, Setianto SE ME di Gedung Kuning UHO, turut disaksikan Wakil Rektor Bidang Umum dan Keuangan UHO, Prof Dr Ir Weka Widayanti serta Kepala BPS Sultra, Agnes Widiastuti, Selasa 21 Juni 2022.</p>
            <p>Sebelum meresmikan Pojok Statistik, Setianto membawa kuliah umum kepada mahasiswa Jurusan Statistik di Gedung Lantai IV Rektorat UHO bertajuk “Membangun Sinergitas Penyelenggaraan Sistem Statistik Nasional dengan Dunia Akademisi untuk Indonesia Maju”.</p>
            <p>Kepala BPS Sultra Agnes Widiastuti menjelaskan, UHO sebagai lembaga pendidikan terbesar di Sultra memiliki jurusan statistik diharapkan bisa berkolaborasi dengan meningkatkan sumber daya manusia dan dapat menjadi sentra pembelajaran data statistik di Sulawesi Tenggara.</p>
            <p>“Dengan hadirnya pojok statistik di UHO ini diharapkan akan menjadi salah satu sarana peningkatan pelayanan publik yang akan bermanfaat bagi para dosen, mahasiswa untuk mengakses data dan informasi statistik secara lebih mudah, murah, cepat, baik data tercetak maupun data digital. Sekaligus membangun literasi statistik dalam rangka ikut mencerdaskan bangsa,” jelasnya.</p>
            <p> Pojok statistik ini juga akan dapat dimanfaatkan untuk layanan konsultasi statistik dan media untuk sosialisasi statistik. Kedepannya fasilitas, sarana dan prasarana serta fungsinya terus ditingkatkan untuk menyesuaikan dengan kebutuhan konsumen data.</p>
            <p>“Penyebarluasan dan publisitas keberadaan pelayanan pojok statistik diharapkan semakin menyeluruh agar pemanfaatannya semakin besar,” tutupnya.</p>
            <p>Sementara itu, Wakil Rektor II UHO, Prof. Weka Widayati mengatakan, pojok statistik dan kuliah umum ini akan bermanfaat bagi perguruan tinggi dan pembangunan daerah.</p>
            <p>“Kami berharap semua pihak dapat memanfaatkan dengan baik dalam mewujudkan tridharma perguruan tinggi. Semoga niat baik ini menjadi motivasi terwujud mencerdaskan anak bangsa dan juga berkontribusi terhadap kebijakan pembangunan berbasis data,” katanya.</p>
            <p>Prof Weka Widayanti mengucapkan terima kasih kepada Deputi Bidang Statistik Distribusi dan Jasa Badan Pusat Statistik Republik Indonesia, Setianto yang telah bersedia meresmikan pojok statistik dan memberikan kuliah umum.</p>
           <p>“Kami ucapkan terima kasih, karena Ini juga merupakan suatu kebahagiaan dan kebanggaan untuk kami bisa bersinergi dengan Badan Pusat Statistik,” jelasnya.</p>
           <p>Dalam kesempatan itu, Prof Weka Widayanti menyampaikan pesan dari Rektor UHO Prof Muhammad Zamrun untuk semua civitas akademika bisa memanfaatkan ini dengan baik.</p>
            <p>  “Pesan pak rektor untuk kita semua civitas akademika bisa memanfaatkan ini dengan baik, bekerjasama dan belajar bersama mewujudkan mencerdaskan bangsa dan mendukung pembangunan baik di Sultra maupun secara nasional,” tutupnya. </p>',
            'gambar' => 'storage/img/peresmian statistik.jpeg'
        ]);
        Berita::create([
            'kategori' => 'berita',
            'judul' => 'Rektor Melakukan Pelepasan Hampir Empat Ribu Mahasiswa KKN UHO',
            'slug' => str()->slug('Rektor Melakukan Pelepasan Hampir Empat Ribu Mahasiswa KKN UHO'),
            'tanggal' => '2023-08-10',
            'penulis' => 'PPID',
            'isi' => '<p>Di Ruang Senat Universitas Halu Oleo (UHO), Rektor Muhammad Zamrun pada 10 Agustus 2023 melepas mahasiswa yang akan melakukan Kuliah Kerja Nyata (KKN). Mereka terdiri dari mahasiswa KKN Reguler Batch 2 yang berjumlah 3.815 orang serta mahasiswa KKN Tematik Infrastruktur Kerjasama Kementerian Pekerjaan Umum dan Penataan Ruang (PUPR) sebanyak 105 orang. Mereka akan berada di lokasi KKN selama 30 hari yang tersebar di tujuh kabupaten dan satu kota yaitu:</p>
            <ol>
                <li>Kota Kendari</li>
                <li>Kabupaten Konawe</li>
                <li>Kabupaten Konawe Selatan</li>
                <li>Kabupaten Konawe Utara</li>
                <li>Kabupaten Kolaka</li>
                <li>Kabupaten Kolaka Timur</li>
                <li>Kabupaten Kolaka Utara, dan</li>
                <li>Kabupaten Bombana.</li>
            </ol>
            <p>Pelepasan mahasiswa KKN ini secara simbolik dilakukan Rektor dengan memakaikan jas almamater dan menyematkan tanda peserta kepada perwakilan mahasiswa. Tidak semua mahasiswa hadir dalam kesempatan ini karena keterbatasan kapasitas ruangan. Sebagian besar mengikuti acara pelepasan tersebut secara daring. Mahasiswa yang mengikuti KKN di kesempatan ini didampingi oleh 275 Dosen Pendamping Lapangan (DPL) —yang menjalani pembekalan tiga hari sebelumnya.</p>
            <p>Pemberangkatan mahasiswa ke lokasi KKN dijadwalkan pada tanggal 13-14 Agustus 2023. KKN Reguler Batch 2 berada dalam koordinasi Lembaga Pengembangan dan Penjaminan Mutu Pendidikan (LPPMP). Sementara Lembaga Penelitian dan Pengabdian Masyarakat (LPPM) mengkoordinasi kegiatan KKN Tematik Infrastruktur Kerjasama Kementerian PUPR dengan UHO.</p>
            <p>Dalam sambutannya, Rektor UHO meminta mahasiswa untuk menjadi duta kampus yang mengimplementasikan ilmu dan teknologi, serta kecakapan yang mereka punya untuk kesejahteraan masyarakat tepat mereka berada. Bukan hanya memberi, di tempat KKN mahasiswa juga dapat menambah pengetahuan baru, melalui kerja tim, kepemimpinan, adaptasi terhadap lingkungan baru, serta nilai-nilai kemandirian. Di kesempatan ini Rektor Muhammad Zamrun juga menyampaikan apresiasi atas dukungan dan kerjasama para pihak, institusi pemerintah, komunitas lokal, juga berbagai lembaga non-pemerintah yang ikut terlibat.***</p>',
            'gambar' => 'storage/img/rektor pelepasan kkn.jpg'
        ]);
    }
}
