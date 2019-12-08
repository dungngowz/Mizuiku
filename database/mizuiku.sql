-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2019 at 02:18 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mizuiku`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID',
  `ref_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'Article REF ID',
  `category_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'Category ID',
  `title` varchar(255) NOT NULL COMMENT 'Title of article',
  `slug` varchar(255) NOT NULL COMMENT 'Slug',
  `thumbnail` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL COMMENT 'Content of article',
  `keyword` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `url` varchar(255) DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT 0,
  `language` varchar(10) NOT NULL COMMENT 'Language',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Created At',
  `created_user_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Created User ID',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'Updated At',
  `updated_user_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Updated User ID',
  `deleted_at` datetime DEFAULT NULL COMMENT 'Deleted At',
  `deleted_user_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'Deleted User ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `ref_id`, `category_id`, `title`, `slug`, `thumbnail`, `description`, `content`, `keyword`, `status`, `url`, `priority`, `language`, `created_at`, `created_user_id`, `updated_at`, `updated_user_id`, `deleted_at`, `deleted_user_id`) VALUES
(1, 1, NULL, 'Trung tâm sống và học tập vì môi trường và cộng đồng (Live & Learn)', 'trung-tam-song-va-hoc-tap-vi-moi-truong-va-cong-dong-live-learn', NULL, '', 'Trung tâm Sống và Học tập vì Môi trường và Cộng đồng (Live & Learn) là một tổ chức phi lợi nhuận, phi chính phủ, được thành lập theo quyết định 60/QĐ–LHH ngày 15 tháng 1 năm 2009 của Liên hiệp các Hội Khoa học và Kỹ thuật Việt Nam và giấy phép số A-804 của Bộ Khoa học Công nghệ.\r\nLive & Learn là tổ chức hội viên của mạng lưới Live and Learn Environmental Education International – một mạng lưới quốc tế có trụ sở chính tại Úc, hoạt động từ năm 1992 với mục tiêu thúc đẩy nhận thức và hành động của cộng đồng vì một tương lai bền vững thông qua giáo dục, đối thoại và phát triển (http://www.livelearn.org).\r\nTại Việt Nam, Live & Learn hướng tới xây dựng và thực hiện các dự án, chương trình dành cho giáo viên, trường học, cộng đồng và các nhóm đối tượng khác về giáo dục môi trường và phát triển; qua đó thúc đẩy thái độ, giá trị và hành động đúng đắn của cá nhân và cộng đồng vì một môi trường bền vững. Năm 2016, Live & Learn vinh dự là tổ chức Việt Nam duy nhất nhận được giải thưởng quốc tế Stars Impact cho các chương trình với trẻ em và thanh niên.\r\nLive & Learn sớm tham gia cùng Tập đoàn Suntory và Công ty Suntory PepsiCo Việt Nam từ năm đầu triển khai thí điểm chương trình Mizuiku tại Việt Nam (2015). Live & Learn duy trì vai trò là Đơn vị Đồng hành cùng chương trình Mizuiku và phụ trách chuyên môn giáo dục môi trường của chương trình tại khu vực phía Bắc. ', 'co-organizingboard', 1, '', 0, 'vi', '2019-12-04 10:15:11', 1, '2019-12-05 07:21:14', 1, NULL, NULL),
(2, 1, NULL, 'Live & Learn', 'live-learn', NULL, '', 'Center of Live & Learn for Environment and Community (Live & Learn Center)Center of Live & Learn for Environment and Community (Live &Learn Centeris a non-profit, non-government organization established under Decision 60/QD-LHH dated 15th of January 2009 issued by Vietnam Union of Science and Technology associations and the A-804 licensefrom the Ministry of Science and Technology.\r\n\r\nLive & Learn is a member organization of the Australian-based Live and Learn Environmental Edcational International Network, which has been operating since 1992 with the goal of promoting community awareness and action for a sustainable future through education, dialogue and development (http://www.livelearn.org).\r\n\r\nIn Vietnam, Live & Learn aims to develop and implement programs and program for teachers, schools, communities and other groups in environmental education and development, thereby, promoting the right attitudes, values and actions of individuals and communities for a sustainable environment. In 2016, Live & Learn was honored to be the only Vietnamese organization to receive the International Stars Impact Award for their programs with children and the youth.\r\n\r\nLive & Learn joined hand with Suntory and Suntory PepsiCo Vietnam Beverage onpiloting of the Mizuiku program in Vietnam (2015). Live & Learn maintains its role as a co-implementing partner to the Mziuiku program and is responsible for the environmental education of the program in the North.', 'co-organizingboard', 1, '', 0, 'en', '2019-12-04 10:15:11', 1, '2019-12-05 07:21:40', 1, NULL, NULL),
(3, 3, NULL, 'Giới thiệu chương trình', 'gioi-thieu-chuong-trinh', NULL, 'Chương trình “Mizuiku” là sáng kiến tuyên truyền, giáo dục ý thức bảo vệ tài nguyên nước cho học sinh bậc tiểu học được khởi xướng bởi Tập đoàn Suntory và đã triển khai thành công tại Nhật Bản từ năm 2004. Đến nay, chương trình đã thu hút sự tham gia của trên 145 nghìn học sinh tiểu học và phụ huynh, nhận được đánh giá cao từ cộng đồng và xã hội Nhật Bản.', '<div class=\"noidung TextSize\">Chương tr&igrave;nh &ldquo;Mizuiku&rdquo; l&agrave; s&aacute;ng kiến tuy&ecirc;n truyền, gi&aacute;o dục &yacute;</div>\r\n<div class=\"noidung TextSize\"><img src=\"http://127.0.0.1:8000/photos/1/Screen Shot 2019-12-07 at 05.00.00.png\" alt=\"\" width=\"100%\" /> thức bảo vệ t&agrave;i nguy&ecirc;n nước cho học sinh bậc tiểu học được khởi xướng bởi Tập đo&agrave;n Suntory v&agrave; đ&atilde; triển khai th&agrave;nh c&ocirc;ng tại Nhật Bản từ năm 2004. Đến nay, Dự &aacute;n đ&atilde; thu h&uacute;t sự tham gia của tr&ecirc;n 127 ngh&igrave;n học sinh tiểu học v&agrave; phụ huynh, nhận được đ&aacute;nh gi&aacute; cao từ cộng đồng v&agrave; x&atilde; hội Nhật Bản.<br />Trước thực tế c&oacute; tới 20% d&acirc;n số Việt Nam hiện chưa từng được tiếp cận với nguồn nước sạch.&nbsp;Trong đ&oacute;, nhiều v&ugrave;ng bị thiếu nước sạch trầm trọng như Bến Tre, Bắc Ninh v&agrave; ngay cả c&aacute;c th&agrave;nh phố lớn như H&agrave; Nội, TP.HCM &ndash; đặc biệt v&agrave;o m&ugrave;a kh&ocirc; (Thống k&ecirc; của Viện Y học Lao động v&agrave; Vệ sinh m&ocirc;i trường), &nbsp;Tập đo&agrave;n Suntory v&agrave; Suntory PepsiCo Việt Nam đ&atilde; triển khai chương tr&igrave;nh Mizuiku &ndash; Em y&ecirc;u nước sạch từ năm 2015 đến nay tại Việt Nam với mong muốn lan tỏa giải ph&aacute;p bền vững gi&uacute;p bảo vệ nguồn nước th&ocirc;ng qua việc cung cấp kiến thức bảo vệ nước sạch đến thế hệ tương lai của Việt Nam<em>.</em>\r\n<div style=\"text-align: center;\"><img style=\"width: 600px;\" src=\"http://127.0.0.1:8000/pic/AboutUs/images/IMG_0002.jpg\" alt=\"\" /></div>\r\nChương tr&igrave;nh &ldquo;Mizuiku &ndash; Em y&ecirc;u nước sạch&rdquo; hướng tới mục ti&ecirc;u n&acirc;ng cao nhận thức của c&aacute;c em học sinh tiểu học về vai tr&ograve; của t&agrave;i nguy&ecirc;n nước v&agrave; c&aacute;ch thức sử dụng hợp l&yacute; nguồn nước sạch, g&oacute;p phần bảo vệ nguồn nước v&agrave; rộng hơn l&agrave; m&ocirc;i trường sống xung quanh. Th&ocirc;ng qua phương ph&aacute;p gi&aacute;o dục lấy học sinh l&agrave;m trung t&acirc;m, chương tr&igrave;nh tạo ra kh&ocirc;ng gian s&aacute;ng tạo, cơ hội thực h&agrave;nh v&agrave; s&acirc;n chơi đa dạng cho c&aacute;c em nhỏ nhằm k&iacute;ch th&iacute;ch &oacute;c quan s&aacute;t, &yacute; tưởng v&agrave; h&agrave;nh động của c&aacute;c em để bảo vệ nguồn nước n&oacute;i ri&ecirc;ng v&agrave; m&ocirc;i trường n&oacute;i chung.<br />&nbsp;<br />Năm 2015-2016, chương tr&igrave;nh được triển khai th&iacute; điểm tại Huyện Thanh Oai v&agrave; Mỹ Đức, H&agrave; Nội, sau đ&oacute; mở rộng ra tỉnh Bắc Ninh v&agrave; Tp. Hồ Ch&iacute; Minh th&ocirc;ng qua sự phối hợp giữa Tập đo&agrave;n Suntory, C&ocirc;ng ty TNHH Nước giải kh&aacute;t Suntory PepsiCo Việt Nam v&agrave; 02 đối t&aacute;c chuy&ecirc;n về gi&aacute;o dục m&ocirc;i trường l&agrave; Trung t&acirc;m Sống v&agrave; Học tập v&igrave; M&ocirc;i trường &amp; Cộng đồng (Live &amp; Learn) v&agrave; Trung t&acirc;m Gi&aacute;o dục Sức khỏe &amp; Ph&aacute;t triển Cộng đồng Tương Lai (Trung t&acirc;m Tương Lai). Qua 3 năm triển khai, chương tr&igrave;nh đ&atilde; tổ chức &nbsp;hơn 660 lớp học cho gần 10.100 học sinh; 26 Ng&agrave;y hội nước cho hơn 11.600 học sinh v&agrave; gi&aacute;o vi&ecirc;n, 25 chuyến tham quan nh&agrave; m&aacute;y Suntory PepsiCo Việt Nam cho 2.500 học sinh v&agrave; gi&aacute;o vi&ecirc;n; x&acirc;y dựng, cải tạo cơ sở vật chất, hệ thống lọc nước tại 26 trường tiểu học tham gia chương tr&igrave;nh. H&agrave;ng ngh&igrave;n học sinh, thầy c&ocirc; gi&aacute;o v&agrave; người d&acirc;n tại c&aacute;c địa phương cũng được hưởng lợi từ hoạt động của chương tr&igrave;nh.\r\n<div style=\"text-align: center;\"><img style=\"width: 600px; height: 460px;\" src=\"http://127.0.0.1:8000/pic/AboutUs/images/Cac%20em%20hoc%20sinh%20duoc%20hoc%20ve%20quy%20trinh%20xu%20ly%20nuoc%20thai%20thong%20qua%20cac%20tro%20choi.JPG\" alt=\"\" /></div>\r\n<br />Từ năm 2017, chương tr&igrave;nh bước sang giai đoạn ph&aacute;t triển mới với mối quan hệ hợp t&aacute;c chiến lược của Tập đo&agrave;n Suntory, c&ocirc;ng ty Nước Giải kh&aacute;t Suntory PepsiCo Việt Nam, Hội đồng Đội Trung ương, Trung Ương Hội Sinh vi&ecirc;n Việt Nam, sự hỗ trợ từ Bộ Gi&aacute;o dục &amp; Đ&agrave;o tạo c&ugrave;ng sự đồng h&agrave;nh về mặt chuy&ecirc;n m&ocirc;n của Trung t&acirc;m Live &amp; Learn v&agrave; Trung t&acirc;m Tương Lai. Với cơ sở đối t&aacute;c vững mạnh, chương tr&igrave;nh mong muốn đẩy mạnh hiệu quả của c&aacute;c hợp phần gi&aacute;o dục, hỗ trợ đồng thời mở rộng v&ugrave;ng thụ hưởng ra phạm vi to&agrave;n quốc.<br /><img style=\"width: 600px;\" src=\"http://127.0.0.1:8000/pic/AboutUs/images/C%C3%A1c%20c%C3%B4%20gi%C3%A1o%20v%C3%A0%20h%E1%BB%8Dc%20sinh%20tr%C6%B0%E1%BB%9Dng%20ti%C3%AAu%20h%E1%BB%8Dc%20B%E1%BA%BFn%20Tre%20h%E1%BA%BFt%20m%C3%ACnh%20trong%20ti%E1%BA%BFt%20h%E1%BB%8Dc%20m%E1%BA%ABu%20c%E1%BB%A7a%20bu%E1%BB%95i%20l%E1%BB%85%20ph%C3%A1t%20%C4%91%E1%BB%99ng%20ch%C6%B0%C6%A1ng%20tr%C3%ACnh%20Mizuiku%20-%20Em%20y%C3%AAu%20n%C6%B0%E1%BB%9Bc%20s%E1%BA%A1ch.jpg\" alt=\"\" />\r\n<div style=\"text-align: center;\">&nbsp;<img style=\"width: 500px; height: 667px;\" src=\"http://127.0.0.1:8000/pic/AboutUs/images/Dong%20song%20que%20em%20MHX.jpg\" alt=\"\" /></div>\r\nChương tr&igrave;nh hi vọng hi vọng đ&oacute;ng g&oacute;p v&agrave;o sự ph&aacute;t triển t&acirc;m hồn v&agrave; thể chất của c&aacute;c em học sinh để g&oacute;p phần bảo tồn v&ograve;ng tuần ho&agrave;n nước cho thế hệ mai sau.<br />&nbsp;<br />&nbsp;<br /><strong><span style=\"font-size: 14.0pt;\">Hoạt động chương tr&igrave;nh: </span></strong><br />&nbsp;<br />\r\n<ul>\r\n<li>Lễ Khởi&nbsp;động chương tr&igrave;nh</li>\r\n<li>Tổ chức tập huấn (TOT) cho gi&aacute;o vi&ecirc;n Tổng phụ tr&aacute;ch Đội, gi&aacute;o vi&ecirc;n chủ nhiệm khối 3-4 tại c&aacute;c trường được lựa chọn triển khai Chương tr&igrave;nh, bồi dưỡng kỹ năng dạy học th&iacute;ch hợp để thực hiện c&aacute;c hoạt động gi&aacute;o dục m&ocirc;i trường v&agrave; c&aacute;c hoạt động ngoại kh&oacute;a về chủ đề nước theo gi&aacute;o &aacute;n ri&ecirc;ng của chương tr&igrave;nh Mizuiku.</li>\r\n<li>Tổ chức giảng dạy cho học sinh khối 3, 4 c&aacute;c trường được lựa chọn triển khai chương tr&igrave;nh, gi&aacute;o dục m&ocirc;i trường về chủ đề nước theo gi&aacute;o &aacute;n của chương tr&igrave;nh Mizuiku, trong đ&oacute; mang đến cho c&aacute;c em học sinh kiến thức về c&aacute;c loại nước, v&ograve;ng tuần ho&agrave;n nước, vai tr&ograve; của nước trong cuộc sống, vấn đề của nước h&ocirc;m nay v&agrave; t&aacute;c động của những vấn đề nước đối với cuộc sống, x&acirc;y dựng th&oacute;i quen tiết kiệm nước, bảo vệ m&ocirc;i trường; thực h&agrave;nh th&iacute; nghiệm lọc nước v&agrave; nhiều b&agrave;i tập thực h&agrave;nh kh&aacute;c.</li>\r\n<li>C&aacute;c cuộc thi ph&aacute;t động tr&ecirc;n phạm vi to&agrave;n quốc theo chủ đề bảo vệ m&ocirc;i trường, bảo vệ nguồn nước.</li>\r\n<li>Ng&agrave;y hội Hiệp sĩ Nước sạch tổ chức tại c&aacute;c trường thụ hưởng Chương tr&igrave;nh với nội dung v&agrave; h&igrave;nh thức sinh động như tr&ograve; chơi tương t&aacute;c, t&igrave;m hiểu kiến thức về nước, thi h&ugrave;ng biện v&igrave; m&ocirc;i trường, thi s&aacute;ng kiến m&ocirc; h&igrave;nh bảo vệ m&ocirc;i trường.</li>\r\n<li>Tham quan nh&agrave; m&aacute;y Suntory PepsiCo Việt Nam cho học sinh khối 3, 4 c&aacute;c trường được lựa chọn triển khai chương tr&igrave;nh. Tại đ&acirc;y, c&aacute;c em được nghe giới thiệu về nh&agrave; m&aacute;y, quy tr&igrave;nh xử l&yacute; chất thải đạt chuẩn, tham quan d&acirc;y chuyền sản xuất, thực h&agrave;nh th&iacute; nghiệm lọc nước, l&agrave;m nước rửa ch&eacute;n tự nhi&ecirc;n.</li>\r\n<li>Hỗ trợ cơ sở vật chất nước sạch tại c&aacute;c trường được lựa chọn triển khai chương tr&igrave;nh, bao gồm những hạng mục hỗ trợ ph&ugrave; hợp để x&acirc;y dựng, lắp đặt hệ thống lọc nước RO, x&acirc;y dựng mới hoặc sửa chữa, n&acirc;ng cấp nh&agrave; vệ sinh cho học sinh, sơn tường c&ocirc;ng tr&igrave;nh, v.v&hellip;</li>\r\n<li>Ra mắt Website v&agrave; hệ thống học tập trực tuyến E-learning để gia tăng cơ hội tiếp cận của c&aacute;c em học sinh tr&ecirc;n to&agrave;n quốc đối với kiến thức bảo vệ nguồn nước v&agrave; c&aacute;c b&agrave;i giảng th&uacute; vị do chương tr&igrave;nh x&acirc;y dựng.</li>\r\n</ul>\r\n</div>', 'program-introduction', 1, '', 0, 'vi', '2019-12-04 10:15:11', 1, '2019-12-07 04:17:12', 1, NULL, NULL),
(4, 3, NULL, '\"Mizuiku - I love clean water\" program introduction', 'mizuiku-i-love-clean-water-program introduction', NULL, NULL, '<p>Chương tr&igrave;nh &ldquo;Mizuiku&rdquo; l&agrave; s&aacute;ng kiến tuy&ecirc;n truyền, gi&aacute;o dục &yacute; thức bảo vệ t&agrave;i nguy&ecirc;n nước cho học sinh bậc tiểu học được khởi xướng bởi Tập đo&agrave;n Suntory v&agrave; đ&atilde; triển khai th&agrave;nh c&ocirc;ng tại Nhật Bản từ năm 2004. Đến nay, Dự &aacute;n đ&atilde; thu h&uacute;t sự tham gia của tr&ecirc;n 127 ngh&igrave;n học sinh tiểu học v&agrave; phụ huynh, nhận được đ&aacute;nh gi&aacute; cao từ cộng đồng v&agrave; x&atilde; hội Nhật Bản. Trước thực tế c&oacute; tới 20% d&acirc;n số Việt Nam hiện chưa từng được tiếp cận với nguồn nước sạch. Trong đ&oacute;, nhiều v&ugrave;ng bị thiếu nước sạch trầm trọng như Bến Tre, Bắc Ninh v&agrave; ngay cả c&aacute;c th&agrave;nh phố lớn như H&agrave; Nội, TP.HCM &ndash; đặc biệt v&agrave;o m&ugrave;a kh&ocirc; (Thống k&ecirc; của Viện Y học Lao động v&agrave; Vệ sinh m&ocirc;i trường), Tập đo&agrave;n Suntory v&agrave; Suntory PepsiCo Việt Nam đ&atilde; triển khai chương tr&igrave;nh Mizuiku &ndash; Em y&ecirc;u nước sạch từ năm 2015 đến nay tại Việt Nam với mong muốn lan tỏa giải ph&aacute;p bền vững gi&uacute;p bảo vệ nguồn nước th&ocirc;ng qua việc cung cấp kiến thức bảo vệ nước sạch đến thế hệ tương lai của Việt Nam. Chương tr&igrave;nh &ldquo;Mizuiku &ndash; Em y&ecirc;u nước sạch&rdquo; hướng tới mục ti&ecirc;u n&acirc;ng cao nhận thức của c&aacute;c em học sinh tiểu học về vai tr&ograve; của t&agrave;i nguy&ecirc;n nước v&agrave; c&aacute;ch thức sử dụng hợp l&yacute; nguồn nước sạch, g&oacute;p phần bảo vệ nguồn nước v&agrave; rộng hơn l&agrave; m&ocirc;i trường sống xung quanh. Th&ocirc;ng qua phương ph&aacute;p gi&aacute;o dục lấy học sinh l&agrave;m trung t&acirc;m, chương tr&igrave;nh tạo ra kh&ocirc;ng gian s&aacute;ng tạo, cơ hội thực h&agrave;nh v&agrave; s&acirc;n chơi đa dạng cho c&aacute;c em nhỏ nhằm k&iacute;ch th&iacute;ch &oacute;c quan s&aacute;t, &yacute; tưởng v&agrave; h&agrave;nh động của c&aacute;c em để bảo vệ nguồn nước n&oacute;i ri&ecirc;ng v&agrave; m&ocirc;i trường n&oacute;i chung. Năm 2015-2016, chương tr&igrave;nh được triển khai th&iacute; điểm tại Huyện Thanh Oai v&agrave; Mỹ Đức, H&agrave; Nội, sau đ&oacute; mở rộng ra tỉnh Bắc Ninh v&agrave; Tp. Hồ Ch&iacute; Minh th&ocirc;ng qua sự phối hợp giữa Tập đo&agrave;n Suntory, C&ocirc;ng ty TNHH Nước giải kh&aacute;t Suntory PepsiCo Việt Nam v&agrave; 02 đối t&aacute;c chuy&ecirc;n về gi&aacute;o dục m&ocirc;i trường l&agrave; Trung t&acirc;m Sống v&agrave; Học tập v&igrave; M&ocirc;i trường &amp; Cộng đồng (Live &amp; Learn) v&agrave; Trung t&acirc;m Gi&aacute;o dục Sức khỏe &amp; Ph&aacute;t triển Cộng đồng Tương Lai (Trung t&acirc;m Tương Lai). Qua 3 năm triển khai, chương tr&igrave;nh đ&atilde; tổ chức hơn 660 lớp học cho gần 10.100 học sinh; 26 Ng&agrave;y hội nước cho hơn 11.600 học sinh v&agrave; gi&aacute;o vi&ecirc;n, 25 chuyến tham quan nh&agrave; m&aacute;y Suntory PepsiCo Việt Nam cho 2.500 học sinh v&agrave; gi&aacute;o vi&ecirc;n; x&acirc;y dựng, cải tạo cơ sở vật chất, hệ thống lọc nước tại 26 trường tiểu học tham gia chương tr&igrave;nh. H&agrave;ng ngh&igrave;n học sinh, thầy c&ocirc; gi&aacute;o v&agrave; người d&acirc;n tại c&aacute;c địa phương cũng được hưởng lợi từ hoạt động của chương tr&igrave;nh. Từ năm 2017, chương tr&igrave;nh bước sang giai đoạn ph&aacute;t triển mới với mối quan hệ hợp t&aacute;c chiến lược của Tập đo&agrave;n Suntory, c&ocirc;ng ty Nước Giải kh&aacute;t Suntory PepsiCo Việt Nam, Hội đồng Đội Trung ương, Trung Ương Hội Sinh vi&ecirc;n Việt Nam, sự hỗ trợ từ Bộ Gi&aacute;o dục &amp; Đ&agrave;o tạo c&ugrave;ng sự đồng h&agrave;nh về mặt chuy&ecirc;n m&ocirc;n của Trung t&acirc;m Live &amp; Learn v&agrave; Trung t&acirc;m Tương Lai. Với cơ sở đối t&aacute;c vững mạnh, chương tr&igrave;nh mong muốn đẩy mạnh hiệu quả của c&aacute;c hợp phần gi&aacute;o dục, hỗ trợ đồng thời mở rộng v&ugrave;ng thụ hưởng ra phạm vi to&agrave;n quốc. Chương tr&igrave;nh hi vọng hi vọng đ&oacute;ng g&oacute;p v&agrave;o sự ph&aacute;t triển t&acirc;m hồn v&agrave; thể chất của c&aacute;c em học sinh để g&oacute;p phần bảo tồn v&ograve;ng tuần ho&agrave;n nước cho thế hệ mai sau. Hoạt động chương tr&igrave;nh: Lễ Khởi động chương tr&igrave;nh Tổ chức tập huấn (TOT) cho gi&aacute;o vi&ecirc;n Tổng phụ tr&aacute;ch Đội, gi&aacute;o vi&ecirc;n chủ nhiệm khối 3-4 tại c&aacute;c trường được lựa chọn triển khai Chương tr&igrave;nh, bồi dưỡng kỹ năng dạy học th&iacute;ch hợp để thực hiện c&aacute;c hoạt động gi&aacute;o dục m&ocirc;i trường v&agrave; c&aacute;c hoạt động ngoại kh&oacute;a về chủ đề nước theo gi&aacute;o &aacute;n ri&ecirc;ng của chương tr&igrave;nh Mizuiku. Tổ chức giảng dạy cho học sinh khối 3, 4 c&aacute;c trường được lựa chọn triển khai chương tr&igrave;nh, gi&aacute;o dục m&ocirc;i trường về chủ đề nước theo gi&aacute;o &aacute;n của chương tr&igrave;nh Mizuiku, trong đ&oacute; mang đến cho c&aacute;c em học sinh kiến thức về c&aacute;c loại nước, v&ograve;ng tuần ho&agrave;n nước, vai tr&ograve; của nước trong cuộc sống, vấn đề của nước h&ocirc;m nay v&agrave; t&aacute;c động của những vấn đề nước đối với cuộc sống, x&acirc;y dựng th&oacute;i quen tiết kiệm nước, bảo vệ m&ocirc;i trường; thực h&agrave;nh th&iacute; nghiệm lọc nước v&agrave; nhiều b&agrave;i tập thực h&agrave;nh kh&aacute;c. C&aacute;c cuộc thi ph&aacute;t động tr&ecirc;n phạm vi to&agrave;n quốc theo chủ đề bảo vệ m&ocirc;i trường, bảo vệ nguồn nước. Ng&agrave;y hội Hiệp sĩ Nước sạch tổ chức tại c&aacute;c trường thụ hưởng Chương tr&igrave;nh với nội dung v&agrave; h&igrave;nh thức sinh động như tr&ograve; chơi tương t&aacute;c, t&igrave;m hiểu kiến thức về nước, thi h&ugrave;ng biện v&igrave; m&ocirc;i trường, thi s&aacute;ng kiến m&ocirc; h&igrave;nh bảo vệ m&ocirc;i trường. Tham quan nh&agrave; m&aacute;y Suntory PepsiCo Việt Nam cho học sinh khối 3, 4 c&aacute;c trường được lựa chọn triển khai chương tr&igrave;nh. Tại đ&acirc;y, c&aacute;c em được nghe giới thiệu về nh&agrave; m&aacute;y, quy tr&igrave;nh xử l&yacute; chất thải đạt chuẩn, tham quan d&acirc;y chuyền sản xuất, thực h&agrave;nh th&iacute; nghiệm lọc nước, l&agrave;m nước rửa ch&eacute;n tự nhi&ecirc;n. Hỗ trợ cơ sở vật chất nước sạch tại c&aacute;c trường được lựa chọn triển khai chương tr&igrave;nh, bao gồm những hạng mục hỗ trợ ph&ugrave; hợp để x&acirc;y dựng, lắp đặt hệ thống lọc nước RO, x&acirc;y dựng mới hoặc sửa chữa, n&acirc;ng cấp nh&agrave; vệ sinh cho học sinh, sơn tường c&ocirc;ng tr&igrave;nh, v.v&hellip; Ra mắt Website v&agrave; hệ thống học tập trực tuyến E-learning để gia tăng cơ hội tiếp cận của c&aacute;c em học sinh tr&ecirc;n to&agrave;n quốc đối với kiến thức bảo vệ nguồn nước v&agrave; c&aacute;c b&agrave;i giảng th&uacute; vị do chương tr&igrave;nh x&acirc;y dựng.</p>', 'program-introduction', 1, '', 0, 'en', '2019-12-04 10:15:11', 1, '2019-12-07 03:32:33', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID',
  `ref_id` int(10) UNSIGNED DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'Parent ID',
  `type` varchar(255) NOT NULL COMMENT 'Article Type',
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `priority` int(11) NOT NULL DEFAULT 0,
  `language` varchar(10) NOT NULL DEFAULT 'en',
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'Updated At',
  `deleted_at` datetime DEFAULT NULL COMMENT 'Deleted At',
  `created_user_id` bigint(20) UNSIGNED NOT NULL,
  `updated_user_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `ref_id`, `parent_id`, `type`, `title`, `slug`, `priority`, `language`, `status`, `created_at`, `updated_at`, `deleted_at`, `created_user_id`, `updated_user_id`, `deleted_user_id`) VALUES
(1, 1, NULL, 'news', 'Tin tức môi trường', 'tin-tuc-moi-truong', 0, 'vi', 1, '2019-12-04 02:25:11', '2019-12-04 02:25:11', NULL, 1, 1, NULL),
(2, 2, NULL, 'news', 'Tin tức chương trình', 'tin-tuc-chuong-trinh', 0, 'vi', 1, '2019-12-04 02:25:24', '2019-12-04 02:25:24', NULL, 1, 1, NULL),
(3, 1, NULL, 'news', 'Environmental news', 'environmental-news', 0, 'en', 1, '2019-12-04 02:27:20', '2019-12-04 02:27:20', NULL, 1, 1, NULL),
(4, 2, NULL, 'news', 'Program news', 'program-news', 0, 'en', 1, '2019-12-04 02:27:39', '2019-12-04 02:27:39', NULL, 1, 1, NULL),
(5, 5, NULL, 'news', 'test', 'test', 0, 'vi', 1, '2019-12-07 08:25:37', '2019-12-07 08:29:07', '2019-12-07 08:29:07', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID',
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `language` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_user_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'Created User ID',
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'Updated At',
  `updated_user_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'Updated User ID',
  `deleted_at` datetime DEFAULT NULL COMMENT 'Deleted At',
  `deleted_user_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'Deleted User ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fullname`, `phone`, `email`, `content`, `ip`, `language`, `created_at`, `created_user_id`, `updated_at`, `updated_user_id`, `deleted_at`, `deleted_user_id`) VALUES
