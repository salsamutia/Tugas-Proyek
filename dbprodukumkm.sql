-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 02:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbprodukumkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_produk`
--

INSERT INTO `jenis_produk` (`id`, `nama`) VALUES
(1, 'Tas'),
(2, 'Sepatu'),
(3, 'Perhiasan'),
(4, 'Busana Muslimah');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `produk_id` int(11) NOT NULL,
  `suplier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `tanggal`, `jumlah`, `harga`, `produk_id`, `suplier_id`) VALUES
(1, '2022-02-02', 5, 100000, 3, 3),
(4, '2022-04-11', 3, 250000, 4, 3),
(5, '2022-05-11', 6, 250000, 5, 3),
(6, '2022-06-03', 3, 500000, 6, 1),
(7, '2022-04-03', 7, 550000, 7, 1),
(8, '2022-05-08', 10, 300000, 8, 1),
(9, '2022-03-02', 5, 650000, 9, 1),
(10, '2022-05-09', 10, 700000, 10, 4),
(11, '2022-04-08', 10, 300000, 11, 4),
(12, '2022-05-05', 5, 400000, 12, 4),
(13, '2022-06-01', 14, 300000, 13, 4),
(14, '2022-03-10', 2, 800000, 14, 4),
(15, '2022-05-03', 6, 400000, 15, 2),
(16, '2022-05-06', 8, 400000, 16, 2),
(17, '2022-03-28', 8, 250000, 17, 2),
(18, '2022-06-17', 6, 200000, 18, 2),
(19, '2022-06-20', 7, 250000, 19, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `jumlah`, `users_id`, `produk_id`) VALUES
(27, '2022-07-06', 2, 2, 7),
(28, '2022-07-06', 2, 2, 7),
(29, '2022-07-06', 5, 2, 7),
(30, '2022-07-06', 5, 2, 7),
(31, '2022-07-06', 1, 2, 8),
(32, '2022-07-06', 1, 2, 8),
(33, '2022-07-06', 2, 2, 8),
(34, '2022-07-06', 2, 2, 8),
(35, '2022-07-08', 1, 2, 8),
(36, '2022-07-08', 1, 2, 8),
(37, '2022-07-06', 1, 2, 10),
(38, '2022-07-06', 1, 2, 10),
(39, '2022-07-06', 1, 16, 3),
(40, '2022-07-06', 1, 16, 3),
(41, '2022-07-14', 2, 16, 3),
(42, '2022-07-14', 2, 16, 3);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(4) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `harga_jual` double DEFAULT NULL,
  `foto` varchar(30) DEFAULT NULL,
  `jenis_id` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `stok`, `harga_beli`, `harga_jual`, `foto`, `jenis_id`, `deskripsi`) VALUES
