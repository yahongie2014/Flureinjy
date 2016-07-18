-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2016 at 08:29 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flower`
--

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `id` int(10) UNSIGNED NOT NULL,
  `balance` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_se` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`id`, `balance`, `created_at`, `updated_at`, `date_se`) VALUES
(1, 100, '2016-03-30 22:31:24', '2016-03-30 22:31:24', '2015-05-10'),
(2, 100, '2016-03-30 22:32:53', '2016-03-30 22:32:53', '2015-04-30'),
(3, 100, '2016-03-30 22:34:02', '2016-03-30 22:34:02', '2016-04-11'),
(5, 100, '2016-03-30 22:43:02', '2016-03-30 22:43:02', '2016-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_se` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `phone`, `mobile`, `email`, `address`, `date_se`, `created_at`, `updated_at`) VALUES
(2, 'test', 11111, 1, 'djhduh@test.com', 'lkdowkdo', '0000-00-00', '2016-03-03 09:10:47', '2016-03-03 09:10:47'),
(3, 'test2', 8787, 8787, 'kjeiwjei@test2', 'kdjwijdijw', '0000-00-00', '2016-03-03 09:11:29', '2016-03-03 09:11:29'),
(5, 'crazy kamatcho', 2147483647, 1234, 'bedo.cka@g.com', 'ldwkowkdokw', '0000-00-00', '2016-03-14 14:22:50', '2016-03-14 14:22:50'),
(6, 'crazt_jaija', 382382, 1234567, 'kdjjd@dwodk.com', 'oeiofei', '2016-03-28', '2016-03-28 14:37:57', '2016-03-28 14:37:57'),
(7, 'dwijdiwjd', 9849483, 2837283, 'kekje@kfoefke.com', 'eee', '2016-03-29', '2016-03-29 12:37:01', '2016-03-29 12:37:01'),
(8, 'uhuhuh', 88787, 8786676, 'jhuhuh@jijij.com', 'kjijij', '2016-03-29', '2016-03-29 12:42:49', '2016-03-29 12:42:49'),
(9, 'kammmmm', 2147483647, 2147483647, 'fjeufheu@kokde.com', 'iefjiej', '2016-03-29', '2016-03-29 13:01:36', '2016-03-29 13:01:36'),
(10, 'huss', 938349, 98394839, 'kfjifej@kjdiwdj.con', 'lefkefkj', '2016-03-29', '2016-03-29 13:06:30', '2016-03-29 13:06:30'),
(11, 'hshshsh', 3992893, 10101, 'eie3u@keodk.com', 'ifjrifjri', '2016-04-02', '2016-04-02 14:07:35', '2016-04-02 14:07:35');

-- --------------------------------------------------------

--
-- Table structure for table `expand`
--

CREATE TABLE `expand` (
  `id` int(10) UNSIGNED NOT NULL,
  `supplier_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `employee` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_se` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `expand`
--

INSERT INTO `expand` (`id`, `supplier_name`, `employee`, `notes`, `amount`, `method`, `created_at`, `updated_at`, `date_se`) VALUES
(2, 'kamatcho', 'crazy', 'This Is Notes', 1000, 'cash', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-03-31'),
(5, 'kamatcho', 'crazy', 'kdkwjdk', 221, 'Visa', '2016-03-02 14:04:36', '2016-03-02 14:04:36', '2015-03-31'),
(6, 'kamatcho', 'crazy', 'fhuehfueh', 100, 'Cash', '2016-03-03 09:20:25', '2016-03-03 09:20:25', '2015-03-31'),
(7, 'crazy', 'crazy', 'jhuhu', 204, 'Cash', '2016-03-03 09:29:06', '2016-03-03 09:29:06', '2015-03-31'),
(8, 'kamatcho', 'crazy', 'dwijdiwj', 100, 'Cash', '2016-03-10 00:18:54', '2016-03-10 00:18:54', '2015-03-31'),
(9, 'crazy', 'crazy', 'hgyg', 90, 'Cash', '2016-03-10 00:19:52', '2016-03-10 00:19:52', '2015-03-31'),
(10, 'crazy', 'crazy', 'kdjwkijdw', 900, 'Cash', '2016-03-10 00:29:49', '2016-03-10 00:29:49', '2015-03-31'),
(11, 'kam', 'zzz', 'dwdiwdjiw', 100, 'cash', '2016-03-09 22:00:00', '0000-00-00 00:00:00', '2015-03-31'),
(12, 'zzz', 'sss', 'kdjwidjwi', 100, 'cash', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-03-31'),
(13, 'kswkjswi', 'oqksoqkoksqo', 'kdjwidjwi', 50, 'pay', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-03-14'),
(14, 'kdjwidj', 'wijdwidj', 'kdjwidjwi', 298, 'pay', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-03-14'),
(15, 'lksqoskq', 'wkdowdk', 'kdjwidjwi', 100, 'dmmkdke', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-03-15'),
(16, 'kjiji', 'kdijdijd', 'djwj', 100, 'pp', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-03-15'),
(17, 'koko', 'kiksok', 'dokdok', 2000, 'kkk', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-03-15'),
(18, 'dkdk', 'kfkfo', 'okokofkf', 100, 'ldldl', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-03-31'),
(19, 'crazy', 'crazy', 'dwjdiwjdw', 100, 'Visa', '2016-03-31 04:19:06', '2016-03-31 04:19:06', '2016-03-31'),
(20, 'test', 'crazy', 'test', 88, 'Visa', '2016-03-31 04:21:45', '2016-03-31 04:21:45', '2016-03-31'),
(21, 'crazy', 'crazy', 'uhu', 100, 'Visa', '2016-04-03 13:39:30', '2016-04-03 13:39:30', '2016-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `extras`
--

CREATE TABLE `extras` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `extras`
--

INSERT INTO `extras` (`id`, `name`, `type`, `created_at`, `updated_at`) VALUES
(4, 'Chocolate', 'Lindt Lindor,Lindt Excellence,Lindt Creation,Rocher,Rocher,Guylian,Loacker ', '2016-03-01 10:53:15', '2016-03-13 16:16:36'),
(5, 'Vase', 'Vase', '2016-03-01 12:42:33', '2016-03-13 16:18:29'),
(6, 'Balloons', 'Happy,Get,Love', '2016-03-01 12:42:46', '2016-03-13 16:19:14'),
(7, 'Greeting Cards', 'Happy,Get,Love', '2016-03-13 16:19:42', '2016-03-13 16:19:42'),
(9, 'Teddy Bears', 'Teddy', '2016-03-13 16:20:30', '2016-03-13 16:20:30'),
(10, 'Gifts', 'Gifts', '2016-03-13 16:20:54', '2016-03-13 16:20:54'),
(11, 'dwidjwi', 'kam kad', '2016-03-13 18:49:09', '2016-03-13 18:49:09');

-- --------------------------------------------------------

--
-- Table structure for table `flowers`
--

CREATE TABLE `flowers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `flowers`
--

INSERT INTO `flowers` (`id`, `name`, `color`, `created_at`, `updated_at`) VALUES
(1, 'Roses', 'White,Red,Pink,Orange,Yellow,Purple,Lilac,Fushia', '0000-00-00 00:00:00', '2016-03-13 16:26:36'),
(2, 'Baby Orchid', 'White,Fushia,Green,Red,Yellow,Purple,Orange,Pink', '2016-03-13 16:27:26', '2016-03-13 16:27:26'),
(3, 'Lillium', 'Pink,White,Fushia,Yellow,Cream', '2016-03-13 16:27:53', '2016-03-13 16:28:28'),
(4, 'Alstroemeria', 'White,Pink,Yellow,Red,Purple,Fushia', '2016-03-13 16:29:59', '2016-03-13 16:29:59'),
(5, 'Tulip', 'White,Pink,Red,Purple,Yellow,Red/Yellow', '2016-03-13 16:30:55', '2016-03-13 16:30:55'),
(6, 'Antherium', 'Green,White,Red,Purple', '2016-03-13 16:31:21', '2016-03-13 16:31:21'),
(7, 'Gerbera', 'White,Red,Pink,Yellow,Orange', '2016-03-13 16:31:46', '2016-03-13 16:31:46'),
(8, 'Crysanthemun', 'White,Red,Pink,Orange,Yellow,Purple,Lilac,Fushia,Blue', '2016-03-13 16:32:59', '2016-03-13 16:32:59'),
(9, 'Amaryllis', 'White,Pink,Red', '2016-03-13 16:33:24', '2016-03-13 16:33:24'),
(10, 'Cymbidium', 'White,Green,Red,Yellow,Pink,Orange', '2016-03-13 16:39:00', '2016-03-13 16:39:00'),
(11, 'Calla', 'White,Pink,Black,Green,Orange,Yellow', '2016-03-13 16:40:03', '2016-03-13 16:40:03'),
(12, 'Hyasinthus', 'White,Pink,Purple', '2016-03-13 16:40:25', '2016-03-13 16:40:25'),
(13, 'Bamboo', 'Green', '2016-03-13 16:40:33', '2016-03-13 16:40:33'),
(14, 'Orintiglum', 'White', '2016-03-13 16:40:48', '2016-03-13 16:40:48'),
(15, 'Hypericum', 'Red,Green,White', '2016-03-13 16:41:45', '2016-03-13 16:41:45'),
(16, 'Forsethia', 'Yellow', '2016-03-13 16:41:57', '2016-03-13 16:41:57'),
(17, 'William', 'Green', '2016-03-13 16:42:09', '2016-03-13 16:42:09'),
(18, 'Hydrengea', 'Green,White,Pink,Purple', '2016-03-13 16:42:39', '2016-03-13 16:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_02_22_122440_Setting_table', 1),
('2016_02_23_100802_create_extras_table', 1),
('2016_02_24_111600_Create_flowers_table', 1),
('2016_02_24_114918_Create_order_type_Table', 1),
('2016_02_24_125633_Create_Customer_table', 1),
('2016_02_25_112038_Create_Orders_Table', 1),
('2016_03_01_221212_Create_Order_Status_Table', 2),
('2016_03_02_113928_Create_Supplier_Table', 3),
('2016_03_02_150105_Create_Expend_Table', 4),
('2016_03_03_193309_create_roles_table', 5),
('2016_03_03_194233_addRoleId_to_usersTable', 6),
('2016_03_08_152020_Create_Role_Field_In_Users_Table', 7),
('2016_03_09_115233_Create_Full_Name_Field_Users_Table', 8),
('2016_03_20_143655_Create_Timeline_Table', 9),
('2016_03_30_174839_Create_Payment_Table', 10),
('2016_03_30_232304_Create_Balance_Table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_way` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sales_person` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` int(11) NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `order_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `container` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flower_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flower_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flower_budget` int(11) NOT NULL,
  `extra_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extra_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `extra_budget` int(11) NOT NULL,
  `delivery_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_address` text COLLATE utf8_unicode_ci NOT NULL,
  `delivery_notes` text COLLATE utf8_unicode_ci NOT NULL,
  `delivery_budget` int(11) NOT NULL,
  `message_card` text COLLATE utf8_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci NOT NULL,
  `pickup_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pickup_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ontime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `budget` int(11) NOT NULL,
  `remain` int(11) NOT NULL,
  `order_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ordertype` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_se` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `order_way`, `sales_person`, `client_name`, `phone`, `mobile`, `email`, `client_id`, `address`, `order_type`, `container`, `flower_type`, `flower_color`, `flower_budget`, `extra_name`, `extra_type`, `amount`, `extra_budget`, `delivery_name`, `delivery_phone`, `delivery_address`, `delivery_notes`, `delivery_budget`, `message_card`, `notes`, `pickup_date`, `pickup_time`, `ontime`, `budget`, `remain`, `order_status`, `ordertype`, `created_at`, `updated_at`, `date_se`) VALUES
(1, 'Telephone', 'kamatcho', 'ww', '2147483647', '989', '', 1, 'kjkjk', 'Bouquet', 'Wood Plate', 'Baby', 'White', 100, 'Vase', 'Vase', 12, 100, 'kamatcho', '2147483647', 'kjkjk', 'kiijei2jei2j', 100, 'ddddddddddddd', 'fff', '', '', '', 300, 200, '', 'Cancelled', '2016-02-29 20:33:03', '2016-04-03 15:33:16', '2016-02-29'),
(2, 'on', '', 'ww', '989', '9898', '', 898, 'kjkjk', 'kamatcho', '', '1-1', 'green-red', 3333, '', '', 0, 0, '', '0', '', '', 0, 'fffffffffffffffff', ',l,', '', '', '', 3333, 33333, '', 'Completed', '2016-02-29 20:35:11', '2016-03-16 12:53:09', '2016-02-29'),
(3, 'on', '', 'ww', '2147483647', '989', '', 898, 'kjkjk', 'kamatcho', '', '1', 'white', 212, '1', 'birds', 22, 3232, '', '0', '', '', 0, '', '', '', '', '', 0, 0, '', 'Cancelled', '2016-02-29 20:41:13', '2016-03-16 12:54:05', '2016-02-29'),
(4, '', '1', '', '0', '0', '', 0, '', 'kamatcho', '', '1', 'white', 0, '1', 'birds', 4443, 99, '', '0', '', '', 0, '', '', '', '', '', 0, 0, '', 'Delivered', '2016-02-29 21:00:10', '2016-03-20 15:01:12', '2016-02-29'),
(5, 'Telephone', '', 'kama', '9898', '0', '', 0, 'wjiwjfi', 'kamatcho', 'chocolate', '1', 'white', 873874, '4', 'crazt', 837, 874872, 'dijdijwd', '8742874', 'kfjeifjei', 'ijeijfeifj', 9828274, 'dwkjdwkj', 'ijiwjwi', '', '', '', 88, 90000, '', '', '2016-03-03 11:28:08', '2016-03-03 11:28:08', '2016-03-03'),
(6, 'In Shop', '', 'ldwkdow', '92849284', '0', '', 82782, 'lfejifj', 'kamatcho', 'crazy', 'Array', 'Array', 0, 'Array', 'Array', 0, 0, 'dkwjdiwj', '0', 'kfejkejfi', 'fjeifejij', 0, 'dkwijdiwj', 'ijdwijdwi', '827e82', '', 'On Time', 200, 282782, '', '', '2016-03-03 11:40:12', '2016-03-03 11:40:12', '2016-03-03'),
(7, 'In Shop', '', 'dkjwdijwdi', '827827382', '8748374', '', 9283293, 'dwkjdwij', 'kamatcho', 'chocolate', '1', 'white', 8273827, '4', 'crazt', 873, 878347, 'dwijdiwj', '8278372', 'jfhjeuhfue', 'jhufeheuh', 8272387, 'iefjifjei', 'ifejfije', '', '', '', 989, 872873, '', '', '2016-03-03 12:29:40', '2016-03-03 12:29:40', '2016-03-03'),
(8, 'In Shop', '', 'ekwjeiwj', '9388283', '0', '', 873873, 'kwhdwh', 'kamatcho', 'crazy', '1', 'white', 8273, '5', 'kjskjas', 2736, 8362, '2uu2y', '0', 'ury3uy', 'ur3y3u', 87283, 'weuyeu', 'uuy', '', '', '', 2000, 96592, '', '', '2016-03-09 15:38:04', '2016-03-09 15:38:04', '2016-03-09'),
(9, 'In Shop', 'kamatcho', 'shs', '832983', '9238398', '', 8223, 'kdjiwjdi', 'kamatcho', 'chocolate', 'crazy', 'white', 100, 'kamatcho', 'crazt', 12, 100, 'koko', '8732837', 'jdhwuhdwu', 'jwhduhdu', 100, 'diwjidwj', 'iwjidwj', '', '', '', 300, 290, '', '', '2016-03-10 18:10:38', '2016-03-10 18:10:38', '2016-03-10'),
(10, 'In Shop', 'kamatcho', '', '0', '1123264444', '', 0, '4 Othman Towers', 'Bouquet', 'Wood Pallette', 'Roses,Alstroemeria', 'Orange,Yellow', 300, 'Chocolate', 'Lindt', 2, 15, 'Hossam Ossama Nasef', '2147483647', '4 Othman Towerssss', 'Behind the japanese embassy', 70, 'Happy Birthday', 'Make it asap', '', '', '', 385, 35, '', '', '2016-03-13 17:55:52', '2016-03-13 17:55:52', '2016-03-13'),
(11, 'In Shop', 'kamatcho', 'test', '8787', '8787', '', 2, 'lkdowkdo', 'Bouquet', 'Vase', 'Lillium', 'Pink', 100, 'Chocolate', 'Lindt', 100, 100, 'nnnn', '938928', 'djwidwji', 'iwiwjdiw', 100, 'kijdiwji', 'ijefijfi', '', '', '', 300, 200, '', 'crazy', '2016-03-14 11:45:19', '2016-03-14 11:45:19', '2016-03-14'),
(12, 'In Shop', 'kamatcho', 'test', '8787', '8787', '', 2, 'lkdowkdo', 'Gerb', 'No Container', 'Antherium', 'Green', 100, 'Vase', 'Vase', 2, 20, 'diwjdiw', '87238273', 'whdwj', 'dwuhduwh', 100, '', '', '', '', '', 220, 120, '', 'crazy', '2016-03-15 11:04:04', '2016-03-15 11:04:04', '2016-03-15'),
(13, 'In Shop', 'kamatcho', 'test', '8787', '8787', '', 2, 'lkdowkdo', 'Bouquet', 'Vase', 'Alstroemeria', 'White', 100, 'Vase', 'Vase', 2, 20, 'dkwjdwi', '87837', 'diwjdiwj', 'idwjidwj', 100, 'dwijiwj', 'dwijdwij', '', '', '', 220, 120, '', 'crazy', '2016-03-15 11:07:26', '2016-03-15 11:07:26', '2016-03-15'),
(14, 'In Shop', 'kamatcho', 'test', '8787', '8787', '', 2, 'lkdowkdo', 'Bouquet', 'Vase', 'Lillium', 'Pink', 100, 'Gifts', 'Gifts', 3, 15, 'kamatcho', '2147483647', 'kamamamamam', 'kamamamamam', 100, 'kakakakakak', 'dkwjdij', '', '', '', 215, 115, '', 'crazy', '2016-03-15 11:39:46', '2016-03-15 11:39:46', '2016-03-15'),
(15, 'In Shop', 'kamatcho', 'test', '8787', '8787', '', 2, 'lkdowkdo', 'Bouquet', 'Vase', 'Baby', 'White', 200, 'Vase', 'Vase', 25, 2500, 'kam', '0101010101010', 'diidjidjd', 'ijijeij', 100, 'fijijwif', 'diwjiwdj', '', '', '', 100, 2700, '', 'crazy', '2016-03-15 12:09:27', '2016-03-15 12:09:27', '2016-03-15'),
(16, 'In Shop', 'crazy', 'test', '8787', '8787', '', 2, 'lkdowkdo', 'Bouquet', 'Vase', 'Tulip', 'White', 100, 'Vase', 'Vase', 3, 30, 'kamatcho', '92839283', 'lkdejfiej', 'fiejeifj', 100, 'deijieji', 'ifejeifj', '', '', '', 230, 130, '', 'Completed', '2016-03-28 12:50:10', '2016-03-28 14:51:20', '2016-03-27'),
(17, 'In Shop', 'crazy', 'test', '8787', '8787', '', 2, 'lkdowkdo', 'Bouquet', 'Vase', 'Tulip', 'White', 100, 'Vase', 'Vase', 3, 30, 'kamatcho', '92839283', 'lkdejfiej', 'fiejeifj', 100, 'deijieji', 'ifejeifj', '', '', '', 230, 130, '', 'Delivered', '2016-03-28 12:52:37', '2016-03-28 18:10:05', '2016-03-27'),
(18, 'In Shop', 'crazy', 'test', '8787', '8787', '', 2, 'lkdowkdo', 'Bouquet', 'Vase', 'Alstroemeria', 'White', 100, 'Chocolate', 'Lindt', 2, 200, '', '', '', '', 0, 'fekfek', 'ofkeofek', '', '', '', 300, 200, '', '', '2016-03-28 12:53:33', '2016-03-28 12:53:33', '2016-03-28'),
(19, 'In Shop', 'kamatcho', 'test', '8787', '8787', 'djhduh@test.com', 2, 'lkdowkdo', 'crazy', 'Vase', 'Tulip', 'White', 100, 'Balloons', 'Happy', 3, 300, '', '', '', '', 0, 'ofkeofek', 'lkofkoek', '', '', '', 400, 300, '', 'Cancelled', '2016-03-28 15:01:04', '2016-04-04 08:49:46', '2016-03-28'),
(20, 'In Shop', 'kamatcho', 'test', '8787', '8787', 'djhduh@test.com', 2, 'lkdowkdo', 'Bouquet', 'Vase', 'Tulip', 'White', 100, 'Balloons', 'Happy', 3, 300, '', '', '', '', 0, 'ofkeofek', 'lkofkoek', '', '', '', 400, 300, '', 'crazy', '2016-03-28 15:01:41', '2016-03-28 15:01:41', '2016-03-28'),
(21, 'Telephone', '', 'test2', '8787', '8787', 'kjeiwjei@test2', 3, 'kdjwijdijw', '', '', '', '', 0, '', '', 0, 0, '', '', '', '', 0, '', '', '', '', '', 0, 0, '', 'crazy', '2016-03-29 15:47:39', '2016-03-29 15:47:39', '2016-03-29'),
(22, 'Telephone', '', 'test2', '8787', '8787', 'kjeiwjei@test2', 3, 'kdjwijdijw', '', '', '', '', 0, '', '', 0, 0, '', '', '', '', 0, '', '', '', '', '', 0, 0, '', 'Cancelled', '2016-03-29 15:52:19', '2016-04-04 09:00:28', '2016-03-29'),
(23, 'In Shop', 'kamatcho', 'test2', '8787', '8787', 'kjeiwjei@test2', 3, 'kdjwijdijw', '', '', '', '', 0, '', '', 0, 0, '', '', '', '', 0, '', '', '', '', '', 0, 0, '', 'crazy', '2016-03-29 15:53:59', '2016-03-29 15:53:59', '2016-03-29'),
(24, 'In Shop', 'kamatcho', 'test2', '8787', '8787', 'kjeiwjei@test2', 3, 'kdjwijdijw', '', '', '', '', 0, '', '', 0, 0, '', '', '', '', 0, '', '', '', '', '', 0, 0, '', 'crazy', '2016-03-29 16:07:00', '2016-03-29 16:07:00', '2016-03-29'),
(25, 'In Shop', 'kamatcho', 'test2', '8787', '8787', 'kjeiwjei@test2', 3, 'kdjwijdijw', 'Bunch', 'No Container', 'Baby', 'White', 100, 'Balloons', 'Happy', 10, 150, '', '', '', '', 0, 'dwjdwij', 'owkodwk', '', '', '', 250, 140, '', 'crazy', '2016-03-30 16:22:51', '2016-03-30 16:22:51', '2016-03-30'),
(26, 'In Shop', 'kamatcho', 'test', '', '1', '', 2, '', '', '', '', '', 0, '', '', 0, 0, '', '', '', '', 0, '', '', '', '', '', 0, 0, '', 'crazy', '2016-04-02 14:03:46', '2016-04-02 14:03:46', '2016-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `order_status`, `created_at`, `updated_at`) VALUES
(6, 'Completed', '2016-03-13 16:48:05', '2016-03-13 16:48:05'),
(7, 'Delivered', '2016-03-13 16:48:11', '2016-03-13 16:48:11'),
(8, 'Cancelled', '2016-03-13 16:48:23', '2016-03-13 16:48:23'),
(9, 'Pending', '2016-03-13 16:48:29', '2016-03-13 16:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `order_type`
--

CREATE TABLE `order_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `options` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_type`
--

INSERT INTO `order_type` (`id`, `order_type`, `options`, `created_at`, `updated_at`) VALUES
(1, 'Bouquet', 'Vase,Tin Box,Wood Pallette,Wood Plate,Orma,Basket', '0000-00-00 00:00:00', '2016-03-13 16:44:42'),
(2, 'Bunch', 'No Container', '2016-03-13 16:45:28', '2016-03-13 16:45:28'),
(3, 'Gerb', 'No Container', '2016-03-13 16:46:44', '2016-03-13 16:47:19'),
(4, 'One Flower', 'No Container', '2016-03-13 16:46:58', '2016-03-13 16:47:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cash` int(11) NOT NULL,
  `visa` int(11) NOT NULL,
  `remain` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `order_id`, `cash`, `visa`, `remain`, `created_at`, `updated_at`) VALUES
(1, '25', 100, 10, 140, '2016-03-30 16:22:51', '2016-03-30 16:22:51'),
(2, '25', 10, 10, 120, '2016-03-30 20:44:57', '2016-03-30 20:44:57'),
(3, '26', 0, 0, 0, '2016-04-02 14:03:46', '2016-04-02 14:03:46');

-- --------------------------------------------------------

--
-- Table structure for table `setting_info`
--

CREATE TABLE `setting_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `mobile` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `order_status` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `setting_info`
--

INSERT INTO `setting_info` (`id`, `mobile`, `phone`, `email`, `address`, `order_status`, `created_at`, `updated_at`) VALUES
(1, '01010101', '225250135', 'info@fleurinjy.com', '30 Misr Helwan St. Beside Ghabour Auto\r\nMaadi, Cairo, Egypt', 'crazy', '0000-00-00 00:00:00', '2016-03-14 11:33:55');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(10) UNSIGNED NOT NULL,
  `supplier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `supplier`, `phone`, `mobile`, `email`, `supplier_id`, `address`, `created_at`, `updated_at`) VALUES
(1, 'kamatcho', 10101010, 2147483647, 'kamatcho@gmail.com', 98989, 'great street at awesome country', '0000-00-00 00:00:00', '2016-03-02 11:16:29'),
(3, 'crazy', 91829128, 8743847, 'eke@lllk.com', 928928, 'kdjwdijwdjw', '2016-03-02 10:37:40', '2016-03-02 10:37:40'),
(4, 'crazy', 909, 8787, 'djqij@jiji', 8787, 'jhdjwhdwuh', '2016-03-03 09:34:32', '2016-03-03 09:34:32'),
(5, 'test', 8787, 0, 'jjhh@test', 8787, 'cwjcwj', '2016-03-03 09:34:51', '2016-03-03 09:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `time_line`
--

CREATE TABLE `time_line` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_way` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sales_person` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` int(11) NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `order_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `container` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flower_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flower_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flower_budget` int(11) NOT NULL,
  `extra_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extra_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `extra_budget` int(11) NOT NULL,
  `delivery_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_address` text COLLATE utf8_unicode_ci NOT NULL,
  `delivery_notes` text COLLATE utf8_unicode_ci NOT NULL,
  `delivery_budget` int(11) NOT NULL,
  `message_card` text COLLATE utf8_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci NOT NULL,
  `pickup_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pickup_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ontime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `budget` int(11) NOT NULL,
  `amount_paid` int(11) NOT NULL,
  `method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remain` int(11) NOT NULL,
  `order_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ordertype` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_se` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `time_line`
--

INSERT INTO `time_line` (`id`, `order_id`, `order_way`, `sales_person`, `client_name`, `phone`, `mobile`, `email`, `client_id`, `address`, `order_type`, `container`, `flower_type`, `flower_color`, `flower_budget`, `extra_name`, `extra_type`, `amount`, `extra_budget`, `delivery_name`, `delivery_phone`, `delivery_address`, `delivery_notes`, `delivery_budget`, `message_card`, `notes`, `pickup_date`, `pickup_time`, `ontime`, `budget`, `amount_paid`, `method`, `remain`, `order_status`, `ordertype`, `created_at`, `updated_at`, `date_se`) VALUES
(1, 1, 'Telephone', 'kamatcho', 'ww', '2147483647', '989', '', 1, 'kjkjk', 'Bouquet', 'Wood Plate', 'Baby', 'White', 100, 'Vase', 'Vase', 12, 100, 'kamatcho', '2147483647', 'kjkjk', 'kiijei2jei2j', 100, 'ddddddddddddd', 'fff', '', '', '', 300, 100, 'cash', 200, '', '', '2016-03-20 14:01:16', '2016-03-20 14:01:16', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `full_name`) VALUES
(1, 'kamatcho', 'bedo.kamatcho@gmail.com', '$2y$10$kkZbdqDEeotlbFWa8hS/seVs/p3jhonuTwsoTtEixNBIiHjCGxpGC', 'AZWeXXUm73XdyKiV1v86SelowcacC2ScLu1yTA12JIP1lFPcif1RfLwbiKPh', '0000-00-00 00:00:00', '2016-03-17 12:08:40', 'admin', 'kam kam'),
(2, 'admin', 'admin@admin.com', '$2y$10$OwqVtyWcfbqHwVR0EXRegOB1EVFJ6f680iIhIAomyn6Ui2CtyWpcq', 'pm43IwIanOkhIP3RoT45xEIgfoChHMDIYjRFvD6hy4DO58REkSUTwwhBXTCA', '0000-00-00 00:00:00', '2016-03-17 20:18:46', 'admin', ''),
(3, 'sales', 'sales@sales.com', '$2y$10$AoxOJyT2n6TUcupNnXQ7RuvL6yGlzpfpD9lIVIz0TsqROm8ghNeny', 'jq8fYTC7fCxe0HEhFB4fTgruJWirsqOmceKUCQIaUqaTCKrvmofMjBYT1GTE', '0000-00-00 00:00:00', '2016-03-17 12:08:40', 'sales', 'kamatcho'),
(4, 'expenses', 'expenses@expenses.com', '$2y$10$bBR8u6Fz3cq5Zwi/ZRpNKOUcvmE7LkFrx2JA79NQOzXV99y7KG7Lq', 'PkMq1WfYP4XVagOio2bRG7oSnF3YsApr3rfsVYDDi0HRCtZbDZWWvfynrIYT', '0000-00-00 00:00:00', '2016-03-17 12:08:40', 'expenses', ''),
(5, 'afmed', 'ahmed@ahmed.com', '$2y$10$damdGwqk8bELDt8TWjFaXu4QCMvEapCQMtNkE1i6QRTXAHZ3v1Rsa', NULL, '2016-03-09 11:13:29', '2016-03-17 12:08:40', 'admin', 'ahmed'),
(6, 'dwjijwd', 'kdwjidwj@kdjiwdj.con', '$2y$10$xwmJMEcQlip3wIz82aXNcu6UX7XWT0SVgezswIgSsAk/IIqMJL9.W', NULL, '2016-03-17 12:19:39', '2016-03-17 12:19:39', 'admin', 'kjsikjf kwjdiwj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expand`
--
ALTER TABLE `expand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extras`
--
ALTER TABLE `extras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flowers`
--
ALTER TABLE `flowers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_type`
--
ALTER TABLE `order_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_info`
--
ALTER TABLE `setting_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_line`
--
ALTER TABLE `time_line`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balance`
--
ALTER TABLE `balance`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `expand`
--
ALTER TABLE `expand`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `extras`
--
ALTER TABLE `extras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `flowers`
--
ALTER TABLE `flowers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `order_type`
--
ALTER TABLE `order_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `setting_info`
--
ALTER TABLE `setting_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `time_line`
--
ALTER TABLE `time_line`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
