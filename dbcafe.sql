-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 21 Jul 2017 pada 21.52
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `dbcafe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `home` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE IF NOT EXISTS `makanan` (
  `id_ma` varchar(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id_ma`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id_ma`, `nama`, `deskripsi`, `foto`) VALUES
('MA1', 'Kimchie', 'Kimchie atau kimchi adalah makanan khas korea yang terbuat dari sayuran yang difermentasi dengan aneka macam bumbu sehingga memiliki rasa yang pedas dan asam. Sayuran yang digunakan adalah sawi, sedangkan bumbu yang digunakan adalah cabe, jahe, bawang bombay, bawang putih. Semakin lama kimchi difermentasikan maka semakin enak rasanya.', '1__Kimchi.jpg'),
('MA2', 'Jjangmyeon', 'Chajangmyeon atau Jjangmyeon adalahh salah satu hidangan mie khas korea yang terbuat dari mei yang dicampur dengan saus kedelai hitam kental, sayuran dan potongan daging.', '2__Jajangmyeon.jpg'),
('MA3', 'Tteokbokki', 'Tteokbokki adalah penganan Korea berupa tteok dari tepung beras yang dimasak dalam bumbu gochujang yang pedas dan manis. Tteok yang dipakai berbentuk batang atau silinder. Penganan ini merupakan makanan rakyat yang banyak dijual di pojangmacha.', '2__Teokbokki.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `minuman`
--

CREATE TABLE IF NOT EXISTS `minuman` (
  `id_mi` varchar(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id_mi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `minuman`
--

INSERT INTO `minuman` (`id_mi`, `nama`, `deskripsi`, `foto`) VALUES
('MI1', 'Banana Milk', 'Banana Milk adalah minuman khas korea yang sangat meyehatkan, terbuat dari buah pisang yang bermanfaat mencerdaskan otak .', '2__Banana_Milk.jpg'),
('MI2', 'Teh Omija', 'Teh omija adalah minuman khas korea yang terbuat dari buah buahan. Omija berarti 5 rasa berry sehingga memiliki rasa yang bervariasi seperti manis, asam, asin, pahit dan pedas. Teh omija memiliki khasiat obat, terutama untuk melawan flu dan sakit pernafasan', '3__Teh_Omija.jpg'),
('MI3', 'Yulmu', ' Yulmu merupakan sajian sereal gurih, dengan kandungan protein tinggi. Ini dapat menjadi alternatif yang sehat untuk mengganti keberadaan kopi di pagi hari. Minuman khas ini terdiri atas campuran gandum, kenari, kacang almond, dan beberapa jenis kacang lainnya. ', 'Yulmu.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama`) VALUES
('Nani', '02ea2ae2a237c042285e093e6972eaa9', 'Nani Mustiatun');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
