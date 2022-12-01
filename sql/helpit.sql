-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2020 pada 14.58
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kode_brg` char(10) NOT NULL,
  `nama_brg` char(35) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` char(30) NOT NULL,
  `supl` char(30) NOT NULL,
  `modal` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `sisa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kode_brg`, `nama_brg`, `tanggal`, `jenis`, `supl`, `modal`, `harga_jual`, `stok`, `sisa`) VALUES
('EL01', 'Setrika', '2020-11-21', 'Electronik', 'Aditiya', 250000, 350000, 60, 30),
('EL02', 'Kipas Angin', '2020-11-21', 'Electronik', 'Aditiya', 300000, 350000, 40, 30),
('EL03', 'Ram 4GB Ddr3', '2020-11-21', 'Electronik', 'Aditiya', 200000, 280000, 50, 30),
('EL05', 'Samsung Galaxy S20', '2020-11-21', 'electronik', 'Bayu', 12000000, 12500000, 20, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(3) NOT NULL,
  `email` char(30) NOT NULL,
  `password` char(15) NOT NULL,
  `level` enum('Pegawai','Operator','Admin') NOT NULL,
  `namauser` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `email`, `password`, `level`, `namauser`) VALUES
(1, 'admin@gmail.com', 'bayu', 'Admin', 'Administrator'),
(2, 'operator@gmail.com', 'adit', 'Operator', 'Naruto'),
(3, 'pegawai@gmail.com', 'root', 'Pegawai', 'Sasuke');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_beli` int(11) NOT NULL,
  `tgl_trans` date NOT NULL,
  `nama_plg` char(30) NOT NULL,
  `nama_brg` char(30) NOT NULL,
  `jumlh_beli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_beli`, `tgl_trans`, `nama_plg`, `nama_brg`, `jumlh_beli`) VALUES
(1, '2020-11-21', 'Adit', 'EL01', 10),
(2, '2020-11-21', 'Adit', 'EL02', 12),
(3, '2020-11-21', 'Adit', 'EL03', 14);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_brg`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_beli`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
