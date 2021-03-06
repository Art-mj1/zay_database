-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-07-30 05:32
-- 서버 버전: 10.4.19-MariaDB
-- PHP 버전: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `test`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `zay_like_unlike`
--

CREATE TABLE `zay_like_unlike` (
  `ZAY_like_unlike_idx` int(11) NOT NULL COMMENT '고유번호',
  `ZAY_like_unlike_userid` int(11) NOT NULL COMMENT '좋아요 작성자',
  `ZAY_like_unlike_postid` int(11) NOT NULL COMMENT '좋아요 대상 상품 번호',
  `ZAY_like_unlike_type` int(2) NOT NULL COMMENT '좋아요 타입'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `zay_like_unlike`
--

INSERT INTO `zay_like_unlike` (`ZAY_like_unlike_idx`, `ZAY_like_unlike_userid`, `ZAY_like_unlike_postid`, `ZAY_like_unlike_type`) VALUES
(1, 2, 17, 1),
(3, 1, 17, 1),
(4, 2, 16, 0),
(5, 2, 15, 1),
(6, 2, 14, 0),
(7, 2, 13, 1),
(8, 2, 12, 1),
(9, 1, 13, 1),
(10, 1, 11, 1),
(11, 1, 16, 1),
(12, 3, 10, 1),
(13, 3, 9, 1),
(14, 3, 8, 1),
(15, 3, 7, 1),
(16, 3, 6, 1),
(17, 3, 5, 1),
(18, 3, 4, 1),
(19, 3, 3, 1),
(20, 3, 14, 1),
(21, 3, 2, 1),
(22, 2, 11, 1),
(23, 3, 13, 1),
(24, 3, 15, 1),
(25, 3, 16, 1),
(26, 3, 17, 1),
(27, 1, 10, 1),
(28, 1, 6, 1),
(29, 1, 12, 1);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `zay_like_unlike`
--
ALTER TABLE `zay_like_unlike`
  ADD PRIMARY KEY (`ZAY_like_unlike_idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `zay_like_unlike`
--
ALTER TABLE `zay_like_unlike`
  MODIFY `ZAY_like_unlike_idx` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
