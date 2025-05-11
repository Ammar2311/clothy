-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 11, 2025 at 09:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(80) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `description` text DEFAULT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `description`, `img`) VALUES
(1, 'Regular Fit Short Sleeve Poplin Men Shirt', 99, 'Made from poplin fabric, this long-sleeve shirt features a simple and elegant design. Combining style and comfort, it serves as a versatile staple for any wardrobe.', 'prod4.png'),
(2, 'Embroidered Men Cap Hat', 19, 'The Pure Waste cap completes the outfit. The cap is timeless and well-fitting. The material is pleasantly soft, 100% recycled Pure Waste college fabric. The one size cap has a curved visor, and it has a drawstring and a metal buckle, which allows you to adjust the size to fit you.', 'prod3.png'),
(3, 'Standard Fit Short Sleeve Men Shirt ', 399, 'Supple premium linen with an elegant glossy sheen. High quality linen made with long fibers to achieve a cool feel, supple texture, and glossy sheen.', 'prod8.png'),
(4, 'Regular Fit Chequered Short Sleeve Shirt', 499, '100% European linen. Cool linen with long fibers for a supple feel and subtle glossy sheen.', 'prod7.png'),
(5, 'Suede Look Men Classic Shoes ', 699, ' is a stylish sports shoe for men from the well-known Fila brand with a slightly more massive appearance. A strong sole with an interesting shape provides good grip. Upper made of leather.', 'prod6.png'),
(7, 'FILA Mens Disruptor 2 Sneakers', 299, '\r\nThese FILA Disruptor 2 Sneakers are comfortable, durable & totally fresh. Designed to be comfy, styled to be seen.\r\n', 'prod1.png'),
(8, 'FILA Men Edgewater 12 FS Boots', 499, '\r\n\r\nFilas casual outdoor hiking boots combine a casual look, to go along with their technical features. These midcut boots look good for both work and walking around town.\r\n', 'prod2.png'),
(9, 'Polo Collar Plain Men T-Shirt ', 199, 'Train your hardest in the Men Classic Short Sleeve Shirt! All Sofibella apparel is made with stay-dry microfiber material that is smooth to the touch and keeps you feeling cool throughout the match. The memory stretch design improves the performance by providing flexibility where itneeded most. Furthermore, UPF 50+ protection keeps you safe from the sun UV rays so you can give it your all even under the intense heat. Pair with any 7\" or 9\" short from the men SB Sport line!', 'prod5.png'),
(15, 'snow whit shirt', 200, 'sdf werwerr dsfdsf', 'prod5.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `user_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_password`) VALUES
(14, 'ahmed', 'ahmed111@gmail.com', '123456'),
(15, 'ammar', 'ammar1123@gmail.com', 'qazwsx'),
(16, 'smai', 'sami223@gmail.com', 'qwertyuiop'),
(19, 'redwan', 'redwanalahmed22111@gmail.com', 'poiutreqq'),
(20, 'Bilal', 'bilaltoor@gmail.com', 'wevrgreret');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
