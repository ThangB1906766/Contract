-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 04:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hopdong_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(12) NOT NULL,
  `admin_taiKhoan` varchar(255) NOT NULL,
  `admin_matKhau` varchar(255) NOT NULL,
  `admin_role` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Quyền admin mang giá trị là 1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_taiKhoan`, `admin_matKhau`, `admin_role`) VALUES
(1, 'admin', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

CREATE TABLE `dichvu` (
  `hd_dichVu` int(11) NOT NULL,
  `dv_loai` varchar(255) NOT NULL COMMENT 'Loại dịch vụ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`hd_dichVu`, `dv_loai`) VALUES
(1, 'CA + IVAN'),
(2, 'HDDT'),
(3, 'Pharmacy'),
(4, 'SmartCA'),
(5, 'eReceipt'),
(6, 'VNPT HKD'),
(7, 'BLDT'),
(8, 'E-TICKET');

-- --------------------------------------------------------

--
-- Table structure for table `hopdong`
--

CREATE TABLE `hopdong` (
  `hd_id` int(11) NOT NULL,
  `hd_ngayKyHD` date NOT NULL COMMENT 'Ngày ký hóa đơn',
  `hd_tenNguoiLap` varchar(50) NOT NULL COMMENT 'Tên Người lập hóa đơn',
  `hd_trangThai` int(11) NOT NULL COMMENT 'Trạng thái hợp đồng (1. Gửi yêu cầu, 2. Đã nhập ĐHSXKD ... )',
  `hd_loaiYeuCau` int(11) NOT NULL COMMENT 'Loại yêu cầu hợp đồng (Gia hạn, tạo mới ... )',
  `hd_dichVu` int(11) NOT NULL COMMENT 'Dịch vụ vd: VNPT BHXH, Pharmacy...',
  `hd_maHopDong` varchar(255) NOT NULL COMMENT 'Vd: 211011-D0097/VNPT VNP-TTKDCTO-PKHTCDN/HĐ VNPT-CA',
  `hd_tenKhachHang` varchar(255) NOT NULL COMMENT 'Vd: CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ CƠ GIỚI CÔNG TRÌNH TRƯỜNG TIẾN',
  `hd_diaChiKH` varchar(255) NOT NULL,
  `hd_maSoThue` varchar(255) NOT NULL COMMENT 'Vd: 1800697790\r\n',
  `hd_maBHXH` varchar(255) DEFAULT NULL COMMENT 'Mã BHXH nếu có',
  `hd_tenGoi` varchar(255) NOT NULL COMMENT 'Vd: OID Standard\r\n',
  `hd_thoiGian` varchar(255) NOT NULL COMMENT 'Thời hạn hợp đồng vd: 12 tháng',
  `hd_giaTruocThue` double DEFAULT NULL,
  `hd_thueVAT` varchar(255) DEFAULT NULL,
  `hd_giaTien` double NOT NULL,
  `hd_token` int(11) NOT NULL COMMENT 'Vd: (1.Mua, 2.Tự trang bị ...)',
  `hd_maGiaoDich` varchar(255) DEFAULT NULL COMMENT 'Vd: CTO-LD/00139319\r\n',
  `hd_maThueBao` varchar(255) DEFAULT NULL COMMENT 'Vd: cto_ivan_gh_1800697790\r\n',
  `hd_userName` varchar(255) DEFAULT NULL COMMENT 'Vd: OIDCTO1800577863\r\n',
  `hd_soSeri` varchar(255) DEFAULT NULL COMMENT 'Vd: 5401010177f13a3e27e4391cd5185202\r\n',
  `hd_BBBG` date DEFAULT NULL COMMENT 'Cập nhật ngày trả',
  `hd_GCN` varchar(255) DEFAULT NULL,
  `hd_soHoaDon` varchar(255) DEFAULT NULL COMMENT 'Vd: 0045704/ 25.10.21_CTO-LD/00139319\r\n',
  `hd_maTraCuuHD` int(255) DEFAULT NULL,
  `hd_ngayXuatHD` date NOT NULL,
  `hd_mauHD` varchar(255) DEFAULT NULL,
  `hd_ghiChu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hopdong`
--

INSERT INTO `hopdong` (`hd_id`, `hd_ngayKyHD`, `hd_tenNguoiLap`, `hd_trangThai`, `hd_loaiYeuCau`, `hd_dichVu`, `hd_maHopDong`, `hd_tenKhachHang`, `hd_diaChiKH`, `hd_maSoThue`, `hd_maBHXH`, `hd_tenGoi`, `hd_thoiGian`, `hd_giaTruocThue`, `hd_thueVAT`, `hd_giaTien`, `hd_token`, `hd_maGiaoDich`, `hd_maThueBao`, `hd_userName`, `hd_soSeri`, `hd_BBBG`, `hd_GCN`, `hd_soHoaDon`, `hd_maTraCuuHD`, `hd_ngayXuatHD`, `hd_mauHD`, `hd_ghiChu`) VALUES
(6, '2023-04-12', 'Lê Minh Thắng 33333 Luôn quae 2222333', 0, 0, 0, '211011-D0097/VNPT VNP-TTKDCTO-PKHTCDN/HĐ VNPT-CA', 'CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ CƠ GIỚI CÔNG TRÌNH TRƯỜNG TIẾ', '230, Nguyễn Trãi, Ninh Kiều, TP Cần Thơ', '1800577863', '', 'Staff ID Pro', '', 5000000, '10%', 5500000, 0, 'CTO-LD/00139319', 'cto_ivan_gh_1800697790', 'OIDCTO1800577863', '5401010177f13a3e27e4391cd5185202', '2023-04-11', '', '0045705/25.10.21_CTO-LD/00138914', 0, '2023-04-04', '', 'Nội dung ghi chú '),
(7, '2023-04-12', 'Lê Minh Thắng 3', 1, 1, 8, '211011-D0097/VNPT VNP-TTKDCTO-PKHTCDN/HĐ VNPT-CA', 'CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ CƠ GIỚI CÔNG TRÌNH TRƯỜNG TIẾ', '230, Nguyễn Trãi, Ninh Kiều, TP Cần Thơ', '1800577863', NULL, 'Staff ID Pro', '18 Tháng', 5000000, '10%', 5500000, 2, 'CTO-LD/00139319', 'cto_ivan_gh_1800697790\r\n', 'OIDCTO1800577863\r\n', '5401010177f13a3e27e4391cd5185202\r\n', '2023-04-11', NULL, '0045705/25.10.21_CTO-LD/00138914', NULL, '2023-04-04', NULL, 'Nội dung ghi chú '),
(8, '2023-04-12', 'Lê Minh Thắng quá đẹp trai', 0, 0, 0, '211011-D0097/VNPT VNP-TTKDCTO-PKHTCDN/HĐ VNPT-CA', 'CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ CƠ GIỚI CÔNG TRÌNH TRƯỜNG TIẾ', '230, Nguyễn Trãi, Ninh Kiều, TP Cần Thơ', '1800577863', '', 'Staff ID Pro', '', 5000000, '10%', 5500000, 0, 'CTO-LD/00139319', 'cto_ivan_gh_1800697790', 'OIDCTO1800577863', '5401010177f13a3e27e4391cd5185202', '2023-04-11', '', '0045705/25.10.21_CTO-LD/00138914', 0, '2023-04-04', '', 'Nội dung ghi chú '),
(9, '2023-04-12', 'Lê Minh Thắng 33333', 0, 0, 0, '211011-D0097/VNPT VNP-TTKDCTO-PKHTCDN/HĐ VNPT-CA', 'CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ CƠ GIỚI CÔNG TRÌNH TRƯỜNG TIẾ', '230, Nguyễn Trãi, Ninh Kiều, TP Cần Thơ', '1800577863', '', 'Staff ID Pro', '', 5000000, '10%', 5500000, 0, 'CTO-LD/00139319', 'cto_ivan_gh_1800697790', 'OIDCTO1800577863', '5401010177f13a3e27e4391cd5185202', '2023-04-11', '', '0045705/25.10.21_CTO-LD/00138914', 0, '2023-04-04', '', 'Nội dung ghi chú '),
(10, '2023-04-12', 'Cao Như Thuần', 0, 0, 0, 'Nội dung mã hợp đồng', 'Tên KH VNPT', 'CT', '1', '', 'VIP', '1', 100, '10', 110, 0, '', '', '', '', '0000-00-00', '', '', 0, '2023-04-12', '', ''),
(11, '2023-04-12', 'Lê Minh Thắng 33333', 0, 0, 0, 'Nội dung mã hợp đồng', 'Tên KH VNPT', 'Số 2 Cần Thơ, Nguyễn Trãi', '111', '', 'VIP', '1', 100, '10', 110, 0, '', '', '', '', '0000-00-00', '', '', 0, '2023-04-12', '', ''),
(12, '2023-04-12', 'Lê Minh Thắng 33333 Luôn quae 2222333', 0, 0, 0, '211011-D0097/VNPT VNP-TTKDCTO-PKHTCDN/HĐ VNPT-CA', 'CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ CƠ GIỚI CÔNG TRÌNH TRƯỜNG TIẾ', '230, Nguyễn Trãi, Ninh Kiều, TP Cần Thơ', '1800577863', '', 'Staff ID Pro', '', 5000000, '10%', 5500000, 0, 'CTO-LD/00139319', 'cto_ivan_gh_1800697790', 'OIDCTO1800577863', '5401010177f13a3e27e4391cd5185202', '2023-04-11', '', '0045705/25.10.21_CTO-LD/00138914', 0, '2023-04-04', '', 'Nội dung ghi chú '),
(13, '2023-04-12', 'Lê Minh Thắng 33333 Luôn quae 2222333', 0, 0, 0, '211011-D0097/VNPT VNP-TTKDCTO-PKHTCDN/HĐ VNPT-CA', 'CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ CƠ GIỚI CÔNG TRÌNH TRƯỜNG TIẾ', '230, Nguyễn Trãi, Ninh Kiều, TP Cần Thơ', '1800577863', '', 'Staff ID Pro', '', 5000000, '10%', 5500000, 0, 'CTO-LD/00139319', 'cto_ivan_gh_1800697790', 'OIDCTO1800577863', '5401010177f13a3e27e4391cd5185202', '2023-04-11', '', '0045705/25.10.21_CTO-LD/00138914', 0, '2023-04-04', '', 'Nội dung ghi chú '),
(14, '2023-04-12', 'Lê Minh Thắng 33333 Luôn quae 2222333', 0, 0, 0, '211011-D0097/VNPT VNP-TTKDCTO-PKHTCDN/HĐ VNPT-CA', 'CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ CƠ GIỚI CÔNG TRÌNH TRƯỜNG TIẾ', '230, Nguyễn Trãi, Ninh Kiều, TP Cần Thơ', '1800577863', '', 'Staff ID Pro', '', 5000000, '10%', 5500000, 0, 'CTO-LD/00139319', 'cto_ivan_gh_1800697790', 'OIDCTO1800577863', '5401010177f13a3e27e4391cd5185202', '2023-04-11', '', '0045705/25.10.21_CTO-LD/00138914', 0, '2023-04-04', '', 'Nội dung ghi chú '),
(15, '2023-04-12', 'Cao Như Thuần', 0, 0, 0, 'Nội dung mã hợp đồng', 'Tên KH VNPT', 'CT', '1', '', 'VIP', '1', 100, '10', 110, 0, '', '', '', '', '0000-00-00', '', '', 0, '2023-04-12', '', ''),
(16, '2023-04-12', 'Lê Minh Thắng 33333', 0, 0, 0, 'Nội dung mã hợp đồng', 'Tên KH VNPT', 'Số 2 Cần Thơ, Nguyễn Trãi', '111', '', 'VIP', '1', 100, '10', 110, 0, '', '', '', '', '0000-00-00', '', '', 0, '2023-04-12', '', ''),
(17, '2023-04-12', 'Lê Minh Thắng 33333', 0, 0, 0, 'Nội dung mã hợp đồng', 'Tên KH VNPT', 'Số 2 Cần Thơ, Nguyễn Trãi', '111', '', 'VIP', '1', 100, '10', 110, 0, '', '', '', '', '0000-00-00', '', '', 0, '2023-04-12', '', ''),
(18, '2023-04-12', 'Cao Như Thuần', 0, 0, 0, '1', 'Tên KH VNPT', 'Số 2 Cần Thơ, Nguyễn Trãi', 'VIP', '', '1', '1', 100, '1', 110, 0, '', '', '', '', '0000-00-00', '', '', 0, '2023-04-12', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `loaiyeucau`
--

CREATE TABLE `loaiyeucau` (
  `hd_loaiYeuCau` int(11) NOT NULL,
  `lyc_loai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loaiyeucau`
--

INSERT INTO `loaiyeucau` (`hd_loaiYeuCau`, `lyc_loai`) VALUES
(1, 'Gia Hạn '),
(2, 'Tạo Mới ');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `hd_token` int(11) NOT NULL,
  `token_loai` varchar(255) NOT NULL COMMENT 'Vd: (1.Mua, 2.Tự trang bị ...)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`hd_token`, `token_loai`) VALUES
(1, 'Mua'),
(2, 'Tự Trang Bị'),
(3, 'Khuyến Mãi');

-- --------------------------------------------------------

--
-- Table structure for table `trangthai`
--

CREATE TABLE `trangthai` (
  `hd_trangThai` int(11) NOT NULL,
  `tt_loai` varchar(255) NOT NULL COMMENT 'Loại trạng thái của hợp đồng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trangthai`
