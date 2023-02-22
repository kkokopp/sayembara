-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2022 at 08:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `excerpt` text NOT NULL,
  `body` text NOT NULL,
  `publish_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `excerpt`, `body`, `publish_at`, `created_at`, `updated_at`) VALUES
(1, 'Judul Pertama', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus adipisci libero, odit obcaecati placeat deleniti veritatis natus enim aperiam asperiores vitae unde culpa magni optio, ex eos, laboriosam distinctio sapiente aliquid totam quos molestiae!', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus adipisci libero, odit obcaecati placeat deleniti veritatis natus enim aperiam asperiores vitae unde culpa magni optio, ex eos, laboriosam distinctio sapiente aliquid totam quos molestiae! Voluptate hic, nam, ad dolore repellendus odio et eligendi corrupti repudiandae delectus, commodi in aliquid atque aperiam? Est quo neque, ipsa sunt temporibus nesciunt qui perferendis consequatur cupiditate, adipisci, veritatis unde exercitationem voluptas expedita nostrum. Consectetur similique mollitia laborum aperiam tempora eius at molestiae sint, enim fugit corporis dolores laboriosam assumenda illum maiores aliquid eos laudantium aspernatur? Sint vel laudantium libero, error quo maxime a in!', NULL, '2022-12-27 19:59:40', '2022-12-28 00:49:59'),
(2, 'Judul Ke Dua', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus adipisci libero, odit obcaecati placeat deleniti veritatis natus enim aperiam asperiores vitae unde culpa magni optio, ex eos, laboriosam distinctio sapiente aliquid totam quos molestiae!', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus adipisci libero, odit obcaecati placeat deleniti veritatis natus enim aperiam asperiores vitae unde culpa magni optio, ex eos, laboriosam distinctio sapiente aliquid totam quos molestiae! Voluptate hic, nam, ad dolore repellendus odio et eligendi corrupti repudiandae delectus, commodi in aliquid atque aperiam? Est quo neque, ipsa sunt temporibus nesciunt qui perferendis consequatur cupiditate, adipisci, veritatis unde exercitationem voluptas expedita nostrum. Consectetur similique mollitia laborum aperiam tempora eius at molestiae sint, enim fugit corporis dolores laboriosam assumenda illum maiores aliquid eos laudantium aspernatur? Sint vel laudantium libero, error quo maxime a in!', NULL, '2022-12-27 20:00:49', '2022-12-28 00:49:48'),
(3, 'Judul Ke Tiga', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus adipisci libero, odit obcaecati placeat deleniti veritatis natus enim aperiam asperiores vitae unde culpa magni optio, ex eos, laboriosam distinctio sapiente aliquid totam quos molestiae!', '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus adipisci libero, odit obcaecati placeat deleniti veritatis natus enim aperiam asperiores vitae unde culpa magni optio, ex eos, laboriosam distinctio sapiente aliquid totam quos molestiae! Voluptate hic, nam, ad dolore repellendus odio et eligendi corrupti repudiandae delectus, commodi in aliquid atque aperiam? Est quo neque, ipsa sunt temporibus nesciunt qui perferendis consequatur cupiditate, adipisci, veritatis unde exercitationem voluptas expedita nostrum. Consectetur similique mollitia laborum aperiam tempora eius at molestiae sint, enim fugit corporis dolores laboriosam assumenda illum maiores aliquid eos laudantium aspernatur? Sint vel laudantium libero, error quo maxime a in!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum vel nam facere magni dolorum ab saepe, ipsa omnis, laborum, laboriosam praesentium laudantium exercitationem. Iusto, quod! Blanditiis sint tenetur tempora eveniet!</p>', NULL, '2022-12-27 20:13:38', '2022-12-28 00:49:28'),
(4, 'Judul Ke empat', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus adipisci libero, odit obcaecati placeat deleniti veritatis natus enim aperiam asperiores vitae unde culpa magni optio, ex eos, laboriosam distinctio sapiente aliquid totam quos molestiae! Voluptate hic, nam, ad dolore repellendus', '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus adipisci libero, odit obcaecati placeat deleniti veritatis natus enim aperiam asperiores vitae unde culpa magni optio, ex eos, laboriosam distinctio sapiente aliquid totam quos molestiae! Voluptate hic, nam, ad dolore repellendus odio et eligendi corrupti repudiandae delectus, commodi in aliquid atque aperiam? Est quo neque, ipsa sunt temporibus nesciunt qui perferendis consequatur cupiditate, adipisci, veritatis unde exercitationem voluptas expedita nostrum<p><p>Consectetur similique mollitia laborum aperiam tempora eius at molestiae sint, enim fugit corporis dolores laboriosam assumenda illum maiores aliquid eos laudantium aspernatur? Sint vel laudantium libero, error quo maxime a in!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum vel nam facere magni dolorum ab saepe, ipsa omnis, laborum, laboriosam praesentium laudantium exercitationem. Iusto, quod! Blanditiis sint tenetur tempora eveniet!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque fuga, quis deserunt eveniet vel natus maxime odit repellat quod ipsam expedita explicabo. Esse unde veritatis illo possimus dolor ullam harum sequi quibusdam. Error voluptatum vitae libero deleniti, sequi consequuntur laborum laboriosam, doloremque numquam perspiciatis corrupti atque esse culpa, et reprehenderit?</p>', NULL, '2022-12-28 00:46:08', '2022-12-28 00:49:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
