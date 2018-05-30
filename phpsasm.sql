-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 30, 2018 lúc 07:48 AM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phpsasm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attendance_details`
--

CREATE TABLE `attendance_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `slotId` int(11) NOT NULL,
  `rollNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `attendance_details`
--

INSERT INTO `attendance_details` (`id`, `slotId`, `rollNumber`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'D00001', 1, '2018-05-29 17:00:00', NULL),
(2, 1, 'D00002', 1, '2018-05-29 17:00:00', NULL),
(3, 1, 'D00003', 1, '2018-05-29 17:00:00', NULL),
(4, 1, 'D00004', 1, '2018-05-29 17:00:00', NULL),
(5, 1, 'D00005', 1, '2018-05-29 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attendance_slots`
--

CREATE TABLE `attendance_slots` (
  `id` int(10) UNSIGNED NOT NULL,
  `classId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slotId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjectId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `attendance_slots`
--

INSERT INTO `attendance_slots` (`id`, `classId`, `slotId`, `subjectId`, `created_at`, `updated_at`) VALUES
(1, 'T1705M', '1', 'PHP', '2018-05-29 17:00:00', NULL),
(2, 'T1706M', '2', 'EJB', '2018-05-29 17:00:00', NULL),
(3, 'T1707M', '3', 'ASF2', '2018-05-29 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `classes`
--

CREATE TABLE `classes` (
  `classId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classStatus` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `classes`
--

INSERT INTO `classes` (`classId`, `classStatus`, `created_at`, `updated_at`) VALUES
('T1705M', 1, '2018-05-29 17:00:00', NULL),
('T1706M', 1, '2018-05-29 17:00:00', NULL),
('T1707M', 1, '2018-05-29 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2018_05_30_020435_create_classes_table', 1),
(8, '2018_05_30_020559_create_timeslots_table', 1),
(9, '2018_05_30_020621_create_student_classes_table', 1),
(10, '2018_05_30_020658_create_attendance_slots_table', 1),
(11, '2018_05_30_020712_create_attendance_details_table', 1),
(12, '2018_05_30_021440_create_students_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `rollNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `students`
--

INSERT INTO `students` (`rollNumber`, `fullName`) VALUES
('D00001', 'Nguyễn Tiến Bắc'),
('D00002', 'Nguyễn Tiến Nam'),
('D00003', 'Nguyễn Tiến Sơn'),
('D00004', 'Nguyễn Tiến Hoàng'),
('D00005', 'Nguyễn Tiến Hùng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student_classes`
--

CREATE TABLE `student_classes` (
  `rollNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `student_classes`
--

INSERT INTO `student_classes` (`rollNumber`, `classId`, `status`, `created_at`, `updated_at`) VALUES
('D00001', 'T1705M', 1, '2018-05-29 17:00:00', NULL),
('D00002', 'T1705M', 1, '2018-05-29 17:00:00', NULL),
('D00004', 'T1705M', 1, '2018-05-29 17:00:00', NULL),
('D00003', 'T1706M', 1, '2018-05-29 17:00:00', NULL),
('D00005', 'T1706M', 1, '2018-05-29 17:00:00', NULL),
('D00001', 'T1706M', 1, '2018-05-29 17:00:00', NULL),
('D00002', 'T1707M', 1, '2018-05-29 17:00:00', NULL),
('D00004', 'T1707M', 1, '2018-05-29 17:00:00', NULL),
('D00001', 'T1707M', 1, '2018-05-29 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `timeslots`
--

CREATE TABLE `timeslots` (
  `slotId` int(11) NOT NULL,
  `timeSlot` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `timeslots`
--

INSERT INTO `timeslots` (`slotId`, `timeSlot`) VALUES
(1, '8h-12h'),
(2, '13h30-17h30'),
(3, '18h30-21h30');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `attendance_details`
--
ALTER TABLE `attendance_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `attendance_slots`
--
ALTER TABLE `attendance_slots`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `attendance_details`
--
ALTER TABLE `attendance_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `attendance_slots`
--
ALTER TABLE `attendance_slots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