--

INSERT INTO `trangthai` (`hd_trangThai`, `tt_loai`) VALUES
(1, 'Gửi Yêu Cầu '),
(2, 'Đã Nhập ĐHSXKD '),
(3, 'Chờ Gen '),
(4, 'Chờ trả BBBG '),
(5, 'Chờ Xuất Hóa Đơn '),
(6, 'Hoàn Thiện '),
(7, 'Hủy Yêu Cầu ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_taiKhoan` varchar(255) NOT NULL,
  `user_matKhau` varchar(255) NOT NULL,
  `user_role` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'Admin mang giá trị 1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_taiKhoan`, `user_matKhau`, `user_role`) VALUES
(1, 'admin', '123', 1),
(2, 'thang', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`hd_dichVu`);

--
-- Indexes for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`hd_id`);

--
-- Indexes for table `loaiyeucau`
--
ALTER TABLE `loaiyeucau`
  ADD PRIMARY KEY (`hd_loaiYeuCau`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`hd_token`);

--
-- Indexes for table `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`hd_trangThai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `hd_dichVu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hopdong`
--
ALTER TABLE `hopdong`
  MODIFY `hd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `loaiyeucau`
--
ALTER TABLE `loaiyeucau`
  MODIFY `hd_loaiYeuCau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `hd_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `hd_trangThai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
