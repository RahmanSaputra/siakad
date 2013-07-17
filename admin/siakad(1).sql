-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2013 pada 12.15
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `siakad`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `username`, `password`) VALUES
(1, 'Dwi', 'Rahman', 'sikad', 'sikad'),
(2, 'rudi', 'utomo', 'rudtom', 'rudtom'),
(3, 'hengky', 'lo', 'helo', 'helo'),
(4, 'ridho', 'prasetyo', 'setyo', 'setyo'),
(5, 'rendy', 'hadinata', 'boyrend', 'boyrend');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `judul` varchar(32) NOT NULL,
  `isi` text NOT NULL,
  `author` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `tanggal`, `judul`, `isi`, `author`) VALUES
(1, '2013-07-09', 'Misi SMA Negeri 9 Malang', '1.Melaksanakan kegiatan pengembangan pendidikan yang mengacu kepada terlaksananya 8 standar pendidikan nasional.\r\n\r\n2.Menyelenggarakan pendidikan berbasis ICT.\r\n\r\n3.Mengembangkan pembelajaran yang mengarah kepada sikap peduli dan berbudaya lingkungan.\r\n\r\nIf you aren''t using Ruby, there is also a set of plain HTML files for each page, just like you would expect.', 'wow'),
(2, '2013-07-10', 'Job Fair SMKN 4 Malang', 'Acara peresmian yang dilakukan oleh Ibu Dra. Hj. Heri Puji Utami, M.Ap dilaksanakan di Lapangan Serbaguna (LABANA) SMKN 4 Malang pukul 09.15 WIB. Kegiatan ini dilaksanakan dalam rangka JOB FAIR SMK', 'wow');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `NIP` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(32) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(32) NOT NULL,
  `alamat` varchar(32) NOT NULL,
  `telp` varchar(32) NOT NULL,
  `kelamin` varchar(32) NOT NULL,
  `jabatan` varchar(32) NOT NULL,
  PRIMARY KEY (`NIP`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1200005 ;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`NIP`, `nama`, `password`, `tgl_lahir`, `email`, `alamat`, `telp`, `kelamin`, `jabatan`) VALUES
(1200001, 'Dr.Hj.Supandi, ST ', 'awerasdfgh', '1969-07-11', 'puandi@yahoo.co.id', 'Jl. Hamid Rusdi 88 Malang ', '0341 5896325', 'Laki', 'Kepala Sekolah'),
(1200003, 'Hj. Rina Maulani', '123456', '1979-07-01', 'rinamaulani@gmail.com', 'Jl. Candi Badut 9 Malang', '081723546837', 'Perempuan', 'Wakil Kepsek'),
(1200004, 'Heru Waspada, Spd', '123456', '1976-07-09', 'waspadalah@gmail.com', 'Jl. Selalu Waspada 97 Malang', '0813548962574', 'Laki', 'Kurikulum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kode_kelas` varchar(32) NOT NULL,
  `nama_kelas` varchar(32) NOT NULL,
  `jumlah_siswa` int(11) NOT NULL,
  PRIMARY KEY (`kode_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_pelajaran`
--

CREATE TABLE IF NOT EXISTS `mata_pelajaran` (
  `kode_mapel` varchar(32) NOT NULL,
  `nama_mapel` varchar(32) NOT NULL,
  PRIMARY KEY (`kode_mapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`kode_mapel`, `nama_mapel`) VALUES
('10TIK', '10. Teknologi Informasi ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelajaran`
--

CREATE TABLE IF NOT EXISTS `pembelajaran` (
  `id_pembelajaran` int(11) NOT NULL,
  `kode_mapel` varchar(32) NOT NULL,
  `NIP` int(11) NOT NULL,
  `kode_kelas` varchar(32) NOT NULL,
  PRIMARY KEY (`id_pembelajaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `no_daftar` int(12) NOT NULL AUTO_INCREMENT,
  `nama` varchar(32) DEFAULT NULL,
  `kelamin` varchar(32) DEFAULT NULL,
  `tempat_lahir` varchar(32) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `asal_sekolah` varchar(32) DEFAULT NULL,
  `no_ijasah` varchar(32) DEFAULT NULL,
  `nama_orgtua` varchar(32) DEFAULT NULL,
  `pekerjaan` varchar(32) DEFAULT NULL,
  `alamat` varchar(32) DEFAULT NULL,
  `telp` varchar(12) DEFAULT NULL,
  `nilai_un` int(11) DEFAULT NULL,
  `alasan` varchar(32) NOT NULL,
  `keterangan` varchar(32) NOT NULL,
  `kode_kelas` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`no_daftar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `judul` varchar(32) DEFAULT NULL,
  `isi` text,
  `author` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `tanggal`, `judul`, `isi`, `author`) VALUES
(1, '2013-07-11', 'Contoh Pengumuman', 'Mendikbud menjelaskan bahwa tantangan di masa depan tidak mungkin lebih ringan dari hari ini, oleh karena itu Bangsa Indonesia membutuhkan guru-guru yang hebat untuk mendidik generasi masa depan yang berilmu, terampil, dan berakhlak mulia. "Tantangan ke depan pasti lebih berat, karena jumlah penduduk juga lebih banyak," kata Menteri Nuh.\n\nPelatihan yang dilaksanakan terkait implementasi Kurikulum 2013 ini diharapkan menjadi salah satu proses belajar dari para guru. Selain itu Mantan Menteri Kominfo tersebut juga mengajak para guru memiliki ihtiar atau usaha yang luar biasa untuk mewujudkan suatu cita-cita.\n\n\nthanks', 'maman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `raport`
--

CREATE TABLE IF NOT EXISTS `raport` (
  `tingkat` varchar(32) NOT NULL,
  `jurusan` varchar(32) NOT NULL,
  `nilai` varchar(32) NOT NULL,
  `NIS` int(11) NOT NULL,
  `NIP` int(11) NOT NULL,
  `kode_kelas` varchar(32) NOT NULL,
  `kode_mapel` varchar(32) NOT NULL,
  PRIMARY KEY (`tingkat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `seleksi`
--

CREATE TABLE IF NOT EXISTS `seleksi` (
  `id_seleksi` int(11) NOT NULL AUTO_INCREMENT,
  `nilai_un` int(11) NOT NULL,
  `nilai_lhbp` int(11) NOT NULL,
  PRIMARY KEY (`id_seleksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `no_daftar` int(11) NOT NULL,
  `semester1` int(11) NOT NULL,
  `semester2` int(11) NOT NULL,
  `semester3` int(11) NOT NULL,
  `semester4` int(11) NOT NULL,
  `semester5` int(11) NOT NULL,
  `semester6` int(11) NOT NULL,
  `nilai_lhbp` int(11) NOT NULL,
  PRIMARY KEY (`no_daftar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `NIS` int(11) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `alamat` varchar(32) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `kelamin` varchar(32) NOT NULL,
  `kode_kelas` varchar(32) NOT NULL,
  PRIMARY KEY (`NIS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
