-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 01, 2019 at 06:24 PM
-- Server version: 5.7.26-0ubuntu0.18.10.1
-- PHP Version: 7.3.6-1+ubuntu18.10.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `districtid` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinceid` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`districtid`, `name`, `provinceid`) VALUES
('001HH', 'Quận Ba Đình', '01TTT'),
('002HH', 'Quận Hoàn Kiếm', '01TTT'),
('003HH', 'Quận Tây Hồ', '01TTT'),
('004HH', 'Quận Long Biên', '01TTT'),
('005HH', 'Quận Cầu Giấy', '01TTT'),
('006HH', 'Quận Đống Đa', '01TTT'),
('007HH', 'Quận Hai Bà Trưng', '01TTT'),
('008HH', 'Quận Hoàng Mai', '01TTT'),
('009HH', 'Quận Thanh Xuân', '01TTT'),
('016HH', 'Huyện Sóc Sơn', '01TTT'),
('017HH', 'Huyện Đông Anh', '01TTT'),
('018HH', 'Huyện Gia Lâm', '01TTT'),
('019HH', 'Quận Nam Từ Liêm', '01TTT'),
('020HH', 'Huyện Thanh Trì', '01TTT'),
('021HH', 'Quận Bắc Từ Liêm', '01TTT'),
('024HH', 'Thành phố Hà Giang', '02TTT'),
('026HH', 'Huyện Đồng Văn', '02TTT'),
('027HH', 'Huyện Mèo Vạc', '02TTT'),
('028HH', 'Huyện Yên Minh', '02TTT'),
('029HH', 'Huyện Quản Bạ', '02TTT'),
('030HH', 'Huyện Vị Xuyên', '02TTT'),
('031HH', 'Huyện Bắc Mê', '02TTT'),
('032HH', 'Huyện Hoàng Su Phì', '02TTT'),
('033HH', 'Huyện Xín Mần', '02TTT'),
('034HH', 'Huyện Bắc Quang', '02TTT'),
('035HH', 'Huyện Quang Bình', '02TTT'),
('040HH', 'Thành phố Cao Bằng', '04TTT'),
('042HH', 'Huyện Bảo Lâm', '04TTT'),
('043HH', 'Huyện Bảo Lạc', '04TTT'),
('044HH', 'Huyện Thông Nông', '04TTT'),
('045HH', 'Huyện Hà Quảng', '04TTT'),
('046HH', 'Huyện Trà Lĩnh', '04TTT'),
('047HH', 'Huyện Trùng Khánh', '04TTT'),
('048HH', 'Huyện Hạ Lang', '04TTT'),
('049HH', 'Huyện Quảng Uyên', '04TTT'),
('050HH', 'Huyện Phục Hòa', '04TTT'),
('051HH', 'Huyện Hòa An', '04TTT'),
('052HH', 'Huyện Nguyên Bình', '04TTT'),
('053HH', 'Huyện Thạch An', '04TTT'),
('058HH', 'Thành Phố Bắc Kạn', '06TTT'),
('060HH', 'Huyện Pác Nặm', '06TTT'),
('061HH', 'Huyện Ba Bể', '06TTT'),
('062HH', 'Huyện Ngân Sơn', '06TTT'),
('063HH', 'Huyện Bạch Thông', '06TTT'),
('064HH', 'Huyện Chợ Đồn', '06TTT'),
('065HH', 'Huyện Chợ Mới', '06TTT'),
('066HH', 'Huyện Na Rì', '06TTT'),
('070HH', 'Thành phố Tuyên Quang', '08TTT'),
('071HH', 'Huyện Lâm Bình', '08TTT'),
('072HH', 'Huyện Na Hang', '08TTT'),
('073HH', 'Huyện Chiêm Hóa', '08TTT'),
('074HH', 'Huyện Hàm Yên', '08TTT'),
('075HH', 'Huyện Yên Sơn', '08TTT'),
('076HH', 'Huyện Sơn Dương', '08TTT'),
('080HH', 'Thành phố Lào Cai', '10TTT'),
('082HH', 'Huyện Bát Xát', '10TTT'),
('083HH', 'Huyện Mường Khương', '10TTT'),
('084HH', 'Huyện Si Ma Cai', '10TTT'),
('085HH', 'Huyện Bắc Hà', '10TTT'),
('086HH', 'Huyện Bảo Thắng', '10TTT'),
('087HH', 'Huyện Bảo Yên', '10TTT'),
('088HH', 'Huyện Sa Pa', '10TTT'),
('089HH', 'Huyện Văn Bàn', '10TTT'),
('094HH', 'Thành phố Điện Biên Phủ', '11TTT'),
('095HH', 'Thị Xã Mường Lay', '11TTT'),
('096HH', 'Huyện Mường Nhé', '11TTT'),
('097HH', 'Huyện Mường Chà', '11TTT'),
('098HH', 'Huyện Tủa Chùa', '11TTT'),
('099HH', 'Huyện Tuần Giáo', '11TTT'),
('100HH', 'Huyện Điện Biên', '11TTT'),
('101HH', 'Huyện Điện Biên Đông', '11TTT'),
('102HH', 'Huyện Mường Ảng', '11TTT'),
('103HH', 'Huyện Nậm Pồ', '11TTT'),
('105HH', 'Thành phố Lai Châu', '12TTT'),
('106HH', 'Huyện Tam Đường', '12TTT'),
('107HH', 'Huyện Mường Tè', '12TTT'),
('108HH', 'Huyện Sìn Hồ', '12TTT'),
('109HH', 'Huyện Phong Thổ', '12TTT'),
('110HH', 'Huyện Than Uyên', '12TTT'),
('111HH', 'Huyện Tân Uyên', '12TTT'),
('112HH', 'Huyện Nậm Nhùn', '12TTT'),
('116HH', 'Thành phố Sơn La', '14TTT'),
('118HH', 'Huyện Quỳnh Nhai', '14TTT'),
('119HH', 'Huyện Thuận Châu', '14TTT'),
('120HH', 'Huyện Mường La', '14TTT'),
('121HH', 'Huyện Bắc Yên', '14TTT'),
('122HH', 'Huyện Phù Yên', '14TTT'),
('123HH', 'Huyện Mộc Châu', '14TTT'),
('124HH', 'Huyện Yên Châu', '14TTT'),
('125HH', 'Huyện Mai Sơn', '14TTT'),
('126HH', 'Huyện Sông Mã', '14TTT'),
('127HH', 'Huyện Sốp Cộp', '14TTT'),
('128HH', 'Huyện Vân Hồ', '14TTT'),
('132HH', 'Thành phố Yên Bái', '15TTT'),
('133HH', 'Thị xã Nghĩa Lộ', '15TTT'),
('135HH', 'Huyện Lục Yên', '15TTT'),
('136HH', 'Huyện Văn Yên', '15TTT'),
('137HH', 'Huyện Mù Căng Chải', '15TTT'),
('138HH', 'Huyện Trấn Yên', '15TTT'),
('139HH', 'Huyện Trạm Tấu', '15TTT'),
('140HH', 'Huyện Văn Chấn', '15TTT'),
('141HH', 'Huyện Yên Bình', '15TTT'),
('148HH', 'Thành phố Hòa Bình', '17TTT'),
('150HH', 'Huyện Đà Bắc', '17TTT'),
('151HH', 'Huyện Kỳ Sơn', '17TTT'),
('152HH', 'Huyện Lương Sơn', '17TTT'),
('153HH', 'Huyện Kim Bôi', '17TTT'),
('154HH', 'Huyện Cao Phong', '17TTT'),
('155HH', 'Huyện Tân Lạc', '17TTT'),
('156HH', 'Huyện Mai Châu', '17TTT'),
('157HH', 'Huyện Lạc Sơn', '17TTT'),
('158HH', 'Huyện Yên Thủy', '17TTT'),
('159HH', 'Huyện Lạc Thủy', '17TTT'),
('164HH', 'Thành phố Thái Nguyên', '19TTT'),
('165HH', 'Thành phố Sông Công', '19TTT'),
('167HH', 'Huyện Định Hóa', '19TTT'),
('168HH', 'Huyện Phú Lương', '19TTT'),
('169HH', 'Huyện Đồng Hỷ', '19TTT'),
('170HH', 'Huyện Võ Nhai', '19TTT'),
('171HH', 'Huyện Đại Từ', '19TTT'),
('172HH', 'Thị xã Phổ Yên', '19TTT'),
('173HH', 'Huyện Phú Bình', '19TTT'),
('178HH', 'Thành phố Lạng Sơn', '20TTT'),
('180HH', 'Huyện Tràng Định', '20TTT'),
('181HH', 'Huyện Bình Gia', '20TTT'),
('182HH', 'Huyện Văn Lãng', '20TTT'),
('183HH', 'Huyện Cao Lộc', '20TTT'),
('184HH', 'Huyện Văn Quan', '20TTT'),
('185HH', 'Huyện Bắc Sơn', '20TTT'),
('186HH', 'Huyện Hữu Lũng', '20TTT'),
('187HH', 'Huyện Chi Lăng', '20TTT'),
('188HH', 'Huyện Lộc Bình', '20TTT'),
('189HH', 'Huyện Đình Lập', '20TTT'),
('193HH', 'Thành phố Hạ Long', '22TTT'),
('194HH', 'Thành phố Móng Cái', '22TTT'),
('195HH', 'Thành phố Cẩm Phả', '22TTT'),
('196HH', 'Thành phố Uông Bí', '22TTT'),
('198HH', 'Huyện Bình Liêu', '22TTT'),
('199HH', 'Huyện Tiên Yên', '22TTT'),
('200HH', 'Huyện Đầm Hà', '22TTT'),
('201HH', 'Huyện Hải Hà', '22TTT'),
('202HH', 'Huyện Ba Chẽ', '22TTT'),
('203HH', 'Huyện Vân Đồn', '22TTT'),
('204HH', 'Huyện Hoành Bồ', '22TTT'),
('205HH', 'Thị xã Đông Triều', '22TTT'),
('206HH', 'Thị xã Quảng Yên', '22TTT'),
('207HH', 'Huyện Cô Tô', '22TTT'),
('213HH', 'Thành phố Bắc Giang', '24TTT'),
('215HH', 'Huyện Yên Thế', '24TTT'),
('216HH', 'Huyện Tân Yên', '24TTT'),
('217HH', 'Huyện Lạng Giang', '24TTT'),
('218HH', 'Huyện Lục Nam', '24TTT'),
('219HH', 'Huyện Lục Ngạn', '24TTT'),
('220HH', 'Huyện Sơn Động', '24TTT'),
('221HH', 'Huyện Yên Dũng', '24TTT'),
('222HH', 'Huyện Việt Yên', '24TTT'),
('223HH', 'Huyện Hiệp Hòa', '24TTT'),
('227HH', 'Thành phố Việt Trì', '25TTT'),
('228HH', 'Thị xã Phú Thọ', '25TTT'),
('230HH', 'Huyện Đoan Hùng', '25TTT'),
('231HH', 'Huyện Hạ Hòa', '25TTT'),
('232HH', 'Huyện Thanh Ba', '25TTT'),
('233HH', 'Huyện Phù Ninh', '25TTT'),
('234HH', 'Huyện Yên Lập', '25TTT'),
('235HH', 'Huyện Cẩm Khê', '25TTT'),
('236HH', 'Huyện Tam Nông', '25TTT'),
('237HH', 'Huyện Lâm Thao', '25TTT'),
('238HH', 'Huyện Thanh Sơn', '25TTT'),
('239HH', 'Huyện Thanh Thuỷ', '25TTT'),
('240HH', 'Huyện Tân Sơn', '25TTT'),
('243HH', 'Thành phố Vĩnh Yên', '26TTT'),
('244HH', 'Thị xã Phúc Yên', '26TTT'),
('246HH', 'Huyện Lập Thạch', '26TTT'),
('247HH', 'Huyện Tam Dương', '26TTT'),
('248HH', 'Huyện Tam Đảo', '26TTT'),
('249HH', 'Huyện Bình Xuyên', '26TTT'),
('250HH', 'Huyện Mê Linh', '01TTT'),
('251HH', 'Huyện Yên Lạc', '26TTT'),
('252HH', 'Huyện Vĩnh Tường', '26TTT'),
('253HH', 'Huyện Sông Lô', '26TTT'),
('256HH', 'Thành phố Bắc Ninh', '27TTT'),
('258HH', 'Huyện Yên Phong', '27TTT'),
('259HH', 'Huyện Quế Võ', '27TTT'),
('260HH', 'Huyện Tiên Du', '27TTT'),
('261HH', 'Thị xã Từ Sơn', '27TTT'),
('262HH', 'Huyện Thuận Thành', '27TTT'),
('263HH', 'Huyện Gia Bình', '27TTT'),
('264HH', 'Huyện Lương Tài', '27TTT'),
('268HH', 'Quận Hà Đông', '01TTT'),
('269HH', 'Thị xã Sơn Tây', '01TTT'),
('271HH', 'Huyện Ba Vì', '01TTT'),
('272HH', 'Huyện Phúc Thọ', '01TTT'),
('273HH', 'Huyện Đan Phượng', '01TTT'),
('274HH', 'Huyện Hoài Đức', '01TTT'),
('275HH', 'Huyện Quốc Oai', '01TTT'),
('276HH', 'Huyện Thạch Thất', '01TTT'),
('277HH', 'Huyện Chương Mỹ', '01TTT'),
('278HH', 'Huyện Thanh Oai', '01TTT'),
('279HH', 'Huyện Thường Tín', '01TTT'),
('280HH', 'Huyện Phú Xuyên', '01TTT'),
('281HH', 'Huyện Ứng Hòa', '01TTT'),
('282HH', 'Huyện Mỹ Đức', '01TTT'),
('288HH', 'Thành phố Hải Dương', '30TTT'),
('290HH', 'Thị xã Chí Linh', '30TTT'),
('291HH', 'Huyện Nam Sách', '30TTT'),
('292HH', 'Huyện Kinh Môn', '30TTT'),
('293HH', 'Huyện Kim Thành', '30TTT'),
('294HH', 'Huyện Thanh Hà', '30TTT'),
('295HH', 'Huyện Cẩm Giàng', '30TTT'),
('296HH', 'Huyện Bình Giang', '30TTT'),
('297HH', 'Huyện Gia Lộc', '30TTT'),
('298HH', 'Huyện Tứ Kỳ', '30TTT'),
('299HH', 'Huyện Ninh Giang', '30TTT'),
('300HH', 'Huyện Thanh Miện', '30TTT'),
('303HH', 'Quận Hồng Bàng', '31TTT'),
('304HH', 'Quận Ngô Quyền', '31TTT'),
('305HH', 'Quận Lê Chân', '31TTT'),
('306HH', 'Quận Hải An', '31TTT'),
('307HH', 'Quận Kiến An', '31TTT'),
('308HH', 'Quận Đồ Sơn', '31TTT'),
('309HH', 'Quận Dương Kinh', '31TTT'),
('311HH', 'Huyện Thủy Nguyên', '31TTT'),
('312HH', 'Huyện An Dương', '31TTT'),
('313HH', 'Huyện An Lão', '31TTT'),
('314HH', 'Huyện Kiến Thuỵ', '31TTT'),
('315HH', 'Huyện Tiên Lãng', '31TTT'),
('316HH', 'Huyện Vĩnh Bảo', '31TTT'),
('317HH', 'Huyện Cát Hải', '31TTT'),
('318HH', 'Huyện Bạch Long Vĩ', '31TTT'),
('323HH', 'Thành phố Hưng Yên', '33TTT'),
('325HH', 'Huyện Văn Lâm', '33TTT'),
('326HH', 'Huyện Văn Giang', '33TTT'),
('327HH', 'Huyện Yên Mỹ', '33TTT'),
('328HH', 'Huyện Mỹ Hào', '33TTT'),
('329HH', 'Huyện Ân Thi', '33TTT'),
('330HH', 'Huyện Khoái Châu', '33TTT'),
('331HH', 'Huyện Kim Động', '33TTT'),
('332HH', 'Huyện Tiên Lữ', '33TTT'),
('333HH', 'Huyện Phù Cừ', '33TTT'),
('336HH', 'Thành phố Thái Bình', '34TTT'),
('338HH', 'Huyện Quỳnh Phụ', '34TTT'),
('339HH', 'Huyện Hưng Hà', '34TTT'),
('340HH', 'Huyện Đông Hưng', '34TTT'),
('341HH', 'Huyện Thái Thụy', '34TTT'),
('342HH', 'Huyện Tiền Hải', '34TTT'),
('343HH', 'Huyện Kiến Xương', '34TTT'),
('344HH', 'Huyện Vũ Thư', '34TTT'),
('347HH', 'Thành phố Phủ Lý', '35TTT'),
('349HH', 'Huyện Duy Tiên', '35TTT'),
('350HH', 'Huyện Kim Bảng', '35TTT'),
('351HH', 'Huyện Thanh Liêm', '35TTT'),
('352HH', 'Huyện Bình Lục', '35TTT'),
('353HH', 'Huyện Lý Nhân', '35TTT'),
('356HH', 'Thành phố Nam Định', '36TTT'),
('358HH', 'Huyện Mỹ Lộc', '36TTT'),
('359HH', 'Huyện Vụ Bản', '36TTT'),
('360HH', 'Huyện Ý Yên', '36TTT'),
('361HH', 'Huyện Nghĩa Hưng', '36TTT'),
('362HH', 'Huyện Nam Trực', '36TTT'),
('363HH', 'Huyện Trực Ninh', '36TTT'),
('364HH', 'Huyện Xuân Trường', '36TTT'),
('365HH', 'Huyện Giao Thủy', '36TTT'),
('366HH', 'Huyện Hải Hậu', '36TTT'),
('369HH', 'Thành phố Ninh Bình', '37TTT'),
('370HH', 'Thành phố Tam Điệp', '37TTT'),
('372HH', 'Huyện Nho Quan', '37TTT'),
('373HH', 'Huyện Gia Viễn', '37TTT'),
('374HH', 'Huyện Hoa Lư', '37TTT'),
('375HH', 'Huyện Yên Khánh', '37TTT'),
('376HH', 'Huyện Kim Sơn', '37TTT'),
('377HH', 'Huyện Yên Mô', '37TTT'),
('380HH', 'Thành phố Thanh Hóa', '38TTT'),
('381HH', 'Thị xã Bỉm Sơn', '38TTT'),
('382HH', 'Thành phố Sầm Sơn', '38TTT'),
('384HH', 'Huyện Mường Lát', '38TTT'),
('385HH', 'Huyện Quan Hóa', '38TTT'),
('386HH', 'Huyện Bá Thước', '38TTT'),
('387HH', 'Huyện Quan Sơn', '38TTT'),
('388HH', 'Huyện Lang Chánh', '38TTT'),
('389HH', 'Huyện Ngọc Lặc', '38TTT'),
('390HH', 'Huyện Cẩm Thủy', '38TTT'),
('391HH', 'Huyện Thạch Thành', '38TTT'),
('392HH', 'Huyện Hà Trung', '38TTT'),
('393HH', 'Huyện Vĩnh Lộc', '38TTT'),
('394HH', 'Huyện Yên Định', '38TTT'),
('395HH', 'Huyện Thọ Xuân', '38TTT'),
('396HH', 'Huyện Thường Xuân', '38TTT'),
('397HH', 'Huyện Triệu Sơn', '38TTT'),
('398HH', 'Huyện Thiệu Hóa', '38TTT'),
('399HH', 'Huyện Hoằng Hóa', '38TTT'),
('400HH', 'Huyện Hậu Lộc', '38TTT'),
('401HH', 'Huyện Nga Sơn', '38TTT'),
('402HH', 'Huyện Như Xuân', '38TTT'),
('403HH', 'Huyện Như Thanh', '38TTT'),
('404HH', 'Huyện Nông Cống', '38TTT'),
('405HH', 'Huyện Đông Sơn', '38TTT'),
('406HH', 'Huyện Quảng Xương', '38TTT'),
('407HH', 'Huyện Tĩnh Gia', '38TTT'),
('412HH', 'Thành phố Vinh', '40TTT'),
('413HH', 'Thị xã Cửa Lò', '40TTT'),
('414HH', 'Thị xã Thái Hòa', '40TTT'),
('415HH', 'Huyện Quế Phong', '40TTT'),
('416HH', 'Huyện Quỳ Châu', '40TTT'),
('417HH', 'Huyện Kỳ Sơn', '40TTT'),
('418HH', 'Huyện Tương Dương', '40TTT'),
('419HH', 'Huyện Nghĩa Đàn', '40TTT'),
('420HH', 'Huyện Quỳ Hợp', '40TTT'),
('421HH', 'Huyện Quỳnh Lưu', '40TTT'),
('422HH', 'Huyện Con Cuông', '40TTT'),
('423HH', 'Huyện Tân Kỳ', '40TTT'),
('424HH', 'Huyện Anh Sơn', '40TTT'),
('425HH', 'Huyện Diễn Châu', '40TTT'),
('426HH', 'Huyện Yên Thành', '40TTT'),
('427HH', 'Huyện Đô Lương', '40TTT'),
('428HH', 'Huyện Thanh Chương', '40TTT'),
('429HH', 'Huyện Nghi Lộc', '40TTT'),
('430HH', 'Huyện Nam Đàn', '40TTT'),
('431HH', 'Huyện Hưng Nguyên', '40TTT'),
('432HH', 'Thị xã Hoàng Mai', '40TTT'),
('436HH', 'Thành phố Hà Tĩnh', '42TTT'),
('437HH', 'Thị xã Hồng Lĩnh', '42TTT'),
('439HH', 'Huyện Hương Sơn', '42TTT'),
('440HH', 'Huyện Đức Thọ', '42TTT'),
('441HH', 'Huyện Vũ Quang', '42TTT'),
('442HH', 'Huyện Nghi Xuân', '42TTT'),
('443HH', 'Huyện Can Lộc', '42TTT'),
('444HH', 'Huyện Hương Khê', '42TTT'),
('445HH', 'Huyện Thạch Hà', '42TTT'),
('446HH', 'Huyện Cẩm Xuyên', '42TTT'),
('447HH', 'Huyện Kỳ Anh', '42TTT'),
('448HH', 'Huyện Lộc Hà', '42TTT'),
('449HH', 'Thị xã Kỳ Anh', '42TTT'),
('450HH', 'Thành Phố Đồng Hới', '44TTT'),
('452HH', 'Huyện Minh Hóa', '44TTT'),
('453HH', 'Huyện Tuyên Hóa', '44TTT'),
('454HH', 'Huyện Quảng Trạch', '44TTT'),
('455HH', 'Huyện Bố Trạch', '44TTT'),
('456HH', 'Huyện Quảng Ninh', '44TTT'),
('457HH', 'Huyện Lệ Thủy', '44TTT'),
('458HH', 'Thị xã Ba Đồn', '44TTT'),
('461HH', 'Thành phố Đông Hà', '45TTT'),
('462HH', 'Thị xã Quảng Trị', '45TTT'),
('464HH', 'Huyện Vĩnh Linh', '45TTT'),
('465HH', 'Huyện Hướng Hóa', '45TTT'),
('466HH', 'Huyện Gio Linh', '45TTT'),
('467HH', 'Huyện Đakrông', '45TTT'),
('468HH', 'Huyện Cam Lộ', '45TTT'),
('469HH', 'Huyện Triệu Phong', '45TTT'),
('470HH', 'Huyện Hải Lăng', '45TTT'),
('474HH', 'Thành phố Huế', '46TTT'),
('476HH', 'Huyện Phong Điền', '46TTT'),
('477HH', 'Huyện Quảng Điền', '46TTT'),
('478HH', 'Huyện Phú Vang', '46TTT'),
('479HH', 'Thị xã Hương Thủy', '46TTT'),
('480HH', 'Thị xã Hương Trà', '46TTT'),
('481HH', 'Huyện A Lưới', '46TTT'),
('482HH', 'Huyện Phú Lộc', '46TTT'),
('483HH', 'Huyện Nam Đông', '46TTT'),
('490HH', 'Quận Liên Chiểu', '48TTT'),
('491HH', 'Quận Thanh Khê', '48TTT'),
('492HH', 'Quận Hải Châu', '48TTT'),
('493HH', 'Quận Sơn Trà', '48TTT'),
('494HH', 'Quận Ngũ Hành Sơn', '48TTT'),
('495HH', 'Quận Cẩm Lệ', '48TTT'),
('497HH', 'Huyện Hòa Vang', '48TTT'),
('502HH', 'Thành phố Tam Kỳ', '49TTT'),
('503HH', 'Thành phố Hội An', '49TTT'),
('504HH', 'Huyện Tây Giang', '49TTT'),
('505HH', 'Huyện Đông Giang', '49TTT'),
('506HH', 'Huyện Đại Lộc', '49TTT'),
('507HH', 'Thị xã Điện Bàn', '49TTT'),
('508HH', 'Huyện Duy Xuyên', '49TTT'),
('509HH', 'Huyện Quế Sơn', '49TTT'),
('510HH', 'Huyện Nam Giang', '49TTT'),
('511HH', 'Huyện Phước Sơn', '49TTT'),
('512HH', 'Huyện Hiệp Đức', '49TTT'),
('513HH', 'Huyện Thăng Bình', '49TTT'),
('514HH', 'Huyện Tiên Phước', '49TTT'),
('515HH', 'Huyện Bắc Trà My', '49TTT'),
('516HH', 'Huyện Nam Trà My', '49TTT'),
('517HH', 'Huyện Núi Thành', '49TTT'),
('518HH', 'Huyện Phú Ninh', '49TTT'),
('519HH', 'Huyện Nông Sơn', '49TTT'),
('522HH', 'Thành phố Quảng Ngãi', '51TTT'),
('524HH', 'Huyện Bình Sơn', '51TTT'),
('525HH', 'Huyện Trà Bồng', '51TTT'),
('526HH', 'Huyện Tây Trà', '51TTT'),
('527HH', 'Huyện Sơn Tịnh', '51TTT'),
('528HH', 'Huyện Tư Nghĩa', '51TTT'),
('529HH', 'Huyện Sơn Hà', '51TTT'),
('530HH', 'Huyện Sơn Tây', '51TTT'),
('531HH', 'Huyện Minh Long', '51TTT'),
('532HH', 'Huyện Nghĩa Hành', '51TTT'),
('533HH', 'Huyện Mộ Đức', '51TTT'),
('534HH', 'Huyện Đức Phổ', '51TTT'),
('535HH', 'Huyện Ba Tơ', '51TTT'),
('536HH', 'Huyện Lý Sơn', '51TTT'),
('540HH', 'Thành phố Quy Nhơn', '52TTT'),
('542HH', 'Huyện An Lão', '52TTT'),
('543HH', 'Huyện Hoài Nhơn', '52TTT'),
('544HH', 'Huyện Hoài Ân', '52TTT'),
('545HH', 'Huyện Phù Mỹ', '52TTT'),
('546HH', 'Huyện Vĩnh Thạnh', '52TTT'),
('547HH', 'Huyện Tây Sơn', '52TTT'),
('548HH', 'Huyện Phù Cát', '52TTT'),
('549HH', 'Thị xã An Nhơn', '52TTT'),
('550HH', 'Huyện Tuy Phước', '52TTT'),
('551HH', 'Huyện Vân Canh', '52TTT'),
('555HH', 'Thành phố Tuy Hòa', '54TTT'),
('557HH', 'Thị xã Sông Cầu', '54TTT'),
('558HH', 'Huyện Đồng Xuân', '54TTT'),
('559HH', 'Huyện Tuy An', '54TTT'),
('560HH', 'Huyện Sơn Hòa', '54TTT'),
('561HH', 'Huyện Sông Hinh', '54TTT'),
('562HH', 'Huyện Tây Hòa', '54TTT'),
('563HH', 'Huyện Phú Hòa', '54TTT'),
('564HH', 'Huyện Đông Hòa', '54TTT'),
('568HH', 'Thành phố Nha Trang', '56TTT'),
('569HH', 'Thành phố Cam Ranh', '56TTT'),
('570HH', 'Huyện Cam Lâm', '56TTT'),
('571HH', 'Huyện Vạn Ninh', '56TTT'),
('572HH', 'Thị xã Ninh Hòa', '56TTT'),
('573HH', 'Huyện Khánh Vĩnh', '56TTT'),
('574HH', 'Huyện Diên Khánh', '56TTT'),
('575HH', 'Huyện Khánh Sơn', '56TTT'),
('576HH', 'Huyện Trường Sa', '56TTT'),
('582HH', 'Thành phố Phan Rang-Tháp Chàm', '58TTT'),
('584HH', 'Huyện Bác Ái', '58TTT'),
('585HH', 'Huyện Ninh Sơn', '58TTT'),
('586HH', 'Huyện Ninh Hải', '58TTT'),
('587HH', 'Huyện Ninh Phước', '58TTT'),
('588HH', 'Huyện Thuận Bắc', '58TTT'),
('589HH', 'Huyện Thuận Nam', '58TTT'),
('593HH', 'Thành phố Phan Thiết', '60TTT'),
('594HH', 'Thị xã La Gi', '60TTT'),
('595HH', 'Huyện Tuy Phong', '60TTT'),
('596HH', 'Huyện Bắc Bình', '60TTT'),
('597HH', 'Huyện Hàm Thuận Bắc', '60TTT'),
('598HH', 'Huyện Hàm Thuận Nam', '60TTT'),
('599HH', 'Huyện Tánh Linh', '60TTT'),
('600HH', 'Huyện Đức Linh', '60TTT'),
('601HH', 'Huyện Hàm Tân', '60TTT'),
('602HH', 'Huyện Phú Quí', '60TTT'),
('608HH', 'Thành phố Kon Tum', '62TTT'),
('610HH', 'Huyện Đắk Glei', '62TTT'),
('611HH', 'Huyện Ngọc Hồi', '62TTT'),
('612HH', 'Huyện Đắk Tô', '62TTT'),
('613HH', 'Huyện Kon Plông', '62TTT'),
('614HH', 'Huyện Kon Rẫy', '62TTT'),
('615HH', 'Huyện Đắk Hà', '62TTT'),
('616HH', 'Huyện Sa Thầy', '62TTT'),
('617HH', 'Huyện Tu Mơ Rông', '62TTT'),
('618HH', 'Huyện Ia H\' Drai', '62TTT'),
('622HH', 'Thành phố Pleiku', '64TTT'),
('623HH', 'Thị xã An Khê', '64TTT'),
('624HH', 'Thị xã Ayun Pa', '64TTT'),
('625HH', 'Huyện KBang', '64TTT'),
('626HH', 'Huyện Đăk Đoa', '64TTT'),
('627HH', 'Huyện Chư Păh', '64TTT'),
('628HH', 'Huyện Ia Grai', '64TTT'),
('629HH', 'Huyện Mang Yang', '64TTT'),
('630HH', 'Huyện Kông Chro', '64TTT'),
('631HH', 'Huyện Đức Cơ', '64TTT'),
('632HH', 'Huyện Chư Prông', '64TTT'),
('633HH', 'Huyện Chư Sê', '64TTT'),
('634HH', 'Huyện Đăk Pơ', '64TTT'),
('635HH', 'Huyện Ia Pa', '64TTT'),
('637HH', 'Huyện Krông Pa', '64TTT'),
('638HH', 'Huyện Phú Thiện', '64TTT'),
('639HH', 'Huyện Chư Pưh', '64TTT'),
('643HH', 'Thành phố Buôn Ma Thuột', '66TTT'),
('644HH', 'Thị Xã Buôn Hồ', '66TTT'),
('645HH', 'Huyện Ea H\'leo', '66TTT'),
('646HH', 'Huyện Ea Súp', '66TTT'),
('647HH', 'Huyện Buôn Đôn', '66TTT'),
('648HH', 'Huyện Cư M\'gar', '66TTT'),
('649HH', 'Huyện Krông Búk', '66TTT'),
('650HH', 'Huyện Krông Năng', '66TTT'),
('651HH', 'Huyện Ea Kar', '66TTT'),
('652HH', 'Huyện M\'Đrắk', '66TTT'),
('653HH', 'Huyện Krông Bông', '66TTT'),
('654HH', 'Huyện Krông Pắc', '66TTT'),
('655HH', 'Huyện Krông A Na', '66TTT'),
('656HH', 'Huyện Lắk', '66TTT'),
('657HH', 'Huyện Cư Kuin', '66TTT'),
('660HH', 'Thị xã Gia Nghĩa', '67TTT'),
('661HH', 'Huyện Đăk Glong', '67TTT'),
('662HH', 'Huyện Cư Jút', '67TTT'),
('663HH', 'Huyện Đắk Mil', '67TTT'),
('664HH', 'Huyện Krông Nô', '67TTT'),
('665HH', 'Huyện Đắk Song', '67TTT'),
('666HH', 'Huyện Đắk R\'Lấp', '67TTT'),
('667HH', 'Huyện Tuy Đức', '67TTT'),
('672HH', 'Thành phố Đà Lạt', '68TTT'),
('673HH', 'Thành phố Bảo Lộc', '68TTT'),
('674HH', 'Huyện Đam Rông', '68TTT'),
('675HH', 'Huyện Lạc Dương', '68TTT'),
('676HH', 'Huyện Lâm Hà', '68TTT'),
('677HH', 'Huyện Đơn Dương', '68TTT'),
('678HH', 'Huyện Đức Trọng', '68TTT'),
('679HH', 'Huyện Di Linh', '68TTT'),
('680HH', 'Huyện Bảo Lâm', '68TTT'),
('681HH', 'Huyện Đạ Huoai', '68TTT'),
('682HH', 'Huyện Đạ Tẻh', '68TTT'),
('683HH', 'Huyện Cát Tiên', '68TTT'),
('688HH', 'Thị xã Phước Long', '70TTT'),
('689HH', 'Thị xã Đồng Xoài', '70TTT'),
('690HH', 'Thị xã Bình Long', '70TTT'),
('691HH', 'Huyện Bù Gia Mập', '70TTT'),
('692HH', 'Huyện Lộc Ninh', '70TTT'),
('693HH', 'Huyện Bù Đốp', '70TTT'),
('694HH', 'Huyện Hớn Quản', '70TTT'),
('695HH', 'Huyện Đồng Phú', '70TTT'),
('696HH', 'Huyện Bù Đăng', '70TTT'),
('697HH', 'Huyện Chơn Thành', '70TTT'),
('698HH', 'Huyện Phú Riềng', '70TTT'),
('703HH', 'Thành phố Tây Ninh', '72TTT'),
('705HH', 'Huyện Tân Biên', '72TTT'),
('706HH', 'Huyện Tân Châu', '72TTT'),
('707HH', 'Huyện Dương Minh Châu', '72TTT'),
('708HH', 'Huyện Châu Thành', '72TTT'),
('709HH', 'Huyện Hòa Thành', '72TTT'),
('710HH', 'Huyện Gò Dầu', '72TTT'),
('711HH', 'Huyện Bến Cầu', '72TTT'),
('712HH', 'Huyện Trảng Bàng', '72TTT'),
('718HH', 'Thành phố Thủ Dầu Một', '74TTT'),
('719HH', 'Huyện Bàu Bàng', '74TTT'),
('720HH', 'Huyện Dầu Tiếng', '74TTT'),
('721HH', 'Thị xã Bến Cát', '74TTT'),
('722HH', 'Huyện Phú Giáo', '74TTT'),
('723HH', 'Thị xã Tân Uyên', '74TTT'),
('724HH', 'Thị xã Dĩ An', '74TTT'),
('725HH', 'Thị xã Thuận An', '74TTT'),
('726HH', 'Huyện Bắc Tân Uyên', '74TTT'),
('731HH', 'Thành phố Biên Hòa', '75TTT'),
('732HH', 'Thị xã Long Khánh', '75TTT'),
('734HH', 'Huyện Tân Phú', '75TTT'),
('735HH', 'Huyện Vĩnh Cửu', '75TTT'),
('736HH', 'Huyện Định Quán', '75TTT'),
('737HH', 'Huyện Trảng Bom', '75TTT'),
('738HH', 'Huyện Thống Nhất', '75TTT'),
('739HH', 'Huyện Cẩm Mỹ', '75TTT'),
('740HH', 'Huyện Long Thành', '75TTT'),
('741HH', 'Huyện Xuân Lộc', '75TTT'),
('742HH', 'Huyện Nhơn Trạch', '75TTT'),
('747HH', 'Thành phố Vũng Tàu', '77TTT'),
('748HH', 'Thành phố Bà Rịa', '77TTT'),
('750HH', 'Huyện Châu Đức', '77TTT'),
('751HH', 'Huyện Xuyên Mộc', '77TTT'),
('752HH', 'Huyện Long Điền', '77TTT'),
('753HH', 'Huyện Đất Đỏ', '77TTT'),
('754HH', 'Huyện Tân Thành', '77TTT'),
('755HH', 'Huyện Côn Đảo', '77TTT'),
('760HH', 'Quận 1', '79TTT'),
('761HH', 'Quận 12', '79TTT'),
('762HH', 'Quận Thủ Đức', '79TTT'),
('763HH', 'Quận 9', '79TTT'),
('764HH', 'Quận Gò Vấp', '79TTT'),
('765HH', 'Quận Bình Thạnh', '79TTT'),
('766HH', 'Quận Tân Bình', '79TTT'),
('767HH', 'Quận Tân Phú', '79TTT'),
('768HH', 'Quận Phú Nhuận', '79TTT'),
('769HH', 'Quận 2', '79TTT'),
('770HH', 'Quận 3', '79TTT'),
('771HH', 'Quận 10', '79TTT'),
('772HH', 'Quận 11', '79TTT'),
('773HH', 'Quận 4', '79TTT'),
('774HH', 'Quận 5', '79TTT'),
('775HH', 'Quận 6', '79TTT'),
('776HH', 'Quận 8', '79TTT'),
('777HH', 'Quận Bình Tân', '79TTT'),
('778HH', 'Quận 7', '79TTT'),
('783HH', 'Huyện Củ Chi', '79TTT'),
('784HH', 'Huyện Hóc Môn', '79TTT'),
('785HH', 'Huyện Bình Chánh', '79TTT'),
('786HH', 'Huyện Nhà Bè', '79TTT'),
('787HH', 'Huyện Cần Giờ', '79TTT'),
('794HH', 'Thành phố Tân An', '80TTT'),
('795HH', 'Thị xã Kiến Tường', '80TTT'),
('796HH', 'Huyện Tân Hưng', '80TTT'),
('797HH', 'Huyện Vĩnh Hưng', '80TTT'),
('798HH', 'Huyện Mộc Hóa', '80TTT'),
('799HH', 'Huyện Tân Thạnh', '80TTT'),
('800HH', 'Huyện Thạnh Hóa', '80TTT'),
('801HH', 'Huyện Đức Huệ', '80TTT'),
('802HH', 'Huyện Đức Hòa', '80TTT'),
('803HH', 'Huyện Bến Lức', '80TTT'),
('804HH', 'Huyện Thủ Thừa', '80TTT'),
('805HH', 'Huyện Tân Trụ', '80TTT'),
('806HH', 'Huyện Cần Đước', '80TTT'),
('807HH', 'Huyện Cần Giuộc', '80TTT'),
('808HH', 'Huyện Châu Thành', '80TTT'),
('815HH', 'Thành phố Mỹ Tho', '82TTT'),
('816HH', 'Thị xã Gò Công', '82TTT'),
('817HH', 'Thị xã Cai Lậy', '82TTT'),
('818HH', 'Huyện Tân Phước', '82TTT'),
('819HH', 'Huyện Cái Bè', '82TTT'),
('820HH', 'Huyện Cai Lậy', '82TTT'),
('821HH', 'Huyện Châu Thành', '82TTT'),
('822HH', 'Huyện Chợ Gạo', '82TTT'),
('823HH', 'Huyện Gò Công Tây', '82TTT'),
('824HH', 'Huyện Gò Công Đông', '82TTT'),
('825HH', 'Huyện Tân Phú Đông', '82TTT'),
('829HH', 'Thành phố Bến Tre', '83TTT'),
('831HH', 'Huyện Châu Thành', '83TTT'),
('832HH', 'Huyện Chợ Lách', '83TTT'),
('833HH', 'Huyện Mỏ Cày Nam', '83TTT'),
('834HH', 'Huyện Giồng Trôm', '83TTT'),
('835HH', 'Huyện Bình Đại', '83TTT'),
('836HH', 'Huyện Ba Tri', '83TTT'),
('837HH', 'Huyện Thạnh Phú', '83TTT'),
('838HH', 'Huyện Mỏ Cày Bắc', '83TTT'),
('842HH', 'Thành phố Trà Vinh', '84TTT'),
('844HH', 'Huyện Càng Long', '84TTT'),
('845HH', 'Huyện Cầu Kè', '84TTT'),
('846HH', 'Huyện Tiểu Cần', '84TTT'),
('847HH', 'Huyện Châu Thành', '84TTT'),
('848HH', 'Huyện Cầu Ngang', '84TTT'),
('849HH', 'Huyện Trà Cú', '84TTT'),
('850HH', 'Huyện Duyên Hải', '84TTT'),
('851HH', 'Thị xã Duyên Hải', '84TTT'),
('855HH', 'Thành phố Vĩnh Long', '86TTT'),
('857HH', 'Huyện Long Hồ', '86TTT'),
('858HH', 'Huyện Mang Thít', '86TTT'),
('859HH', 'Huyện Vũng Liêm', '86TTT'),
('860HH', 'Huyện Tam Bình', '86TTT'),
('861HH', 'Thị xã Bình Minh', '86TTT'),
('862HH', 'Huyện Trà Ôn', '86TTT'),
('863HH', 'Huyện Bình Tân', '86TTT'),
('866HH', 'Thành phố Cao Lãnh', '87TTT'),
('867HH', 'Thành phố Sa Đéc', '87TTT'),
('868HH', 'Thị xã Hồng Ngự', '87TTT'),
('869HH', 'Huyện Tân Hồng', '87TTT'),
('870HH', 'Huyện Hồng Ngự', '87TTT'),
('871HH', 'Huyện Tam Nông', '87TTT'),
('872HH', 'Huyện Tháp Mười', '87TTT'),
('873HH', 'Huyện Cao Lãnh', '87TTT'),
('874HH', 'Huyện Thanh Bình', '87TTT'),
('875HH', 'Huyện Lấp Vò', '87TTT'),
('876HH', 'Huyện Lai Vung', '87TTT'),
('877HH', 'Huyện Châu Thành', '87TTT'),
('883HH', 'Thành phố Long Xuyên', '89TTT'),
('884HH', 'Thành phố Châu Đốc', '89TTT'),
('886HH', 'Huyện An Phú', '89TTT'),
('887HH', 'Thị xã Tân Châu', '89TTT'),
('888HH', 'Huyện Phú Tân', '89TTT'),
('889HH', 'Huyện Châu Phú', '89TTT'),
('890HH', 'Huyện Tịnh Biên', '89TTT'),
('891HH', 'Huyện Tri Tôn', '89TTT'),
('892HH', 'Huyện Châu Thành', '89TTT'),
('893HH', 'Huyện Chợ Mới', '89TTT'),
('894HH', 'Huyện Thoại Sơn', '89TTT'),
('899HH', 'Thành phố Rạch Giá', '91TTT'),
('900HH', 'Thị xã Hà Tiên', '91TTT'),
('902HH', 'Huyện Kiên Lương', '91TTT'),
('903HH', 'Huyện Hòn Đất', '91TTT'),
('904HH', 'Huyện Tân Hiệp', '91TTT'),
('905HH', 'Huyện Châu Thành', '91TTT'),
('906HH', 'Huyện Giồng Riềng', '91TTT'),
('907HH', 'Huyện Gò Quao', '91TTT'),
('908HH', 'Huyện An Biên', '91TTT'),
('909HH', 'Huyện An Minh', '91TTT'),
('910HH', 'Huyện Vĩnh Thuận', '91TTT'),
('911HH', 'Huyện Phú Quốc', '91TTT'),
('912HH', 'Huyện Kiên Hải', '91TTT'),
('913HH', 'Huyện U Minh Thượng', '91TTT'),
('914HH', 'Huyện Giang Thành', '91TTT'),
('916HH', 'Quận Ninh Kiều', '92TTT'),
('917HH', 'Quận Ô Môn', '92TTT'),
('918HH', 'Quận Bình Thuỷ', '92TTT'),
('919HH', 'Quận Cái Răng', '92TTT'),
('923HH', 'Quận Thốt Nốt', '92TTT'),
('924HH', 'Huyện Vĩnh Thạnh', '92TTT'),
('925HH', 'Huyện Cờ Đỏ', '92TTT'),
('926HH', 'Huyện Phong Điền', '92TTT'),
('927HH', 'Huyện Thới Lai', '92TTT'),
('930HH', 'Thành phố Vị Thanh', '93TTT'),
('931HH', 'Thị xã Ngã Bảy', '93TTT'),
('932HH', 'Huyện Châu Thành A', '93TTT'),
('933HH', 'Huyện Châu Thành', '93TTT'),
('934HH', 'Huyện Phụng Hiệp', '93TTT'),
('935HH', 'Huyện Vị Thủy', '93TTT'),
('936HH', 'Huyện Long Mỹ', '93TTT'),
('937HH', 'Thị xã Long Mỹ', '93TTT'),
('941HH', 'Thành phố Sóc Trăng', '94TTT'),
('942HH', 'Huyện Châu Thành', '94TTT'),
('943HH', 'Huyện Kế Sách', '94TTT'),
('944HH', 'Huyện Mỹ Tú', '94TTT'),
('945HH', 'Huyện Cù Lao Dung', '94TTT'),
('946HH', 'Huyện Long Phú', '94TTT'),
('947HH', 'Huyện Mỹ Xuyên', '94TTT'),
('948HH', 'Thị xã Ngã Năm', '94TTT'),
('949HH', 'Huyện Thạnh Trị', '94TTT'),
('950HH', 'Thị xã Vĩnh Châu', '94TTT'),
('951HH', 'Huyện Trần Đề', '94TTT'),
('954HH', 'Thành phố Bạc Liêu', '95TTT'),
('956HH', 'Huyện Hồng Dân', '95TTT'),
('957HH', 'Huyện Phước Long', '95TTT'),
('958HH', 'Huyện Vĩnh Lợi', '95TTT'),
('959HH', 'Thị xã Giá Rai', '95TTT'),
('960HH', 'Huyện Đông Hải', '95TTT'),
('961HH', 'Huyện Hòa Bình', '95TTT'),
('964HH', 'Thành phố Cà Mau', '96TTT'),
('966HH', 'Huyện U Minh', '96TTT'),
('967HH', 'Huyện Thới Bình', '96TTT'),
('968HH', 'Huyện Trần Văn Thời', '96TTT'),
('969HH', 'Huyện Cái Nước', '96TTT'),
('970HH', 'Huyện Đầm Dơi', '96TTT'),
('971HH', 'Huyện Năm Căn', '96TTT'),
('972HH', 'Huyện Phú Tân', '96TTT'),
('973HH', 'Huyện Ngọc Hiển', '96TTT');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `kind_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ticketbox-logo.png',
  `organizer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `org_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_org` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_org` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_start` datetime NOT NULL,
  `event_end` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `is_confirm` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `name`, `user_id`, `kind_id`, `location`, `city_id`, `district_id`, `address`, `event_info`, `logo`, `organizer`, `org_info`, `phone_org`, `email_org`, `url`, `event_start`, `event_end`, `status`, `is_confirm`, `created_at`, `updated_at`) VALUES
(20, 'Lễ hội Bia Đức tại Đà Nẵng – Danang Beer Fest', 2, '6', 'Whale Park – Công viên Cá Voi', '12TTT', '106HH', 'Ngã ba Võ Nguyên Giáp và Vương Thừa Vũ, Quận Sơn Trà, Thành Phố Đà Nẵng', 'Một khảo sát của Google chỉ ra rằng, mỗi tháng, trong khu vực này, có khoảng 3,8 triệu người dùng mới trong lĩnh vực thương mại điện tử. Đông Nam Á cũng đang trở thành thị trường thương mại trực tuyến phát triển nhanh nhất thế giới trong khoảng từ năm 2015 đến 2020.\n\n \n\nTheo đánh giá của giới chuyên gia, khu vực Đông Nam Á với hơn 660 triệu dân sở hữu nhiều tiềm năng phát triển thương mại điện tử như: cộng đồng dân số trẻ với thu nhập bình quân đầu người sẽ sớm vượt qua mức 3.000USD/ năm, có sẵn hệ thống thanh toán hiện đại nhưng thiếu một thị trường bán lẻ trực tuyến có tổ chức...Những yếu tố này nếu được phát huy sẽ góp phần thúc đẩy nền kinh tế Internet trong khu vực đạt mức 200 tỷ USD vào năm 2025.', 'z1.png', 'CÔNG TY TNHH MTV THUẬN NHĨ - FAMILIENBRAUEREI DINKELACKER BEER', 'Một khảo sát của Google chỉ ra rằng, mỗi tháng, trong khu vực này, có khoảng 3,8 triệu người dùng mới trong lĩnh vực thương mại điện tử. Đông Nam Á cũng đang trở thành thị trường thương mại trực tuyến phát triển nhanh nhất thế giới trong khoảng từ năm 2015 đến 2020.\n\n \n\nTheo đánh giá của giới chuyên gia, khu vực Đông Nam Á với hơn 660 triệu dân sở hữu nhiều tiềm năng phát triển thương mại điện tử như: cộng đồng dân số trẻ với thu nhập bình quân đầu người sẽ sớm vượt qua mức 3.000USD/ năm, có sẵn hệ thống thanh toán hiện đại nhưng thiếu một thị trường bán lẻ trực tuyến có tổ chức...Những yếu tố này nếu được phát huy sẽ góp phần thúc đẩy nền kinh tế Internet trong khu vực đạt mức 200 tỷ USD vào năm 2025.', '0982512466', 'trung@gmail.com', 'zxc1', '2019-07-31 00:00:00', '2019-08-01 00:00:00', 0, 1, '2019-07-30 02:11:41', '2019-07-30 02:35:38'),
(21, 'Da Lat SufferFest Season 2 - Cuộc đua Chạy&Bơi', 2, '8', 'Whale Park – Công viên Cá Voi', '27TTT', '256HH', 'Ngã ba Võ Nguyên Giáp và Vương Thừa Vũ, Quận Sơn Trà, Thành Phố Đà Nẵng', '<p><span style=\"font-family: calibri, sans-serif; font-size: 15.3333px;\">Vietnam\'s first and only SwimRun. A team-race based on two persons travelling through nature and time is the SufferFest&acirc;&#132;&cent; most intimate Tuyen Lam Event. Teammates are completely dependent of each other. The team alternates between running and swimming along a pre-marked course in natural. As a team you race within 10 metres of each other, you share the experience, the fun, and the beauty. SwimRun is emotion. Athletes are required to be proficient swimmers and are expected to have read and adhere to SufferFest&acirc;&#132;&cent;&nbsp; SwimRun rules and regulations.&nbsp;</span><br></p>\n', 'z2.png', 'BOZO VENTURES', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\">BOZO Ventures - Công ty tổ chức sự kiện, mô hình thể thao mạo hiểm hàng đầu tại Việt Nam. Mục đích của BOZO Ventures là đem sự kiện thể thao sáng tạo, độc đáo tới Việt Nam để thử thách người chơi cả về những thể chất và tinh thần. Từ năm 2015, công ty đã đem đến những người yêu thích thể thao Việt chương trình vượt chướng ngại vật Champion Dash và nhận được rất nhiều phải hồi tích cực của trong và ngoài nước. Triết lý cốt lõi của BOZO Ventures nhấn mạnh vào tinh thần đồng đội, làm việc theo nhóm và hoạt động ngoài trời. Đó như là một cách để sống, cười và vui chơi thông qua thể thao và sự gắn kết giữa mọi người.&nbsp;</span><br style=\"box-sizing: border-box; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\"></p>', '0982512466', 'trung@gmail.com', 'zxc', '2019-07-30 00:00:00', '2019-07-31 00:00:00', 0, 1, '2019-07-30 02:27:42', '2019-07-30 02:35:35'),
(22, 'Wonderland The Musical\r\n', 2, '8', 'Whale Park – Công viên Cá Voi', '27TTT', '256HH', 'Ngã ba Võ Nguyên Giáp và Vương Thừa Vũ, Quận Sơn Trà, Thành Phố Đà Nẵng', 'Trên nền câu chuyện Alice in Wonderland (Lewis Carroll), được lồng ghép trong thế giới của các nhân vật cổ tích do Disney chuyển thể, chúng mình sẽ vẽ tiếp cuộc hành trình của Alice trở lại xứ sở Wonderland màu nhiệm - nơi cô được gặp lại những người bạn thân thiết thuở xưa. Nhưng niềm vui chẳng kéo dài bao lâu thì một cơn sóng gió ập tới, buộc Alice và bạn bè của cô phải chống trả. Họ sẽ phải làm thế nào để chống lại thế lực đen tối ấy?\r\n\r\n', 'z3.png', 'PDV PRODUCTION\r\n', 'PDV Production là dự án nhạc kịch của những bạn trẻ yêu thích Disney, với mong muốn mang âm nhạc Disney đến gần hơn với công chúng Việt Nam. Bằng những đêm nhạc kịch sử dụng tác phẩm âm nhạc của Disney, chúng mình mong muốn truyền tải đến khán giả những trải nghiệm cảm xúc và giá trị tinh thần như tình yêu thương, sự sẻ chia; đồng thời đưa nhạc kịch - một hình thức nghệ thuật còn lạ lẫm tới gần hơn với khán giả Việt Nam. Đại bản doanh của dự án nằm ở Thủ đô ngàn năm văn hiến - Hà Nội', '082512466', 'Trung@gmail.com', 'PRODUCTION', '2019-07-31 00:00:00', '2019-08-02 00:00:00', 0, 1, NULL, '2019-07-30 02:35:40'),
(23, 'TỰ DƯNG SHOW\r\n', 2, '6', 'Whale Park – Công viên Cá Voi', '27TTT', '256HH', 'Ngã ba Võ Nguyên Giáp và Vương Thừa Vũ, Quận Sơn Trà, Thành Phố Đà Nẵng', 'TỰ DƯNG SHOW 2019 – THỬ MỘT LẦN CÙNG NHAU\r\n\r\nTiếp nối thành công của Tự dưng Show 2017, Lộn Xộn Band – Quán quân Sing my song 2018 tổ chức Tự dưng Show 2019 – Thử một lần cùng nhau vào ngày 17/08/2019 tại Trung tâm triển lãm Vân Hồ. Đêm nhạc hứa hẹn sẽ đem đến những màn trình diễn được đầu tư công phu, bài bản nhưng không kém phần cảm xúc và mang dấu ấn riêng của Lộn Xộn. \r\n\r\n', 'z4.png', 'CÔNG TY CỔ PHẦN CÁT TIÊN SA\r\n', 'Là nhà thiết kế và tổ chức sản xuất của các kênh truyền hình cũng như các nội dung truyền hình riêng biệt. Có khả năng nhận định phân tích sâu sắc thị trường. Hiểu biết và luôn nắm bắt được những nền tảng, xu thế công nghệ truyền thông chất lượng và hiện đại. Từ đó tìm ra được những giải pháp tối ưu nhằm định dạng những kênh truyền hình (truyền thống và digital), cùng với các phương án kinh doanh & marketing hiệu quả nhất.', '0982512466', 'trung@gmail.com', 'asd', '2019-07-31 00:00:00', '2019-08-01 00:00:00', 0, 1, NULL, '2019-07-30 02:35:42'),
(24, 'TỰ DƯNG SHOW', 2, '5.6', 'Trung tâm triển lãm Vân Hồ', '01TTT', '001HH', 'Số 2 Hoa Lư, Phường Lê Đại Hành, Quận Hai Bà Trưng, Thành Phố Hà Nội', '<p>\r\n\r\n\r\n	\r\n	\r\n	\r\n	<style type=\"text/css\">p { margin-bottom: 0.1in; line-height: 115%; background: transparent none repeat scroll 0% 0%; }</style>\r\n\r\n<p style=\"margin-bottom: 0in; line-height: 100%; orphans: 2; widows: 2\" align=\"left\">\r\n<span style=\"font-variant: normal\"><font color=\"#333333\"><font face=\"Open Sans, sans-serif\"><font style=\"font-size: 10pt\" size=\"2\"><span style=\"letter-spacing: normal\"><span style=\"font-style: normal\"><span style=\"font-weight: normal\">C&Atilde;&iexcl;i\r\nt&Atilde;&ordf;n &acirc;&#128;&#156;T&aacute;&raquo;&plusmn; d&AElig;&deg;ng\"&nbsp;&Auml;&#145;&AElig;&deg;&aacute;&raquo;&pound;c b&aacute;&ordm;&macr;t ngu&aacute;&raquo;&#147;n t&aacute;&raquo;&laquo; t&Atilde;&ordf;n m&aacute;&raquo;&#153;t\r\nb&Atilde;&nbsp;i h&Atilde;&iexcl;t c&aacute;&raquo;&sect;a L&aacute;&raquo;&#153;n X&aacute;&raquo;&#153;n v&aacute;&raquo;&#155;i l&aacute;&raquo;&#157;i m&aacute;&raquo;&#159; &Auml;&#145;&aacute;&ordm;&sect;u: &acirc;&#128;&#156;Tr&Atilde;&ordf;n &Auml;&#145;&aacute;&raquo;&#157;i</span></span></span></font></font></font></span><br>\r\n<span style=\"font-variant: normal\"><font color=\"#333333\"><font face=\"Open Sans, sans-serif\"><font style=\"font-size: 10pt\" size=\"2\"><span style=\"letter-spacing: normal\"><span style=\"font-style: normal\"><span style=\"font-weight: normal\">n&Atilde;&nbsp;y\r\nch&aacute;&ordm;&sup3;ng c&Atilde;&sup3; g&Atilde;&not; x&aacute;&ordm;&pound;y ra m&aacute;&raquo;&#153;t c&Atilde;&iexcl;ch t&aacute;&raquo;&plusmn; d&AElig;&deg;ng c&aacute;&ordm;&pound;&acirc;&#128;&#156;. &Auml;&#144;&Atilde;&cent;y c&Aring;&copy;ng\r\nl&Atilde;&nbsp; ngu&aacute;&raquo;&#147;n c&aacute;&ordm;&pound;m h&aacute;&raquo;&copy;ng &Auml;&#145;&aacute;&raquo;&#131; L&aacute;&raquo;&#153;n X&aacute;&raquo;&#153;n trong</span></span></span></font></font></font></span><br>\r\n<span style=\"font-variant: normal\"><font color=\"#333333\"><font face=\"Open Sans, sans-serif\"><font style=\"font-size: 10pt\" size=\"2\"><span style=\"letter-spacing: normal\"><span style=\"font-style: normal\"><span style=\"font-weight: normal\">su&aacute;&raquo;&#145;t\r\n3 n&Auml;&#131;m qua lu&Atilde;&acute;n n&aacute;&raquo;&#151; l&aacute;&raquo;&plusmn;c &Auml;&#145;&aacute;&raquo;&#131; &Auml;&#145;&aacute;&ordm;&iquest;n g&aacute;&ordm;&sect;n h&AElig;&iexcl;n v&aacute;&raquo;&#155;i tr&Atilde;&iexcl;i tim\r\nc&aacute;&raquo;&sect;a kh&Atilde;&iexcl;n gi&aacute;&ordm;&pound;. T&aacute;&raquo;&plusmn; d&AElig;&deg;ng Show 2019</span></span></span></font></font></font></span><br>\r\n<span style=\"font-variant: normal\"><font color=\"#333333\"><font face=\"Open Sans, sans-serif\"><font style=\"font-size: 10pt\" size=\"2\"><span style=\"letter-spacing: normal\"><span style=\"font-style: normal\"><span style=\"font-weight: normal\">ch&Atilde;&shy;nh\r\nl&Atilde;&nbsp; t&Atilde;&cent;m huy&aacute;&ordm;&iquest;t c&aacute;&raquo;&sect;a L&aacute;&raquo;&#153;n X&aacute;&raquo;&#153;n nh&aacute;&ordm;&plusmn;m mang &Auml;&#145;&aacute;&ordm;&iquest;n m&aacute;&raquo;&#153;t &Auml;&#145;&Atilde;&ordf;m\r\nnh&aacute;&ordm;&iexcl;c kh&Atilde;&acute;ng th&aacute;&raquo;&#131; n&Atilde;&nbsp;o qu&Atilde;&ordf;n.</span></span></span></font></font></font></span><br>\r\n<span style=\"font-variant: normal\"><font color=\"#333333\"><font face=\"Open Sans, sans-serif\"><font style=\"font-size: 10pt\" size=\"2\"><span style=\"letter-spacing: normal\"><span style=\"font-style: normal\"><span style=\"font-weight: normal\">N&Auml;&#131;m\r\n2019 v&aacute;&raquo;&#155;i ch&aacute;&raquo;&sect; &Auml;&#145;&aacute;&raquo;&#131; &acirc;&#128;&#156;Th&aacute;&raquo;&shy; m&aacute;&raquo;&#153;t l&aacute;&ordm;&sect;n c&Atilde;&sup1;ng nhau&acirc;&#128;&#157;, L&aacute;&raquo;&#153;n X&aacute;&raquo;&#153;n\r\ns&aacute;&ordm;&frac12; &Auml;&#145;em &Auml;&#145;&aacute;&ordm;&iquest;n cho kh&Atilde;&iexcl;n gi&aacute;&ordm;&pound; m&aacute;&raquo;&#153;t &Auml;&#145;&Atilde;&ordf;m</span></span></span></font></font></font></span></p></p>\n', '24.png', 'CÔNG TY CỔ PHẦN CÁT TIÊN SA', '<p>\r\n\r\n\r\n	\r\n	\r\n	\r\n	<style type=\"text/css\">p { margin-bottom: 0.1in; line-height: 115%; background: transparent none repeat scroll 0% 0%; }</style>\r\n\r\n</p><p><span style=\"font-variant: normal\"><font color=\"#333333\"><font face=\"Open Sans, sans-serif\"><font style=\"font-size: 10pt\" size=\"2\"><span style=\"letter-spacing: normal\"><span style=\"font-style: normal\"><span style=\"font-weight: normal\">Là\r\nnhà thiết kế và tổ chức sản xuất của các kênh\r\ntruyền hình cũng như các nội dung truyền hình riêng biệt.\r\nCó khả năng nhận định phân tích sâu sắc thị trường.\r\nHiểu biết và luôn nắm bắt được những nền tảng, xu\r\nthế công nghệ truyền thông chất lượng và hiện đại.\r\nTừ đó tìm ra được những giải pháp tối ưu nhằm định\r\ndạng những kênh truyền hình (truyền thống và digital),\r\ncùng với các phương án kinh doanh &amp; marketing hiệu quả\r\nnhất.</span></span></span></font></font></font></span></p>', '0982512466', 'trung@gmail.com', 'tudung', '2019-07-30 00:00:00', '2019-07-31 00:00:00', 0, 1, '2019-07-30 04:36:10', '2019-07-30 04:37:46');

-- --------------------------------------------------------

--
-- Table structure for table `kind`
--

CREATE TABLE `kind` (
  `kind_id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kind`
--

INSERT INTO `kind` (`kind_id`, `name`, `parent_id`) VALUES
(1, 'Giải trí', NULL),
(2, 'Học hỏi', NULL),
(3, 'Các lĩnh vực khác', NULL),
(4, 'Nhạc sống', 1),
(5, 'Văn hoá nghệ thuật', 1),
(6, 'Sân khấu', 1),
(7, 'Nightlife', 1),
(8, 'Ngoài trời', 1),
(9, 'Hội thảo', 2),
(10, 'Khoá học', 2),
(11, 'Hội chợ', 3),
(12, 'Hội họp', 3),
(13, 'Thể thao', 3),
(14, 'Cộng động', 3),
(15, 'Vui chơi giải trí', 3);

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
(69, '2014_10_12_000000_create_users_table', 1),
(70, '2014_10_12_100000_create_password_resets_table', 1),
(71, '2019_07_15_032146_create_event_table', 1),
(72, '2019_07_15_033150_create_ticket_table', 1),
(73, '2019_07_15_033902_create_order_table', 1),
(74, '2019_07_15_034723_create_order_ticket_table', 1),
(75, '2019_07_15_040604_update_event_table', 1),
(76, '2019_07_15_040836_update_ticket_table', 1),
(77, '2019_07_15_041125_update_order_ticket_table', 1),
(78, '2019_07_17_081719_create_kind_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` double NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_ticket`
--

CREATE TABLE `order_ticket` (
  `id` int(11) NOT NULL,
  `ticket_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `provinceid` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`provinceid`, `name`) VALUES
