-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2016 at 04:16 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ql_film`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `id_actor` int(11) NOT NULL,
  `actor_name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `sex` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`id_actor`, `actor_name`, `img`, `sex`) VALUES
(1, 'Ryan Reynolds', 'Ryan-Reynolds.jpg', 0),
(2, 'Ed Skrein', 'ES.jpg', 0),
(3, 'Robert John Downey.Jr', 'robert-downey-jr.jpg', 0),
(4, 'Chris Evans', 'chris-evans.jpg', 0),
(5, 'Scarlett Johansson', 'scarlett.jpg', 1),
(6, 'Josh Helman', 'JOSH HELMAN.jpg', 0),
(7, 'Nicholas Hoult', 'nicholas-hoult.jpg', 0),
(8, 'Tyler Posey', 'Tyler_Posey.jpg', 0),
(9, 'Dylan O''brien', 'Dylan-O-Brien-dylan-obrien.jpg', 0),
(10, 'Crystal Reed', 'crystal-reed.jpg', 1),
(11, 'Holland Roden', 'HOLLAND-RODEN.jpg', 1),
(12, 'Tyler Hoechlin', 'Dark_side.jpg', 0),
(13, 'Melisa Ponzio', 'MELISSA PONZIO.jpg', 1),
(14, 'Seth Gilliam', 'seth-gilliam.jpg', 0),
(15, 'Jr Bourne', 'JR.jpg', 0),
(16, 'Lâm Canh Tân', 'Lam-Canh-Tan.jpg', 0),
(17, 'Yoona', 'yoona.jpg', 1),
(18, 'Triệu Hựu Đình', '1334765754-cvv_ls_eva1.jpg', 0),
(19, 'Yan Tang', '574full-yan-tang.jpg', 1),
(20, 'Qingxiang Wang', 'full-sex.jpg', 0),
(21, 'Chen Yao', 'full-sex.jpg', 1),
(22, 'Vin Diesel', 'a.jpg', 0),
(23, 'Rose Leslie', 'rose_leslie.jpg', 1),
(24, 'Elijah Wood', 'Elijah-Wood-Interview-Video.jpg', 0),
(25, 'Rena Owen', '252full-rena-owen.jpg', 1),
(26, 'Sloane Coombs', 'MV5BMzQ1NDMxNzg4Nl5BMl5BanBnXkFtZTgwNzQ4MzExMzE@._V1_SX640_SY720_.jpg', 1),
(27, 'Lotte Verbeek', 'Lotte+Verbeek+Choker+Necklace+Diamond+Choker+x3OuD7rERd6l.jpg', 1),
(28, 'Rachael Harris', 'Rachael+Harris+63rd+Primetime+Emmy+Awards+f_Jz7MNxmUul.jpg', 1),
(29, 'Tom Ellis', '505307072.jpg', 0),
(30, 'Scarlett Estevez', 'ScarlettE.jpg', 1),
(31, 'Jonathan Salisb', 'MV5BMTgwNzIzNjg0NF5BMl5BanBnXkFtZTcwNjk0MjMyNw@@._V1_.jpg', 0),
(32, 'Matt Corboy', 'MV5BMTIwNzk3NzY5OF5BMl5BanBnXkFtZTYwNTc2OTgy._V1_SX640_SY720_.jpg', 0),
(33, 'Ryan O''leary', 'full-sex.jpg', 0),
(34, 'Kristen Bitting', 'MV5BMTQ1Mzg1MTQ3Nl5BMl5BanBnXkFtZTcwMTg3MDQzOQ@@._V1_SX640_SY720_.jpg', 1),
(35, 'Anthony Muniz', 'full-sex.jpg', 0),
(36, 'Jordan Cockera', 'full-sex.jpg', 0),
(37, 'Will Arnett', 'will-arnett-picture-3.jpg', 0),
(38, 'Brendan Fraser', 'Brendan_Fraser.jpg', 0),
(39, 'Liam Neeson', 'Liam_Neeson.jpg', 0),
(40, 'Hồ Ca', 'medium.jpg', 0),
(41, 'Hoàng Duy Đức', 'U5912P28T3D4057723F329DT20131210101121.jpg', 0),
(42, 'Vương Khải', 'vuong-khai.jpg', 0),
(43, 'Lưu Đào', 'luu-dao-dep-ngay-ngat-tren-bia-tap-chi.jpg', 1),
(44, 'Trương Thiết Lâm', 'full-sex.jpg', 0),
(45, 'Hoàng Dịch', 'full-sex.jpg', 1),
(46, 'Lí Giai Lân', 'full-sex.jpg', 0),
(47, 'Nhiếp Viễn', 'full-sex.jpg', 0),
(48, 'Sư Tiểu Hồng', 'full-sex.jpg', 0),
(49, 'Jack Black', 'c20f69f3d594.jpg', 0),
(50, 'Angelina Jolie', 'as.jpg', 1),
(51, 'Thành Long', 'thanh-long.jpg', 0),
(52, 'Lucy Liu', 'Lucy_Liu_2011.jpg', 1),
(53, 'Junko Takeuchi', 'full-sex.jpg', 1),
(54, 'Chie Nakamura', 'full-sex.jpg', 1),
(55, 'Kazuhiko Inoue', 'full-sex.jpg', 1),
(56, 'Masako Katsuki', 'full-sex.jpg', 1),
(57, 'Thư Kỳ', 'ss.jpg', 1),
(58, 'Caitlin Dechelle', 'photo.jpg', 1),
(59, 'Emilie Guillot', 'MV5BMTQyNDQ5NjEzMV5BMl5BanBnXkFtZTcwNjg1MDkxOA@@._V1_SX640_SY720_.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `assess`
--

CREATE TABLE `assess` (
  `id_film` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assess`
--

INSERT INTO `assess` (`id_film`, `id_user`, `point`) VALUES
(4, 1, 4),
(4, 2, 4),
(19, 1, 4),
(48, 1, 10),
(48, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_cmt` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `content` varchar(1000) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_cmt`, `id_user`, `id_film`, `datetime`, `content`, `state`) VALUES
(2, 1, 20, '2016-05-21 11:14:08', 'ac', 2),
(3, 3, 22, '2016-05-23 11:22:52', 'Phim zì mak dở! -_-', 1),
(4, 2, 23, '2016-05-26 01:15:06', 'Chuẩn ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `id_director` int(11) NOT NULL,
  `director_name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`id_director`, `director_name`, `img`) VALUES
(6, 'Hayato Dat', 'full-sex.jpg'),
(11, 'Jennifer Yuh', 'full-sex.jpg'),
(12, 'Yuefeng Song', 'full-sex.jpg'),
(13, 'Dean DeBlois', 'full-sex.jpg'),
(14, 'Genndy Tartakovsky', 'full-sex.jpg'),
(15, 'Eiichiro ODA', 'full-sex.jpg'),
(16, 'Alessandro Carloni', 'full-sex.jpg'),
(17, 'Tim Miller', 'full-sex.jpg'),
(18, 'George Miller', 'george-miller.jpg'),
(19, 'Đinh Ngưỡng Quốc', 'full-sex.jpg'),
(20, 'Chuan Lu', 'full-sex.jpg'),
(21, 'Breck Eisner', 'full-sex.jpg'),
(22, 'Len Wiseman', 'full-sex.jpg'),
(23, 'Peter Lepeniotis', 'full-sex.jpg'),
(24, 'Lý Tuyết Nguyên', 'full-sex.jpg'),
(25, 'Khổng Sanh', 'full-sex.jpg'),
(26, 'Trương Tử Ân', 'full-sex.jpg'),
(27, 'Kishimoto Masashi', 'full-sex.jpg'),
(28, 'Thành Long', 'thanh-long.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `episode`
--

CREATE TABLE `episode` (
  `id_episode` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `url1` varchar(255) NOT NULL,
  `url2` varchar(255) NOT NULL,
  `datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `episode`
--

INSERT INTO `episode` (`id_episode`, `id_film`, `name`, `url1`, `url2`, `datetime`) VALUES
(1, 4, 5, 'https://www.youtube.com/embed/pVJKsr822h8', '', '2016-03-23'),
(2, 4, 1, 'https://www.youtube.com/embed/N_pljrbHrJs', '', '2016-03-24'),
(3, 4, 2, 'https://www.youtube.com/embed/9601vRtev1s', '', '2016-03-24'),
(4, 4, 3, 'https://www.youtube.com/embed/JAQFhI3YX4Q', '', '2016-03-24'),
(5, 9, 1, 'https://www.youtube.com/embed/sF9-AHWCeU8', '', '2016-03-24'),
(6, 12, 1, 'https://www.youtube.com/embed/q2A7fZsy4xQ', '', '2016-03-24'),
(8, 5, 2, 'https://www.youtube.com/embed/2wOnr4ko0yA', '', '2016-03-24'),
(9, 5, 3, 'https://www.youtube.com/embed/t1KeHIVhnrk', '', '2016-03-24'),
(10, 5, 6, 'https://www.youtube.com/embed/0-cVphK5kh4', '', '2016-03-24'),
(12, 16, 1, 'https://www.youtube.com/embed/h0iA7HPRUGU', '', '2016-03-24'),
(13, 18, 1, 'https://www.youtube.com/embed/d6Oux8FVNY4', 'https://www.youtube.com/embed/d6Oux8FVNY4', '2016-05-18'),
(14, 20, 1, 'https://www.youtube.com/embed/2ISWs5rB1q4', '', '2016-05-18'),
(15, 22, 1, 'https://www.youtube.com/embed/lVGq-d5M2yQ', 'https://www.youtube.com/embed/sadQRLf4VhI', '2016-05-23'),
(16, 22, 2, 'https://www.youtube.com/embed/FIyH7XDSigw', '', '2016-05-23'),
(17, 22, 3, 'https://www.youtube.com/embed/F-juRLJ8X-U', 'https://www.youtube.com/embed/c6h2FJXD-0o', '2016-05-23'),
(18, 22, 4, 'https://www.youtube.com/embed/mKX4-9ccnhk', '', '2016-05-18'),
(19, 22, 5, 'https://www.youtube.com/embed/mfYnja5_WAE', '', '2016-05-18'),
(20, 22, 6, 'https://www.youtube.com/embed/LhHLdTS33G8', '', '2016-05-18'),
(21, 22, 7, 'https://www.youtube.com/embed/va8iad3G5_Q', '', '2016-05-18'),
(22, 22, 8, 'https://www.youtube.com/embed/sLt0nvNmXzY', '', '2016-05-18'),
(23, 22, 9, 'https://www.youtube.com/embed/Ec2WzbOm6zc', '', '2016-05-18'),
(24, 22, 10, 'https://www.youtube.com/embed/lJ22XmHFeIU', '', '2016-05-18'),
(25, 23, 1, 'https://www.youtube.com/embed/zihtDY0ce-4', 'https://www.youtube.com/embed/UmmxCbjMn5I', '2016-05-21'),
(26, 48, 1, 'https://www.youtube.com/embed/whGHkn737uw', '', '2016-05-26'),
(27, 48, 2, 'https://www.youtube.com/embed/8J3zv8ccjZ4', '', '2016-05-26'),
(28, 48, 3, 'https://www.youtube.com/embed/IjYiJJKovq8', '', '2016-05-26'),
(29, 48, 4, 'https://www.youtube.com/embed/89bLjXYDh-I', '', '2016-05-26'),
(30, 48, 5, 'https://www.youtube.com/embed/roCpRDU2GMk', '', '2016-05-26'),
(31, 48, 6, 'https://www.youtube.com/embed/jA-OkJSlWCA', '', '2016-05-26'),
(32, 48, 7, 'https://www.youtube.com/embed/XVJIgh-JCGE', '', '2016-05-26'),
(33, 48, 8, 'https://www.youtube.com/embed/aVXXzFHDaLc', '', '2016-05-26'),
(34, 48, 9, 'https://www.youtube.com/embed/UwrfGQx45uw', '', '2016-05-26'),
(35, 48, 10, 'https://www.youtube.com/embed/XBHcnDVJB9g', '', '2016-05-26'),
(36, 48, 11, 'https://www.youtube.com/embed/6ahe64EdSSg', '', '2016-05-26'),
(37, 49, 1, 'https://www.youtube.com/embed/5T_YpJkF-58', '', '2016-05-26'),
(38, 49, 2, 'https://www.youtube.com/embed/PE2t3H4SzKQ', '', '2016-05-26'),
(39, 49, 3, 'https://www.youtube.com/embed/mXoPWF_85mU', '', '2016-05-26'),
(40, 49, 4, 'https://www.youtube.com/embed/T4IbSxZETXA', '', '2016-05-26'),
(41, 49, 5, 'https://www.youtube.com/embed/ePfyHeE775g', '', '2016-05-26'),
(42, 49, 6, 'https://www.youtube.com/embed/TA6ZY8Bho0k', '', '2016-05-26'),
(43, 49, 7, 'https://www.youtube.com/embed/_3xfOY7bGvc', '', '2016-05-26'),
(44, 49, 8, 'https://www.youtube.com/embed/3ZSebI_GimI', '', '2016-05-26'),
(45, 49, 9, 'https://www.youtube.com/embed/WrAbvcx1NGw', '', '2016-05-26'),
(46, 49, 10, 'https://www.youtube.com/embed/Dll0zXgBKp4', '', '2016-05-26'),
(47, 49, 11, 'https://www.youtube.com/embed/1X_rBT9mnGQ', '', '2016-05-26'),
(48, 49, 12, 'https://www.youtube.com/embed/wYtCw-uNcmw', '', '2016-05-26'),
(49, 49, 13, 'https://www.youtube.com/embed/FpX5JqVam8M', '', '2016-05-26'),
(50, 49, 14, 'https://www.youtube.com/embed/MJWQ7VCwG_Y', '', '2016-05-26'),
(51, 49, 15, 'https://www.youtube.com/embed/j4iQdiqLk6Q', '', '2016-05-26'),
(52, 49, 16, 'ttps://www.youtube.com/embed/J_DnvPj2B3s', '', '2016-05-26'),
(53, 49, 17, 'https://www.youtube.com/embed/GmOy_nupkfc', '', '2016-05-26'),
(54, 49, 18, 'https://www.youtube.com/embed/BxHk4Z3NJik', '', '2016-05-26'),
(55, 49, 19, 'https://www.youtube.com/embed/h-9PnHLY4bU', '', '2016-05-26'),
(56, 49, 20, 'https://www.youtube.com/embed/gc2gRiQgDwg', '', '2016-05-26'),
(57, 50, 1, 'https://www.youtube.com/embed/wDBOlYriJHk', '', '2016-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `film_name` varchar(255) NOT NULL,
  `img` varchar(1000) DEFAULT NULL,
  `description` varchar(10000) NOT NULL,
  `total_episode` int(11) NOT NULL,
  `length_movies` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `update_day` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `total_viewer` int(11) NOT NULL,
  `total_Assess` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `film_name`, `img`, `description`, `total_episode`, `length_movies`, `year`, `country`, `update_day`, `status`, `total_viewer`, `total_Assess`) VALUES
(4, 'NARUTO SHIPPUDEN', 'naruto-shippuuden-3.jpg', 'Nhân vật chính là Uzumaki Naruto, một thiếu niên ồn ào, hiếu động, một ninja luôn muốn tìm cách khẳng định mình để được mọi người công nhận, rất muốn trở thành Hokage (Hỏa ảnh) - người lãnh đạo ninja cả làng, được tất cả mọi người kính trọng.\r\n\r\n12 năm trước, hồ ly 9 đuôi tấn công làng ninja Mộc Diệp, Hokage Đệ Tứ đã đánh bại và phong ấn vào cậu bé Naruto.Từ đó, Naruto bị mọi người xa lánh, vậy nên cậu tìm ra cách được thừa nhận và chú ý duy nhất – qua các trò phá phách và nghịch ngợm.Câu chuyện chính bám theo sự trưởng thành và tiến bộ của Naruto và bạn cậu khi làm ninja, và nhấn mạnh mối quan hệ giữa họ và sự ảnh hưởng của quá khứ đến tính cách họ. Naruto tìm được hai người bạn đồng hành cùng là Uchiha Sasuke và Haruno Sakura, cuộc phiêu lưu bắt đầu.\r\n\r\nMười hai năm trước khi bộ truyện này bắt đầu, con Hồ Ly Chín Đuôi đã tấn công ngôi làng ninja Mộc Diệp (Nhật: 木ノ葉隠れ Konohagakure?). Đủ sức mạnh để khiến sóng thần nổi dậy và san bằng núi non chỉ với một trong số chín cái đuôi của n', 1001, '24', '2012', 'Nhật Bản', '2016-05-30', 'Đang cập nhật', 130, 0),
(5, 'VUA HẢI TẶC HẢI TẶC MŨ RƠM', 'vua-hai-tac.png', 'Monkey D. Luffy, 1 cậu bé rất thích hải tặc có ước mơ tìm được kho báu One Piece và trở thành Vua hải tặc - Pirate King. Lúc nhỏ, Luffy tình cờ ăn phải trái quỉ (Devil Fruit) Gomu Gomu, nó cho cơ thể cậu khả năng co dãn đàn hồi như cao su nhưng đổi lại cậu sẽ không bao giờ biết bơi. Sau đó Luffy lại được Shanks cứu thoát tuy nhiên ông ta bị mất 1 cánh tay. Sau đấy Shanks chia tay Luffy và để lại cho cậu cái mũ rơm (Straw Hat) và nói rằng: "Sau này bao giờ thành cướp biển hãy gặp ta và trả lại nó". Chính lời nói này đã thúc đầy Luffy trở thành 1 cướp biển thật sự.', 1000, '25', '2009', 'Nhật Bản', '2016-02-26', 'Đang Cập nhật', 20, 0),
(6, 'KUNG FU PANDA 3', 'kung-fu-panda-3.jpg', 'Năm 2016 tới đây, một trong những series phim hoạt hình ăn khách nhất thế giới sẽ trở lại màn ảnh – KUNG FU PANDA 3. Xuất hiện lần đầu vào năm 2008, KUNG FU PANDA đã nhanh chóng trở thành hiện tượng phòng vé toàn cầu với cuộc phiêu lưu hài hước và những màn võ thuật điêu luyện của Gấu Trúc Po.Khán giả yêu thích bộ phim sẽ không còn phải chờ lâu để được gặp gỡ Po và những người bạn của cậu nữa. Một chi tiết vô cùng quan trọng về thách thức lớn nhất mà Po gặp phải trong chuyến đi sắp tới. Đó là hình ảnh ông Lý Sơn – cha đẻ của Po cùng đoạn hội thoại gây nhiều cảm xúc đến khán giả giữa 2 cha con.\r\n\r\nJack Black – diễn viên lồng tiếng nhân vật Po vui vẻ chia sẻ về “người cha” của mình rằng: “Lý Sơn là bậc thầy của sự “hài hước”. Ông rất vui tính và có khả năng mang lại niềm vui cho những người xung quanh. Ông là một người cha đáng mơ ước.”\r\n\r\nỞ loạt hình tung ra lần này, khán giả còn được “chiêm ngưỡng” một cô nàng gấu trúc mũm mĩm lần đầu xuất hiện trong loạt phim KUNG FU PANDA với tên gọi đáng yêu: Mei Mei. Nhân vật vũ công múa lụa đầy tham vọng này do nữ diễn viên Rebel Wilson (“Pitch Perfect 2”)  lồng tiếng.\r\n\r\nPhần 3 của bộ phim tiếp tục được đạo diễn bởi Jennifer Yuh Nelson cùng sự trở lại của dàn sao lồng tiếng “đình đám”: Jack Black, Angelina Jolie, Jackie Chan, Gary Oldman, Dustin Hoffman, David Cross… Đây đều là những người đã tạo nên hiện tượng KUNG FU PANDA  vào năm 2008 và 2011. Cả hai phần đầu của series này đều được đề cử giải Oscar ở hạng mục Phim hoạt hình xuất sắc nhất và thu về khoảng 1,3 tỷ USD trên toàn cầu.', 1, '95', '2016', 'Mỹ', '2016-05-20', 'Trailer', 41, 1),
(7, 'Hotel Transylvania 2(2015)', 'hotel-transylvania.jpg', 'Khán giả gặp lại những nhân vật quen thuộc trong bộ phim như Dracula (Adam Sandler), Mavis (Selena Gomez), Jonathan (Andy Samberg), Frank (Kevin James), Wayne Werewolf (Steve Buscemi) và Murray the Mummy (Keegan Michael Key). Tất cả họ đang quậy tưng bừng trong một bữa tiệc do Dracula tổ chức. Vlad, người cha già cáu kỉnh của Dracula.\r\n\r\nNhân vật này do huyền thoại hài kịch Mel Brooks tham gia lồng tiếng. Vlad xuất hiện tại thành phố sau nhiều năm vắng mặt và cảm thấy vô cùng kỳ lạ khi con trai mình đang điều hành một khách sạn. Hotel Transylvania 2 tập trung vào mối quan hệ gia đình khi ma cà rồng cổ Vlad, cha của Dracula, đến thị trấn lần đầu tiên sau nhiều năm ở ẩn, mang theo một số bí mật. Chuyến thăm của Vlad tạo ra sự tàn phá kinh hoàng cho Dracula, Mavis, Jonathan và các quý khách “ma quỷ” tại khách sạn Transylvania.', 1, '89', '2015', 'Mỹ', '2016-02-26', 'Bản HD', 19, 1),
(8, 'Frozen', 'frozen2.jpg', 'Sở hữu năng lực bí ẩn được truyền lại từ tổ tiên, công chúa Elsa sống trong sự sợ hãi khi cô vô tình đóng băng mọi thứ xung quanh mỗi khi chạm vào bất cứ vật gì. Dù cố gắng giữ nó trong tầm kiểm soát nhưng Elsa vẫn thất bại cũng như khiến những người xung quanh khiếp sợ bởi năng lực của mình.\r\n\r\nVương Quốc Băng Giá - Image 1\r\n\r\nTrước lời dèm pha của dân chúng, Elsa lựa chọn sự trốn chạy mà quên đi cô em gái Anna. Dù khiến mùa hè biến mất khỏi xứ Arendelle nhưng trong thâm tâm Elsa luôn muốn cơn ác mộng này dừng lại.\r\n\r\nVương Quốc Băng Giá - Image 2\r\n\r\nBên cạnh câu chuyện về nội tâm của công chúa Elsa, khán giả cũng biết thêm về gốc gác của "anh hùng" người tuyết Olaf. Chính Elsa là người tạo nên Olaf để chú có thể di chuyển và chuyện trò như 1 con người thực thụ. Màn "chỉnh mũi" có 1-0-2 của Olaf khi lần đầu tiên gặp gỡ Anna cùng Kristoff là 1 trong những phân đoạn được yêu thích nhất của đoạn clip.\r\n\r\nVương Quốc Băng Giá - Image 3\r\n\r\nVương Quốc Băng Giá - Image 4\r\n\r\nNgoài ra, ê-kíp sản xuất cùng các nhân vật trong Frozen cũng gửi lời chúc mừng ngày lễ Halloween tới các khán giả nhí bằng đoạn TV Spot mới cùng 1 vài cảnh chưa từng đưa vào trailer. Qua đó, Olaf nghi ngờ khả năng gõ cửa của Anna khi thấy cô chần chừ rụt tay lại.\r\n\r\nFrozen sẽ chính thức ra rạp vào 27/11/2013 tại Mỹ và ngày 13/12/2013 tại Việt Nam cùng dàn sao lồng tiếng: Kristen Bell, Alan Tudyk, Idina Menzel, Josh Gad, Jonathan Groff, Eva Bella, Livvy Stubenrauch, Santino Fontana.', 1, '108', '2013', 'Mỹ', '2016-02-26', 'Bản HD', 4, 1),
(9, 'Dragon Nest: Warriors'' Dawn(2014)', 'hack-long.jpg', 'phim kể về cuộc phiêu lưu của nhóm hiệp sĩ muốn tiêu diệt chúa quỷ Hắc Long nhằm đem lại hòa bình cho thế giới. Với việc kết hợp bối cảnh cũng như các lớp nhân vật quen thuộc: Warrior, Archer, Sorceress và Cleric của tựa game Dragon Nest, bộ phim mong muốn đem lại cho khán giả những trải nghiệm mới lạ hơn khi theo dõi hành trình của các nhân vật mà mình từng quen thuộc.', 1, '121', '2014', 'Trung Quốc', '2016-03-18', 'Bản HD', 24, 1),
(10, 'How to Train Your Dragon 2(2014)', 'How to Train Your Dragon 2.jpg', 'Là phần thứ hai ly kỳ của bộ ba tác phẩm sử thi, "How to Train Your Dragon 2" tái hiện lại lại thế giới giả tưởng của Hiccup (Baruchel) và Toothless (Răng Sún) năm năm sau đó. Toothless (Răng Sún) và Hiccup sẽ trở lại cho cuộc phiêu lưu lớn hơn, và cũng không thiếu những tràn cười cùng những trận đánh đầy kịch tính. Cuộc phiêu lưu mới dẫn họ đến việc phát hiện ra một hang đá bí mật mà ở đó có hàng trăm con rồng hoang dã mới và bí ẩn Dragon Rider. Và rồi họ bị cuốn vào một cuộc chiến để bảo vệ hòa bình. Hiccup (Baruchel) và Toothless (Răng Sún) phải đoàn kết đứng lên cho những gì họ tin tưởng và phải thừa nhận rằng chỉ có cùng nhau họ có sức mạnh để thay đổi tương lai của cả hai.\r\n\r\nBí Kíp Luyện Rồng 2 - Image 1\r\n\r\nHOW TO TRAIN YOUR DRAGON 2 sẽ có sự góp giọng lồng tiếng của các diễn viên quen thuộc từ phần trước: Jay Baruchel, Gerard Butler, America Ferrera, Craig Ferguson, Christopher Mintz-Plasse, Jonah Hill, Kristen Wiig và TJ Miller. Tại San Diego Comic-Con vừa qua, hãng cũng công bố một số diễn viên mới của phần tiếp theo: Cate Blanchett sẽ lồng tiếng cho một cảnh vệ hoang dã giải phóng con rồng nô lệ, Djimon Hounsou sẽ vào vai một thợ săn rồng điên cuồng, và Kit Harington sẽ là một thợ săn rồng, người làm việc cho nhân vật Hounsou.', 1, '102', '2011', 'Mỹ', '2016-03-04', 'Bản HD', 11, 1),
(11, 'HIGH SCHOOL OF THE DEAD', 'Hotd-mainpage.jpg', 'Lấy bối cảnh của left 4 death, Madhouse Studios, Sentai FilmworksL đã tung ra 1 project nói về những pha vung gậy thần thánh hay những cú khóa người ngoạn mục, đan xen với những ngón đòn cẩu xực hay dùng ngực one hit one die vô đối.', 12, '25', '2014', 'Nhật Bản', '2016-03-24', 'Đang cập Nhật', 53, 2),
(12, 'Ice Age: Continental Drift (2012)', 'ky-bang-ha-4.jpg', 'Đây là phần 4 của loạt phim đuộc đánh giá là một trong loạt phim hoạt hình được yêu thích và thành công nhất mọi thời đại. Trong phần này nhóm bạn Manny (voi ma-mút), Diego (hổ răng kiếm) và Sid (lười tiền sử) sẽ đối mặt với những thử thách mới do các lục địa bị trôi dạt sau trận Đại hồng thủy. Bên cạnh đó phim có sự xuất hiện của nhiều nhân vật mới như: Squint, Captain Gutt, Flynn… Có thể nói với các tình tiết hài hước, vui nhộn, Kỷ băng hà 4 mang tới cho người xem những tiếng cười sảng khoái. Các nhân vật trong phim trở nên sống động với: vui, buồn, yêu, ghét như con người, qua đó phim cũng chuyển tải những bài học nhẹ nhàng về tình cảm cha con, bạn bè, tình yêu. Đây được đánh giá là 1 bộ phim hay với đề cử giải thưởng Kids'' Choice Awards 2013', 1, '88', '2012', 'Mỹ', '2016-03-07', 'Bản HD', 4, 0),
(16, 'Hotel Transylvania(2012)', 'hotel-transylvania1.jpg', 'Bộ phim xoay quanh câu truyện Dracula (lồng tiếng bởi Adam Sandler) muốn tổ chức bữa tiệc sinh nhất thứ 118 cho cô con gái Mavis (lồng tiếng bởi Selena Gomez) của mình. Nhưng thật bất ngờ, mọi chuyện đã đổ bể khi có một chàng trai đi lạc (Andy Samberg lồng tiếng) và đến đúng khách sạn nơi bữa tiệc chỉ toàn quái vật đang diễn ra và bất chợt đem lòng yêu Mavis. Bộ phim cũng có sự tham gia lồng tiếng của David Spade (trong vai Griffin the Invisible Man), Steve Buscemi (trong vai Wayne the Werewolf), Kevin James (trong vai Frankenstein), Molly Shannon (trong vai Wanda the Werewolf) and Cee Lo Green (trong vai Murray the Mummy).', 1, '91', '2012', 'Mỹ', '2016-03-24', 'Bản HD', 17, 0),
(18, 'QUÁI NHÂN DEADPOOL', 'Deadpool.jpg', 'Deadpool xoay quanh anh chàng Wade Wilson, một người bị ung thư vô phương cứu chữa được thí nghiệm trở thành dị nhân với khả năng phục hồi siêu tốc giống Wolverine, tuy nhiên Deadpool được rất nhiều fan hâm mộ biết đến như là một nhân vật cực kỳ hài hước với cái mồm không bao giờ ngừng nói nhảm của hắn.', 1, '108', '2016', 'Mỹ', '2016-05-21', 'Bản HD', 4, 0),
(19, 'CAPTAIN AMERICA 3: NỘI CHIẾN SIÊU ANH HÙNG', 'civil_war.jpg', 'Captain America: Civil War là câu chuyện theo sau sự kiện Avengers: Age Of Ultron, các liên minh chính phủ trên toàn thế giới thông qua một hiệp ước được thiết lập để điều chỉnh hoạt động của tất cả siêu anh hùng. Điều này gây ra sự phân cực trong nội bộ nhóm Avengers, tạo nên hai phe gồm Iron Man và Captain America, gây ra một trận chiến sử thi giữa những người đồng đội.', 1, '148', '2016', 'Mỹ', '2016-05-20', 'Đang cập nhật', 0, 0),
(20, 'MAX ĐIÊN CUỒNG 4: CON ĐƯỜNG CHẾT', 'max-mad-4.jpg', 'Bối cảnh phim ở một nơi rất xa của trái đất, nơi ấy sa mạc bao phủ hầu hết bề mặt và hầu hết mọi người đều điên cuồng đấu tranh cho những nhu cầu của cuộc sống. \r\nTrong thế giới này tồn tại hai phiến quân đang chạy trốn những người được coi là có thể để khôi phục lại trật tự thế giới. \r\nTrong đó có Max, một người đàn ông của hành động và ít nói, đang tìm kiếm sự an tâm sau khi mất vợ và con của mình do hậu quả của sự hỗn loạn. Và Furiosa, một phụ nữ luôn hành động và tin rằng con đường của mình để tồn tại có thể đạt được nếu cô ấy có thể vượt sa mạc sở về quê hương yêu dấu.', 1, '120', '2015', 'Úc', '2016-05-18', 'Bản HD', 10, 0),
(21, 'NGƯỜI SÓI TEEN 5', 'teen-wolf-5.jpg', 'Teen Wolf là câu chuyện của một học sinh trung học bình thường có tên là Scott, vốn là một học sinh trung học không có gì nổi bật. Sau nhiều năm ngồi ghế dự bị cho môn Bóng vợt, cậu quyết tâm phải được ra sân thi đấu chính thức. Cậu luôn cố gắng chứng tỏ bản thân mình giữa những gì mình muốn và những gì cậu không thể có được cho dù khát khao mong muốn. Cho đến một ngày kia, một vết cắn làm thay đổi hoàn toàn cuộc sống của Scotts và những người xung quanh cậu mãi mãi...', 20, '41', '2015', 'Mỹ', '2016-05-18', 'Đang cập nhật', 2, 0),
(22, 'VÕ THẦN TRIỆU TỬ LONG', 'ttl.jpg', '"Võ Thần Triệu Tử Long" lấy cảm hứng về nhân vật Triệu Vân hay còn gọi là Triệu Tử Long trong lịch sử và hình mẫu trong tác phẩm "Tam quốc diễn nghĩa" của La Quán Trung. Nội dung bộ phim được hư cấu xoay quanh nhân vật Triệu Tử Long và mối tình với Hạ Hầu Khinh Y, một nhân vật được sáng tạo, không có thực trong lịch sử.\r\n\r\nCuối thời Đông Hán, những hoàng đế cuối cùng quá sủng ái hoạn quan mà gạt bỏ bề tôi trung trực. Triều đình ngày càng thối nát, kinh tế suy sụp, an ninh bất ổn. Hạn hán năm 184 càng khiến nhân dân lầm than, khổ cực. Trương Giác lãnh đạo nhân dân nổi dậy chống triều đình trong suốt gần 20 năm. Trong triều, thế lực của Đổng Trác ngày một bành trướng và thao túng cả triều đình.\r\n\r\nTriệu Tử Long giỏi võ nghệ và có tài thao lược, cùng quân tình nguyện gia nhập quân của Công Tôn Toản chinh chiến dẹp quân Khăn Vàng của Trương Giác. Sau, dưới trướng Công Tôn Toản, Triệu Tử Long kết giao với Lưu Bị và ngày càng trở nên thân thiết. Giữa lúc Công Tôn Toản và Viên Thiệu giao tranh ác liệt, anh cả của Triệu Tử Long qua đời, Triệu Tử Long cáo từ Công Tôn Toản về quê để tang anh. Về sau, Triệu Tử Long tìm Lưu Bị tại Nghiệp Thành và theo phò tá từ đó.\r\n\r\nHạ Hầu Khinh Y, một tiểu thư thuộc dòng họ Hạ Hầu, có quan hệ họ hàng với Tào Tháo. Khinh Y vừa xinh đẹp lại trong sáng; sau khi gặp Triệu Tử Long, nàng bị rơi vào lưới tình. Trớ trêu thay, sau đó nàng phát hiện Triệu Tử Long chính là kẻ đã sát hại phụ thân mình trong một cuộc hỗn chiến.', 49, '10', '2016', 'Trung Quốc', '2016-05-18', 'Hoàn Tất', 15, 0),
(23, 'CHÍN TẦNG THÁP QUỶ', '9-devil.jpg', 'Năm 1979, trên núi Côn Luân phát hiện hài cốt sinh vật thần bí, Hồ Bát Nhất cùng đoàn thám hiểm tìm kiếm bí mật của di tích cổ trên đó đến được Cửu Tầng Yêu tháp. Nhiều người trong đoàn bỏ mạng trên đường đi hoặc mất tích, không rõ sống chết.\r\nHồ Bát Nhất sau khi giải ngũ trở lại Bắc Kinh, gặp lại bạn thân Vương Khải Tuyền, một lần nữa bước lên hành trình tìm kiếm nền văn minh cổ. Trên đường cùng Shirley Dương tình cờ gặp gỡ, khuôn mặt quen thuộc của cô làm anh nhớ lại những ngày tháng ở cùng đoàn thám hiểm kia. Chuyến đi nguy hiểm, cả đoàn đã bị quái vật tấn công, để rồi nhận ra chuyện phát sinh nơi này lại một lần nữa liên quan đến Cửu Tầng Yêu tháp, mà lần này chờ đợi bọn họ, chính là một bí ẩn chưa có lời đáp đã phủ bụi cả ngàn năm...', 1, '110', '2015', 'Trung Quốc', '2016-05-21', 'Bản HD', 33, 0),
(24, 'The Last Witch Hunter (2015)', 'devil.jpg', 'Bộ phim đặt người xem vào bối cảnh thế giới bị lũng đoạn bởi sự hiện diện của tộc phù thuỷ. Cuộc chiến giữa chúng và những người thợ săn kéo dài hàng bao thế kỷ cho kết khi Kaulder (Vin Diesel) tiêu diệt được Nữ Hoàng (Julie Engelbrecht).', 1, '106', '2015', 'Mỹ', '2016-05-21', 'Bản HD', 0, 0),
(36, 'Lucifer (2016)', '1334765754-s.jpg', 'Buồn chán khi làm chúa tể của địa ngục, Lucifer rời bỏ ngai vị của mình để đến thành phố Los Angeles, thành phố của những thiên thần. Tại đây Lucifer với khả năng đặc biệt của mình đã tham gia giúp LAPD trừng trị bọn tội phạm.', 13, '45', '2016', 'Mỹ', '2016-05-21', 'Hoàn Tất', 1, 0),
(37, 'The Nut Job (2014)', 'resizeNutJob.jpg', 'Phi Vụ Hạt Dẻ - The Nut Job: Cáu kỉnh, một keo cú, sóc độc lập là bị trục xuất khỏi công viên của mình và buộc phải tồn tại trong thành phố. May mắn cho anh ta, anh tình cờ trên một trong những điều mà có thể cứu mạng sống mình, và phần còn lại của cộng đồng công viên, khi họ xếp đồ đạc cho mùa đông - Nut Cửa hàng của Maury. Một chú sóc vô tình thiêu hủy tất cả số lương thực mùa đông của toàn bộ sinh vật sống ở khu công viên. Để cứu lấy mọi người qua trận đói trước mắt, chú quyết định thực hiện một phi vụ điên rồ - trộm hạt dẻ tại tiệm Maury.', 1, '115', '2014', 'Mỹ', '2016-05-26', 'Bản HD', 0, 0),
(48, 'Nirvana in Fire (2015)', 'poster.medium.jpg', 'Phim Lang Nha Bảng được chuyển thể từ tiểu thuyết cùng tên của tác giả Hải Yến từng lọt top 100 tiểu thuyết ngôn tình kinh điển năm 2011. \r\nCâu chuyện của Lâm Thù – một vị tướng quân có uy danh bất bại vang khắp thiên hạ, là thiếu niên nổi tiếng nhất vùng đất Kim Lăng. Thế nhưng, bởi sự hãm hại của kẻ gian mà vị tướng trẻ tuổi này cùng toàn bộ đội quân Xích Diễm đã bị tiêu diệt.\r\n12 năm sau, Lâm Thù giờ đây lại xuất hiện với thân phận hoàn toàn mới với cái tên “Kì Lân tài tử” Mai Trường Tô và trở thành mưu sĩ của Tĩnh vương. Tại đây, chàng đã tái ngộ quận chúa Nghê Hoàng cùng các bằng hữu xưa. Mọi chuyện rồi sẽ ra sao?', 54, '45', '2015', 'Trung Quốc', '2016-05-26', 'Hoàn Tất', 3, 0),
(49, 'LÊN NHẦM KIỆU HOA ĐƯỢC CHỒNG NHƯ Ý', 'poster.medium (1).jpg', 'Tình cờ có 2 gia đình ở thành Dương Châu đều cho con gái lên kiệu hoa vào cùng một ngày. Lý Ngọc Hồ - cô con gái quán võ Dương Uy tính tình mạnh mẽ được gả cho tướng quân Viên Bất Khuất đã có hai đời vợ, còn Đỗ Băng Nhạn - cô tiểu thư hiền dịu con nhà làm thuốc kia phải chấp nhận kết duyên cùng anh chàng công tử Tề Thiên Lỗi ốm đau bệnh tật chẳng biết sẽ chết lúc nào. Do nhầm lẫn mà hai cô gái đã bị tráo đổi cho nhau, nhưng nhiều thử thách gian nan đã làm họ đã nảy sinh tình cảm với người chồng hờ đó...', 20, '45', '2000', 'Trung Quốc', '2016-05-26', 'Hoàn Tất', 2, 0),
(50, '12 CON GIÁP(2013)', 'lJRF1Wt.jpg', 'Là bộ phim hành động thứ 101 cũng là bộ phim có nhiều pha mạo hiểm cuối cùng của Thành Long trong thể loại phim hành động - Chinese Zodiac kể về câu chuyện một anh hùng Trung Quốc đã lấy lại được các bức tượng đồng về 12 con giáp, những bảo vật đã bị quân đội Pháp và Anh cướp từ Di Hòa Viên, Bắc Kinh năm 1860.', 1, '120', '2013', 'Trung Quốc', '2016-05-30', 'HD-720', 51, 0);

-- --------------------------------------------------------

--
-- Table structure for table `film_actor`
--

CREATE TABLE `film_actor` (
  `id_film` int(11) NOT NULL,
  `id_actor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `film_actor`
--

INSERT INTO `film_actor` (`id_film`, `id_actor`) VALUES
(4, 53),
(4, 54),
(4, 55),
(4, 56),
(6, 49),
(6, 50),
(6, 51),
(6, 52),
(18, 1),
(18, 2),
(19, 3),
(19, 4),
(19, 5),
(20, 6),
(20, 7),
(21, 8),
(21, 9),
(21, 10),
(21, 11),
(21, 12),
(21, 13),
(21, 14),
(21, 15),
(22, 16),
(22, 17),
(23, 18),
(23, 20),
(24, 22),
(24, 23),
(24, 24),
(24, 25),
(24, 26),
(24, 27),
(36, 28),
(36, 29),
(36, 30),
(36, 31),
(36, 32),
(36, 33),
(36, 35),
(36, 36),
(37, 37),
(37, 38),
(37, 39),
(48, 40),
(48, 41),
(48, 42),
(48, 43),
(49, 44),
(49, 45),
(49, 46),
(49, 47),
(49, 48),
(50, 51),
(50, 57),
(50, 58),
(50, 59);

-- --------------------------------------------------------

--
-- Table structure for table `film_director`
--

CREATE TABLE `film_director` (
  `id_film` int(11) NOT NULL,
  `id_director` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `film_director`
--

INSERT INTO `film_director` (`id_film`, `id_director`) VALUES
(4, 6),
(4, 27),
(5, 15),
(6, 11),
(6, 16),
(7, 14),
(9, 12),
(10, 13),
(16, 14),
(18, 17),
(20, 18),
(22, 19),
(23, 20),
(24, 21),
(36, 22),
(37, 23),
(48, 24),
(48, 25),
(49, 26),
(50, 28);

-- --------------------------------------------------------

--
-- Table structure for table `film_type`
--

CREATE TABLE `film_type` (
  `id_film` int(11) NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `film_type`
--

INSERT INTO `film_type` (`id_film`, `id_type`) VALUES
(4, 4),
(4, 7),
(4, 8),
(5, 8),
(6, 4),
(6, 7),
(6, 8),
(7, 8),
(8, 8),
(9, 8),
(10, 8),
(11, 8),
(12, 8),
(16, 8),
(18, 4),
(18, 6),
(18, 7),
(19, 4),
(19, 6),
(20, 4),
(20, 5),
(20, 7),
(21, 5),
(22, 9),
(22, 10),
(22, 11),
(23, 5),
(23, 7),
(24, 4),
(24, 6),
(24, 7),
(36, 4),
(36, 6),
(37, 8),
(48, 9),
(48, 11),
(49, 12),
(49, 13),
(50, 4),
(50, 7),
(50, 11);

-- --------------------------------------------------------

--
-- Table structure for table `trailer`
--

CREATE TABLE `trailer` (
  `id_trailer` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `url1` varchar(255) NOT NULL,
  `url2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trailer`
--

INSERT INTO `trailer` (`id_trailer`, `id_film`, `url1`, `url2`) VALUES
(3, 4, 'https://www.youtube.com/embed/JTKiFJGd6Yk', ''),
(4, 10, 'https://www.youtube.com/embed/Ve7p5CqTTIM', ''),
(6, 12, 'https://www.youtube.com/embed/xz-KgMtU_BM', ''),
(7, 5, 'https://www.youtube.com/embed/P-Kfo1OcNAo', ''),
(8, 8, 'https://www.youtube.com/embed/TbQm5doF_Uc', ''),
(9, 6, 'https://www.youtube.com/embed/gv66twoGN90', ''),
(10, 11, 'https://www.youtube.com/embed/j_OEW_rJTJU', ''),
(11, 7, 'https://www.youtube.com/embed/i73c3dgGxRQ', ''),
(12, 16, 'https://www.youtube.com/embed/2Ioqovct5Vs', ''),
(13, 18, 'https://www.youtube.com/embed/qoDyBsdHlBI', ''),
(14, 19, 'https://www.youtube.com/embed/jwPSuVk4fhw', 'https://www.youtube.com/embed/PbluSAUxp2o'),
(15, 20, '', 'https://www.youtube.com/embed/cdLl1GVjOrc'),
(16, 21, 'https://www.youtube.com/embed/R4YDcV1QpLk', ''),
(17, 22, 'https://www.youtube.com/embed/zePIxq8RNoY', ''),
(18, 23, 'https://www.youtube.com/embed/1Zds-qxgt5w', 'https://www.youtube.com/embed/SEmPPiNpXRQ'),
(19, 24, 'https://www.youtube.com/embed/aqUZy7TuWAg', ''),
(20, 36, 'https://www.youtube.com/embed/X4bF_quwNtw', ''),
(21, 48, 'https://www.youtube.com/embed/GxPv-SR0I9k', ''),
(22, 50, 'https://www.youtube.com/embed/SQJupPljuD4', '');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `type_name`) VALUES
(4, 'Hành Động'),
(5, 'Kinh Di'),
(6, 'Viễn Tưởng'),
(7, 'Phiêu Lưu'),
(8, 'Hoạt Hình'),
(9, 'Cổ Trang'),
(10, 'Tình Cảm-Lãng Mạng'),
(11, 'Võ Thuật'),
(12, 'Tâm lý'),
(13, 'Hài Hước');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `state`) VALUES
(1, 'admin', 'acquykoten@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(2, 'acquykoten', 'ac_ma61@yahoo.com', '202cb962ac59075b964b07152d234b70', 0),
(3, 'Duyen', 'duyen_khung@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(4, 'test_2', 'test_2@ac.abc', '202cb962ac59075b964b07152d234b70', 0),
(5, 'kha_pro', 'ac@yahoo.com', '202cb962ac59075b964b07152d234b70', 0);

-- --------------------------------------------------------

--
-- Table structure for table `viewer`
--

CREATE TABLE `viewer` (
  `id_user` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `total_views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `viewer`
--

INSERT INTO `viewer` (`id_user`, `id_film`, `total_views`) VALUES
(1, 4, 41),
(1, 6, 0),
(1, 7, 0),
(1, 10, 0),
(1, 11, 0),
(1, 21, 0),
(1, 36, 0),
(5, 8, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id_actor`);

--
-- Indexes for table `assess`
--
ALTER TABLE `assess`
  ADD PRIMARY KEY (`id_film`,`id_user`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_cmt`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id_director`);

--
-- Indexes for table `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`id_episode`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `film_actor`
--
ALTER TABLE `film_actor`
  ADD PRIMARY KEY (`id_film`,`id_actor`);

--
-- Indexes for table `film_director`
--
ALTER TABLE `film_director`
  ADD PRIMARY KEY (`id_film`,`id_director`);

--
-- Indexes for table `film_type`
--
ALTER TABLE `film_type`
  ADD PRIMARY KEY (`id_film`,`id_type`);

--
-- Indexes for table `trailer`
--
ALTER TABLE `trailer`
  ADD PRIMARY KEY (`id_trailer`),
  ADD KEY `id_film` (`id_film`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `viewer`
--
ALTER TABLE `viewer`
  ADD PRIMARY KEY (`id_user`,`id_film`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actor`
--
ALTER TABLE `actor`
  MODIFY `id_actor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_cmt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `director`
--
ALTER TABLE `director`
  MODIFY `id_director` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `episode`
--
ALTER TABLE `episode`
  MODIFY `id_episode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `trailer`
--
ALTER TABLE `trailer`
  MODIFY `id_trailer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
