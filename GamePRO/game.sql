-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 03, 2021 lúc 06:06 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `game`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baner`
--

CREATE TABLE `baner` (
  `id` bigint(20) NOT NULL,
  `nickname` varchar(50) DEFAULT NULL,
  `punishment` varchar(50) DEFAULT NULL,
  `reason` varchar(50) DEFAULT NULL,
  `dateban` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `baner`
--

INSERT INTO `baner` (`id`, `nickname`, `punishment`, `reason`, `dateban`) VALUES
(2, 'CAPLY', 'Permanent Ban', 'Cheating', '06/09/2021'),
(3, 'EzKеk', 'Permanent Ban', 'Cheating', '06/09/2021'),
(4, 'Кu', 'Permanent Ban', 'Cheating', '06/09/2021'),
(5, 'FЕN', 'Permanent Ban', 'Cheating', '06/09/2021'),
(6, 'calouronoob', '30-Day Ban', 'Cheating', '06/09/2021'),
(7, '#Almighty', '30-Day Ban', 'Cheating', '06/09/2021'),
(8, '우', '30-Day Ban', 'Cheating', '06/09/2021'),
(9, 'LoveSomeMama', '30-Day Ban', 'Cheating', '06/09/2021'),
(10, 'MAKJIAPEН', '30-Day Ban', 'Cheating', '06/09/2021'),
(11, 'BE careful', '30-Day Ban', 'Cheating', '06/09/2021'),
(12, 'Titã キラー', '30-Day Ban', 'Cheating', '06/09/2021'),
(13, 'H A L E ?', '30-Day Ban', 'Cheating', '06/09/2021'),
(14, 'UmayLods?!♡', '30-Day Ban', 'Cheating', '06/09/2021'),
(15, '3rd KinG', '30-Day Ban', 'Cheating', '06/09/2021'),
(16, 'cℓiғғ', '30-Day Ban', 'Cheating', '06/09/2021'),
(17, 'Dr.stone', '30-Day Ban', 'Cheating', '06/09/2021'),
(18, 'ᴸᴷ|℟₤ꊼ', '30-Day Ban', 'Cheating', '06/09/2021'),
(19, 'ρяℓ|Scøby', '30-Day Ban', 'Cheating', '06/09/2021'),
(20, 'ЦПвЛС', '1-Day Ban & -20 Integrity', 'Intentional Feeding', '06/09/2021'),
(21, '6i6ika', '1-Day Ban & -20 Integrity', 'Intentional Feeding', '06/09/2021'),
(22, 'Aрachi', '1-Day Ban & -20 Integrity', 'Intentional Feeding', '06/09/2021'),
(23, 'Dju.', '1-Day Ban & -20 Integrity', 'Intentional Feeding', '06/09/2021'),
(24, 'EzkekUeban', '1-Day Ban & -20 Integrity', 'Intentional Feeding', '06/09/2021'),
(25, 'Szpenio', '-20 Integrity', 'AFK', '06/09/2021'),
(29, 'unborn™', '-20 Integrity', 'AFK', '06/09/2021'),
(30, 'Tang San', '-20 Integrity', 'AFK', '06/09/2021'),
(31, 'Wнîтёsnk', '-10 Integrity & Get Gagged for 3-Day', 'Verbal Abuse', '06/09/2021'),
(32, '☬BUÐÐAৡ☬', 'Warning', 'Illegal Avatar', '06/09/2021'),
(33, 'Pause®™', 'Warning', 'Illegal Avatar', '06/09/2021'),
(34, 'Monia;*', 'Warning', 'Illegal Avatar', '06/09/2021'),
(35, 'АНАЛЫЧ', 'Warning', 'Illegal Avatar', '06/09/2021'),
(36, 'igrai', 'Warning', 'Illegal Avatar', '06/09/2021'),
(37, 'келін', 'Warning', 'Illegal Avatar', '06/09/2021'),
(38, '‡papa zola', 'Warning', 'Illegal Avatar', '06/09/2021');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) NOT NULL,
  `mess` text DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `gmail` varchar(50) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `mess`, `username`, `gmail`, `phone`) VALUES
(1, 'I wish good for you :)', 'nguyenvana', 'anguyen@gmail.com', '0239239454');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `heros`
--

CREATE TABLE `heros` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `attribute` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `information` text DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `heros`
--

INSERT INTO `heros` (`id`, `name`, `attribute`, `image`, `information`, `gender`) VALUES
(1, 'Zoe', 'intelligence', 'template/images/1.jpg', '..............', 'female'),
(2, 'Murry', 'strength', 'template/images/2.jpg', '', NULL),
(3, 'Omega', 'intelligence', 'template/images/3.jpg', '', NULL),
(4, 'Hades', 'agility', 'template/images/4.jpg', '', NULL),
(5, 'Heradias', 'strength', 'template/images/5.jpg', '', NULL),
(6, 'Titan', 'strength', 'template/images/6.jpg', '', NULL),
(7, 'Di Renjie', 'agility', 'template/images/7.jpg', '', NULL),
(8, 'Mousia', 'agility', 'template/images/8.jpg', '', NULL),
(9, 'Li Bai', 'agility', 'template/images/9.jpg', '', 'male'),
(10, 'Xia Ling', 'intelligence', 'template/images/10.jpg', '', NULL),
(11, 'Young Yanbing', 'agility', 'template/images/11.jpg', '', NULL),
(12, 'Yanbing Cao', 'intelligence', 'template/images/12.jpg', '', NULL),
(13, 'Methos', 'agility', 'template/images/13.jpg', '', NULL),
(14, 'Dragon', 'strength', 'template/images/14.jpg', '', NULL),
(15, 'Poseidon', 'intelligence', 'template/images/15.jpg', '', 'male'),
(16, 'Odin', 'strength', 'template/images/16.jpg', '', NULL),
(17, 'Mikio', 'agility', 'template/images/17.jpg', '', NULL),
(18, 'Cleopatra', 'intelligence', 'template/images/18.jpg', '', NULL),
(19, 'Lu Bu', 'strength', 'template/images/19.jpg', '', 'male'),
(20, 'Solus', 'agility', 'template/images/20.jpg', '', NULL),
(21, 'Nightshade', 'agility', 'template/images/21.jpg', '', NULL),
(22, 'Flavia', 'intelligence', 'template/images/22.jpg', '', 'female'),
(23, 'Lorelei', 'intelligence', 'template/images/23.jpg', '', NULL),
(24, 'Daimon', 'agility', 'template/images/24.jpg', '', NULL),
(25, 'Chronos', 'intelligence', 'template/images/25.jpg', '', 'female'),
(26, 'Beiluo Shimen', 'strength', 'template/images/26.jpg', '', NULL),
(27, 'Brady', 'agility', 'template/images/27.jpg', '', NULL),
(28, 'Tiamat', 'strength', 'template/images/28.jpg', '', NULL),
(29, 'Tartorus', 'intelligence', 'template/images/29.jpg', '', NULL),
(30, 'Xiahou Dun', 'strength', 'template/images/30.jpg', '', NULL),
(31, 'Asura', 'agility', 'template/images/31.jpg', '', NULL),
(32, 'Lin Lin', 'intelligence', 'template/images/32.jpg', '', NULL),
(33, 'Dr.Madd', 'intelligence', 'template/images/33.jpg', '', NULL),
(34, 'Leonidas', 'strength', 'template/images/34.jpg', '', NULL),
(35, 'Fleur', 'intelligence', 'template/images/35.jpg', '', NULL),
(36, 'Fawna', 'agility', 'template/images/36.jpg', '', NULL),
(37, 'Raker', 'strength', 'template/images/37.jpg', '', NULL),
(38, 'Galahad', 'strength', 'template/images/38.jpg', '', NULL),
(39, 'Fumiko', 'agility', 'template/images/39.jpg', '', NULL),
(40, 'Fusilia', 'agility', 'template/images/40.jpg', '', NULL),
(41, 'Chronia', 'intelligence', 'template/images/41.jpg', '', NULL),
(42, 'Elvira', 'intelligence', 'template/images/42.jpg', '', NULL),
(43, 'Psion', 'agility', 'template/images/43.jpg', '', NULL),
(44, 'Condor', 'strength', 'template/images/44.jpg', '', NULL),
(45, 'Celestius', 'intelligence', 'template/images/45.jpg', '', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name`, `code`) VALUES
(1, 'ADMIN', 'ADMIN'),
(2, 'USER', 'USER');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `heroid` bigint(20) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `skills`
--

