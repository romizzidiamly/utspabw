-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2021 pada 13.25
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utspabw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about_me`
--

CREATE TABLE `about_me` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about_me`
--

INSERT INTO `about_me` (`id`, `deskripsi`, `gambar`) VALUES
(1, '<p>Nama saya Mar&#39;iy Romizzidi Amly, Lahir di Pekanbaru, 30 Juni 2002 di RS Ibnu Sina, Saya Anak Ke-3 dari bertiga bersaudara. Ayah saya bernama Prof. Dr. Amril M, M.A dan Ibu saya bernama Almh. Prof. Dr. Muhmidayeli, M.Ag. Ayah saya adalah Dosen di UIN SUSKA RIAU dan Ibu saya dulu juga bekerja di sana. Sejak kecil kedua oranag tua saya sangat mementingkan berpendidikan yang baik dan tinggi, dan tidak lupa juga dengan melatih keahlian khusus lainnya. Orang tua saya memberikan kebebasan cara untuk mencapai kesuksesan, baik di Pendidikan, Pekerjaan, dll.</p>\r\n\r\n<p>&emsp;&emsp;Saat 6 tahun di TK An-Namiroh 2 selama 1 tahun, lanjut ke SD di Al-Ulum Islamic School mengambil kelas Akselerasi dengan Lulus selama 5 tahun. Dari SD saya sudah suka dengan namanya pelajaran matematika &amp; TIK, makanya sewaktu pelajaran tersebut ada, saya sangat antusias. Waktu SD saya gemar bermain komputer dan juga menggambar/mendesign. dari kegemaran saya itulah saya ingin menjadi seorang IT, UI designer, maupun UX Researcher saat ini. Setelah lulus SD, saya melanjutkan pendidikan di tempat yang sama, hanya saja mengambil kelas Reguler, karena menurut saya berasa rugi jika pendidikan di SMP&amp;SMA mengambil akselerasi karena hanya 2 tahun saja. Setelah lulus di bangku SMP, sayapun melanjutkan ke MAN 2 Model Pekanbaru lewat jalur seleksi undangan. Saat SMA lah kenangan yang paling berkesan selama berserga sekolah, tidak salah zaman putih abu-abu adalah zaman terbaik.</p>\r\n\r\n<p>&emsp;&emsp;Setelah tamat dari bangku persekolahan, saya pun tertarik masuk di dalam dunia IT, seperti keinginan saya menjadi seorang IT, UI Designer, maupun UX Researcher, saya berkuliah di UIN SUSKA RIAU mengambil juurusan Teknik Informatika Angkatan 2019. setelah tamat dari perkuliahan semoga saya dapat membangun sebuah bisnis dibidang elektronik.</p>\r\n', '60d316c73a277.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `nama` varchar(300) NOT NULL,
  `ttl` varchar(200) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `nim` bigint(100) NOT NULL,
  `semester` int(10) NOT NULL,
  `jurusan` enum('Teknik Informatika','Teknik Industri','Teknik Elektro','Matematika','Sistem Informasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`nama`, `ttl`, `alamat`, `hp`, `jenis_kelamin`, `nim`, `semester`, `jurusan`) VALUES
('Mar`iy Romizzidi Amly', 'Pekanbaru, 30 juni 2002', 'Jl Rajawali Sakti Perumahan Puri Rajawali Mas Blok E 5 Kel. Tobek Godang, Kec. Tampan, Kota Pekanbaru, Provinsi Riau', '082264321989', 'Laki-Laki', 11950111714, 4, 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(20) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `alamat`, `phone`, `email`) VALUES
(1, '<p>Jl Rajawali Sakti Perumahan Puri Rajawali Mas Blok E 5 Kel. Tobek Godang, Kec. Tampan, Kota Pekanbaru, Provinsi Riau</p>\r\n', '082284321989', 'amlyromizzidi@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact_me`
--

CREATE TABLE `contact_me` (
  `id` int(20) NOT NULL,
  `nama` varchar(300) DEFAULT NULL,
  `email` varchar(600) DEFAULT NULL,
  `pesan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact_me`
--

INSERT INTO `contact_me` (`id`, `nama`, `email`, `pesan`) VALUES
(18, 'Mar`iy Romizzidi Amly', 'romiamli30@gmail.com', 'Semoga semakin sukses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `footer`
--

CREATE TABLE `footer` (
  `id` int(20) NOT NULL,
  `copyright` varchar(100) NOT NULL,
  `fb` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `yt` varchar(100) DEFAULT NULL,
  `ig` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `footer`
--

INSERT INTO `footer` (`id`, `copyright`, `fb`, `twitter`, `yt`, `ig`) VALUES
(2, 'Mar`iy Romizzidi Amly', 'https://www.facebook.com/romizzidiamly/', 'https://twitter.com/RomizzidiAmly', 'https://www.youtube.com/channel/UC0wPBE9s9Uc4-wXqXoMTgLQ', 'https://www.instagram.com/romizzidiamly__/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galery`
--

CREATE TABLE `galery` (
  `id_file` int(11) NOT NULL,
  `nama_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galery`
--

INSERT INTO `galery` (`id_file`, `nama_file`) VALUES
(31, '60d0c54786875.jpg'),
(32, '60d0c552acb1b.jpg'),
(33, '60d0c55a6e378.jpeg'),
(34, '60d0c56074854.jpg'),
(35, '60d0c567429e0.jpg'),
(36, '60d0c56e26879.jpg'),
(37, '60d0c57869b50.jpg'),
(38, '60d0c58a38272.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `gambar`, `penulis`, `judul`, `tanggal`, `deskripsi`) VALUES
(24, '60d0c63a2e126.jpg', 'Syaiful Rachman', 'Sekjen PSSI: Shin Tae-yong Ingin TC Timnas Indonesia U-18 Digelar Akhir Bulan Ini', '2021-06-21', '<p style=\"text-align:justify\"><strong>Suara.com -&nbsp;</strong><a href=\"https://www.suara.com/tag/pssi\">PSSI</a>&nbsp;akan menggelar pemusatan latihan (TC) tim nasional U-18 pada 28 Juni-15 Juli 2021 di Jakarta sebagai persiapan&nbsp;<a href=\"https://www.suara.com/tag/piala-dunia-u-20\">Piala Dunia U-20</a>&nbsp;tahun 2023.</p>\r\n\r\n<p style=\"text-align:justify\">Dikutip dari laman resmi PSSI di Jakarta, Senin (21/6/2021), Sekretaris Jenderal (Sekjen) PSSI&nbsp;<a href=\"https://www.suara.com/tag/yunus-nusi\">Yunus Nusi</a>&nbsp;mengatakan bahwa ada 144 pemain yang mengikuti TC tersebut.</p>\r\n\r\n<p style=\"text-align:justify\">&quot;Sesuai road map, pelatih Shin Tae-yong yang menginginkan TC timnas U-18 dimulai akhir bulan ini. Untuk itu, PSSI akan menyiapkan teknis pelaksanaan TC seperti hotel, tempat latihan dan pemanggilan pemain,&quot; ujar Yunus seperti dimuat Antara.</p>\r\n\r\n<p style=\"text-align:justify\">Pria asal Gorontalo tersebut memastikan TC timnas menganut sistem promosi dan degradasi.</p>\r\n\r\n<p style=\"text-align:justify\">Hal tersebut dinilai dapat menghasilkan skuad belia Garuda yang kuat dan mampu bersaing dengan negara-negara lain di Piala Dunia U-20.</p>\r\n\r\n<p style=\"text-align:justify\">TC terkini itu menjadi TC persiapan Piala Dunia U-20 pertama setelah FIFA mengeluarkan pengumuman penundaan Piala Dunia U-20 dari tahun 2021 menjadi 2023.</p>\r\n\r\n<p style=\"text-align:justify\">Sebagai tuan rumah, Indonesia bertekad tidak sekadar menghangatkan kursi penyisihan.</p>\r\n\r\n<p style=\"text-align:justify\">Presiden Joko Widodo dan PSSI menargetkan&nbsp;<a href=\"https://www.suara.com/tag/timnas-indonesia\">timnas Indonesia</a>&nbsp;dapat lolos dari fase grup.</p>\r\n'),
(25, '60d0c622d36ac.jpg', 'Iwan Supriyatna | Mohammad Fadil Djailani', 'Hingga Mei 2021, APBN Sudah Tekor Rp 219,3 Triliun', '2021-06-21', '<p style=\"text-align:justify\"><strong>Suara.com -&nbsp;</strong>Pemerintah mencatat hingga akhir Mei 2021 defisit Anggaran Pendapatan Belanja Negara (<a href=\"https://www.suara.com/tag/apbn\">APBN</a>) sudah mencapai Rp 219,3 triliun atau setara 1,32 persen dari Produk Domestik Bruto (PDB).</p>\r\n\r\n<p style=\"text-align:justify\">Menteri Keuangan&nbsp;<a href=\"https://www.suara.com/tag/sri-mulyani\">Sri Mulyani</a>&nbsp;Indrawati mengatakan, kondisi defisit ini lebih tinggi dibandingkan periode yang sama tahun lalu.</p>\r\n\r\n<p style=\"text-align:justify\">Sri Mulyani menerangkan pandemi Covid-19 membuat kinerja APBN 2021 harus bekerja keras dalam membiayai seluruh program penanganan virus corona.</p>\r\n\r\n<p style=\"text-align:justify\">&quot;Sampai dengan bulan Mei defisit APBN mencapai Rp 219 triliun atau 1,32 persen dari PDB,&quot; kata Sri Mulyani saat rapat kerja dengan DPD RI secara virtual, Senin (21/6/2021).</p>\r\n\r\n<p style=\"text-align:justify\">Baca Juga:<a href=\"https://www.suara.com/bisnis/2021/06/21/151054/hasil-dari-genjot-pajak-penerimaan-negara-tembus-rp-7264-triliun-hingga-mei-2021\" rel=\"\">Hasil dari Genjot Pajak, Penerimaan Negara Tembus Rp 726,4 Triliun Hingga Mei 2021</a></p>\r\n\r\n<p style=\"text-align:justify\">Defisit ini terjadi karena belanja negara lebih besar dibandingkan dengan pendapatan negara. Sampai Mei 2021 kata dia pendatapan negara sudah mencapai Rp 726,4 triliun, sedangkan posisi belanja negara lebih besar yakni mencapai Rp 945,7 triliun.</p>\r\n\r\n<p style=\"text-align:justify\">Jika dirincikan, pendapatan negara tersebut berasal dari penerimaan perpajakan sebesar Rp 558,9 triliun, penerimaan Negara Bukan Pajak (PNBP) baru sebesar Rp 167,1 triliun dan dana hibah tercatat sebesar Rp 1 miliar.</p>\r\n\r\n<p style=\"text-align:justify\">Sedangkan untuk belanja negara yang mencapai Rp 945,7 triliun berasal dari belanja pemerintah pusat yang terdiri dari kementerian/lembaga (K/L) dan belanja non K/L sebesar Rp 647,6 triliun, dan realisasi transfer ke daerah dan dana desa (TKDD) sebesar Rp 298 triliun.</p>\r\n'),
(26, '60d0c61366f35.jpg', 'Syaiful Rachman', 'Fakta Pertandingan Finlandia Vs Belgia, Euro 2020 22 Juni', '2021-06-21', '<p><strong>Suara.com -&nbsp;</strong>Salah satu laga pamungkas Grup B&nbsp;<a href=\"https://www.suara.com/tag/euro-2020\">Euro 2020</a>&nbsp;mempertemukan&nbsp;<a href=\"https://www.suara.com/tag/finlandia-vs-belgia\">Finlandia vs Belgia</a>. Laga yang akan digelar di St. Petersburg, Selasa (22/6/2021), merupakan partai hidup mati bagi&nbsp;<a href=\"https://www.suara.com/tag/finlandia\">Finlandia</a>&nbsp;yang baru mengantongi tiga poin.</p>\r\n\r\n<p>Berikut fakta menarik jelang duel Finlandia vs&nbsp;<a href=\"https://www.suara.com/tag/belgia\">Belgia</a>&nbsp;Selasa dini hari.</p>\r\n\r\n<p>1. Finlandia memerlukan poin penuh untuk mengamankan satu slot di babak 16 besar. Jika hasilnya seri, Finlandia juga bisa lolos asalkan Rusia kalah dari Denmark.</p>\r\n\r\n<p>2. Belgia telah memiliki 6 poin sehingga menjamin satu tempat di babak 16 besar. Namun demikian diprediksi bahwa Belgia tetap akan menurunkan kekuatan penuh untuk mendapatkan poin sempurna.</p>\r\n\r\n<p>3. Dari tujuh pertandingan melawan Belgia, Finlandia belum pernah kalah. Finlandia menang 4 kali dari Belgia dan imbang tiga kali.</p>\r\n\r\n<p>4. Belgia, di sisi lain, memiliki rekor 12 pertandingan tak terkalahkan di gelaran Euro 2020 sejak babak kualifikasi.</p>\r\n\r\n<p>5. Pada 8 laga terakhirnya, Finlandia hanya berhasil membukukan satu kemenangan dengan dua hasil seri, sisanya tumbang.</p>\r\n\r\n<p>6. Joel Pohjanpalo hampir selalu menjadi pencetak gol pertama Finlandia di turnamen antar negara.</p>\r\n\r\n<p><strong>Kontributor :&nbsp;</strong>I Made Rendika Ardian</p>\r\n'),
(27, '60d0c5f274232.jpg', 'Liberty Jemadu', 'Nimo TV Gelar Liga PUBG Mobile, Berhadiah Rp 110 Juta', '2021-06-21', '<p style=\"text-align:justify\"><strong>Suara.com -&nbsp;</strong><a href=\"https://www.suara.com/tag/nimo-tv\">Nimo TV</a>&nbsp;menyelenggarakan liga profesional&nbsp;<a href=\"https://www.suara.com/tag/pubg-mobile\">PUBG Mobile</a>&nbsp;bertajuk Nimo TV PUBGM League (NPL). Turnamen ini merupakan komitmen Nimo TV dalam mendorong perkembangan ekosistem industri esports di Indonesia.</p>\r\n\r\n<p style=\"text-align:justify\">Para Pro Player PUBG Mobile akan bertanding memperebutkan total hadiah sebesar 8000 dolar Amerika Serikat atau lebih dari Rp 110 Juta, demikian diumumkan Nimo TV dalam siaran pers yang diterima Senin (21/6/2021).</p>\r\n\r\n<p style=\"text-align:justify\">&ldquo;NPL adalah wujud nyata Nimo TV dalam membangun jalur ekosistem esports khusunya dalam game PUBG Mobile,&quot; kata Veronica, Local Manager Nimo TV Indonesia.</p>\r\n\r\n<p style=\"text-align:justify\">NPL dibagi menjadi dua babak, yakni group stage dan grand final. Babak group stage akan berlangsung selama empat hari pada 22 hingga 25 Juni 2021. Sebanyak 24 tim akan dibagi menjadi 4 grup dimana 1 map terdapat 3 grup secara acak akan bermain.</p>\r\n\r\n<p style=\"text-align:justify\">Tim-tim yang akan bertanding antara lain EVOS ESPORTS, BOOM ESPORTS, Bonafide esports, Victim Sovers, LIVESCAPE, RRQ RYU, ONIC ESPORTS, SKYLIGHTZ GAMING, Dewa United Esports, ALTER EGO ESPORTS, ENAM SEMBILAN ESPORT, MORPH TEAM, TAKAE ESPORTS, FORSAKE, KING23ESPORT, The Fixers Ners, AJFC.ID, Seiryu O2, Power Danger Esports, MIKAIL ESPORT, Monochrome Alpha, NI9HTMARE, SUPPLY BANG dan XCN Dewa.</p>\r\n\r\n<p style=\"text-align:justify\">Selanjutnya 16 tim terbaik akan bertanding di grand final dan bertemu spesial tim yaitu Bigetron Red Aliens sang juara Nimo TV Training League PUBG Mobile. Grand final akan berlangsung selama dua hari pada 28 hingga 29 Juni 2021.</p>\r\n\r\n<p style=\"text-align:justify\">NPL akan diramaikan oleh caster ternama tanah air antara lain Bro Pasta, El Dogee dan Nona Berlian. Selain itu akan ada bagi-bagi giveaway saat live streaming. Seluruh pertandingan akan disiarkan secara LIVE di Nimo TV. Group Stage mulai dari pk 15.45 WIB dan Grand Final pukul 14.30 WIB.</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(28, '60d0c5e744986.jpeg', 'Rahajeng Kusumo Hastuti', 'Covid-19 Meroket, Kasus Kematian di Jakarta Cetak Rekor', '2021-06-21', '<p style=\"text-align:justify\"><strong>Jakarta, CNBC Indonesia</strong>- Kasus Covid-19 di Indonesia semakin menanjak dan terus mencetak rekor dalam sepekan terakhir. Kini total kasus di tanah air telah mencapai 2 juta kasus dengan DKI Jakarta yang masih menjadi pusat penyebaran virus.</p>\r\n\r\n<p style=\"text-align:justify\">DKI Jakarta juga mencatatkan rekor penambahan kasus kematian sebanyak hari ini kasus kematian bertambah 74 kasus dan menjadi yang tertinggi di antara provinsi lainnya. Dengan begitu jumlah kematian akibat virus ini di Jakarta totalnya 7.842 kasus.</p>\r\n\r\n<p style=\"text-align:justify\">Dalam sepekan terakhir Ibu Kota juga terus mencatatkan rekor penambahan kasus kematian, padahal sebelumnya angka kematian tertinggi tercatat pada Februari dengan penambahan 62 kasus. Pada Minggu (20/06/2021) kasus kematian bertambah 69 dan sempat menjadi yang tertinggi. Artinya hanya dalam beberapa hari angka kematian tertinggi kembali dicatatkan oleh Jakarta.</p>\r\n\r\n<p style=\"text-align:justify\">Satgas penanganan Covid-19 mencatat kelompok usia lebih dari 60 tahun atau lansia mendominasi angka kematian di DKI Jakarta sebanyak 75,6%. Kemudian kelompok usia 46-59 tahun sebanyak 17,6%, dan kelompok usia 31-45 sebanyak 5%.</p>\r\n\r\n<p style=\"text-align:justify\">Meski demikian, provinsi dengan angka kematian tertinggi masih dicatatkan oleh Jawa Timur yang hari ini bertambah 50 kasus, sehingga totalnya 12.044 kasus.</p>\r\n\r\n<p style=\"text-align:justify\">Saat ini kasus aktif di DKI Jakarta atau pasien yang membutuhkan perawatan mencapai 32.462 kasus. Padahal saat ini jumlah keterisian tempat tidur di fasilitas kesehatan dan Rumah Sakit Darurat semakin tinggi. Angka kematian pun bisa semakin tinggi jika pasien tidak tertangani dengan baik.</p>\r\n\r\n<p style=\"text-align:justify\">Pada Senin (21 /06/2021) penambahan kasus di Ibu Kota tercatat 5.014 kasus, sehingga totalnya 479.043 kasus. Pada Minggu (20/06/2021) kasus baru DKI Jakarta Bertambah 5.582 orang dan menjadi yang tertinggi sejak pandemi berlangsung. Sebelumnya pada Sabtu (19/06/2021) kasus di Ibu Kota bertambah 4.895 kasus. Sementara itu pasien sembuh bertambah 2.835 orang sehingga totalnya 438.739 orang.</p>\r\n\r\n<p style=\"text-align:justify\">Sementara secara nasional, penambahan kasus juga sebanyak 14.536 kasus sehingga total kasus menembus 2 juta orang.</p>\r\n\r\n<p style=\"text-align:justify\">Dari akumulasi data 13-20 Juni 2021, penambahan kasus Covid-19 hampir mencapai 90 ribu atau tepatnya 88.419 kasus. Ada tiga provinsi yang mengalami lonjakan kasus yakni DKI Jakarta, Jawa Tengah, dan Jawa Barat. Dalam sepekan terakhir kasus di DKI Jakarta bertambah hampir 30 ribu, tepatnya 28.727 kasus, kemudian Jawa Barat Bertambah 16.870 kasus, dan Jawa Tengah 14.043 kasus.</p>\r\n'),
(29, '60d0c5da6aee8.png', 'Putra', 'Ngamuk! Saham Bank Milik Anthoni Salim & CT Tembus ARA', '2021-06-21', '<p style=\"text-align:justify\"><strong>Jakarta, CNBC Indonesia&nbsp;</strong>-&nbsp;Di tengah koreksi Indeks Harga Saham Gabungan (IHSG) sebesar 1,37% pada perdagangan hari ini, terdapat dua saham bank BUKU II (bank dengan modal inti di bawah Rp 5 triliun) yang berhasil melesat.</p>\r\n\r\n<p style=\"text-align:justify\">Data BEI mencatat, kedua saham bank tersebut adalah PT Bank Harda Internasional Tbk (BBHI) yang baru saja diakuisisi oleh Mega Corpora yang dikendalikan oleh pengusaha Chairul Tanjung dan PT Bank Ina Perdana Tbk (BINA) yang dikendalikan oleh bos Indofood Anthony Salim di mana kedua emiten berhasil terbang tinggi pada perdagangan hari ini.</p>\r\n\r\n<p style=\"text-align:justify\">Tercatat saham BINA melesat kencang ke level Auto Reject Atas (ARA, kenaikan tertinggi 25% dalam sehari) dengan kenaikan tepat 25% ke level harga Rp 3.850/unit.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Sedangkan BBHI berhasil melesat 25% juga tetapi kemudian berkurang menjadi naik 17% ke level harga Rp 2.200/unit. Harga harian BBHI&nbsp;di level atas yakni Rp 2.350/saham.</p>\r\n\r\n<p style=\"text-align:justify\">Kenaikan kedua saham tak lepas dari kedua taipan yang siap menyuntikkan dana ke kedua emiten tersebut melalui mekanisme&nbsp;<em>rights issue</em>&nbsp;alias Penambahan Modal dengan Hak Memegang Efek Terlebih Dahulu (PMHMETD).</p>\r\n\r\n<p style=\"text-align:justify\">Tercatat BBHI berencana menerbitkan sebanyak-banyaknya 7.498.501.696 saham baru atau sebesar 179,20% dari modal yang ditempatkan dan disetor penuh perseroan dengan nominal Rp 100/saham dengan harga penebusan yang sama.</p>\r\n\r\n<p style=\"text-align:justify\">PT Mega Corpora selaku pemegang saham pengendali dengan kepemilikan 73,71% akan mengambil bagian seluruh HMETD yang menjadi haknya dan siap menjadi pembeli siaga dalam aksi korporasi HMETD kali ini.</p>\r\n\r\n<p style=\"text-align:justify\">Tercatat tanggal terakhir perdagangan saham dengan HMETD di pasar reguler adalah di tanggal 8 Juli 2021 sedangkan periode perdagangan dan pelaksanaan HMETD dimulai dari tanggal 14 Juli hingga 21 Juli 2021 dengan penjatahan saham baru paling lambat di tanggal 26 Juli 2021.</p>\r\n\r\n<p style=\"text-align:justify\">Sedangkan BINA juga berencana melakukan aksi korporasi yang serupa di mana BINA akan melepas sebanyak-banyaknya 2 miliar saham baru dengan nilai nominal Rp 100 per saham.</p>\r\n\r\n<p style=\"text-align:justify\">Dengan disetujuinya&nbsp;rights issue&nbsp;ini, Anthony&nbsp;Salim, selaku&nbsp;<em>ultimate shareholder</em>&nbsp;berpeluang menambah porsi kepemilikan sahamnya pada Bank Ina.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><strong>TIM RISET CNBC INDONESIA</strong></p>\r\n'),
(30, '60d0c5c57257c.jpeg', 'Monica Wareza', 'Bos Garuda: Semua Sewa Pesawat Kemahalan!', '2021-06-21', '<p style=\"text-align:justify\"><strong>Jakarta, CNBC Indonesia -</strong>&nbsp;Manajemen PT Garuda Indonesia Tbk (GIAA) menyebutkan seluruh biaya sewa pesawat perseroan kemahalan, di atas harga yang ditawarkan di pasaran. Akibat mahalnya biaya sewa ini, saat ini perusahaan memiliki kewajiban kepada lessor mencapai US$ 700 juta atau sekitar Rp 10,15 triliun (asumsi kurs Rp 14.500/US) yang masih belum dibayarkan.</p>\r\n\r\n<p style=\"text-align:justify\">Direktur Utama Garuda Indonesia Irfan Setiaputra mengatakan dalam upaya penurunan biaya sewa pesawat ini, perusahaan terus melakukan negosiasi dengan pihak yang memberikan sewa untuk menurunkan biaya tersebut.</p>\r\n\r\n<p style=\"text-align:justify\">&quot;Semua kemahalan Pak, semua kemahalan, semua kemahalan. Itulah yang kita negosiasi kemarin, tahun lalu, sudah turun 30%,&quot; kata Irfan dalam Rapat Dengar Pendapat (RDP) dengan Komisi VI DPR RI, Senin (21/6/2021).</p>\r\n\r\n<p style=\"text-align:justify\">Dia menjelaskan, saat ini terdapat dua hal yang dinegosiasikan ulang oleh perusahaan dengan&nbsp;<em>lessor</em>, yakni kewajiban di masa lalu yang masih belum dibayar dan kemudahan kewajiban di masa depan lantaran pesawat tersebut banyak tak dioperasionalkan karena tingkat permintaan penerbangan saat ini masih sangat rendah.</p>\r\n\r\n<p style=\"text-align:justify\">Wakil Direktur Utama Garuda Indonesia Dony Oskaria menjelaskan saat ini perusahaan masih menanggung pembayaran 142 pesawat dengan total biaya mencapai US$ 80 juta per bulan. Padahal hanya 41 pesawat saja yang dioperasikan lantaran tingkat permintaan yang rendah.</p>\r\n\r\n<p style=\"text-align:justify\">Biaya ini berasal dari biaya sewa, biaya&nbsp;<em>maintenance</em>&nbsp;dan reparasi serta biaya&nbsp;<em>maintenance</em>&nbsp;lainnya.</p>\r\n\r\n<p style=\"text-align:justify\">&quot;<em>Leasing cost</em>&nbsp;kita hanya US$ 56 juta per [per bulan] dari sebelumnya US$ 75 juta per bulan. Jadi ada kurang lebih US$ 80 juta per bulan yang wajib kita bayar secara buku,&quot; kata dia di kesempatan yang sama.</p>\r\n\r\n<p style=\"text-align:justify\">&quot;Selisih dari dua ini [101 pesawat tak operasional] kurang lebih US$ 40 juta sendiri. Jadi kerugian kita itu sebenarnya murni karena tadi pesawat yang underutilized asset, yang asetnya tetap kita bayar secara&nbsp;<em>fix cost</em>&nbsp;kita tetapi pesawat tidak menghasilkan revenue,&quot; jelasnya.</p>\r\n\r\n<p style=\"text-align:justify\">Sehingga jika perusahaan tidak melakukan renegosiasi dengan lessor, meski mendapatkan bantuan pendanaan berupa penyertaan modal negara (PMN) dari pemerintah, perusahaan akan tetap merugi tiap tahunnya.</p>\r\n\r\n<p style=\"text-align:justify\">Hingga saat ini, kata dia, perusahaan telah mengembalikan sebanyak 20 pesawat kepada lessor. Saat ini proses nego dengan lessor lainnya masih terus berjalan atas tujuh pesawat yang disewa dan diharap bisa dikembalikan.</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `username` char(20) NOT NULL,
  `password` varchar(60) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Mar`iy Romizzidi Amly'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Shazad Zaheen');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about_me`
--
ALTER TABLE `about_me`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact_me`
--
ALTER TABLE `contact_me`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id_file`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about_me`
--
ALTER TABLE `about_me`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `contact_me`
--
ALTER TABLE `contact_me`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `galery`
--
ALTER TABLE `galery`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
