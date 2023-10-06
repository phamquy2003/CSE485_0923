-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 25, 2023 lúc 09:18 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btth01_cse485`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `ma_bviet` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(200) NOT NULL,
  `ten_bhat` varchar(100) NOT NULL,
  `ma_tloai` int(10) UNSIGNED NOT NULL,
  `tomtat` text DEFAULT NULL,
  `noidung` text DEFAULT NULL,
  `ma_tgia` int(10) UNSIGNED NOT NULL,
  `ngayviet` datetime NOT NULL DEFAULT current_timestamp(),
  `hinhanh` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`ma_bviet`, `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) VALUES
(1, 'album MTP', 'Nắng ấm xa dần', 1, 'Tóm tắt bài nắng ấm xa dần', 'Nội dung bài nắng ấm xa dần', 0, '2023-09-24 19:05:58', 'https://i1.sndcdn.com/artworks-15s8fFygDIwe7iIx-UhHZzA-t500x500.jpg'),
(2, 'album MTP2', 'Chắc ai đó sẽ về', 2, 'Tóm tắt Chắc ai đó sẽ về', 'Nội dung Chắc ai đó sẽ về', 2, '2023-09-24 19:06:10', 'https://static.tuoitre.vn/tto/i/s626/2014/12/18/YCCBrful.jpg'),
(4, 'Quê hương', 'Thuyền quyên', 6, 'Tóm tắt Thuyền quyên', 'Nội dung Thuyền quyên', 1, '2023-09-24 19:34:16', 'https://i.scdn.co/image/ab67616d0000b273d221df6adec76cae9280db78'),
(6, 'album MTP', 'Nắng ấm xa dần', 1, 'Tóm tắt bài nắng ấm xa dần', 'Nội dung bài nắng ấm xa dần', 0, '2023-09-24 19:46:20', 'https://i1.sndcdn.com/artworks-15s8fFygDIwe7iIx-UhHZzA-t500x500.jpg'),
(7, 'album MTP', 'Nắng ấm xa dần', 1, 'Tóm tắt bài nắng ấm xa dần', 'Nội dung bài nắng ấm xa dần', 0, '2023-09-24 19:46:20', 'https://i1.sndcdn.com/artworks-15s8fFygDIwe7iIx-UhHZzA-t500x500.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia`
--

CREATE TABLE `tacgia` (
  `ma_tgia` int(10) UNSIGNED NOT NULL,
  `ten_tgia` varchar(100) NOT NULL,
  `h_tgia` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tacgia`
--

INSERT INTO `tacgia` (`ma_tgia`, `ten_tgia`, `h_tgia`) VALUES
(0, 'Rhyder', 'https://duan24h.net/wp-content/uploads/2023/07/captain-3.webp'),
(1, 'Captain', 'https://duan24h.net/wp-content/uploads/2023/07/captain-3.webp'),
(2, 'Đen Vâu', 'https://duan24h.net/wp-content/uploads/2023/07/captain-3.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `ma_tloai` int(10) UNSIGNED NOT NULL,
  `ten_tloai` varchar(50) NOT NULL,
  `phude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`ma_tloai`, `ten_tloai`, `phude`) VALUES
(1, 'Nhạc Ấn Độ', 'Tiếng Việt'),
(2, 'Nhạc US-UK', 'Tiếng Việt'),
(3, 'Nhạc Hàn Quốc', 'Tiếng Việt'),
(4, 'Nhạc Việt', 'Tiếng Việt'),
(6, 'Nhạc trữ tình', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`ma_bviet`),
  ADD KEY `ma_tloai` (`ma_tloai`),
  ADD KEY `ma_tgia` (`ma_tgia`);

--
-- Chỉ mục cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`ma_tgia`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`ma_tloai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `ma_bviet` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `ma_tloai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