INSERT INTO `skills` (`id`, `name`, `content`, `heroid`, `image`) VALUES
(1, '', '', 1, ''),
(2, '2', '', 1, ''),
(3, '3', '', 1, ''),
(4, '4', '', 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `skin`
--

CREATE TABLE `skin` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `heroid` bigint(20) DEFAULT NULL,
  `thumbnail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `skin`
--

INSERT INTO `skin` (`id`, `name`, `image`, `heroid`, `thumbnail`) VALUES
(1, '', 'template/images/skin/1a.jpg', 2, 'template/images/skin/a1.jpg'),
(2, '', 'template/images/skin/2a.jpg', 2, 'template/images/skin/a2.jpg'),
(3, '', 'template/images/skin/3a.jpg', 2, 'template/images/skin/a3.jpg'),
(4, '', 'template/images/skin/4a.jpg', 2, 'template/images/skin/a4.jpg'),
(5, '', 'template/images/skin/5a.jpg', 2, 'template/images/skin/a5.jpg'),
(6, '', 'template/images/skin/6a.jpg', 2, 'template/images/skin/a6.jpg'),
(7, '', 'template/images/skin/7a.jpg', 2, 'template/images/skin/a7.jpg'),
(8, '', 'template/images/skin/8a.jpg', 2, 'template/images/skin/a8.jpg'),
(9, '', 'template/images/skin/9a.jpg', 2, 'template/images/skin/a9.jpg'),
(10, '', 'template/images/skin/10a.jpg', 2, 'template/images/skin/a10.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `fullname` varchar(150) DEFAULT NULL,
  `status` bit(1) NOT NULL,
  `roleid` bigint(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(15) DEFAULT NULL,
  `TOKENS` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `status`, `roleid`, `email`, `phoneNumber`, `TOKENS`) VALUES
(1, 'admin', '123456', 'admin', b'1', 1, NULL, NULL, NULL),
(2, 'admin01', '123456', 'Jone Mark', b'1', 1, NULL, NULL, NULL),
(3, 'admin02', '12345678', 'Scarlet', b'1', 1, NULL, NULL, NULL),
(4, 'admin03', '123478', 'Souls', b'1', 1, NULL, NULL, NULL),
(5, 'admin04', '123', 'LiBai', b'1', 1, NULL, NULL, NULL),
(6, 'admin05', 'prokk', 'Mulan', b'0', 1, NULL, NULL, NULL),
(7, 'nguyenvana', '123456', 'nguyen van a', b'1', 2, NULL, NULL, NULL),
(8, 'nguyenvanb', '123456', 'nguyen van b', b'1', 2, NULL, '023423423232', 3200),
(9, 'cbtongtulenh', '123456', 'Kinz', b'1', 2, 'cbtongtulenh@gmail.com', '014283945234', 4040);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baner`
--
ALTER TABLE `baner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `heros`
--
ALTER TABLE `heros`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_skill_heros` (`heroid`);

--
-- Chỉ mục cho bảng `skin`
--
ALTER TABLE `skin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_skin_hero` (`heroid`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_role` (`roleid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baner`
--
ALTER TABLE `baner`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `heros`
--
ALTER TABLE `heros`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `skin`
--
ALTER TABLE `skin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `fk_skill_heros` FOREIGN KEY (`heroid`) REFERENCES `heros` (`id`);

--
-- Các ràng buộc cho bảng `skin`
--
ALTER TABLE `skin`
  ADD CONSTRAINT `fk_skin_hero` FOREIGN KEY (`heroid`) REFERENCES `heros` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_user_role` FOREIGN KEY (`roleid`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
