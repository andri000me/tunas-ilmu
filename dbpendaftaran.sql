-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Jul 2019 pada 02.52
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tunas_ilmu`
--
CREATE DATABASE IF NOT EXISTS `tunas_ilmu` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tunas_ilmu`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_agama`
--

CREATE TABLE `tb_agama` (
  `id_agama` int(50) NOT NULL,
  `agama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akses`
--

CREATE TABLE `tb_akses` (
  `id_akses` tinyint(1) UNSIGNED NOT NULL,
  `label` varchar(250) NOT NULL,
  `level_akses` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_akses`
--

INSERT INTO `tb_akses` (`id_akses`, `label`, `level_akses`) VALUES
(1, 'admin', 'Administrator'),
(2, 'santri', 'Santri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_baca_alquran`
--

CREATE TABLE `tb_baca_alquran` (
  `id_baca_alquran` int(20) NOT NULL,
  `kemampuan_baca` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_baca_alquran`
--

INSERT INTO `tb_baca_alquran` (`id_baca_alquran`, `kemampuan_baca`) VALUES
(1, 'tidak bisa'),
(2, 'lambat'),
(3, 'biasa'),
(4, 'lancar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bahasa_arab`
--

CREATE TABLE `tb_bahasa_arab` (
  `id_bahasa_arab` int(20) NOT NULL,
  `kemampuan_bahasa_arab` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ci_sessions`
--

CREATE TABLE `tb_ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ci_sessions`
--

INSERT INTO `tb_ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('1kafr7gsq7ttlv5k3fq12r9usm8gcmbp', '::1', 1559109898, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535393130393839373b),
('15h0olkkg7bu55iucgfcjc8rgj7firoq', '::1', 1559112514, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535393131323531343b),
('uqk7fneisu9erk4a1575hmuh1oupocih', '::1', 1559318029, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535393331373734343b),
('e8uu74t7sh0g072ip7f460dm5k79bju5', '::1', 1559318058, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535393331383035303b696e666f7c733a32383a22757365726e616d6520617461752070617373776f72642073616c6168223b5f5f63695f766172737c613a313a7b733a343a22696e666f223b733a333a226f6c64223b7d),
('88s0m7htg26uqaqbh1lmdv4ops3pn4i8', '::1', 1559319572, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535393331393537323b),
('2j95cokrv34t3f49910l7r529n7b1n7s', '::1', 1559953934, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535393935333933343b),
('tjoecnae09mge3qg9rsaf9f1b8emh4up', '::1', 1559954434, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535393935343433343b),
('odbiq7cmi2l48c2957p5blt4v51u5lo2', '::1', 1559954724, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535393935343732343b),
('3osjh4r9036mo7raket7d9odh4j8pbm7', '::1', 1560406254, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303430363235343b),
('nh0cbru9b4rgglanvlsoeb4f4a0di93l', '::1', 1560414968, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303431343936373b),
('afluakrabvc9q5sj55cr9pdr1e4ra9i5', '::1', 1560485708, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303438353639323b696e666f7c733a32383a22757365726e616d6520617461752070617373776f72642073616c6168223b5f5f63695f766172737c613a313a7b733a343a22696e666f223b733a333a226f6c64223b7d),
('78ub2br5m0v3enhjqp96n8u096cpa0co', '::1', 1560486507, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303438363432333b696e666f7c733a32383a22757365726e616d6520617461752070617373776f72642073616c6168223b5f5f63695f766172737c613a313a7b733a343a22696e666f223b733a333a226f6c64223b7d),
('rnn58j58p7lc5ini5s6rd4nj4n7fcrt1', '::1', 1560493777, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303439333530383b),
('b3n1tr8jdl2q7r42v31f0ke4e4qpnnla', '::1', 1560494030, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303439333939313b),
('4rkl61mi5lpt1qjsd0t23g48dkvhmvak', '::1', 1560494666, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303439343636343b),
('dnjkjkkorhauq5el5j2id34nool1bmcc', '::1', 1560495124, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303439353131393b),
('c69rtu97fbib83eogmuv648ij14e114i', '::1', 1560496702, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303439363431363b),
('m4n1dkrfpc34hjm9l8dkds2sc2gd8ise', '::1', 1560496936, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303439363836313b),
('ohods4s319iefhtmqafi658sllhdjv1e', '::1', 1560497380, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303439373337353b),
('ut40vdoi83au5qigd5c1n2udsl85ota8', '::1', 1560498714, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303439383731343b),
('gdm063ef614lum5rpo46i7tk6ijv1qml', '::1', 1560499733, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303439393530343b),
('sicce6djjvllf8vitds3mbbuq717f5mv', '::1', 1560499841, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303439393833353b),
('du7i0n3u4rqhiu57bqt0qufdn4pksnk5', '::1', 1560984853, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303938343833383b),
('t7mbtd2qt69ujkkntqsjdgeakg79enrh', '::1', 1560985520, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303938353338393b),
('srh6l5c58tlb7i04efi4q4nrrcor5hn8', '::1', 1560986147, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303938363134373b),
('ir7mbqfsqki5hsv28ar10eij9k8i0t2m', '::1', 1561334732, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313333343539323b),
('qjr8ncrk9ju4n8j5hea3cav1p35dlir8', '::1', 1561505082, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313530353038323b),
('pkeniinpk5udb9cmabeu7ugvcudoadfb', '::1', 1561506869, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313530363836393b),
('ci5i0d2qpn0ih03bnqflp99702t71pru', '::1', 1561506895, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313530363837353b),
('b3ng7ttj9urk18fmnrgafoo9nubss2u8', '::1', 1561507212, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313530373130373b),
('s3b08gk0cvmf839rol29865ts006lfa2', '::1', 1561507441, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313530373434313b),
('glq1iqgketd8d3ce7phvik8npvsvfcum', '::1', 1561507844, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313530373834343b),
('u6k7ckv6tvs206ejqjmae5ektutijage', '::1', 1561508257, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313530383232393b),
('7sv1kd4jc09gnv32og0mj2705r4j0d5j', '::1', 1561508559, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313530383530393b),
('s9ak3ea7ejh16vsppftij7kdv1h7a58o', '::1', 1561555217, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313535353231373b),
('fpbgdmtmpg0l6jcbm34r1soal8se2pqu', '::1', 1561556019, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313535353836363b),
('chrc74vtjtj1fv57r6qn73fiaq9emm8f', '::1', 1561556208, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313535363230383b),
('1os3i7hb8urmmaeqvh4r56ar2lb46qsf', '::1', 1561557118, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313535363831333b),
('vjc4p57vivnp2bb83oq3p2a18cj2g16e', '::1', 1561560969, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313536303935383b),
('qbjkt47a38o5on4jlme6pgt9ige26np9', '::1', 1561561907, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313536313631313b),
('hch5kni9qp1bg611deciio54cjg01ju4', '::1', 1561562482, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313536323035313b),
('7vc3saotch2p51cdd3qursa9g1no8q4k', '::1', 1561562507, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313536323438343b),
('lj501vhd59bn798jp0bbaeihrd124hmt', '::1', 1561562636, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313536323535343b),
('a4l02129g503m1tl85t12m72r47k45hj', '::1', 1561563682, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313536323738353b),
('6egelbupe54306jp0ovq1u18us2kr8oi', '::1', 1561563918, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313536333638353b),
('2uhgd3dbnrjmd5giihq3jbnv0soirh2h', '::1', 1561564529, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313536343136353b),
('inih1pl5otiurn5qvintmtaqm0ugitko', '::1', 1561564737, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313536343538373b),
('r8qtjba034a07klr3r3mhfkcghi43602', '::1', 1561565647, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313536353631383b),
('4bk2sjtg981bknki96nepg9c501ue597', '::1', 1561616077, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313631353936353b),
('u8phjj2m9tlfoce9ldkmenh2dbudmlqf', '::1', 1561616460, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313631363436303b),
('ofecttc0fo9lk91asp5t2utv6r36k94e', '::1', 1561684023, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313638343032333b),
('sclsqdfa91hlrpo6vnhdtthltccvbfea', '::1', 1561685064, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313638343434333b),
('ktsdd4hvasv94eq61q1kjahf63nc7em4', '::1', 1561685069, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313638353036393b),
('erpdcam6ghca1pi7q77rg5u7vp2dirpu', '::1', 1561686475, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313638363339383b),
('o8d90hb5h341v0r2kig3vlnsced3bjk2', '::1', 1561687080, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313638373037363b),
('43k5b5r97h9o9t37rt6633422f4u2dnp', '::1', 1561687298, ''),
('5d7kqppr7grl0lc2iaa3f0pe2o421par', '::1', 1561687305, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313638373239393b),
('ksn0et3s9f6lqj815jun8elu5re3ql9o', '::1', 1561688620, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313638383437303b),
('u3lsr5187aq3vv5075dh2mobkqqf0tgm', '::1', 1561689054, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313638393034323b),
('da971gocq95k87eivf5d5lobe7bbclg6', '::1', 1561689708, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313638393730373b),
('9conq2fvuqm2pijabe21ad4pmlbt9jcj', '::1', 1561733387, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313733333338363b),
('frd88h885t8dtqvl9f552rijpe4jeq4t', '::1', 1561988631, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313938383532323b),
('ghs3t8j2n30vkrtqp8rvulqqgtccbp89', '::1', 1561989178, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313938393135353b),
('klbfsi98103tmtrlivpr9sku0nrjq3vi', '::1', 1561996225, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313939363232353b),
('mmv4muusf3mdv5dt3sav5b4npg57lqo3', '::1', 1561997358, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313939373335383b),
('urg6okibdb4qlbrt658vh1a07vj6106f', '::1', 1562036482, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536323033363438323b),
('qhumsctknaguoe0oq8o9jh6ntl731vqt', '::1', 1562045200, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536323034343936343b),
('htf5698bbf5bqklrpjtdp9u45ubl3ab3', '::1', 1562046046, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536323034363034363b),
('our1bp6m5f65diuem7p42erd7ot0ugc9', '::1', 1562048663, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536323034383633323b),
('hrnbs8v2sav2tqjevouaa8gj3tkfujfh', '::1', 1562050623, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536323035303632323b);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_kelamin`
--

CREATE TABLE `tb_jenis_kelamin` (
  `id_jk` int(2) NOT NULL,
  `jenis_kelamin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jenis_kelamin`
--

INSERT INTO `tb_jenis_kelamin` (`id_jk`, `jenis_kelamin`) VALUES
(1, 'Laki-laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` int(20) NOT NULL,
  `nama_santri` varchar(250) NOT NULL,
  `nama_panggilan` varchar(250) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nomor_ktp` int(30) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `nomor_telp` int(20) NOT NULL,
  `riwayat_sakit_berat` varchar(250) NOT NULL,
  `id_status_kawin` int(20) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `usia_ayah` int(10) NOT NULL,
  `id_agama_ayah` int(20) NOT NULL,
  `pekerjaan_ayah` varchar(250) NOT NULL,
  `no_telp_ayah` int(20) NOT NULL,
  `alamat_ayah` text NOT NULL,
  `nama_ibu` varchar(250) NOT NULL,
  `id_baca_alquran` int(20) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `usia_ibu` int(10) NOT NULL,
  `id_agama_ibu` int(20) NOT NULL,
  `pekerjaan_ibu` varchar(250) NOT NULL,
  `no_telp_ibu` int(20) NOT NULL,
  `alamat_ibu` text NOT NULL,
  `hafalan_alquran` int(30) NOT NULL,
  `nama_penaggung_biaya` varchar(250) NOT NULL,
  `tempat_lahir_penanggung` varchar(250) NOT NULL,
  `tanggal_lahir_penaggung` date NOT NULL,
  `id_agama_penanggung` int(20) NOT NULL,
  `no_telp_penanggung` int(20) NOT NULL,
  `alamat_penanggung` text NOT NULL,
  `id_program_pilihan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_program`
--

CREATE TABLE `tb_program` (
  `id_program` int(20) NOT NULL,
  `program` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_program`
--

INSERT INTO `tb_program` (`id_program`, `program`) VALUES
(1, 'asrama'),
(2, 'non asrama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_status_kawin`
--

CREATE TABLE `tb_status_kawin` (
  `id_status` int(20) NOT NULL,
  `status_kawin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_status_kawin`
--

INSERT INTO `tb_status_kawin` (`id_status`, `status_kawin`) VALUES
(1, 'kawin'),
(2, 'belum kawin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` mediumint(1) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_akses` tinyint(1) UNSIGNED NOT NULL,
  `status` enum('Aktif','Non Aktif') NOT NULL,
  `dihapus` enum('tidak','ya') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama`, `id_akses`, `status`, `dihapus`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 1, 'Aktif', 'tidak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_agama`
--
ALTER TABLE `tb_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `tb_akses`
--
ALTER TABLE `tb_akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `tb_baca_alquran`
--
ALTER TABLE `tb_baca_alquran`
  ADD PRIMARY KEY (`id_baca_alquran`);

--
-- Indexes for table `tb_bahasa_arab`
--
ALTER TABLE `tb_bahasa_arab`
  ADD PRIMARY KEY (`id_bahasa_arab`);

--
-- Indexes for table `tb_jenis_kelamin`
--
ALTER TABLE `tb_jenis_kelamin`
  ADD PRIMARY KEY (`id_jk`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD UNIQUE KEY `id_baca_kemampuan_alquran` (`id_baca_alquran`),
  ADD UNIQUE KEY `id_agama_penanggung` (`id_agama_penanggung`),
  ADD KEY `id_status_kawin` (`id_status_kawin`),
  ADD KEY `id_status_kawin_2` (`id_status_kawin`),
  ADD KEY `id_agama_ibu` (`id_agama_ibu`),
  ADD KEY `id_program_pilihan` (`id_program_pilihan`),
  ADD KEY `id_agama_ayah` (`id_agama_ayah`);

--
-- Indexes for table `tb_program`
--
ALTER TABLE `tb_program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indexes for table `tb_status_kawin`
--
ALTER TABLE `tb_status_kawin`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akses`
--
ALTER TABLE `tb_akses`
  MODIFY `id_akses` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` mediumint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD CONSTRAINT `tb_pendaftaran_ibfk_1` FOREIGN KEY (`id_baca_alquran`) REFERENCES `tb_baca_alquran` (`id_baca_alquran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pendaftaran_ibfk_2` FOREIGN KEY (`id_program_pilihan`) REFERENCES `tb_program` (`id_program`),
  ADD CONSTRAINT `tb_pendaftaran_ibfk_3` FOREIGN KEY (`id_status_kawin`) REFERENCES `tb_status_kawin` (`id_status`),
  ADD CONSTRAINT `tb_pendaftaran_ibfk_4` FOREIGN KEY (`id_agama_ayah`) REFERENCES `tb_agama` (`id_agama`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
