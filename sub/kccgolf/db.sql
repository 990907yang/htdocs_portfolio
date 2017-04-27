-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-12-01 03:18
-- 서버 버전: 10.1.13-MariaDB
-- PHP 버전: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `db`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `idx` int(11) NOT NULL,
  `writer` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `count` varchar(200) NOT NULL,
  `content` varchar(200) NOT NULL,
  `upload` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`idx`, `writer`, `title`, `date`, `count`, `content`, `upload`) VALUES
(58, '혜리2', '혜리', '2016-11-19 18:40:39', '', '혜리혜리', '/fileupload/up/50552dbd81cca402d25947c63abe4090aa.jpg'),
(59, '혜리', '혜리', '2016-11-19 18:41:19', '', '혜리', '/fileupload/up/4470a4bb6cae3a5c3cea25a5dd2077d9aa.jpg'),
(60, '혜리', '혜리', '2016-11-19 18:41:27', '', '혜리', '/fileupload/up/3c33ada6929a700c275793b19e6d22acaa.jpg'),
(61, '혜리', '혜리', '2016-11-19 18:41:35', '', '혜리', '/fileupload/up/ff6c7c6ae110e2476f39c85357fa2d00aa.jpg'),
(63, '펭구ㅏㅣㄴ', '펭귄', '2016-12-01 01:39:47', '', 'ㅁㄴㅇㅁㄴㅇ', '/fileupload/up/1b7aa9334075cc5e48e2b1fd59210a91Penguins.jpg');

-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `idx` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `ename` varchar(200) NOT NULL,
  `year` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `id` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `pnum` varchar(200) NOT NULL,
  `ok` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `add_num` varchar(200) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `DM` varchar(50) NOT NULL,
  `emp` varchar(200) NOT NULL,
  `op` varchar(200) NOT NULL,
  `sp` varchar(200) NOT NULL,
  `add_num2` varchar(200) NOT NULL,
  `address11` varchar(200) NOT NULL,
  `address22` varchar(200) NOT NULL,
  `pnum2` varchar(200) NOT NULL,
  `merry` varchar(50) NOT NULL,
  `meyear` varchar(50) NOT NULL,
  `memonth` varchar(50) NOT NULL,
  `meday` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `member`
--

INSERT INTO `member` (`idx`, `name`, `ename`, `year`, `month`, `day`, `id`, `password`, `pnum`, `ok`, `email`, `add_num`, `address1`, `address2`, `DM`, `emp`, `op`, `sp`, `add_num2`, `address11`, `address22`, `pnum2`, `merry`, `meyear`, `memonth`, `meday`) VALUES
(1, 'a', '', '', '', '', '', '', '010', '수신동의', '', '', '', '', '자택', '', '', '', '', '', '', '010', '미혼', '', '', ''),
(2, 'asdasd', '', '', '', '', '', '', '010', '수신동의', '', '', '', '', '자택', '', '', '', '', '', '', '010', '미혼', '', '', ''),
(3, 'sdgasdgasdgs', '', '', '', '', '', '', '010', '수신동의', '', '', '', '', '자택', '', '', '', '', '', '', '010', '미혼', '', '', ''),
(4, 'asd', '', '', '', '', '', '', '010', '수신동의', '', '', '', '', '자택', '', '', '', '', '', '', '010', '미혼', '', '', ''),
(5, 'asd', '', '', '', '', '', '', '010', '수신동의', '', '', '', '', '자택', '', '', '', '', '', '', '010', '미혼', '', '', '');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- 테이블의 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
