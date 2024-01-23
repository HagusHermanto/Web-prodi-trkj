-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2023 pada 12.32
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-prodi-trkj`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_akreditasi`
--

CREATE TABLE `tbl_akreditasi` (
  `id_akreditasi` int(11) NOT NULL,
  `isi` text DEFAULT NULL,
  `foto_akreditasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_akreditasi`
--

INSERT INTO `tbl_akreditasi` (`id_akreditasi`, `isi`, `foto_akreditasi`) VALUES
(1, 'Ini adalah sertifikat Akreditasi Program Studi Teknologi Rekayasa Komputer Jaringan yang di keluarkan oleh LAM INFOKOM', 'akreditasi_trkj.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `slug_berita` varchar(255) DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `gambar_berita` varchar(30) DEFAULT NULL,
  `tgl_berita` date NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul_berita`, `slug_berita`, `isi_berita`, `gambar_berita`, `tgl_berita`, `id_user`) VALUES
(4, 'Gambaran umum tentang keamanan jaringan komputer', 'gambaran-umum-tentang-keamanan-jaringan-komputer', '<p>Keamanan jaringan komputer adalah langkah-langkah dan praktik yang dilakukan untuk melindungi jaringan komputer dari ancaman dan serangan yang dapat mengakibatkan kerugian, kebocoran data, atau gangguan pada operasional sistem. Tujuan dari keamanan jaringan komputer adalah menjaga kerahasiaan, integritas, dan ketersediaan data serta menjaga kelangsungan operasional sistem.</p>\r\n\r\n<p>Berikut ini adalah gambaran umum tentang aspek-aspek penting dalam keamanan jaringan komputer:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Identifikasi dan Otentikasi:</p>\r\n\r\n	<ul>\r\n		<li>Penggunaan mekanisme identifikasi seperti username dan password untuk memverifikasi identitas pengguna.</li>\r\n		<li>Penggunaan metode otentikasi yang lebih kuat seperti penggunaan sertifikat digital atau autentikasi dua faktor.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p>Enkripsi:</p>\r\n\r\n	<ul>\r\n		<li>Menggunakan teknik enkripsi untuk melindungi data saat berada dalam perjalanan melalui jaringan.</li>\r\n		<li>Menggunakan protokol komunikasi yang aman seperti HTTPS untuk melindungi privasi dan integritas data.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p>Pengendalian Akses:</p>\r\n\r\n	<ul>\r\n		<li>Menerapkan sistem kebijakan akses yang sesuai untuk mengatur tingkat akses pengguna pada jaringan.</li>\r\n		<li>Menerapkan manajemen hak akses yang tepat untuk mencegah akses yang tidak sah atau tidak diizinkan.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p>Firewall:</p>\r\n\r\n	<ul>\r\n		<li>Menggunakan firewall sebagai pertahanan pertama untuk mengontrol lalu lintas jaringan dan membatasi akses yang tidak diinginkan.</li>\r\n		<li>Menerapkan kebijakan firewall yang ketat untuk melindungi jaringan dari serangan dan penetrasi yang tidak sah.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p>Deteksi Intrusi:</p>\r\n\r\n	<ul>\r\n		<li>Menggunakan sistem deteksi intrusi (IDS) untuk memantau aktivitas jaringan dan mendeteksi serangan atau perilaku mencurigakan.</li>\r\n		<li>Menerapkan sistem deteksi intrusi berbasis tanda tangan atau berbasis perilaku untuk mendeteksi ancaman yang berkembang.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p>Pemantauan Keamanan:</p>\r\n\r\n	<ul>\r\n		<li>Menerapkan sistem pemantauan keamanan untuk memonitor aktivitas jaringan secara kontinu.</li>\r\n		<li>Melakukan analisis log dan audit untuk mengidentifikasi aktivitas mencurigakan atau serangan yang terjadi.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p>Pemulihan Bencana:</p>\r\n\r\n	<ul>\r\n		<li>Menerapkan strategi dan prosedur pemulihan bencana untuk mengatasi kerusakan jaringan atau kehilangan data akibat serangan atau kejadian tak terduga.</li>\r\n		<li>Membuat cadangan data yang teratur dan melakukan uji pemulihan untuk memastikan pemulihan yang cepat dan efektif.</li>\r\n	</ul>\r\n	</li>\r\n</ol>\r\n\r\n<p>Keamanan jaringan komputer menjadi semakin penting mengingat perkembangan teknologi informasi dan serangan siber yang semakin kompleks. Organisasi perlu menjaga keamanan jaringan komputer mereka dengan mengimplementasikan langkah-langkah keamanan yang sesuai, mengikuti praktik terbaik, dan tetap up-to-date dengan perkembangan terbaru dalam bidang keamanan jaringan.</p>\r\n', 'course-01.jpg', '2023-06-23', NULL),
(5, 'Analisis Keamanan Jaringan Komputer pada Universitas Bung Hatta', 'analisis-keamanan-jaringan-komputer-pada-universitas-bung-hatta', '<p>Berikut ini adalah contoh daftar pustaka untuk &quot;Analisis Keamanan Jaringan Komputer pada Universitas Bung Hatta: Studi Kasus Ancaman Cybersecurity yang Dihadapi oleh Mahasiswa dan Staf Perkuliahan&quot;:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Anderson, R., &amp; Moore, T. (2009). Information security economics--and beyond. Proceedings of the 17th Annual Workshop on Economics and Information Security.</p>\r\n	</li>\r\n	<li>\r\n	<p>Dhillon, G., &amp; Backhouse, J. (2000). Information system security management in the new millennium. Communications of the ACM, 43(7), 125-128.</p>\r\n	</li>\r\n	<li>\r\n	<p>Jansen, W., &amp; Grance, T. (2011). Guidelines on security and privacy in public cloud computing. National Institute of Standards and Technology (NIST) Special Publication, 800-144.</p>\r\n	</li>\r\n	<li>\r\n	<p>Kshetri, N. (2017). Cybersecurity in the Global South: Challenges and Opportunities. Springer.</p>\r\n	</li>\r\n	<li>\r\n	<p>Landwehr, C. E., &amp; McDonell, J. R. (1996). A taxonomy of computer security flaws, with examples. Software Engineering Institute, Carnegie Mellon University.</p>\r\n	</li>\r\n	<li>\r\n	<p>Rouse, M. (2018). Cybersecurity. TechTarget.</p>\r\n	</li>\r\n	<li>\r\n	<p>Shostack, A. (2014). Threat modeling: designing for security. John Wiley &amp; Sons.</p>\r\n	</li>\r\n	<li>\r\n	<p>Whitman, M. E., &amp; Mattord, H. J. (2018). Management of information security. Cengage Learning.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Pastikan untuk mengacu pada aturan penulisan daftar pustaka yang ditentukan oleh lembaga atau jurnal akademik yang Anda gunakan. Selain itu, pastikan untuk memasukkan semua sumber referensi yang relevan dan digunakan dalam penelitian Anda.</p>\r\n', 'course-02.jpg', '2023-06-23', NULL),
(6, 'Jadwal ini mencakup beberapa tahapan utama penelitian beserta perkiraan waktu yang dibutuhkan untuk setiap tahap', 'jadwal-ini-mencakup-beberapa-tahapan-utama-penelitian-beserta-perkiraan-waktu-yang-dibutuhkan-untuk-setiap-tahap', '<p>Berikut ini adalah contoh jadwal penelitian yang dapat digunakan untuk &quot;Analisis Keamanan Jaringan Komputer pada Universitas Bung Hatta: Studi Kasus Ancaman Cybersecurity yang Dihadapi oleh Mahasiswa dan Staf Perkuliahan&quot;. Jadwal ini mencakup beberapa tahapan utama penelitian beserta perkiraan waktu yang dibutuhkan untuk setiap tahap:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Persiapan (1 minggu):</p>\r\n\r\n	<ul>\r\n		<li>Identifikasi tujuan penelitian dan rumusan masalah</li>\r\n		<li>Tinjauan literatur terkait</li>\r\n		<li>Pengumpulan bahan referensi dan literatur</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p>Perancangan Penelitian (2 minggu):</p>\r\n\r\n	<ul>\r\n		<li>Menentukan populasi penelitian</li>\r\n		<li>Memilih metode pengumpulan data</li>\r\n		<li>Desain instrumen penelitian (kuesioner, wawancara, dll.)</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p>Pengumpulan Data (4 minggu):</p>\r\n\r\n	<ul>\r\n		<li>Melakukan survei online atau wawancara</li>\r\n		<li>Mengumpulkan data dari mahasiswa dan staf perkuliahan</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p>Analisis Data (3 minggu):</p>\r\n\r\n	<ul>\r\n		<li>Mengorganisir dan mengolah data yang terkumpul</li>\r\n		<li>Menganalisis data menggunakan metode yang sesuai</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p>Pembahasan (2 minggu):</p>\r\n\r\n	<ul>\r\n		<li>Menginterpretasikan temuan dari analisis data</li>\r\n		<li>Membahas implikasi temuan terhadap keamanan jaringan komputer di Universitas Bung Hatta</li>\r\n		<li>Sintesis temuan penelitian</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p>Kesimpulan dan Rekomendasi (1 minggu):</p>\r\n\r\n	<ul>\r\n		<li>Menyimpulkan temuan penelitian</li>\r\n		<li>Membuat rekomendasi untuk peningkatan kebijakan keamanan jaringan komputer</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p>Penyusunan Laporan (2 minggu):</p>\r\n\r\n	<ul>\r\n		<li>Menulis laporan penelitian</li>\r\n		<li>Membuat presentasi berdasarkan laporan</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p>Presentasi dan Evaluasi (1 minggu):</p>\r\n\r\n	<ul>\r\n		<li>Menyajikan hasil penelitian dalam presentasi</li>\r\n		<li>Menerima umpan balik dari dosen pembimbing dan audiens</li>\r\n	</ul>\r\n	</li>\r\n</ol>\r\n\r\n<p>Harap dicatat bahwa jadwal ini bersifat fleksibel dan dapat disesuaikan dengan kebutuhan penelitian serta ketersediaan sumber daya dan waktu yang dimiliki. Pastikan untuk mengalokasikan waktu yang cukup untuk setiap tahap agar penelitian dapat dilakukan dengan baik dan menghasilkan hasil yang valid dan relevan.</p>\r\n', 'course-03.jpg', '2023-06-23', NULL),
(7, 'Berikut contoh tabel yang menggambarkan perkiraan biaya penelitian untuk', 'berikut-contoh-tabel-yang-menggambarkan-perkiraan-biaya-penelitian-untuk', '<p>Berikut contoh tabel yang menggambarkan perkiraan biaya penelitian untuk &quot;Analisis Keamanan Jaringan Komputer pada Universitas Bung Hatta: Studi Kasus Ancaman Cybersecurity yang Dihadapi oleh Mahasiswa dan Staf Perkuliahan&quot;:</p>\r\n\r\n<table>\r\n	<thead>\r\n		<tr>\r\n			<th>No.</th>\r\n			<th>Rincian Biaya</th>\r\n			<th>Perkiraan Biaya (IDR)</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>1.</td>\r\n			<td>Pengadaan perangkat keras dan perangkat lunak</td>\r\n			<td>5.000.000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2.</td>\r\n			<td>Survei online (platform, lisensi)</td>\r\n			<td>2.000.000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3.</td>\r\n			<td>Transportasi (perjalanan ke Universitas)</td>\r\n			<td>1.500.000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4.</td>\r\n			<td>Penggandaan dan pencetakan kuesioner</td>\r\n			<td>500.000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5.</td>\r\n			<td>Honorarium pembimbing dan ahli</td>\r\n			<td>3.000.000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>6.</td>\r\n			<td>Konsumsi dan akomodasi saat survei/wawancara</td>\r\n			<td>2.500.000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>7.</td>\r\n			<td>Pengolahan data dan analisis</td>\r\n			<td>1.000.000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>8.</td>\r\n			<td>Pengadaan bahan referensi dan literatur</td>\r\n			<td>500.000</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table>\r\n	<thead>\r\n		<tr>\r\n			<th>9.</th>\r\n			<th>Lain-lain (kontingensi)</th>\r\n			<th>1.000.000</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>Total</td>\r\n			<td>&nbsp;</td>\r\n			<td>17.000.000</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Perlu dicatat bahwa tabel di atas hanyalah perkiraan biaya dan angka-angka tersebut dapat bervariasi tergantung pada kebutuhan dan sumber daya yang tersedia. Selain itu, biaya penelitian juga dapat dipengaruhi oleh faktor-faktor seperti lokasi, skala penelitian, dan kebijakan universitas terkait penggunaan sumber daya. Penting untuk melakukan penyesuaian dan verifikasi lebih lanjut terhadap biaya yang sebenarnya sebelum melaksanakan penelitian.</p>\r\n', 'course-04.jpg', '2023-06-23', NULL),
(8, 'alur penelitian dengan flowchart berdasarkan penelitian diatas', 'alur-penelitian-dengan-flowchart-berdasarkan-penelitian-diatas', '<p>Maaf, sebagai model teks berbasis AI, saya tidak dapat membuat gambar flowchart secara langsung. Namun, saya dapat memberikan deskripsi alur penelitian yang dapat Anda gunakan sebagai panduan untuk membuat flowchart berdasarkan penelitian &quot;Analisis Keamanan Jaringan Komputer pada Universitas Bung Hatta: Studi Kasus Ancaman Cybersecurity yang Dihadapi oleh Mahasiswa dan Staf Perkuliahan&quot;. Berikut adalah deskripsi alur penelitian yang dapat diwakili dalam flowchart:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Tahap Persiapan:</p>\r\n\r\n	<ul>\r\n		<li>Identifikasi tujuan penelitian: Menentukan tujuan penelitian yang jelas terkait analisis keamanan jaringan komputer pada Universitas Bung Hatta.</li>\r\n		<li>Pengumpulan dan tinjauan literatur terkait: Melakukan pencarian literatur terkait keamanan jaringan komputer, studi kasus sebelumnya, dan ancaman cybersecurity yang relevan.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p>Tahap Perancangan Penelitian:</p>\r\n\r\n	<ul>\r\n		<li>Menentukan populasi penelitian: Menentukan populasi penelitian yang terdiri dari mahasiswa dan staf perkuliahan di Universitas Bung Hatta.</li>\r\n		<li>Memilih metode pengumpulan data: Memilih metode pengumpulan data yang sesuai, seperti survei online atau wawancara.</li>\r\n		<li>Desain instrumen penelitian: Membuat instrumen penelitian seperti kuesioner yang mencakup pertanyaan terkait ancaman cybersecurity.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p>Tahap Pengumpulan Data:</p>\r\n\r\n	<ul>\r\n		<li>Melakukan survei atau wawancara: Mengumpulkan data dari mahasiswa dan staf perkuliahan terkait ancaman cybersecurity yang mereka hadapi.</li>\r\n		<li>Mengumpulkan data yang relevan: Mengumpulkan data tentang pengalaman mereka dengan serangan cyber, kesadaran keamanan, kebiasaan penggunaan teknologi, dan persepsi terhadap kebijakan keamanan jaringan.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p>Tahap Analisis Data:</p>\r\n\r\n	<ul>\r\n		<li>Mengorganisir data: Mengolah dan mengorganisir data yang telah dikumpulkan dari responden.</li>\r\n		<li>Menganalisis data: Menerapkan metode analisis yang sesuai, seperti analisis statistik atau analisis tematik, untuk mengidentifikasi pola dan temuan utama.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p>Tahap Pembahasan:</p>\r\n\r\n	<ul>\r\n		<li>Menginterpretasikan temuan: Menginterpretasikan temuan dari analisis data dan menghubungkannya dengan literatur terkait.</li>\r\n		<li>Menganalisis implikasi: Menganalisis implikasi temuan terhadap keamanan jaringan komputer di Universitas Bung Hatta.</li>\r\n		<li>Diskusi dan sintesis: Melakukan diskusi dan sintesis temuan penelitian untuk menjawab rumusan masalah.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p>Tahap Kesimpulan dan Rekomendasi:</p>\r\n\r\n	<ul>\r\n		<li>Menyimpulkan temuan penelitian: Merangkum temuan penelitian secara singkat dan jelas.</li>\r\n		<li>Membuat rekomendasi: Memberikan rekomendasi untuk peningkatan kebijakan keamanan jaringan komputer di Universitas Bung Hatta berdasarkan temuan penelitian.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p>Tahap Penyusunan Laporan:</p>\r\n\r\n	<ul>\r\n		<li>Menulis laporan penelitian: Menyusun laporan penelitian dengan struktur yang jelas dan sistematis.</li>\r\n		<li>Membuat presentasi: Membuat present</li>\r\n	</ul>\r\n	</li>\r\n</ol>\r\n', 'meeting-02.jpg', '2023-06-23', NULL),
(9, 'Visi dan misi jurusan Teknologi Rekayasa Komputer Jaringan', 'visi-dan-misi-jurusan-teknologi-rekayasa-komputer-jaringan', '<p>Visi dan misi jurusan Teknologi Rekayasa Komputer Jaringan dapat bervariasi tergantung pada institusi pendidikan atau lembaga yang menyelenggarakan program studi tersebut. Namun, berikut ini adalah contoh umum dari visi dan misi jurusan Teknologi Rekayasa Komputer Jaringan:</p>\r\n\r\n<p>Visi: Menjadi jurusan yang unggul dalam pengembangan dan penerapan ilmu Teknologi Rekayasa Komputer Jaringan yang berorientasi pada kebutuhan industri, berlandaskan etika, dan mampu menghasilkan lulusan yang berkualitas serta berdaya saing di tingkat global.</p>\r\n\r\n<p>Misi:</p>\r\n\r\n<ol>\r\n	<li>Menyelenggarakan pendidikan yang berkualitas dalam bidang Teknologi Rekayasa Komputer Jaringan dengan mengikuti perkembangan terkini dalam industri dan teknologi.</li>\r\n	<li>Mengembangkan kurikulum yang komprehensif dan relevan untuk mempersiapkan mahasiswa dalam menghadapi tantangan dan kebutuhan industri.</li>\r\n	<li>Menyediakan lingkungan pembelajaran yang kondusif, termasuk fasilitas dan laboratorium yang memadai, serta didukung oleh staf pengajar yang berkualitas dan berpengalaman.</li>\r\n	<li>Mendorong penelitian dan pengembangan di bidang Teknologi Rekayasa Komputer Jaringan untuk berkontribusi pada inovasi dan penemuan baru dalam industri.</li>\r\n	<li>Menjalin kemitraan yang erat dengan industri, institusi pendidikan, dan masyarakat untuk memfasilitasi transfer pengetahuan, kerja sama riset, dan penempatan kerja bagi mahasiswa.</li>\r\n	<li>Mengembangkan kemampuan soft skills dan sikap profesional pada mahasiswa, termasuk etika kerja, kepemimpinan, kerjasama tim, dan komunikasi yang efektif.</li>\r\n	<li>Mendorong mahasiswa untuk terus mengembangkan diri, baik melalui pendidikan lanjutan, sertifikasi profesional, atau kegiatan pengembangan diri lainnya.</li>\r\n</ol>\r\n\r\n<p>Harap dicatat bahwa visi dan misi dapat bervariasi di setiap lembaga pendidikan. Oleh karena itu, sangat penting untuk merujuk pada sumber resmi seperti website institusi atau dokumen resmi yang disediakan oleh jurusan Teknologi Rekayasa Komputer Jaringan yang spesifik yang Anda minati.</p>\r\n', 'meeting-04.jpg', '2023-06-24', NULL),
(10, 'Lomba OSPF (Open Shortest Path First) pada MikroTik', 'lomba-ospf-open-shortest-path-first-pada-mikrotik', '<p>Lomba OSPF (Open Shortest Path First) pada MikroTik merupakan sebuah kompetisi di mana peserta bersaing dalam mengkonfigurasi dan mengoptimalkan jaringan menggunakan protokol OSPF pada perangkat MikroTik RouterOS. OSPF adalah protokol routing yang digunakan untuk mengirimkan informasi routing antara router dan memungkinkan penggunaan lebih dari satu jalur (path) untuk mengirimkan paket data.</p>\r\n\r\n<p>Dalam lomba OSPF MikroTik, peserta akan diuji dalam berbagai aspek terkait konfigurasi dan troubleshooting OSPF pada perangkat MikroTik. Beberapa kemungkinan tantangan yang dapat diberikan dalam lomba ini meliputi:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Konfigurasi OSPF: Peserta akan diminta untuk mengkonfigurasi OSPF pada satu atau beberapa router MikroTik. Mereka harus mengatur area OSPF, mendaftarkan interface yang terlibat, mengonfigurasi network statement, dan mengoptimalkan metrik OSPF untuk rute-rute yang ada.</p>\r\n	</li>\r\n	<li>\r\n	<p>Redistribusi: Peserta mungkin harus melakukan redistribusi rute dari protokol routing lain ke OSPF atau sebaliknya. Mereka harus memahami bagaimana melakukan redistribusi dengan benar dan mengatur metrik yang sesuai.</p>\r\n	</li>\r\n	<li>\r\n	<p>Filtering: Peserta mungkin diminta untuk melakukan filtering terhadap rute-rute OSPF dengan menggunakan fitur-fitur seperti Access List atau prefix-list. Mereka harus dapat mengimplementasikan filter sesuai dengan permintaan yang diberikan.</p>\r\n	</li>\r\n	<li>\r\n	<p>Troubleshooting: Peserta mungkin dihadapkan pada skenario troubleshooting di mana mereka harus mengidentifikasi dan memperbaiki masalah yang terkait dengan OSPF, seperti konfigurasi yang salah, rute yang hilang, atau masalah konektivitas antar router.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Lomba OSPF MikroTik dapat diadakan dalam berbagai format, seperti lomba individu atau tim. Peserta akan dinilai berdasarkan kecepatan, ketepatan, dan kemampuan mereka dalam mengkonfigurasi serta mengoptimalkan OSPF pada perangkat MikroTik.</p>\r\n\r\n<p>Pastikan untuk selalu mengikuti petunjuk resmi dan persyaratan lomba yang diberikan oleh penyelenggara untuk mendapatkan informasi yang lebih spesifik tentang rincian lomba dan aturan yang berlaku.</p>\r\n', 'video-item-bg.jpg', '2023-06-25', NULL),
(11, 'Berikut adalah beberapa buku yang dapat membantu Anda dalam memperkuat dan memotivasi berfikir kritis:', 'berikut-adalah-beberapa-buku-yang-dapat-membantu-anda-dalam-memperkuat-dan-memotivasi-berfikir-kritis', '<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>&quot;Thinking, Fast and Slow&quot; oleh Daniel Kahneman: Buku ini mengulas tentang sistem pikiran manusia, yang terdiri dari pemikiran cepat dan lambat. Kahneman mengungkapkan berbagai bias dan kesalahan yang sering muncul dalam pemikiran kita, dan membantu kita untuk mengembangkan pemikiran yang lebih kritis dan objektif.</p>\r\n	</li>\r\n	<li>\r\n	<p>&quot;Critical Thinking: An Introduction to the Basic Skills&quot; oleh William Hughes dan Jonathan Lavery: Buku ini memberikan pengantar yang komprehensif tentang berfikir kritis, termasuk analisis argumen, evaluasi sumber, dan penalaran logis. Buku ini juga dilengkapi dengan latihan-latihan yang berguna untuk mengasah keterampilan berfikir kritis.</p>\r\n	</li>\r\n	<li>\r\n	<p>&quot;The Demon-Haunted World: Science as a Candle in the Dark&quot; oleh Carl Sagan: Buku ini menyoroti pentingnya berfikir kritis dan skeptis terhadap klaim-klaim yang tidak didukung oleh bukti ilmiah. Sagan mengeksplorasi konsep-konsep ilmiah, metode ilmiah, dan pentingnya memisahkan fakta dari mitos dalam masyarakat.</p>\r\n	</li>\r\n	<li>\r\n	<p>&quot;Nudge: Improving Decisions About Health, Wealth, and Happiness&quot; oleh Richard H. Thaler dan Cass R. Sunstein: Buku ini mengulas konsep &quot;nudging&quot; atau cara untuk memengaruhi pilihan seseorang dengan cara yang lebih baik. Mereka menggali tentang bagaimana pemikiran manusia rentan terhadap bias dan kesalahan, dan memberikan strategi untuk memotivasi berfikir kritis dan membuat keputusan yang lebih baik.</p>\r\n	</li>\r\n	<li>\r\n	<p>&quot;The Art of Thinking Clearly&quot; oleh Rolf Dobelli: Buku ini mengidentifikasi dan membahas lebih dari 99 kesalahan berpikir umum yang dapat menghambat berfikir kritis. Dobelli memberikan wawasan praktis dan tips untuk menghindari kesalahan-kesalahan tersebut dan memperbaiki kualitas pemikiran kita.</p>\r\n	</li>\r\n	<li>\r\n	<p>&quot;Predictably Irrational: The Hidden Forces That Shape Our Decisions&quot; oleh Dan Ariely: Buku ini mengungkapkan berbagai bias dan irasionalitas yang mempengaruhi keputusan kita sehari-hari. Ariely menunjukkan bagaimana pemikiran kritis dapat membantu mengatasi kecenderungan ini dan membuat keputusan yang lebih baik.</p>\r\n	</li>\r\n	<li>\r\n	<p>&quot;Cracking the Critical Thinking Skills: Activities for Better Decision-Making&quot; oleh Jennifer Wilson dan Katherine L. McAlpine: Buku ini berisi kumpulan aktivitas dan latihan untuk mengembangkan keterampilan berfikir kritis. Aktivitas-aktivitas tersebut dirancang untuk melibatkan pembaca dalam pemikiran kritis, analisis, evaluasi bukti, dan pengambilan keputusan.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Semoga buku-buku ini dapat membantu Anda dalam memotivasi dan mengasah keterampilan berfikir kritis Anda.</p>\r\n', 'apply-bg.jpg', '2023-06-25', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `id_dosen` int(11) NOT NULL,
  `nidn` varchar(50) DEFAULT NULL,
  `nama_dosen` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  `foto_dosen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`id_dosen`, `nidn`, `nama_dosen`, `tempat_lahir`, `tgl_lahir`, `pendidikan`, `foto_dosen`) VALUES
(0, '2010017514', 'Doni', 'Antartika', '1986-02-01', 'S2', '23_1.png'),
(0, '2010017515', 'Dodi Magales', 'De Janero', '1989-06-01', 'S2', '23_2.jpg'),
(0, '2010017516', 'Topan Angin', 'Ujung Gurun', '1990-06-01', 'S2', '23_4.jpg'),
(0, '2010017517', 'Kasinah', 'Padang Pasir', '1992-05-01', 'S2', '23_5.png'),
(0, '2010017518', 'Siti Nur', 'Padang Timur', '1996-04-16', 'S2', '23_7.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_embeded`
--

CREATE TABLE `tbl_embeded` (
  `id_embeded` int(11) NOT NULL,
  `kata_pengantar` text NOT NULL,
  `foto_lab` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_embeded`
--

INSERT INTO `tbl_embeded` (`id_embeded`, `kata_pengantar`, `foto_lab`) VALUES
(1, '<p>kata pengantar mengenai laboratorium Embedded System dalam program studi Teknologi Rekayasa Komputer Jaringan. Laboratorium ini memiliki peran yang sangat penting dalam pendidikan dan penelitian di bidang Embedded System.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Laboratorium Embedded System adalah tempat di mana mahasiswa dan para profesional dapat menggali lebih dalam tentang desain, pengembangan, dan implementasi sistem terbenam yang berhubungan dengan teknologi rekayasa komputer jaringan. Di dalam laboratorium ini, mereka dapat mempelajari dan menguji perangkat keras terkait, mikrokontroler, serta memahami prinsip dan teknik pemrograman untuk sistem terbenam.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dalam lingkungan laboratorium yang dilengkapi dengan peralatan dan perangkat keras terkini, mahasiswa dan para profesional memiliki kesempatan untuk mengembangkan keterampilan praktis dalam merancang dan mengimplementasikan sistem terbenam yang efisien dan andal. Mereka dapat melakukan pengujian, pemrograman, serta melakukan integrasi dan pengujian sistem dalam lingkungan jaringan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Selain itu, laboratorium ini juga menjadi tempat yang ideal untuk melakukan penelitian dalam bidang Embedded System. Para peneliti dapat mengembangkan prototipe baru, menguji kehandalan dan performa sistem terbenam, serta menerapkan teknologi jaringan untuk memperluas fungsionalitas sistem. Laboratorium ini memfasilitasi eksperimen dan penelitian yang berfokus pada konektivitas jaringan, keamanan, dan aplikasi IoT (Internet of Things) dalam konteks sistem terbenam.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Saya ingin mengucapkan terima kasih kepada semua pihak yang telah mendukung pendirian laboratorium Embedded System ini. Saya berharap laboratorium ini akan menjadi pusat kegiatan ilmiah yang memberikan kontribusi signifikan dalam pengembangan pengetahuan, inovasi, dan kemajuan dalam bidang Embedded System dalam konteks Teknologi Rekayasa Komputer Jaringan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Terima kasih atas perhatian dan dukungan yang diberikan. Saya yakin laboratorium Embedded System ini akan menjadi lingkungan yang inspiratif bagi para mahasiswa, peneliti, dan profesional untuk mewujudkan inovasi dan kemajuan dalam bidang Teknologi Rekayasa Komputer Jaringan, khususnya dalam domain Embedded System.</p>\r\n', 'facts-bg.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_fasilitas`
--

CREATE TABLE `tbl_fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `keterangan` text NOT NULL,
  `foto_fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_fasilitas`
--

INSERT INTO `tbl_fasilitas` (`id_fasilitas`, `nama`, `keterangan`, `foto_fasilitas`) VALUES
(1, 'Labor Jaringan', 'Laboratorium jaringan untuk membantu mahasiswa dan peneliti mempelajari, menguji, dan mengembangkan jaringan komputer. Laboratorium ini dilengkapi dengan perangkat keras dan perangkat lunak yang relevan dengan jaringan, sehingga mahasiswa dapat mendapatkan pengalaman praktis dalam mengelola, mengamankan, dan mengoptimalkan jaringan.', 'jaringan.jpg'),
(2, 'Lab Multimedia', 'Laboratorium multimedia adalah fasilitas yang digunakan dalam bidang multimedia untuk mendukung pembelajaran, penelitian, dan pengembangan solusi multimedia. Laboratorium ini dilengkapi dengan perangkat keras dan perangkat lunak yang relevan dengan produksi, pengolahan, dan distribusi konten multimedia.', 'multimedia.jpg'),
(3, 'Labor Komputer', 'Laboratorium komputer adalah fasilitas yang digunakan untuk kegiatan praktikum, penelitian, dan pembelajaran terkait dengan bidang komputer. Laboratorium ini dilengkapi dengan perangkat keras dan perangkat lunak yang relevan dengan ilmu komputer, sehingga mahasiswa dan peneliti dapat mengembangkan keterampilan praktis, melakukan eksperimen, dan menjalankan program atau aplikasi.', 'komputer.jpg'),
(4, 'Labor Embeded System', 'Laboratorium sistem terbenam (embedded system) adalah fasilitas yang digunakan untuk kegiatan praktikum, penelitian, dan pembelajaran terkait dengan pengembangan dan pengujian sistem terbenam. Sistem terbenam adalah sistem komputer yang tertanam dalam perangkat elektronik atau mesin lainnya untuk menjalankan fungsi khusus.', 'iot.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_file`
--

CREATE TABLE `tbl_file` (
  `id_file` int(11) NOT NULL,
  `ket_file` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_file`
--

INSERT INTO `tbl_file` (`id_file`, `ket_file`, `file`) VALUES
(1, 'HIMa1', 'sm5.pdf'),
(3, 'Sk ', 'LHS.pdf'),
(4, 'Sertifikat', 'SPTJM.pdf'),
(5, 'KTM', 'Trankskrip1.pdf'),
(6, 'TRKJ1', 'sm5.pdf'),
(7, 'TRKJ2', 'LHS.pdf'),
(8, 'TRKJ3', 'SPTJM.pdf'),
(9, 'TRKJ4', 'Trankskrip1.pdf'),
(10, 'Semester1', 'sm5.pdf'),
(11, 'Semester2', 'LHS.pdf'),
(12, 'Semester3', 'SPTJM.pdf'),
(13, 'Semester4', 'Trankskrip1.pdf'),
(14, 'Semester5', 'sm5.pdf'),
(15, 'Semester6', 'LHS.pdf'),
(16, 'Semester7', 'SPTJM.pdf'),
(17, 'Semester8', 'Trankskrip1.pdf'),
(18, 'Sertifikat Akreditasi TRKJ', 'Sertifikat_Akreditasi_TRKJ_2023.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_foto`
--

CREATE TABLE `tbl_foto` (
  `id_foto` int(11) NOT NULL,
  `id_gallery` int(11) NOT NULL,
  `ket_foto` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_foto`
--

INSERT INTO `tbl_foto` (`id_foto`, `id_gallery`, `ket_foto`, `foto`) VALUES
(1, 1, 'Kegiatan', 'meeting-02.jpg'),
(2, 1, 'KBM', 'course-01.jpg'),
(3, 1, 'HMMJ', 'course-02.jpg'),
(4, 1, 'DGGD', 'course-04.jpg'),
(6, 2, 'qdegf', 'meeting-01.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(11) NOT NULL,
  `nama_gallery` text NOT NULL,
  `sampul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `nama_gallery`, `sampul`) VALUES
(1, 'TRKJ', 'apply-bg.jpg'),
(2, 'Dosen', 'meeting-03.jpg'),
(3, 'jkj', 't.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jaringan`
--

CREATE TABLE `tbl_jaringan` (
  `id_jaringan` int(11) NOT NULL,
  `kata_pengantar` text NOT NULL,
  `foto_lab` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_jaringan`
--

INSERT INTO `tbl_jaringan` (`id_jaringan`, `kata_pengantar`, `foto_lab`) VALUES
(1, '<p>Kata pengantar mengenai laboratorium jaringan komputer dalam bidang Teknologi Rekayasa Komputer Jaringan. Laboratorium ini memiliki peran yang sangat penting dalam mendukung pendidikan dan penelitian di bidang yang berkaitan dengan jaringan komputer.</p>\r\n\r\n<p>Laboratorium jaringan komputer adalah lingkungan yang vital bagi mahasiswa dan para profesional untuk mengembangkan pemahaman dan keterampilan praktis dalam desain, implementasi, dan manajemen jaringan komputer. Di dalam laboratorium ini, mereka dapat mempelajari berbagai protokol jaringan, teknik pengaturan jaringan, dan keamanan jaringan. Selain itu, mereka juga dapat menjalankan eksperimen dan simulasi yang membantu dalam memahami perilaku jaringan komputer dalam berbagai skenario.</p>\r\n\r\n<p>Melalui fasilitas laboratorium yang lengkap dengan perangkat keras dan perangkat lunak terkini, mahasiswa dan para profesional dapat menguji dan mempelajari berbagai teknologi jaringan, seperti jaringan nirkabel, jaringan berbasis IP, jaringan berkecepatan tinggi, dan jaringan seluler. Mereka juga dapat menggali topik-topik yang sedang berkembang, seperti jaringan definisi perangkat lunak (SDN), virtualisasi jaringan, dan kecerdasan buatan dalam jaringan.</p>\r\n\r\n<p>Laboratorium jaringan komputer juga menjadi tempat yang ideal untuk melakukan penelitian dalam teknologi rekayasa komputer jaringan. Para peneliti dapat mengembangkan dan menguji prototipe baru, menganalisis performa jaringan, dan merancang solusi inovatif untuk meningkatkan efisiensi dan keamanan jaringan.</p>\r\n\r\n<p>Saya ingin mengucapkan terima kasih kepada semua pihak yang telah mendukung pembangunan laboratorium jaringan komputer ini. Laboratorium ini akan menjadi sarana yang berharga bagi pengembangan pengetahuan dan keahlian di bidang Teknologi Rekayasa Komputer Jaringan. Saya berharap laboratorium ini dapat memberikan kontribusi yang signifikan dalam menghasilkan penelitian yang berdaya saing dan inovasi teknologi yang memajukan bidang ini.</p>\r\n\r\n<p>Terima kasih atas perhatian dan dukungan yang diberikan. Saya berharap laboratorium jaringan komputer ini akan menjadi pusat kegiatan ilmiah yang bermanfaat bagi mahasiswa, para peneliti, dan industri.</p>\r\n', 'meeting-02.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komputasi`
--

CREATE TABLE `tbl_komputasi` (
  `id_komputasi` int(11) NOT NULL,
  `kata_pengantar` text NOT NULL,
  `foto_lab` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_komputasi`
--

INSERT INTO `tbl_komputasi` (`id_komputasi`, `kata_pengantar`, `foto_lab`) VALUES
(1, '<p>Kata pengantar yang singkat mengenai laboratorium komputasi dalam bidang teknologi rekayasa komputer jaringan. Laboratorium komputasi memainkan peran yang sangat penting dalam pendidikan dan penelitian di bidang ini. Ini adalah tempat di mana mahasiswa dan para profesional dapat menggali lebih dalam konsep-konsep teoritis yang telah dipelajari dan menerapkannya dalam lingkungan praktis.</p>\r\n\r\n<p>Dalam laboratorium komputasi, mahasiswa dan para profesional memiliki kesempatan untuk mengembangkan keterampilan praktis yang diperlukan dalam teknologi rekayasa komputer jaringan. Mereka dapat menguji dan menerapkan berbagai teknik dan protokol jaringan, mengkonfigurasi perangkat keras dan perangkat lunak jaringan, serta memecahkan masalah yang berkaitan dengan keamanan dan performa jaringan. Laboratorium ini juga menjadi tempat yang ideal untuk mengembangkan dan menguji proyek-proyek inovatif yang berhubungan dengan jaringan komputer.</p>\r\n\r\n<p>Selain itu, laboratorium komputasi juga memberikan akses kepada mahasiswa dan para profesional untuk mempelajari teknologi terkini dalam bidang teknologi rekayasa komputer jaringan. Dalam lingkungan laboratorium yang dilengkapi dengan peralatan dan perangkat keras terbaru, mereka dapat menjelajahi topik-topik seperti komputasi awan, kecerdasan buatan dalam jaringan, Internet of Things (IoT), dan keamanan jaringan.</p>\r\n\r\n<p>Saya berharap laboratorium komputasi ini akan menjadi sumber daya yang berharga bagi semua yang terlibat dalam studi dan penelitian di bidang teknologi rekayasa komputer jaringan. Saya mengucapkan terima kasih kepada semua pihak yang telah mendukung pendirian laboratorium ini dan berharap bahwa fasilitas ini akan memberikan kontribusi signifikan dalam menghasilkan penelitian dan inovasi yang cemerlang di bidang ini.</p>\r\n\r\n<p>Sekali lagi, saya mengucapkan terima kasih kepada semua yang terlibat dalam pengembangan laboratorium komputasi ini. Semoga laboratorium ini menjadi wadah yang menginspirasi bagi pengembangan pengetahuan dan keahlian di bidang teknologi rekayasa komputer jaringan.</p>\r\n', 'course-03.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mk`
--

CREATE TABLE `tbl_mk` (
  `id_mk` int(11) NOT NULL,
  `nama_mk` varchar(50) DEFAULT NULL,
  `kode_mk` varchar(16) DEFAULT NULL,
  `sks` varchar(5) DEFAULT NULL,
  `semester` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_mk`
--

INSERT INTO `tbl_mk` (`id_mk`, `nama_mk`, `kode_mk`, `sks`, `semester`) VALUES
(1, 'Jaringan', '02020202', '2', '2'),
(3, 'Fisika', '0100230', '2', '2'),
(4, 'Kalkulus', '1302010', '1', '2'),
(5, 'Pancasila', '0001111', '2', '1'),
(6, 'Bahasa Indonesia', '0001112', '2', '1'),
(7, 'Jaringan Dasar', '02020201', '2', '2'),
(8, 'Fisika 2', '0100231', '2', '2'),
(9, 'Kalkulus 2', '1302011', '1', '2'),
(10, 'Pancasila 2', '0001113', '2', '1'),
(11, 'Bahasa Ingriss', '0001114', '2', '1'),
(12, 'Routing dan Switching', '02020222', '2', '2'),
(13, 'Kimia 1', '0100232', '2', '2'),
(14, 'Aljabar', '1302020', '1', '2'),
(15, 'Kebunghattaan', '0001122', '2', '1'),
(16, 'Bengkel Jaringan', '0001222', '2', '1'),
(17, 'Jaringan Lanjut', '12020201', '2', '2'),
(18, 'Robotik', '2100231', '2', '2'),
(19, 'Telekomunikasi', '1302222', '1', '2'),
(20, 'KP', '000666', '6', '7'),
(21, 'Sosial Enginering', '0001117', '2', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_multimedia`
--

CREATE TABLE `tbl_multimedia` (
  `id_multimedia` int(11) NOT NULL,
  `kata_pengantar` text NOT NULL,
  `foto_lab` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_multimedia`
--

INSERT INTO `tbl_multimedia` (`id_multimedia`, `kata_pengantar`, `foto_lab`) VALUES
(1, '<p>Kata pengantar mengenai laboratorium Multimedia dalam bidang Teknologi Rekayasa Komputer Jaringan. Laboratorium ini memiliki peran yang sangat penting dalam pendidikan dan penelitian di bidang multimedia dan teknologi jaringan.</p>\r\n\r\n<p>Laboratorium Multimedia merupakan tempat di mana mahasiswa dan para profesional dapat menjelajahi berbagai aspek multimedia, termasuk audio, video, grafik, dan interaksi pengguna. Di dalam laboratorium ini, mereka dapat mempelajari dan menguji teknik-teknik terkini dalam pengolahan dan analisis multimedia, kompresi data, pengenalan pola, serta pengembangan aplikasi multimedia yang inovatif.</p>\r\n\r\n<p>Dalam lingkungan laboratorium yang dilengkapi dengan peralatan dan perangkat keras terkini, mahasiswa dan para profesional memiliki kesempatan untuk mengembangkan keterampilan praktis dalam pengolahan gambar dan suara, pengeditan video, desain grafis, serta pengembangan antarmuka pengguna. Mereka dapat menggunakan perangkat lunak profesional dan peralatan multimedia canggih untuk menciptakan konten multimedia yang menarik dan interaktif.</p>\r\n\r\n<p>Selain itu, laboratorium ini juga memungkinkan para peneliti untuk melakukan eksperimen dan penelitian di berbagai bidang multimedia, termasuk kompresi video, pengenalan wajah, pengolahan bahasa alami, augmented reality, dan virtual reality. Laboratorium ini menjadi wadah yang ideal untuk mengembangkan solusi baru dan inovatif dalam bidang multimedia yang dapat diterapkan dalam berbagai industri, seperti hiburan, pendidikan, dan komunikasi.</p>\r\n\r\n<p>Saya ingin mengucapkan terima kasih kepada semua pihak yang telah mendukung pendirian laboratorium Multimedia ini. Saya berharap laboratorium ini akan menjadi pusat kegiatan ilmiah yang memberikan kontribusi signifikan dalam pengembangan pengetahuan dan teknologi di bidang Multimedia dalam konteks Teknologi Rekayasa Komputer Jaringan.</p>\r\n\r\n<p>Terima kasih atas perhatian dan dukungan yang diberikan. Saya yakin laboratorium Multimedia ini akan menjadi lingkungan yang inspiratif bagi para mahasiswa, peneliti, dan profesional untuk mewujudkan inovasi dan kemajuan dalam bidang Teknologi Rekayasa Komputer Jaringan.</p>\r\n', 'meeting-01.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penelitian_mahasiswa`
--

CREATE TABLE `tbl_penelitian_mahasiswa` (
  `id_penelitian` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `judul` text NOT NULL,
  `abstrak` text NOT NULL,
  `tahun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_penelitian_mahasiswa`
--

INSERT INTO `tbl_penelitian_mahasiswa` (`id_penelitian`, `nama`, `judul`, `abstrak`, `tahun`) VALUES
(1, 'Hagus Hermanto', 'manusia seringkali terjebak dalam rutinitas sehari-hari yang monoton.', 'Di tengah hiruk-pikuk kehidupan modern, manusia seringkali terjebak dalam rutinitas sehari-hari yang monoton. Dalam kebisingan dan kepadatan informasi yang terus meningkat, mungkin kita kadang-kadang merasa kehilangan keajaiban dan keindahan dalam hidup ini. Namun, di balik semua itu, dunia ini tetap menyimpan banyak kejutan dan misteri yang menanti untuk diungkap.', '2022'),
(3, 'Hermanto Hagus', 'untuk menciptakan momen ajaib yang dapat mengubah hidup kita.', 'Lebih dari itu, keajaiban juga dapat ditemukan dalam hubungan antarmanusia. Setiap orang memiliki cerita unik yang perlu didengar dan pengalaman yang berharga untuk diberikan. Saat kita membuka diri untuk berinteraksi dengan orang lain, kita dapat membangun ikatan yang kuat, berbagi pengetahuan, dan saling menginspirasi. Dalam setiap pertemuan, ada potensi untuk menciptakan momen ajaib yang dapat mengubah hidup kita.', '2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul_pengumuman` varchar(255) DEFAULT NULL,
  `isi_pengumuman` text DEFAULT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `tgl`) VALUES
(1, 'UAS 10 juli 2023', 'JSON (JavaScript Object Notation) adalah format data yang digunakan untuk menyimpan dan mengirim data dalam bentuk yang mudah dibaca dan ditulis oleh manusia, serta mudah diproses oleh komputer. JSON menggunakan sintaksis yang mirip dengan objek atau array dalam JavaScript, sehingga dapat dengan mudah diinterpretasikan oleh sebagian besar bahasa pemrograman.', '2023-06-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_prestasi`
--

CREATE TABLE `tbl_prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `nama` text DEFAULT NULL,
  `juara` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_prestasi`
--

INSERT INTO `tbl_prestasi` (`id_prestasi`, `nama`, `juara`) VALUES
(2, 'Lucas Bennett\r\nEmma Collins', 'Code Clash Challenge'),
(3, 'Ethan Parker\r\nOlivia Mitchell', 'juara 1 HackathonX 2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pres_dosen`
--

CREATE TABLE `tbl_pres_dosen` (
  `id_prestasi` int(11) NOT NULL,
  `nama` text NOT NULL,
  `juara` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pres_dosen`
--

INSERT INTO `tbl_pres_dosen` (`id_prestasi`, `nama`, `juara`) VALUES
(1, 'HAHHHAH', 'KNKINIONINB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sejarah`
--

CREATE TABLE `tbl_sejarah` (
  `id_sejarah` int(11) NOT NULL,
  `judul_sejarah` varchar(255) DEFAULT NULL,
  `foto_sejarah` varchar(255) DEFAULT NULL,
  `isi_sejarah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_sejarah`
--

INSERT INTO `tbl_sejarah` (`id_sejarah`, `judul_sejarah`, `foto_sejarah`, `isi_sejarah`) VALUES
(1, 'Universitas Bung Hatta', 'heading-bg.jpg', '<p>Universitas Bung Hatta adalah salah satu perguruan tinggi yang terletak di Kota Padang, Sumatera Barat, Indonesia. Berikut adalah sejarah singkat Universitas Bung Hatta:</p>\r\n\r\n<p>Universitas Bung Hatta didirikan pada tanggal 11 November 1961 dengan nama Akademi Ekonomi Bung Hatta. Pendirian institusi ini terinspirasi oleh Bung Hatta, yang merupakan salah satu tokoh proklamator dan wakil presiden pertama Republik Indonesia.</p>\r\n\r\n<p>Awalnya, Akademi Ekonomi Bung Hatta hanya menawarkan program pendidikan di bidang ekonomi. Namun, seiring berjalannya waktu dan berkembangnya kebutuhan masyarakat, perguruan tinggi ini mulai menambahkan program studi lainnya.</p>\r\n\r\n<p>Pada tanggal 28 November 1966, Akademi Ekonomi Bung Hatta berubah nama menjadi Institut Ilmu Sosial dan Ekonomi Bung Hatta (IISIP). Nama ini menggambarkan perluasan fokus pendidikan yang mencakup ilmu sosial dan ekonomi.</p>\r\n\r\n<p>Pada tahun 1981, IISIP berganti nama menjadi Institut Ilmu Sosial dan Ilmu Politik (IISIPOL). Perubahan nama tersebut menunjukkan penambahan program studi di bidang ilmu politik.</p>\r\n\r\n<p>Pada tanggal 24 September 2001, IISIPOL bertransformasi menjadi Universitas Bung Hatta. Transformasi ini melibatkan perluasan jangkauan pendidikan dengan penambahan program studi di berbagai disiplin ilmu.</p>\r\n\r\n<p>Seiring berjalannya waktu, Universitas Bung Hatta terus berkembang dan melahirkan berbagai program studi yang beragam di bidang ilmu sosial, ekonomi, teknik, hukum, dan lainnya. Universitas ini juga aktif dalam penelitian dan pengabdian kepada masyarakat.</p>\r\n\r\n<p>Universitas Bung Hatta memiliki visi untuk menjadi perguruan tinggi yang unggul dan berwawasan global dalam menghasilkan sumber daya manusia yang berkualitas, kreatif, inovatif, dan berdaya saing.</p>\r\n\r\n<p>Saat ini, Universitas Bung Hatta terus berkomitmen untuk memberikan pendidikan berkualitas dan berkontribusi dalam pembangunan masyarakat dan bangsa Indonesia.</p>\r\n\r\n<p><img alt=\"\" src=\"D:\\Gambar Download\\Kampus\" /></p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'Hagus', 'admin', 'admin@23', 1),
(2, 'Hermanto', 'user', 'user@trkj', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_visi`
--

CREATE TABLE `tbl_visi` (
  `id_visi` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_visi`
--

INSERT INTO `tbl_visi` (`id_visi`, `judul`, `isi`) VALUES
(3, 'Visi dan Misi Prodi Teknologi Rekayasa Komputer Jaringan', '<h2><strong>Visi:</strong></h2>\r\n\r\n<p>Menjadi jurusan yang unggul dalam pengembangan dan penerapan ilmu Teknologi Rekayasa Komputer Jaringan yang berorientasi pada kebutuhan industri, berlandaskan etika, dan mampu menghasilkan lulusan yang berkualitas serta berdaya saing di tingkat global.</p>\r\n\r\n<h2><strong>Misi:</strong></h2>\r\n\r\n<p>1. Menyelenggarakan pendidikan yang berkualitas dalam bidang Teknologi Rekayasa Komputer Jaringan dengan mengikuti perkembangan terkini dalam industri dan teknologi.</p>\r\n\r\n<p>2. Mengembangkan kurikulum yang komprehensif dan relevan untuk mempersiapkan mahasiswa dalam menghadapi tantangan dan kebutuhan industri.</p>\r\n\r\n<p>3. Menyediakan lingkungan pembelajaran yang kondusif, termasuk fasilitas dan laboratorium yang memadai, serta didukung oleh staf pengajar yang berkualitas dan berpengalaman.</p>\r\n\r\n<p>4. Mendorong penelitian dan pengembangan di bidang Teknologi Rekayasa Komputer Jaringan untuk berkontribusi pada inovasi dan penemuan baru dalam industri.</p>\r\n\r\n<p>5. Menjalin kemitraan yang erat dengan industri, institusi pendidikan, dan masyarakat untuk memfasilitasi transfer pengetahuan, kerja sama riset, dan penempatan kerja bagi mahasiswa.</p>\r\n\r\n<p>6. Mengembangkan kemampuan soft skills dan sikap profesional pada mahasiswa, termasuk etika kerja, kepemimpinan, kerjasama tim, dan komunikasi yang efektif.</p>\r\n\r\n<p>7. Mendorong mahasiswa untuk terus mengembangkan diri, baik melalui pendidikan lanjutan, sertifikasi profesional, atau kegiatan pengembangan diri lainnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penelitian`
--

CREATE TABLE `tb_penelitian` (
  `id_penelitian` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `judul` text NOT NULL,
  `abstrak` text NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_penelitian`
--

INSERT INTO `tb_penelitian` (`id_penelitian`, `nama`, `judul`, `abstrak`, `tahun`) VALUES
(1, 'Hagus', 'Thinking, Fast and Slow', 'Thinking, Fast and Slow\" oleh Daniel Kahneman: Buku ini mengulas tentang sistem pikiran manusia, yang terdiri dari pemikiran cepat dan lambat. Kahneman mengungkapkan berbagai bias dan kesalahan yang sering muncul dalam pemikiran kita, dan membantu kita untuk mengembangkan pemikiran yang lebih kritis dan objektif.', '2021'),
(4, 'Hermanto', 'membangun ikatan yang kuat, berbagi pengetahuan, dan saling menginspirasi. ', 'Lebih dari itu, keajaiban juga dapat ditemukan dalam hubungan antarmanusia. Setiap orang memiliki cerita unik yang perlu didengar dan pengalaman yang berharga untuk diberikan. Saat kita membuka diri untuk berinteraksi dengan orang lain, kita dapat membangun ikatan yang kuat, berbagi pengetahuan, dan saling menginspirasi. Dalam setiap pertemuan, ada potensi untuk menciptakan momen ajaib yang dapat mengubah hidup kita.', '2023');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_akreditasi`
--
ALTER TABLE `tbl_akreditasi`
  ADD PRIMARY KEY (`id_akreditasi`);

--
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tbl_embeded`
--
ALTER TABLE `tbl_embeded`
  ADD PRIMARY KEY (`id_embeded`);

--
-- Indeks untuk tabel `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indeks untuk tabel `tbl_foto`
--
ALTER TABLE `tbl_foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indeks untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indeks untuk tabel `tbl_jaringan`
--
ALTER TABLE `tbl_jaringan`
  ADD PRIMARY KEY (`id_jaringan`);

--
-- Indeks untuk tabel `tbl_komputasi`
--
ALTER TABLE `tbl_komputasi`
  ADD PRIMARY KEY (`id_komputasi`);

--
-- Indeks untuk tabel `tbl_mk`
--
ALTER TABLE `tbl_mk`
  ADD PRIMARY KEY (`id_mk`);

--
-- Indeks untuk tabel `tbl_multimedia`
--
ALTER TABLE `tbl_multimedia`
  ADD PRIMARY KEY (`id_multimedia`);

--
-- Indeks untuk tabel `tbl_penelitian_mahasiswa`
--
ALTER TABLE `tbl_penelitian_mahasiswa`
  ADD PRIMARY KEY (`id_penelitian`);

--
-- Indeks untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `tbl_prestasi`
--
ALTER TABLE `tbl_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indeks untuk tabel `tbl_pres_dosen`
--
ALTER TABLE `tbl_pres_dosen`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indeks untuk tabel `tbl_sejarah`
--
ALTER TABLE `tbl_sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tbl_visi`
--
ALTER TABLE `tbl_visi`
  ADD PRIMARY KEY (`id_visi`);

--
-- Indeks untuk tabel `tb_penelitian`
--
ALTER TABLE `tb_penelitian`
  ADD PRIMARY KEY (`id_penelitian`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_akreditasi`
--
ALTER TABLE `tbl_akreditasi`
  MODIFY `id_akreditasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_embeded`
--
ALTER TABLE `tbl_embeded`
  MODIFY `id_embeded` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tbl_foto`
--
ALTER TABLE `tbl_foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_jaringan`
--
ALTER TABLE `tbl_jaringan`
  MODIFY `id_jaringan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_komputasi`
--
ALTER TABLE `tbl_komputasi`
  MODIFY `id_komputasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_mk`
--
ALTER TABLE `tbl_mk`
  MODIFY `id_mk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tbl_multimedia`
--
ALTER TABLE `tbl_multimedia`
  MODIFY `id_multimedia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_penelitian_mahasiswa`
--
ALTER TABLE `tbl_penelitian_mahasiswa`
  MODIFY `id_penelitian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_prestasi`
--
ALTER TABLE `tbl_prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_pres_dosen`
--
ALTER TABLE `tbl_pres_dosen`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_sejarah`
--
ALTER TABLE `tbl_sejarah`
  MODIFY `id_sejarah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_visi`
--
ALTER TABLE `tbl_visi`
  MODIFY `id_visi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_penelitian`
--
ALTER TABLE `tb_penelitian`
  MODIFY `id_penelitian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