(1, 'Dung ngo', '0908946595', 'dung.ngowz@gmail.com', 'Content Test', '127.0.0.1', 'vi', '2019-12-06 07:31:34', NULL, '2019-12-06 07:31:34', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(10) NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_user_id` int(10) UNSIGNED NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_user_id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `program_timeline`
--

CREATE TABLE `program_timeline` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID',
  `ref_id` int(10) UNSIGNED DEFAULT NULL,
  `title` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT 0,
  `language` varchar(10) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_user_id` int(10) UNSIGNED NOT NULL COMMENT 'Created User ID',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'Updated At',
  `updated_user_id` int(10) UNSIGNED NOT NULL COMMENT 'Updated User ID',
  `deleted_at` datetime DEFAULT NULL COMMENT 'Deleted At',
  `deleted_user_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'Deleted User ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_timeline`
--

INSERT INTO `program_timeline` (`id`, `ref_id`, `title`, `slug`, `month`, `content`, `priority`, `language`, `status`, `created_at`, `created_user_id`, `updated_at`, `updated_user_id`, `deleted_at`, `deleted_user_id`) VALUES
(1, 1, 'Tổng kết chương trình \"Mizuiku - Em yêu nước sạch\"', 'tong-ket-chuong-trinh-mizuiku-em-yeu-nuoc-sach', 'Tháng 12', '<p><span style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">Lễ tổng kết chương tr&igrave;nh l&agrave; sự kiện nh&igrave;n lại chặng đường một năm hoạt động của chương tr&igrave;nh, v&agrave; gửi lời cảm ơn tới c&aacute;c đối t&aacute;c, nh&agrave; trường v&agrave; c&aacute;c đơn vị hỗ trợ hợp t&aacute;c, cũng như r&uacute;t kinh nghiệm để l&agrave;m tốt hơn v&agrave; c&ocirc;ng bố kế hoạch ph&aacute;t triển chương tr&igrave;nh trong năm tiếp theo.</span></p>', 0, 'vi', 1, '2019-12-07 04:37:16', 1, '2019-12-07 04:37:16', 1, NULL, NULL),
(2, 1, 'Closing ceremony of the \"Mizuiku - I love clean water\" program', 'closing-ceremony-of-the-mizuiku-i-love-clean-water-program', 'December', '<p><span style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">The closing ceremonies review the journey of Mizuiku throughout the year reflecting on the program\'s achievement, lesson learnt and announcing the new action plan for the following year. It is also an occasion for the Program to officially extend its gratitude to partners, schools and other supporting parties for their collaborations.&nbsp;</span></p>', 0, 'en', 1, '2019-12-07 04:38:12', 1, '2019-12-07 04:38:12', 1, NULL, NULL),
(3, 3, 'Tham quan nhà máy Suntory PepsiCo Việt Nam', 'tham-quan-nha-may-suntory-pepsico-viet-nam', 'Tháng 10 - 11', '<p>Tham quan nh&agrave; m&aacute;y Suntory PepsiCo Việt Nam l&agrave; một hoạt động ngoại kh&oacute;a lu&ocirc;n được c&aacute;c em học sinh h&aacute;o hức đ&oacute;n chờ. Với thời lượng 3 tiếng đồng hồ, chuyến tham quan đ&atilde; đem lại cho c&aacute;c em nhiều hoạt động th&uacute; vị m&agrave; c&aacute;c em kh&oacute; l&ograve;ng c&oacute; thể trải nghiệm tại lớp học như: sử dụng giấy quỳ để kiểm tra độ PH của nước, sự thay đổi của chất lượng nước sau khi được lọc. Đặc biệt c&aacute;c em c&ograve;n được tự m&igrave;nh quan s&aacute;t c&ocirc;ng nghệ d&acirc;y chuyền kh&eacute;p k&iacute;n để sản xuất ra c&aacute;c sản phẩm nước giải kh&aacute;t quen thuộc trong cuộc sống h&agrave;ng ng&agrave;y như Tea+, Pepsi, Revive and My Cafe, để hiểu th&ecirc;m về c&ocirc;ng nghệ tiết kiệm nước v&agrave; xử l&yacute; nước thải tại nh&agrave; m&aacute;y của Suntory PepsiCo Việt Nam.</p>', 0, 'vi', 1, '2019-12-07 06:49:20', 1, '2019-12-07 06:49:20', 1, NULL, NULL),
(4, 3, 'Suntory PepsiCo Vietnam Plant tour', 'suntory-pepsico-vietnam-plant-tour', 'October - November', '<p><span style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">Suntory PepsiCo Vietnam Plant tour is an extra-curricular activity within Mizuiku program that always excites students. The 3-hour plant tour consists of activities such as using litmus paper to test pH in water and the change in quality of water after filtration. Moreover, students get to observe the production lines of their favorite beverages such as Tea+, Pepsi, Revive, My Cafe, and learn about the water saving technology and wastewater treatment system at Suntory PepsiCo Vietnam\'s Plant.</span></p>', 0, 'en', 1, '2019-12-07 06:50:20', 1, '2019-12-07 06:50:20', 1, NULL, NULL),
(5, 5, 'Ngày hội Hiệp sĩ nước sạch', 'ngay-hoi-hiep-si-nuoc-sach', 'Tháng 9', '<p><span style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">Ng&agrave;y hội \"Hiệp sĩ Nước sạch\" l&agrave; sự kiện thu h&uacute;t sự tham gia của h&agrave;ng ngh&igrave;n học sinh tại c&aacute;c trường tiểu học tham gia chương tr&igrave;nh \"Mizuiku - Em y&ecirc;u nước sạch\". Đ&acirc;y l&agrave; cơ hội để c&aacute;c em học sinh to&agrave;n trường được t&igrave;m hiểu, &ocirc;n lại kiến thức đ&atilde; học v&agrave; tham gia c&aacute;c tr&ograve; chơi tập thể vui nhộn, mang &yacute; nghĩa bảo vệ nguồn nước, bảo vệ m&ocirc;i trường. Một số hoạt động trong Ng&agrave;y hội như tr&igrave;nh diễn thời trang t&aacute;i chế, thi Rung chu&ocirc;ng v&agrave;ng, thi h&ugrave;ng biện \"T&ocirc;i l&agrave; nước\", văn nghệ chủ đề Em y&ecirc;u nước sạch nhằm gi&uacute;p c&aacute;c em học sinh r&egrave;n luyện &yacute; thức sử dụng nguồn nước sạch một c&aacute;ch hợp l&yacute; v&agrave; chia sẻ th&ocirc;ng điệp với bạn b&egrave; v&agrave; gia đ&igrave;nh.</span></p>', 0, 'vi', 1, '2019-12-07 06:53:03', 1, '2019-12-07 06:53:03', 1, NULL, NULL),
(6, 5, 'Clean Water Knight festival', 'clean-water-knight-festival', 'September', '<p><span style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">The \"Clean Water Knight\" festival events attract the participation of thousands of students from beneficiary elementary schools of \"Mizuiku - I love clean water\" program every year. These events gather students of the whole beneficiary school where every student can learn or review their lessons by participating in series of activities and educational fun games related to water resource preservation and environmental protection. For examples, recycle fashion show, Golden Bell contest, \"I am water\" storytelling contest, \"I love clean water\" music show are among many meaningful activities held in the Festivals to remind children not to waste water and encourage them to share this message with their friends and family.&nbsp;</span></p>', 0, 'en', 1, '2019-12-07 06:53:54', 1, '2019-12-07 06:53:54', 1, NULL, NULL),
(7, 7, 'Lớp sinh hoạt ngoại khóa Mizuiku về bảo vệ môi trường và nguồn nước cho trẻ em do Đại sứ Mizuiku triển khai', 'lop-sinh-hoat-ngoai-khoa-mizuiku-ve-bao-ve-moi-truong-va-nguon-nuoc-cho-tre-em-do-dai-su-mizuiku-trien-khai', 'Tháng 8', '<p><span style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">C&aacute;c đội h&igrave;nh t&igrave;nh nguyện vi&ecirc;n hay Đại sứ Mizuiku v&acirc;̣n dụng linh loạt những ki&ecirc;́n thức và kỹ năng của chương tr&igrave;nh &ldquo;Mizuiku &ndash; Em y&ecirc;u nước sạch&rdquo; đ&ecirc;̉ x&acirc;y dựng n&ocirc;̣i dung bài giảng phù hợp với hoàn cảnh của từng địa phương, khu d&acirc;n cư, trường học nơi họ tham gia hoạt động giảng dạy t&igrave;nh nguyện. Với sự nhi&ecirc;̣t tình v&agrave; sức trẻ của đội ngũ đại sứ Mizuiku, các lớp di&ecirc;̃n ra s&ocirc;i n&ocirc;̉i và nh&acirc;̣n được sự ủng h&ocirc;̣ tích cực của người d&acirc;n địa phương.&nbsp;</span></p>', 0, 'vi', 1, '2019-12-07 06:54:40', 1, '2019-12-07 06:54:40', 1, NULL, NULL),
(8, 7, 'Mizuiku extra curriculum conducted by Mizuiku Ambassadors about  water resource and environment education for children', 'mizuiku-extra-curriculum-conducted-by-mizuiku-ambassadors-about-water-resource-and-environment-education-for-children', 'August', '<p><span style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">Groups of volunteer or Mizuiku Ambassadors apply the knowledge and skills acquired from the \"Mizuiku - I love clean water\" program to develop and customize teaching content to match with local communities and schools where they voluntarily deliver the Mizuiku class. The youthful spirit and enthusiasm of Mizuiku Ambassadors have brought exuberant feeling for the students, receiving positive feedback from local people.</span></p>', 0, 'en', 1, '2019-12-07 06:55:35', 1, '2019-12-07 06:55:35', 1, NULL, NULL),
(9, 9, 'Chương trình tập huấn cho các Đại sứ Mizuiku', 'chuong-trinh-tap-huan-cho-cac-dai-su-mizuiku', 'Tháng 7', '<div style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">Chương tr&igrave;nh Đại sứ Mizuiku l&agrave; hoạt động mở rộng cho c&aacute;c t&igrave;nh nguyện vi&ecirc;n c&oacute; nguyện vọng tham gia tập huấn, bồi dưỡng kỹ năng dạy học theo phương ph&aacute;p v&agrave; nội dung giảng dạy của chương tr&igrave;nh. C&aacute;c T&igrave;nh nguyện vi&ecirc;n Mizuiku sau đ&oacute; sẽ thực hiện c&aacute;c hoạt động gi&aacute;o dục m&ocirc;i trường v&agrave; hoạt động ngoại kh&oacute;a về chủ đề nước cho c&aacute;c em học sinh. Đội ngũ t&igrave;nh nguyện vi&ecirc;n được tuyển chọn khắp cả nước như c&aacute;c sinh vi&ecirc;n t&igrave;nh nguyện \"M&ugrave;a h&egrave; xanh\", sinh vi&ecirc;n từ c&aacute;c c&acirc;u lạc bộ DYNAMIC v&agrave; c&aacute;n bộ nh&acirc;n vi&ecirc;n thuộc c&aacute;c Ủy ban V&ograve;ng tay nh&acirc;n &aacute;i - Helping Hands của Suntory PepsiCo Việt Nam.&nbsp;</div>\r\n<div style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">&nbsp;</div>\r\n<div style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">Ch&uacute; th&iacute;ch:</div>\r\n<div style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">&ldquo;Dynamic - Sinh vi&ecirc;n nh&agrave; doanh nghiệp tương lai&rdquo; l&agrave; cuộc thi d&agrave;nh cho sinh vi&ecirc;n c&aacute;c trường đại học tr&ecirc;n cả nước do đại học Kinh tế th&agrave;nh phố Hồ Ch&iacute; Minh khởi xướng v&agrave; tổ chức từ năm 1996. Sau 12 lần tham gia đồng h&agrave;nh với cuộc thi ở vai tr&ograve; l&agrave; nh&agrave; t&agrave;i trợ ch&iacute;nh, năm 2017, Suntory PepsiCo Việt Nam đ&oacute;ng g&oacute;p với vai tr&ograve; đồng tổ chức cuộc thi. Trước khi đến với v&ograve;ng chung kết quốc gia, th&iacute; sinh sẽ lần lượt tham gia chuỗi hoạt động gồm: chương tr&igrave;nh đ&agrave;o tạo kỹ năng khởi nghiệp, cố vấn chương tr&igrave;nh, huấn luyện chuy&ecirc;n s&acirc;u, cuộc thi online về kỹ năng v&agrave; kiến thức vận h&agrave;nh doanh nghiệp ảo; v&ograve;ng tuyển chọn khu vực v&agrave; v&ograve;ng chung kết khu vực.</div>\r\n<div style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">Tổng gi&aacute; trị giải thưởng của cuộc thi l&ecirc;n đến 1,5 tỷ đồng v&agrave; 06 suất tham quan giao lưu với c&aacute;c trường Đại học v&agrave; Tập Đo&agrave;n Suntory tại Nhật Bản d&agrave;nh cho th&iacute; sinh, giảng vi&ecirc;n v&agrave; cố vấn của CLB đạt giải nhất. Ngo&agrave;i ra, th&iacute; sinh đạt giải thưởng Thủ lĩnh DYNAMIC &ndash; UEH sẽ nhận được học bổng Thạc sĩ Quản trị kinh doanh trường Western Sydney cấp bằng (trị gi&aacute; mỗi suất học bổng tương đương 300 triệu đồng), 02 c&acirc;u lạc bộ đạt giải Đầu tư DYNAMIC &ndash; bứt ph&aacute; c&ugrave;ng STING sẽ nhận được đầu tư cho sự ph&aacute;t triển bền vững của c&acirc;u lạc bộ Dynamic, trị gi&aacute; mỗi giải thưởng 100 triệu đồng, v&agrave; nhiều giải thưởng hấp dẫn kh&aacute;c.</div>\r\n<div style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">&nbsp;</div>\r\n<div style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">Chương tr&igrave;nh &ldquo;V&ograve;ng tay nh&acirc;n &aacute;i - Helping Hands&rdquo;: Đ&acirc;y l&agrave; một s&aacute;ng kiến của C&ocirc;ng ty Suntory PepsiCo Việt Nam d&agrave;nh cho c&aacute;n bộ nh&acirc;n vi&ecirc;n c&ocirc;ng ty nhằm g&acirc;y quỹ hỗ trợ cộng đồng. Khởi động từ th&aacute;ng 8 năm 2011, mục ti&ecirc;u của chương tr&igrave;nh &ldquo;V&ograve;ng tay nh&acirc;n &aacute;i - Helping Hands&rdquo; nhằm n&acirc;ng cao gi&aacute; trị cốt l&otilde;i của Suntory PepsiCo Việt Nam v&agrave; x&acirc;y dựng văn ho&aacute; doanh nghiệp, kết nối nh&acirc;n vi&ecirc;n cam kết l&acirc;u d&agrave;i v&agrave; đ&oacute;ng g&oacute;p cho sự ph&aacute;t triển bền vững của doanh nghiệp v&agrave; x&atilde; hội. Đ&oacute; l&agrave; một nền tảng li&ecirc;n kết chăt chẽ của nh&acirc;n vi&ecirc;n, cộng đồng v&agrave; doanh nghiệp. Tổng số tiền huy động của nh&acirc;n vi&ecirc;n sẽ được c&ocirc;ng ty đối ứng. Hiện nay, tại c&aacute;c nh&agrave; m&aacute;y v&agrave; văn ph&ograve;ng của Suntory PepsiCo Việt Nam tr&ecirc;n to&agrave;n quốc c&oacute; 10 Ủy ban V&ograve;ng tay nh&acirc;n &aacute;i được th&agrave;nh lập, khởi xướng 103 chương tr&igrave;nh, hơn 3086 t&igrave;nh nguyện vi&ecirc;n tham gia, đ&oacute;ng g&oacute;p khoảng 17.650 giờ l&agrave;m việc, gần 8 tỷ đồng đ&atilde; được sử dụng để x&acirc;y dựng 3 trường học, 2 ng&ocirc;i nh&agrave; v&agrave; 3 thư viện cho trẻ em miền n&uacute;i, tặng h&agrave;ng ng&agrave;n suất học bổng, hỗ trợ 1600 ca phẫu thuật mắt, tặng qu&agrave; cho người khuyết tật v&agrave; người lớn tuổi ở c&aacute;c trung t&acirc;m x&atilde; hội.</div>', 0, 'vi', 1, '2019-12-07 06:58:34', 1, '2019-12-07 06:58:34', 1, NULL, NULL),
(10, 9, 'Constructing and upgrading clean water facilities at beneficiary elementary schools and community sites', 'constructing-and-upgrading-clean-water-facilities-at-beneficiary-elementary-schools-and-community-sites', 'July', '<p><span style=\"caret-color: #333333; color: #333333; font-family: Arial; font-size: 16px; text-align: justify; text-size-adjust: auto;\">Every summer, \"Mizuiku - I love clean water\" program supports the construction of water filtration and sanitation facilities in schools and community sites in areas accross the country that are facing severe water shortage. \"Clean water for society\" is the key corporate social responsibility message that Suntory PepsiCo Vietnam aims to leverage across the country. Teachers, volunteers and students also collaborate to decorate the walls surrounding the facilities, which would encourage chidlren\'s appreciation and better use of the sponsored sanitation facilities.&nbsp;</span></p>', 0, 'en', 1, '2019-12-07 06:59:32', 1, '2019-12-07 07:00:49', 1, NULL, NULL),
(11, 11, 'Xây dựng và nâng cấp cơ sở vật chất nước sạch tại các trường tiểu học và cộng đồng', 'xay-dung-va-nang-cap-co-so-vat-chat-nuoc-sach-tai-cac-truong-tieu-hoc-va-cong-dong', 'Tháng 6', '<p><span style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">V&agrave;o dịp h&egrave; h&agrave;ng năm, chương tr&igrave;nh \"Mizuiku - Em y&ecirc;u nước sạch\" hỗ trợ x&acirc;y dựng hệ thống lọc nước v&agrave; c&aacute;c c&ocirc;ng tr&igrave;nh vệ sinh tại c&aacute;c trường học v&agrave; nơi c&ocirc;ng cộng thuộc c&aacute;c địa b&agrave;n thiếu nước sạch trầm trọng tr&ecirc;n cả nước. Chủ đề Nước sạch cho cộng đồng l&agrave; th&ocirc;ng điệp tr&aacute;ch nhiệm x&atilde; hội của doanh nghiệp xuy&ecirc;n suốt m&agrave; Suntory PepsiCo Việt Nam muốn lan tỏa. B&ecirc;n cạnh đ&oacute;, c&aacute;c thầy c&ocirc; gi&aacute;o, lực lượng t&igrave;nh nguyện vi&ecirc;n v&agrave; c&aacute;c em học sinh c&ugrave;ng tham gia vẽ trang tr&iacute; tường xung quanh c&aacute;c cơ sở vật chất được hỗ trợ. Hoạt động n&agrave;y gi&uacute;p c&aacute;c em nhỏ tr&acirc;n trọng th&agrave;nh quả chung v&agrave; c&oacute; &yacute; thức giữ g&igrave;n vệ sinh tốt hơn.&nbsp;</span></p>', 0, 'vi', 1, '2019-12-07 07:00:08', 1, '2019-12-07 07:00:08', 1, NULL, NULL),
(12, 11, 'Constructing and upgrading clean water facilities at beneficiary elementary schools and community sites', 'constructing-and-upgrading-clean-water-facilities-at-beneficiary-elementary-schools-and-community-sites-1', 'June', '<p><span style=\"caret-color: #333333; color: #333333; font-family: Arial; font-size: 16px; text-align: justify; text-size-adjust: auto;\">Every summer, \"Mizuiku - I love clean water\" program supports the construction of water filtration and sanitation facilities in schools and community sites in areas accross the country that are facing severe water shortage. \"Clean water for society\" is the key corporate social responsibility message that Suntory PepsiCo Vietnam aims to leverage across the country. Teachers, volunteers and students also collaborate to decorate the walls surrounding the facilities, which would encourage chidlren\'s appreciation and better use of the sponsored sanitation facilities.</span></p>', 0, 'en', 1, '2019-12-07 07:02:03', 1, '2019-12-07 07:02:03', 1, NULL, NULL),
(13, 13, 'Lớp học Mizuiku về bảo vệ môi trường và nguồn nước cho học sinh tiểu học', 'lop-hoc-mizuiku-ve-bao-ve-moi-truong-va-nguon-nuoc-cho-hoc-sinh-tieu-hoc', 'Tháng 5', '<div style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">C&aacute;c lớp học Mizuiku được c&aacute;c thầy c&ocirc; tổ chức cho c&aacute;c em học sinh khối lớp 3, 4 tại c&aacute;c trường tiểu học thụ hưởng trong khu&ocirc;n khổ chương tr&igrave;nh. Điểm nhấn của phương ph&aacute;p gi&aacute;o dục lấy học sinh l&agrave;m trung t&acirc;m, dạy v&agrave; học s&aacute;ng tạo, tương t&aacute;c cao n&agrave;y l&agrave; c&aacute;c em hiểu b&agrave;i giảng, nhớ kiến thức l&acirc;u hơn, từ đ&oacute; n&acirc;ng cao nhận thức v&agrave; dẫn tới h&agrave;nh động cụ thể bảo vệ m&ocirc;i trường, bảo vệ nguồn nước. Chương tr&igrave;nh kỳ vọng tạo sự lan tỏa kiến thức v&agrave; h&agrave;nh động tới cộng đồng.</div>\r\n<div style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">C&aacute;c lớp học c&oacute; sự tham gia phối hợp, hỗ trợ chặt chẽ của c&aacute;c đối t&aacute;c gi&aacute;o dục nhằm đảm bảo chất lượng v&agrave; sự thống nhất với gi&aacute;o tr&igrave;nh ti&ecirc;u chuẩn v&agrave; bộ t&agrave;i liệu của chương tr&igrave;nh.</div>\r\n<div style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">Sau khi tham gia lớp học, c&aacute;c em nhỏ sẽ nhận được s&aacute;ch b&agrave;i tập Nhật k&yacute; nước, truyện tranh Nước l&agrave; một m&oacute;n qu&agrave;, gi&uacute;p c&aacute;c em tổng hợp v&agrave; &aacute;p dụng c&aacute;c kiến thức đ&atilde; học trong đời sống h&agrave;ng ng&agrave;y.</div>', 0, 'vi', 1, '2019-12-07 07:02:36', 1, '2019-12-07 07:02:36', 1, NULL, NULL),
(14, 13, 'Mizuiku classes about water resource and environment education for elementary school students', 'mizuiku-classes-about-water-resource-and-environment-education-for-elementary-school-students', 'May', '<div style=\"caret-color: #333333; color: #333333; font-family: Arial; font-size: 16px; text-align: justify; text-size-adjust: auto;\">Mizuiku teaching classes are held for students in Grade 3 and 4 of beneficiary schools by teachers, who have been trained in the TOT courses. Thanks to Mizuiku\'s student-centered, innovative and interactive teaching methods, it is easier for students to comprehend and remember the water/environment-related information conveyed in these classes which would result in students\' specific actions to protect the environment and water resource. The program hopes that these actions taken by young children will spread out to the whole community.</div>\r\n<div style=\"caret-color: #333333; color: #333333; font-family: Arial; font-size: 16px; text-align: justify; text-size-adjust: auto;\">The classes are well coordinated by educational partners to ensure the quality and consistency with Mizuiku standard syllabus and teaching materials.</div>\r\n<div style=\"caret-color: #333333; color: #333333; font-family: Arial; font-size: 16px; text-align: justify; text-size-adjust: auto;\">After participating in these classes, students will receive \"Water Diary\" workbook and \"Water is a gift\" comic book to help them review and apply taught knowledge into their daily routine.</div>', 0, 'en', 1, '2019-12-07 07:03:05', 1, '2019-12-07 07:03:05', 1, NULL, NULL),
(15, 15, 'Chương trình tập huấn dành cho giáo viên tiểu học', 'chuong-trinh-tap-huan-danh-cho-giao-vien-tieu-hoc', 'Tháng 4', '<div style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">C&aacute;c lớp tập huấn (t&ecirc;n tiếng Anh l&agrave; Training of Trainers - TOT) d&agrave;nh cho lực lượng gi&aacute;o vi&ecirc;n tiểu học khối lớp 3-4 trong khu&ocirc;n khổ chương tr&igrave;nh &ldquo;Mizuiku &ndash; Em y&ecirc;u nước sạch&rdquo; được tổ chức dưới sự hướng dẫn của c&aacute;c đối t&aacute;c gi&aacute;o dục gồm c&oacute; Trung t&acirc;m Gi&aacute;o dục Sức khỏe &amp; Ph&aacute;t triển Cộng đồng Tương Lai v&agrave; Trung t&acirc;m Sống v&agrave; Học tập v&igrave; M&ocirc;i trường v&agrave; Cộng đồng (Live &amp; Learn). Từ năm 2017, lớp tập huấn được mở rộng cho c&aacute;c thầy c&ocirc; Tổng phụ tr&aacute;ch của c&aacute;c trường tiểu học thụ hưởng chương tr&igrave;nh cũng như c&aacute;c thầy c&ocirc; Tổng phụ tr&aacute;ch ti&ecirc;u biểu của c&aacute;c trường tr&ecirc;n địa b&agrave;n.</div>\r\n<div style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">C&aacute;c thầy c&ocirc; được giới thiệu v&agrave; thực h&agrave;nh ứng dụng phương ph&aacute;p giảng dạy chủ động với nhiều hoạt động tương t&aacute;c, tr&ograve; chơi, th&iacute; nghiệm với h&igrave;nh thức đa dạng v&agrave; c&aacute;ch truyền tải th&acirc;n thiện, dễ hiểu, b&aacute;m s&aacute;t theo chương tr&igrave;nh giảng dạy ti&ecirc;u chuẩn v&agrave; bộ t&agrave;i liệu của chương tr&igrave;nh.</div>', 0, 'vi', 1, '2019-12-07 07:03:45', 1, '2019-12-07 07:03:45', 1, NULL, NULL),
(16, 15, 'Trainings for Elementary School Teachers', 'trainings-for-elementary-school-teachers', 'April', '<div style=\"caret-color: #333333; color: #333333; font-family: Arial; font-size: 16px; text-align: justify; text-size-adjust: auto;\">\"Mizuiku- I love clean water\" program provides training courses for elementary school teachers of Grade 3 and 4&nbsp; i.e. Training of Trainers (TOT ), which take place with the instruction of educational non-governmental partners including Tuong Lai Center and Live &amp; Learn Center. Starting from 2017, in addition to head teachers of Grade 3 and 4, the TOTs also engage head teachers of school young pioneer units from beneficiary schools and outstanding head teachers of school young pioneer units in beneficiary locations.&nbsp;</div>\r\n<div style=\"caret-color: #333333; color: #333333; font-family: Arial; font-size: 16px; text-align: justify; text-size-adjust: auto;\">Teachers get to practice dynamic teaching methods that involve giving water-related lessons through a variety of interactive activities, games, and experiments in accordance with Mizuiku\'s standard syllabus and teaching materials.&nbsp;</div>', 0, 'en', 1, '2019-12-07 07:04:20', 1, '2019-12-07 07:04:20', 1, NULL, NULL),
(17, 17, 'Khởi động chương trình “Mizuiku - Em yêu nước sạch”', 'khoi-dong-chuong-trinh-mizuiku-em-yeu-nuoc-sach', 'Tháng 3', '<p><span style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">Hơn 1.3000 học sinh v&agrave; tr&ecirc;n 200 thầy c&ocirc; gi&aacute;o tỉnh Bến Tre đ&atilde; tham dự chương tr&igrave;nh. Đ&acirc;y l&agrave; một chương tr&igrave;nh mang t&iacute;nh tuy&ecirc;n truyền gi&aacute;o dục c&oacute; &yacute; nghĩa thực tế cao, dự &aacute;n tập trung v&agrave;o việc gi&aacute;o dục cho trẻ em về vai tr&ograve; của t&agrave;i nguy&ecirc;n nước tr&ecirc;n tr&aacute;i đất, từ đ&oacute; gi&uacute;p c&aacute;c em đảm bảo an to&agrave;n vệ sinh nước v&agrave; g&oacute;p phần duy tr&igrave; t&agrave;i nguy&ecirc;n nước cho thế hệ mai sau. Dự &aacute;n do Tập đo&agrave;n Suntory Holdings Ltd. (Nhật Bản) khởi xướng v&agrave; triển khai tại Nhật Bản từ năm 2004. Việt Nam l&agrave; đất nước đầu ti&ecirc;n ngo&agrave;i Nhật Bản được Tập đo&agrave;n Suntory chọn để triển khai chương tr&igrave;nh.</span><br style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\" /><br style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\" /><span style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">Năm 2015-2016, Dự &aacute;n do Tập đo&agrave;n Suntory v&agrave; Suntory PepsiCo Việt Nam t&agrave;i trợ to&agrave;n bộ kinh ph&iacute;, triển khai tại H&agrave; Nội, Bắc Ninh v&agrave; Tp. Hồ Ch&iacute; Minh. Chương tr&igrave;nh đ&atilde; tổ chức hơn 400 lớp học cho khoảng 5.000 học sinh; 16 ng&agrave;y hội nước cho hơn 7.700 học sinh, 15 chuyến tham quan nh&agrave; m&aacute;y SPVBcho 1.300 học sinh; x&acirc;y dựng, cải tạo cơ sở vật chất, hệ thống lọc nước tại 16 trường tiểu học tham gia dự &aacute;n c&ugrave;ng h&agrave;ng ngh&igrave;n học sinh, thầy c&ocirc; gi&aacute;o v&agrave; người d&acirc;n tại c&aacute;c địa phương ghi nhận những t&iacute;n hiệu t&iacute;ch cực từ dự &aacute;n.</span><br style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\" /><br style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\" /><span style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">Năm 2017, dự &aacute;n &ldquo;Mizuiku &ndash; Em Y&ecirc;u Nước Sạch&rdquo; sẽ từng bước mở r&ocirc;̣ng quy m&ocirc; tri&ecirc;̉n khai tr&ecirc;n cả nước với sự tham gia của 30 trường ti&ecirc;̉u học tại tỉnh Bắc Ninh, H&agrave; Nội, Tp. Hồ Ch&iacute; Minh v&agrave; Bến Tre. C&aacute;c hoạt động ch&iacute;nh của dự &aacute;n bao gồm Triển khai lễ ph&aacute;t động tại tỉnh Bến Tre; Tặng bộ t&agrave;i liệu chương tr&igrave;nh cho 10 trường tiểu học đ&atilde; tham gia dự &aacute;n năm 2016; Tổ chức tập huấn cho đội ngũ T&igrave;nh nguyện vi&ecirc;n, lực lượng gi&aacute;o vi&ecirc;n tổng phụ tr&aacute;ch Đội, gi&aacute;o vi&ecirc;n trực tiếp giảng dạy khối lớp 3, 4 tại c&aacute;c trường được lựa chọn triển khai chương tr&igrave;nh; Tổ chức c&aacute;c lớp học tuy&ecirc;n truyền gi&aacute;o dục về nước, Ng&agrave;y hội Hiệp sỹ nước sạch, c&aacute;c chuyến tham quan nh&agrave; m&aacute;y SPVB cho học sinh c&aacute;c trường tham gia dự &aacute;n; Dự kiến x&acirc;y dựng 11 c&ocirc;ng tr&igrave;nh nước sạch tại c&aacute;c trường Tiểu học v&agrave; tại cộng đồng&hellip;</span></p>', 0, 'vi', 1, '2019-12-07 07:04:48', 1, '2019-12-07 07:04:48', 1, NULL, NULL),
(18, 17, 'Nationwide \"Mizuiku-I love clean water\" program kick-off ceremony', 'nationwide-mizuiku-i-love-clean-water-program-kick-off-ceremony', 'March', '<div style=\"caret-color: #333333; color: #333333; font-family: Arial; font-size: 16px; text-align: justify; text-size-adjust: auto;\">On the annual World Water Day (March 22), \"Mizuiku - I love clean water\" co-hosting agencies including Suntory Holdings Limited, Suntory PepsiCo Vietnam, Vietnam National Union of Student, Ho Chi Minh Young Pioneer Organization, together with Vietnam Ministry of Education and Training&nbsp; organize kick-off ceremony with the participation of thousands of students, teachers and representatives from national and local authorities.</div>', 0, 'en', 1, '2019-12-07 07:05:21', 1, '2019-12-07 07:05:21', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `keywords` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `og_title` text DEFAULT NULL,
  `og_description` text DEFAULT NULL,
  `og_type` text DEFAULT NULL,
  `og_url` text DEFAULT NULL,
  `og_image` text DEFAULT NULL,
  `language` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_user_id` int(10) UNSIGNED NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_user_id` int(10) UNSIGNED NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$ZA9uaFSkQ2b4aqLTyXSaxOGXhcKTRDJs.EPG9eJE.hozF5k2.lET.', NULL, '2019-12-01 19:49:07', '2019-12-01 19:49:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_user_id` (`created_user_id`),
  ADD KEY `updated_user_id` (`updated_user_id`),
  ADD KEY `deleted_user_id` (`deleted_user_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `article_ref_id` (`ref_id`) USING BTREE;

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `category_ref_id` (`ref_id`),
  ADD KEY `create_user_id` (`created_user_id`) USING BTREE,
  ADD KEY `updated_user_id` (`updated_user_id`),
  ADD KEY `deleted_user_id` (`deleted_user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `model_record_id` (`post_id`),
  ADD KEY `created_user_id` (`created_user_id`),
  ADD KEY `updated_user_id` (`updated_user_id`),
  ADD KEY `deleted_user_id` (`deleted_user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `program_timeline`
--
ALTER TABLE `program_timeline`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_ref_id` (`ref_id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `program_timeline`
--
ALTER TABLE `program_timeline`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`created_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`updated_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `articles_ibfk_3` FOREIGN KEY (`deleted_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `articles_ibfk_4` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`created_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `categories_ibfk_2` FOREIGN KEY (`updated_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `categories_ibfk_3` FOREIGN KEY (`deleted_user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
