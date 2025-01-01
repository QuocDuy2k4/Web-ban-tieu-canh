-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Phiên bản máy phục vụ: Acer Nitro 5 Tiger
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `2200007388_TruongQuocDuy`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(12) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `total` int(12) NOT NULL,
  `pttt` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `name`, `address`, `tel`, `email`, `total`, `pttt`) VALUES
(4, 'duy11', 'Phan Thiết, Bình Thuận', '0777777777', 'quocduy@gmail.com ', 900, 0),
(5, 'duy11', 'Q12, TPHCM', '0888888888', 'quocduy@gmail.com', 700, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(12) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `dongia` int(12) NOT NULL DEFAULT 0,
  `soluong` int(3) NOT NULL DEFAULT 0,
  `thanhtien` int(12) NOT NULL DEFAULT 0,
  `idbill` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `tensp`, `img`, `dongia`, `soluong`, `thanhtien`, `idbill`) VALUES
(3, 'Hoa Lan Hồ Điệp', 'anh27.jpg', 390, 1, 390000, 2),
(4, 'Hoa Hồng Kinh Đô   ', 'anh8x.jpg', 330, 1, 330000, 2),
(6, 'Thiên Xuân Hồi Lạc', 'u.jpg', 300, 2, 600000, 4),
(7, 'Chậu Thủy Cảnh', 'c.jpg', 300, 1, 300000, 4),
(8, 'Thiên Xuân Hồi Lạc', 'u.jpg', 300, 1, 300000, 5),
(9, 'Chậu Cảnh Vĩnh Hà ', 'q2.jpg', 200, 2, 400000, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `hoten` varchar(200) NOT NULL,
  `sdt` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `noidung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`hoten`, `sdt`, `email`, `noidung`) VALUES
('Trương Quốc Duy', 0777777777, 'truongduy01696232483@gmail.com', 'tôi muốn mua hoa với 1 số lượng lớn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `tendangnhap` varchar(100) NOT NULL,
  `matkhau` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` varchar(100) NOT NULL,
  `nhom_id` int(11) NOT NULL,
  `tensp` varchar(200) NOT NULL,
  `mota` text DEFAULT NULL,
  `dongia` int(11) NOT NULL,
  `img` varchar(200) DEFAULT NULL,
  `enable` tinyint(4) NOT NULL DEFAULT 1,
  `ghichu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `nhom_id`, `tensp`, `mota`, `dongia`, `img`, `enable`, `ghichu`) VALUES
('1231', 2367, 'Hoa Hồng Nhung', 'siêu nhiều màu ', 123, 'hoa6.jpg', 1, 'hoa hồng '),
('2342', 1213, 'Hoa cúc', '32e', 233, 'hoa2.jpg', 1, '232'),
('45435', 2342, 'Hoa cẩm tú cầu', 'dsad', 3243, 'hoa5.jpg', 1, 'sdsa'),
('32434', 2367, '35345  ', '34534  ', 435, 'take4.jpg', 1, ' ahihi '),
('54645', 46456, '6456', '654', 65, 'anh1.jpg', 1, '565'),
('56756', 2367, '7567 ', '5675 ', 75567, 'take4.jpg', 0, 'dfd '),
('232', 2367, '32432 ', '43 ', 343, 'product.jpg', 1, '345 '),
('111', 7567, 'Hoa Cẩm Tú Cầu', 'đẹp', 343, 'hoa3.png', 1, 'hay');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham1`
--

CREATE TABLE `sanpham1` (
  `masp` varchar(100) NOT NULL,
  `nhom_id` int(11) NOT NULL,
  `tensp` varchar(200) NOT NULL,
  `mota` text DEFAULT NULL,
  `dongiacu` int(11) NOT NULL,
  `dongiamoi` int(11) NOT NULL,
  `img1` varchar(200) NOT NULL,
  `img2` varchar(200) DEFAULT NULL,
  `img3` varchar(200) DEFAULT NULL,
  `img4` varchar(200) DEFAULT NULL,
  `enable` tinyint(4) NOT NULL DEFAULT 1,
  `soluong` int(12) NOT NULL,
  `diemnoibat` text DEFAULT NULL,
  `dieukienchamsoc` text DEFAULT NULL,
  `cachchamsoc` text DEFAULT NULL,
  `xuatxu` varchar(255) DEFAULT NULL,
  `ngaydang` varchar(50) DEFAULT NULL,
  `kichthuoc` varchar(255) DEFAULT NULL,
  `nguoidang` varchar(50) DEFAULT NULL,
  `giongloai` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham1`
--

INSERT INTO `sanpham1` (`masp`, `nhom_id`, `tensp`, `mota`, `dongiacu`, `dongiamoi`, `img1`, `img2`, `img3`, `img4`, `enable`, `soluong`, `diemnoibat`, `dieukienchamsoc`, `cachchamsoc`, `xuatxu`, `ngaydang`, `kichthuoc`, `nguoidang`, `giongloai`) VALUES
('213', 123, 'Chậu Tiên Cảnh  ', 'Totoro Garden coi công việc của mình luôn mạng lại màu xanh tươi cho cuộc sống và kiến tạo giá trị, sức sống cho mọi không gian mà Totoro Garden bước tới. Sự tin tưởng của Quý khách hàng trong suốt thời gian qua là niềm tự hào và là động lực để Totoro Garden tiếp tục lớn mạnh và phát triển. Đôi khi những điều nhỏ bé lại giúp bạn tràn đầy năng lượng...Với Totoro thì ngắm cây xanh tươi mỗi ngày thì mỗi ngày luôn tràn đầy năng lượng. Bạn hãy ghé qua Totoro để được tư vấn và lựa chọn rất nhiều các loại cây độc đáo, đẹp lạ cho không gian sống của bạn.  ', 123, 118, 'dd.jpg', 'y.jpg', 'j.jpg', 'i.jpg', 1, 100, 'dễ chăm sóc  ', 'nơi ẩm ướt, tưới nước 1 tuần 1 lần  ', 'tưới nước 1 tuần 11 lần  ', 'Đồng Thấp  ', '2/11/2023  ', '10cm-30cm  ', 'Vũ Thị Bắc    ', 'tiểu cảnh mini  '),
('32423', 123, 'Tiểu Cảnh thủy Tinh ', 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,... ', 230, 200, 'de4.jpg', 'bh.jpg', 'de1.jpg', 'ccc.jpg', 1, 20, 'không tốn diện tích ', 'nơi ẩm ướt ', '1 tuần tưới 3 lần ', 'bắc ninh ', '31/3/2017 ', '10- 30 cm  ', 'hà văn thành ', 'lục sinh '),
('4565', 123, 'Chậu Sinh Chữ hán ', 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,... ', 330, 310, 'a4.jpg', 'a3.jpg', 'a2.jpg', 'a1.jpg', 1, 200, 'không tốn diện tích nhiều ', 'nơi có ánh sáng ', '1 tuần tưới 2 lần ', 'tuyên quang ', '23/11/2019 ', '10cm-30cm ', 'nguyễn xuân hinh ', 'lục thủy thể '),
('35345436', 123, 'Vạn Phúc Thọ   ', 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,...   ', 230, 200, 'e.jpg', 'a2.jpg', 'sa.jpg', 'dd.jpg', 1, 10, 'dễ chăm sóc   ', '1 lần 1 ngày   ', 'chỗ có ánh nắng   ', 'Đồng Thấp   ', '11/2/2023   ', '10- 30 cm    ', 'hà linh    ', 'mini   '),
('464567457', 123, 'Chậu Thủy Cảnh ', 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,... ', 340, 300, 'c.jpg', 'a2.jpg', 'b5.jpg', 'a6.jpg', 1, 55, 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,... ', '1 lần tưới 1 lần ', 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,... ', 'Hà Giang ', '11/2/2023 ', '10- 30 cm  ', 'Vũ Thị Bắc   ', 'rêu cảnh '),
('7657575', 123, 'Chậu Cảnh Vĩnh Hà  ', 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,...  ', 231, 200, 'q2.jpg', 'a4.jpg', 'de2.jpg', 'k.jpg', 1, 123, 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,...  ', 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,...  ', '1 tuần tưới 2 lần  ', 'lai châu  ', '4/2/2012  ', '10cm-30cm  ', 'Nguyễn Minh Thiện  ', 'thủy cảnh  '),
('5674574', 123, 'Tiên Lai Bông Cảnh ', 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,... ', 324, 310, 'ee.jpg', 'g6.jpg', 'fdg.jpg', 'i.jpg', 1, 56, 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,... ', 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,... ', '1 tuần tưới 3 lần ', 'Đồng Thấp ', '11/2/2023 ', '10- 30 cm  ', 'Hfa Văn Khanh ', 'mini '),
('34353453', 123, 'Bồng Lai Tiên Cảnh ', 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,... ', 340, 330, 'fdg.jpg', 'a2.jpg', 'a1.jpg', 'fff.jpg', 1, 456, 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,... ', 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,... ', 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,... ', 'tuyên quang ', '11/2/2023 ', '10cm-30cm ', 'Nguyễn Minh Thiện ', 'mini '),
('3456465475', 123, 'Thiên Xuân Hồi Lạc ', 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,... ', 330, 300, 'u.jpg', 'a9.jpg', 'a7.jpg', 'c.jpg', 1, 455, 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,... ', 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,... ', 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,... ', 'Đồng Thấp ', '12/12/20023 ', '10- 30 cm  ', 'Hà thanh ', 'mini '),
('35346456', 123, 'Chậu Cảnh  Liên Hoa ', 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,... ', 400, 370, 'm1.jpg', 'h.jpg', 'nh.jpg', 'm.jpg', 1, 234, 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,... ', 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,... ', 'Màu xanh trong tiểu cảnh sân vườn này mang đến sự tươi mới, mát mẻ và an yên. Thay vì sử dụng thác nước có kích thước lớn, thì gia chủ đã lựa chọn xây dựng một hồ cá mini đi kèm nhiều tiểu tiết như cầu đi bộ, hòn đá,... ', 'Đồng Thấp ', '12/12/20023 ', '10cm-30cm ', 'Liên Hoa ', 'cảnh ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham_nhom`
--

CREATE TABLE `sanpham_nhom` (
  `id` int(11) NOT NULL,
  `tennhom` varchar(100) NOT NULL,
  `ghichu` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham_nhom`
--

INSERT INTO `sanpham_nhom` (`id`, `tennhom`, `ghichu`) VALUES
(123, 'Tiểu Cảnh Thủy Tinh', 's '),
(234, 'Tiểu Cạnh Chậu Gốm', '100 loại '),
(987, 'Tiểu Cảnh mini', '12 ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `tendangnhap` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `hoten` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`tendangnhap`, `matkhau`, `hoten`, `email`, `enable`) VALUES
('duy11', '111', 'Trương Quốc Duy', 'truongduy01696232483@gmail.com', 1),
('sdfs', 'fdsf', 'sdf', 'sdf', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
