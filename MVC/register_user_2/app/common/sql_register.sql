-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 17, 2021 lúc 05:40 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sql_register`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'duonqdinhnquyen', '697f0cf4caa3860c1ee5137ffa633afe'),
(2, 'duonq', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `faculty`
--

CREATE TABLE `faculty` (
  `ID` int(11) NOT NULL,
  `value` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `faculty`
--

INSERT INTO `faculty` (`ID`, `value`, `name`) VALUES
(1, 'MAT', 'Khoa học máy tính'),
(2, 'DTS', 'Khoa học dữ liệu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gender`
--

CREATE TABLE `gender` (
  `ID` int(11) NOT NULL,
  `value` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gender`
--

INSERT INTO `gender` (`ID`, `value`, `name`) VALUES
(1, '0', 'Nữ'),
(2, '1', 'Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(1) NOT NULL,
  `faculty` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `birthday_year` char(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`id`, `name`, `gender`, `faculty`, `birthday_year`) VALUES
(1, 'Đươnq Đình Nguyễn', 1, 'MAT', '2000'),
(2, 'Nguyễn Đình Đương', 0, 'DTS', '1996'),
(3, 'Nguyễn Đình Đương', 0, 'DTS', '1996'),
(4, 'duonqdinhnquyen', 1, 'MAT', '2000'),
(5, 'duonq', 0, 'MAT', '1999'),
(6, 'duonq', 0, 'MAT', '1999'),
(7, 'Nguyễn Đình Đương', 0, 'DTS', '1998'),
(8, 'Nguyễn Đình Đương', 0, 'DTS', '1996'),
(9, 'Nguyễn Đình Đương', 0, 'DTS', '1996'),
(10, 'duonqdinhnquyen', 0, 'DTS', '1992'),
(11, 'Nguyễn Đình Đương', 0, 'MAT', '1992'),
(12, 'duonqdinhnquyen', 1, 'DTS', '1991'),
(13, 'duonqdinhnquyen', 1, 'DTS', '1990'),
(14, 'duonq duoqn', 0, 'MAT', '1999'),
(15, 'duonq duoqn', 0, 'MAT', '1999'),
(16, 'Nguyễn Đình Đương', 1, 'DTS', '1998'),
(17, 'Nguyễn Đình Đương', 1, 'DTS', '1998'),
(18, 'Nguyễn Đình Đương', 1, 'MAT', '1989'),
(19, 'Nguyễn Đình Đương', 1, 'MAT', '1989'),
(20, 'Nguyễn Đình Đương', 1, 'MAT', '1988'),
(21, 'Nguyễn Đình Đương', 1, 'MAT', '1988'),
(22, 'Nguyễn Đình Đương', 1, 'DTS', '1987'),
(23, 'Nguyễn Đình Đương', 1, 'DTS', '1986'),
(24, 'Nguyễn Đình Đương', 1, 'DTS', '1986'),
(25, 'Nguyễn Đình Đương', 0, 'DTS', '1996'),
(26, 'Nguyễn Đình Đương', 0, 'DTS', '1996'),
(27, 'Nguyễn Đình Đương', 1, 'MAT', '1998'),
(28, 'Nguyễn Đình Đương', 1, 'MAT', '1998'),
(29, 'Nguyễn Đình Đương', 0, 'MAT', '1998'),
(30, 'Nguyễn Đình Đương', 0, 'MAT', '1998'),
(31, 'Nguyễn Đình Đương', 1, 'DTS', '1996'),
(32, 'Nguyễn Đình Đương', 1, 'DTS', '1996'),
(33, 'Nguyễn Đình Đương', 1, 'DTS', '2000'),
(34, 'Nguyễn Đình Đương', 1, 'DTS', '2000'),
(35, 'Nguyễn Đình Đương', 0, 'MAT', '1996'),
(36, 'Nguyễn Đình Đương', 0, 'MAT', '1996'),
(37, 'Nguyễn Đình Đương', 0, 'MAT', '1999'),
(38, 'duonqdinhnquyen', 1, 'MAT', '1998'),
(39, 'duonqdinhnquyen', 1, 'MAT', '1998'),
(40, 'Nguyễn Đình Đương', 0, 'MAT', '1998'),
(41, 'Nguyễn Đình Đương', 0, 'MAT', '1998'),
(42, 'Nguyễn Đình Đương', 1, 'DTS', '2000'),
(43, 'Nguyễn Đình Đương', 1, 'MAT', '1998'),
(44, 'Nguyễn Đình Đương', 1, 'MAT', '1998'),
(45, 'Nguyễn Đình Đương', 1, 'MAT', '2000'),
(46, 'Nguyễn Đình Đương', 1, 'MAT', '2000'),
(47, 'Nguyễn Đình Đương', 1, 'MAT', '2000'),
(48, 'Nguyễn Đình Đương', 1, 'MAT', '2000'),
(49, 'Nguyễn Đình Đương', 1, 'DTS', '1998'),
(50, 'Nguyễn Đình Đương', 0, 'MAT', '1998'),
(51, 'Nguyễn Đình Đương', 0, 'MAT', '1998'),
(52, 'Nguyễn Đình Đương', 1, 'DTS', '1998'),
(53, 'Nguyễn Đình Đương', 1, 'DTS', '1998'),
(54, 'Nguyễn Đình Đương', 1, 'MAT', '2001'),
(55, 'Nguyễn Đình Đương', 1, 'MAT', '2001'),
(56, 'Nguyễn Đình Đương', 1, 'MAT', '2000'),
(57, 'Nguyễn Đình Đương', 1, 'MAT', '2000'),
(58, 'duonq duoqn', 1, 'DTS', '1996'),
(59, 'duonq duoqn', 1, 'DTS', '1996'),
(60, 'duonq', 1, 'MAT', '1996'),
(61, 'Nguyễn Đình Đương', 0, 'MAT', '2000'),
(62, 'Nguyễn Đình Đương', 0, 'MAT', '2000');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `faculty`
--
ALTER TABLE `faculty`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `gender`
--
ALTER TABLE `gender`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
