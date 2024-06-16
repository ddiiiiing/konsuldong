-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2024 at 11:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jurusan` enum('Teknologi Informasi','Manajemen','Hukum','DKV','Ilmu Seni') NOT NULL,
  `pilih_paket` enum('Masih Enteng','Agak Susah','Pusing Banget') NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `payment` enum('OVO','Gopay','Dana','Transfer Manual') NOT NULL,
  `status` enum('On Progress','Selesai') NOT NULL,
  `tgl_pesan` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `id_user`, `jurusan`, `pilih_paket`, `deskripsi`, `payment`, `status`, `tgl_pesan`) VALUES
(4, 2, 'Teknologi Informasi', 'Pusing Banget', 'OLIVIA BIKIN GA TIDUR INI WE KEKMANA NI', 'OVO', 'Selesai', '2024-06-04'),
(5, 5, 'DKV', 'Agak Susah', 'ngegambar aja ni, spele', 'OVO', 'On Progress', '2024-06-16'),
(6, 5, 'Manajemen', 'Agak Susah', 'buat makalah', 'OVO', 'On Progress', '2024-06-16'),
(7, 6, 'DKV', 'Pusing Banget', 'Membuat Nirmana', 'OVO', 'On Progress', '2024-06-16'),
(8, 7, 'DKV', 'Pusing Banget', 'Membuat Nirmana', 'OVO', 'On Progress', '2024-06-16'),
(9, 7, 'Manajemen', 'Agak Susah', 'Makalah Pembukuan Keuangan', 'OVO', 'On Progress', '2024-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `no_tlp` int(13) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `no_tlp`, `is_admin`) VALUES
(2, 'Rapael', 'usertest', '$2y$10$15IQxmuQhYNr6GTXND0MZO0nf2/mQ30NI19.AFNxL1mN.zHXQtYg.', 2147483647, 0),
(3, 'User1', 'dini', '$2y$10$yNIgwUfm1TaIt7QIBNwUdumE4q8KUxTMRrfAE0KEbDQyNJhIloKRm', 2147483647, 1),
(4, 'test', 'mascinaa', '$2y$10$cXU8yp/pGElEFW8r7nkoq..OE4TlPKMOV.ShYbnyCoS89SmfZSAu.', 2147483647, 0),
(5, 'Chuck Taylor', 'pesky', '$2y$10$jhNQfC3Fyj1nuTYz3NCYgOInqh/9ElqOzWGe3I77UyMthdksT36iW', 2147483647, 0),
(6, 'maryadi', 'testing145', '$2y$10$XjcC2nkkvbHGBbLp/KWUc.7AFuZNj3sKc3KkjyC/rOSkdV.V4zwWi', 2147483647, 0),
(7, 'test', 'test1', '$2y$10$3zY1JGiAigim8h6XPbFld.NpNxgzZKA.oSetAEaPH7Xv7z83Q8qRq', 2147483647, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