('01TTT', 'Thành phố Hà Nội'),
('02TTT', 'Tỉnh Hà Giang'),
('04TTT', 'Tỉnh Cao Bằng'),
('06TTT', 'Tỉnh Bắc Kạn'),
('08TTT', 'Tỉnh Tuyên Quang'),
('10TTT', 'Tỉnh Lào Cai'),
('11TTT', 'Tỉnh Điện Biên'),
('12TTT', 'Tỉnh Lai Châu'),
('14TTT', 'Tỉnh Sơn La'),
('15TTT', 'Tỉnh Yên Bái'),
('17TTT', 'Tỉnh Hòa Bình'),
('19TTT', 'Tỉnh Thái Nguyên'),
('20TTT', 'Tỉnh Lạng Sơn'),
('22TTT', 'Tỉnh Quảng Ninh'),
('24TTT', 'Tỉnh Bắc Giang'),
('25TTT', 'Tỉnh Phú Thọ'),
('26TTT', 'Tỉnh Vĩnh Phúc'),
('27TTT', 'Tỉnh Bắc Ninh'),
('30TTT', 'Tỉnh Hải Dương'),
('31TTT', 'Thành phố Hải Phòng'),
('33TTT', 'Tỉnh Hưng Yên'),
('34TTT', 'Tỉnh Thái Bình'),
('35TTT', 'Tỉnh Hà Nam'),
('36TTT', 'Tỉnh Nam Định'),
('37TTT', 'Tỉnh Ninh Bình'),
('38TTT', 'Tỉnh Thanh Hóa'),
('40TTT', 'Tỉnh Nghệ An'),
('42TTT', 'Tỉnh Hà Tĩnh'),
('44TTT', 'Tỉnh Quảng Bình'),
('45TTT', 'Tỉnh Quảng Trị'),
('46TTT', 'Tỉnh Thừa Thiên Huế'),
('48TTT', 'Thành phố Đà Nẵng'),
('49TTT', 'Tỉnh Quảng Nam'),
('51TTT', 'Tỉnh Quảng Ngãi'),
('52TTT', 'Tỉnh Bình Định'),
('54TTT', 'Tỉnh Phú Yên'),
('56TTT', 'Tỉnh Khánh Hòa'),
('58TTT', 'Tỉnh Ninh Thuận'),
('60TTT', 'Tỉnh Bình Thuận'),
('62TTT', 'Tỉnh Kon Tum'),
('64TTT', 'Tỉnh Gia Lai'),
('66TTT', 'Tỉnh Đắk Lắk'),
('67TTT', 'Tỉnh Đắk Nông'),
('68TTT', 'Tỉnh Lâm Đồng'),
('70TTT', 'Tỉnh Bình Phước'),
('72TTT', 'Tỉnh Tây Ninh'),
('74TTT', 'Tỉnh Bình Dương'),
('75TTT', 'Tỉnh Đồng Nai'),
('77TTT', 'Tỉnh Bà Rịa - Vũng Tàu'),
('79TTT', 'Thành phố Hồ Chí Minh'),
('80TTT', 'Tỉnh Long An'),
('82TTT', 'Tỉnh Tiền Giang'),
('83TTT', 'Tỉnh Bến Tre'),
('84TTT', 'Tỉnh Trà Vinh'),
('86TTT', 'Tỉnh Vĩnh Long'),
('87TTT', 'Tỉnh Đồng Tháp'),
('89TTT', 'Tỉnh An Giang'),
('91TTT', 'Tỉnh Kiên Giang'),
('92TTT', 'Thành phố Cần Thơ'),
('93TTT', 'Tỉnh Hậu Giang'),
('94TTT', 'Tỉnh Sóc Trăng'),
('95TTT', 'Tỉnh Bạc Liêu'),
('96TTT', 'Tỉnh Cà Mau');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free` tinyint(1) NOT NULL DEFAULT '0',
  `price` double NOT NULL,
  `qty` int(11) NOT NULL,
  `sell_end` datetime NOT NULL,
  `sell_start` datetime NOT NULL,
  `max_per` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `name`, `free`, `price`, `qty`, `sell_end`, `sell_start`, `max_per`, `description`, `event_id`, `created_at`, `updated_at`) VALUES
(13, 'Vé tiêu chuẩn', 0, 20000, 200, '2019-07-31 00:00:00', '2019-07-29 00:00:00', 3, '04:00 PM - Đến Tối muộn', 20, '2019-07-30 02:11:41', '2019-07-30 02:11:41'),
(14, 'Vé vip', 0, 10000, 20, '2019-08-01 07:00:00', '2019-07-30 05:00:00', 2, '04:00 PM - Đến Tối muộn', 20, '2019-07-30 02:11:41', '2019-07-30 02:11:41'),
(15, 'Vé tiêu chuẩn', 0, 100000, 200, '2019-08-02 00:00:00', '2019-08-01 00:00:00', 2, '07:30 AM - 04:30 PM', 20, '2019-07-30 02:27:42', '2019-07-30 02:27:42'),
(16, 'Vé vip', 0, 500, 200, '2019-07-30 00:00:00', '2019-07-30 00:00:00', 3, 'Vé thường', 22, NULL, NULL),
(17, 'Vé thường', 0, 200, 200, '2019-07-30 00:00:00', '2019-07-31 00:00:00', 3, 'Vé thường', 21, NULL, NULL),
(18, NULL, 0, -100000, 20, '2019-08-01 00:00:00', '2019-07-29 00:00:00', 4, 'Vé hay', 24, '2019-07-30 04:36:10', '2019-07-30 04:36:10'),
(19, NULL, 0, 20000, 10, '2019-08-02 11:11:00', '2019-07-29 11:11:00', 3, 'vé thường', 24, '2019-07-30 04:36:10', '2019-07-30 04:36:10'),
(20, NULL, 0, 10000, 20, '2019-08-01 11:11:00', '2019-07-29 11:11:00', 2, 'Vé thường', 24, '2019-07-30 04:36:10', '2019-07-30 04:36:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '123123123',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chu_tk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_tk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten_ngan_hang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chi_nhanh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `isAdmin`, `birthday`, `job`, `name`, `email`, `email_verified_at`, `password`, `image`, `provider`, `provider_id`, `phone`, `address`, `chu_tk`, `so_tk`, `ten_ngan_hang`, `chi_nhanh`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, 'H', 'hanguyen11mm@gmail.com', NULL, '$2y$10$aiSlmUKwvuwYlznm46ySC.dSIF95heDJpmXKlKTKr9eEa5eGxO8Sy', 'default.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-22 08:25:16', '2019-07-22 08:25:16'),
(2, NULL, NULL, NULL, 'Nguyen Thanh Trung', 'Trung@gmail.com', NULL, '$2y$10$4ppvgu0aUvcSOgxksGIr8.Lmof8YSqcQzrECaqEVgzSEFeeHeUdDC', '1564469326.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-29 23:40:59', '2019-07-29 23:48:46'),
(4, 1, NULL, NULL, 'Nguyen Thanh Trung', 'admin@gmail.com', NULL, '$2y$10$kk4MTIFGitjoqk5TWw34l.qX3o0BfEDdYDnWp28naJxvpPHPUW.Bm', 'default.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-30 00:02:37', '2019-07-30 00:02:37'),
(5, NULL, NULL, NULL, '123', '123@gmail.com', NULL, '$2y$10$h0wQCKY9FFUj5iwOtMtZr.sA2/OWo6rMrFh.ARhyCy12aeAJPeepm', 'default.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-30 00:05:40', '2019-07-30 00:05:40'),
(6, NULL, NULL, NULL, 'Trung Nguyễn', 'trunghdtl97@gmail.com', NULL, '123123123', 'default.jpg', 'facebook', '2343791175879758', NULL, NULL, NULL, NULL, NULL, NULL, 'SQfSZttq4zTJWgxZtVuEHLv5ItyrTywqArC88lyZ6yrhumjDYRo8b2QzR0Wb', '2019-07-30 03:10:44', '2019-07-30 03:10:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `event_user_id_foreign` (`user_id`);

--
-- Indexes for table `kind`
--
ALTER TABLE `kind`
  ADD PRIMARY KEY (`kind_id`),
  ADD KEY `kind_fk` (`parent_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_ticket`
--
ALTER TABLE `order_ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_ticket_ticket_id_foreign` (`ticket_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `ticket_event_id_foreign` (`event_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `kind`
--
ALTER TABLE `kind`
  MODIFY `kind_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_ticket`
--
ALTER TABLE `order_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `kind`
--
ALTER TABLE `kind`
  ADD CONSTRAINT `kind_fk` FOREIGN KEY (`parent_id`) REFERENCES `kind` (`kind_id`);

--
-- Constraints for table `order_ticket`
--
ALTER TABLE `order_ticket`
  ADD CONSTRAINT `order_ticket_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `ticket` (`ticket_id`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