(3, 'T003', 'Aurelia Dubois', 5, 100000, 200000, '3.png', 1, 'Tas Aurelia Dubois cocok dipakai untuk bepergian dan acara santai. Tersedia dua pilihan warna yaitu warna coklat dan warna hitam.'),
(4, 'T004', 'Katerina Smirnova', 3, 250000, 350000, '4.png', 1, 'Tas Smirnova dibuat dari bahan berkualitas dengan harga yang terjangkau. Saat ini sedang ada promo sebesar 20% dari harga 350000 menjadi 280000 saja.'),
(5, 'T005', 'Laura Chouette', 6, 250000, 300000, '5.png', 1, 'Tas Laura Chouette adalah tas elegan yang sangat digemari pada bulan ini. Hanya untuk bulan ini sedang ada promo sebesar 10% dari harga 300000 menjadi seharga 270000'),
(6, 'S001', 'Luis Felipe Lins', 3, 500000, 1000000, '6.png', 2, 'Sepatu Luis Felipe Lins cocok dipakai untuk olahraga dan untuk acara santai. Untuk 2 bulan ke depan Sepatu Luis Felipe Lins sedang ada promo besar-besaran dari harga 1000000 anda sudah bisa membeli nya dengan harga 600000 saja.'),
(7, 'S002', 'Andres Jasso Nike', 7, 550000, 800000, '7.png', 2, 'Sepatu Andres Jasso Nike dapat digunakan untuk kegiatan formal maupun non-formal. Sepatu ini sangat nyaman ketika digunakan. Untuk bulan Juni 2022 sedang ada diskon sebesar 20%. Dengan harga 640000 Anda sudah bisa mendapatkan sepatu nya.'),
(8, 'S003', 'Paul Gaudriault', 10, 300000, 400000, '8.png', 2, 'Sepatu Paul Gaudriault pada awalnya adalah sejenis sepatu skate namun sangat cocok untuk digunakan sehari-hari.'),
(9, 'S004', 'Irene Kredenets', 5, 650000, 1200000, '9.png', 2, 'Sepatu Irene Kredenets adalah sepatu dengan warna yang unik dan bahan yang ringan sehingga nyaman untuk digunakan.'),
(10, 'P001', 'Joeyy Lee Set', 10, 700000, 1000000, '10.png', 3, 'Joeyy Lee Set terdiri dari gelang, cincin, dan anting dengan desain yang simpel namun terlihat elegan.'),
(11, 'P002', 'Eca Wew', 10, 300000, 500000, '11.png', 3, 'Eca Wew adalah cincin dengan desain yang unik dan simple, namun dapat digunakan untuk ke acara formal maupun sehari-hari.'),
(12, 'P003', 'Nati Melnychuk', 5, 400000, 700000, '12.png', 3, 'Anting Nati Melnychuk di desain dengan bentuk yang unik dan memiliki ketebatan yang cukup tebal. Bisa digunakan untuk sehari-hari ataupun di acara formal.'),
(13, 'P004', 'Joeyy Lee', 14, 300000, 400000, '13.png', 3, 'Perhiasan Joeyy Lee dijual satuan dari joey lee set sehingga bagi anda yang ingin membeli satuan nya dapat memilih joeyy lee ini. '),
(14, 'P005', 'Alexis Antoine', 2, 800000, 1200000, '14.png', 3, 'Cincin Alexis Antoine adalah cincin nikah atau lamaran dan cocok bagi yang ingin menikah dibulan ini. '),
(15, 'B001', 'Leriwell Medina', 6, 400000, 500000, '15.png', 4, 'Dress Leriwell Medina adalah baju batik yang cocok dipakai untuk acara formal, ke kondangan, dll. '),
(16, 'B002', 'Khlarisa Mariza', 8, 400000, 550000, '16.png', 4, 'Khlarisa Mariza adalah setelan batik modern dengan warna yang cerah dan dapat digunakan untuk acara formal.'),
(17, 'B003', 'Galatea Dress', 8, 250000, 350000, '17.png', 4, 'Galatea Dress adalah setelah yang cocok digunakan saat event lebaran, pengajian, dan acara keislaman lainnya.'),
(18, 'B004', 'Ellyana Dress', 6, 200000, 300000, '18.png', 4, 'Ellyana Dress adalah setelah batik formal, bisa digunakan untuk ke kantor, acar pernikahan, ataupun saat lebaran.'),
(19, 'B005', 'Bayuni Dress', 7, 250000, 320000, '19.png', 4, 'Bayuni Dress adalah setelah formal, namun dapat juga digunakan untuk acara biasa atau dipakai bepergian.');

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `kota` varchar(45) DEFAULT NULL,
  `kontak` varchar(30) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `telpon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`id`, `nama`, `kota`, `kontak`, `alamat`, `telpon`) VALUES
(1, 'CV Fikri', 'Majalengka', 'Ibu Eneng Tita', 'Jl. Sudirman No. 12 Majalengka Jawa Barat', '081234567892'),
(2, 'CV Hanif Busana', 'Depok', 'Ibu Yuyun', 'Jl. Nusantara No. 8 Depok Jawa Barat', '081356789234'),
(3, 'CV Persona Indah', 'Surabaya', 'Ibu Eneng Irawati', 'Jl. Gaharu Indah No.10, Kota Surabaya, Jawa Timur', '081346789651'),
(4, 'CV Jewelry Indo.', 'Bali', 'Ibu Putu Rahayu', 'Jl. Ngurah Rai No. 12, Denpasar, Bali', '082556784563');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `last_login`, `status`, `role`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin@gmail.com', '2022-06-11 23:46:37', '2022-06-11 23:46:37', 1, 'administrator'),
(2, 'aminah', '90b74c589f46e8f3a484082d659308bd', 'aminah@gmail.com', '2022-06-11 23:47:09', '2022-06-11 23:47:09', 1, 'public'),
(3, 'salsa', '93070c3e72e20bd3ea2400d8a0246c73', 'salsa@gmail.com', '2022-07-05 04:05:51', '2022-07-05 04:05:51', 1, 'public'),
(15, 'mieke', '417d97ae7ec69ba128934c868f689db1', 'mieke@gmail.com', '2022-07-06 13:14:58', '2022-07-06 13:14:58', 0, 'public'),
(16, 'farah', '9b0f4d720720fd55436ac7f07ac8a840', 'farah@gmail.com', '2022-07-06 13:16:37', '2022-07-06 13:16:37', 0, 'public'),
(17, 'fakhri', '68b91a181c612783782742faf60f1dff', 'fakhri@gmail.com', '2022-07-06 14:09:34', '2022-07-06 14:09:34', 0, 'member'),
(18, 'bayu', '92360c2c392c85b23f38c188996f8d74', 'bayu@gmail.com', '2022-07-07 09:50:00', '2022-07-07 09:50:00', 0, 'public'),
(19, 'rafi', '139c4e89cdbedaf144d05ca54a12a57b', 'rafi@gmail.com', '2022-07-07 09:52:00', '2022-07-07 09:52:00', 0, 'public');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pembelian_produk1_idx` (`produk_id`),
  ADD KEY `fk_pembelian_suplier1_idx` (`suplier_id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan_users1_idx` (`users_id`),
  ADD KEY `fk_pesanan_produk1_idx` (`produk_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`),
  ADD KEY `fk_produk_jenis_produk_idx` (`jenis_id`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `suplier`
--
ALTER TABLE `suplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `fk_pembelian_produk1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pembelian_suplier1` FOREIGN KEY (`suplier_id`) REFERENCES `suplier` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan_produk1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_produk_jenis_produk` FOREIGN KEY (`jenis_id`) REFERENCES `jenis_produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
