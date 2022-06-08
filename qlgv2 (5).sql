-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 07:09 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qlgv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `chuyenmonnghiepvu`
--

CREATE TABLE IF NOT EXISTS `chuyenmonnghiepvu` (
`MS` int(11) NOT NULL,
  `LOAITRINHDO` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HOCVI` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `chuyenmonnghiepvu`
--

INSERT INTO `chuyenmonnghiepvu` (`MS`, `LOAITRINHDO`, `HOCVI`) VALUES
(1, 'trung binh', 'tiến sĩ'),
(2, 'kha', ' thạc sĩ');

-- --------------------------------------------------------

--
-- Table structure for table `dantoc`
--

CREATE TABLE IF NOT EXISTS `dantoc` (
`MSDT` int(11) NOT NULL,
  `TENDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dantoc`
--

INSERT INTO `dantoc` (`MSDT`, `TENDT`) VALUES
(1, 'mường'),
(2, 'KINH'),
(3, 'thái'),
(4, 'hmong');

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE IF NOT EXISTS `giangvien` (
`MAGV` int(11) NOT NULL,
  `MSKHOA` int(11) DEFAULT NULL,
  `MS` int(11) DEFAULT NULL,
  `MSTH` int(11) DEFAULT NULL,
  `MANN` int(11) DEFAULT NULL,
  `MAHH` int(11) DEFAULT NULL,
  `MSDT` int(11) DEFAULT NULL,
  `MSTG` int(11) DEFAULT NULL,
  `TENGV` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `GIOITINH` tinyint(1) NOT NULL,
  `NGAYSINH` date NOT NULL,
  `EMAIL` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `LUONG` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `LOAIGIANGVIEN` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`MAGV`, `MSKHOA`, `MS`, `MSTH`, `MANN`, `MAHH`, `MSDT`, `MSTG`, `TENGV`, `GIOITINH`, `NGAYSINH`, `EMAIL`, `SDT`, `LUONG`, `LOAIGIANGVIEN`) VALUES
(13, 1, 1, 1, 1, 1, 1, 1, 'chí phèo111', 1, '2000-01-20', 'pheochi@gmail.com', '10000000', '10.000.000', 1),
(14, 1, 1, 1, 1, 2, 1, 1, 'hang ngaa', 0, '2000-12-19', 'cungtrang@gmail.com', '101010101', '10.000.001', 1),
(15, 1, 1, 1, 1, 2, 1, 1, 'minh tâm', 1, '2000-12-12', 'thangnghien@gmail.com', '11234567', '1212112', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hocham`
--

CREATE TABLE IF NOT EXISTS `hocham` (
`MAHH` int(11) NOT NULL,
  `TENHH` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hocham`
--

INSERT INTO `hocham` (`MAHH`, `TENHH`) VALUES
(1, 'phó giáo sư'),
(2, 'giáo sư');

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE IF NOT EXISTS `khoa` (
`MSKHOA` int(11) NOT NULL,
  `TENKHOA` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`MSKHOA`, `TENKHOA`) VALUES
(1, 'tài chinh'),
(2, 'công nghệ thông tin'),
(3, 'luật'),
(4, 'dược'),
(6, 'hành vi học'),
(7, 'kỹ thuật công nghệ');

-- --------------------------------------------------------

--
-- Table structure for table `luongcoban`
--

CREATE TABLE IF NOT EXISTS `luongcoban` (
`MSLUONG` int(11) NOT NULL,
  `LUONG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ngoaingu`
--

CREATE TABLE IF NOT EXISTS `ngoaingu` (
`MANN` int(11) NOT NULL,
  `TDNN` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ngoaingu`
--

INSERT INTO `ngoaingu` (`MANN`, `TDNN`) VALUES
(1, 'toiec'),
(2, 'toefl'),
(3, 'ielts'),
(4, 'b3');

-- --------------------------------------------------------

--
-- Table structure for table `thang`
--

CREATE TABLE IF NOT EXISTS `thang` (
  `THANG` int(11) NOT NULL,
  `NAM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tinhoc`
--

CREATE TABLE IF NOT EXISTS `tinhoc` (
`MSTH` int(11) NOT NULL,
  `TDTH` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tinhoc`
--

INSERT INTO `tinhoc` (`MSTH`, `TDTH`) VALUES
(1, 'AI3C'),
(2, 'a2'),
(3, 'cơ bản'),
(4, 'tesr'),
(5, 'nâng cao');

-- --------------------------------------------------------

--
-- Table structure for table `tongiao`
--

CREATE TABLE IF NOT EXISTS `tongiao` (
`MSTG` int(11) NOT NULL,
  `TENTG` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tongiao`
--

INSERT INTO `tongiao` (`MSTG`, `TENTG`) VALUES
(1, '--không--'),
(2, 'phật'),
(3, 'cao đài'),
(4, 'thiên chúa giáo');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`iduser` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ability` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `hoten`, `ability`) VALUES
(2, 'trung', '123123', 'Văn Bảy', 1),
(4, 'admin', '123123', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chuyenmonnghiepvu`
--
ALTER TABLE `chuyenmonnghiepvu`
 ADD PRIMARY KEY (`MS`);

--
-- Indexes for table `dantoc`
--
ALTER TABLE `dantoc`
 ADD PRIMARY KEY (`MSDT`);

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
 ADD PRIMARY KEY (`MAGV`), ADD KEY `FK_CO` (`MSTG`), ADD KEY `FK_COBANG` (`MSTH`), ADD KEY `FK_DAT` (`MS`), ADD KEY `FK_DATTRINHDO` (`MANN`), ADD KEY `FK_HOC` (`MAHH`), ADD KEY `FK_QUANLY` (`MSKHOA`), ADD KEY `FK_THUOC` (`MSDT`);

--
-- Indexes for table `hocham`
--
ALTER TABLE `hocham`
 ADD PRIMARY KEY (`MAHH`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
 ADD PRIMARY KEY (`MSKHOA`);

--
-- Indexes for table `luongcoban`
--
ALTER TABLE `luongcoban`
 ADD PRIMARY KEY (`MSLUONG`);

--
-- Indexes for table `ngoaingu`
--
ALTER TABLE `ngoaingu`
 ADD PRIMARY KEY (`MANN`);

--
-- Indexes for table `thang`
--
ALTER TABLE `thang`
 ADD PRIMARY KEY (`THANG`);

--
-- Indexes for table `tinhoc`
--
ALTER TABLE `tinhoc`
 ADD PRIMARY KEY (`MSTH`);

--
-- Indexes for table `tongiao`
--
ALTER TABLE `tongiao`
 ADD PRIMARY KEY (`MSTG`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chuyenmonnghiepvu`
--
ALTER TABLE `chuyenmonnghiepvu`
MODIFY `MS` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dantoc`
--
ALTER TABLE `dantoc`
MODIFY `MSDT` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `giangvien`
--
ALTER TABLE `giangvien`
MODIFY `MAGV` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `hocham`
--
ALTER TABLE `hocham`
MODIFY `MAHH` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `khoa`
--
ALTER TABLE `khoa`
MODIFY `MSKHOA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `luongcoban`
--
ALTER TABLE `luongcoban`
MODIFY `MSLUONG` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ngoaingu`
--
ALTER TABLE `ngoaingu`
MODIFY `MANN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tinhoc`
--
ALTER TABLE `tinhoc`
MODIFY `MSTH` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tongiao`
--
ALTER TABLE `tongiao`
MODIFY `MSTG` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `giangvien`
--
ALTER TABLE `giangvien`
ADD CONSTRAINT `FK_CO` FOREIGN KEY (`MSTG`) REFERENCES `tongiao` (`MSTG`),
ADD CONSTRAINT `FK_COBANG` FOREIGN KEY (`MSTH`) REFERENCES `tinhoc` (`MSTH`),
ADD CONSTRAINT `FK_DAT` FOREIGN KEY (`MS`) REFERENCES `chuyenmonnghiepvu` (`MS`),
ADD CONSTRAINT `FK_DATTRINHDO` FOREIGN KEY (`MANN`) REFERENCES `ngoaingu` (`MANN`),
ADD CONSTRAINT `FK_HOC` FOREIGN KEY (`MAHH`) REFERENCES `hocham` (`MAHH`),
ADD CONSTRAINT `FK_QUANLY` FOREIGN KEY (`MSKHOA`) REFERENCES `khoa` (`MSKHOA`),
ADD CONSTRAINT `FK_THUOC` FOREIGN KEY (`MSDT`) REFERENCES `dantoc` (`MSDT`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
