-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 06, 2019 at 03:13 AM
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
  `url` varchar(255) NOT NULL,
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
(3, 3, NULL, 'Giới thiệu chương trình', 'gioi-thieu-chuong-trinh', NULL, '', '<p><strong>Chương tr&igrave;nh &ldquo;Mizuiku&rdquo;</strong> l&agrave; s&aacute;ng kiến tuy&ecirc;n truyền, gi&aacute;o dục &yacute; thức bảo vệ t&agrave;i nguy&ecirc;n nước cho học sinh bậc tiểu học được khởi xướng bởi Tập đo&agrave;n Suntory v&agrave; đ&atilde; triển khai th&agrave;nh c&ocirc;ng tại Nhật Bản từ năm 2004. Đến nay, Dự &aacute;n đ&atilde; thu h&uacute;t sự tham gia của tr&ecirc;n 127 ngh&igrave;n học sinh tiểu học v&agrave; phụ huynh, nhận được đ&aacute;nh gi&aacute; cao từ cộng đồng v&agrave; x&atilde; hội Nhật Bản. Trước thực tế c&oacute; tới 20% d&acirc;n số Việt Nam hiện chưa từng được tiếp cận với nguồn nước sạch. Trong đ&oacute;, nhiều v&ugrave;ng bị thiếu nước sạch trầm trọng như Bến Tre, Bắc Ninh v&agrave; ngay cả c&aacute;c th&agrave;nh phố lớn như H&agrave; Nội, TP.HCM &ndash; đặc biệt v&agrave;o m&ugrave;a kh&ocirc; (Thống k&ecirc; của Viện Y học Lao động v&agrave; Vệ sinh m&ocirc;i trường), Tập đo&agrave;n Suntory v&agrave; Suntory PepsiCo Việt Nam đ&atilde; triển khai chương tr&igrave;nh Mizuiku &ndash; Em y&ecirc;u nước sạch từ năm 2015 đến nay tại Việt Nam với mong muốn lan tỏa giải ph&aacute;p bền vững gi&uacute;p bảo vệ nguồn nước th&ocirc;ng qua việc cung cấp kiến thức bảo vệ nước sạch đến thế hệ tương lai của Việt Nam. Chương tr&igrave;nh &ldquo;Mizuiku &ndash; Em y&ecirc;u nước sạch&rdquo; hướng tới mục ti&ecirc;u n&acirc;ng cao nhận thức của c&aacute;c em học sinh tiểu học về vai tr&ograve; của t&agrave;i nguy&ecirc;n nước v&agrave; c&aacute;ch thức sử dụng hợp l&yacute; nguồn nước sạch, g&oacute;p phần bảo vệ nguồn nước v&agrave; rộng hơn l&agrave; m&ocirc;i trường sống xung quanh. Th&ocirc;ng qua phương ph&aacute;p gi&aacute;o dục lấy học sinh l&agrave;m trung t&acirc;m, chương tr&igrave;nh tạo ra kh&ocirc;ng gian s&aacute;ng tạo, cơ hội thực h&agrave;nh v&agrave; s&acirc;n chơi đa dạng cho c&aacute;c em nhỏ nhằm k&iacute;ch th&iacute;ch &oacute;c quan s&aacute;t, &yacute; tưởng v&agrave; h&agrave;nh động của c&aacute;c em để bảo vệ nguồn nước n&oacute;i ri&ecirc;ng v&agrave; m&ocirc;i trường n&oacute;i chung. Năm 2015-2016, chương tr&igrave;nh được triển khai th&iacute; điểm tại Huyện Thanh Oai v&agrave; Mỹ Đức, H&agrave; Nội, sau đ&oacute; mở rộng ra tỉnh Bắc Ninh v&agrave; Tp. Hồ Ch&iacute; Minh th&ocirc;ng qua sự phối hợp giữa Tập đo&agrave;n Suntory, C&ocirc;ng ty TNHH Nước giải kh&aacute;t Suntory PepsiCo Việt Nam v&agrave; 02 đối t&aacute;c chuy&ecirc;n về gi&aacute;o dục m&ocirc;i trường l&agrave; Trung t&acirc;m Sống v&agrave; Học tập v&igrave; M&ocirc;i trường &amp; Cộng đồng (Live &amp; Learn) v&agrave; Trung t&acirc;m Gi&aacute;o dục Sức khỏe &amp; Ph&aacute;t triển Cộng đồng Tương Lai (Trung t&acirc;m Tương Lai). Qua 3 năm triển khai, chương tr&igrave;nh đ&atilde; tổ chức hơn 660 lớp học cho gần 10.100 học sinh; 26 Ng&agrave;y hội nước cho hơn 11.600 học sinh v&agrave; gi&aacute;o vi&ecirc;n, 25 chuyến tham quan nh&agrave; m&aacute;y Suntory PepsiCo Việt Nam cho 2.500 học sinh v&agrave; gi&aacute;o vi&ecirc;n; x&acirc;y dựng, cải tạo cơ sở vật chất, hệ thống lọc nước tại 26 trường tiểu học tham gia chương tr&igrave;nh. H&agrave;ng ngh&igrave;n học sinh, thầy c&ocirc; gi&aacute;o v&agrave; người d&acirc;n tại c&aacute;c địa phương cũng được hưởng lợi từ hoạt động của chương tr&igrave;nh. Từ năm 2017, chương tr&igrave;nh bước sang giai đoạn ph&aacute;t triển mới với mối quan hệ hợp t&aacute;c chiến lược của Tập đo&agrave;n Suntory, c&ocirc;ng ty Nước Giải kh&aacute;t Suntory PepsiCo Việt Nam, Hội đồng Đội Trung ương, Trung Ương Hội Sinh vi&ecirc;n Việt Nam, sự hỗ trợ từ Bộ Gi&aacute;o dục &amp; Đ&agrave;o tạo c&ugrave;ng sự đồng h&agrave;nh về mặt chuy&ecirc;n m&ocirc;n của Trung t&acirc;m Live &amp; Learn v&agrave; Trung t&acirc;m Tương Lai. Với cơ sở đối t&aacute;c vững mạnh, chương tr&igrave;nh mong muốn đẩy mạnh hiệu quả của c&aacute;c hợp phần gi&aacute;o dục, hỗ trợ đồng thời mở rộng v&ugrave;ng thụ hưởng ra phạm vi to&agrave;n quốc. Chương tr&igrave;nh hi vọng hi vọng đ&oacute;ng g&oacute;p v&agrave;o sự ph&aacute;t triển t&acirc;m hồn v&agrave; thể chất của c&aacute;c em học sinh để g&oacute;p phần bảo tồn v&ograve;ng tuần ho&agrave;n nước cho thế hệ mai sau. Hoạt động chương tr&igrave;nh: Lễ Khởi động chương tr&igrave;nh Tổ chức tập huấn (TOT) cho gi&aacute;o vi&ecirc;n Tổng phụ tr&aacute;ch Đội, gi&aacute;o vi&ecirc;n chủ nhiệm khối 3-4 tại c&aacute;c trường được lựa chọn triển khai Chương tr&igrave;nh, bồi dưỡng kỹ năng dạy học th&iacute;ch hợp để thực hiện c&aacute;c hoạt động gi&aacute;o dục m&ocirc;i trường v&agrave; c&aacute;c hoạt động ngoại kh&oacute;a về chủ đề nước theo gi&aacute;o &aacute;n ri&ecirc;ng của chương tr&igrave;nh Mizuiku. Tổ chức giảng dạy cho học sinh khối 3, 4 c&aacute;c trường được lựa chọn triển khai chương tr&igrave;nh, gi&aacute;o dục m&ocirc;i trường về chủ đề nước theo gi&aacute;o &aacute;n của chương tr&igrave;nh Mizuiku, trong đ&oacute; mang đến cho c&aacute;c em học sinh kiến thức về c&aacute;c loại nước, v&ograve;ng tuần ho&agrave;n nước, vai tr&ograve; của nước trong cuộc sống, vấn đề của nước h&ocirc;m nay v&agrave; t&aacute;c động của những vấn đề nước đối với cuộc sống, x&acirc;y dựng th&oacute;i quen tiết kiệm nước, bảo vệ m&ocirc;i trường; thực h&agrave;nh th&iacute; nghiệm lọc nước v&agrave; nhiều b&agrave;i tập thực h&agrave;nh kh&aacute;c. C&aacute;c cuộc thi ph&aacute;t động tr&ecirc;n phạm vi to&agrave;n quốc theo chủ đề bảo vệ m&ocirc;i trường, bảo vệ nguồn nước. Ng&agrave;y hội Hiệp sĩ Nước sạch tổ chức tại c&aacute;c trường thụ hưởng Chương tr&igrave;nh với nội dung v&agrave; h&igrave;nh thức sinh động như tr&ograve; chơi tương t&aacute;c, t&igrave;m hiểu kiến thức về nước, thi h&ugrave;ng biện v&igrave; m&ocirc;i trường, thi s&aacute;ng kiến m&ocirc; h&igrave;nh bảo vệ m&ocirc;i trường. Tham quan nh&agrave; m&aacute;y Suntory PepsiCo Việt Nam cho học sinh khối 3, 4 c&aacute;c trường được lựa chọn triển khai chương tr&igrave;nh. Tại đ&acirc;y, c&aacute;c em được nghe giới thiệu về nh&agrave; m&aacute;y, quy tr&igrave;nh xử l&yacute; chất thải đạt chuẩn, tham quan d&acirc;y chuyền sản xuất, thực h&agrave;nh th&iacute; nghiệm lọc nước, l&agrave;m nước rửa ch&eacute;n tự nhi&ecirc;n. Hỗ trợ cơ sở vật chất nước sạch tại c&aacute;c trường được lựa chọn triển khai chương tr&igrave;nh, bao gồm những hạng mục hỗ trợ ph&ugrave; hợp để x&acirc;y dựng, lắp đặt hệ thống lọc nước RO, x&acirc;y dựng mới hoặc sửa chữa, n&acirc;ng cấp nh&agrave; vệ sinh cho học sinh, sơn tường c&ocirc;ng tr&igrave;nh, v.v&hellip; Ra mắt Website v&agrave; hệ thống học tập trực tuyến E-learning để gia tăng cơ hội tiếp cận của c&aacute;c em học sinh tr&ecirc;n to&agrave;n quốc đối với kiến thức bảo vệ nguồn nước v&agrave; c&aacute;c b&agrave;i giảng th&uacute; vị do chương tr&igrave;nh x&acirc;y dựng.</p>', 'program-introduction', 1, '', 0, 'vi', '2019-12-04 10:15:11', 1, '2019-12-05 04:45:48', 1, NULL, NULL),
(4, 3, NULL, '\"Mizuiku - I love clean water\" program introduction', 'mizuiku-i-love-clean-water-program introduction', NULL, '', '<p>Chương tr&igrave;nh &ldquo;Mizuiku&rdquo; l&agrave; s&aacute;ng kiến tuy&ecirc;n truyền, gi&aacute;o dục &yacute; thức bảo vệ t&agrave;i nguy&ecirc;n nước cho học sinh bậc tiểu học được khởi xướng bởi Tập đo&agrave;n Suntory v&agrave; đ&atilde; triển khai th&agrave;nh c&ocirc;ng tại Nhật Bản từ năm 2004. Đến nay, Dự &aacute;n đ&atilde; thu h&uacute;t sự tham gia của tr&ecirc;n 127 ngh&igrave;n học sinh tiểu học v&agrave; phụ huynh, nhận được đ&aacute;nh gi&aacute; cao từ cộng đồng v&agrave; x&atilde; hội Nhật Bản. Trước thực tế c&oacute; tới 20% d&acirc;n số Việt Nam hiện chưa từng được tiếp cận với nguồn nước sạch. Trong đ&oacute;, nhiều v&ugrave;ng bị thiếu nước sạch trầm trọng như Bến Tre, Bắc Ninh v&agrave; ngay cả c&aacute;c th&agrave;nh phố lớn như H&agrave; Nội, TP.HCM &ndash; đặc biệt v&agrave;o m&ugrave;a kh&ocirc; (Thống k&ecirc; của Viện Y học Lao động v&agrave; Vệ sinh m&ocirc;i trường), Tập đo&agrave;n Suntory v&agrave; Suntory PepsiCo Việt Nam đ&atilde; triển khai chương tr&igrave;nh Mizuiku &ndash; Em y&ecirc;u nước sạch từ năm 2015 đến nay tại Việt Nam với mong muốn lan tỏa giải ph&aacute;p bền vững gi&uacute;p bảo vệ nguồn nước th&ocirc;ng qua việc cung cấp kiến thức bảo vệ nước sạch đến thế hệ tương lai của Việt Nam. Chương tr&igrave;nh &ldquo;Mizuiku &ndash; Em y&ecirc;u nước sạch&rdquo; hướng tới mục ti&ecirc;u n&acirc;ng cao nhận thức của c&aacute;c em học sinh tiểu học về vai tr&ograve; của t&agrave;i nguy&ecirc;n nước v&agrave; c&aacute;ch thức sử dụng hợp l&yacute; nguồn nước sạch, g&oacute;p phần bảo vệ nguồn nước v&agrave; rộng hơn l&agrave; m&ocirc;i trường sống xung quanh. Th&ocirc;ng qua phương ph&aacute;p gi&aacute;o dục lấy học sinh l&agrave;m trung t&acirc;m, chương tr&igrave;nh tạo ra kh&ocirc;ng gian s&aacute;ng tạo, cơ hội thực h&agrave;nh v&agrave; s&acirc;n chơi đa dạng cho c&aacute;c em nhỏ nhằm k&iacute;ch th&iacute;ch &oacute;c quan s&aacute;t, &yacute; tưởng v&agrave; h&agrave;nh động của c&aacute;c em để bảo vệ nguồn nước n&oacute;i ri&ecirc;ng v&agrave; m&ocirc;i trường n&oacute;i chung. Năm 2015-2016, chương tr&igrave;nh được triển khai th&iacute; điểm tại Huyện Thanh Oai v&agrave; Mỹ Đức, H&agrave; Nội, sau đ&oacute; mở rộng ra tỉnh Bắc Ninh v&agrave; Tp. Hồ Ch&iacute; Minh th&ocirc;ng qua sự phối hợp giữa Tập đo&agrave;n Suntory, C&ocirc;ng ty TNHH Nước giải kh&aacute;t Suntory PepsiCo Việt Nam v&agrave; 02 đối t&aacute;c chuy&ecirc;n về gi&aacute;o dục m&ocirc;i trường l&agrave; Trung t&acirc;m Sống v&agrave; Học tập v&igrave; M&ocirc;i trường &amp; Cộng đồng (Live &amp; Learn) v&agrave; Trung t&acirc;m Gi&aacute;o dục Sức khỏe &amp; Ph&aacute;t triển Cộng đồng Tương Lai (Trung t&acirc;m Tương Lai). Qua 3 năm triển khai, chương tr&igrave;nh đ&atilde; tổ chức hơn 660 lớp học cho gần 10.100 học sinh; 26 Ng&agrave;y hội nước cho hơn 11.600 học sinh v&agrave; gi&aacute;o vi&ecirc;n, 25 chuyến tham quan nh&agrave; m&aacute;y Suntory PepsiCo Việt Nam cho 2.500 học sinh v&agrave; gi&aacute;o vi&ecirc;n; x&acirc;y dựng, cải tạo cơ sở vật chất, hệ thống lọc nước tại 26 trường tiểu học tham gia chương tr&igrave;nh. H&agrave;ng ngh&igrave;n học sinh, thầy c&ocirc; gi&aacute;o v&agrave; người d&acirc;n tại c&aacute;c địa phương cũng được hưởng lợi từ hoạt động của chương tr&igrave;nh. Từ năm 2017, chương tr&igrave;nh bước sang giai đoạn ph&aacute;t triển mới với mối quan hệ hợp t&aacute;c chiến lược của Tập đo&agrave;n Suntory, c&ocirc;ng ty Nước Giải kh&aacute;t Suntory PepsiCo Việt Nam, Hội đồng Đội Trung ương, Trung Ương Hội Sinh vi&ecirc;n Việt Nam, sự hỗ trợ từ Bộ Gi&aacute;o dục &amp; Đ&agrave;o tạo c&ugrave;ng sự đồng h&agrave;nh về mặt chuy&ecirc;n m&ocirc;n của Trung t&acirc;m Live &amp; Learn v&agrave; Trung t&acirc;m Tương Lai. Với cơ sở đối t&aacute;c vững mạnh, chương tr&igrave;nh mong muốn đẩy mạnh hiệu quả của c&aacute;c hợp phần gi&aacute;o dục, hỗ trợ đồng thời mở rộng v&ugrave;ng thụ hưởng ra phạm vi to&agrave;n quốc. Chương tr&igrave;nh hi vọng hi vọng đ&oacute;ng g&oacute;p v&agrave;o sự ph&aacute;t triển t&acirc;m hồn v&agrave; thể chất của c&aacute;c em học sinh để g&oacute;p phần bảo tồn v&ograve;ng tuần ho&agrave;n nước cho thế hệ mai sau. Hoạt động chương tr&igrave;nh: Lễ Khởi động chương tr&igrave;nh Tổ chức tập huấn (TOT) cho gi&aacute;o vi&ecirc;n Tổng phụ tr&aacute;ch Đội, gi&aacute;o vi&ecirc;n chủ nhiệm khối 3-4 tại c&aacute;c trường được lựa chọn triển khai Chương tr&igrave;nh, bồi dưỡng kỹ năng dạy học th&iacute;ch hợp để thực hiện c&aacute;c hoạt động gi&aacute;o dục m&ocirc;i trường v&agrave; c&aacute;c hoạt động ngoại kh&oacute;a về chủ đề nước theo gi&aacute;o &aacute;n ri&ecirc;ng của chương tr&igrave;nh Mizuiku. Tổ chức giảng dạy cho học sinh khối 3, 4 c&aacute;c trường được lựa chọn triển khai chương tr&igrave;nh, gi&aacute;o dục m&ocirc;i trường về chủ đề nước theo gi&aacute;o &aacute;n của chương tr&igrave;nh Mizuiku, trong đ&oacute; mang đến cho c&aacute;c em học sinh kiến thức về c&aacute;c loại nước, v&ograve;ng tuần ho&agrave;n nước, vai tr&ograve; của nước trong cuộc sống, vấn đề của nước h&ocirc;m nay v&agrave; t&aacute;c động của những vấn đề nước đối với cuộc sống, x&acirc;y dựng th&oacute;i quen tiết kiệm nước, bảo vệ m&ocirc;i trường; thực h&agrave;nh th&iacute; nghiệm lọc nước v&agrave; nhiều b&agrave;i tập thực h&agrave;nh kh&aacute;c. C&aacute;c cuộc thi ph&aacute;t động tr&ecirc;n phạm vi to&agrave;n quốc theo chủ đề bảo vệ m&ocirc;i trường, bảo vệ nguồn nước. Ng&agrave;y hội Hiệp sĩ Nước sạch tổ chức tại c&aacute;c trường thụ hưởng Chương tr&igrave;nh với nội dung v&agrave; h&igrave;nh thức sinh động như tr&ograve; chơi tương t&aacute;c, t&igrave;m hiểu kiến thức về nước, thi h&ugrave;ng biện v&igrave; m&ocirc;i trường, thi s&aacute;ng kiến m&ocirc; h&igrave;nh bảo vệ m&ocirc;i trường. Tham quan nh&agrave; m&aacute;y Suntory PepsiCo Việt Nam cho học sinh khối 3, 4 c&aacute;c trường được lựa chọn triển khai chương tr&igrave;nh. Tại đ&acirc;y, c&aacute;c em được nghe giới thiệu về nh&agrave; m&aacute;y, quy tr&igrave;nh xử l&yacute; chất thải đạt chuẩn, tham quan d&acirc;y chuyền sản xuất, thực h&agrave;nh th&iacute; nghiệm lọc nước, l&agrave;m nước rửa ch&eacute;n tự nhi&ecirc;n. Hỗ trợ cơ sở vật chất nước sạch tại c&aacute;c trường được lựa chọn triển khai chương tr&igrave;nh, bao gồm những hạng mục hỗ trợ ph&ugrave; hợp để x&acirc;y dựng, lắp đặt hệ thống lọc nước RO, x&acirc;y dựng mới hoặc sửa chữa, n&acirc;ng cấp nh&agrave; vệ sinh cho học sinh, sơn tường c&ocirc;ng tr&igrave;nh, v.v&hellip; Ra mắt Website v&agrave; hệ thống học tập trực tuyến E-learning để gia tăng cơ hội tiếp cận của c&aacute;c em học sinh tr&ecirc;n to&agrave;n quốc đối với kiến thức bảo vệ nguồn nước v&agrave; c&aacute;c b&agrave;i giảng th&uacute; vị do chương tr&igrave;nh x&acirc;y dựng.</p>', 'program-introduction', 1, '', 0, 'en', '2019-12-04 10:15:11', 1, '2019-12-05 04:46:53', 1, NULL, NULL);

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
(4, 2, NULL, 'news', 'Program news', 'program-news', 0, 'en', 1, '2019-12-04 02:27:39', '2019-12-04 02:27:39', NULL, 1, 1, NULL);

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
-- Table structure for table `programs_timeline`
--

CREATE TABLE `programs_timeline` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID',
  `ref_id` int(10) UNSIGNED DEFAULT NULL,
  `title` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `month` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `language` varchar(10) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_user_id` int(10) UNSIGNED NOT NULL COMMENT 'Created User ID',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'Updated At',
  `updated_user_id` int(10) UNSIGNED NOT NULL COMMENT 'Updated User ID',
  `deleted_at` datetime DEFAULT NULL COMMENT 'Deleted At',
  `deleted_user_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'Deleted User ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `programs_timeline`
--
ALTER TABLE `programs_timeline`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `programs_timeline`
--
ALTER TABLE `programs_timeline`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID';

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
  ADD CONSTRAINT `articles_ibfk_3` FOREIGN KEY (`deleted_user_id`) REFERENCES `users` (`id`);
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
