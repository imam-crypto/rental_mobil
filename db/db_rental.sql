-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jan 2020 pada 17.03
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rental`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mobil`
--

CREATE TABLE `tb_mobil` (
  `id_mobil` int(20) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `plat_nomor` varchar(20) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `status` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mobil`
--

INSERT INTO `tb_mobil` (`id_mobil`, `merk`, `plat_nomor`, `tahun`, `warna`, `status`) VALUES
(6, 'Nissan Terano', 'D 6969 VEE', '1999', 'hitam', 2),
(7, 'Toyota FORTUNER', 'd 1234 av', '2019', 'BIRU', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyewa`
--

CREATE TABLE `tb_penyewa` (
  `id_penyewa` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penyewa`
--

INSERT INTO `tb_penyewa` (`id_penyewa`, `nama`, `alamat`, `jk`, `no_ktp`, `no_hp`) VALUES
(8, 'aldo', 'jl.arjasari', 'L', '123546728916', '2836257'),
(9, 'Indra Supriadi', 'Washinton DC', 'La', '00112233445566778899', '+628221872xxxx'),
(10, 'aldo', 'bandung', 'La', '23834329', '0829382719');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(20) NOT NULL,
  `transaksi_karyawan` int(20) NOT NULL,
  `transaksi_penyewa` int(20) NOT NULL,
  `transaksi_mobil` int(20) NOT NULL,
  `transaksi_tgl_pinjam` date NOT NULL,
  `transaksi_tgl_kembali` date NOT NULL,
  `transaksi_harga` int(30) NOT NULL,
  `transaksi_denda` int(20) NOT NULL,
  `transaksi_tgl` date NOT NULL,
  `transaksi_total_denda` int(20) NOT NULL,
  `transaksi_status` int(20) NOT NULL,
  `transaksi_tgl_dikembalikan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `transaksi_karyawan`, `transaksi_penyewa`, `transaksi_mobil`, `transaksi_tgl_pinjam`, `transaksi_tgl_kembali`, `transaksi_harga`, `transaksi_denda`, `transaksi_tgl`, `transaksi_total_denda`, `transaksi_status`, `transaksi_tgl_dikembalikan`) VALUES
(2, 1, 5, 5, '2020-01-15', '2020-01-18', 600000, 20000, '2020-01-14', 40000, 1, '2020-01-20'),
(3, 1, 9, 1, '2020-01-09', '2020-01-17', 300, 500, '2020-01-14', 1000, 1, '2020-01-19'),
(5, 1, 8, 7, '2020-01-24', '2020-01-28', 3000000, 50000, '2020-01-23', 0, 0, '0000-00-00'),
(6, 1, 9, 6, '2020-01-30', '2020-01-31', 200000, 50000, '2020-01-23', 0, 0, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mobil`
--
ALTER TABLE `tb_mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indeks untuk tabel `tb_penyewa`
--
ALTER TABLE `tb_penyewa`
  ADD PRIMARY KEY (`id_penyewa`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_mobil`
--
ALTER TABLE `tb_mobil`
  MODIFY `id_mobil` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_penyewa`
--
ALTER TABLE `tb_penyewa`
  MODIFY `id_penyewa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
