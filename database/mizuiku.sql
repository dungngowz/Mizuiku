-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 09, 2019 at 09:43 AM
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
(4, 3, NULL, '\"Mizuiku - I love clean water\" program introduction', 'mizuiku-i-love-clean-water-program introduction', NULL, NULL, '<p>Chương tr&igrave;nh &ldquo;Mizuiku&rdquo; l&agrave; s&aacute;ng kiến tuy&ecirc;n truyền, gi&aacute;o dục &yacute; thức bảo vệ t&agrave;i nguy&ecirc;n nước cho học sinh bậc tiểu học được khởi xướng bởi Tập đo&agrave;n Suntory v&agrave; đ&atilde; triển khai th&agrave;nh c&ocirc;ng tại Nhật Bản từ năm 2004. Đến nay, Dự &aacute;n đ&atilde; thu h&uacute;t sự tham gia của tr&ecirc;n 127 ngh&igrave;n học sinh tiểu học v&agrave; phụ huynh, nhận được đ&aacute;nh gi&aacute; cao từ cộng đồng v&agrave; x&atilde; hội Nhật Bản. Trước thực tế c&oacute; tới 20% d&acirc;n số Việt Nam hiện chưa từng được tiếp cận với nguồn nước sạch. Trong đ&oacute;, nhiều v&ugrave;ng bị thiếu nước sạch trầm trọng như Bến Tre, Bắc Ninh v&agrave; ngay cả c&aacute;c th&agrave;nh phố lớn như H&agrave; Nội, TP.HCM &ndash; đặc biệt v&agrave;o m&ugrave;a kh&ocirc; (Thống k&ecirc; của Viện Y học Lao động v&agrave; Vệ sinh m&ocirc;i trường), Tập đo&agrave;n Suntory v&agrave; Suntory PepsiCo Việt Nam đ&atilde; triển khai chương tr&igrave;nh Mizuiku &ndash; Em y&ecirc;u nước sạch từ năm 2015 đến nay tại Việt Nam với mong muốn lan tỏa giải ph&aacute;p bền vững gi&uacute;p bảo vệ nguồn nước th&ocirc;ng qua việc cung cấp kiến thức bảo vệ nước sạch đến thế hệ tương lai của Việt Nam. Chương tr&igrave;nh &ldquo;Mizuiku &ndash; Em y&ecirc;u nước sạch&rdquo; hướng tới mục ti&ecirc;u n&acirc;ng cao nhận thức của c&aacute;c em học sinh tiểu học về vai tr&ograve; của t&agrave;i nguy&ecirc;n nước v&agrave; c&aacute;ch thức sử dụng hợp l&yacute; nguồn nước sạch, g&oacute;p phần bảo vệ nguồn nước v&agrave; rộng hơn l&agrave; m&ocirc;i trường sống xung quanh. Th&ocirc;ng qua phương ph&aacute;p gi&aacute;o dục lấy học sinh l&agrave;m trung t&acirc;m, chương tr&igrave;nh tạo ra kh&ocirc;ng gian s&aacute;ng tạo, cơ hội thực h&agrave;nh v&agrave; s&acirc;n chơi đa dạng cho c&aacute;c em nhỏ nhằm k&iacute;ch th&iacute;ch &oacute;c quan s&aacute;t, &yacute; tưởng v&agrave; h&agrave;nh động của c&aacute;c em để bảo vệ nguồn nước n&oacute;i ri&ecirc;ng v&agrave; m&ocirc;i trường n&oacute;i chung. Năm 2015-2016, chương tr&igrave;nh được triển khai th&iacute; điểm tại Huyện Thanh Oai v&agrave; Mỹ Đức, H&agrave; Nội, sau đ&oacute; mở rộng ra tỉnh Bắc Ninh v&agrave; Tp. Hồ Ch&iacute; Minh th&ocirc;ng qua sự phối hợp giữa Tập đo&agrave;n Suntory, C&ocirc;ng ty TNHH Nước giải kh&aacute;t Suntory PepsiCo Việt Nam v&agrave; 02 đối t&aacute;c chuy&ecirc;n về gi&aacute;o dục m&ocirc;i trường l&agrave; Trung t&acirc;m Sống v&agrave; Học tập v&igrave; M&ocirc;i trường &amp; Cộng đồng (Live &amp; Learn) v&agrave; Trung t&acirc;m Gi&aacute;o dục Sức khỏe &amp; Ph&aacute;t triển Cộng đồng Tương Lai (Trung t&acirc;m Tương Lai). Qua 3 năm triển khai, chương tr&igrave;nh đ&atilde; tổ chức hơn 660 lớp học cho gần 10.100 học sinh; 26 Ng&agrave;y hội nước cho hơn 11.600 học sinh v&agrave; gi&aacute;o vi&ecirc;n, 25 chuyến tham quan nh&agrave; m&aacute;y Suntory PepsiCo Việt Nam cho 2.500 học sinh v&agrave; gi&aacute;o vi&ecirc;n; x&acirc;y dựng, cải tạo cơ sở vật chất, hệ thống lọc nước tại 26 trường tiểu học tham gia chương tr&igrave;nh. H&agrave;ng ngh&igrave;n học sinh, thầy c&ocirc; gi&aacute;o v&agrave; người d&acirc;n tại c&aacute;c địa phương cũng được hưởng lợi từ hoạt động của chương tr&igrave;nh. Từ năm 2017, chương tr&igrave;nh bước sang giai đoạn ph&aacute;t triển mới với mối quan hệ hợp t&aacute;c chiến lược của Tập đo&agrave;n Suntory, c&ocirc;ng ty Nước Giải kh&aacute;t Suntory PepsiCo Việt Nam, Hội đồng Đội Trung ương, Trung Ương Hội Sinh vi&ecirc;n Việt Nam, sự hỗ trợ từ Bộ Gi&aacute;o dục &amp; Đ&agrave;o tạo c&ugrave;ng sự đồng h&agrave;nh về mặt chuy&ecirc;n m&ocirc;n của Trung t&acirc;m Live &amp; Learn v&agrave; Trung t&acirc;m Tương Lai. Với cơ sở đối t&aacute;c vững mạnh, chương tr&igrave;nh mong muốn đẩy mạnh hiệu quả của c&aacute;c hợp phần gi&aacute;o dục, hỗ trợ đồng thời mở rộng v&ugrave;ng thụ hưởng ra phạm vi to&agrave;n quốc. Chương tr&igrave;nh hi vọng hi vọng đ&oacute;ng g&oacute;p v&agrave;o sự ph&aacute;t triển t&acirc;m hồn v&agrave; thể chất của c&aacute;c em học sinh để g&oacute;p phần bảo tồn v&ograve;ng tuần ho&agrave;n nước cho thế hệ mai sau. Hoạt động chương tr&igrave;nh: Lễ Khởi động chương tr&igrave;nh Tổ chức tập huấn (TOT) cho gi&aacute;o vi&ecirc;n Tổng phụ tr&aacute;ch Đội, gi&aacute;o vi&ecirc;n chủ nhiệm khối 3-4 tại c&aacute;c trường được lựa chọn triển khai Chương tr&igrave;nh, bồi dưỡng kỹ năng dạy học th&iacute;ch hợp để thực hiện c&aacute;c hoạt động gi&aacute;o dục m&ocirc;i trường v&agrave; c&aacute;c hoạt động ngoại kh&oacute;a về chủ đề nước theo gi&aacute;o &aacute;n ri&ecirc;ng của chương tr&igrave;nh Mizuiku. Tổ chức giảng dạy cho học sinh khối 3, 4 c&aacute;c trường được lựa chọn triển khai chương tr&igrave;nh, gi&aacute;o dục m&ocirc;i trường về chủ đề nước theo gi&aacute;o &aacute;n của chương tr&igrave;nh Mizuiku, trong đ&oacute; mang đến cho c&aacute;c em học sinh kiến thức về c&aacute;c loại nước, v&ograve;ng tuần ho&agrave;n nước, vai tr&ograve; của nước trong cuộc sống, vấn đề của nước h&ocirc;m nay v&agrave; t&aacute;c động của những vấn đề nước đối với cuộc sống, x&acirc;y dựng th&oacute;i quen tiết kiệm nước, bảo vệ m&ocirc;i trường; thực h&agrave;nh th&iacute; nghiệm lọc nước v&agrave; nhiều b&agrave;i tập thực h&agrave;nh kh&aacute;c. C&aacute;c cuộc thi ph&aacute;t động tr&ecirc;n phạm vi to&agrave;n quốc theo chủ đề bảo vệ m&ocirc;i trường, bảo vệ nguồn nước. Ng&agrave;y hội Hiệp sĩ Nước sạch tổ chức tại c&aacute;c trường thụ hưởng Chương tr&igrave;nh với nội dung v&agrave; h&igrave;nh thức sinh động như tr&ograve; chơi tương t&aacute;c, t&igrave;m hiểu kiến thức về nước, thi h&ugrave;ng biện v&igrave; m&ocirc;i trường, thi s&aacute;ng kiến m&ocirc; h&igrave;nh bảo vệ m&ocirc;i trường. Tham quan nh&agrave; m&aacute;y Suntory PepsiCo Việt Nam cho học sinh khối 3, 4 c&aacute;c trường được lựa chọn triển khai chương tr&igrave;nh. Tại đ&acirc;y, c&aacute;c em được nghe giới thiệu về nh&agrave; m&aacute;y, quy tr&igrave;nh xử l&yacute; chất thải đạt chuẩn, tham quan d&acirc;y chuyền sản xuất, thực h&agrave;nh th&iacute; nghiệm lọc nước, l&agrave;m nước rửa ch&eacute;n tự nhi&ecirc;n. Hỗ trợ cơ sở vật chất nước sạch tại c&aacute;c trường được lựa chọn triển khai chương tr&igrave;nh, bao gồm những hạng mục hỗ trợ ph&ugrave; hợp để x&acirc;y dựng, lắp đặt hệ thống lọc nước RO, x&acirc;y dựng mới hoặc sửa chữa, n&acirc;ng cấp nh&agrave; vệ sinh cho học sinh, sơn tường c&ocirc;ng tr&igrave;nh, v.v&hellip; Ra mắt Website v&agrave; hệ thống học tập trực tuyến E-learning để gia tăng cơ hội tiếp cận của c&aacute;c em học sinh tr&ecirc;n to&agrave;n quốc đối với kiến thức bảo vệ nguồn nước v&agrave; c&aacute;c b&agrave;i giảng th&uacute; vị do chương tr&igrave;nh x&acirc;y dựng.</p>', 'program-introduction', 1, '', 0, 'en', '2019-12-04 10:15:11', 1, '2019-12-07 03:32:33', 1, NULL, NULL),
(7, 7, 1, 'LỄ TỔNG KẾT CHƯƠNG TRÌNH “MIZUIKU – EM YÊU NƯỚC SẠCH” NĂM 2019 LỄ TỔNG KẾT CHƯƠNG TRÌNH “MIZUIKU – EM YÊU NƯỚC SẠCH” NĂM 2019', 'le-tong-ket-chuong-trinh-mizuiku-em-yeu-nuoc-sach-nam-2019', 'news/2019/12/5dedcdccbd8c3_1.jpg', 'test Về phía Trung Ương Đoàn TNCS Hồ Chí Minh có đồng chí Bùi Minh Tuấn, Ủy viên Ban Chấp hành Trung ương Đoàn, Phó Chủ tịch Trung ương Hội Sinh viên Việt Nam; Đồng chí Nguyễn Phạm Duy Trang, Ủy viên Ban Thường vụ Trung ương Đoàn, Phó Chủ tịch thường trực Hội đồng Đội Trung ương; đại diện Trung tâm Live & Learn đại diện các đơn vị tài trợ; lãnh đạo đại diện các bộ, ban, ngành, đoàn thể Trung ương; các đồng chí lãnh đạo, cán bộ các ban, đơn vị thuộc Trung ương Đoàn, Hội đồng Đội Trung ương; lãnh đạo tỉnh Quảng Nam; đại diện Hội đồng Đội, Hội Sinh viên một số tỉnh, thành phố triển khai chương trình; đại diện Ban Giám hiệu và các thầy cô tham gia chương trình trên địa bàn tỉnh Quảng Nam, các thầy cô giáo và gần 300 em thiếu nhi trường Tiểu học Duy Thành  cùng tham dự.', '<p><span style=\"color: #333333; font-family: Arial; font-size: 16px; text-align: justify;\">Về ph&iacute;a Trung Ương Đo&agrave;n TNCS Hồ Ch&iacute; Minh c&oacute; đồng ch&iacute; B&ugrave;i Minh Tuấn, Ủy vi&ecirc;n Ban Chấp h&agrave;nh Trung ương Đo&agrave;n, Ph&oacute; Chủ tịch Trung ương Hội Sinh vi&ecirc;n Việt Nam; Đồng ch&iacute; Nguyễn Phạm Duy Trang, Ủy vi&ecirc;n Ban Thường vụ Trung ương Đo&agrave;n, Ph&oacute; Chủ tịch thường trực Hội đồng Đội Trung ương; đại diện Trung t&acirc;m Live &amp; Learn đại diện c&aacute;c đơn vị t&agrave;i trợ; l&atilde;nh đạo đại diện c&aacute;c bộ, ban, ng&agrave;nh, đo&agrave;n thể Trung ương; c&aacute;c đồng ch&iacute; l&atilde;nh đạo, c&aacute;n bộ c&aacute;c ban, đơn vị thuộc Trung ương Đo&agrave;n, Hội đồng Đội Trung ương; l&atilde;nh đạo tỉnh Quảng Nam; đại diện Hội đồng Đội, Hội Sinh vi&ecirc;n một số tỉnh, th&agrave;nh phố triển khai chương tr&igrave;nh; đại diện Ban Gi&aacute;m hiệu v&agrave; c&aacute;c thầy c&ocirc; tham gia chương tr&igrave;nh tr&ecirc;n địa b&agrave;n tỉnh Quảng Nam, c&aacute;c thầy c&ocirc; gi&aacute;o v&agrave; gần 300 em thiếu nhi trường Tiểu học Duy Th&agrave;nh &nbsp;c&ugrave;ng tham dự.</span></p>', NULL, 1, NULL, 0, 'vi', '2019-12-09 04:30:16', 1, '2019-12-09 04:49:48', 1, NULL, NULL),
(8, 8, 1, '123123', '123123', 'news/2019/12/5dedd42bcfe54_1.jpg', NULL, NULL, NULL, 1, NULL, 0, 'vi', '2019-12-09 04:57:19', 1, '2019-12-09 04:57:19', 1, NULL, NULL);

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
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name_vi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `parent_id`, `name_vi`, `name_en`, `create_user`, `update_user`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 'An Giang', 'An Giang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(2, 1, 'An Phú', 'An Phú', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(3, 1, 'Châu Đốc', 'Châu Đốc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(4, 1, 'Châu Phú', 'Châu Phú', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(5, 1, 'Châu Thành', 'Châu Thành', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(6, 1, 'Chợ Mới', 'Chợ Mới', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(7, 1, 'Long Xuyên', 'Long Xuyên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(8, 1, 'Phú Tân', 'Phú Tân', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(9, 1, 'Tân Châu', 'Tân Châu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(10, 1, 'Thoại Sơn', 'Thoại Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(11, 1, 'Tịnh Biên', 'Tịnh Biên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(12, 1, 'Tri Tôn', 'Tri Tôn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(13, 0, 'Bà Rịa–Vũng Tàu', 'Bà Rịa–Vũng Tàu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(14, 13, 'Bà Rịa', 'Bà Rịa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(15, 13, 'Châu Đức', 'Châu Đức', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(16, 13, 'Côn Đảo', 'Côn Đảo', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(17, 13, 'Đất Đỏ', 'Đất Đỏ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(18, 13, 'Long Điền', 'Long Điền', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(19, 13, 'Tân Thành', 'Tân Thành', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(20, 13, 'Vũng Tàu', 'Vũng Tàu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(21, 13, 'Xuyên Mộc', 'Xuyên Mộc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(22, 0, 'Bắc Giang', 'Bắc Giang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(23, 22, 'Bắc Giang', 'Bắc Giang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(24, 22, 'Hiệp Hòa', 'Hiệp Hòa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(25, 22, 'Lạng Giang', 'Lạng Giang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(26, 22, 'Lục Nam', 'Lục Nam', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(27, 22, 'Lục Ngạn', 'Lục Ngạn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(28, 22, 'Sơn Động', 'Sơn Động', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(29, 22, 'Tân Yên', 'Tân Yên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(30, 22, 'Việt Yên', 'Việt Yên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(31, 22, 'Yên Dũng', 'Yên Dũng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(32, 22, 'Yên Thế', 'Yên Thế', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(33, 0, 'Bắc Kạn', 'Bắc Kạn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(34, 33, 'Ba Bể', 'Ba Bể', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(35, 33, 'Bắc Kạn', 'Bắc Kạn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(36, 33, 'Bạch Thông', 'Bạch Thông', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(37, 33, 'Chợ Đồn', 'Chợ Đồn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(38, 33, 'Chợ Mới', 'Chợ Mới', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(39, 33, 'Na Rì', 'Na Rì', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(40, 33, 'Ngân Sơn', 'Ngân Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(41, 33, 'Pác Nặm', 'Pác Nặm', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(42, 0, 'Bạc Liêu', 'Bạc Liêu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(43, 42, 'Bạc Liêu', 'Bạc Liêu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(44, 42, 'Đông Hải', 'Đông Hải', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(45, 42, 'Giá Rai', 'Giá Rai', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(46, 42, 'Hòa Bình', 'Hòa Bình', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(47, 42, 'Hồng Dân', 'Hồng Dân', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(48, 42, 'Phước Long', 'Phước Long', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(49, 42, 'Vĩnh Lợi', 'Vĩnh Lợi', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(50, 0, 'Bắc Ninh', 'Bắc Ninh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(51, 50, 'Bắc Ninh', 'Bắc Ninh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(52, 50, 'Gia Bình', 'Gia Bình', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(53, 50, 'Lương Tài', 'Lương Tài', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(54, 50, 'Quế Võ', 'Quế Võ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(55, 50, 'Thuận Thành', 'Thuận Thành', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(56, 50, 'Tiên Du', 'Tiên Du', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(57, 50, 'Từ Sơn', 'Từ Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(58, 50, 'Yên Phong', 'Yên Phong', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(59, 0, 'Bến Tre', 'Bến Tre', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(60, 59, 'Ba Tri', 'Ba Tri', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(61, 59, 'Bến Tre', 'Bến Tre', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(62, 59, 'Bình Đại', 'Bình Đại', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(63, 59, 'Châu Thành', 'Châu Thành', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(64, 59, 'Chợ Lách', 'Chợ Lách', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(65, 59, 'Giồng Trôm', 'Giồng Trôm', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(66, 59, 'Mỏ Cày', 'Mỏ Cày', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(67, 59, 'Thạnh Phú', 'Thạnh Phú', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(68, 0, 'Bình Định', 'Bình Định', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(69, 68, 'An Lão', 'An Lão', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(70, 68, 'An Nhơn', 'An Nhơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(71, 68, 'Hoài Ân', 'Hoài Ân', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(72, 68, 'Hoài Nhơn', 'Hoài Nhơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(73, 68, 'Phù Cát', 'Phù Cát', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(74, 68, 'Phù Mỹ', 'Phù Mỹ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(75, 68, 'Qui Nhơn', 'Qui Nhơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(76, 68, 'Tây Sơn', 'Tây Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(77, 68, 'Tuy Phước', 'Tuy Phước', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(78, 68, 'Vân Canh', 'Vân Canh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(79, 68, 'Vĩnh Thạnh', 'Vĩnh Thạnh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(80, 0, 'Bình Dương', 'Bình Dương', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(81, 80, 'Bắc Tân Uyên', 'Bắc Tân Uyên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(82, 80, 'Bàu Bàng', 'Bàu Bàng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(83, 80, 'Bến Cát', 'Bến Cát', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(84, 80, 'Dầu Tiếng', 'Dầu Tiếng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(85, 80, 'Dĩ An', 'Dĩ An', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(86, 80, 'Phú Giáo', 'Phú Giáo', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(87, 80, 'Tân Uyên', 'Tân Uyên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(88, 80, 'Thủ Dầu Một', 'Thủ Dầu Một', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(89, 80, 'Thuận An', 'Thuận An', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(90, 0, 'Bình Phước', 'Bình Phước', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(91, 90, 'Bình Long', 'Bình Long', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(92, 90, 'Bù Đăng', 'Bù Đăng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(93, 90, 'Bù Đốp', 'Bù Đốp', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(94, 90, 'Bù Gia Mập', 'Bù Gia Mập', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(95, 90, 'Chơn Thành', 'Chơn Thành', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(96, 90, 'Đồng Phú', 'Đồng Phú', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(97, 90, 'Đồng Xoài', 'Đồng Xoài', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(98, 90, 'Hớn Quản', 'Hớn Quản', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(99, 90, 'Lộc Ninh', 'Lộc Ninh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(100, 90, 'Phước Long', 'Phước Long', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(101, 0, 'Bình Thuận', 'Bình Thuận', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(102, 101, 'Bắc Bình', 'Bắc Bình', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(103, 101, 'Đức Linh', 'Đức Linh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(104, 101, 'Hàm Tân', 'Hàm Tân', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(105, 101, 'Hàm Thuận Bắc', 'Hàm Thuận Bắc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(106, 101, 'Hàm Thuận Nam', 'Hàm Thuận Nam', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(107, 101, 'La Gi', 'La Gi', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(108, 101, 'Phan Thiết', 'Phan Thiết', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(109, 101, 'Phú Quý', 'Phú Quý', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(110, 101, 'Tánh Linh', 'Tánh Linh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(111, 101, 'Tuy Phong', 'Tuy Phong', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(112, 0, 'Cà Mau', 'Cà Mau', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(113, 112, 'Cà Mau', 'Cà Mau', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(114, 112, 'Đầm Dơi', 'Đầm Dơi', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(115, 112, 'Cái Nước', 'Cái Nước', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(116, 112, 'Năm Căn', 'Năm Căn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(117, 112, 'Ngọc Hiển', 'Ngọc Hiển', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(118, 112, 'Phú Tân', 'Phú Tân', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(119, 112, 'Thới Bình', 'Thới Bình', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(120, 112, 'Trần Văn Thời', 'Trần Văn Thời', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(121, 112, 'U Minh', 'U Minh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(122, 112, 'Cần Thơ', 'Cần Thơ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(123, 112, 'Bình Thủy', 'Bình Thủy', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(124, 112, 'Cái Răng', 'Cái Răng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(125, 112, 'Cần Thơ', 'Cần Thơ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(126, 112, 'Cờ Đỏ', 'Cờ Đỏ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(127, 112, 'Ninh Kiều', 'Ninh Kiều', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(128, 112, 'Ô Môn', 'Ô Môn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(129, 112, 'Phong Điền', 'Phong Điền', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(130, 112, 'Thới Lai', 'Thới Lai', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(131, 112, 'Thốt Nốt', 'Thốt Nốt', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(132, 112, 'Vĩnh Thạnh', 'Vĩnh Thạnh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(133, 0, 'Cao Bằng', 'Cao Bằng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(134, 133, 'Bảo Lạc', 'Bảo Lạc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(135, 133, 'Bảo Lâm', 'Bảo Lâm', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(136, 133, 'Cao Bằng', 'Cao Bằng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(137, 133, 'Hạ Lang', 'Hạ Lang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(138, 133, 'Hà Quảng', 'Hà Quảng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(139, 133, 'Hòa An', 'Hòa An', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(140, 133, 'Nguyên Bình', 'Nguyên Bình', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(141, 133, 'Phục Hòa', 'Phục Hòa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(142, 133, 'Quảng Uyên', 'Quảng Uyên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(143, 133, 'Thạch An', 'Thạch An', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(144, 133, 'Thông Nông', 'Thông Nông', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(145, 133, 'Trà Lĩnh', 'Trà Lĩnh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(146, 133, 'Trùng Khánh', 'Trùng Khánh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(147, 133, 'Đà Nẵng', 'Đà Nẵng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(148, 133, 'Cẩm Lệ', 'Cẩm Lệ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(149, 133, 'Hải Châu', 'Hải Châu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(150, 133, 'Hòa Vang', 'Hòa Vang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(151, 133, 'Hoàng Sa', 'Hoàng Sa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(152, 133, 'Liên Chiểu', 'Liên Chiểu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(153, 133, 'Ngũ Hành Sơn', 'Ngũ Hành Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(154, 133, 'Sơn Trà', 'Sơn Trà', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(155, 133, 'Thanh Khê', 'Thanh Khê', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(156, 0, 'Đắk Lắk', 'Đắk Lắk', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(157, 156, 'Buôn Đôn', 'Buôn Đôn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(158, 156, 'Buôn Hồ', 'Buôn Hồ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(159, 156, 'Buôn Ma Thuột', 'Buôn Ma Thuột', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(160, 156, 'Cư M\'gar', 'Cư M\'gar', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(161, 156, 'Cư Kuin', 'Cư Kuin', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(162, 156, 'Ea H\'leo', 'Ea H\'leo', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(163, 156, 'Ea Kar', 'Ea Kar', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(164, 156, 'Ea Súp', 'Ea Súp', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(165, 156, 'Krông Ana', 'Krông Ana', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(166, 156, 'Krông Bông', 'Krông Bông', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(167, 156, 'Krông Buk', 'Krông Buk', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(168, 156, 'Krông Năng', 'Krông Năng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(169, 156, 'Krông Pắk', 'Krông Pắk', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(170, 156, 'Lắk', 'Lắk', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(171, 156, 'M\'Đrăk', 'M\'Đrăk', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(172, 0, 'Đắk Nông', 'Đắk Nông', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(173, 172, 'Cư Jút', 'Cư Jút', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(174, 172, 'Đắk Glong', 'Đắk Glong', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(175, 172, 'Đắk Mil', 'Đắk Mil', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(176, 172, 'Đắk R\'Lấp', 'Đắk R\'Lấp', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(177, 172, 'Đắk Song', 'Đắk Song', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(178, 172, 'Gia Nghĩa', 'Gia Nghĩa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(179, 172, 'Krông Nô', 'Krông Nô', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(180, 172, 'Tuy Đức', 'Tuy Đức', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(181, 0, 'Điện Biên', 'Điện Biên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(182, 181, 'Điện Biên', 'Điện Biên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(183, 181, 'Điện Biên Đông', 'Điện Biên Đông', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(184, 181, 'Điện Biên Phủ', 'Điện Biên Phủ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(185, 181, 'Mường Chà', 'Mường Chà', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(186, 181, 'Mường Nhé', 'Mường Nhé', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(187, 181, 'Tủa Chùa', 'Tủa Chùa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(188, 181, 'Tuần Giáo', 'Tuần Giáo', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(189, 0, 'Đồng Nai', 'Đồng Nai', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(190, 189, 'Biên Hòa', 'Biên Hòa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(191, 189, 'Cẩm Mỹ', 'Cẩm Mỹ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(192, 189, 'Định Quán', 'Định Quán', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(193, 189, 'Long Khánh', 'Long Khánh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(194, 189, 'Long Thành', 'Long Thành', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(195, 189, 'Nhơn Trạch', 'Nhơn Trạch', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(196, 189, 'Tân Phú', 'Tân Phú', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(197, 189, 'Thống Nhất', 'Thống Nhất', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(198, 189, 'Trảng Bom', 'Trảng Bom', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(199, 189, 'Vĩnh Cữu', 'Vĩnh Cữu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(200, 189, 'Xuân Lộc', 'Xuân Lộc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(201, 0, 'Đồng Tháp', 'Đồng Tháp', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(202, 201, 'Cao Lãnh', 'Cao Lãnh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(203, 201, 'Châu Thành', 'Châu Thành', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(204, 201, 'Hồng Ngự', 'Hồng Ngự', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(205, 201, 'Lai Vung', 'Lai Vung', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(206, 201, 'Lấp Vò', 'Lấp Vò', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(207, 201, 'Tam Nông', 'Tam Nông', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(208, 201, 'Tân Hồng', 'Tân Hồng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(209, 201, 'Thanh Bình', 'Thanh Bình', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(210, 201, 'Tháp Mười', 'Tháp Mười', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(211, 0, 'Gia Lai', 'Gia Lai', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(212, 211, 'Ayun Pa', 'Ayun Pa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(213, 211, 'An Khê', 'An Khê', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(214, 211, 'Chư Păh', 'Chư Păh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(215, 211, 'Chư Prông', 'Chư Prông', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(216, 211, 'Chư Pưh', 'Chư Pưh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(217, 211, 'Chư Sê', 'Chư Sê', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(218, 211, 'Đắk Đoa', 'Đắk Đoa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(219, 211, 'Đắk Pơ', 'Đắk Pơ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(220, 211, 'Đức Cơ', 'Đức Cơ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(221, 211, 'Ia Grai', 'Ia Grai', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(222, 211, 'Ia Pa', 'Ia Pa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(223, 211, 'K\'Bang', 'K\'Bang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(224, 211, 'Kông Chro', 'Kông Chro', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(225, 211, 'Krông Pa', 'Krông Pa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(226, 211, 'Mang Yang', 'Mang Yang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(227, 211, 'Phú Thiện', 'Phú Thiện', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(228, 211, 'Pleiku', 'Pleiku', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(229, 0, 'Hà Giang', 'Hà Giang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(230, 229, 'Bắc Mê', 'Bắc Mê', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(231, 229, 'Bắc Quang', 'Bắc Quang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(232, 229, 'Đồng Văn', 'Đồng Văn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(233, 229, 'Hà Giang', 'Hà Giang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(234, 229, 'Hoàng Su Phì', 'Hoàng Su Phì', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(235, 229, 'Mèo Vạc', 'Mèo Vạc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(236, 229, 'Quản Bạ', 'Quản Bạ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(237, 229, 'Quảng Bình', 'Quảng Bình', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(238, 229, 'Vị Xuyên', 'Vị Xuyên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(239, 229, 'Xín Mần', 'Xín Mần', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(240, 229, 'Yên Minh', 'Yên Minh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(241, 0, 'Hà Nam', 'Hà Nam', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(242, 241, 'Bình Lục', 'Bình Lục', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(243, 241, 'Duy Tiên', 'Duy Tiên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(244, 241, 'Kim Bảng', 'Kim Bảng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(245, 241, 'Lý Nhân', 'Lý Nhân', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(246, 241, 'Phủ Lý', 'Phủ Lý', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(247, 241, 'Thanh Liêm', 'Thanh Liêm', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(248, 241, 'Hà Nội', 'Hà Nội', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(249, 241, 'Ba Đình', 'Ba Đình', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(250, 241, 'Cầu Giấy', 'Cầu Giấy', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(251, 241, 'Đông Anh', 'Đông Anh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(252, 241, 'Đống Đa', 'Đống Đa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(253, 241, 'Gia Lâm', 'Gia Lâm', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(254, 241, 'Hai Bà Trưng', 'Hai Bà Trưng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(255, 241, 'Hoàn Kiếm', 'Hoàn Kiếm', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(256, 241, 'Hoàng Mai', 'Hoàng Mai', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(257, 241, 'Mê Linh', 'Mê Linh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(258, 241, 'Long Biên', 'Long Biên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(259, 241, 'Sóc Sơn', 'Sóc Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(260, 241, 'Tây Hồ', 'Tây Hồ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(261, 241, 'Thanh Trì', 'Thanh Trì', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(262, 241, 'Thanh Xuân', 'Thanh Xuân', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(263, 241, 'Từ Liêm', 'Từ Liêm', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(264, 241, 'Ba Vì', 'Ba Vì', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(265, 241, 'Chương Mỹ', 'Chương Mỹ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(266, 241, 'Đan Phượng', 'Đan Phượng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(267, 241, 'Hà Đông', 'Hà Đông', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(268, 241, 'Hoài Đức', 'Hoài Đức', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(269, 241, 'Mỹ Đức', 'Mỹ Đức', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(270, 241, 'Phú Xuyên', 'Phú Xuyên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(271, 241, 'Phúc Thọ', 'Phúc Thọ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(272, 241, 'Quốc Oai', 'Quốc Oai', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(273, 241, 'Sơn Tây', 'Sơn Tây', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(274, 241, 'Thạch Thất', 'Thạch Thất', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(275, 241, 'Thanh Oai', 'Thanh Oai', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(276, 241, 'Thường Tín', 'Thường Tín', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(277, 241, 'Ứng Hòa', 'Ứng Hòa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(278, 0, 'Hà Tĩnh', 'Hà Tĩnh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(279, 278, 'Cẩm Xuyên', 'Cẩm Xuyên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(280, 278, 'Can Lộc', 'Can Lộc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(281, 278, 'Đức Thọ', 'Đức Thọ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(282, 278, 'Hà Tĩnh', 'Hà Tĩnh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(283, 278, 'Hồng Lĩnh', 'Hồng Lĩnh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(284, 278, 'Hương Khê', 'Hương Khê', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(285, 278, 'Hương Sơn', 'Hương Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(286, 278, 'Kỳ Anh', 'Kỳ Anh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(287, 278, 'Nghi Xuân', 'Nghi Xuân', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(288, 278, 'Thạch Hà', 'Thạch Hà', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(289, 278, 'Vũ Quang', 'Vũ Quang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(290, 0, 'Hải Dương', 'Hải Dương', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(291, 290, 'Bình Giang', 'Bình Giang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(292, 290, 'Cẩm Giàng', 'Cẩm Giàng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(293, 290, 'Chí Linh', 'Chí Linh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(294, 290, 'Gia Lộc', 'Gia Lộc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(295, 290, 'Hải Dương', 'Hải Dương', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(296, 290, 'Kim Thành', 'Kim Thành', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(297, 290, 'Kinh Môn', 'Kinh Môn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(298, 290, 'Nam Sách', 'Nam Sách', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(299, 290, 'Ninh Giang', 'Ninh Giang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(300, 290, 'Thanh Hà', 'Thanh Hà', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(301, 290, 'Thanh Miện', 'Thanh Miện', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(302, 290, 'Tứ Kỳ', 'Tứ Kỳ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(303, 290, 'Hải Phòng', 'Hải Phòng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(304, 290, 'An Dương', 'An Dương', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(305, 290, 'An Lão', 'An Lão', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(306, 290, 'Bạch Long Vĩ', 'Bạch Long Vĩ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(307, 290, 'Cát Hải', 'Cát Hải', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(308, 290, 'Đồ Sơn', 'Đồ Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(309, 290, 'Hải An', 'Hải An', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(310, 290, 'Hồng Bàng', 'Hồng Bàng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(311, 290, 'Kiến An', 'Kiến An', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(312, 290, 'Kiến Thuỵ', 'Kiến Thuỵ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(313, 290, 'Lê Chân', 'Lê Chân', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(314, 290, 'Ngô Quyền', 'Ngô Quyền', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(315, 290, 'Thủy Nguyên', 'Thủy Nguyên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(316, 290, 'Tiên Lãng', 'Tiên Lãng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(317, 290, 'Vĩnh Bảo', 'Vĩnh Bảo', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(318, 290, 'Dương Kinh', 'Dương Kinh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(319, 0, 'Hậu Giang', 'Hậu Giang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(320, 319, 'Châu Thành', 'Châu Thành', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(321, 319, 'Châu Thành A', 'Châu Thành A', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(322, 319, 'Long Mỹ', 'Long Mỹ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(323, 319, 'Phụng Hiệp', 'Phụng Hiệp', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(324, 319, 'Vị Thanh', 'Vị Thanh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(325, 319, 'Vị Thủy', 'Vị Thủy', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(326, 319, 'Ngã Bảy', 'Ngã Bảy', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(327, 0, 'Hồ Chí Minh', 'Hồ Chí Minh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(328, 327, 'Bình Chánh', 'Bình Chánh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(329, 327, 'Bình Tân', 'Bình Tân', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(330, 327, 'Bình Thạnh', 'Bình Thạnh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(331, 327, 'Cần Giờ', 'Cần Giờ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(332, 327, 'Củ Chi', 'Củ Chi', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(333, 327, 'Quận 1', 'Quận 1', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(334, 327, 'Quận 2', 'Quận 2', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(335, 327, 'Quận 3', 'Quận 3', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(336, 327, 'Quận 4', 'Quận 4', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(337, 327, 'Quận 5', 'Quận 5', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(338, 327, 'Quận 6', 'Quận 6', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(339, 327, 'Quận 7', 'Quận 7', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(340, 327, 'Quận 8', 'Quận 8', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(341, 327, 'Quận 9', 'Quận 9', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(342, 327, 'Quận 10', 'Quận 10', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(343, 327, 'Quận 11', 'Quận 11', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(344, 327, 'Quận 12', 'Quận 12', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(345, 327, 'Gò Vấp', 'Gò Vấp', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(346, 327, 'Hóc Môn', 'Hóc Môn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(347, 327, 'Nhà Bè', 'Nhà Bè', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(348, 327, 'Phú Nhuận', 'Phú Nhuận', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(349, 327, 'Tân Bình', 'Tân Bình', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(350, 327, 'Tân Phú', 'Tân Phú', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(351, 327, 'Thủ Đức', 'Thủ Đức', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(352, 0, 'Hòa Bình', 'Hòa Bình', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(353, 352, 'Cao Phong', 'Cao Phong', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(354, 352, 'Đà Bắc', 'Đà Bắc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(355, 352, 'Hòa Bình', 'Hòa Bình', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(356, 352, 'Kim Bôi', 'Kim Bôi', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(357, 352, 'Kỳ Sơn', 'Kỳ Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(358, 352, 'Lạc Sơn', 'Lạc Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(359, 352, 'Lạc Thủy', 'Lạc Thủy', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(360, 352, 'Lương Sơn', 'Lương Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(361, 352, 'Mai Châu', 'Mai Châu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(362, 352, 'Tân Lạc', 'Tân Lạc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(363, 352, 'Yên Thủy', 'Yên Thủy', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(364, 0, 'Hưng Yên', 'Hưng Yên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(365, 364, 'Ân Thi', 'Ân Thi', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(366, 364, 'Hưng Yên', 'Hưng Yên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(367, 364, 'Khoái Châu', 'Khoái Châu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(368, 364, 'Kim Động', 'Kim Động', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(369, 364, 'Mỹ Hào', 'Mỹ Hào', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(370, 364, 'Phù Cừ', 'Phù Cừ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(371, 364, 'Tiên Lữ', 'Tiên Lữ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(372, 364, 'Văn Giang', 'Văn Giang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(373, 364, 'Văn Lâm', 'Văn Lâm', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(374, 364, 'Yên Mỹ', 'Yên Mỹ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(375, 0, 'Khánh Hòa', 'Khánh Hòa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(376, 375, 'Cam Lâm', 'Cam Lâm', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(377, 375, 'Cam Ranh', 'Cam Ranh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(378, 375, 'Diên Khánh', 'Diên Khánh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(379, 375, 'Khánh Sơn', 'Khánh Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(380, 375, 'Khánh Vĩnh', 'Khánh Vĩnh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(381, 375, 'Nha Trang', 'Nha Trang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(382, 375, 'Ninh Hòa', 'Ninh Hòa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(383, 375, 'Trường Sa', 'Trường Sa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(384, 375, 'Vạn Ninh', 'Vạn Ninh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(385, 0, 'Kiên Giang', 'Kiên Giang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(386, 385, 'An Biên', 'An Biên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(387, 385, 'An Minh', 'An Minh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(388, 385, 'Châu Thành', 'Châu Thành', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(389, 385, 'Giồng Riềng', 'Giồng Riềng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(390, 385, 'Gò Quao', 'Gò Quao', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(391, 385, 'Giang Thành', 'Giang Thành', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(392, 385, 'Hà Tiên', 'Hà Tiên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(393, 385, 'Hòn Đất', 'Hòn Đất', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(394, 385, 'Kiên Hải', 'Kiên Hải', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(395, 385, 'Kiên Lương', 'Kiên Lương', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(396, 385, 'Phú Quốc', 'Phú Quốc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(397, 385, 'Rạch Giá', 'Rạch Giá', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(398, 385, 'Tân Hiệp', 'Tân Hiệp', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(399, 385, 'Vĩnh Thuận', 'Vĩnh Thuận', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(400, 385, 'U Minh Thượng', 'U Minh Thượng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(401, 0, 'Kon Tum', 'Kon Tum', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(402, 401, 'Đắk Glei', 'Đắk Glei', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(403, 401, 'Đắk Hà', 'Đắk Hà', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL);
INSERT INTO `provinces` (`id`, `parent_id`, `name_vi`, `name_en`, `create_user`, `update_user`, `created_at`, `updated_at`, `deleted_at`) VALUES
(404, 401, 'Đắk Tô', 'Đắk Tô', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(405, 401, 'Kon Plông', 'Kon Plông', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(406, 401, 'Kon Rẫy', 'Kon Rẫy', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(407, 401, 'Kon Tum', 'Kon Tum', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(408, 401, 'Ngọc Hồi', 'Ngọc Hồi', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(409, 401, 'Sa Thầy', 'Sa Thầy', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(410, 401, 'Tu Mơ Rông', 'Tu Mơ Rông', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(411, 0, 'Lai Châu', 'Lai Châu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(412, 411, 'Lai Châu', 'Lai Châu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(413, 411, 'Mường Tè', 'Mường Tè', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(414, 411, 'Phong Thổ', 'Phong Thổ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(415, 411, 'Sìn Hồ', 'Sìn Hồ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:43', '2018-11-07 01:18:43', NULL),
(416, 411, 'Tam Đường', 'Tam Đường', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(417, 411, 'Than Uyên', 'Than Uyên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(418, 411, 'Tân Uyên', 'Tân Uyên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(419, 0, 'Lâm Đồng', 'Lâm Đồng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(420, 419, 'Bảo Lâm', 'Bảo Lâm', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(421, 419, 'Bảo Lộc', 'Bảo Lộc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(422, 419, 'Cát Tiên', 'Cát Tiên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(423, 419, 'Đạ Huoai', 'Đạ Huoai', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(424, 419, 'Đà Lạt', 'Đà Lạt', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(425, 419, 'Đạ Tẻh', 'Đạ Tẻh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(426, 419, 'Đam Rông', 'Đam Rông', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(427, 419, 'Di Linh', 'Di Linh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(428, 419, 'Đơn Dương', 'Đơn Dương', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(429, 419, 'Đức Trọng', 'Đức Trọng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(430, 419, 'Lạc Dương', 'Lạc Dương', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(431, 419, 'Lâm Hà', 'Lâm Hà', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(432, 0, 'Lạng Sơn', 'Lạng Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(433, 432, 'Bắc Sơn', 'Bắc Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(434, 432, 'Bình Gia', 'Bình Gia', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(435, 432, 'Cao Lộc', 'Cao Lộc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(436, 432, 'Chi Lăng', 'Chi Lăng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(437, 432, 'Đình Lập', 'Đình Lập', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(438, 432, 'Hữu Lũng', 'Hữu Lũng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(439, 432, 'Lạng Sơn', 'Lạng Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(440, 432, 'Lộc Bình', 'Lộc Bình', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(441, 432, 'Tràng Định', 'Tràng Định', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(442, 432, 'Văn Lãng', 'Văn Lãng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(443, 432, 'Văn Quân', 'Văn Quân', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(444, 0, 'Lào Cai', 'Lào Cai', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(445, 444, 'Bắc Hà', 'Bắc Hà', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(446, 444, 'Bảo Thắng', 'Bảo Thắng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(447, 444, 'Bảo Yên', 'Bảo Yên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(448, 444, 'Bát Xát', 'Bát Xát', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(449, 444, 'Lào Cai', 'Lào Cai', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(450, 444, 'Mường Khương', 'Mường Khương', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(451, 444, 'Sa Pa', 'Sa Pa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(452, 444, 'Si Ma Cai', 'Si Ma Cai', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(453, 444, 'Văn Bàn', 'Văn Bàn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(454, 0, 'Long An', 'Long An', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(455, 454, 'Bến Lức', 'Bến Lức', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(456, 454, 'Cần Đước', 'Cần Đước', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(457, 454, 'Cần Giuộc', 'Cần Giuộc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(458, 454, 'Châu Thành', 'Châu Thành', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(459, 454, 'Đức Hòa', 'Đức Hòa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(460, 454, 'Đức Huệ', 'Đức Huệ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(461, 454, 'Kiến Tường', 'Kiến Tường', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(462, 454, 'Mộc Hóa', 'Mộc Hóa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(463, 454, 'Tân An', 'Tân An', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(464, 454, 'Tân Hưng', 'Tân Hưng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(465, 454, 'Tân Thạnh', 'Tân Thạnh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(466, 454, 'Tân Trụ', 'Tân Trụ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(467, 454, 'Thạnh Hóa', 'Thạnh Hóa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(468, 454, 'Thủ Thừa', 'Thủ Thừa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(469, 454, 'Vĩnh Hưng', 'Vĩnh Hưng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(470, 0, 'Nam Định', 'Nam Định', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(471, 470, 'Giao Thủy', 'Giao Thủy', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(472, 470, 'Hải Hậu', 'Hải Hậu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(473, 470, 'Mỹ Lộc', 'Mỹ Lộc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(474, 470, 'Nam Định', 'Nam Định', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(475, 470, 'Nam Trực', 'Nam Trực', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(476, 470, 'Nghĩa Hưng', 'Nghĩa Hưng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(477, 470, 'Trực Ninh', 'Trực Ninh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(478, 470, 'Vụ Bản', 'Vụ Bản', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(479, 470, 'Xuân Trường', 'Xuân Trường', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(480, 470, 'Ý Yên', 'Ý Yên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(481, 0, 'Nghệ An', 'Nghệ An', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(482, 481, 'Anh Sơn', 'Anh Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(483, 481, 'Con Cuông', 'Con Cuông', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(484, 481, 'Cửa Lò', 'Cửa Lò', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(485, 481, 'Diễn Châu', 'Diễn Châu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(486, 481, 'Đô Lương', 'Đô Lương', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(487, 481, 'Hưng Nguyên', 'Hưng Nguyên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(488, 481, 'Kỳ Sơn', 'Kỳ Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(489, 481, 'Nam Đàn', 'Nam Đàn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(490, 481, 'Nghi Lộc', 'Nghi Lộc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(491, 481, 'Nghĩa Đàn', 'Nghĩa Đàn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(492, 481, 'Quế Phong', 'Quế Phong', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(493, 481, 'Quỳnh Lưu', 'Quỳnh Lưu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(494, 481, 'Quỳ Châu', 'Quỳ Châu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(495, 481, 'Quỳ Hợp', 'Quỳ Hợp', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(496, 481, 'Tân Kỳ', 'Tân Kỳ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(497, 481, 'Thanh Chương', 'Thanh Chương', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(498, 481, 'Tương Dương', 'Tương Dương', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(499, 481, 'Vinh', 'Vinh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(500, 481, 'Yên Thành', 'Yên Thành', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(501, 481, 'Thái Hòa', 'Thái Hòa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(502, 0, 'Ninh Bình', 'Ninh Bình', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(503, 502, 'Gia Viễn', 'Gia Viễn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(504, 502, 'Hoa Lư', 'Hoa Lư', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(505, 502, 'Kim Sơn', 'Kim Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(506, 502, 'Nho Quan', 'Nho Quan', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(507, 502, 'Ninh Bình', 'Ninh Bình', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(508, 502, 'Tam Diệp', 'Tam Diệp', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(509, 502, 'Yên Khánh', 'Yên Khánh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(510, 502, 'Yên Mô', 'Yên Mô', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(511, 0, 'Ninh Thuận', 'Ninh Thuận', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(512, 511, 'Ninh Hải', 'Ninh Hải', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(513, 511, 'Ninh Phước', 'Ninh Phước', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(514, 511, 'Ninh Sơn', 'Ninh Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(515, 511, 'Phan Rang–Tháp Chàm', 'Phan Rang–Tháp Chàm', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(516, 511, 'Thuận Bắc', 'Thuận Bắc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(517, 511, 'Thuận Nam', 'Thuận Nam', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(518, 0, 'Phú Thọ', 'Phú Thọ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(519, 518, 'Cẩm Khê', 'Cẩm Khê', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(520, 518, 'Đoan Hùng', 'Đoan Hùng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(521, 518, 'Hạ Hòa', 'Hạ Hòa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(522, 518, 'Lâm Thao', 'Lâm Thao', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(523, 518, 'Phù Ninh', 'Phù Ninh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(524, 518, 'Phú Thọ', 'Phú Thọ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(525, 518, 'Tam Nông', 'Tam Nông', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(526, 518, 'Tân Sơn', 'Tân Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(527, 518, 'Thanh Ba', 'Thanh Ba', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(528, 518, 'Thanh Sơn', 'Thanh Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(529, 518, 'Thanh Thủy', 'Thanh Thủy', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(530, 518, 'Việt Trì', 'Việt Trì', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(531, 518, 'Yên Lập', 'Yên Lập', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(532, 0, 'Phú Yên', 'Phú Yên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(533, 532, 'Đông Hòa', 'Đông Hòa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(534, 532, 'Đồng Xuân', 'Đồng Xuân', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(535, 532, 'Phú Hòa', 'Phú Hòa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(536, 532, 'Sơn Hòa', 'Sơn Hòa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(537, 532, 'Sông Cầu', 'Sông Cầu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(538, 532, 'Sông Hinh', 'Sông Hinh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(539, 532, 'Tây Hòa', 'Tây Hòa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(540, 532, 'Tuy An', 'Tuy An', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(541, 532, 'Tuy Hòa', 'Tuy Hòa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(542, 0, 'Quảng Bình', 'Quảng Bình', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(543, 542, 'Bố Trạch', 'Bố Trạch', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(544, 542, 'Đồng Hới', 'Đồng Hới', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(545, 542, 'Lệ Thủy', 'Lệ Thủy', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(546, 542, 'Minh Hóa', 'Minh Hóa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(547, 542, 'Quảng Ninh', 'Quảng Ninh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(548, 542, 'Quảng Trạch', 'Quảng Trạch', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(549, 542, 'Tuyên Hóa', 'Tuyên Hóa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(550, 0, 'Quảng Nam', 'Quảng Nam', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(551, 550, 'Bắc Trà My', 'Bắc Trà My', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(552, 550, 'Đại Lộc', 'Đại Lộc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(553, 550, 'Điện Bàn', 'Điện Bàn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(554, 550, 'Đông Giang', 'Đông Giang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(555, 550, 'Duy Xuyên', 'Duy Xuyên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(556, 550, 'Hiệp Đức', 'Hiệp Đức', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(557, 550, 'Hội An', 'Hội An', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(558, 550, 'Nam Giang', 'Nam Giang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(559, 550, 'Nam Trà My', 'Nam Trà My', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(560, 550, 'Núi Thành', 'Núi Thành', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(561, 550, 'Phước Sơn', 'Phước Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(562, 550, 'Quế Sơn', 'Quế Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(563, 550, 'Tam Kỳ', 'Tam Kỳ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(564, 550, 'Tây Giang', 'Tây Giang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(565, 550, 'Thăng Bình', 'Thăng Bình', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(566, 550, 'Tiên Phước', 'Tiên Phước', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(567, 550, 'Nông Sơn', 'Nông Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(568, 0, 'Quảng Ngãi', 'Quảng Ngãi', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(569, 568, 'Ba Tơ', 'Ba Tơ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(570, 568, 'Bình Sơn', 'Bình Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(571, 568, 'Đức Phổ', 'Đức Phổ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(572, 568, 'Lý Sơn', 'Lý Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(573, 568, 'Minh Long', 'Minh Long', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(574, 568, 'Mộ Đức', 'Mộ Đức', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(575, 568, 'Nghĩa Hành', 'Nghĩa Hành', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(576, 568, 'Quảng Ngãi', 'Quảng Ngãi', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(577, 568, 'Sơn Hà', 'Sơn Hà', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(578, 568, 'Sơn Tây', 'Sơn Tây', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(579, 568, 'Sơn Tịnh', 'Sơn Tịnh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(580, 568, 'Tây Trà', 'Tây Trà', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(581, 568, 'Trà Bồng', 'Trà Bồng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(582, 568, 'Tư Nghĩa', 'Tư Nghĩa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(583, 0, 'Quảng Ninh', 'Quảng Ninh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(584, 583, 'Ba Chẽ', 'Ba Chẽ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(585, 583, 'Bình Liêu', 'Bình Liêu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(586, 583, 'Cẩm Phả', 'Cẩm Phả', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(587, 583, 'Cô Tô', 'Cô Tô', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(588, 583, 'Đầm Hà', 'Đầm Hà', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(589, 583, 'Đông Triều', 'Đông Triều', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(590, 583, 'Hạ Long', 'Hạ Long', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(591, 583, 'Hải Hà', 'Hải Hà', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(592, 583, 'Hoành Bồ', 'Hoành Bồ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(593, 583, 'Móng Cái', 'Móng Cái', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(594, 583, 'Tiên Yên', 'Tiên Yên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(595, 583, 'Uông Bí', 'Uông Bí', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(596, 583, 'Vân Đồn', 'Vân Đồn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(597, 583, 'Yên Hưng', 'Yên Hưng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(598, 0, 'Quảng Trị', 'Quảng Trị', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(599, 598, 'Cam Lộ', 'Cam Lộ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(600, 598, 'Cồn Cỏ', 'Cồn Cỏ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(601, 598, 'Đa Krông', 'Đa Krông', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(602, 598, 'Đông Hà', 'Đông Hà', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(603, 598, 'Gio Linh', 'Gio Linh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(604, 598, 'Hải Lăng', 'Hải Lăng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(605, 598, 'Hướng Hóa', 'Hướng Hóa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(606, 598, 'Quảng Trị', 'Quảng Trị', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(607, 598, 'Triệu Phong', 'Triệu Phong', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(608, 598, 'Vĩnh Linh', 'Vĩnh Linh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(609, 0, 'Sóc Trăng', 'Sóc Trăng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(610, 609, 'Châu Thành', 'Châu Thành', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(611, 609, 'Cù Lao Dung', 'Cù Lao Dung', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(612, 609, 'Kế Sách', 'Kế Sách', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(613, 609, 'Long Phú', 'Long Phú', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(614, 609, 'Mỹ Tú', 'Mỹ Tú', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(615, 609, 'Mỹ Xuyên', 'Mỹ Xuyên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(616, 609, 'Sóc Trăng', 'Sóc Trăng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(617, 609, 'Thạnh Trị', 'Thạnh Trị', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(618, 609, 'Vĩnh Châu', 'Vĩnh Châu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(619, 0, 'Sơn La', 'Sơn La', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(620, 619, 'Bắc Yên', 'Bắc Yên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(621, 619, 'Mai Sơn', 'Mai Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(622, 619, 'Mộc Châu', 'Mộc Châu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(623, 619, 'Mường La', 'Mường La', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(624, 619, 'Phù Yên', 'Phù Yên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(625, 619, 'Quỳnh Nhai', 'Quỳnh Nhai', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(626, 619, 'Sơn La', 'Sơn La', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(627, 619, 'Sông Mã', 'Sông Mã', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(628, 619, 'Sốp Cộp', 'Sốp Cộp', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(629, 619, 'Thuận Châu', 'Thuận Châu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(630, 619, 'Yên Châu', 'Yên Châu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(631, 0, 'Tây Ninh', 'Tây Ninh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(632, 631, 'Bến Cầu', 'Bến Cầu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(633, 631, 'Châu Thành', 'Châu Thành', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(634, 631, 'Dương Minh Châu', 'Dương Minh Châu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(635, 631, 'Gò Dầu', 'Gò Dầu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(636, 631, 'Hòa Thành', 'Hòa Thành', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(637, 631, 'Tân Biên', 'Tân Biên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(638, 631, 'Tân Châu', 'Tân Châu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(639, 631, 'Tây Ninh', 'Tây Ninh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(640, 631, 'Trảng Bàng', 'Trảng Bàng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(641, 0, 'Thái Bình', 'Thái Bình', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(642, 641, 'Đông Hưng', 'Đông Hưng', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(643, 641, 'Hưng Hà', 'Hưng Hà', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(644, 641, 'Kiến Xương', 'Kiến Xương', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(645, 641, 'Quỳnh Phụ', 'Quỳnh Phụ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(646, 641, 'Thái Bình', 'Thái Bình', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(647, 641, 'Thái Thụy', 'Thái Thụy', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(648, 641, 'Tiền Hải', 'Tiền Hải', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(649, 641, 'Vũ Thư', 'Vũ Thư', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(650, 0, 'Thái Nguyên', 'Thái Nguyên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(651, 650, 'Đại Từ', 'Đại Từ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(652, 650, 'Định Hóa', 'Định Hóa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(653, 650, 'Đồng Hỷ', 'Đồng Hỷ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(654, 650, 'Phổ Yên', 'Phổ Yên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(655, 650, 'Phú Bình', 'Phú Bình', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(656, 650, 'Phú Lương', 'Phú Lương', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(657, 650, 'Sông Công', 'Sông Công', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(658, 650, 'Thái Nguyên', 'Thái Nguyên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(659, 650, 'Võ Nhai', 'Võ Nhai', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(660, 0, 'Thanh Hóa', 'Thanh Hóa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(661, 660, 'Bá Thước', 'Bá Thước', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(662, 660, 'Bỉm Sơn', 'Bỉm Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(663, 660, 'Cẩm Thủy', 'Cẩm Thủy', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(664, 660, 'Đông Sơn', 'Đông Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(665, 660, 'Hà Trung', 'Hà Trung', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(666, 660, 'Hậu Lộc', 'Hậu Lộc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(667, 660, 'Hoằng Hóa', 'Hoằng Hóa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(668, 660, 'Lang Chánh', 'Lang Chánh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(669, 660, 'Mường Lát', 'Mường Lát', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(670, 660, 'Ngọc Lặc', 'Ngọc Lặc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(671, 660, 'Như Thanh', 'Như Thanh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(672, 660, 'Như Xuân', 'Như Xuân', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(673, 660, 'Nông Cống', 'Nông Cống', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(674, 660, 'Quan Hóa', 'Quan Hóa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(675, 660, 'Quan Sơn', 'Quan Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(676, 660, 'Quảng Xương', 'Quảng Xương', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(677, 660, 'Sầm Sơn', 'Sầm Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(678, 660, 'Thạch Thành', 'Thạch Thành', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(679, 660, 'Thanh Hóa', 'Thanh Hóa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(680, 660, 'Thiệu Hóa', 'Thiệu Hóa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(681, 660, 'Thọ Xuân', 'Thọ Xuân', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(682, 660, 'Thường Xuân', 'Thường Xuân', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(683, 660, 'Tĩnh Gia', 'Tĩnh Gia', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(684, 660, 'Triệu Sơn', 'Triệu Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(685, 660, 'Vĩnh Lộc', 'Vĩnh Lộc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(686, 660, 'Yên Định', 'Yên Định', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(687, 0, 'Thừa Thiên–Huế', 'Thừa Thiên–Huế', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(688, 687, 'A Lưới', 'A Lưới', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(689, 687, 'Huế', 'Huế', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(690, 687, 'Hương Thủy', 'Hương Thủy', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(691, 687, 'Hương Trà', 'Hương Trà', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(692, 687, 'Nam Đông', 'Nam Đông', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(693, 687, 'Phong Điền', 'Phong Điền', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(694, 687, 'Phú Lộc', 'Phú Lộc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(695, 687, 'Phú Vang', 'Phú Vang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(696, 687, 'Quảng Điền', 'Quảng Điền', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(697, 0, 'Tiền Giang', 'Tiền Giang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(698, 697, 'Cái Bè', 'Cái Bè', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(699, 697, 'Cai Lậy', 'Cai Lậy', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(700, 697, 'Châu Thành', 'Châu Thành', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(701, 697, 'Chợ Gạo', 'Chợ Gạo', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(702, 697, 'Gò Công', 'Gò Công', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(703, 697, 'Gò Công Dông', 'Gò Công Dông', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(704, 697, 'Gò Công Tây', 'Gò Công Tây', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(705, 697, 'Mỹ Tho', 'Mỹ Tho', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(706, 697, 'Tân Phước', 'Tân Phước', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(707, 0, 'Trà Vinh', 'Trà Vinh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(708, 707, 'Càng Long', 'Càng Long', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(709, 707, 'Cầu Kè', 'Cầu Kè', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(710, 707, 'Cầu Ngang', 'Cầu Ngang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(711, 707, 'Châu Thành', 'Châu Thành', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(712, 707, 'Duyên Hải', 'Duyên Hải', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(713, 707, 'Tiểu Cần', 'Tiểu Cần', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(714, 707, 'Trà Cú', 'Trà Cú', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(715, 707, 'Trà Vinh', 'Trà Vinh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(716, 0, 'Tuyên Quang', 'Tuyên Quang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(717, 716, 'Chiêm Hóa', 'Chiêm Hóa', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(718, 716, 'Hàm Yên', 'Hàm Yên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(719, 716, 'Nà Hang', 'Nà Hang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(720, 716, 'Sơn Dương', 'Sơn Dương', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(721, 716, 'Tuyên Quang', 'Tuyên Quang', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(722, 716, 'Yên Sơn', 'Yên Sơn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(723, 0, 'Vĩnh Long', 'Vĩnh Long', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(724, 723, 'Bình Minh', 'Bình Minh', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(725, 723, 'Bình Tân', 'Bình Tân', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(726, 723, 'Long Hồ', 'Long Hồ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(727, 723, 'Mang Thít', 'Mang Thít', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(728, 723, 'Tâm Bình', 'Tâm Bình', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(729, 723, 'Trà Ôn', 'Trà Ôn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(730, 723, 'Vĩnh Long', 'Vĩnh Long', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(731, 723, 'Vũng Liêm', 'Vũng Liêm', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(732, 0, 'Vĩnh Phúc', 'Vĩnh Phúc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(733, 732, 'Bình Xuyên', 'Bình Xuyên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(734, 732, 'Lập Thạch', 'Lập Thạch', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(735, 732, 'Phúc Yên', 'Phúc Yên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(736, 732, 'Tam Đảo', 'Tam Đảo', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(737, 732, 'Tam Dương', 'Tam Dương', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(738, 732, 'Vĩnh Tường', 'Vĩnh Tường', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(739, 732, 'Vĩnh Yên', 'Vĩnh Yên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(740, 732, 'Yên Lạc', 'Yên Lạc', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(741, 0, 'Yên Bái', 'Yên Bái', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(742, 741, 'Lục Yên', 'Lục Yên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(743, 741, 'Mù Cang Chải', 'Mù Cang Chải', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(744, 741, 'Nghĩa Lộ', 'Nghĩa Lộ', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(745, 741, 'Trạm Tấu', 'Trạm Tấu', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(746, 741, 'Trấn Yên', 'Trấn Yên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(747, 741, 'Văn Chấn', 'Văn Chấn', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(748, 741, 'Văn Yên', 'Văn Yên', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(749, 741, 'Yên Bái', 'Yên Bái', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL),
(750, 741, 'Yên Bình', 'Yên Bình', 'admin@gmail.com', 'admin@gmail.com', '2018-11-07 01:18:44', '2018-11-07 01:18:44', NULL);

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
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=751;

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
