-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2016 at 04:31 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `film_onl`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id_cmt` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `content` varchar(1000) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_cmt`, `id_user`, `id_film`, `datetime`, `content`, `state`) VALUES
(3, 1, 7, '2016-03-03 00:00:00', '333', 2),
(4, 1, 6, '2016-03-04 00:00:00', 'ddđ', 2),
(11, 1, 4, '2016-03-24 11:14:26', 'aaa', 2),
(13, 2, 5, '2016-03-24 04:02:08', 'như cái qq', 2),
(14, 3, 5, '2016-03-24 04:03:30', 'ờ ờ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `episode`
--

CREATE TABLE IF NOT EXISTS `episode` (
  `id_episode` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `url1` varchar(255) NOT NULL,
  `url2` varchar(255) NOT NULL,
  `datetime` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `episode`
--

INSERT INTO `episode` (`id_episode`, `id_film`, `name`, `url1`, `url2`, `datetime`) VALUES
(1, 4, 4, 'https://www.youtube.com/embed/pVJKsr822h8', '', '2016-03-23'),
(2, 4, 1, 'https://www.youtube.com/embed/N_pljrbHrJs', '', '2016-03-24'),
(3, 4, 2, 'https://www.youtube.com/embed/9601vRtev1s', '', '2016-03-24'),
(4, 4, 3, 'https://www.youtube.com/embed/JAQFhI3YX4Q', '', '2016-03-24'),
(5, 9, 1, 'https://www.youtube.com/embed/sF9-AHWCeU8', '', '2016-03-24'),
(6, 12, 1, 'https://www.youtube.com/embed/q2A7fZsy4xQ', '', '2016-03-24'),
(7, 5, 1, 'https://www.youtube.com/embed/DEbFgVrrCiQ', '', '2016-03-24'),
(8, 5, 2, 'https://www.youtube.com/embed/2wOnr4ko0yA', '', '2016-03-24'),
(9, 5, 3, 'https://www.youtube.com/embed/t1KeHIVhnrk', '', '2016-03-24'),
(10, 5, 6, 'https://www.youtube.com/embed/0-cVphK5kh4', '', '2016-03-24'),
(11, 5, 12, 'https://www.youtube.com/embed/fxyomI0-Eko', '', '2016-03-24'),
(12, 16, 1, 'https://www.youtube.com/embed/h0iA7HPRUGU', '', '2016-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `id_film` int(11) NOT NULL,
  `film_name` varchar(255) NOT NULL,
  `img` varchar(1000) DEFAULT NULL,
  `description` varchar(10000) NOT NULL,
  `author` varchar(255) NOT NULL,
  `total_episode` int(11) NOT NULL,
  `length_movies` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `update_day` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `total_viewer` int(11) NOT NULL,
  `total_Assess` int(11) NOT NULL,
  `trangthai` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `film_name`, `img`, `description`, `author`, `total_episode`, `length_movies`, `year`, `country`, `update_day`, `status`, `total_viewer`, `total_Assess`, `trangthai`) VALUES
(4, 'NARUTO', 'naruto-shippuuden-3.jpg', 'Nhân vật chính là Uzumaki Naruto, một thiếu niên ồn ào, hiếu động, một ninja luôn muốn tìm cách khẳng định mình để được mọi người công nhận, rất muốn trở thành Hokage (Hỏa ảnh) - người lãnh đạo ninja cả làng, được tất cả mọi người kính trọng.\r\n\r\n12 năm trước, hồ ly 9 đuôi tấn công làng ninja Mộc Diệp, Hokage Đệ Tứ đã đánh bại và phong ấn vào cậu bé Naruto.Từ đó, Naruto bị mọi người xa lánh, vậy nên cậu tìm ra cách được thừa nhận và chú ý duy nhất – qua các trò phá phách và nghịch ngợm.Câu chuyện chính bám theo sự trưởng thành và tiến bộ của Naruto và bạn cậu khi làm ninja, và nhấn mạnh mối quan hệ giữa họ và sự ảnh hưởng của quá khứ đến tính cách họ. Naruto tìm được hai người bạn đồng hành cùng là Uchiha Sasuke và Haruno Sakura, cuộc phiêu lưu bắt đầu.\r\n\r\nMười hai năm trước khi bộ truyện này bắt đầu, con Hồ Ly Chín Đuôi đã tấn công ngôi làng ninja Mộc Diệp (Nhật: 木ノ葉隠れ Konohagakure?). Đủ sức mạnh để khiến sóng thần nổi dậy và san bằng núi non chỉ với một trong số chín cái đuôi của n', 'Hayato Dat', 1000, '24', '2012', 'Nhật Bản', '2016-03-24', 'Đang cập nhật', 3, 0, 0),
(5, 'VUA HẢI TẶC HẢI TẶC MŨ RƠM', 'vua-hai-tac.png', 'Monkey D. Luffy, 1 cậu bé rất thích hải tặc có ước mơ tìm được kho báu One Piece và trở thành Vua hải tặc - Pirate King. Lúc nhỏ, Luffy tình cờ ăn phải trái quỉ (Devil Fruit) Gomu Gomu, nó cho cơ thể cậu khả năng co dãn đàn hồi như cao su nhưng đổi lại cậu sẽ không bao giờ biết bơi. Sau đó Luffy lại được Shanks cứu thoát tuy nhiên ông ta bị mất 1 cánh tay. Sau đấy Shanks chia tay Luffy và để lại cho cậu cái mũ rơm (Straw Hat) và nói rằng: "Sau này bao giờ thành cướp biển hãy gặp ta và trả lại nó". Chính lời nói này đã thúc đầy Luffy trở thành 1 cướp biển thật sự.', 'Eiichiro ODA', 1000, '25', '2009', 'Nhật Bản', '2016-02-26', 'Đang Cập nhật', 2, 0, 1),
(6, 'Kung Fu Panda 3', 'kung-fu-panda-3.jpg', 'Năm 2016 tới đây, một trong những series phim hoạt hình ăn khách nhất thế giới sẽ trở lại màn ảnh – KUNG FU PANDA 3. Xuất hiện lần đầu vào năm 2008, KUNG FU PANDA đã nhanh chóng trở thành hiện tượng phòng vé toàn cầu với cuộc phiêu lưu hài hước và những màn võ thuật điêu luyện của Gấu Trúc Po.Khán giả yêu thích bộ phim sẽ không còn phải chờ lâu để được gặp gỡ Po và những người bạn của cậu nữa. Một chi tiết vô cùng quan trọng về thách thức lớn nhất mà Po gặp phải trong chuyến đi sắp tới. Đó là hình ảnh ông Lý Sơn – cha đẻ của Po cùng đoạn hội thoại gây nhiều cảm xúc đến khán giả giữa 2 cha con.\r\n\r\nJack Black – diễn viên lồng tiếng nhân vật Po vui vẻ chia sẻ về “người cha” của mình rằng: “Lý Sơn là bậc thầy của sự “hài hước”. Ông rất vui tính và có khả năng mang lại niềm vui cho những người xung quanh. Ông là một người cha đáng mơ ước.”\r\n\r\nỞ loạt hình tung ra lần này, khán giả còn được “chiêm ngưỡng” một cô nàng gấu trúc mũm mĩm lần đầu xuất hiện trong loạt phim KUNG FU PANDA với tên gọi đáng yêu: Mei Mei. Nhân vật vũ công múa lụa đầy tham vọng này do nữ diễn viên Rebel Wilson (“Pitch Perfect 2”)  lồng tiếng.\r\n\r\nPhần 3 của bộ phim tiếp tục được đạo diễn bởi Jennifer Yuh Nelson cùng sự trở lại của dàn sao lồng tiếng “đình đám”: Jack Black, Angelina Jolie, Jackie Chan, Gary Oldman, Dustin Hoffman, David Cross… Đây đều là những người đã tạo nên hiện tượng KUNG FU PANDA  vào năm 2008 và 2011. Cả hai phần đầu của series này đều được đề cử giải Oscar ở hạng mục Phim hoạt hình xuất sắc nhất và thu về khoảng 1,3 tỷ USD trên toàn cầu.', 'Alessandro Carloni,Jennifer Yuh', 1, '95', '2016', 'Mỹ', '2016-02-26', 'Đang cập nhật', 3, 1, 1),
(7, 'Hotel Transylvania 2(2015)', 'hotel-transylvania.jpg', 'Khán giả gặp lại những nhân vật quen thuộc trong bộ phim như Dracula (Adam Sandler), Mavis (Selena Gomez), Jonathan (Andy Samberg), Frank (Kevin James), Wayne Werewolf (Steve Buscemi) và Murray the Mummy (Keegan Michael Key). Tất cả họ đang quậy tưng bừng trong một bữa tiệc do Dracula tổ chức. Vlad, người cha già cáu kỉnh của Dracula.\r\n\r\nNhân vật này do huyền thoại hài kịch Mel Brooks tham gia lồng tiếng. Vlad xuất hiện tại thành phố sau nhiều năm vắng mặt và cảm thấy vô cùng kỳ lạ khi con trai mình đang điều hành một khách sạn. Hotel Transylvania 2 tập trung vào mối quan hệ gia đình khi ma cà rồng cổ Vlad, cha của Dracula, đến thị trấn lần đầu tiên sau nhiều năm ở ẩn, mang theo một số bí mật. Chuyến thăm của Vlad tạo ra sự tàn phá kinh hoàng cho Dracula, Mavis, Jonathan và các quý khách “ma quỷ” tại khách sạn Transylvania.', 'Genndy Tartakovsky', 1, '89', '2015', 'Mỹ', '2016-02-26', 'Bản HD', 12, 1, 1),
(8, 'Frozen', 'frozen2.jpg', 'Sở hữu năng lực bí ẩn được truyền lại từ tổ tiên, công chúa Elsa sống trong sự sợ hãi khi cô vô tình đóng băng mọi thứ xung quanh mỗi khi chạm vào bất cứ vật gì. Dù cố gắng giữ nó trong tầm kiểm soát nhưng Elsa vẫn thất bại cũng như khiến những người xung quanh khiếp sợ bởi năng lực của mình.\r\n\r\nVương Quốc Băng Giá - Image 1\r\n\r\nTrước lời dèm pha của dân chúng, Elsa lựa chọn sự trốn chạy mà quên đi cô em gái Anna. Dù khiến mùa hè biến mất khỏi xứ Arendelle nhưng trong thâm tâm Elsa luôn muốn cơn ác mộng này dừng lại.\r\n\r\nVương Quốc Băng Giá - Image 2\r\n\r\nBên cạnh câu chuyện về nội tâm của công chúa Elsa, khán giả cũng biết thêm về gốc gác của "anh hùng" người tuyết Olaf. Chính Elsa là người tạo nên Olaf để chú có thể di chuyển và chuyện trò như 1 con người thực thụ. Màn "chỉnh mũi" có 1-0-2 của Olaf khi lần đầu tiên gặp gỡ Anna cùng Kristoff là 1 trong những phân đoạn được yêu thích nhất của đoạn clip.\r\n\r\nVương Quốc Băng Giá - Image 3\r\n\r\nVương Quốc Băng Giá - Image 4\r\n\r\nNgoài ra, ê-kíp sản xuất cùng các nhân vật trong Frozen cũng gửi lời chúc mừng ngày lễ Halloween tới các khán giả nhí bằng đoạn TV Spot mới cùng 1 vài cảnh chưa từng đưa vào trailer. Qua đó, Olaf nghi ngờ khả năng gõ cửa của Anna khi thấy cô chần chừ rụt tay lại.\r\n\r\nFrozen sẽ chính thức ra rạp vào 27/11/2013 tại Mỹ và ngày 13/12/2013 tại Việt Nam cùng dàn sao lồng tiếng: Kristen Bell, Alan Tudyk, Idina Menzel, Josh Gad, Jonathan Groff, Eva Bella, Livvy Stubenrauch, Santino Fontana.', 'Chris Buck,Jennifer Lee', 1, '108', '2013', 'Mỹ', '2016-02-26', 'Bản HD', 3, 1, 0),
(9, 'Dragon Nest: Warriors'' Dawn(2014)', 'hack-long.jpg', 'phim kể về cuộc phiêu lưu của nhóm hiệp sĩ muốn tiêu diệt chúa quỷ Hắc Long nhằm đem lại hòa bình cho thế giới. Với việc kết hợp bối cảnh cũng như các lớp nhân vật quen thuộc: Warrior, Archer, Sorceress và Cleric của tựa game Dragon Nest, bộ phim mong muốn đem lại cho khán giả những trải nghiệm mới lạ hơn khi theo dõi hành trình của các nhân vật mà mình từng quen thuộc.', 'Yuefeng Song', 1, '121', '2014', 'Trung Quốc', '2016-03-18', 'Bản HD', 12, 1, 1),
(10, 'How to Train Your Dragon 2(2014)', 'How to Train Your Dragon 2.jpg', 'Là phần thứ hai ly kỳ của bộ ba tác phẩm sử thi, "How to Train Your Dragon 2" tái hiện lại lại thế giới giả tưởng của Hiccup (Baruchel) và Toothless (Răng Sún) năm năm sau đó. Toothless (Răng Sún) và Hiccup sẽ trở lại cho cuộc phiêu lưu lớn hơn, và cũng không thiếu những tràn cười cùng những trận đánh đầy kịch tính. Cuộc phiêu lưu mới dẫn họ đến việc phát hiện ra một hang đá bí mật mà ở đó có hàng trăm con rồng hoang dã mới và bí ẩn Dragon Rider. Và rồi họ bị cuốn vào một cuộc chiến để bảo vệ hòa bình. Hiccup (Baruchel) và Toothless (Răng Sún) phải đoàn kết đứng lên cho những gì họ tin tưởng và phải thừa nhận rằng chỉ có cùng nhau họ có sức mạnh để thay đổi tương lai của cả hai.\r\n\r\nBí Kíp Luyện Rồng 2 - Image 1\r\n\r\nHOW TO TRAIN YOUR DRAGON 2 sẽ có sự góp giọng lồng tiếng của các diễn viên quen thuộc từ phần trước: Jay Baruchel, Gerard Butler, America Ferrera, Craig Ferguson, Christopher Mintz-Plasse, Jonah Hill, Kristen Wiig và TJ Miller. Tại San Diego Comic-Con vừa qua, hãng cũng công bố một số diễn viên mới của phần tiếp theo: Cate Blanchett sẽ lồng tiếng cho một cảnh vệ hoang dã giải phóng con rồng nô lệ, Djimon Hounsou sẽ vào vai một thợ săn rồng điên cuồng, và Kit Harington sẽ là một thợ săn rồng, người làm việc cho nhân vật Hounsou.', 'Dean DeBlois\r\n', 1, '102', '2011', 'Mỹ', '2016-03-04', 'Bản HD', 10, 1, 1),
(11, 'HIGH SCHOOL OF THE DEAD', 'Hotd-mainpage.jpg', 'Lấy bối cảnh của left 4 death, Madhouse Studios, Sentai FilmworksL đã tung ra 1 project nói về những pha vung gậy thần thánh hay những cú khóa người ngoạn mục, đan xen với những ngón đòn cẩu xực hay dùng ngực one hit one die vô đối.', 'Đang cập nhật', 12, '25', '2014', 'Nhật Bản', '2016-03-24', 'Đang cập Nhật', 4, 2, 0),
(12, 'Ice Age: Continental Drift (2012)', 'ky-bang-ha-4.jpg', 'Đây là phần 4 của loạt phim đuộc đánh giá là một trong loạt phim hoạt hình được yêu thích và thành công nhất mọi thời đại. Trong phần này nhóm bạn Manny (voi ma-mút), Diego (hổ răng kiếm) và Sid (lười tiền sử) sẽ đối mặt với những thử thách mới do các lục địa bị trôi dạt sau trận Đại hồng thủy. Bên cạnh đó phim có sự xuất hiện của nhiều nhân vật mới như: Squint, Captain Gutt, Flynn… Có thể nói với các tình tiết hài hước, vui nhộn, Kỷ băng hà 4 mang tới cho người xem những tiếng cười sảng khoái. Các nhân vật trong phim trở nên sống động với: vui, buồn, yêu, ghét như con người, qua đó phim cũng chuyển tải những bài học nhẹ nhàng về tình cảm cha con, bạn bè, tình yêu. Đây được đánh giá là 1 bộ phim hay với đề cử giải thưởng Kids'' Choice Awards 2013', 'Đang cập nhật', 1, '88', '2012', 'Mỹ', '2016-03-07', 'Bản HD', 1, 0, 1),
(16, 'Hotel Transylvania(2012)', 'hotel-transylvania1.jpg', 'Bộ phim xoay quanh câu truyện Dracula (lồng tiếng bởi Adam Sandler) muốn tổ chức bữa tiệc sinh nhất thứ 118 cho cô con gái Mavis (lồng tiếng bởi Selena Gomez) của mình. Nhưng thật bất ngờ, mọi chuyện đã đổ bể khi có một chàng trai đi lạc (Andy Samberg lồng tiếng) và đến đúng khách sạn nơi bữa tiệc chỉ toàn quái vật đang diễn ra và bất chợt đem lòng yêu Mavis. Bộ phim cũng có sự tham gia lồng tiếng của David Spade (trong vai Griffin the Invisible Man), Steve Buscemi (trong vai Wayne the Werewolf), Kevin James (trong vai Frankenstein), Molly Shannon (trong vai Wanda the Werewolf) and Cee Lo Green (trong vai Murray the Mummy).', 'Genndy Tartakovsky', 1, '91', '2012', 'Mỹ', '2016-03-24', 'Bản HD', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `film_type`
--

CREATE TABLE IF NOT EXISTS `film_type` (
  `id_film` int(11) NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `film_type`
--

INSERT INTO `film_type` (`id_film`, `id_type`) VALUES
(1, 2),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(4, 2),
(4, 6),
(5, 2),
(6, 4),
(7, 2),
(7, 5),
(7, 6),
(7, 7),
(8, 6),
(8, 7),
(11, 4),
(11, 6),
(11, 7),
(12, 4),
(12, 5),
(12, 6),
(12, 7),
(16, 2),
(16, 5);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `id_report` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id_report`, `datetime`, `id_user`, `content`) VALUES
(1, '2016-02-19 03:27:05', 1, 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `trailer`
--

CREATE TABLE IF NOT EXISTS `trailer` (
  `id_trailer` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `url1` varchar(255) NOT NULL,
  `url2` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

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
(12, 16, 'https://www.youtube.com/embed/2Ioqovct5Vs', '');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id_type` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `type_name`) VALUES
(2, 'Hài Hước'),
(4, 'Hành Động'),
(5, 'Kinh Di'),
(6, 'Viễn Tưởng'),
(7, 'Phiêu Lưu'),
(8, 'Anime');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `state`) VALUES
(1, 'admin', 'acquykoten@gmail.com', '123', 1),
(2, 'kha', 'ac_ma61@yahoo.com', '123', 0),
(3, 'kiet', 'kiet@ssss.com', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_cmt`);

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
-- Indexes for table `film_type`
--
ALTER TABLE `film_type`
  ADD PRIMARY KEY (`id_film`,`id_type`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_report`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_cmt` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `episode`
--
ALTER TABLE `episode`
  MODIFY `id_episode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `trailer`
--
ALTER TABLE `trailer`
  MODIFY `id_trailer` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
