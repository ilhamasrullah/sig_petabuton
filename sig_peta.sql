-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jan 2021 pada 13.31
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig_peta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'adhar', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tempat`
--

CREATE TABLE `tb_tempat` (
  `id_tempat` int(11) NOT NULL,
  `nama_jalan` varchar(255) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `status_jalan` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kerusakan` varchar(255) NOT NULL,
  `penyebab` text NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tempat`
--

INSERT INTO `tb_tempat` (`id_tempat`, `nama_jalan`, `lat`, `lng`, `status_jalan`, `kecamatan`, `kerusakan`, `penyebab`, `kelurahan`, `gambar`) VALUES
(1, 'Jln Poros Ereke - Buranga\r\n', 123.178787, -4.751542, 'Jalan Provinsi\r\n', 'Kulisusu\r\n', 'Pelapukan Permukaan\r\n', 'Jeleknya campuran lapis permukaan dan tidak tersedianya Drainase\r\n', 'Langke\r\n', '1.jpg'),
(2, 'Jln Poros Ereke - Buranga\r\n', 123.178665, -4.75023, 'Jalan Provinsi\r\n', 'Kulisusu\r\n', 'Pelapukan Permukaan\r\n', 'Jeleknya campuran lapis permukaan dan tidak tersedianya Drainase\r\n', 'Langke\r\n', '91.jpg'),
(3, 'Jln Poros Ereke - Buranga\r\n', 123.176979, -4.74792, 'Jalan Provinsi\r\n', 'Kulisusu\r\n', 'Lubang\r\n', 'Jeleknya campuran lapis permukaan dan lapis permukaan tipis,\r\n', 'Kalibu\r\n', '92.jpg'),
(4, 'Jln Poros Ereke - Buranga\r\n', 123.175728, -4.74291, 'Jalan Provinsi\r\n', 'Kulisusu\r\n', 'Pelapukan Permukaan\r\n', 'Jeleknya campuran lapis permukaan, lapis permukaan tipis, retak-retak yang terjadi tidak segera di atasi dan system drainase tidak tersedia\r\n', 'Kalibu\r\n', '94.jpg'),
(5, 'Jln Poros Ereke - Buranga\r\n', 123.175972, -4.741685, 'Jalan Provinsi\r\n', 'Kulisusu\r\n', 'Lubang\r\n', 'Jeleknya campuran lapis permukaan, lapis permukaan tipis,\r\n', 'Kalibu\r\n', '2.jpg'),
(6, 'Jln Poros Ereke - Buranga\r\n', 123.175339, -4.739148, 'Jalan Provinsi\r\n', 'Kulisusu\r\n', 'Lubang\r\n', 'Jeleknya campuran lapis permukaan dan lapis permukaan tipis,\r\n', 'Kalibu\r\n', '95.jpg'),
(7, 'Jln Poros Ereke - Buranga\r\n', 123.163635, -4.728483, 'Jalan Provinsi\r\n', 'Kulisusu\r\n', 'Lubang\r\n', 'Jeleknya campuran lapis permukaan dan lapis permukaan tipis dan Retak-retak yang terjadi tidak segera di atasi,\r\n', 'Kulisusu\r\n', '96.jpg'),
(8, 'Jln Poros Ereke - Buranga\r\n', 123.16277, -4.72771, 'Jalan Provinsi\r\n', 'Kulisusu\r\n', 'Retak memanjang \r\n', 'tidak baiknya sokongan dari arah samping, Perbedaan kekuatan/ daya dukung perkerasan pada jalan pelebaran dengan jalan lama dan terjadi penyusutan tanah, atau terjadinya settlement.\r\n', 'Eelahaji\r\n', '3.jpg'),
(9, 'Jln Poros Ereke - Buranga\r\n', 123.1313, -4.6868, 'Jalan Provinsi\r\n', 'Kulisusu\r\n', 'Retak memanjang \r\n', 'tidak baiknya sokongan dari arah samping, Perbedaan kekuatan/ daya dukung perkerasan pada jalan pelebaran dengan jalan lama dan terjadi penyusutan tanah, atau terjadinya settlement.\r\n', 'Waculaea\r\n', '103.jpg'),
(10, 'Jln Poros Ereke - Buranga\r\n', 123.1311, -4.6856, 'Jalan Provinsi\r\n', 'Kulisusu\r\n', 'Pelapukan butiran lepas\r\n', 'Campuran material aspal lapis permukaan kurang baik dan  Melemahnya bahan pengikat dan/atau batuan.\r\n', 'Pelapukan butiran lepas\r\n', '98.jpg'),
(11, 'Jln Poros Ereke - Buranga\r\n', 123.131577, -4.680282, 'Jalan Provinsi\r\n', 'Kulisusu\r\n', 'Pelapukan butiran lepas\r\n', 'Campuran material aspal lapis permukaan kurang baik dan  Melemahnya bahan pengikat dan/atau batuan.\r\n', 'Waculaea\r\n', '4.jpg'),
(12, 'Jln Poros Ereke - Buranga\r\n', 123.131, -4.6796, 'Jalan Provinsi\r\n', 'Kulisusu\r\n', 'Pelapukan butiran lepas\r\n', 'Campuran material aspal lapis permukaan kurang baik dan  Melemahnya bahan pengikat dan/atau batuan.\r\n', 'Waculaea\r\n', '115.jpg'),
(13, 'Jln Poros Ereke - Buranga\r\n', 123.120445, -4.671124, 'Jalan Provinsi\r\n', 'Kulisusu\r\n', 'Pelapukan butiran lepas\r\n', 'Campuran material aspal lapis permukaan kurang baik dan  Melemahnya bahan pengikat dan/atau batuan.\r\n', 'Waculaea\r\n', '100.jpg'),
(14, 'Jln Poros Ereke - Buranga\r\n', 123.10803, -4.65245, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Lubang\r\n', 'Jeleknya campuran lapis permukaan dan lapis permukaan tipis,\r\n', 'Waculaea\r\n', '101.jpg'),
(15, 'Jln Poros Ereke - Buranga\r\n', 123.10074, -4.64785, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Lubang\r\n', 'Jeleknya campuran lapis permukaan dan lapis permukaan tipis,\r\n', 'Waculaea\r\n', '107.jpg'),
(16, 'Jln Poros Ereke - Buranga\r\n', 123.091381, -4.65211, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Lubang\r\n', 'Jeleknya campuran lapis permukaan dan lapis permukaan tipis, system drainase tidak tersedia\r\n', 'Kotawo\r\n', '109.jpg'),
(17, 'Jln Poros Ereke - Buranga\r\n', 123.087013, -4.658625, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Lubang\r\n', 'Jeleknya campuran lapis permukaan, lapis permukaan tipis dan system drainase tidak tersedia\r\n', 'Marga karya\r\n', '5.jpg'),
(18, 'Jln Poros Ereke - Buranga\r\n', 123.086967, -4.659683, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Retak blok\r\n', 'Pergerakan vertikal/ horizontal di bawah lapis tambahan (lapisan overlay)sebagai akibat perubahan kadar air pada tanah dasar yang ekspansif, tidak baiknya sokongan dari arah samping dan System drainase tidak tersedia\r\n', 'Marga karya\r\n', '6.jpg'),
(19, 'Jln Poros Ereke - Buranga\r\n', 123.079887, -4.662687, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Lubang\r\n', 'Jeleknya campuran lapis permukaan lapis permukaan tipis, tanah dasar/lapis di bawah permukaan kurang stabil dan system drainase tidak tersedia\r\n', 'Marga karya\r\n', '8.jpg'),
(20, 'Jln Poros Ereke - Buranga\r\n', 123.073685, -4.66475, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Pelapukan butiran lepas\r\n', 'Campuran material aspal lapis permukaan kurang baik dan  Melemahnya bahan pengikat dan system drainase tidak tersedia\r\n', 'Marga karya\r\n', '9.jpg'),
(21, 'Jln Poros Ereke - Buranga\r\n', 123.06739, -4.667625, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Lubang\r\n', 'Jeleknya campuran lapis permukaan lapis permukaan tipis, dan system drainase tidak tersedia\r\n', 'Karya Bakti\r\n', '11.jpg'),
(22, 'Jln Poros Ereke - Buranga\r\n', 123.066696, -4.668127, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Pelapukan Permukaan\r\n', 'Jeleknya campuran lapis permukaan dan tidak tersedianya Drainase\r\n', 'Karya Bakti\r\n', '12.jpg'),
(23, 'Jln Poros Ereke - Buranga\r\n', 123.065826, -4.668893, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Lubang\r\n', 'Jeleknya campuran lapis permukaan lapis permukaan tipis, dan system drainase tidak tersedia\r\n', 'Karya Bakti\r\n', '15.jpg'),
(24, 'Jln Poros Ereke - Buranga\r\n', 123.064552, -4.67007, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Pelapukan Permukaan dan Lubang\r\n', 'Jeleknya campuran lapis permukaan lapis permukaan tipis, system drainase tidak tersedia dan air tanah pada badan perkerasan jalan\r\n', 'Karya Mulya\r\n', '17.jpg'),
(25, 'Jln Poros Ereke - Buranga\r\n', 123.063171, -4.67176, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Pelapukan Permukaan dan Lubang\r\n', 'Jeleknya campuran lapis permukaan lapis permukaan tipis, dan system drainase tidak tersedia\r\n', 'Karya Mulya\r\n', '20.jpg'),
(26, 'Jln Poros Ereke - Buranga\r\n', 123.062683, -4.67223, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Lubang\r\n', 'Jeleknya campuran lapis permukaan lapis permukaan tipis, tanah dasar/lapis di bawah permukaan kurang stabil dan system drainase tidak tersedia\r\n', 'Karya Mulya\r\n', '23.jpg'),
(27, 'Jln Poros Ereke - Buranga\r\n', 123.060112, -4.673265, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Pelapukan Permukaan\r\n', 'tanah dasar/lapis di bawah permukaan kurang stabil, \'Jeleknya campuran lapis permukaan dan system drainase tidak tersedia\r\n', 'Karya Mulya\r\n', '28.jpg'),
(28, 'Jln Poros Ereke - Buranga\r\n', 123.054886, -4.674755, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Bleding\r\n', 'pemakaian kadar aspal yang tinggi pada campuran aspal, pemakaian terlalu banyak aspal\r\n', 'Karya Bakti\r\n', '32.jpg'),
(29, 'Jln Poros Ereke - Buranga\r\n', 123.051117, -4.675352, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Lubang\r\n', 'Jeleknya campuran lapis permukaan lapis permukaan tipis, tanah dasar/lapis di bawah permukaan kurang stabil dan system drainase tidak tersedia\r\n', 'Karya Bakti\r\n', '36.jpg'),
(30, 'Jln Poros Ereke - Buranga\r\n', 123.05069, -4.676273, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Lubang\r\n', 'Jeleknya campuran lapis permukaan lapis permukaan tipis, tanah dasar/lapis di bawah permukaan kurang stabil dan system drainase tidak tersedia\r\n', 'Karya Bakti\r\n', '37.jpg'),
(31, 'Jln Poros Ereke - Buranga\r\n', 123.048691, -4.676505, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Bleding\r\n', 'pemakaian kadar aspal yang tinggi pada campuran aspal, pemakaian terlalu banyak aspal\r\n', 'Kotawo\r\n', '39.jpg'),
(32, 'Jln Poros Ereke - Buranga\r\n', 123.047462, -4.676545, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Lubang\r\n', 'Jeleknya campuran lapis permukaan lapis permukaan tipis, tanah dasar/lapis di bawah permukaan kurang stabil dan system drainase tidak tersedia\r\n', 'Kotawo\r\n', '43.jpg'),
(33, 'Jln Poros Ereke - Buranga\r\n', 123.044235, -4.680131, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Lubang\r\n', 'Jeleknya campuran lapis permukaan lapis permukaan tipis, tanah dasar/lapis di bawah permukaan kurang stabil dan system drainase tidak tersedia\r\n', 'Kotawo\r\n', '45.jpg'),
(34, 'Jln Poros Ereke - Buranga\r\n', 123.0401, -4.682641, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Lubang\r\n', 'Jeleknya campuran lapis permukaan lapis permukaan tipis, tanah dasar/lapis di bawah permukaan kurang stabil dan system drainase tidak tersedia\r\n', 'Kotawo\r\n', '53.jpg'),
(35, 'Jln Poros Ereke - Buranga\r\n', 123.034546, -4.685085, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Pelapukan Permukaan\r\n', 'tanah dasar/lapis di bawah permukaan kurang stabil, \'Jeleknya campuran lapis permukaan dan system drainase tidak tersedia\r\n', 'Kotawo\r\n', '58.jpg'),
(36, 'Jln Poros Ereke - Buranga\r\n', 123.031128, -4.687215, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Pelapukan Permukaan\r\n', 'tanah dasar/lapis di bawah permukaan kurang stabil, \'Jeleknya campuran lapis permukaan dan system drainase tidak tersedia\r\n', 'Kotawo\r\n', '67.jpg'),
(37, 'Jln Poros Ereke - Buranga\r\n', 123.029488, -4.687302, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Bleding\r\n', 'pemakaian kadar aspal yang tinggi pada campuran aspal\r\n', 'Kotawo\r\n', '68.jpg'),
(38, 'Jln Poros Ereke - Buranga\r\n', 123.027405, -4.686666, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Lubang\r\n', 'Jeleknya campuran lapis permukaan lapis permukaan tipis, tanah dasar/lapis di bawah permukaan kurang stabil dan system drainase tidak tersedia\r\n', 'Kotawo\r\n', '69.jpg'),
(39, 'Jln Poros Ereke - Buranga\r\n', 123.025047, -4.686163, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Pelapukan Permukaan\r\n', 'tanah dasar/lapis di bawah permukaan kurang stabil, \'Jeleknya campuran lapis permukaan dan system drainase tidak tersedia\r\n', 'Kotawo\r\n', '73.jpg'),
(40, 'Jln Poros Ereke - Buranga\r\n', 123.022011, -4.685605, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Bleding\r\n', 'pemakaian kadar aspal yang tinggi pada campuran aspal\r\n', 'Kotawo\r\n', '77.jpg'),
(41, 'Jln Poros Ereke - Buranga\r\n', 123.020485, -4.683863, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Lubang\r\n', 'Jeleknya campuran lapis permukaan lapis permukaan tipis, tanah dasar/lapis di bawah permukaan kurang stabil dan system drainase tidak tersedia\r\n', 'Kotawo\r\n', '82.jpg'),
(42, 'Jln Poros Ereke - Buranga\r\n', 123.021673, -4.681813, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Pelapukan Permukaan\r\n', 'tanah dasar/lapis di bawah permukaan kurang stabil, \'Jeleknya campuran lapis permukaan dan system drainase tidak tersedia\r\n', 'Kotawo\r\n', '84.jpg'),
(43, 'Jln Poros Ereke - Buranga\r\n', 123.023015, -4.681215, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Bleding dan Lubang\r\n', 'Jeleknya campuran lapis permukaan lapis permukaan tipis, tanah dasar/lapis di bawah permukaan kurang stabil, system drainase tidak tersedia dan pemakaian kadar aspal yang tinggi pada campuran aspal\r\n', 'Kotawo\r\n', '87.jpg'),
(44, 'Jln Poros Ereke - Buranga\r\n', 123.023361, -4.677515, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Pelapukan butiran lepas\r\n', 'Campuran material aspal lapis permukaan kurang baik dan  Melemahnya bahan pengikat dan system drainase tidak tersedia\r\n', 'Kotawo\r\n', '90.jpg'),
(45, 'Jln Poros Ereke - Buranga\r\n', 123.00855, -4.67631, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Pelapukan Permukaan\r\n', 'tanah dasar/lapis di bawah permukaan kurang stabil, \'Jeleknya campuran lapis permukaan dan system drainase tidak tersedia\r\n', 'Kotawo\r\n', '102.jpg'),
(46, 'Jln Poros Ereke - Buranga\r\n', 123.009788, -4.68662, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Pelapukan Permukaan\r\n', 'tanah dasar/lapis di bawah permukaan kurang stabil, \'Jeleknya campuran lapis permukaan dan system drainase tidak tersedia\r\n', 'Rahmat Baru\r\n', '103.jpg'),
(47, 'Jln Poros Ereke - Buranga\r\n', 123.00666, -4.69432, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Pelapukan Permukaan\r\n', 'tanah dasar/lapis di bawah permukaan kurang stabil, \'Jeleknya campuran lapis permukaan dan system drainase tidak tersedia\r\n', 'Rahmat Baru\r\n', '110.jpg'),
(48, 'Jln Poros Ereke - Buranga\r\n', 123.003815, -4.707581, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Pelapukan Permukaan\r\n', 'tanah dasar/lapis di bawah permukaan kurang stabil, \'Jeleknya campuran lapis permukaan dan system drainase tidak tersedia\r\n', 'Soloi Agung\r\n', '104.jpg'),
(49, 'Jln Poros Ereke - Buranga\r\n', 123.000496, -4.713265, 'Jalan Provinsi\r\n', 'Kulisusu Barat\r\n', 'Pelapukan Permukaan\r\n', 'tanah dasar/lapis di bawah permukaan kurang stabil, \'Jeleknya campuran lapis permukaan dan system drainase tidak tersedia\r\n', 'Soloi Agung\r\n', '105.jpg'),
(50, 'Jln Poros Ereke - Buranga\r\n', 122.99519, -4.7191, 'Jalan Provinsi\r\n', 'Bonegunu\r\n', 'Amblas\r\n', 'Turunnya tanah dasar, Pelaksanaan pemadatan tanah yang kurang baik.\r\n', 'Ronta\r\n', '111.jpg'),
(51, 'Jln Poros Ereke - Buranga\r\n', 122.992319, -4.723596, 'Jalan Provinsi\r\n', 'Bonegunu\r\n', 'Pelapukan Permukaan\r\n', 'Jeleknya campuran lapis permukaan dan system drainase tidak tersedia\r\n', 'Ronta\r\n', '106.jpg'),
(52, 'Jln Poros Ereke - Buranga\r\n', 122.98851, -4.730663, 'Jalan Provinsi\r\n', 'Bonegunu\r\n', 'Pelapukan Permukaan dan Lubang\r\n', 'Jeleknya campuran lapis permukaan lapis permukaan tipis, dan system drainase tidak tersedia\r\n', 'Ronta\r\n', '107.jpg'),
(53, 'Jln Poros Ereke - Buranga\r\n', 122.98214, -4.73523, 'Jalan Provinsi\r\n', 'Bonegunu\r\n', 'Pelapukan Permukaan dan Lubang\r\n', 'Jeleknya campuran lapis permukaan lapis permukaan tipis, dan system drainase tidak tersedia\r\n', 'Ronta\r\n', '112.jpg'),
(54, 'Jln Poros Ereke - Buranga\r\n', 122.97633, -4.74726, 'Jalan Provinsi\r\n', 'Bonegunu\r\n', 'Pelapukan butiran lepas\r\n', 'Campuran material aspal lapis permukaan kurang baik dan  Melemahnya bahan pengikat dan system drainase tidak tersedia\r\n', 'Ronta\r\n', '116.jpg'),
(56, 'teslagi', 122.5112928767285, -3.9942939820831977, 'ssadasda', 'kadia', 'asdad', 'asdad', 'pondambea', '211.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_tempat`
--
ALTER TABLE `tb_tempat`
  ADD PRIMARY KEY (`id_tempat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_tempat`
--
ALTER TABLE `tb_tempat`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
