-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 12:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sport_clothes`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `slug`, `created_at`, `updated_at`) VALUES
(14, 'NEW ARRIVALS', 0, 'new-arrivals', '2021-12-08 06:58:05', '2021-12-08 06:58:05'),
(18, 'Thiết Bị Văn Phòng', 0, 'thiet-bi-van-phong', '2022-02-10 09:07:24', '2022-03-06 06:08:48'),
(19, 'Thiết Bị Mạng, Phần Mềm', 0, 'thiet-bi-mang-phan-mem', '2022-02-19 01:05:44', '2022-03-06 06:08:26'),
(20, 'Linh Kiện Máy Tính', 0, 'linh-kien-may-tinh', '2022-02-19 01:06:15', '2022-03-06 06:07:54'),
(21, 'Phụ kiện Laptop, PC', 0, 'phu-kien-laptop-pc', '2022-02-19 01:06:42', '2022-03-06 06:07:25'),
(22, 'Laptop, Máy Tính Xách Tay', 0, 'laptop-may-tinh-xach-tay', '2022-02-19 01:07:04', '2022-03-06 06:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `sdt`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Thương Nguyễn Văn', '387589076', 'thuongx1bg@gmail.com', '123456789', '2021-11-04 09:17:51', '2021-11-04 09:17:51'),
(15, 'thuong', '1', 'uongx1bg@gmail.com', '1', '2021-11-04 12:39:43', '2021-11-04 12:39:43'),
(16, 'Thương Nguyễn Văn', '387589076', 'thuongx1bg1@gmail.com', '123456789', '2021-12-08 08:26:15', '2021-12-08 08:26:15'),
(17, 'Thương Nguyễn Văn', '387589076', 'thuongx1bg123@gmail.com', '123456789', '2021-12-08 08:31:58', '2021-12-08 08:31:58'),
(18, 'Thương Nguyễn Văn', '387589076', 'thuongx1bgdfasdf@gmail.com', '123456789', '2021-12-08 08:33:42', '2021-12-08 08:33:42'),
(19, 'admin', '387589123', 'thuongx1bgtest@gmail.com', '123456789', '2021-12-16 07:25:13', '2021-12-16 07:25:13'),
(20, 'test', '1234', 'thuongx1bg134@gmail.com', 'test', '2022-02-10 09:00:54', '2022-02-10 09:00:54'),
(21, 'test1235', '1234', 'thuongx1bg1345@gmail.com', '123', '2022-02-10 09:01:37', '2022-02-10 09:01:37'),
(22, 'dieu linh vu', '387512376', 'dieulinhvu@gmail.com', 'test', '2022-02-10 09:05:05', '2022-02-10 09:05:05'),
(23, 'linh test', '387589123', 'linktest1@gmail.com', 'test', '2022-02-10 09:10:25', '2022-02-10 09:10:25'),
(24, 'Vũ Diệu Linh', '387589321', 'linhdieuvu@gmail.com', '123456', '2022-02-19 01:39:57', '2022-02-19 01:39:57'),
(25, 'Quyet Chi', '123456789', 'quyetchi@gmail.com', '123456789', '2022-03-06 06:35:31', '2022-03-06 06:35:31'),
(26, 'Nguyễn Văn Thương', '387589077', 'thuongabc@gmail.com', 'nvt240801', '2022-07-26 18:35:15', '2022-07-26 18:35:15'),
(27, 'hoang nam', '387589023', 'hoangnam1223321@gmail.com', '123456789', '2022-07-26 18:58:24', '2022-07-26 18:58:24'),
(28, 'ádfadf', '387589071', 'thuong@gmail.com', '123456789', '2022-07-26 19:47:46', '2022-07-26 19:47:46'),
(29, 'Nguyễn Văn Thương', '0357322331', 'qualadeptrai@gmail.com', '$2y$10$efX3xmhjdVRzLqZ1vJMRxuyXbqWQ5PYt8nxVDeFZOwIJcd6Ckb7d2', '2022-07-26 20:56:42', '2022-07-26 20:56:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_26_064127_create_settings_table', 2),
(6, '2021_10_26_175112_create_sliders_table', 3),
(7, '2021_10_29_154130_create_categories_table', 4),
(8, '2021_10_29_160712_create_products_table', 5),
(9, '2021_10_29_161518_create_product_images_table', 5),
(10, '2021_10_29_161616_create_tags_table', 5),
(11, '2021_10_29_161714_create_product_tags_table', 6),
(12, '2021_10_31_162737_httpsadd_column_feature_image', 6),
(13, '2021_11_04_160402_create_customers_table', 7),
(14, '2021_11_04_171053_create_shippings_table', 8),
(15, '2021_11_04_171713_create_shippings_table', 9),
(16, '2021_11_05_041702_add_column_customer_id', 10),
(17, '2021_11_05_121447_create_payments_table', 11),
(18, '2021_11_05_121536_create_orders_table', 11),
(19, '2021_11_05_121622_create_order_details_table', 11),
(20, '2021_11_05_130733_create_sessions_table', 12),
(21, '2021_11_05_153728_payment_id', 13),
(22, '2021_11_08_155613_create_roles_table', 14),
(23, '2021_11_08_155727_create_permissions_table', 14),
(24, '2021_11_08_155834_create_table_user_role', 14),
(25, '2021_11_08_155912_permission_role', 14),
(26, '2021_11_10_162425_add_parent_id_permistion', 15),
(27, '2021_11_10_171848_add_key_permisstion', 16);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `total` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `total`, `status`, `created_at`, `updated_at`, `payment_id`) VALUES
(31, 25, 38, '1,344,000.00', 'đang chờ xử lý', NULL, NULL, 38),
(32, 16, 39, '376,950.00', 'đang chờ xử lý', NULL, NULL, 39),
(33, 26, 40, '264,600.00', 'đang chờ xử lý', NULL, NULL, 40),
(34, 27, 41, '1,680,000.00', 'đang chờ xử lý', NULL, NULL, 41);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sales_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `price`, `product_sales_quantity`, `created_at`, `updated_at`) VALUES
(9, 10, 21, 'cấu trúc dữ', '420', 1, NULL, NULL),
(10, 11, 21, 'cấu trúc dữ', '420', 1, NULL, NULL),
(11, 12, 18, 'Sweater Dinosaur - Green', '420', 3, NULL, NULL),
(12, 13, 20, 'Vietnam Racing Tee - Black', '350', 2, NULL, NULL),
(13, 14, 21, 'cấu trúc dữ', '420', 3, NULL, NULL),
(14, 14, 18, 'Sweater Dinosaur - Green', '420', 3, NULL, NULL),
(15, 15, 21, 'cấu trúc dữ', '420', 1, NULL, NULL),
(16, 15, 20, 'Vietnam Racing Tee - Black', '350', 5, NULL, NULL),
(17, 16, 23, 'Thương Nguyễn Văn', '100', 4, NULL, NULL),
(18, 16, 19, 'The Painting Tee - Black', '320', 1, NULL, NULL),
(19, 16, 21, 'cấu trúc dữ', '420', 1, NULL, NULL),
(20, 17, 31, 'Euro Champion Tee - Black', '320000', 3, NULL, NULL),
(21, 17, 30, 'Vietnam Racing Tee - White', '300000', 1, NULL, NULL),
(22, 17, 28, 'Sweater Dinosaur - Green', '420000', 1, NULL, NULL),
(23, 17, 33, 'Magic Chrome Tee - Blue Steel', '320000', 1, NULL, NULL),
(24, 18, 31, 'Euro Champion Tee - Black', '320000', 1, NULL, NULL),
(25, 20, 25, 'Highlife Sweater - Pink', '420000', 1, NULL, NULL),
(26, 20, 46, 'Áo AC Milan sân khách mẫu ba 2021 – 2022 hàng Thái Lan', '260000', 1, NULL, NULL),
(27, 21, 56, 'Bra 360s Crossfit màu trắng', '320000', 2, NULL, NULL),
(28, 22, 56, 'Bra 360s Crossfit màu trắng', '320000', 4, NULL, NULL),
(29, 22, 52, 'Áo ba lỗ tập GYM Nam chữ Y form suông trắng', '320000', 1, NULL, NULL),
(30, 23, 56, 'Bra 360s Crossfit màu trắng', '320000', 3, NULL, NULL),
(31, 23, 52, 'Áo ba lỗ tập GYM Nam chữ Y form suông trắng', '320000', 1, NULL, NULL),
(32, 24, 46, 'Áo AC Milan sân khách mẫu ba 2021 – 2022 hàng Thái Lan', '260000', 4, NULL, NULL),
(33, 25, 42, 'Bra 360s Shine màu xanh biển', '390000', 4, NULL, NULL),
(34, 26, 56, 'Bra 360s Crossfit màu trắng', '320000', 4, NULL, NULL),
(35, 27, 51, 'Quần short training tập GYM Nam 360s E7 đen', '320000', 1, NULL, NULL),
(36, 27, 52, 'Áo ba lỗ tập GYM Nam chữ Y form suông trắng', '320000', 1, NULL, NULL),
(37, 28, 56, 'Bra 360s Crossfit màu trắng', '320000', 2, NULL, NULL),
(38, 28, 58, 'dienj thoại 1', '320000', 3, NULL, NULL),
(39, 29, 52, 'Dây Apple watch hình', '115000', 3, NULL, NULL),
(40, 29, 51, 'Vòng tay kèm charm con hổ', '22000', 2, NULL, NULL),
(41, 29, 49, 'Set nguyên liệu trang trí slime', '32000', 4, NULL, NULL),
(42, 31, 60, 'Laptop Asus E210MA-GJ537W', '320000', 4, NULL, NULL),
(43, 32, 52, 'Mainboard ASUS ROG', '115000', 3, NULL, NULL),
(44, 32, 56, 'Ghế đỡ điện thoại', '14000', 1, NULL, NULL),
(45, 33, 52, 'Mainboard ASUS ROG', '115000', 2, NULL, NULL),
(46, 33, 51, 'Màn chiếu điện Dalite', '22000', 1, NULL, NULL),
(47, 34, 60, 'Laptop Asus E210MA-GJ537W', '320000', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `method`, `status`, `created_at`, `updated_at`) VALUES
(17, '1', 'Đang chờ xử lý', NULL, NULL),
(18, '1', 'Đang chờ xử lý', NULL, NULL),
(19, '2', 'Đang chờ xử lý', NULL, NULL),
(20, '1', 'Đang chờ xử lý', NULL, NULL),
(21, '2', 'Đang chờ xử lý', NULL, NULL),
(22, '2', 'Đang chờ xử lý', NULL, NULL),
(23, '2', 'Đang chờ xử lý', NULL, NULL),
(24, '1', 'Đang chờ xử lý', NULL, NULL),
(25, '2', 'Đang chờ xử lý', NULL, NULL),
(26, '2', 'Đang chờ xử lý', NULL, NULL),
(27, '2', 'Đang chờ xử lý', NULL, NULL),
(28, '1', 'Đang chờ xử lý', NULL, NULL),
(29, '1', 'Đang chờ xử lý', NULL, NULL),
(30, '1', 'Đang chờ xử lý', NULL, NULL),
(31, '2', 'Đang chờ xử lý', NULL, NULL),
(32, '1', 'Đang chờ xử lý', NULL, NULL),
(33, '1', 'Đang chờ xử lý', NULL, NULL),
(34, '1', 'Đang chờ xử lý', NULL, NULL),
(35, '1', 'Đang chờ xử lý', NULL, NULL),
(36, '1', 'Đang chờ xử lý', NULL, NULL),
(37, '1', 'Đang chờ xử lý', NULL, NULL),
(38, '1', 'Đang chờ xử lý', NULL, NULL),
(39, '1', 'Đang chờ xử lý', NULL, NULL),
(40, '1', 'Đang chờ xử lý', NULL, NULL),
(41, '1', 'Đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `key_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `created_at`, `updated_at`, `parent_id`, `key_code`) VALUES
(1, 'danh mục sản phẩm', 'danh mục sản phẩm', NULL, NULL, 0, ''),
(2, 'Danh sách danh mục sản phẩm', 'Danh sách danh mục sản phẩm', NULL, NULL, 1, 'list_category'),
(3, 'Thêm danh mục sản phẩm', ' Thêm danh mục sản phẩm', NULL, NULL, 1, 'add_category'),
(4, 'Sửa danh mục sản phẩm', ' Sửa danh mục sản phẩm', NULL, NULL, 1, 'edit_category'),
(5, 'Xóa danh mục sản phẩm', ' Xóa danh mục sản phẩm', NULL, NULL, 1, 'delete_category'),
(6, 'Sản phẩm', 'Sản phẩm', NULL, NULL, 0, ''),
(7, 'List sản phẩm', 'List sản phẩm', NULL, NULL, 6, 'list_product'),
(8, 'Thêm sản phẩm', 'Thêm sản phẩm', NULL, NULL, 6, 'add_product'),
(9, 'Sửa sản phẩm', 'Sửa sản phẩm', NULL, NULL, 6, 'edit_product'),
(10, 'Xóa sản phẩm', 'Xóa sản phẩm', NULL, NULL, 6, 'delete_product'),
(11, 'Slider', 'Slider', NULL, NULL, 0, ''),
(12, 'List slider', 'List slider', NULL, NULL, 11, 'list_slider'),
(13, 'Thêm slider', 'Thêm slider', NULL, NULL, 11, 'add_slider'),
(14, 'Sửa slider', 'Sửa slider', NULL, NULL, 11, 'edit_slider'),
(15, 'Xóa slider', 'Xóa slider', NULL, NULL, 11, 'delete_slider'),
(16, 'Setting', 'Setting', NULL, NULL, 0, ''),
(17, 'List setting', 'List setting', NULL, NULL, 16, 'list_setting'),
(18, 'Thêm setting', 'Thêm setting', NULL, NULL, 16, 'add_setting'),
(19, 'Sửa setting', 'Sửa setting', NULL, NULL, 16, 'edit_setting'),
(20, 'Xóa setting', 'Xóa setting', NULL, NULL, 16, 'delete_setting'),
(21, 'Đơn hàng', 'Đơn hàng', NULL, NULL, 0, ''),
(22, 'List đơn hàng', 'List đơn hàng', NULL, NULL, 21, 'list_order'),
(23, 'Xem đơn hàng', 'Xem đơn hàng', NULL, NULL, 21, 'see_order'),
(24, 'Xóa đơn hàng', 'Xóa đơn hàng', NULL, NULL, 21, 'delete_order'),
(25, 'Nhân viên', 'Nhân viên', NULL, NULL, 0, ''),
(26, 'List nhân viên', 'List nhân viên', NULL, NULL, 25, 'list_user'),
(27, 'Thêm nhân viên', 'Thêm nhân viên', NULL, NULL, 25, 'add_user'),
(28, 'Sửa nhân viên', 'Sửa nhân viên', NULL, NULL, 25, 'edit_user'),
(29, 'Xóa nhân viên', 'Xóa nhân viên', NULL, NULL, 25, 'delete_user'),
(30, 'Vai trò', 'Vai trò', NULL, NULL, 0, ''),
(31, 'List vai trò', 'List vai trò', NULL, NULL, 30, 'list_role'),
(32, 'Thêm vai trò', 'Thêm vai trò', NULL, NULL, 30, 'add_role'),
(33, 'Sửa vai trò', 'Sửa vai trò', NULL, NULL, 30, 'edit_role'),
(34, 'Xóa vai trò', 'Xóa vai trò', NULL, NULL, 30, 'delete_role');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permisstion_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permisstion_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 2, 5, NULL, NULL),
(2, 3, 5, NULL, NULL),
(3, 4, 5, NULL, NULL),
(4, 5, 5, NULL, NULL),
(5, 7, 5, NULL, NULL),
(7, 9, 5, NULL, NULL),
(8, 10, 5, NULL, NULL),
(9, 12, 5, NULL, NULL),
(10, 13, 5, NULL, NULL),
(11, 14, 5, NULL, NULL),
(12, 15, 5, NULL, NULL),
(13, 2, 1, NULL, NULL),
(14, 3, 1, NULL, NULL),
(15, 4, 1, NULL, NULL),
(16, 5, 1, NULL, NULL),
(17, 7, 1, NULL, NULL),
(18, 8, 1, NULL, NULL),
(19, 9, 1, NULL, NULL),
(20, 10, 1, NULL, NULL),
(21, 12, 1, NULL, NULL),
(22, 13, 1, NULL, NULL),
(23, 14, 1, NULL, NULL),
(24, 15, 1, NULL, NULL),
(25, 17, 1, NULL, NULL),
(26, 18, 1, NULL, NULL),
(27, 19, 1, NULL, NULL),
(28, 20, 1, NULL, NULL),
(29, 22, 1, NULL, NULL),
(30, 23, 1, NULL, NULL),
(31, 24, 1, NULL, NULL),
(32, 26, 1, NULL, NULL),
(33, 27, 1, NULL, NULL),
(34, 28, 1, NULL, NULL),
(35, 29, 1, NULL, NULL),
(36, 31, 1, NULL, NULL),
(37, 32, 1, NULL, NULL),
(38, 33, 1, NULL, NULL),
(39, 34, 1, NULL, NULL),
(40, 2, 3, NULL, NULL),
(41, 3, 3, NULL, NULL),
(42, 4, 3, NULL, NULL),
(43, 5, 3, NULL, NULL),
(44, 7, 3, NULL, NULL),
(45, 8, 3, NULL, NULL),
(46, 9, 3, NULL, NULL),
(47, 10, 3, NULL, NULL),
(56, 22, 3, NULL, NULL),
(57, 23, 3, NULL, NULL),
(58, 24, 3, NULL, NULL),
(59, 12, 2, NULL, NULL),
(60, 13, 2, NULL, NULL),
(61, 14, 2, NULL, NULL),
(62, 15, 2, NULL, NULL),
(63, 17, 2, NULL, NULL),
(64, 18, 2, NULL, NULL),
(65, 19, 2, NULL, NULL),
(66, 20, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_image_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `used_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `feature_image_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `feature_image_path`, `content`, `used_id`, `category_id`, `created_at`, `updated_at`, `feature_image_name`) VALUES
(50, 'Kaspersky Internet Security', '32000', '/storage/product/9/USPtGSTulXijKQmrZoJP.48109_kis___kas.jpg', 'Thông số sản phẩm\r\nBảo mật toàn diện đa nền tảng cho người dùng máy tính, Mac, điện thoại...\r\nCUỘC SỐNG SỐ CỦA BẠN – TRONG MỘT “MÔI TRƯỜNG SỐ” NGUY HIỂM Bởi vì bạn thường dành rất nhiều thời gian trong cuộc sống cho việc trực tuyến – bằng nhiều loại máy tính, tablet và smartphone – Chúng tôi luôn cố gắng làm tốt nhất để bảo vệ bạn trên tất cả các thiết bị mà bạn dùng khỏi bị nhiễm mã độc, bị tấn công và lộ thông tin từ các phần mềm độc hại, hacker và tội phạm mạng.\r\nSản phẩm cùng nhóm', 9, 14, '2021-12-08 07:39:16', '2022-03-06 06:20:41', '48109_kis___kas.jpg'),
(51, 'Màn chiếu điện Dalite', '22000', '/storage/product/9/8VsHx7VdouvZsR9dmGIn.47848_man_chieu_dien_dalite.jpg', 'Thông số sản phẩm\r\nKích thước: 1m78 x 1m78 Tương ứng: (70\" x 70\")\r\nKích thước đường chéo: 100\"\r\nTỉ lệ: 1:1\r\nCó điều khiển từ xa,\r\nVải màn chất lượng cao Matte white\r\nGóc nhìn +/- 55 độ, gain đạt 1.2', 9, 14, '2021-12-08 07:40:15', '2022-03-06 06:18:56', '47848_man_chieu_dien_dalite.jpg'),
(52, 'Mainboard ASUS ROG', '115000', '/storage/product/9/VR4SCz3RsDzdjZjpfGUS.47178_rog_strix_x570_f_gaming_aura_sync_01.png', 'Thông số sản phẩm\r\nChạy CPU Ryzen thế hệ 2 và 3 với kết nối siêu nhanh 2 ổ M.2, USB 3.2 Gen2 và AMD StoreMI\r\nAura Sync điều chỉnh dải led độc quyền ASUS tích hợp đầu nối RGB và đầu nối thế hệ 2', 9, 14, '2021-12-08 07:41:16', '2022-03-06 06:17:45', '47178_rog_strix_x570_f_gaming_aura_sync_01.png'),
(56, 'Ghế đỡ điện thoại', '14000', '/storage/product/9/7yqiOFMOh6BCrGNnImzK.63578_laptop_asus_vivobook_a415ea_6.jpg', 'Giao hàng và Đổi trả: \r\n\r\nNhận ship hàng nội thành hoá đơn từ 100k, ngoại thành từ 150k chưa kể ship.\r\nĐổi trả hàng trong vòng 3 ngày nếu lỗi từ nhà sản xuất.\r\nKhông nhận đổi trả với lí do \"Không vừa ý\"', 9, 14, '2021-12-08 07:44:40', '2022-03-06 06:16:09', '63578_laptop_asus_vivobook_a415ea_6.jpg'),
(59, 'Laptop Asus D515DA-EJ845T', '35000', '/storage/product/9/59Mice8S2uyyEGqHa85T.60426_laptop_asus_d515da_ej845t_bac_15.png', 'Thông số sản phẩm\r\nCPU: AMD R3 3250U\r\nRAM: 4GB\r\nỔ cứng: 512GB SSD\r\nVGA: Onboard\r\nMàn hình: 15.6 inch FHD\r\nHĐH: Win 10\r\nMàu: Bạc', 9, 14, '2022-02-19 01:11:35', '2022-03-06 06:14:56', '60426_laptop_asus_d515da_ej845t_bac_15.png'),
(60, 'Laptop Asus E210MA-GJ537W', '320000', '/storage/product/9/T0EXrykqqiUtuJWTI0CZ.63577_laptop_asus_e210ma_gj353t_14.jpeg', 'Thông số sản phẩm\r\nCPU: Intel Celeron N4020\r\nRAM: 4GB\r\nỔ cứng: 128GB SSD\r\nVGA: Onboard\r\nMàn hình: 11.6 inch HD\r\nHĐH: Win 10\r\nMàu: Xanh', 9, 14, '2022-02-19 01:22:21', '2022-03-06 06:11:53', '63577_laptop_asus_e210ma_gj353t_14.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint(20) NOT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image_path`, `product_id`, `image_name`, `created_at`, `updated_at`) VALUES
(3, '/storage/product/1/u41y1oGgs22YBgfPK0Id.z2859964020591_8c97910a26670d72198087b8841b2e1f.jpg', 3, 'z2859964020591_8c97910a26670d72198087b8841b2e1f.jpg', '2021-10-31 09:45:15', '2021-10-31 09:45:15'),
(6, '/storage/product/1/fekPiMxAag9SniSxHwkH.gi26drfg2mle-1-mkz1-hinh_mat_truoc-0_f1f3d6b0f39344e5976dd8e359536bbc_master.jpg', 5, 'gi26drfg2mle-1-mkz1-hinh_mat_truoc-0_f1f3d6b0f39344e5976dd8e359536bbc_master.jpg', '2021-11-02 08:33:40', '2021-11-02 08:33:40'),
(7, '/storage/product/1/E9cIa68zUJhG9k3IiPRb.w3_8b8f52d88bc9448c8c29e8dfbe378166.webp', 6, 'w3_8b8f52d88bc9448c8c29e8dfbe378166.webp', '2021-11-02 08:41:24', '2021-11-02 08:41:24'),
(10, '/storage/product/1/2d0NCotTX4MYqz6xLZbF.w1_c237390c0216408a9f9511bb569e9826.webp', 9, 'w1_c237390c0216408a9f9511bb569e9826.webp', '2021-11-02 08:42:58', '2021-11-02 08:42:58'),
(11, '/storage/product/1/99OL2Mewrn5abFK9gDXm.w1_c237390c0216408a9f9511bb569e9826.webp', 10, 'w1_c237390c0216408a9f9511bb569e9826.webp', '2021-11-02 08:43:53', '2021-11-02 08:43:53'),
(13, '/storage/product/1/oSKFM7QL3ZdnnzVUqOwy.w3_8b8f52d88bc9448c8c29e8dfbe378166.webp', 12, 'w3_8b8f52d88bc9448c8c29e8dfbe378166.webp', '2021-11-02 08:45:05', '2021-11-02 08:45:05'),
(14, '/storage/product/1/QVSoXZxKqwr9RETQcBhF.img_2593_7ca0a1527dc94da1bfe446cda9f4fda4.jpg', 13, 'img_2593_7ca0a1527dc94da1bfe446cda9f4fda4.jpg', '2021-11-02 08:47:32', '2021-11-02 08:47:32'),
(15, '/storage/product/1/HxnFzfVv2S4HwM5Z0Qx7.w1_c237390c0216408a9f9511bb569e9826.webp', 14, 'w1_c237390c0216408a9f9511bb569e9826.webp', '2021-11-02 08:48:09', '2021-11-02 08:48:09'),
(17, '/storage/product/1/PW4XtzYwJlQT7yzQDWmI.50c93f18-939a-43fd-adb2-03e02fd0f30c_18a8c1aba74a4b57b237616c814ae09c_master.jpeg', 8, '50c93f18-939a-43fd-adb2-03e02fd0f30c_18a8c1aba74a4b57b237616c814ae09c_master.jpeg', '2021-11-02 23:57:26', '2021-11-02 23:57:26'),
(18, '/storage/product/1/5l0uu4K2F2coQKAS0sqo.c23d3f7b-54bd-4369-aa67-90c5ab225d42_c3cef2db313c48518ddf8cedc3ff5fdc_master.jpeg', 8, 'c23d3f7b-54bd-4369-aa67-90c5ab225d42_c3cef2db313c48518ddf8cedc3ff5fdc_master.jpeg', '2021-11-02 23:57:26', '2021-11-02 23:57:26'),
(19, '/storage/product/1/E7ikdD32wOvCjRPIuSeg.655f6a70-c500-444b-9be3-ad9a0839cd00_1f865de3d7c94865ad98691a15db13ef_master.jpeg', 7, '655f6a70-c500-444b-9be3-ad9a0839cd00_1f865de3d7c94865ad98691a15db13ef_master.jpeg', '2021-11-02 23:59:24', '2021-11-02 23:59:24'),
(20, '/storage/product/1/adrzZ1dF6jRBp9XYL7m2.94041adf-b69c-4816-9ef8-5afaa2b72189_19d44f6eb8984ea2a9770b84b5d7c523_master.jpeg', 7, '94041adf-b69c-4816-9ef8-5afaa2b72189_19d44f6eb8984ea2a9770b84b5d7c523_master.jpeg', '2021-11-02 23:59:24', '2021-11-02 23:59:24'),
(27, '/storage/product/1/DCrYCzeanqIIM4f9JFIg.700e53d4-b03f-45eb-a1d9-55304ff95c55_13df6e4a182047189013388139902897_master.jpeg', 4, '700e53d4-b03f-45eb-a1d9-55304ff95c55_13df6e4a182047189013388139902897_master.jpeg', '2021-11-03 06:50:07', '2021-11-03 06:50:07'),
(28, '/storage/product/1/izZl543FWT63fP6fvwcq.655f6a70-c500-444b-9be3-ad9a0839cd00_1f865de3d7c94865ad98691a15db13ef_master.jpeg', 4, '655f6a70-c500-444b-9be3-ad9a0839cd00_1f865de3d7c94865ad98691a15db13ef_master.jpeg', '2021-11-03 06:50:07', '2021-11-03 06:50:07'),
(29, '/storage/product/1/zxj73Aoekx6gMOfuHNmQ.94041adf-b69c-4816-9ef8-5afaa2b72189_19d44f6eb8984ea2a9770b84b5d7c523_master.jpeg', 4, '94041adf-b69c-4816-9ef8-5afaa2b72189_19d44f6eb8984ea2a9770b84b5d7c523_master.jpeg', '2021-11-03 06:50:07', '2021-11-03 06:50:07'),
(30, '/storage/product/1/KARgWlFZHCPNfsdnhnaV.655f6a70-c500-444b-9be3-ad9a0839cd00_1f865de3d7c94865ad98691a15db13ef_master.jpeg', 15, '655f6a70-c500-444b-9be3-ad9a0839cd00_1f865de3d7c94865ad98691a15db13ef_master.jpeg', '2021-11-03 07:07:38', '2021-11-03 07:07:38'),
(31, '/storage/product/1/NWQT11ZcoQ84uPDDRdeC.94041adf-b69c-4816-9ef8-5afaa2b72189_19d44f6eb8984ea2a9770b84b5d7c523_master.jpeg', 15, '94041adf-b69c-4816-9ef8-5afaa2b72189_19d44f6eb8984ea2a9770b84b5d7c523_master.jpeg', '2021-11-03 07:07:38', '2021-11-03 07:07:38'),
(32, '/storage/product/1/IY12otMJkzET9gfWhD2y.f1c9bb8a-2a5f-4b92-8f76-e064f847bbc8_261a3a9dcab84df496ef7874c3834f7d_master (1).jpeg', 16, 'f1c9bb8a-2a5f-4b92-8f76-e064f847bbc8_261a3a9dcab84df496ef7874c3834f7d_master (1).jpeg', '2021-11-03 07:11:06', '2021-11-03 07:11:06'),
(33, '/storage/product/1/1ev8rAb0LqxslU1fMlDs.700e53d4-b03f-45eb-a1d9-55304ff95c55_13df6e4a182047189013388139902897_master (1).jpeg', 16, '700e53d4-b03f-45eb-a1d9-55304ff95c55_13df6e4a182047189013388139902897_master (1).jpeg', '2021-11-03 07:11:06', '2021-11-03 07:11:06'),
(34, '/storage/product/1/PVCXrWwNDHkbdeFau0hY.47e1d12e-acba-4820-9a97-b725c3aff50c_d2fa0ec82f8f44b7a26781138c78c36f_master.jpeg', 17, '47e1d12e-acba-4820-9a97-b725c3aff50c_d2fa0ec82f8f44b7a26781138c78c36f_master.jpeg', '2021-11-03 07:12:27', '2021-11-03 07:12:27'),
(35, '/storage/product/1/aF8bJC9vUXhIDb2NiyVA.f796c82d-cd71-49ce-a170-1a0296b15904_08abfb6bc0a748a4b71253ff515e99e5_master.jpeg', 17, 'f796c82d-cd71-49ce-a170-1a0296b15904_08abfb6bc0a748a4b71253ff515e99e5_master.jpeg', '2021-11-03 07:12:27', '2021-11-03 07:12:27'),
(36, '/storage/product/1/boWDJBsSriY803w01pUu.50151cb3-5311-461b-a17d-870ad58db1be_6ef48b3d18804c61bec50fbdd68d2088_master.jpeg', 18, '50151cb3-5311-461b-a17d-870ad58db1be_6ef48b3d18804c61bec50fbdd68d2088_master.jpeg', '2021-11-03 07:13:12', '2021-11-03 07:13:12'),
(37, '/storage/product/1/pw3Ak17idQC5flpngEkp.8478fc13-19b8-418a-9cf1-6850af70f05a_7098ecffb2cf4359a71e1142c8a5c76a_master.jpeg', 18, '8478fc13-19b8-418a-9cf1-6850af70f05a_7098ecffb2cf4359a71e1142c8a5c76a_master.jpeg', '2021-11-03 07:13:12', '2021-11-03 07:13:12'),
(38, '/storage/product/1/B0nLFJpLZowNkS8gFjtD.7dd5e1027c49b517ec58_77210046ec144afbb3ad82d1b0d3fbf3_master.jpg', 19, '7dd5e1027c49b517ec58_77210046ec144afbb3ad82d1b0d3fbf3_master.jpg', '2021-11-03 07:14:19', '2021-11-03 07:14:19'),
(39, '/storage/product/1/niQ9Y8Qu8gtH0QNq3ixW.a65fac8731ccf892a1dd_f582c8b34873475da4399e8e02311ede_master.jpg', 19, 'a65fac8731ccf892a1dd_f582c8b34873475da4399e8e02311ede_master.jpg', '2021-11-03 07:14:19', '2021-11-03 07:14:19'),
(40, '/storage/product/1/6PIeLcd7KpqdUwWujK92.5_54bfa71cf8b0409fb4db7247b4c04b74_master.jpg', 20, '5_54bfa71cf8b0409fb4db7247b4c04b74_master.jpg', '2021-11-03 07:15:15', '2021-11-03 07:15:15'),
(41, '/storage/product/1/31SgSWJcoiXlDeN5aOGk.5_54bfa71cf8b0409fb4db7247b4c04b74_master.jpg', 21, '5_54bfa71cf8b0409fb4db7247b4c04b74_master.jpg', '2021-11-03 09:42:02', '2021-11-03 09:42:02'),
(42, '/storage/product/1/FEs6pRcDoWRpEDlBVYXT.7dd5e1027c49b517ec58_77210046ec144afbb3ad82d1b0d3fbf3_master.jpg', 21, '7dd5e1027c49b517ec58_77210046ec144afbb3ad82d1b0d3fbf3_master.jpg', '2021-11-03 09:42:02', '2021-11-03 09:42:02'),
(43, '/storage/product/1/Y9RpstPvtfsdiaW8yuhY.7dd5e1027c49b517ec58_77210046ec144afbb3ad82d1b0d3fbf3_master.jpg', 22, '7dd5e1027c49b517ec58_77210046ec144afbb3ad82d1b0d3fbf3_master.jpg', '2021-11-04 21:08:03', '2021-11-04 21:08:03'),
(44, '/storage/product/1/BCHCagzqEM3XLXBNpCgF.a65fac8731ccf892a1dd_f582c8b34873475da4399e8e02311ede_master.jpg', 22, 'a65fac8731ccf892a1dd_f582c8b34873475da4399e8e02311ede_master.jpg', '2021-11-04 21:08:03', '2021-11-04 21:08:03'),
(45, '/storage/product/9/8chTQDThRuuguHpYAXPa.50151cb3-5311-461b-a17d-870ad58db1be_6ef48b3d18804c61bec50fbdd68d2088_master.jpeg', 23, '50151cb3-5311-461b-a17d-870ad58db1be_6ef48b3d18804c61bec50fbdd68d2088_master.jpeg', '2021-11-09 08:11:24', '2021-11-09 08:11:24'),
(46, '/storage/product/9/lo9PsejtGe504lJemu4C.8478fc13-19b8-418a-9cf1-6850af70f05a_7098ecffb2cf4359a71e1142c8a5c76a_master.jpeg', 23, '8478fc13-19b8-418a-9cf1-6850af70f05a_7098ecffb2cf4359a71e1142c8a5c76a_master.jpeg', '2021-11-09 08:11:24', '2021-11-09 08:11:24'),
(47, '/storage/product/9/8C4YtFe0MipuBLLqJyuA.47e1d12e-acba-4820-9a97-b725c3aff50c_d2fa0ec82f8f44b7a26781138c78c36f_master.jpeg', 23, '47e1d12e-acba-4820-9a97-b725c3aff50c_d2fa0ec82f8f44b7a26781138c78c36f_master.jpeg', '2021-11-09 08:11:24', '2021-11-09 08:11:24'),
(51, '/storage/product/9/HTxtwbVHZ0WTNC0tU4Os.5_54bfa71cf8b0409fb4db7247b4c04b74_master.jpg', 24, '5_54bfa71cf8b0409fb4db7247b4c04b74_master.jpg', '2021-11-09 08:17:53', '2021-11-09 08:17:53'),
(52, '/storage/product/9/s6qxWBeRCVbv5MCtPgZ0.7dd5e1027c49b517ec58_77210046ec144afbb3ad82d1b0d3fbf3_master.jpg', 24, '7dd5e1027c49b517ec58_77210046ec144afbb3ad82d1b0d3fbf3_master.jpg', '2021-11-09 08:17:53', '2021-11-09 08:17:53'),
(53, '/storage/product/9/514TL41Zo4hSG5JGXqMP.a65fac8731ccf892a1dd_f582c8b34873475da4399e8e02311ede_master.jpg', 24, 'a65fac8731ccf892a1dd_f582c8b34873475da4399e8e02311ede_master.jpg', '2021-11-09 08:17:53', '2021-11-09 08:17:53'),
(54, '/storage/product/9/fZhwNG5dGFrPenhN7Ajm.50c93f18-939a-43fd-adb2-03e02fd0f30c_18a8c1aba74a4b57b237616c814ae09c_master (1).jpeg', 25, '50c93f18-939a-43fd-adb2-03e02fd0f30c_18a8c1aba74a4b57b237616c814ae09c_master (1).jpeg', '2021-11-10 23:52:28', '2021-11-10 23:52:28'),
(55, '/storage/product/9/woxXNvRe51P0JtfaUaZl.c23d3f7b-54bd-4369-aa67-90c5ab225d42_c3cef2db313c48518ddf8cedc3ff5fdc_master (1).jpeg', 25, 'c23d3f7b-54bd-4369-aa67-90c5ab225d42_c3cef2db313c48518ddf8cedc3ff5fdc_master (1).jpeg', '2021-11-10 23:52:28', '2021-11-10 23:52:28'),
(56, '/storage/product/9/Yfc6PawcfKylEHdFC1yL.655f6a70-c500-444b-9be3-ad9a0839cd00_1f865de3d7c94865ad98691a15db13ef_master (1).jpeg', 26, '655f6a70-c500-444b-9be3-ad9a0839cd00_1f865de3d7c94865ad98691a15db13ef_master (1).jpeg', '2021-11-10 23:54:19', '2021-11-10 23:54:19'),
(57, '/storage/product/9/G3diTYplsCDcvwfo1NPM.94041adf-b69c-4816-9ef8-5afaa2b72189_19d44f6eb8984ea2a9770b84b5d7c523_master (1).jpeg', 26, '94041adf-b69c-4816-9ef8-5afaa2b72189_19d44f6eb8984ea2a9770b84b5d7c523_master (1).jpeg', '2021-11-10 23:54:19', '2021-11-10 23:54:19'),
(58, '/storage/product/9/R89eZyqQ5NaQLbBXuZC8.f1c9bb8a-2a5f-4b92-8f76-e064f847bbc8_261a3a9dcab84df496ef7874c3834f7d_master (2).jpeg', 27, 'f1c9bb8a-2a5f-4b92-8f76-e064f847bbc8_261a3a9dcab84df496ef7874c3834f7d_master (2).jpeg', '2021-11-10 23:55:44', '2021-11-10 23:55:44'),
(59, '/storage/product/9/bCTM6wcvfQOYQ54lp3Yc.700e53d4-b03f-45eb-a1d9-55304ff95c55_13df6e4a182047189013388139902897_master (2).jpeg', 27, '700e53d4-b03f-45eb-a1d9-55304ff95c55_13df6e4a182047189013388139902897_master (2).jpeg', '2021-11-10 23:55:44', '2021-11-10 23:55:44'),
(60, '/storage/product/9/tdz8fe7OFQiB50He8uXh.50151cb3-5311-461b-a17d-870ad58db1be_6ef48b3d18804c61bec50fbdd68d2088_master (1).jpeg', 28, '50151cb3-5311-461b-a17d-870ad58db1be_6ef48b3d18804c61bec50fbdd68d2088_master (1).jpeg', '2021-11-10 23:57:10', '2021-11-10 23:57:10'),
(61, '/storage/product/9/ynlGlWPunHWCB7AKEAU3.8478fc13-19b8-418a-9cf1-6850af70f05a_7098ecffb2cf4359a71e1142c8a5c76a_master (1).jpeg', 28, '8478fc13-19b8-418a-9cf1-6850af70f05a_7098ecffb2cf4359a71e1142c8a5c76a_master (1).jpeg', '2021-11-10 23:57:10', '2021-11-10 23:57:10'),
(62, '/storage/product/9/nDLhDdyFLhmbMEsD6x1I.47e1d12e-acba-4820-9a97-b725c3aff50c_d2fa0ec82f8f44b7a26781138c78c36f_master (1).jpeg', 29, '47e1d12e-acba-4820-9a97-b725c3aff50c_d2fa0ec82f8f44b7a26781138c78c36f_master (1).jpeg', '2021-11-10 23:58:14', '2021-11-10 23:58:14'),
(63, '/storage/product/9/wrEmNsgTT58buqqEnw6J.f796c82d-cd71-49ce-a170-1a0296b15904_08abfb6bc0a748a4b71253ff515e99e5_master (1).jpeg', 29, 'f796c82d-cd71-49ce-a170-1a0296b15904_08abfb6bc0a748a4b71253ff515e99e5_master (1).jpeg', '2021-11-10 23:58:14', '2021-11-10 23:58:14'),
(64, '/storage/product/9/nrnOIka5eWVDQ2udffV0.db2948ec24bfede1b4ae_4cc61f6dd4cf475b9041fdc19df6ba17_master.jpg', 30, 'db2948ec24bfede1b4ae_4cc61f6dd4cf475b9041fdc19df6ba17_master.jpg', '2021-11-10 23:59:26', '2021-11-10 23:59:26'),
(97, '/storage/product/9/z4PgMRc61XMf7GKX28vJ.Ao-ac-milan-san-khach-mau-ba-1-300x300.jpg', 46, 'Ao-ac-milan-san-khach-mau-ba-1-300x300.jpg', '2021-12-08 07:03:44', '2021-12-08 07:03:44'),
(98, '/storage/product/9/GT9L9Y9oc8Lxs0Mz8ZYd.Ao-ac-milan-san-khach-mau-ba-4-300x300.jpg', 46, 'Ao-ac-milan-san-khach-mau-ba-4-300x300.jpg', '2021-12-08 07:03:44', '2021-12-08 07:03:44'),
(99, '/storage/product/9/UxknbLxXbhWvewRibWBj.Ao-ac-milan-san-khach-40-768x768.jpg', 45, 'Ao-ac-milan-san-khach-40-768x768.jpg', '2021-12-08 07:08:48', '2021-12-08 07:08:48'),
(100, '/storage/product/9/lDqOyCibLGiKL9LVfQRz.Ao-ac-milan-san-khach-41-768x768.jpg', 45, 'Ao-ac-milan-san-khach-41-768x768.jpg', '2021-12-08 07:08:48', '2021-12-08 07:08:48'),
(101, '/storage/product/9/MV0Rxju23I818BGHGNOl.Ao-barca-san-khach-mau-ba-2-768x768.jpg', 44, 'Ao-barca-san-khach-mau-ba-2-768x768.jpg', '2021-12-08 07:10:24', '2021-12-08 07:10:24'),
(102, '/storage/product/9/hMzBBK0BRVogiyxq0piS.Ao-bra-360s-zipper-mau-tim-1-768x768.jpg', 43, 'Ao-bra-360s-zipper-mau-tim-1-768x768.jpg', '2021-12-08 07:11:36', '2021-12-08 07:11:36'),
(103, '/storage/product/9/J2kVOZqTAnD57xpYnzEP.Ao-bra-360s-zipper-mau-tim-2-768x768.jpg', 43, 'Ao-bra-360s-zipper-mau-tim-2-768x768.jpg', '2021-12-08 07:11:36', '2021-12-08 07:11:36'),
(104, '/storage/product/9/0MJAHwP4aYCvUbfnkzT5.Ao-bras-shine-mau-xanh-bien-2-768x768.jpg', 42, 'Ao-bras-shine-mau-xanh-bien-2-768x768.jpg', '2021-12-08 07:12:44', '2021-12-08 07:12:44'),
(105, '/storage/product/9/aBgp4IriYnnfEWMQIlXj.Bra-shine-xanh-bien-30-768x768.jpg', 42, 'Bra-shine-xanh-bien-30-768x768.jpg', '2021-12-08 07:12:44', '2021-12-08 07:12:44'),
(106, '/storage/product/9/no4WxuDuS0c3cIkk4MQd.Ao-bras-crossfit-mau-xanh-bien-2-768x768.jpg', 41, 'Ao-bras-crossfit-mau-xanh-bien-2-768x768.jpg', '2021-12-08 07:14:07', '2021-12-08 07:14:07'),
(107, '/storage/product/9/IlweEjzkxbj3nUs9hRIX.Bra-crossfit-xanh-bien-30-768x768.jpg', 41, 'Bra-crossfit-xanh-bien-30-768x768.jpg', '2021-12-08 07:14:07', '2021-12-08 07:14:07'),
(108, '/storage/product/9/YQozt3NN1yZlw47T1jGL.Quan-legging-lung-shaping-hong-1-768x768.jpg', 40, 'Quan-legging-lung-shaping-hong-1-768x768.jpg', '2021-12-08 07:15:38', '2021-12-08 07:15:38'),
(109, '/storage/product/9/GSHktZu48eV5B87JyKsW.Quan-legging-lung-shaping-hong-3-768x768.jpg', 40, 'Quan-legging-lung-shaping-hong-3-768x768.jpg', '2021-12-08 07:15:38', '2021-12-08 07:15:38'),
(110, '/storage/product/9/k3UJdzPWxe1zyLZSGy2d.energy-neon-1-768x768.jpg', 39, 'energy-neon-1-768x768.jpg', '2021-12-08 07:17:06', '2021-12-08 07:17:06'),
(111, '/storage/product/9/p9VqUp6BPswcHdevFE5Z.Tanktop-energy-neon-1-768x768.jpg', 39, 'Tanktop-energy-neon-1-768x768.jpg', '2021-12-08 07:17:06', '2021-12-08 07:17:06'),
(112, '/storage/product/9/mHP3pwWec86KCpp2dgOl.Ao-ceres-do-1-768x768.jpg', 38, 'Ao-ceres-do-1-768x768.jpg', '2021-12-08 07:18:16', '2021-12-08 07:18:16'),
(113, '/storage/product/9/D4FFWORAclYM7JTLQJfl.Ao-ceres-do-3-768x768.jpg', 38, 'Ao-ceres-do-3-768x768.jpg', '2021-12-08 07:18:16', '2021-12-08 07:18:16'),
(114, '/storage/product/9/ecYvkPdMs7ztl6qkbryi.Ao-achilles-xam-1-768x768.jpg', 37, 'Ao-achilles-xam-1-768x768.jpg', '2021-12-08 07:19:21', '2021-12-08 07:19:21'),
(115, '/storage/product/9/41adcKX1R5JrXZocduyX.Ao-achilles-xam-2-768x768.jpg', 37, 'Ao-achilles-xam-2-768x768.jpg', '2021-12-08 07:19:21', '2021-12-08 07:19:21'),
(116, '/storage/product/9/OR2l3m4oM1rengsl1ysn.bong-gai-1.jpg', 36, 'bong-gai-1.jpg', '2021-12-08 07:21:57', '2021-12-08 07:21:57'),
(117, '/storage/product/9/KkPPPgclIBStB28YQveQ.Bong-yoga-gai-5.jpg', 36, 'Bong-yoga-gai-5.jpg', '2021-12-08 07:21:57', '2021-12-08 07:21:57'),
(118, '/storage/product/9/aEh6fgSiKmLAnlZD3zkm.Tui-dung-tham-yoga-Canvas-mau-trang-3-768x768.jpg', 35, 'Tui-dung-tham-yoga-Canvas-mau-trang-3-768x768.jpg', '2021-12-08 07:23:05', '2021-12-08 07:23:05'),
(119, '/storage/product/9/4rkcZlubnJWQz6LX8imo.Tui-dung-tham-yoga-Canvas-mau-trang-4-768x768.jpg', 35, 'Tui-dung-tham-yoga-Canvas-mau-trang-4-768x768.jpg', '2021-12-08 07:23:05', '2021-12-08 07:23:05'),
(120, '/storage/product/9/WFmSec6MQ0GcBpvlJTjl.khan-trai-tham-tap-yoga-xanh-bich-1.jpg', 34, 'khan-trai-tham-tap-yoga-xanh-bich-1.jpg', '2021-12-08 07:25:56', '2021-12-08 07:25:56'),
(121, '/storage/product/9/BgBsm6UUWHKi7mH7spfP.khan-trai-tham-tap-yoga-xanh-bich-4.jpg', 34, 'khan-trai-tham-tap-yoga-xanh-bich-4.jpg', '2021-12-08 07:25:56', '2021-12-08 07:25:56'),
(122, '/storage/product/9/A3wPfATdYIw85mjxiq6F.tui-dung-tham-pido-1-768x768.jpg', 33, 'tui-dung-tham-pido-1-768x768.jpg', '2021-12-08 07:27:14', '2021-12-08 07:27:14'),
(123, '/storage/product/9/DDaAd92bbgPoLjZ8nzqi.Tui-dung-tham-pido-mau-neon-1-768x768.jpg', 33, 'Tui-dung-tham-pido-mau-neon-1-768x768.jpg', '2021-12-08 07:27:14', '2021-12-08 07:27:14'),
(124, '/storage/product/9/JpwoEaOnDa9KluI6pXMr.Tui-dung-tham-premier-1-768x768.jpg', 32, 'Tui-dung-tham-premier-1-768x768.jpg', '2021-12-08 07:28:28', '2021-12-08 07:28:28'),
(125, '/storage/product/9/nsRd4hcGjNqIwUHsfvEG.Tui-dung-tham-premier-3-768x768.jpg', 32, 'Tui-dung-tham-premier-3-768x768.jpg', '2021-12-08 07:28:28', '2021-12-08 07:28:28'),
(126, '/storage/product/9/YK5mh95h83CHkbRCETt1.tui-yoga-1.jpg', 31, 'tui-yoga-1.jpg', '2021-12-08 07:29:32', '2021-12-08 07:29:32'),
(127, '/storage/product/9/mJSMpHgbBWTNIIOvAbPk.tui-yoga-2.jpg', 31, 'tui-yoga-2.jpg', '2021-12-08 07:29:32', '2021-12-08 07:29:32'),
(130, '/storage/product/9/1fgTtbD87aXLJPobzkUF.Bra-lux-nude-3-768x768.jpg', 48, 'Bra-lux-nude-3-768x768.jpg', '2021-12-08 07:36:23', '2021-12-08 07:36:23'),
(131, '/storage/product/9/YfvxvQw1fFvuRv8YqYd4.Bra-lux-nude-30-768x768.jpg', 48, 'Bra-lux-nude-30-768x768.jpg', '2021-12-08 07:36:23', '2021-12-08 07:36:23'),
(134, '/storage/product/9/wIYqAdR06uB4VWXlnU1s.Ao-bra-360s-zipper-mau-tim-1-768x768.jpg', 47, 'Ao-bra-360s-zipper-mau-tim-1-768x768.jpg', '2021-12-08 07:38:22', '2021-12-08 07:38:22'),
(135, '/storage/product/9/4jBslQJl7yjiby4pUIXP.Ao-bra-360s-zipper-mau-tim-2-768x768.jpg', 47, 'Ao-bra-360s-zipper-mau-tim-2-768x768.jpg', '2021-12-08 07:38:22', '2021-12-08 07:38:22'),
(141, '/storage/product/9/n9zsBCbv5pncKMSk5G1W.Ao-barca-san-khach-mau-ba-2-768x768.jpg', 53, 'Ao-barca-san-khach-mau-ba-2-768x768.jpg', '2021-12-08 07:41:53', '2021-12-08 07:41:53'),
(142, '/storage/product/9/kmjQQyMHfvoR56JWWK2p.Ao-barca-san-khach-mau-ba-2-768x768.jpg', 54, 'Ao-barca-san-khach-mau-ba-2-768x768.jpg', '2021-12-08 07:42:07', '2021-12-08 07:42:07'),
(143, '/storage/product/9/3S3FKvH5o6lPss8EUwVN.Ao-barca-san-khach-mau-ba-2-768x768.jpg', 55, 'Ao-barca-san-khach-mau-ba-2-768x768.jpg', '2021-12-08 07:42:21', '2021-12-08 07:42:21'),
(148, '/storage/product/9/qC8i9A7z8Gka2CNkcR6K.Ao-ac-milan-san-khach-mau-ba-4-300x300.jpg', 57, 'Ao-ac-milan-san-khach-mau-ba-4-300x300.jpg', '2021-12-16 07:33:01', '2021-12-16 07:33:01'),
(149, '/storage/product/9/APZUus8rgvmGrUCuayGc.ao-ba-lo-tap-gym-trang-2.jpg', 57, 'ao-ba-lo-tap-gym-trang-2.jpg', '2021-12-16 07:33:01', '2021-12-16 07:33:01'),
(150, '/storage/product/9/djwotXUBqYRfJ2XxjlS8.thiet_ke_khong_ten__37__162a743f86674cfab506c29cbf8f935d_master.png', 58, 'thiet_ke_khong_ten__37__162a743f86674cfab506c29cbf8f935d_master.png', '2022-02-10 09:08:33', '2022-02-10 09:08:33'),
(151, '/storage/product/9/aW5Sd3GFZgjuLm0RVeoe.thiet_ke_khong_ten__36__40a31e3889064d138f6ac63665fa4708_master.png', 58, 'thiet_ke_khong_ten__36__40a31e3889064d138f6ac63665fa4708_master.png', '2022-02-10 09:08:33', '2022-02-10 09:08:33'),
(161, '/storage/product/9/9sRwmH5dzxSjYxBwaRYi.DSC04239.jpg', 49, 'DSC04239.jpg', '2022-02-19 01:20:45', '2022-02-19 01:20:45'),
(164, '/storage/product/9/Aggztqwxp44euVoIVs5K.img_3365.jpg', 61, 'img_3365.jpg', '2022-02-19 01:29:57', '2022-02-19 01:29:57'),
(165, '/storage/product/9/pj41hL1ahmSZC58g3uK0.13b9449ebbe42f40d588a093ddefa5db.jpg', 62, '13b9449ebbe42f40d588a093ddefa5db.jpg', '2022-02-19 01:31:34', '2022-02-19 01:31:34'),
(166, '/storage/product/9/eHR5nvdqJvU74h6wUkIm.d6a1f9384c183b23d7443a90bcb4291a.jpg', 62, 'd6a1f9384c183b23d7443a90bcb4291a.jpg', '2022-02-19 01:31:34', '2022-02-19 01:31:34'),
(167, '/storage/product/9/SqlHNF1rCV3heqJja7mA.img_3355.jpg', 63, 'img_3355.jpg', '2022-02-19 01:33:19', '2022-02-19 01:33:19'),
(168, '/storage/product/9/ATvOWCjTpIRW5YcvzTji.img_3356.jpg', 63, 'img_3356.jpg', '2022-02-19 01:33:19', '2022-02-19 01:33:19'),
(170, '/storage/product/9/n2hTQc9l3Sg8XZZOftKx.IMG_0822_2.jpg', 64, 'IMG_0822_2.jpg', '2022-02-26 02:51:02', '2022-02-26 02:51:02'),
(171, '/storage/product/9/kBuDpQbEqmsKA6EFbKGa.IMG_1853.jpg', 64, 'IMG_1853.jpg', '2022-02-26 02:51:02', '2022-02-26 02:51:02'),
(174, '/storage/product/9/tOct4VEkflC3xLJZBwB2.250_64341_pc_gaming_hacom_amd_pro.jpg', 60, '250_64341_pc_gaming_hacom_amd_pro.jpg', '2022-03-06 06:11:53', '2022-03-06 06:11:53'),
(175, '/storage/product/9/dNI9ce16R8AKjdHMoVuX.63577_laptop_asus_e210ma_gj353t_14.jpeg', 60, '63577_laptop_asus_e210ma_gj353t_14.jpeg', '2022-03-06 06:11:53', '2022-03-06 06:11:53'),
(176, '/storage/product/9/2YuzBGnsMOdolUQL08Lw.60426_laptop_asus_d515da_ej845t_bac_15.png', 59, '60426_laptop_asus_d515da_ej845t_bac_15.png', '2022-03-06 06:14:56', '2022-03-06 06:14:56'),
(177, '/storage/product/9/fRaDk7LKVVInyUU78BAr.63577_laptop_asus_e210ma_gj353t_14.jpeg', 59, '63577_laptop_asus_e210ma_gj353t_14.jpeg', '2022-03-06 06:14:56', '2022-03-06 06:14:56'),
(178, '/storage/product/9/TeZ57VSv8vDaYIouk0SO.63577_laptop_asus_e210ma_gj353t_14.jpeg', 56, '63577_laptop_asus_e210ma_gj353t_14.jpeg', '2022-03-06 06:16:09', '2022-03-06 06:16:09'),
(179, '/storage/product/9/AviopoaeaxoFnfOf1qHx.63578_laptop_asus_vivobook_a415ea_6.jpg', 56, '63578_laptop_asus_vivobook_a415ea_6.jpg', '2022-03-06 06:16:09', '2022-03-06 06:16:09'),
(180, '/storage/product/9/UuVwlAJ0cu8Ru5DX4wF8.250_64341_pc_gaming_hacom_amd_pro.jpg', 52, '250_64341_pc_gaming_hacom_amd_pro.jpg', '2022-03-06 06:17:45', '2022-03-06 06:17:45'),
(181, '/storage/product/9/C4zjDxmKqVpsyJltURkQ.47178_rog_strix_x570_f_gaming_aura_sync_01.png', 52, '47178_rog_strix_x570_f_gaming_aura_sync_01.png', '2022-03-06 06:17:45', '2022-03-06 06:17:45'),
(182, '/storage/product/9/JRgKFku6KrMvmMs13STu.60426_laptop_asus_d515da_ej845t_bac_15.png', 52, '60426_laptop_asus_d515da_ej845t_bac_15.png', '2022-03-06 06:17:45', '2022-03-06 06:17:45'),
(183, '/storage/product/9/5GaSpC2Ca73krNvxbY8v.13_Jan2903ea5b31bc4135604d59507b69bebd.jpg', 51, '13_Jan2903ea5b31bc4135604d59507b69bebd.jpg', '2022-03-06 06:18:56', '2022-03-06 06:18:56'),
(184, '/storage/product/9/xHCsx9Dk1hHKt71iBap7.15_Feb42d1ee448aac3d9e4523caa0be2b6147.png', 51, '15_Feb42d1ee448aac3d9e4523caa0be2b6147.png', '2022-03-06 06:18:56', '2022-03-06 06:18:56'),
(185, '/storage/product/9/OVYVEEPx8bZ6Q1jTPFGj.250_64341_pc_gaming_hacom_amd_pro.jpg', 51, '250_64341_pc_gaming_hacom_amd_pro.jpg', '2022-03-06 06:18:56', '2022-03-06 06:18:56'),
(186, '/storage/product/9/9XRzICrQsxD3buVUFFna.47178_rog_strix_x570_f_gaming_aura_sync_01.png', 51, '47178_rog_strix_x570_f_gaming_aura_sync_01.png', '2022-03-06 06:18:56', '2022-03-06 06:18:56'),
(187, '/storage/product/9/rE90bpGCc4i0AOz8xG48.47178_rog_strix_x570_f_gaming_aura_sync_01.png', 50, '47178_rog_strix_x570_f_gaming_aura_sync_01.png', '2022-03-06 06:20:41', '2022-03-06 06:20:41'),
(188, '/storage/product/9/plXl76Y2dHfTKYYUTRwd.47848_man_chieu_dien_dalite.jpg', 50, '47848_man_chieu_dien_dalite.jpg', '2022-03-06 06:20:41', '2022-03-06 06:20:41'),
(189, '/storage/product/9/q43Zvo0kuwaaQ7MwTa70.13_Jan2903ea5b31bc4135604d59507b69bebd.jpg', 65, '13_Jan2903ea5b31bc4135604d59507b69bebd.jpg', '2022-03-06 06:42:08', '2022-03-06 06:42:08'),
(190, '/storage/product/9/DpCe5v5j3oxNJbrhQlsx.250_64341_pc_gaming_hacom_amd_pro.jpg', 65, '250_64341_pc_gaming_hacom_amd_pro.jpg', '2022-03-06 06:42:08', '2022-03-06 06:42:08');

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE `product_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tags`
--

INSERT INTO `product_tags` (`id`, `product_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '2021-10-31 09:45:15', '2021-10-31 09:45:15'),
(2, 3, 2, '2021-10-31 09:45:15', '2021-10-31 09:45:15'),
(3, 4, 3, '2021-10-31 09:48:45', '2021-10-31 09:48:45'),
(4, 5, 4, '2021-11-02 08:33:40', '2021-11-02 08:33:40'),
(5, 6, 4, '2021-11-02 08:41:24', '2021-11-02 08:41:24'),
(6, 7, 4, '2021-11-02 08:41:51', '2021-11-02 08:41:51'),
(7, 8, 4, '2021-11-02 08:42:23', '2021-11-02 08:42:23'),
(8, 9, 4, '2021-11-02 08:42:58', '2021-11-02 08:42:58'),
(9, 10, 4, '2021-11-02 08:43:53', '2021-11-02 08:43:53'),
(10, 12, 4, '2021-11-02 08:45:05', '2021-11-02 08:45:05'),
(11, 13, 5, '2021-11-02 08:47:32', '2021-11-02 08:47:32'),
(12, 14, 5, '2021-11-02 08:48:09', '2021-11-02 08:48:09'),
(13, 15, 5, '2021-11-03 07:07:38', '2021-11-03 07:07:38'),
(14, 16, 4, '2021-11-03 07:11:06', '2021-11-03 07:11:06'),
(15, 17, 4, '2021-11-03 07:12:27', '2021-11-03 07:12:27'),
(16, 18, 4, '2021-11-03 07:13:12', '2021-11-03 07:13:12'),
(17, 19, 4, '2021-11-03 07:14:19', '2021-11-03 07:14:19'),
(18, 20, 4, '2021-11-03 07:15:15', '2021-11-03 07:15:15'),
(19, 21, 4, '2021-11-03 09:42:02', '2021-11-03 09:42:02'),
(20, 22, 6, '2021-11-04 21:08:03', '2021-11-04 21:08:03'),
(21, 23, 7, '2021-11-09 08:11:24', '2021-11-09 08:11:24'),
(22, 24, 7, '2021-11-09 08:15:15', '2021-11-09 08:15:15'),
(23, 25, 4, '2021-11-10 23:52:28', '2021-11-10 23:52:28'),
(24, 26, 4, '2021-11-10 23:54:19', '2021-11-10 23:54:19'),
(25, 27, 4, '2021-11-10 23:55:44', '2021-11-10 23:55:44'),
(26, 28, 4, '2021-11-10 23:57:10', '2021-11-10 23:57:10'),
(27, 29, 4, '2021-11-10 23:58:14', '2021-11-10 23:58:14'),
(28, 30, 4, '2021-11-10 23:59:26', '2021-11-10 23:59:26'),
(45, 46, 12, '2021-12-08 07:03:44', '2021-12-08 07:03:44'),
(46, 45, 12, '2021-12-08 07:08:48', '2021-12-08 07:08:48'),
(47, 44, 12, '2021-12-08 07:10:24', '2021-12-08 07:10:24'),
(48, 43, 13, '2021-12-08 07:11:36', '2021-12-08 07:11:36'),
(49, 42, 13, '2021-12-08 07:12:44', '2021-12-08 07:12:44'),
(50, 41, 13, '2021-12-08 07:14:07', '2021-12-08 07:14:07'),
(51, 40, 14, '2021-12-08 07:15:38', '2021-12-08 07:15:38'),
(52, 39, 14, '2021-12-08 07:17:06', '2021-12-08 07:17:06'),
(53, 38, 14, '2021-12-08 07:18:16', '2021-12-08 07:18:16'),
(54, 37, 14, '2021-12-08 07:19:21', '2021-12-08 07:19:21'),
(55, 36, 15, '2021-12-08 07:21:57', '2021-12-08 07:21:57'),
(56, 35, 15, '2021-12-08 07:23:05', '2021-12-08 07:23:05'),
(57, 34, 15, '2021-12-08 07:25:56', '2021-12-08 07:25:56'),
(58, 33, 15, '2021-12-08 07:27:14', '2021-12-08 07:27:14'),
(59, 32, 15, '2021-12-08 07:28:28', '2021-12-08 07:28:28'),
(60, 31, 15, '2021-12-08 07:29:32', '2021-12-08 07:29:32'),
(61, 47, 7, '2021-12-08 07:32:17', '2021-12-08 07:32:17'),
(62, 48, 7, '2021-12-08 07:36:23', '2021-12-08 07:36:23'),
(63, 49, 7, '2021-12-08 07:37:48', '2021-12-08 07:37:48'),
(64, 50, 7, '2021-12-08 07:39:16', '2021-12-08 07:39:16'),
(65, 51, 7, '2021-12-08 07:40:15', '2021-12-08 07:40:15'),
(66, 52, 7, '2021-12-08 07:41:16', '2021-12-08 07:41:16'),
(67, 53, 5, '2021-12-08 07:41:53', '2021-12-08 07:41:53'),
(68, 54, 5, '2021-12-08 07:42:07', '2021-12-08 07:42:07'),
(69, 55, 16, '2021-12-08 07:42:21', '2021-12-08 07:42:21'),
(70, 56, 7, '2021-12-08 07:44:40', '2021-12-08 07:44:40'),
(71, 57, 17, '2021-12-16 07:32:18', '2021-12-16 07:32:18'),
(72, 58, 18, '2022-02-10 09:08:33', '2022-02-10 09:08:33'),
(73, 59, 19, '2022-02-19 01:11:35', '2022-02-19 01:11:35'),
(74, 60, 7, '2022-02-19 01:22:21', '2022-02-19 01:22:21'),
(75, 61, 20, '2022-02-19 01:29:57', '2022-02-19 01:29:57'),
(76, 62, 20, '2022-02-19 01:31:34', '2022-02-19 01:31:34'),
(77, 63, 20, '2022-02-19 01:33:19', '2022-02-19 01:33:19'),
(78, 64, 20, '2022-02-19 01:34:59', '2022-02-19 01:34:59'),
(79, 65, 11, '2022-03-06 06:42:08', '2022-03-06 06:42:08');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'quản trị hệ thống', NULL, NULL),
(2, 'content', 'chỉnh sửa nội dung', NULL, NULL),
(3, 'manager', 'quản trị đơn hàng', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 7, 2, NULL, NULL),
(2, 7, 3, NULL, NULL),
(3, 8, 3, NULL, NULL),
(4, 9, 1, NULL, NULL),
(5, 10, 3, NULL, NULL),
(6, 11, 3, NULL, NULL),
(7, 11, 2, NULL, NULL),
(8, 12, 4, NULL, NULL),
(9, 13, 3, NULL, NULL),
(10, 14, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `config_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `config_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `config_key`, `config_value`, `type`, `created_at`, `updated_at`) VALUES
(15, 'phone', '0982422788', 'Text', '2021-11-01 00:22:25', '2021-12-08 06:47:26'),
(16, 'facebook', 'https://www.hoannam.com/anh.pro.94043/', 'Textarea', '2021-11-01 00:23:02', '2022-07-26 19:02:44'),
(17, 'mail', 'Hoangnam@gmail.com', 'Textarea', '2021-11-01 00:23:34', '2022-03-06 06:38:28'),
(18, 'google', 'https://www.facebook.com/www.hacom.vn', 'Textarea', '2021-11-01 01:15:05', '2022-03-06 05:57:44'),
(19, 'Copyrigh', 'Copyrightlinkthu © HNCOMPUTER.VN', 'Textarea', '2021-11-01 01:16:49', '2022-03-06 06:37:48'),
(21, 'mới', 'mới', 'Text', '2022-07-26 19:02:56', '2022-07-26 19:02:56');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `diachi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `name`, `email`, `sdt`, `diachi`, `ghichu`, `created_at`, `updated_at`) VALUES
(13, 'Thương Nguyễn Văn', 'thuongx1bg@gmail.com', 123, '123', '1', NULL, NULL),
(14, 'Thương Nguyễn Văn', 'thuongx1bg@gmail.com', 387589076, 'thông nhất cảnh thụy bắt giang', 'nhận trước 6h tối', NULL, NULL),
(15, 'Thương Nguyễn Văn', 'thuongx1bg@gmail.com', 123, 'thông nhất cảnh thụy bắt giang', '1', NULL, NULL),
(16, 'Thương Nguyễn Văn', 'thuongx1bg@gmail.com', 387589076, '1', '1', NULL, NULL),
(17, 'Thương Nguyễn Văn', 'thuongx1bg@gmail.com', 387589076, 'thông nhất cảnh thụy bắt giang', 'giao hàng trước 6h tối', NULL, NULL),
(18, 'Thương Nguyễn Văn', 'thuongx1bg@gmail.com', 387589076, 'thông nhất cảnh thụy bắt giang', '1', NULL, NULL),
(19, 'Thương Nguyễn Văn', 'thuongx1bg@gmail.com', 387589076, 'thông nhất cảnh thụy bắt giang', '123', NULL, NULL),
(20, 'Thương Nguyễn Văn', 'thuongx1bg@gmail.com', 387589076, 'thông nhất cảnh thụy bắt giang', 'trước 3 h chiều', NULL, NULL),
(21, 'Thương Nguyễn Văn', 'thuongx1bg@gmail.com', 387589076, 'thông nhất cảnh thụy bắt giang', 'abc', NULL, NULL),
(22, 'Thương Nguyễn Văn', 'thuongx1bg@gmail.com', 387589076, 'thông nhất cảnh thụy bắt giang', '1234', NULL, NULL),
(23, 'Thương Nguyễn Văn', 'thuongx1bg@gmail.com', 387589076, 'thông nhất cảnh thụy bắt giang', 'l', NULL, NULL),
(24, 'Thương Nguyễn Văn', 'thuongx1bg@gmail.com', 387589076, 'thông nhất cảnh thụy bắt giang', 'giao trước 5h chiều', NULL, NULL),
(25, 'Thương Nguyễn Văn', 'thuongx1bg@gmail.com', 387589076, 'thông nhất cảnh thụy bắt giang', 'sdas', NULL, NULL),
(26, 'Thương Nguyễn Văn', 'thuongx1bg@gmail.com', 123, 'thông nhất cảnh thụy bắt giang', 'a', NULL, NULL),
(27, 'Thương Nguyễn Văn', 'thuongx1bg@gmail.com', 387589076, 'thông nhất cảnh thụy bắt giang', '123', NULL, NULL),
(28, 'Thương Nguyễn Văn', 'thuongx1bg@gmail.com', 387589076, 'thông nhất cảnh thụy bắt giang', '12345678', NULL, NULL),
(29, 'Thương Nguyễn Văn', 'thuongx1bg@gmail.com', 123, 'thông nhất cảnh thụy bắt giang', 'a', NULL, NULL),
(30, 'Thương Nguyễn Văn', 'thuongx1bg@gmail.com', 387589076, 'thông nhất ac cảnh thụy bắt giang', 'giao trước 5h chiều', NULL, NULL),
(31, 'Thương Nguyễn Văn', 'thuongx1bg@gmail.com', 387589076, 'thông nhất cảnh thụy bắt giang', 'giao trước 10 h tối', NULL, NULL),
(32, 'Võ Hoàng Bảo', 'vohoangbao@gmail.com', 387589123, 'địa chỉ test', 'Giao hàng trước 5 h chiều', NULL, NULL),
(33, 'Thương Nguyễn Văn', 'thuongx1bg@gmail.com', 387589076, 'thông nhất cảnh thụy bắt giang', 'sdf', NULL, NULL),
(34, 'Thương Nguyễn Văn', 'thuongx1bg@gmail.com', 387589076, 'thông nhất cảnh thụy bắt giang', '123 sql', NULL, NULL),
(35, 'Thương Nguyễn Văn', 'thuongx1bg@gmail.com', 387589076, 'thông nhất cảnh thụy bắt giang', 'giao truowbss 6 h', NULL, NULL),
(36, 'Vũ Diệu Linh', 'dieulinhvu@gmail.com', 387589401, 'THPT Hoàng Văn Thụ', 'Giao hàng trong giờ hành chính', NULL, NULL),
(37, 'Vũ Diệu Linh', 'dieulinhvu@gmail.com', 387589123, 'THPT Hoàng Văn Thụ', 'Giao hàng trong giờ hành chính', NULL, NULL),
(38, 'Sắp khai trương', 'quyetchi@gmail.com', 123456789, 'hà nội', 'giao trước 5 giờ chiều', NULL, NULL),
(39, 'Quyet Chi', 'quyetchi@gmail.com', 875078912, 'hà nội', 'giao trước 5 h chiều', NULL, NULL),
(40, 'Hoàng Nam', 'hoangnam@gmail.com', 982422788, 'Địa chỉ nhà mới', 'giao trước 5 giờ chiều', NULL, NULL),
(41, 'HOANGNAM', 'HOANGNAM@GMAIL.COM', 387589069, 'ĐỊA CHỈ', 'GIAO TRƯỚC 5 H CHIỀU', NULL, NULL),
(42, 'ádffd', 'asdf @gmail.com', 387589077, 'dsfdsf', 'dfsdfs', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `image_path`, `image_name`, `description`, `created_at`, `updated_at`) VALUES
(2, 'AMD', '/storage/slider/14/scQjJg5JWIwZQZqHdrWG.15_Feb42d1ee448aac3d9e4523caa0be2b6147.png', '15_Feb42d1ee448aac3d9e4523caa0be2b6147.png', 'The original team HNCOMPUTER all product art are crafted for style and quality', '2021-10-26 11:01:41', '2022-03-06 06:04:28'),
(15, 'Quảng cáo', '/storage/slider/9/kI8cOYDoN0BWzkurwNGW.13_Jan2903ea5b31bc4135604d59507b69bebd.jpg', '13_Jan2903ea5b31bc4135604d59507b69bebd.jpg', 'sản phẩm mới giảm 50%', '2022-03-08 05:07:08', '2022-03-08 05:07:08');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ab', '2021-10-31 09:45:15', '2021-10-31 09:45:15'),
(2, 'cd', '2021-10-31 09:45:15', '2021-10-31 09:45:15'),
(3, 'abc', '2021-10-31 09:48:45', '2021-10-31 09:48:45'),
(4, 'áo mới', '2021-11-02 08:33:40', '2021-11-02 08:33:40'),
(5, 'a', '2021-11-02 08:47:32', '2021-11-02 08:47:32'),
(6, 'sale', '2021-11-04 21:08:03', '2021-11-04 21:08:03'),
(7, 'new', '2021-11-09 08:11:24', '2021-11-09 08:11:24'),
(8, 'top', '2021-11-11 00:02:40', '2021-11-11 00:02:40'),
(9, 'quần', '2021-11-11 00:05:46', '2021-11-11 00:05:46'),
(10, 'áo khoác', '2021-11-11 00:11:47', '2021-11-11 00:11:47'),
(11, 'phụ kiện', '2021-11-11 00:15:17', '2021-11-11 00:15:17'),
(12, 'áo đá bóng', '2021-12-08 07:03:44', '2021-12-08 07:03:44'),
(13, 'bra', '2021-12-08 07:11:36', '2021-12-08 07:11:36'),
(14, 'gym', '2021-12-08 07:15:38', '2021-12-08 07:15:38'),
(15, 'yoga', '2021-12-08 07:21:57', '2021-12-08 07:21:57'),
(16, 'áo', '2021-12-08 07:42:21', '2021-12-08 07:42:21'),
(17, 'demo', '2021-12-16 07:32:18', '2021-12-16 07:32:18'),
(18, 'dien thoại', '2022-02-10 09:08:33', '2022-02-10 09:08:33'),
(19, 'mới', '2022-02-19 01:11:35', '2022-02-19 01:11:35'),
(20, 'phone', '2022-02-19 01:29:57', '2022-02-19 01:29:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Hoàng Nam', 'hoangnam@gmail.com', NULL, '$2y$10$efX3xmhjdVRzLqZ1vJMRxuyXbqWQ5PYt8nxVDeFZOwIJcd6Ckb7d2', NULL, '2021-11-08 10:22:33', '2021-11-08 10:22:33'),
(13, 'Văn Chí', 'ptyn030801nvt240801@gmail.com', NULL, '$2y$10$LEBYHePoZmSviLIdsK8.Fuop/TxXj6zHXcV9rsBDiLuzfZhRHGnau', NULL, '2021-11-10 11:24:04', '2022-02-19 01:56:10'),
(14, 'Thương Content', 'thuongx1bg1@gmail.com', NULL, '$2y$10$FWQgouHm5RXh/oM7nOMEVO39IPSFp4iEY4Qc2YfCyW.K54lQVcmMa', NULL, '2021-11-10 12:00:25', '2021-12-16 07:36:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT for table `product_tags`
--
ALTER TABLE `product_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
