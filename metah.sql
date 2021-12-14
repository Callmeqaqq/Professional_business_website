-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 11, 2021 lúc 07:55 AM
-- Phiên bản máy phục vụ: 8.0.13-4
-- Phiên bản PHP: 7.2.24-0ubuntu0.18.04.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `7SXMJCBEEF`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `about`
--

CREATE TABLE `about` (
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Facebook` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Instagram` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Zalo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `OpenTime` time DEFAULT NULL,
  `AboutID` int(11) NOT NULL,
  `CloseTime` time DEFAULT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `about`
--

INSERT INTO `about` (`Address`, `Phone`, `Facebook`, `Instagram`, `Zalo`, `Logo`, `Name`, `content`, `OpenTime`, `AboutID`, `CloseTime`, `Email`) VALUES
('Sao Hỏa', '033445566', 'link Fb', 'link Instagram', 'link Zalo', '99683909_1773418283logo4pngpng', 'MetaH', '<h3><strong>Về MetaH</strong></h3><p>Hệ thống siêu thị và chuỗi cửa hàng <strong>MetaH</strong> là thương hiệu bán lẻ thuộc Tập đoàn <strong>Meta</strong>. Ra đời từ năm 2020 cho đến nay, hệ thống <strong>MetaH</strong> không ngừng phát triển vươn lên, ra mắt với hơn 132 siêu thị <strong>MetaH</strong> phủ rộng khắp Việt Nam, mang đến cho người tiêu dùng sự lựa chọn đa dạng về chất lượng hàng hóa và dịch vụ, đáp ứng đầy đủ nhu cầu trải nghiệm mua sắm từ bình dân đến cao cấp của mọi khách hàng.</p><p>Mua sắm tại <strong>MetaH</strong>, khách hàng không chỉ trải nghiệm thoải mái không gian dịch vụ tiện ích mà còn nhận được nhiều giá trị vượt trội với các hình thức khuyến mãi, ưu đãi hấp dẫn.</p><h3><strong>Sứ mệnh</strong></h3><p>Với sứ mệnh phát triển bền vững và tạo được cho khách hàng tâm lý <strong>“AN TÂM MUA SẮM MỖI NGÀY”</strong>, <strong>MetaH</strong> luôn nỗ lực đáp ứng đầy đủ yêu cầu mua sắm của khách hàng, cam kết chất lượng khi sử dụng sản phẩm, giao hàng nhanh chóng, nâng cao giá trị cuộc sống của người tiêu dùng trong xã hội hiện đại.</p><h3><strong>Tầm nhìn</strong></h3><p>Mang lại sự lựa chọn hoàn hảo về mua sắm tiện ích, <strong>MetaH</strong> hướng tới mục tiêu trở thành hệ thống bán lẻ đồ dùng nội thất hàng đầu tại Việt Nam, dẫn đầu về cung cấp sản phẩm và chất lượng dịch vụ trong đời sống người Việt.</p><p><strong>MetaH</strong> còn chú trọng xây dựng môi trường làm việc chuyên nghiệp, năng động, sáng tạo và nhân văn; tạo điều kiện và cơ hội phát triển cho tất cả nhân viên; tích cực đóng góp vào các hoạt động xã hội, hướng về cộng đồng với những thông điệp mang tính nhân văn.</p><h3><strong>Cam kết với khách hàng</strong></h3><p>Cung cấp cho khách hàng những sản phẩm đảm bảo an toàn chất lượng, đa dạng từ mẫu mã, hình thức, kiểu loaij…</p><p>Dịch vụ vượt trội: Mua sắm trực tuyến dễ dàng hoặc tại cửa hàng, thanh toán thông minh nhanh chóng, an toàn bảo mật thông tin…</p><p>Vận chuyển siêu tốc: Giao hàng trong ngày với hầu hết các sản phẩm trong nội thành TP. HCM và từ 2-4 ngày ở các khu vực khác ngoài TP. HCM.</p><p><strong>MetaH</strong> đã và đang nỗ lực không ngừng để hoàn thành sứ mệnh của mình: <strong>“NƠI AN TÂM MUA SẮM”</strong> cho mọi nhà, đáp ứng đầy đủ yêu cầu của khách hàng, mang đến sự thuận tiện, chất lượng đảm bảo khi sử dụng sản phẩm; gia tăng các giá trị, nâng cao chất lượng cuộc sống của người tiêu dùng trong bối cảnh thị trường hiện đại, phát triển rộng khắp tại Việt Nam.</p><p>Ngoài ra, <strong>MetaH</strong> còn chú trọng xây dựng môi trường làm việc chuyên nghiệp, năng động, sáng tạo và nhân văn; tạo điều kiện và cơ hội phát triển công bằng cho tất cả nhân viên; coi trọng người lao động như là tài sản quý giá nhất, đồng thời tích cực đóng góp vào các hoạt động xã hội, hướng về cộng đồng với những thông điệp mang tính nhân văn.</p><p><strong>XIN CHÂN THÀNH CẢM ƠN</strong></p>', '09:00:00', 1, '20:00:00', 'contact@metah.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `BlogID` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Blog_des` varchar(500) NOT NULL,
  `Content` text NOT NULL,
  `CreateAt` timestamp NOT NULL,
  `View` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `Blog_CategoryID` int(11) NOT NULL,
  `slug` varchar(500) NOT NULL,
  `thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`BlogID`, `Title`, `Blog_des`, `Content`, `CreateAt`, `View`, `UserId`, `Blog_CategoryID`, `slug`, `thumbnail`) VALUES
(8, '5 Gợi ý thiết kế nội thất hiện đại sang trọng cho căn hộ', 'Việc đầu tư cho thiết kế nội thất hiện đại sang trọng để nâng cấp căn hộ trở nên thật cao cấp chắc chắn là điều mà nhiều gia chủ mong muốn khi sở hữu một căn hộ tầm trung hoặc cao. Nhưng bắt đầu từ đâu? Với 5 gợi ý dưới đây, bạn sẽ dễ dàng định hình một ý tưởng thiết kế phù hợp với gu thẩm mỹ và cá tính để thực hiện căn hộ hiện đại sang trọng của riêng bạn.', '<h2><strong>Tạo điểm nhấn cho phòng khách sang trọng với vật liệu ánh kim</strong></h2><p>Khi nhắc đến sự sang trọng, cao cấp thì nhiều người nghĩ đến những chi tiết ánh kim. Quả thực là nhiều thiết kế nội thất đã trở nên sang trọng hơn khi vận dụng các chất liệu này. Những phần chân kim loại mạ vàng hay viền nhũ ánh kim khi kết hợp cùng màu gỗ sẽ giúp căn phòng lấp lánh và nổi bật. Đặc biệt, phòng khách thường gần ban công nên sẽ tận dụng cực kỳ tốt nguồn ánh sáng tự nhiên, khi tận dụng bày trí các sản phẩm nội thất lấp lánh ánh kim sẽ tạo điểm nhấn cho căn hộ của bạn.</p><figure class=\"image\"><img src=\"http://127.0.0.1:8000/images/blog/1958083496_thiet-ke-noi-that-can-ho-empire-nha-xinh-19.jpg\"></figure><h2><strong>Phòng ăn hiện đại trang bị sản phẩm công năng</strong></h2><p>Nhà bếp thường được chú trọng với sự hiện đại về công năng, bởi vì đây chính là trái tim của ngôi nhà. Do đó, bạn nên tham khảo ý kiến từ chuyên gia tư vấn để không gian này thật sự hài hòa và tiện dụng nhất. Riêng về bàn ăn, bạn có thể lựa chọn những sản phẩm phù hợp với sở thích của mình mà vẫn giữ được chất sang trọng, thẩm mỹ. Bàn ăn mở rộng là một lựa chọn tuyệt vời theo xu hướng gần đây cho không gian căn hộ, bởi thiết kế hiện đại, linh hoạt trong sử dụng, dễ dàng thay đổi kích thước mặt bàn theo nhu cầu. Bên cạnh đó, lựa chọn ghế ăn kết hợp với chủ đề phòng khách sẽ giúp không gian có sự kết nối và xuyên suốt về ý tưởng thiết kế.</p><figure class=\"image\"><img src=\"http://127.0.0.1:8000/images/blog/1641204663_thiet-ke-noi-that-can-ho-empire-nha-xinh-21.jpg\"></figure><p>&nbsp;</p><h2><strong>Không gian phòng ngủ tone màu trung tính với đồ nội thất sang trọng nhã nhặn</strong></h2><p><br>Không gian riêng tư như phòng ngủ luôn cần sự nhẹ nhàng và thoải mái, khi sử dụng tone màu trung tính giúp bạn cảm thấy thư giãn hơn hẳn. Nhưng không phải vì thế mà trang trí nội thất phòng ngủ lại trở nên nhạt nhòa: màu tường trầm kết hợp nội thất đơn giản sẽ là lựa chọn phong cách chủ đạo tối ưu, các chi tiết đầu giường hay bàn đầu giường cách điệu sẽ làm điểm nhấn độc đáo cho toàn bộ căn phòng. Bạn có thể chọn một chiếc giường bọc vải êm ái với nút nhấn đầu giường, đi kèm một chiếc tủ nhỏ nhắn tiện dụng, kết hợp tranh treo tường để giúp căn phòng thoải mái nhưng cũng đầy sự riêng tư.</p><figure class=\"image\"><img src=\"http://127.0.0.1:8000/images/blog/1596400802_thiet-ke-noi-that-can-ho-empire-nha-xinh-17.jpg\"></figure><h2><strong>Chi tiết trang trí bắt mắt, vừa phải nâng tầm nội thất cao cấp</strong></h2><p>Càng nhiều đồ thì càng sang trọng? Đó là một tư tưởng sai lầm đấy!<br>Không gian của bạn sẽ thật sự sang trọng và hiện đại nếu mọi thứ được sắp xếp và bố trí hợp lý, vừa phải với việc tận dụng tối đa công năng của chúng, nhất là trong các căn hộ chung cư với diện tích không gian không quá lớn. Các món đồ trang trí cần được đặt ở những vị trí vừa tầm mắt, số lượng vừa đủ và phù hợp với không gian. Như thế nội thất căn phòng sẽ không gây cảm giác gò bó mà trở nên thông thoáng, nhẹ nhàng.</p><figure class=\"image\"><img src=\"http://127.0.0.1:8000/images/blog/1531577534_thiet-ke-noi-that-can-ho-empire-nha-xinh-15.jpg\"></figure><h2><strong>Sử dụng đồ nội thất hiện đại sang trọng chất lượng cao</strong></h2><p>Không gian nội thất hiện đại sang trọng luôn có sự song hành giữa chất lượng bên trong và diện mạo bên ngoài. Đẹp thôi chưa đủ, các món đồ trang trí nội thất còn cần phải thật bền chắc. Vì vậy, lựa chọn sản phẩm từ các nhà cung cấp nội thất uy tín và chất lượng sẽ giúp không gian sang trọng, đúng nghĩa “tốt cả gỗ lẫn nước sơn”. Các món đồ có thể sử dụng lâu dài sẽ giúp bạn tiết kiệm một khoản chi phí lớn, đây cũng là một sự đầu tư xứng đáng cho căn nhà.&nbsp;</p><figure class=\"image\"><img src=\"https://nhaxinh.com/wp-content/uploads/2021/12/thiet-ke-noi-that-can-ho-empire-nha-xinh-19-1.jpg\" alt=\"Sử dụng đồ nội thất hiện đại sang trọng chất lượng cao\"></figure><p><strong>Nguồn: </strong><i><strong>Nhà Xinh</strong></i></p>', '2021-12-03 00:00:00', 0, 25, 1, '5-goi-y-thiet-ke-noi-that-hien-dai-sang-trong-cho-can-ho.1638510989', '1170149586_thiet-ke-noi-that-can-ho-empire-nha-xinh-19.jpg'),
(9, '8 ý tưởng bố trí phòng khách đơn giản vừa đẹp vừa sang', 'Phòng khách là một trong những không gian được sử dụng nhiều nhất và đa chức năng nhất. Việc bố trí phòng khách đẹp rất đa dạng, nhưng nó phụ thuộc vào cách bạn sử dụng như thế nào.', '<h2><strong>Ý tưởng bố trí phòng khách đẹp</strong></h2><p>Phòng khách là một trong những không gian được sử dụng nhiều nhất và đa chức năng nhất. Việc <a href=\"https://www.ekeinterior.com/25-mau-phong-khach-dep-truyen-cam-hung.html\"><strong>bố trí phòng khách đẹp</strong></a> rất đa dạng, nhưng nó phụ thuộc vào cách bạn sử dụng như thế nào.</p><p>Đầu tiên, khi quyết định bố trí phòng khách của mình, bạn cần xác định mục đích của nó. Bạn có cần nhiều chỗ ngồi hay chỉ cần một chiếc sofa là đủ? Đó sẽ là một không gian đa chức năng, để thư giãn, để giải trí, làm việc, đọc sách, lưu trữ? Không gian nên giản dị, sang trọng hay bao gồm cả hai?</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/cach-bo-tri-sofa-phong-khach-can-ho-chung-cu-dep.jpg\" alt=\"cach bo tri sofa phong khach can ho chung cu dep\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/cach-bo-tri-sofa-phong-khach-can-ho-chung-cu-dep.jpg 1080w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/cach-bo-tri-sofa-phong-khach-can-ho-chung-cu-dep-300x222.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/cach-bo-tri-sofa-phong-khach-can-ho-chung-cu-dep-1024x759.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/cach-bo-tri-sofa-phong-khach-can-ho-chung-cu-dep-768x569.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/cach-bo-tri-sofa-phong-khach-can-ho-chung-cu-dep-585x433.jpg 585w\" sizes=\"100vw\" width=\"1080\"></p><p>Khi bạn đã xác định rõ nhu cầu, bạn sẽ quyết định chính xác “cấu hình” cho không gian. Bởi trong cách bố trí nội thất phòng khách nói riêng và tất cả không gian nói chung, đều có những nguyên tắc, trong đó có nguyên tắc thị giác. Ví dụ,như bố trí cân bằng, nhấn mạnh, nhịp điệu, đối xứng, bất đối xứng, v.v…</p><p>Ngoài ra, tính chất của không gian là ấm cúng, thân mật, trang nghiêm, đối thoại, hay tương tác, v.v…Tất cả đều quyết định đến cách mà bạn sẽ bố trí phòng khách.</p><p>Dưới đây là 8 ý tưởng sắp xếp và bố trí nội thất phòng khách đẹp để bạn tham khảo trước khi làm nhà:</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/cach-ke-sofa-phong-khach-dep-cho-nha-pho.jpg\" alt=\"cach bo tri phong khach dep cho nha pho\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/cach-ke-sofa-phong-khach-dep-cho-nha-pho.jpg 728w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/cach-ke-sofa-phong-khach-dep-cho-nha-pho-176x300.jpg 176w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/cach-ke-sofa-phong-khach-dep-cho-nha-pho-601x1024.jpg 601w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/cach-ke-sofa-phong-khach-dep-cho-nha-pho-585x996.jpg 585w\" sizes=\"100vw\" width=\"728\"></figure><h3><strong>Bố trí phòng khách # 1: hình chữ U</strong></h3><p>Với bố cục sắp xếp hình chữ U có thể dùng hai ghế sofa song song, và hai ghế armchair ở bên cạnh. Hoặc dùng kiểu sofa chữ U. Việc bố trí <a href=\"https://www.ekeinterior.com/xu-huong-thiet-ke-noi-that-phong-khach-dep-2020.html\">sofa phòng khách</a> hình chữ U chỉ phù hợp trong các phòng khách lớn, nơi có thể chứa nhiều đồ đạc và có lối giao thông rộng rãi. Kiểu bố trí này dễ thấy ở các nhà biệt thự hơn là nhà phố hay căn hộ chung cư.</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/mat-bang-bo-tri-noi-that-phong-khach-chu-U.jpg\" alt=\"bo tri noi that phong khach chu U\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/mat-bang-bo-tri-noi-that-phong-khach-chu-U.jpg 1080w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/mat-bang-bo-tri-noi-that-phong-khach-chu-U-300x167.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/mat-bang-bo-tri-noi-that-phong-khach-chu-U-1024x569.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/mat-bang-bo-tri-noi-that-phong-khach-chu-U-768x427.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/mat-bang-bo-tri-noi-that-phong-khach-chu-U-585x325.jpg 585w\" sizes=\"100vw\" width=\"1080\"></p><p>Phòng khách, nếu <a href=\"https://thietkenoithatblog.com/ghe-sofa-nao-phu-hop-voi-phong-khach-nha-ban.html\">bố trí sofa</a> hình chữ U, bạn phải luôn lưu ý đến tâm điểm của chúng là gì. Tâm điểm của sofa có thể là view nhìn đẹp, tủ tv, hoặc màn hình chiếu phim lớn. Đối với thiết kế kiểu cổ điển Châu Âu thì tâm điểm của phòng khách thường là lò sưởi.</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-sofa-phong-khach-chu-u.jpg\" alt=\"bo tri sofa phong khach chu u\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-sofa-phong-khach-chu-u.jpg 1080w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-sofa-phong-khach-chu-u-300x194.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-sofa-phong-khach-chu-u-1024x664.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-sofa-phong-khach-chu-u-768x498.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-sofa-phong-khach-chu-u-585x379.jpg 585w\" sizes=\"100vw\" width=\"1080\"></p><p>Cấu hình phòng khách hình chữ U vô hình dung đã tạo ra một sự phân chia khu vực rất rõ ràng. Cách bố trí này khuyến khích và thúc đây sự tương tác &amp; trò chuyện giữa các thành viên trong gia đình hơn, đồng thời có nhiều chỗ ngồi và là một trong những cách sắp xếp chỗ ngồi thoải mái nhất.</p><h3><strong>Bố trí phòng khách # 2: đối xứng và song song</strong></h3><p>&nbsp;Trong nghệ thuật <a href=\"https://thietkenoithatblog.com/thiet-ke-chung-cu-safira-khang-dien-3-phong-ngu-85m2.html\">thiết kế nội thất</a> và kiến ​​trúc, tính đối xứng từ lâu được coi là sự hài hòa bởi vẻ đẹp và sự cân bằng của nó. Cách sắp xếp đồ nội thất song song đối xứng, là sự phản chiếu hoàn hảo. Hai ghế sofa đối diện nhau, được kết nối bởi bàn trà, là cấu hình phổ biến nhất. Mặc dù có thể cùng một ý tưởng đó nhưng có thể bố trí phòng khách theo kiểu khác.</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/sap-xep-sofa-phong-khach-kieu-song-song.jpg\" alt=\"bo tri phong khach doi xung song song\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/sap-xep-sofa-phong-khach-kieu-song-song.jpg 1080w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/sap-xep-sofa-phong-khach-kieu-song-song-300x194.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/sap-xep-sofa-phong-khach-kieu-song-song-1024x664.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/sap-xep-sofa-phong-khach-kieu-song-song-768x498.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/sap-xep-sofa-phong-khach-kieu-song-song-585x379.jpg 585w\" sizes=\"100vw\" width=\"1080\"></p><p>Hình thức đối xứng của việc bố trí này rất phù hợp với các thiết kế nội thất cổ điển hoặc tân cổ điển. Và đặc điểm kiến ​​trúc cổ điển cũng có tính chất đối xứng tương tự như trong bố trí nội thất.</p><p>Giống như kiểu sắp xếp hình chữ U, lối bố trí này cũng có tiêu điểm (tủ TV, lò sưởi…) Nhưng khác ở chổ, cách bố trí đối xứng song song nhấn mạnh sự tương tác trực tiếp, trực diện và mang tính trang nghiêm hơn.</p><h3><strong>Bố trí phòng khách # 3: không đối xứng và song song</strong></h3><p>Một phòng khách được bố trí theo kiểu song song không đối xứng có đặc điểm tương tự với bố trí đối xứng. Nghĩa là cũng ngồi đối diện, song song, kết nối bởi bàn sofa. Sự khác biệt nằm ở chỗ ngồi. Một sofa dài, đối diện là hai sofa đơn, hoặc hai ghế armchair.</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/8-y-tuong-bo-tri-phong-khach-don-gian-vua-dep-vua-sang.jpg\" alt=\"cach bo tri sofa phong khach vua dep vua sang\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/8-y-tuong-bo-tri-phong-khach-don-gian-vua-dep-vua-sang.jpg 1079w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/8-y-tuong-bo-tri-phong-khach-don-gian-vua-dep-vua-sang-300x195.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/8-y-tuong-bo-tri-phong-khach-don-gian-vua-dep-vua-sang-1024x664.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/8-y-tuong-bo-tri-phong-khach-don-gian-vua-dep-vua-sang-768x498.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/8-y-tuong-bo-tri-phong-khach-don-gian-vua-dep-vua-sang-585x380.jpg 585w\" sizes=\"100vw\" width=\"1079\"></p><p>Lối bố trí sofa này áp dụng trong trường hợp không gian có diện tích không quá rộng, và lối giao thông bị hạn chế về diện tích. Do đó, mục đích của việc sử dụng hai ghế sofa đơn là để thuận tiện việc ra vào dễ dàng. Ưu điểm của cách bố trí này là đảm bảo chổ ngồi phù hợp, lưu thông dễ dàng, sự riêng tư cần thiết và di chuyển linh hoạt.</p><h3><strong>Bố trí phòng khách # 4: hình chữ L</strong></h3><p>Sắp xếp phòng khách hình chữ L được thiết lập bằng cách đặt ghế phụ vuông góc với sofa chính. Hoặc sofa hình L. Tâm điểm của sofa thường là tủ TV. Cách này khá phố biến đối với nhà phố và căn hộ chung cư, hoặc phòng có diện tích nhỏ.</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/8-y-tuong-bo-tri-phong-khach-don-gian-vua-dep-vua-sang-ekeinterior.jpg\" alt=\"8 y tuong bo tri phong khach don gian vua dep vua sang-eke\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/8-y-tuong-bo-tri-phong-khach-don-gian-vua-dep-vua-sang-ekeinterior.jpg 1080w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/8-y-tuong-bo-tri-phong-khach-don-gian-vua-dep-vua-sang-ekeinterior-300x194.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/8-y-tuong-bo-tri-phong-khach-don-gian-vua-dep-vua-sang-ekeinterior-1024x664.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/8-y-tuong-bo-tri-phong-khach-don-gian-vua-dep-vua-sang-ekeinterior-768x498.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/8-y-tuong-bo-tri-phong-khach-don-gian-vua-dep-vua-sang-ekeinterior-585x379.jpg 585w\" sizes=\"100vw\" width=\"1080\"></p><p><i>Bố trí sofa phòng khách chữ L</i></p><p>Cách bố trí sofa chữ L tối ưu về diện tích, thích hợp cho nhà có người già trẻ em, và tất nhiên cũng không kém phần ấm cúng. Ngoài ra góc sofa chữ L mang lại sự thoải mái, thích hợp để ngã lưng, thư giãn, đọc sách, v.v…</p><h3><strong>Sắp xếp phòng khách # 5: hình hộp</strong></h3><p>Đối với cách bố trí bàn ghế sofa phòng khách dạng hình hộp, đòi hỏi diện tích phòng khách phải lớn, các lối lưu thông rộng rãi. Lối di ra vào giữa các ghế armchair và sofa phải linh hoạt. Điểm kết nối, đồng thời là tâm điểm của cách bố trí này là bàn trà phải có tỷ lệ cân đối. Quá to hoặc quá nhỏ sẽ mất cân đối, làm cho phòng khách trở nên kém sang.</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-phong-khach-hinh-vuong.jpg\" alt=\"cach bo tri phong khach sofa hinh vuong\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-phong-khach-hinh-vuong.jpg 1080w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-phong-khach-hinh-vuong-300x194.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-phong-khach-hinh-vuong-1024x664.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-phong-khach-hinh-vuong-768x498.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-phong-khach-hinh-vuong-585x379.jpg 585w\" sizes=\"100vw\" width=\"1080\"></p><p>Bố cục phòng khách hình hộp lý tưởng cho những căn phòng không có điểm nhấn. Mục đích của không gian này là hướng cuộc trò chuyện vào bên trong. Mang đến sự tập trung khi một không gian quá rộng rãi. Sự sắp xếp này cũng rất tuyệt vời cho những buổi họp mặt gia đình.</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/ke-ghe-sofa-hinh-vuong-trong-phong-khach-rat-dep.jpg\" alt=\"ke ghe sofa hinh vuong trong phong khach rat dep\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/ke-ghe-sofa-hinh-vuong-trong-phong-khach-rat-dep.jpg 1080w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/ke-ghe-sofa-hinh-vuong-trong-phong-khach-rat-dep-300x250.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/ke-ghe-sofa-hinh-vuong-trong-phong-khach-rat-dep-1024x853.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/ke-ghe-sofa-hinh-vuong-trong-phong-khach-rat-dep-768x640.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/ke-ghe-sofa-hinh-vuong-trong-phong-khach-rat-dep-585x488.jpg 585w\" sizes=\"100vw\" width=\"1080\"></p><p>&nbsp;</p><h3><strong>Sắp xếp phòng khách # 6: hình tròn</strong></h3><p>Đặc trưng bởi sự sắp xếp các ghế đơn xung quanh bàn trà tròn. Ghế sofa cong là một sự thay thế hợp lý cho cách bố trí phòng khách hình tròn. Để bố cục chặt chẽ hơn, giải pháp thảm sàn là không phải bàn cãi.</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-sofa-hinh-tron-cho-phong-khach.jpg\" alt=\"bo tri sofa hinh tron cho phong khach\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-sofa-hinh-tron-cho-phong-khach.jpg 1080w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-sofa-hinh-tron-cho-phong-khach-300x200.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-sofa-hinh-tron-cho-phong-khach-1024x683.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-sofa-hinh-tron-cho-phong-khach-768x512.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-sofa-hinh-tron-cho-phong-khach-585x390.jpg 585w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-sofa-hinh-tron-cho-phong-khach-263x175.jpg 263w\" sizes=\"100vw\" width=\"1080\"></p><p>Ưu điểm của cấu hình tròn là không cần tiêu điểm, và có thể hoán đổi linh hoạt ở bất kỳ vị trí nào trong không gian. Ngoài ra còn đảm bảo sự riêng tư của từng cá nhân, trong khi vẫn thúc đẩy sự tương tác trực tiếp và thân mật.</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/ke-sofa-phong-khach-nha-hinh-tron.jpg\" alt=\"ke sofa phong khach nha hinh tron \" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/ke-sofa-phong-khach-nha-hinh-tron.jpg 1080w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/ke-sofa-phong-khach-nha-hinh-tron-300x222.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/ke-sofa-phong-khach-nha-hinh-tron-1024x759.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/ke-sofa-phong-khach-nha-hinh-tron-768x569.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/ke-sofa-phong-khach-nha-hinh-tron-585x433.jpg 585w\" sizes=\"100vw\" width=\"1080\"></p><p>Nhược điểm của việc bố trí phòng khách hình tròn là phòng khách phải có diện tích lớn. Cho nên chúng thường không thích hợp để bố trí ở vị trí trung tâm của phòng khách. Hay nói cách khác, chức năng là khu vực tiếp khách phụ có vẻ phù hợp hơn.</p><h3><strong>Sắp xếp phòng khách # 7: sắp xếp chỗ ngồi đôi</strong></h3><p>Các khu vực tiếp khách riêng biệt này không nhất thiết phải giống nhau về kiểu dáng, kích thước hoặc mục đích. Trên thực tế, chúng có thể là một cách tốt để tạo ra sự khác biệt trong một phòng khách lớn.</p><p>Hai đèn chiếu sáng, hoặc một tủ sách cao giữa hai sofa sẽ mang lại sự riêng tư cho mỗi không gian. Nếu bạn muốn duy trì cảm giác hòa hợp trong căn phòng, hãy chọn một phần ngăn cách thấp hơn, ví dụ như lưng ghế thấp hoặc bàn, kệ console.</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-cho-ngoi-doi-trong-phong-khach-biet-thu.jpg\" alt=\"bo tri cho ngoi doi trong phong khach biet thu\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-cho-ngoi-doi-trong-phong-khach-biet-thu.jpg 1080w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-cho-ngoi-doi-trong-phong-khach-biet-thu-300x200.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-cho-ngoi-doi-trong-phong-khach-biet-thu-1024x684.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-cho-ngoi-doi-trong-phong-khach-biet-thu-768x513.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-cho-ngoi-doi-trong-phong-khach-biet-thu-585x391.jpg 585w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/bo-tri-cho-ngoi-doi-trong-phong-khach-biet-thu-263x175.jpg 263w\" sizes=\"100vw\" width=\"1080\"></p><p>Cách sắp xếp kiểu này cho phép lựa chọn vị trí ngồi thích hợp. Trọng tâm của mỗi vùng sẽ được nhấn mạnh bằng đèn chùm sang trọng. Tiêu điểm của cấu hình này sẽ được phân bổ dọc hai bên lối đi. Lối bố trí phòng khách theo cách này thích hợp cho những dinh thự, nơi mà phong khách là những đại sảnh lớn.</p><h3><strong>Sắp xếp phòng khách # 8: phòng khách thông với phòng ăn</strong></h3><p>Giải pháp này thường được áp dụng cho phòng khách có hình chữ nhật. Bố trí <a href=\"https://www.ekeinterior.com/bi-quyet-trang-tri-phong-khach-dep-cho-nha-o.html\">phòng khách</a> thông với phòng ăn được sử hầu hết trong các căn hộ chung cư cho đến phố, cũng như các biệt thự lớn.</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/mat-bang-bo-tri-phong-khach-thong-voi-phong-an.jpg\" alt=\"mat bang bo tri phong khach thong voi phong an\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/mat-bang-bo-tri-phong-khach-thong-voi-phong-an.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/mat-bang-bo-tri-phong-khach-thong-voi-phong-an-300x205.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/mat-bang-bo-tri-phong-khach-thong-voi-phong-an-768x525.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/mat-bang-bo-tri-phong-khach-thong-voi-phong-an-585x400.jpg 585w\" sizes=\"100vw\" width=\"1024\"></p><p>Sự sắp xếp hai trong một này mang lại không khí gia đình gần gũi và thân mật vô tận, bởi nó khuyến khích những cuộc trò chuyện giữa các thành viên sau bữa tối.</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/y-tuong-bo-tri-phong-khach-thong-voi-phong-an.jpg\" alt=\"sap xep phong khach ke phong an\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/09/y-tuong-bo-tri-phong-khach-thong-voi-phong-an.jpg 927w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/y-tuong-bo-tri-phong-khach-thong-voi-phong-an-295x300.jpg 295w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/y-tuong-bo-tri-phong-khach-thong-voi-phong-an-768x782.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/09/y-tuong-bo-tri-phong-khach-thong-voi-phong-an-585x596.jpg 585w\" sizes=\"100vw\" width=\"927\"></p><p>Với <strong>8</strong> <strong>ý tưởng bố trí nội thất phòng khách</strong> chúng tôi vừa gợi ý, hy vọng sẽ mang tới niềm cảm hứng cho bạn trong việc quyết định chọn phương án bố trí phù hợp cho phòng khách thêm đẹp và sang trọng hơn.</p>', '2021-12-03 00:00:00', 0, 25, 4, '8-y-tuong-bo-tri-phong-khach-don-gian-vua-dep-vua-sang.1638511138', '660699625_cach-bo-tri-sofa-phong-khach-can-ho-chung-cu-dep.jpg'),
(10, 'Khám phá sức hấp dẫn kỳ lạ của phong cách nội thất Moroccan', 'Bên cạnh các phong cách thiết kế nội thất Scandinavian, Bohemian, phong cách hiện đại, cổ điển v.v…Chúng ta còn có một phong cách ít được biết đến: phong cách Moroccan (Maroc). Một lối thiết kế khá phổ biến tại các khu vực Bắc Phi và Ả Rập.', '<h2><strong>Khái niệm, nguồn gốc, lịch sử</strong></h2><h3><strong>Phong cách Moroccan là gì?</strong></h3><p>Moroccan phiên âm tiếng Việt có nghĩa là Ma Rốc. Đây là phong cách được thiết kế dựa trên sự hòa trộn của nhiều nền văn hóa khác nhau. Điển hình là từ Châu Âu, Châu Phi và Địa Trung Hải.</p><p>Nhắc đến phong cách Moroccan, ta liên tưởng đến những đường nét chạm trổ tinh xảo. Sự mộc mạc đậm chất Châu Phi. Những sắc màu sặc sỡ. Các chất liệu tự nhiên với hơi thở gần gũi. Hệt như phong cách Scandinavian hay <a href=\"https://www.ekeinterior.com/bi-mat-phong-cach-noi-that-hy-lap-va-nhung-y-tuong-chua-duoc-khai-pha.html\"><strong>phong cách Hy Lạp</strong></a>, Địa Trung Hải.</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/Phong-cach-thiet-ke-Moroccan.jpg\" alt=\"Phong cach thiet ke ma roc - Moroccan\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/Phong-cach-thiet-ke-Moroccan.jpg 691w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/Phong-cach-thiet-ke-Moroccan-259x300.jpg 259w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/Phong-cach-thiet-ke-Moroccan-585x677.jpg 585w\" sizes=\"100vw\" width=\"691\"></p><p>Sự kết hợp giữa các nền văn hóa làm cho phong cách Moroccan trở nên nổi bật hơn. Moroccan Như một làn gió lạ, tô điểm thêm nhiều sắc màu cho các công trình kiến trúc, nội thất.</p><h3><strong>Nguồn gốc, lịch sử của phong cách Ma rốc (Moroccan)</strong></h3><p>Theo nghiên cứu, phong cách Moroccan được hình thành phần lớn nhờ sự đa dạng của các nền văn hóa. Trong đó, công lao đầu tiên thuộc về người Berber – một dân tộc đến từ sa mạc Bắc Phi. Họ rất yêu thích những tấm thảm và điêu khắc gỗ đầy tinh xảo với nhiều màu sắc hấp dẫn.</p><p>Bên cạnh đó, chúng ta cũng không thể quên được người Moor. Vào những năm 700, người Moor đã chinh phục bán đảo Iberia – nay được gọi là Tây Ban Nha. Chính điều này đã phần nào khiến cho phong cách Moroccan bị ảnh hưởng bởi <a href=\"https://www.ekeinterior.com/dia-trung-hai-phong-cach-noi-that-duoc-yeu-thich-moi-thoi-dai.html\"><strong>phong cách Địa Trung Hải</strong></a> và Hy Lạp La Mã.</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/Nguon-goc-lich-su-maroc-Moroccan-2.jpg\" alt=\"Nguon goc lich su maroc-Moroccan\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/Nguon-goc-lich-su-maroc-Moroccan-2.jpg 1020w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/Nguon-goc-lich-su-maroc-Moroccan-2-300x169.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/Nguon-goc-lich-su-maroc-Moroccan-2-768x431.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/Nguon-goc-lich-su-maroc-Moroccan-2-585x329.jpg 585w\" sizes=\"100vw\" width=\"1020\"></p><p>Trước khi người Moor đến thì người La Mã đã cai trị bán đảo này. Cho đến đầu thế kỷ 20, Maroc chính thức trở thành một trong những quốc gia chịu bảo hộ của Pháp. Từ đó khiến cho nền văn hóa Châu Âu bắt đầu du nhập vào quốc gia này.</p><p>Những yếu tố trên đã tạo nên phong cách Moroccan ngày nay. Đó chính là sự pha trộn đầy khác biệt giữa hình thức, màu sắc và hoa văn, ảnh hưởng đến cả kiến trúc và đồ nội thất.</p><h3><strong>Đặc trưng phong cách thiết kế Ma rốc – Moroccan</strong></h3><h4><strong>Hình khối</strong></h4><ul><li>Phong cách Moroccan được thiết kế đơn giản, mộc mạc và không hề rườm rà.</li><li>Dễ dàng bắt gặp những tác phẩm điêu khắc.</li><li>Những cánh cửa của ngôi nhà luôn được uốn cong, tròn, nhọn.</li><li>Đi cùng với đó là những họa tiết đầy màu sắc, nhưng được dung hòa với nhau một cách đặc biệt.</li></ul><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/noi-that-phong-cach-ma-roc.jpg\" alt=\"thiết kế nhà kiểu Moroccan\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/noi-that-phong-cach-ma-roc.jpg 1080w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/noi-that-phong-cach-ma-roc-300x222.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/noi-that-phong-cach-ma-roc-1024x759.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/noi-that-phong-cach-ma-roc-768x569.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/noi-that-phong-cach-ma-roc-585x433.jpg 585w\" sizes=\"100vw\" width=\"1080\"></p><h4><strong>Màu sắc</strong></h4><ul><li>Màu sắc đặc trưng Moroccan là gam màu của đất và màu của ánh sáng mặt trời vô cùng ấn tượng.</li><li>Đi cùng với đó là những gam màu ngọc lam rất sống động.</li><li>Ngoài ra, phong cách này cũng rất chuộng những màu nổi như tím, socola, xanh ngọc, màu xanh dương, màu olive, màu hổ phách hay màu bạc,…</li></ul><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/dac-trung-phong-cach-thiet-ke-ma-roc.jpg\" alt=\"thiết kế Moroccan\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/dac-trung-phong-cach-thiet-ke-ma-roc.jpg 1080w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/dac-trung-phong-cach-thiet-ke-ma-roc-300x222.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/dac-trung-phong-cach-thiet-ke-ma-roc-1024x759.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/dac-trung-phong-cach-thiet-ke-ma-roc-768x569.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/dac-trung-phong-cach-thiet-ke-ma-roc-585x433.jpg 585w\" sizes=\"100vw\" width=\"1080\"></p><h3><strong>Nguyên tắc thiết kế, cách phối màu kiểu Moroccan</strong></h3><p>Trong thiết kế nội thất Moroccan, ta dễ dàng tìm thấy một loạt màu sắc đậm với hoa văn và kết cấu vật liệu sống động. Chúng bị ảnh hưởng một phần bởi yếu tố thiên nhiên. Những ngôi nhà ở Moroccan cũng vô cùng nổi bật bởi sự đa dạng màu sắc, từ dịu nhẹ đến tinh tế.</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/hinh-khoi-kien-truc-phong-cach-ma-roc.jpg\" alt=\"kien truc phong cach ma roc\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/hinh-khoi-kien-truc-phong-cach-ma-roc.jpg 1067w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/hinh-khoi-kien-truc-phong-cach-ma-roc-300x225.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/hinh-khoi-kien-truc-phong-cach-ma-roc-1024x768.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/hinh-khoi-kien-truc-phong-cach-ma-roc-768x576.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/hinh-khoi-kien-truc-phong-cach-ma-roc-585x439.jpg 585w\" sizes=\"100vw\" width=\"1067\"></p><p>Lấy màu sắc là yếu tố trọng tâm trong trang trí Moroccan. Bởi phong cách này vốn được lấy cảm hứng từ những cảnh quan thiên nhiên. Từ màu xanh lam và xanh lục của đại dương bao la. Cho đến cả những màu sắc chói lóa của sa mạc.</p><p>Để có được màu sắc như Maroccan, hãy trang trí và kết hợp nó với gam màu xanh lam, màu đỏ, kim tuyến và vàng để thu hút thêm sự chú ý.</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/phoi-mau-noi-that-kieu-ma-roc.jpg\" alt=\"phoi mau noi that kieu ma roc\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/phoi-mau-noi-that-kieu-ma-roc.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/phoi-mau-noi-that-kieu-ma-roc-300x255.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/phoi-mau-noi-that-kieu-ma-roc-768x654.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/phoi-mau-noi-that-kieu-ma-roc-585x498.jpg 585w\" sizes=\"100vw\" width=\"900\"></p><p>Để tạo ra được sự tương phản ấn tượng. Bạn nên để những gam màu này lên trên những phông nền trung tính. Bởi nó sẽ giúp cho không gian càng thêm xa hoa tráng lệ hơn bao giờ hết.</p><p>Bên cạnh màu sắc, các hoa văn cũng phần nào giúp tăng thêm sự thú vị cho thị giác. Những họa tiết này sẽ nhanh chóng kết hợp với sắc ấm của màu sắc để giúp thổi bùng sức sống của không gian. Ngoài ra, việc kết hợp các kết cấu một cách phù hợp cũng khiến cho ngôi nhà kiểu Moroccan thêm ấn tượng hơn.</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/hoa-van-kieu-ma-roc-maroccan.jpg\" alt=\"hoa van kieu ma roc-maroccan\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/hoa-van-kieu-ma-roc-maroccan.jpg 1080w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/hoa-van-kieu-ma-roc-maroccan-300x200.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/hoa-van-kieu-ma-roc-maroccan-1024x683.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/hoa-van-kieu-ma-roc-maroccan-768x512.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/hoa-van-kieu-ma-roc-maroccan-585x390.jpg 585w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/hoa-van-kieu-ma-roc-maroccan-263x175.jpg 263w\" sizes=\"100vw\" width=\"1080\"></p><p>Ví dụ: bạn có thể sử dụng thêm màn che hoặc rèm để làm mềm, dịu căn phòng nhiều màu sắc này. Trong khi đó, sử dụng đèn kim loại bằng sắt rèn cũng sẽ là một yếu tố phù hợp.</p><h3>&nbsp;</h3><h3><strong>Ứng dụng trong không gian nhà ở</strong></h3><h4><strong>Phòng khách Moroccan (Ma rốc)</strong></h4><p>Ở nhiều phong cách khác nhau, phòng khách luôn là khu vực được chú trọng nhất. Đồng thời cũng là nơi để phong cách được lột tả rõ nhất.</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/noi-that-phong-khach-kieu-moroccan-2.jpg\" alt=\"phòng khách Moroccan\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/noi-that-phong-khach-kieu-moroccan-2.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/noi-that-phong-khach-kieu-moroccan-2-300x280.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/noi-that-phong-khach-kieu-moroccan-2-768x718.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/noi-that-phong-khach-kieu-moroccan-2-585x547.jpg 585w\" sizes=\"100vw\" width=\"900\"></p><p>Tương tự, phong cách Moroccan cũng vậy. Phòng khách thường được bố trí một dãy ghế dài nối liền nhau và được kê sát tường, đối diện đặt một chiếc bàn uống trà. Những món đồ nội thất xung quanh được bọc da và trang trí với những màu sắc ấm áp. Bên trên ghế thường có thêm những chiếc gối vuông với hoa văn đặc trưng của vùng Ả Rập.</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-khach-phong-cach-ma-roc.jpg\" alt=\"phòng khách phong cách Moroccan\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-khach-phong-cach-ma-roc.jpg 1512w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-khach-phong-cach-ma-roc-300x139.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-khach-phong-cach-ma-roc-1024x474.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-khach-phong-cach-ma-roc-768x356.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-khach-phong-cach-ma-roc-1170x542.jpg 1170w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-khach-phong-cach-ma-roc-585x271.jpg 585w\" sizes=\"100vw\" width=\"1512\"></p><p>Không chỉ vậy, phòng khách còn được bố trí thêm những món đồ gốm sứ, những sản phẩm được dệt, thêu thủ công, những ánh đèn kim loại và đèn lồng độc đáo. Tất cả đều khiến cho ngôi nhà được trở nên ấm áp hơn.</p><h4><strong>Nhà bếp &amp; phòng ăn kiểu Maroc</strong></h4><p>Đối với phòng bếp, hãy sử dụng những gam màu sắc tinh khôi và thuần khiết để làm nổi bật nên đặc điểm của phong cách này. Ngoài ra, một phòng bếp tươi sáng sẽ phần nào giúp mang lại cảm giác hào hứng, vui vẻ trong quá trình nấu nướng.</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-an-bep-phong-cach-Ma-Roc.jpg\" alt=\"phòng ăn Maroc\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-an-bep-phong-cach-Ma-Roc.jpg 1200w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-an-bep-phong-cach-Ma-Roc-300x199.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-an-bep-phong-cach-Ma-Roc-1024x678.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-an-bep-phong-cach-Ma-Roc-768x508.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-an-bep-phong-cach-Ma-Roc-1170x774.jpg 1170w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-an-bep-phong-cach-Ma-Roc-780x516.jpg 780w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-an-bep-phong-cach-Ma-Roc-585x387.jpg 585w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-an-bep-phong-cach-Ma-Roc-263x175.jpg 263w\" sizes=\"100vw\" width=\"1200\"></p><p>Bên cạnh đó, bạn cũng có thể kết hợp những gam màu đặc trưng và ấm áp mang đậm phong cách Moroccan như màu Olive, socola, xanh dương, hổ phách,… Hoặc là những gam màu nóng như cam, đỏ, vàng, hồng,.. Nó sẽ mang đến cho căn bếp của bạn một vẻ đẹp vô cùng bình dị nhưng cũng thật gần gũi.</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-an-phong-cach-moroccan.jpg\" alt=\"Noi that phong an Moroccan\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-an-phong-cach-moroccan.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-an-phong-cach-moroccan-300x275.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-an-phong-cach-moroccan-768x704.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-an-phong-cach-moroccan-585x536.jpg 585w\" sizes=\"100vw\" width=\"900\"></p><p>Đối với style Maroccan, ta cũng có thể sử dụng thêm nhiều thảm với các họa tiết đẹp mắt. Những khung cửa bên cạnh bếp được sơn với những gam màu rực rỡ. Ngoài ra còn có thêm những bộ bát đĩa ăn có họa tiết gốm sứ trông thật ấn tượng. Tất cả chúng sẽ tạo nên một căn phòng ấm áp hơn.</p><h4><strong>Phòng ngủ phong cách Maroccan</strong></h4><p>Thiết kế phòng ngủ kiểu Ma rốc, bạn nên ứng dụng những gam màu ấm áp như màu: vàng, đỏ, nghệ tây, tím, xanh dương, xanh cô ban,.. Kết hợp với đó là mặt sàn được trải những tấm thảm dệt Ba Tư hoặc thảm dệt Kilim. Chúng góp phần tạo nên một vẻ đẹp rất riêng cho phòng ngủ.</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/thiet-ke-phong-ngu-Moroccan-Ma-Roc-1.jpg\" alt=\"Phong cách Maroccan\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/thiet-ke-phong-ngu-Moroccan-Ma-Roc-1.jpg 1089w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/thiet-ke-phong-ngu-Moroccan-Ma-Roc-1-300x246.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/thiet-ke-phong-ngu-Moroccan-Ma-Roc-1-1024x839.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/thiet-ke-phong-ngu-Moroccan-Ma-Roc-1-768x629.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/thiet-ke-phong-ngu-Moroccan-Ma-Roc-1-585x479.jpg 585w\" sizes=\"100vw\" width=\"1089\"></p><p>Những tấm vải được dệt bằng chất liệu mềm mại cũng nên được tận dụng để làm rèm trang trí phòng ngủ. Bởi chúng mang đến một dấu ấn trong thiết kế nội thất phong cách Moroccan. Không gian phòng ngủ mang phong cách Moroccan sẽ được trang trí thêm các thanh gỗ mang những màu sắc nhẹ nhàng như trắng sữa, màu bạc, vàng nhạt,…tạo nên điểm nhấn ấn tượng cho những bức tường thô.</p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/thiet-ke-phong-ngu-Moroccan-Ma-Roc-2.jpg\" alt=\"Phòng ngủ phong cách Maroccan\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/thiet-ke-phong-ngu-Moroccan-Ma-Roc-2.jpg 1100w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/thiet-ke-phong-ngu-Moroccan-Ma-Roc-2-300x245.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/thiet-ke-phong-ngu-Moroccan-Ma-Roc-2-1024x838.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/thiet-ke-phong-ngu-Moroccan-Ma-Roc-2-768x628.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/thiet-ke-phong-ngu-Moroccan-Ma-Roc-2-585x479.jpg 585w\" sizes=\"100vw\" width=\"1100\"></p><h4><strong>Thiết kế phòng tắm kiểu Ma Rốc</strong></h4><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-tam-phong-cach-maroc-Moroccan.jpg\" alt=\"phong tam maroc-Moroccan\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-tam-phong-cach-maroc-Moroccan.jpg 1152w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-tam-phong-cach-maroc-Moroccan-300x222.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-tam-phong-cach-maroc-Moroccan-1024x758.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-tam-phong-cach-maroc-Moroccan-768x569.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/phong-tam-phong-cach-maroc-Moroccan-585x433.jpg 585w\" sizes=\"100vw\" width=\"1152\"></p><h4><strong>Sân vườn kiểu Moroccan</strong></h4><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/san-vuon-kieu-maroc.jpg\" alt=\"thiết kế vườn phong cách ma rốc- moroccan\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/san-vuon-kieu-maroc.jpg 1200w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/san-vuon-kieu-maroc-300x206.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/san-vuon-kieu-maroc-1024x704.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/san-vuon-kieu-maroc-768x528.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/san-vuon-kieu-maroc-1170x804.jpg 1170w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/san-vuon-kieu-maroc-585x402.jpg 585w\" sizes=\"100vw\" width=\"1200\"></p><p><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/san-vuon-kieu-Ma-Roc.jpg\" alt=\"Vuon kieu Ma Roc\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/05/san-vuon-kieu-Ma-Roc.jpg 1200w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/san-vuon-kieu-Ma-Roc-300x217.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/san-vuon-kieu-Ma-Roc-1024x741.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/san-vuon-kieu-Ma-Roc-768x556.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/san-vuon-kieu-Ma-Roc-1170x846.jpg 1170w, https://thietkenoithatblog.com/wp-content/uploads/2021/05/san-vuon-kieu-Ma-Roc-585x423.jpg 585w\" sizes=\"100vw\" width=\"1200\"></p><p>Với sự đa dạng về văn hóa, màu sắc cùng các chi tiết được điêu khắc tinh xảo. Tất cả đã tạo nên một xu hướng Moroccan rất riêng, rất khác biệt khi so với những phong cách còn lại. Cũng dễ hiểu vì sao khi <strong>phong cách Moroccan</strong> lại mang đến sức hấp dẫn lạ lùng trong thiết kế đến như vậy.</p><p>&nbsp;</p>', '2021-12-03 00:00:00', 1, 25, 1, 'kham-pha-suc-hap-dan-ky-la-cua-phong-cach-noi-that-moroccan.1638511229', '110476168_kham-pha-suc-hap-dan-ky-la-cua-phong-cach-Ma-roc-moroccan.jpg');
INSERT INTO `blog` (`BlogID`, `Title`, `Blog_des`, `Content`, `CreateAt`, `View`, `UserId`, `Blog_CategoryID`, `slug`, `thumbnail`) VALUES
(11, 'Cách để thiết kế căn hộ của bạn trở nên đẹp và độc đáo', 'Căn hộ có điểm chung là thiết kế gần tương tự nhau. Do đó bạn sẽ khó thấy được sự độc đáo hay vẻ đẹp riêng nếu không đầu tư thiết kế nội thất. Nói như vậy không có nghĩa là bạn có thể tự thiết kế căn hộ của mình, mà hãy tham khảo những cách dưới đây', '<p><a href=\"https://www.ekeinterior.com/project/tinh-te-thanh-lich-voi-hinh-anh-thiet-ke-noi-that-can-ho-empire-city\">Căn hộ</a> có điểm chung là thiết kế gần tương tự nhau. Do đó bạn sẽ khó thấy được sự độc đáo hay vẻ đẹp riêng nếu không đầu tư thiết kế nội thất. Nói như vậy không có nghĩa là bạn có thể tự thiết kế căn hộ của mình, mà hãy tham khảo những cách dưới đây:</p><h2><strong>Chọn phong cách thiết kế cho căn hộ</strong></h2><p>Mỗi một ngôi nhà thường là sự pha trộn giữa hai hoặc nhiều phong cách. Do đó, việc đầu tiên bạn cần làm là xác định cho mình <a href=\"https://thietkenoithatblog.com/?s=phong+c%C3%A1ch+thi%E1%BA%BFt+k%E1%BA%BF\">phong cách thiết kế</a>. Đây chính là yếu tố quan trọng và nền tảng, giúp bạn tránh “lấy râu ông nọ cắm cằm bà kia”.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/cach_de_thiet_ke_noi_that_can_ho_dep_va_doc_dao.jpg\" alt=\"thiết kế căn hộ chung cư đẹp\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/cach_de_thiet_ke_noi_that_can_ho_dep_va_doc_dao.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/cach_de_thiet_ke_noi_that_can_ho_dep_va_doc_dao-300x200.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/cach_de_thiet_ke_noi_that_can_ho_dep_va_doc_dao-768x512.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/cach_de_thiet_ke_noi_that_can_ho_dep_va_doc_dao-585x390.jpg 585w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/cach_de_thiet_ke_noi_that_can_ho_dep_va_doc_dao-263x175.jpg 263w\" sizes=\"100vw\" width=\"900\"></figure><p>Nếu diện tích căn hộ không quá rộng rãi, hãy chọn ngay phong cách thiết kế hiện đại. Bởi phong cách này vừa tối ưu được yếu tố ngân sách, thẩm mỹ mà vẫn đảm bảo được đầy đủ công năng sử dụng.</p><h3><strong>Chú ý về yếu tố nội thất</strong></h3><p>Các yếu tố nội thất căn hộ bao gồm hai thành phần chính. 1- Đồ dính tường (fitout); 2- Đồ nội thất rời (bàn, ghế, tủ, giường…)</p><p>Việc mua sắm đồ nội thất đã trở nên dễ dàng hơn bao giờ hết. Thậm chí bạn có thể mua đồ qua các cửa hàng <a href=\"https://metalic.vn/ban/\">nội thất online</a>. Tuy nhiên mọi thứ sẽ trở nên vô nghĩa nếu kích thước của nó không phù hợp với căn hộ của bạn.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/can_ho_co_phong_khach_dep_va_doc_dao.jpg\" alt=\"Nội thất bếp căn hộ chung cư đẹp\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/can_ho_co_phong_khach_dep_va_doc_dao.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/can_ho_co_phong_khach_dep_va_doc_dao-300x233.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/can_ho_co_phong_khach_dep_va_doc_dao-768x597.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/can_ho_co_phong_khach_dep_va_doc_dao-585x455.jpg 585w\" sizes=\"100vw\" width=\"900\"></figure><p>Đừng tự mình làm hết tất cả. Hãy sử dụng dịch vụ thiết kế thi công nội thất. Cái bạn cần làm là chuẩn bị ngân sách và quản lý tiến độ thực hiện.</p><p>Trường hợp bạn muốn tự tay mua sắm một món đồ nội thất nào đó, hãy ghi lại số đo thật kỹ càng. Tránh trường hợp kích thước không đúng, khiến cho món đồ nội thất của bạn không thể lọt qua được. Vì vậy, lưu ý kiểm tra đúng kích thước của bất kỳ món đồ nội thất nào để đảm bảo rằng chúng sẽ phù hợp với căn hộ của bạn.</p><h4><strong>Góc lưu trữ</strong></h4><p>Việc sắp xếp đồ đạc và lưu trữ là yếu tố cực kỳ quan trọng. Nó sẽ giúp cho các món đồ được ngăn nắp hơn. Đồng thời mở ra nhiều ý tưởng hơn để thiết kế trang trí cho căn hộ.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/goc-luu-tru-thong-minh-cho-can-ho.jpg\" alt=\"Tu ao luu tru thong minh cho can ho\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/goc-luu-tru-thong-minh-cho-can-ho.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/goc-luu-tru-thong-minh-cho-can-ho-300x225.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/goc-luu-tru-thong-minh-cho-can-ho-768x576.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/goc-luu-tru-thong-minh-cho-can-ho-585x439.jpg 585w\" sizes=\"100vw\" width=\"900\"></figure><h3><strong>Ánh sáng</strong></h3><p>Ánh sáng ảnh hưởng đến hầu hết mọi khía cạnh trong căn hộ. Từ yếu tố thẩm mỹ đến chức năng và thao tác khi sử dụng. Đó là chưa nói đến yếu tố tâm lý và sức khỏe.</p><h3><strong>4 ý tưởng thiết kế căn hộ được nhiều người yêu thích nhất</strong></h3><h4><strong>Cửa kéo</strong></h4><p>Việc thay thế cửa xoay truyền thống thành cửa kéo (cửa lùa) chính là sự lựa chọn hoàn hảo. Nó sẽ giúp bạn tiết kiệm được khá nhiều không gian trong khi vẫn giữ được yếu tố tiện nghi trong căn hộ.</p><h4><strong>Thiết kế không gian mở</strong></h4><p>Thiết kế không gian mở đang là một xu hướng được khá nhiều hộ gia đình lựa chọn hiện nay. Bởi không gian mở sẽ tạo ra một sự gắn kết giữa các khu vực, giữa các thành viên trong gia đình với nhau. Ví dụ điển hình nhất hiện nay đó chính là phòng khách được nối liền với <a href=\"https://www.ekeinterior.com/10-loi-thuong-gap-nhat-khi-thiet-ke-bep.html\">phòng bếp</a> trong căn hộ.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/noi_that_phong_khach_phong_cach_tan_hien_dai.jpg\" alt=\"Nội thất không gian mở cho căn hộ\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/noi_that_phong_khach_phong_cach_tan_hien_dai.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/noi_that_phong_khach_phong_cach_tan_hien_dai-300x233.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/noi_that_phong_khach_phong_cach_tan_hien_dai-768x597.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/noi_that_phong_khach_phong_cach_tan_hien_dai-585x455.jpg 585w\" sizes=\"100vw\" width=\"900\"></figure><h4><strong>Phân vùng màu sắc</strong></h4><p>Một căn hộ có thiết kế đẹp sẽ đòi hỏi bạn phải biết cách phân bổ màu sắc. Màu sắc ngoài yếu tố thẩm mỹ, còn ảnh hưởng đến tâm lý và phân chia các khu vực chức năng riêng biệt.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/cach_phoi_mau_sac_trong_noi_that_can_ho_chung_cu.jpg\" alt=\" màu sắc trong nội thất căn hộ\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/cach_phoi_mau_sac_trong_noi_that_can_ho_chung_cu.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/cach_phoi_mau_sac_trong_noi_that_can_ho_chung_cu-300x200.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/cach_phoi_mau_sac_trong_noi_that_can_ho_chung_cu-768x513.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/cach_phoi_mau_sac_trong_noi_that_can_ho_chung_cu-585x391.jpg 585w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/cach_phoi_mau_sac_trong_noi_that_can_ho_chung_cu-263x175.jpg 263w\" sizes=\"100vw\" width=\"900\"></figure><p>Điển hình như một mảng sơn trên tường, phía sau bàn làm việc sẽ giúp bạn tách biệt hoàn toàn với khu vực tiếp khách cạnh đó.</p><h3><strong>Xem xét ý tưởng thiết kế căn hộ nhỏ</strong></h3><p>Một căn hộ có thể có diện tích rất nhỏ (kiểu <a href=\"https://www.ekeinterior.com/hinh-anh-thiet-ke-can-ho-studio-dep-dang-de-tham-khao.html\"><strong>căn hộ studio</strong></a>) nhưng vẫn hoàn toàn đủ để chúng ta thiết kế một không gian ấn tượng. Miễn là bạn tuân thủ theo các hướng dẫn và thực sự yêu thích phong cách mình đã chọn.</p><p>Đầu tiên, bạn cần khoanh vùng để tạo ra các khu vực riêng. Sử dụng màu sắc làm điểm nhấn chính cho căn phòng, hoặc trang trí bằng những tấm thảm.</p><p>Thứ hai, bạn có thể làm cho không gian nội thất xung quanh trông có vẻ rộng hơn nhờ một chiếc gương. Nhưng lưu ý là bạn không nên lạm dụng, vì gương có thể tạo ra ảo ảnh, và trong một số trường hợp có thể ảnh hưởng xấu đến phong thủy.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/guong-trong-noi-that-can-ho-chung-cu.jpg\" alt=\"bo tri guong trong noi that \" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/guong-trong-noi-that-can-ho-chung-cu.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/guong-trong-noi-that-can-ho-chung-cu-300x195.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/guong-trong-noi-that-can-ho-chung-cu-768x498.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/guong-trong-noi-that-can-ho-chung-cu-585x380.jpg 585w\" sizes=\"100vw\" width=\"900\"></figure><p>Cuối cùng là bạn chọn những món đồ nội thất và trang trí. Ví dụ như sử dụng kệ, rèm cửa để khiến căn hộ của bạn cao hơn bình thường. Đặc biệt, những tấm rèm dài cũng có thể làm tăng thêm vẻ sang trọng và lộng lẫy cho bất kỳ món đồ nội thất nào.</p><h4><strong>Ý tưởng trang trí cho phòng khách của căn hộ chung cư</strong></h4><p>Để tạo ra một <a href=\"https://www.ekeinterior.com/y-tuong-thiet-ke-phong-khach-dep-lung-linh.html\">phòng khách</a> độc đáo và ấn tượng, chắc chắn cần phải có kế hoạch. Bắt đầu bằng việc bạn cần xem xét các yếu tố chính trong phòng khách và nghĩ về sự phối hợp của chúng với nhau. Một phòng khách điển hình bao gồm: bàn trà, ghế sofa, tường, tủ TV. Bạn cũng có thêm những chiếc gối nhỏ trên ghế sofa hoặc một vài cuốn tạp chí ở trên bàn trà chẳng hạn.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/phong_khach_can_ho_dep.jpg\" alt=\"Phòng khách hiện đại trong nội thất căn hộ chung cư\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/phong_khach_can_ho_dep.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/phong_khach_can_ho_dep-300x225.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/phong_khach_can_ho_dep-768x576.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/phong_khach_can_ho_dep-585x439.jpg 585w\" sizes=\"100vw\" width=\"900\"></figure><p>Để trang trí cho phòng khách đẹp với ngân sách phù hợp. Bạn hãy tuân thủ theo quy tắc chất lượng hơn số lượng. Chỉ với cách này, bạn sẽ mua những gì bạn thấy thực sự cần thiết và phù hợp với căn hộ. Ngoài ra, đừng làm cho căn hộ của mình trở nên lộn xộn với những thứ mà bạn không cần đến.</p><h4><strong>Ý tưởng trang trí phòng ngủ</strong></h4><p><a href=\"https://thietkenoithatblog.com/nghe-thuat-thiet-ke-noi-that-phong-ngu-dep.html\">Phòng ngủ </a>không chỉ là một nơi để trang trí cho thật đẹp đẽ. Mà nó còn là nơi để khiến cho cơ thể của bạn được nghỉ ngơi sau một ngày dài. Vậy nên, hãy trang trí cho phòng ngủ của bạn theo xu hướng nhẹ nhàng.</p><p>Một phòng ngủ sặc sỡ có thể khiến cho tâm trí của bạn bị đảo lộn và ảnh hưởng đến giấc ngủ. Vì vậy, hãy giữ nó đơn giản và thay vào đó là những thứ cần thiết nhất. Một phòng ngủ tiêu chuẩn cần có một chiếc giường, hai tủ đầu giường, tủ quần áo, đèn chiếu sáng,…</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/Cach-thiet-ke-phong-ngu-dep-va-doc-dao.jpg\" alt=\"phong ngu dep va doc dao\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/Cach-thiet-ke-phong-ngu-dep-va-doc-dao.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/Cach-thiet-ke-phong-ngu-dep-va-doc-dao-300x201.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/Cach-thiet-ke-phong-ngu-dep-va-doc-dao-768x515.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/Cach-thiet-ke-phong-ngu-dep-va-doc-dao-585x393.jpg 585w\" sizes=\"100vw\" width=\"900\"></figure><p>Để trang trí cho phòng ngủ, bạn hãy đầu tư cho căn phòng bằng những món đồ thiết kế với kiểu dáng đẹp và đơn giản. Có quá nhiều đồ đạc sẽ khiến cho bạn bị mất tập trung và khó ngủ. Vì vậy, đơn giản hóa mọi thứ để trở nên nhẹ nhàng là điều cần thiết nhất.</p><h4><strong>Chúng tôi có một vài gợi ý sau đây:</strong></h4><ul><li>Trần nhà đơn giản. Để phẳng, tránh giật cấp và hắt sáng cầu kỳ không cần thiết. Vì thật ra bạn chẳng mấy khi dùng đến.</li><li>Chọn lựa một bộ chăn ga gối nệm thật êm ái. Chất liệu lụa là một gợi ý.</li><li>Âm nhạc du dương nhẹ nhàng trong phòng giúp dễ đi vào giấc ngủ.</li><li>Mùi hương. Chọn một mùi hương mà bạn yêu thích với mức độ vừa phải cũng là một gợi ý.</li><li>Màu sắc. Đừng biến phòng ngủ của bạn thành một sân khấu với quá nhiều màu sắc sặc sở hoặc quá tối tăm. Màu trung tính là một lựa chọn khôn ngoan.</li><li>Đèn treo tường: không chỉ giúp mở rộng không gian trên đầu giường mà còn tạo thêm nét độc đáo cho phòng ngủ của bạn. Đèn cũng nên có dimmer để điều chỉnh cường độ sáng trong phòng, tùy thời điểm.</li></ul><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/Phong-ngu-dep-va-doc-dao.jpg\" alt=\"noi that phong ngu dep\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/Phong-ngu-dep-va-doc-dao.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/Phong-ngu-dep-va-doc-dao-300x233.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/Phong-ngu-dep-va-doc-dao-768x597.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/Phong-ngu-dep-va-doc-dao-585x455.jpg 585w\" sizes=\"100vw\" width=\"900\"></figure><h3><strong>3 phong cách nội thất căn hộ truyền tải được nhiều cảm hứng nhất hiện nay</strong></h3><h4><strong>Tân cổ điển</strong></h4><p>Vẻ ngoài tinh tế kết hợp với những đường nét sạch sẽ và đồ nội thất ưu tiên tính trang trí đi đôi với công năng sử dụng, Tân cổ điển đã tạo nên một vẻ đẹp vượt thời gian.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/phong_cach_tan_co_dien_cho_phong_khach.jpg\" alt=\"Nội thất căn hộ phong cách tân cổ điển\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/phong_cach_tan_co_dien_cho_phong_khach.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/phong_cach_tan_co_dien_cho_phong_khach-300x200.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/phong_cach_tan_co_dien_cho_phong_khach-768x511.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/phong_cach_tan_co_dien_cho_phong_khach-585x389.jpg 585w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/phong_cach_tan_co_dien_cho_phong_khach-263x175.jpg 263w\" sizes=\"100vw\" width=\"900\"></figure><h4><strong>Scandinavian</strong></h4><p>Đây là phong cách đề cao chủ nghĩa chức năng và đơn giản. Được du nhập từ Bắc Âu, phong cách <a href=\"https://thietkenoithatblog.com/phong-cach-thiet-ke-noi-that-bac-au-scandinavian.html\">Scandinavian </a>chú trọng sử dụng các vật liệu tự nhiên. Mặc dù xuất hiện từ những năm 1950, nhưng phong cách này vẫn được yêu thích cho đến ngày nay.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/phong_an_bep_phong_cach_scandinavian.jpg\" alt=\"ếp phong cách scandinavian\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/phong_an_bep_phong_cach_scandinavian.jpg 850w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/phong_an_bep_phong_cach_scandinavian-300x298.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/phong_an_bep_phong_cach_scandinavian-150x150.jpg 150w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/phong_an_bep_phong_cach_scandinavian-768x763.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/phong_an_bep_phong_cach_scandinavian-585x581.jpg 585w\" sizes=\"100vw\" width=\"850\"></figure><h4><strong>Contemporary</strong></h4><p>Sự phát triển không ngừng của thiết kế nội thất đương đại và vay mượn các yếu tố từ các phong cách khác, phong cách thiết kế <a href=\"https://www.ekeinterior.com/project/tinh-te-thanh-lich-voi-hinh-anh-thiet-ke-noi-that-can-ho-empire-city\">nội thất đương đại contemporary</a> mang đến cho bạn sự tự do trang trí vô tận để thể hiện bản thân mình.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/Noi-that-phong-cach-duong-dai-contemporary.jpg\" alt=\"phong cách contemporary\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/04/Noi-that-phong-cach-duong-dai-contemporary.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/Noi-that-phong-cach-duong-dai-contemporary-300x186.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/Noi-that-phong-cach-duong-dai-contemporary-768x477.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/04/Noi-that-phong-cach-duong-dai-contemporary-585x363.jpg 585w\" sizes=\"100vw\" width=\"900\"></figure><p><br>&nbsp;</p>', '2021-12-03 00:00:00', 0, 25, 1, 'cach-de-thiet-ke-can-ho-cua-ban-tro-nen-dep-va-doc-dao.1638511314', '324350680_cach_de_thiet_ke_noi_that_can_ho_dep_va_doc_dao.jpg'),
(12, 'Hình ảnh kệ treo tường bằng kim loại với những ý tưởng đầy sáng tạo', 'Trong nội thất, kệ treo tường là một phần không thể thiếu. Kệ treo vừa để trang trí, vừa là tiện ích sử dụng. Ngoài những mẫu kệ treo bằng gỗ thường thấy, thì kệ treo tường bằng sắt sơn tĩnh điện cũng là lựa chọn đầy sáng tạo mà bạn không thể ngờ tới. Ngoài ra, nhưng mẫu kệ bằng thép sơn tĩnh điện có kết cấu nhẹ nhàng và tạo cảm giác thanh lịch, có độ bền cao.', '<h2><strong>Sự thanh lịch của kệ treo tường bằng kim loại</strong></h2><p>Trong nội thất, kệ treo tường là một phần không thể thiếu. Kệ treo vừa để trang trí, vừa là tiện ích sử dụng. Ngoài những mẫu kệ treo bằng gỗ thường thấy, thì <a href=\"https://metalic.vn/ke/\"><strong>kệ treo tường</strong></a><strong> </strong>bằng sắt sơn tĩnh điện&nbsp;cũng là lựa chọn đầy sáng tạo mà bạn không thể ngờ tới. Ngoài ra, nhưng mẫu kệ bằng thép sơn tĩnh điện có kết cấu nhẹ nhàng và tạo cảm giác thanh lịch, có độ bền cao.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-tuong-bang-kim-loai-an-tuong-va-sang-tao.jpg\" alt=\"Ke treo tuong bang kim loai an tuong va sang tao\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-tuong-bang-kim-loai-an-tuong-va-sang-tao.jpg 1200w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-tuong-bang-kim-loai-an-tuong-va-sang-tao-300x175.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-tuong-bang-kim-loai-an-tuong-va-sang-tao-1024x596.jpg 1024w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-tuong-bang-kim-loai-an-tuong-va-sang-tao-768x447.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-tuong-bang-kim-loai-an-tuong-va-sang-tao-1170x682.jpg 1170w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-tuong-bang-kim-loai-an-tuong-va-sang-tao-585x341.jpg 585w\" sizes=\"100vw\" width=\"1200\"></figure><h3><strong>Kệ đứng trang trí phòng khách</strong></h3><p>Đặc tính của kim loại làm cho kệ có độ bền cao và dễ tạo hình. Chi tiết liên kết lại đơn giản, nên mang lại cảm giác nhẹ nhàng, thoáng. Đồng thời làm cho các thiết kế trông mạnh mẽ, bền và chắc chắn.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-trang-tri-phong-khach-bang-kim-loai-sat-son.jpg\" alt=\"Ke trang tri phong khach bang kim loai-sat son\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-trang-tri-phong-khach-bang-kim-loai-sat-son.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-trang-tri-phong-khach-bang-kim-loai-sat-son-300x300.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-trang-tri-phong-khach-bang-kim-loai-sat-son-150x150.jpg 150w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-trang-tri-phong-khach-bang-kim-loai-sat-son-768x768.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-trang-tri-phong-khach-bang-kim-loai-sat-son-585x585.jpg 585w\" sizes=\"100vw\" width=\"900\"></figure><p>Với cách thể hiện đơn giản và tinh tế, <a href=\"https://metalic.vn/product/ke-sach-dung-compi/\">kệ sách đứng</a> bằng sắt sơn tĩnh điện thường có đường nét gọn gàng và kết cấu vững chắc. Mặt kệ thấp hơn ở mặt sau mang lại cho hệ kệ đứng này một cảm giác tinh tế về chi tiết. Các modul đơn giản có thể lắp ghép cung cấp cho bạn thêm nhiều giải pháp sáng tạo và đặt để.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-dung-trang-tri-phong-khach-bang-sat.jpg\" alt=\"Ke dung trang tri phong khach bang sat\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-dung-trang-tri-phong-khach-bang-sat.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-dung-trang-tri-phong-khach-bang-sat-300x300.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-dung-trang-tri-phong-khach-bang-sat-150x150.jpg 150w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-dung-trang-tri-phong-khach-bang-sat-768x768.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-dung-trang-tri-phong-khach-bang-sat-585x585.jpg 585w\" sizes=\"100vw\" width=\"900\"></figure><h3><strong>Kệ treo tường phòng học</strong></h3><p>Nét độc đáo của mẫu <a href=\"https://metalic.vn/product/ke-treo-tuong-trang-tri-key/\">kệ treo tường</a> phòng học bằng thép này là mô phỏng nghệ thuật gấp giấy. Với nhiều nếp gấp được thay đổi đa dạng. Kệ treo này có vẻ đẹp hiện đại, tiện dụng. Đi kèm với kệ có hai móc để treo móc khóa hoặc để trang trí. Mẫu kệ treo tường này phù hợp với bất kỳ không nào, kể cả phòng khách và phòng ngủ v.v…</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/Mau-ke-treo-tuong-bang-kim-loai.jpg\" alt=\"Mau ke treo tuong bang kim loai\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/Mau-ke-treo-tuong-bang-kim-loai.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Mau-ke-treo-tuong-bang-kim-loai-300x300.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Mau-ke-treo-tuong-bang-kim-loai-150x150.jpg 150w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Mau-ke-treo-tuong-bang-kim-loai-768x768.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Mau-ke-treo-tuong-bang-kim-loai-585x585.jpg 585w\" sizes=\"100vw\" width=\"900\"></figure><p>Với nhiều màu sắc nổi bật làm tương phản các vật dụng được đặt trên kệ. Các yếu tố gấp mang đến cho nó một cảm giác vui tươi. Bạn có thể thoải mái sáng tạo thêm bằng cách đặt trên kệ nhiều vật dụng có khối hình học khác nhau.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-noi-that-phong-hoc.jpg\" alt=\"Ke treo noi that phong hoc\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-noi-that-phong-hoc.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-noi-that-phong-hoc-300x225.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-noi-that-phong-hoc-768x576.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-noi-that-phong-hoc-585x439.jpg 585w\" sizes=\"100vw\" width=\"900\"></figure><h3><strong>Kệ treo góc tường</strong></h3><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/ke-treo-goc-tuong.jpg\" alt=\"ke treo goc tuong\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/ke-treo-goc-tuong.jpg 513w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/ke-treo-goc-tuong-300x220.jpg 300w\" sizes=\"100vw\" width=\"513\"></figure><p>Tôi cá là bạn sẽ thấy thú vị với <a href=\"https://metalic.vn/product/ke-tron-treo-tuong-pivo/\">mẫu kệ gắn tường</a> này. Chúng được làm từ các vòng tròn bằng thép, và mỗi vòng tròn được gấp theo những cách khác nhau để tạo ra các hình học khác nhau. Bốn biến thể cộng với một ngàm đa chức năng cho phép bạn đặt vào đúng vị trí góc tường. Và tôi dám chắc rằng sẽ rất tiếc nếu chỉ đặt một chiếc, vì có vẻ như một nhóm sẽ tạo hiệu quả thẩm mỹ cao nhất.</p><h3><strong>Kệ treo tường phòng ngủ</strong></h3><p>Kệ treo tường phòng ngủ dưới đây trông như một tác phẩm điêu khắc. Tĩnh vật trên kệ là các bình gốm tráng men tương phản với chất liệu kệ sắt sơn. Các tấm kim loại uốn cong được sử dụng để xóa ranh giới giữa tường và. Vật trang trí trên kệ được lấy cảm hứng từ mọi thứ. Từ chiều rộng của những chiếc váy mantua thế kỷ 18 đến những chiếc bình Ai Cập nhiều tay thường được sử dụng để đựng nước hoa và mỹ phẩm.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-tuong-phong-ngu.jpg\" alt=\"Ke treo tuong phong ngu\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-tuong-phong-ngu.jpg 750w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-tuong-phong-ngu-300x300.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-tuong-phong-ngu-150x150.jpg 150w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-tuong-phong-ngu-585x585.jpg 585w\" sizes=\"100vw\" width=\"750\"></figure><p>Một phần mặt trên của kệ hình tròn được gấp lên trên để tạo liên kết vào tường. Điều này có nghĩa là mẫu kệ này chỉ cần hai chân để đứng lên. Kệ treo tường kiêm chức năng như mặt bàn là nơi hoàn hảo để đặt sách, tạp chí, lọ hoa, đèn bàn, đồ vật nhỏ hoặc thậm chí là tách cà. Sử dụng nó ở phòng ngủ là vô cùng thích hợp.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-tuong-phong-ngu-chat-lieu-kim-loai-sat-uon.jpg\" alt=\"Ke treo tuong phong ngu chat lieu kim loai sat uon\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-tuong-phong-ngu-chat-lieu-kim-loai-sat-uon.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-tuong-phong-ngu-chat-lieu-kim-loai-sat-uon-300x234.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-tuong-phong-ngu-chat-lieu-kim-loai-sat-uon-768x599.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-tuong-phong-ngu-chat-lieu-kim-loai-sat-uon-585x456.jpg 585w\" sizes=\"100vw\" width=\"900\"></figure><h3><strong>Kệ treo tường phòng tắm</strong></h3><p>Kệ để giấy vệ sinh hình chú Cừu này làm cho việc lưu trữ những cuộn giấy vệ sinh trở nên dễ thương và thú vị, thêm một chút nét quyến rũ kỳ lạ của đồng quê vào phòng tắm của bạn. Các kệ lõm tròn có thể chứa bảy cuộn giấy. Ngoài ra kệ kim loại tạo hình Chú Cừu đen vui nhộn và tiện dụng này được sơn tĩnh điện để chống ăn mòn và chịu được độ ẩm trong phòng tắm của bạn.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-tuong-phong-tam-dep-bang-kim-loai.jpg\" alt=\"Ke treo tuong phong tam dep bang kim loai\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-tuong-phong-tam-dep-bang-kim-loai.jpg 697w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-tuong-phong-tam-dep-bang-kim-loai-300x280.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-tuong-phong-tam-dep-bang-kim-loai-585x546.jpg 585w\" sizes=\"100vw\" width=\"697\"></figure><p>Còn mẫu kệ dưới đây cũng thật hoàn hảo để đựng các đồ dùng làm đẹp, nước hoa yêu thích hoặc đồ trang trí nhỏ, chiếc kệ này là sự phù hợp tự nhiên cho phòng tắm hiện đại. Nó được treo trên tường bằng móc gỗ, giấu đi phần gắn kết đẹp mắt.</p><h3><strong>Kệ treo quần áo</strong></h3><p>Kế thừa sự đơn giản và tư duy từ chủ nghĩa hiện đại. Kệ treo quần áo này là một hệ thống treo đơn giản nhưng tinh tế. Kệ treo rất dễ dàng cố định vào tường, với tất cả các vít được giấu đi để làm tôn lên sự tối giản và sạch sẽ.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-quan-ao-bang-sat.jpg\" alt=\"Ke treo quan ao bang sat\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-quan-ao-bang-sat.jpg 810w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-quan-ao-bang-sat-300x300.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-quan-ao-bang-sat-150x150.jpg 150w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-quan-ao-bang-sat-768x768.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-quan-ao-bang-sat-585x585.jpg 585w\" sizes=\"100vw\" width=\"810\"></figure><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-quan-ao-kim-loai.jpg\" alt=\"Ke moc treo quan ao bang kim loai\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-quan-ao-kim-loai.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-quan-ao-kim-loai-300x226.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-quan-ao-kim-loai-768x579.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-treo-quan-ao-kim-loai-585x441.jpg 585w\" sizes=\"100vw\" width=\"900\"></figure><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-moc-treo-quan-ao-bang-thep.jpg\" alt=\"Ke moc treo quan ao bang thep\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-moc-treo-quan-ao-bang-thep.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-moc-treo-quan-ao-bang-thep-300x300.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-moc-treo-quan-ao-bang-thep-150x150.jpg 150w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-moc-treo-quan-ao-bang-thep-768x768.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2021/01/Ke-moc-treo-quan-ao-bang-thep-585x585.jpg 585w\" sizes=\"100vw\" width=\"900\"></figure><p>Tạo ra những mẫu <strong>kệ treo tường</strong> với hình thức đơn giản là một việc tưởng dễ nhưng vô cùng khó. Những mẫu kệ đẹp cần phải được sáng tạo ở những khía cạnh chưa được khám phá để tạo ra sự quyến rũ. Chỉ khi đó, mẫu kệ treo tường đẹp mới vững theo thời gian.</p><p>&nbsp;</p>', '2021-12-03 00:00:00', 0, 25, 1, 'hinh-anh-ke-treo-tuong-bang-kim-loai-voi-nhung-y-tuong-day-sang-tao.1638511407', '1511628498_Ke-treo-tuong-bang-kim-loai-an-tuong-va-sang-tao.jpg'),
(13, 'Vì sao nên chọn giường ngủ công nghiệp để sử dụng', 'Giường ngủ gỗ công nghiệp đang dần chiếm ưu thế trong các loại giường ngủ trên thị trường hiện nay. Với những ưu điểm, cũng như chi phí thấp nên đồ nội thất này đang được rất nhiều khách hàng đặc biệt quan tâm và tìm kiếm. Sau đây sẽ là những chia sẻ về các ưu điểm và lý do mà sản phẩm này đang được ưa chuộng.', '<h2><strong>Ưu điểm của giường ngủ gỗ công nghiệp</strong></h2><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-1.jpg\" alt=\"Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-1\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-1.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-1-300x167.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-1-768x427.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-1-585x325.jpg 585w\" sizes=\"100vw\" width=\"900\"></figure><h3><strong>Về giá thành:</strong></h3><p>Việc gia công đồ <a href=\"https://www.ekeinterior.com/co-nen-dung-go-cong-nghiep-va-kinh-nghiem-thuc-te.html\"><strong>gỗ công nghiệp </strong></a>thường đơn giản hơn rất nhiều so với gỗ tự nhiên, chi phí nhân công cũng tương đối ít, có thể sản xuất ngay mà không cần phải trải qua giai đoạn tẩm sấy. Việc lựa chọn những sản phẩm giường ngủ gỗ công nghiệp thường rẻ hơn rất nhiều so với giá của gỗ tự nhiên. Mức chênh lệch cũng sẽ tùy từng loại gỗ khác nhau.</p><h3><strong>Cong vênh:</strong></h3><p>Giường ngủ gỗ công nghiệp cũng có những ưu điểm hết sức đáng tin cậy. Đó là không bị co ngót, cong vênh, bạn có thể chọn làm cánh phẳng hoặc màu sơn khác nhau mang đến sự hiện đại, trẻ trung cho căn phòng.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-2.jpg\" alt=\"Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-2\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-2.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-2-300x200.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-2-768x511.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-2-585x389.jpg 585w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-2-263x175.jpg 263w\" sizes=\"100vw\" width=\"900\"></figure><h3><strong>Thời gian để thi công sản xuất:</strong></h3><p>So với giường ngủ tự nhiên thì giường ngủ gỗ công nghiệp có thời gian thi công sản xuất nhanh hơn. Có thể nhận thi công hàng loạt bởi các phôi gỗ thường đã sẵn có, những người thợ làm chỉ việc cắt, ghép và dán lát, do đó không mất quá nhiều công sức trong thời gian xẻ gỗ.</p><h3><strong>Phong cách:</strong></h3><p>Đa dạng trong phong cách và mẫu mã. Có thể gia công theo phong cách hiện đại hoặc cổ điển. Phù hợp với mọi không gian nội thất. Nhiều vật liệu hoàn thiện bề mặt rất đẹp mà gỗ tự nhiên chưa chắc đã có được.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-3.jpg\" alt=\"Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-3\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-3.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-3-300x167.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-3-768x427.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-3-585x325.jpg 585w\" sizes=\"100vw\" width=\"900\"></figure><h3><strong>Tại sao nên chọn giường gỗ công nghiệp để sử dụng</strong></h3><p>Cuộc sống luôn đặt ra cho bạn những hướng khác nhau, trong bất cứ lĩnh vực nào bạn cũng cần phải tỉnh táo để ra quyết định cho riêng minh. Vậy làm sao để có những sự lựa chọn đúng đắn, bạn cần tìm hiểu thật nhiều thông tin mỗi ngày, rồi phải sàng lọc thông tin để có những thông tin đúng làm cơ sở cho quyết định cuối cùng của mình.</p><p>Trong việc xây dựng tổ ấm cho mình, rất nhiều thứ cần bạn quyết định, phong cách của gia đình bạn là gì, nên chọn đồ đạc ra sao để phù hợp nhất theo thẩm mỹ của bạn cũng như kinh tế gia đình.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-4.jpg\" alt=\"Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-4\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-4.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-4-300x214.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-4-768x549.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-4-585x418.jpg 585w\" sizes=\"100vw\" width=\"900\"></figure><p>Việc lựa chọn đồ cho <a href=\"https://thietkenoithatblog.com/5-loi-khuyen-ve-cach-tao-phong-ngu-hoan-hao-nhat.html\"><strong>nội thất phòng ngủ</strong></a> cũng là vấn đề đau đầu, trong việc lựa chọn giường ngủ bạn cần phải quan tâm đến rất nhiều yếu tố: chất liệu giường ngủ, màu sắc giường, kiểu dáng giường và phong thủy giường ngủ tốt. Vấn đề đặt ra cho bạn lúc này là làm sao để lựa chọn được một chiếc giường ngủ tốt nhất đảm bảo các tiêu chí: hiện đại, phong cách, đa dạng kiểu dáng màu sắc và giá thành phải hợp lý.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-5.jpg\" alt=\"Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-5\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-5.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-5-300x200.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-5-768x512.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-5-585x390.jpg 585w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-5-263x175.jpg 263w\" sizes=\"100vw\" width=\"900\"></figure><h3><strong>Chất lượng của giường ngủ gỗ công nghiệp</strong></h3><p>Với gỗ tự nhiên cao cấp thì đương nhiên chất lượng của giường ngủ hàng trăm năm. Đi cùng với chất lượng đỉnh cao đó sẽ là giá thành vô cùng đắt đỏ, liệu bạn có sẵn sàng bỏ ra vài chục triệu đồng cho một chiếc giường ngủ không. Nếu có điều kiện thì điều đó quá tuyệt vời, tuy nhiên kinh tế chưa cho phép thì đó là một sự lãng phí. Bên cạnh đó bạn lại có sự lựa chọn khác đó là gỗ công nghiệp cao cấp.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-6.jpg\" alt=\"Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-6\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-6.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-6-300x167.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-6-768x427.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-6-585x325.jpg 585w\" sizes=\"100vw\" width=\"900\"></figure><p>Qua nhiều năm nghiên cứu của các nước phát triển bậc nhất trên thế giới, các nhà nghiên cứu đã cho ra đời loại gỗ công nghiệp cao cấp có thể sử dụng trong thời gian lâu dài từ 10 – 30 năm và thậm chí lâu hơn thế. Nhiều năm trở lại đây chúng ta đã thấy sự bùng nổ trong việc sử dụng gỗ công nghiệp.</p><p>Gỗ công nghiệp được sử dụng rộng rãi để tạo nên các sản phẩm nội thất không chỉ là giường ngủ mà còn là tủ quần áo gỗ ép, bàn trang điểm, kệ tivi và vô vàn các sản phẩm đẹp mắt khác từ gỗ công nghiệp.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-8.jpg\" alt=\"Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-8\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-8.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-8-300x240.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-8-768x614.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-8-585x468.jpg 585w\" sizes=\"100vw\" width=\"900\"></figure><h3><strong>Kiểu dáng đa dạng</strong></h3><p>Hơn nữa, đáp ứng thẩm mỹ hiện đại thì mẫu <a href=\"https://thietkenoithatblog.com/vi-sao-nen-mua-san-pham-noi-that-tron-bo.html\"><strong>giường gỗ công nghiệp</strong></a><strong> </strong>đẹp lại là sự lựa chọn tuyệt vời nhất. Những thiết kế tinh tế 3D không đơn thuần nằm trên những trang giấy nữa mà nó đã thành hiện thực khi được sản xuất với gỗ công nghiệp. Chắc hẳn bạn đã từng ngỡ ngàng khi đứng trước một căn phòng lộng lẫy với sự góp sức của gỗ công nghiệp rồi.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-9.jpg\" alt=\"Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-9\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-9.jpg 900w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-9-300x251.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-9-768x643.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-9-585x489.jpg 585w\" sizes=\"100vw\" width=\"900\"></figure><p>Ngoài kiểu dáng hiện đại thì gỗ công nghiệp vẫn có thể hóa thân thành những mẫu cổ điển, cũng như là sự hòa mình trong giấy dán tường hoa văn cổ điển. Qua đây bạn sẽ thấy được sự biến hóa linh hoạt của giường ngủ gỗ công nghiệp và bạn sẽ bị chinh phục hoàn toàn.</p><h3><strong>Giá cả mẫu giường ngủ đẹp bằng gỗ công nghiệp</strong></h3><p>Với công nghệ hiện đại vô cùng sẽ cho ra đời những mẫu giường ngủ đẹp bằng gỗ công nghiệp với chất lượng cao mà giá thành lại phù hợp với đa số người tiêu dùng. Với giá của một chiếc giường gỗ tự nhiên thì bạn có thể sắm cho mình một bộ nội thất phòng ngủ đầy đủ với giường ngủ, tủ quần áo, bàn phấn trang điểm và các đồ nội thất khác.</p><figure class=\"image\"><img src=\"https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-12.jpg\" alt=\"Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-12\" srcset=\"https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-12.jpg 771w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-12-300x233.jpg 300w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-12-768x598.jpg 768w, https://thietkenoithatblog.com/wp-content/uploads/2020/03/Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-12-585x455.jpg 585w\" sizes=\"100vw\" width=\"771\"></figure><p>Bạn thân mến, chúng tôi tin rằng bạn đủ thông minh để có những quyết định cuối cùng cho riêng mình. Mỗi phong cách mang một nét đẹp rất riêng và phong cách nào cũng đẹp và bạn là người chọn phong cách cho riêng mình. Chúc bạn sẽ sáng suốt trong lựa chọn của mình.</p><p>&nbsp;</p>', '2021-12-03 00:00:00', 0, 25, 2, 'vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung.1638511517', '324576476_Vi-sao-nen-chon-giuong-ngu-cong-nghiep-de-su-dung-hinh-1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogcomment`
--

CREATE TABLE `blogcomment` (
  `id` int(11) NOT NULL,
  `postId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `message` text NOT NULL,
  `createAt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog_category`
--

CREATE TABLE `blog_category` (
  `Blog_CategoryID` int(11) NOT NULL,
  `BlogName` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `blog_category`
--

INSERT INTO `blog_category` (`Blog_CategoryID`, `BlogName`, `slug`) VALUES
(1, 'Phong cách thiết kế nội thát', 'phong-cach-thiet-ke-noi-that'),
(2, 'Thiết kế nội thất phòng ngủ', 'thiet-ke-noi-that-phong-ngu'),
(3, 'Thiết kế nội thất phòng bếp', 'thiet-ke-noi-that-phong-bep'),
(4, 'Thiết kế nội thất phòng khách', 'thiet-ke-noi-that-phong-khach');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `CartId` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `VariantId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `CategoryId` int(11) NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  `CategoryImage` varchar(255) NOT NULL,
  `CatActive` tinyint(4) NOT NULL DEFAULT '1',
  `CategorySlug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`CategoryId`, `CategoryName`, `CategoryImage`, `CatActive`, `CategorySlug`) VALUES
(1, 'Ghế Lounge', 'lounge-chair.jpg', 1, 'ghe-lounge'),
(2, 'Sofa Hiện Đại', 'modern-sofas.jpg', 1, 'ghe-sofa'),
(3, 'Ghế Ngoài Trời', 'outdoor-furniture.jpg', 1, 'ghe-ngoai-troi'),
(4, 'Ghế Ăn Tối', 'dining-chair.jpg', 1, 'ghe-an-toi'),
(5, 'Bàn Ăn Tối', 'dining-table.jpg', 1, 'ban-an-toi'),
(6, 'Đèn Sang Trọng', 'modern-chandeliers.jpg\r\n', 1, 'den-sang-trong'),
(7, 'Ghế abc', 'Betarios4.jpg', 0, 'ghe-abc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `CommentId` int(11) NOT NULL,
  `Content` varchar(255) NOT NULL,
  `CreateAt` timestamp NOT NULL,
  `ProductId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `Rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`CommentId`, `Content`, `CreateAt`, `ProductId`, `UserId`, `Rating`) VALUES
(1, 'Sản Phẩm đẹp lắm', '2021-11-09 00:00:00', 10, 5, 5),
(2, 'Sản Phẩm rất đẹp', '2021-11-09 00:00:00', 11, 5, 5),
(3, 'Sản Phẩm đẹp lắm', '2021-11-09 00:00:00', 10, 17, 4),
(7, 'Sản Phẩm này rất đẹp', '2021-11-14 00:00:00', 13, 20, 5),
(8, 'Good!', '2021-11-14 00:00:00', 13, 20, 5),
(9, 'Sản Phẩm cũng tốt..', '2021-11-15 00:00:00', 10, 20, 3),
(10, 'Quá tệ', '2021-11-15 00:00:00', 13, 20, 1),
(11, 'Ok', '2021-11-15 00:00:00', 14, 20, 4),
(12, 'Sản phẩm tốt', '2021-11-15 00:00:00', 11, 21, 4),
(13, 'avascasdasdasd54328757', '2021-11-24 00:00:00', 35, 23, 3),
(14, 'avascasdasdasd54378786', '2021-11-24 00:00:00', 35, 23, 3),
(15, '47867543', '2021-11-24 00:00:00', 35, 23, 3),
(16, 'avascasdasdasd5437867', '2021-11-24 00:00:00', 35, 23, 3),
(18, 'avascasdasdasd46778', '2021-11-24 00:00:00', 35, 23, 3),
(19, 'avascasdasdasd7844', '2021-11-24 00:00:00', 35, 23, 3),
(20, 'avascasdasdasd54348787', '2021-11-24 00:00:00', 35, 23, 3),
(21, 'avascasdasdasd87783543', '2021-11-24 00:00:00', 35, 23, 3),
(22, 'avascasdasdasd4522102', '2021-11-24 00:00:00', 35, 23, 3),
(23, 'avascasdasdasd8778254', '2021-11-24 00:00:00', 35, 23, 3),
(24, 'avascasdasdasd54287578', '2021-11-24 00:00:00', 35, 23, 3),
(25, 'avascasdasdasd1231310', '2021-11-24 00:00:00', 35, 23, 3),
(26, 'avascasdasdasd', '2021-11-24 00:00:00', 35, 23, 3),
(27, 'avascasdasdasd123123', '2021-11-24 00:00:00', 35, 23, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comp_location`
--

CREATE TABLE `comp_location` (
  `id` int(11) NOT NULL,
  `Lattitude` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'vĩ độ',
  `Longtitude` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'kinh độ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comp_location`
--

INSERT INTO `comp_location` (`id`, `Lattitude`, `Longtitude`) VALUES
(1, '10.854252599999999', '106.62872511153768');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `historyorder`
--

CREATE TABLE `historyorder` (
  `HistoryOrderId` int(11) NOT NULL,
  `CreateAt` timestamp NOT NULL,
  `StatusId` int(11) NOT NULL,
  `OrderId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `Description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `historyorder`
--

INSERT INTO `historyorder` (`HistoryOrderId`, `CreateAt`, `StatusId`, `OrderId`, `UserId`, `Description`) VALUES
(1, '2021-12-12 17:18:32', 1, 21, 38, 'Đã nhận đơn hàng mới #21 từ Trần Thanh Hoài'),
(2, '2021-12-07 17:24:17', 2, 21, 29, 'Đơn hàng đã được xác nhận bởi sale');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `OrderDetailId` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `OrderId` int(11) NOT NULL,
  `VariantId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orderdetail`
--

INSERT INTO `orderdetail` (`OrderDetailId`, `Quantity`, `ProductId`, `OrderId`, `VariantId`) VALUES
(1, 2, 10, 5, 1),
(2, 1, 11, 5, 3),
(3, 2, 37, 6, 28),
(4, 3, 37, 6, 29),
(5, 3, 36, 6, 30),
(6, 1, 37, 7, 27),
(7, 2, 11, 7, 3),
(8, 3, 10, 8, 1),
(9, 6, 10, 8, 2),
(10, 3, 18, 8, 19),
(11, 4, 16, 8, 16),
(12, 3, 10, 10, 1),
(13, 6, 10, 10, 2),
(14, 3, 18, 10, 19),
(15, 4, 16, 10, 16),
(16, 3, 10, 11, 1),
(17, 3, 10, 12, 1),
(18, 6, 10, 12, 2),
(19, 3, 18, 12, 19),
(20, 4, 16, 12, 16),
(21, 3, 10, 13, 1),
(22, 6, 10, 13, 2),
(23, 3, 18, 13, 19),
(24, 4, 16, 13, 16),
(25, 7, 10, 14, 1),
(26, 1, 11, 15, 3),
(27, 1, 10, 16, 1),
(28, 1, 10, 17, 1),
(29, 1, 10, 18, 1),
(30, 1, 10, 19, 1),
(31, 1, 10, 20, 2),
(32, 1, 10, 21, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `OrderId` int(11) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Note` varchar(255) DEFAULT NULL,
  `ShipFee` float NOT NULL,
  `CreateAt` timestamp NOT NULL,
  `Subtotal` float NOT NULL,
  `ToPay` float NOT NULL,
  `ShipDate` timestamp NOT NULL,
  `PaymentId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `StatusId` int(11) NOT NULL,
  `ShipOptionId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`OrderId`, `Fullname`, `Address`, `Phone`, `Email`, `Note`, `ShipFee`, `CreateAt`, `Subtotal`, `ToPay`, `ShipDate`, `PaymentId`, `UserId`, `StatusId`, `ShipOptionId`) VALUES
(5, 'Phạm Công Việt', '', '012345678', 'vitngaongo@gmail.com', 'Giao cho nhanh không thì 1 sao', 0, '2021-11-25 00:00:00', 3019000, 2500000, '2021-11-28 00:00:00', 1, 17, 1, 2),
(6, 'Nguyễn Quang Duy', '', '035511444', 'boynanhnung@email.com', 'Giao nhanh hoặc cụt tay', 120000, '2021-11-25 00:00:00', 85917000, 12120000, '2021-11-28 00:00:00', 1, 20, 2, 1),
(7, 'Hoài Thanh', '', '036654125', 'hoaibuonba@email.com', 'Cho bỗ mày xin cái địa chỉ ', 200000, '2021-11-25 00:00:00', 2928000, 3128000, '2021-11-28 00:00:00', 1, 30, 3, 1),
(8, 'test 1', 'Quận 2, Hồ Chí Minh', '0911012484', 'hr@domain.com', '123456', 57000, '2021-11-29 00:00:00', 13599000, 13656000, '2021-11-29 00:00:00', 1, 31, 1, 1),
(9, 'test 2', 'Quận 8, Hồ Chí Minh', '0911123123', 'hr@domain.com', 'Google LLC là một công ty công nghệ đa quốc gia của Mỹ, chuyên về các dịch vụ và sản phẩm liên quan đến Internet.', 51000, '2021-11-29 00:00:00', 95511000, 95562000, '2021-11-29 00:00:00', 1, 31, 1, 1),
(10, 'test 2', 'Quận 8, Hồ Chí Minh', '0911123123', 'hr@domain.com', 'Google LLC là một công ty công nghệ đa quốc gia của Mỹ, chuyên về các dịch vụ và sản phẩm liên quan đến Internet.', 51000, '2021-11-29 00:00:00', 95511000, 95562000, '2021-11-29 00:00:00', 1, 31, 1, 1),
(11, 'viet pham cong qyeeeee', 'Quận 2, Hồ Chí Minh', '123', 'hr@domain.com', '123', 57000, '2021-11-29 00:00:00', 95511000, 95568000, '2021-11-29 00:00:00', 1, 31, 1, 1),
(12, 'viet pham cong qyeeeee', 'Quận 2, Hồ Chí Minh', '123', 'hr@domain.com', '123', 57000, '2021-11-29 00:00:00', 95511000, 95568000, '2021-11-29 00:00:00', 1, 31, 5, 1),
(13, 'viet pham cong qyeeeee', 'Quận 3, Hồ Chí Minh', '123', 'hr@domain.com', '1232', 42000, '2021-11-29 00:00:00', 95511000, 95553000, '2021-11-29 00:00:00', 1, 31, 1, 1),
(14, 'viet pham cong qyeeeee', 'Quận 7, Hồ Chí Minh', '091102', 'hr@domain.com', '123', 75000, '2021-11-29 00:00:00', 6930000, 7005000, '2021-11-29 00:00:00', 1, 31, 1, 1),
(15, 'viet pham cong qyeeeee', 'Quận 7, Hồ Chí Minh', '123123123', 'hr@domain.com', '123', 75000, '2021-11-29 00:00:00', 969000, 1044000, '2021-11-29 00:00:00', 1, 31, 1, 1),
(16, 'viet pham cong qyeeeee', 'Đường 123, Phước Long A, Thủ Đức, Hồ Chí Minh', '123', 'hr@domain.com', '123', 20000, '2021-12-02 00:00:00', 990000, 1010000, '2021-12-02 00:00:00', 1, 31, 1, 2),
(17, 'viet pham cong qyeeeee', 'Cao ốc 123, 123-127 Võ Văn Tần, Võ Thị Sáu, Quận 3, Hồ Chí Minh', '123', 'hr@domain.com', '123', 14000, '2021-12-02 00:00:00', 990000, 1004000, '2021-12-02 00:00:00', 1, 31, 1, 2),
(18, 'viet pham cong qyeeeee', '123 Yersin, Phú Cường, Thủ Dầu Một, Bình Dương', '123', 'hr@domain.com', '123', 27000, '2021-12-02 00:00:00', 990000, 1017000, '2021-12-02 00:00:00', 1, 31, 1, 2),
(19, 'viet pham cong qyeeeee', '1123 Đồng Khởi, Tân Phong, Biên Hòa, Đồng Nai', '123', 'hr@domain.com', '123', 36000, '2021-12-02 00:00:00', 990000, 1026000, '2021-12-02 00:00:00', 1, 31, 1, 2),
(20, 'quag', 'Quận 7, Hồ Chí Minh', '0911012484', 'quang@domain.com', NULL, 75000, '2021-11-30 00:00:00', 1069200, 1144200, '2021-11-30 00:00:00', 1, 19, 1, 1),
(21, 'Trần Thanh Hoài', 'Thị xã Gò Công, Tiền Giang', '0386229320', 'tranthanhhoai672002@gmail.com', NULL, 64000, '2021-12-12 17:18:32', 990000, 1054000, '2021-12-12 00:00:00', 1, 38, 2, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`id`, `Email`, `token`) VALUES
(16, 'hoaittps16429@fpt.edu.vn', 'JST3vCBwpy578SN8LhqxqDXL17FqoWt29lllfsvVFTeCfLEEQehQaeH9yCoIJBb2MgMo8h3V3K5WY73nURlTJSRf5s0IHpGEze3OpFZ6WZ8dVV3IyDl1tBlgZpYBHhKd6NobAm5AcWCTZPRs2z7Ayc'),
(20, 'vietpcps15786@fpt.edu.vn', 'Xz8QmkQjVmwJvtAIIJuy4lNXm9yumYBmbUSM2CDhmQJp8XSdYF1K4HFeoYaK9aY51JKMFcZQJlIYyKrKV3MlawH3Vq8Lx4xj37IJFyFoxerrLc3a1Q3PVvzpoEE3pamiwLAUbfd8FDKorRZMpvViZ2'),
(22, 'vietpcps15786@fpt.edu.vn', '9LhxNpc5NZYXzGQaJ8o3sZw5j0dPSTHSE5tdyW6YwQisjNsZrGBBMAKFzGOtQSkW6SkSrezheFFR8rpKUTgCKki6vyg6Vtfl4qcmLITq5jl8fnSydpOF9fDnFrxzw9IdFa8JEfaqOPkgZQBI1oTrVk'),
(23, 'vietpcps15786@fpt.edu.vn', 'bFVK5f5Gm0x009GYOXOT7daAcPN3VlVmBSvDXh6Bx1WUnsrE3TvBVvwCkze9YWFurfdXjc5THAdKIZ9WSPCk8x7MfGhwReLnE1grJGHpFdiAVqfu0esNHjlpKGgOeeEm89aNMIsvIvehdKLwQ3a9Cu'),
(24, 'viet.phamcong812@gmail.com', 'lXzXhhXpjtG4FX0JaVTcSAaZjHq0vh1aXGMmRFKOdTwI4vY5htn4Dw9O70cnVyYIOcb6Vec2sEpKYuwdnv2HSt14SvUyy9A7AOBSgr4895JTqaRMNcWMucZ97jWzaUVazd5mTHHesUNavi4N01rO5b'),
(25, 'viet.phamcong812@gmail.com', '4AMCznX0mtdzgdB5YDtzihafnZjSsau1hU5WZlR9dLBcvHA4Umn8S16Xg5vrRiWzNw2pvny2OR6kjLwOZRWBUSeB4zAyLbCRIECJpWurIgVwJv4IoImfEaLIUjPR3kVtCqQ4LhPGfN5nXacgLLBN5k');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment`
--

CREATE TABLE `payment` (
  `PaymentId` int(11) NOT NULL,
  `PaymentName` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `payment`
--

INSERT INTO `payment` (`PaymentId`, `PaymentName`, `Description`, `Logo`) VALUES
(1, 'Thanh toán khi nhận hàng', 'Trả tiền mặt cho shipper khi bạn nhận hàng', 'null'),
(2, 'Thanh toán qua Internet Banking', 'Thanh toán online khi bạn đặt hàng.', 'null');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission`
--

CREATE TABLE `permission` (
  `id_per` int(11) NOT NULL,
  `name_per` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission`
--

INSERT INTO `permission` (`id_per`, `name_per`) VALUES
(1, 'Full'),
(2, 'View'),
(3, 'Create'),
(4, 'Edit'),
(5, 'Delete');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_detail`
--

CREATE TABLE `permission_detail` (
  `id_per_detail` int(11) NOT NULL,
  `id_per` int(11) NOT NULL,
  `action_code` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `check_action` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_detail`
--

INSERT INTO `permission_detail` (`id_per_detail`, `id_per`, `action_code`, `check_action`) VALUES
(1, 1, 'CREATE', 1),
(2, 1, 'EDIT', 1),
(3, 1, 'DELETE', 1),
(4, 1, 'VIEW', 1),
(5, 2, 'CREATE', 0),
(6, 2, 'EDIT', 0),
(7, 2, 'DELETE', 0),
(8, 2, 'VIEW', 1),
(9, 3, 'CREATE', 1),
(10, 3, 'EDIT', 0),
(11, 3, 'DELETE', 0),
(12, 3, 'VIEW', 1),
(13, 4, 'CREATE', 0),
(14, 4, 'EDIT', 1),
(15, 4, 'DELETE', 0),
(16, 4, 'VIEW', 1),
(17, 5, 'CREATE', 0),
(18, 5, 'EDIT', 0),
(19, 5, 'DELETE', 1),
(20, 5, 'VIEW', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ProductId` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `Images` varchar(255) NOT NULL,
  `Price` bigint(20) NOT NULL,
  `Discount` float NOT NULL,
  `Slug` varchar(255) NOT NULL,
  `Active` int(11) NOT NULL,
  `Descreption` text NOT NULL,
  `CreateAt` timestamp NOT NULL,
  `Views` int(11) NOT NULL,
  `Weight` float NOT NULL COMMENT 'Kg',
  `SupplierId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `CategoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ProductId`, `ProductName`, `Images`, `Price`, `Discount`, `Slug`, `Active`, `Descreption`, `CreateAt`, `Views`, `Weight`, `SupplierId`, `UserId`, `CategoryId`) VALUES
(10, 'Ghế BlueDot', 'bluedot.jpg', 990000, 0.2, 'ghe-bluedot', 1, 'Ghế Bluedot', '2021-11-09 00:00:00', 1202, 5.5, 2, 20, 1),
(11, 'Ghế Carl', 'Carl.jpg', 969000, 0.1, 'ghe-carl', 1, 'Ghế Carl', '2021-11-09 00:00:00', 1200, 6, 1, 20, 1),
(12, 'Ghế Gubi', 'Gubi1.jpg', 1199000, 0.25, 'ghe-gubi', 1, 'Ghế Gubi', '2021-11-09 00:00:00', 1500, 7.5, 3, 20, 1),
(13, 'Ghế Knoll', 'Knoll4.jpg', 1299000, 0, 'ghe-knoll', 1, 'Ghế Knoll', '2021-11-09 00:00:00', 2555, 5.5, 4, 20, 1),
(14, 'Ghế Umage', 'umage2.jpg', 2299000, 0.15, 'ghe-umage', 1, 'Ghế Umage', '2021-11-09 00:00:00', 450, 5, 5, 20, 1),
(15, 'Ghế Sofa Caracole', 'caracole5.jpg', 11999000, 0.12, 'ghe-sofa-caracole', 1, 'Sofa Caracole', '2021-11-09 00:00:00', 1506, 35, 9, 20, 2),
(16, 'Ghế Sofa Ethanicraft', 'Ethanicraft2.jpg', 9990000, 0.2, 'ghe-sofa-ethanicraft', 1, 'Ghế Sofa Ethanicraft', '2021-11-09 00:00:00', 779, 40, 8, 20, 2),
(17, 'Ghế Sofa Gus', 'Gus5.jpg', 11990000, 0.08, 'ghe-sofa-gus', 1, 'Ghế Sofa Gus', '2021-11-09 00:00:00', 987, 38, 7, 20, 2),
(18, 'Ghế Sofa Kite', 'kite.jpg', 14989000, 0.3, 'ghe-sofa-kite', 1, 'Ghế Sofa Kite', '2021-11-09 00:00:00', 1254, 42, 6, 20, 2),
(19, 'Ghế Sofa Muuto', 'muuto.jpg', 13990000, 0, 'ghe-sofa-muuto', 1, 'Ghế Sofa Muuto', '2021-11-09 00:00:00', 897, 37, 2, 20, 2),
(20, 'Ghế Sofa Urbia', 'Urbia.jpg', 16990000, 0, 'ghe-sofa-urbia', 1, 'Ghế Sofa Urbia', '2021-11-09 00:00:00', 689, 50, 3, 20, 2),
(21, 'Ghế Barlow', 'barlow.jpg', 2299000, 0.15, 'ghe-barlow', 1, 'Ghế Barlow', '2021-11-15 00:00:00', 2051, 5.5, 6, 20, 3),
(22, 'Ghế Fermob', 'Fermob1.jpg', 1199000, 0, 'ghe-fermob', 1, 'Ghế Fermob', '2021-11-15 00:00:00', 451, 5.5, 7, 20, 3),
(23, 'Ghế Jut', 'jut5.jpg', 3599000, 0.05, 'ghe-jut', 1, 'Ghế Jut', '2021-11-15 00:00:00', 458, 15, 6, 20, 3),
(24, 'Ghế Adop', 'adop4.jpg', 2199000, 0.1, 'ghe-adop', 1, 'Ghế Adop', '2021-11-15 00:00:00', 898, 3.5, 8, 20, 4),
(25, 'Ghế Fooger', 'fooger2.jpg', 1999000, 0, 'ghe-fooger', 1, 'Ghế Fooger', '2021-11-15 00:00:00', 221, 3, 9, 20, 4),
(26, 'Ghế Hansen', 'Hansen5.jpg', 3299000, 0.15, 'ghe-hansen', 1, 'Ghế Hansen', '2021-11-15 00:00:00', 562, 5.5, 9, 20, 4),
(27, 'Bàn Apelini', 'Apelini5.jpg', 5199000, 0.05, 'ban-apelini', 1, 'Bàn Apelini', '2021-11-15 00:00:00', 1245, 8, 9, 20, 5),
(28, 'Bàn Bueld', 'Bueld5.jpg', 3199000, 0.05, 'ban-bueld', 1, 'Bàn Bueld', '2021-11-15 00:00:00', 444, 6.5, 9, 20, 5),
(29, 'Bàn Cappel', 'Cappel2.jpg', 3599000, 0, 'ban-cappel', 1, 'Bàn Cappel', '2021-11-15 00:00:00', 569, 7, 9, 20, 5),
(30, 'Đèn Arteriors', 'Arteriors.jpg', 12999000, 0.1, 'den-arteriors', 1, 'Đèn Arteriors', '2021-11-15 00:00:00', 1154, 16, 9, 20, 6),
(31, 'Đèn Gene', 'Gene2.jpg', 9900000, 0.15, 'den-gene', 1, 'Đèn Gene', '2021-11-19 00:00:00', 1188, 7, 6, 20, 6),
(32, 'Đèn Betarios', 'Betarios1.jpg', 23000000, 0.1, 'den-betarios', 1, 'Đèn Batarios', '2021-11-19 00:00:00', 2500, 12, 7, 20, 6),
(33, 'Đèn Geogre', 'george4.jpg', 11989000, 0.15, 'den-geogre', 1, 'Đèn Geogre', '2021-11-19 00:00:00', 3655, 7, 8, 20, 6),
(34, 'Đèn DweLED', 'dweLED2.jpg', 6500000, 0, 'den-dweled', 1, 'Đèn DweLED với thiết kế cực kì sáng tạo làm cho căn phòng của bạn trở nên đẹp đẽ và sang trọng hơn.', '2021-11-19 00:00:00', 124, 5, 4, 20, 6),
(35, 'Đèn ModernForm', 'modernforms2.jpg', 7500000, 0.2, 'den-modernform', 1, 'Đèn ModernForm', '2021-11-19 00:00:00', 7000, 8.2, 3, 20, 6),
(36, 'Đèn Moooi', 'moooi2.jpg', 9689000, 0, 'den-moooi', 1, 'Đèn Moooi', '2021-11-19 00:00:00', 0, 9, 5, 20, 6),
(37, 'Đèn Poulsen', 'poulsen.jpg', 9990000, 0.05, 'den-poulsen', 1, 'Đèn Poulsen', '2021-11-22 00:00:00', 0, 8.5, 6, 20, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_image`
--

CREATE TABLE `product_image` (
  `ImageId` int(11) NOT NULL,
  `images` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ProductId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `product_image`
--

INSERT INTO `product_image` (`ImageId`, `images`, `ProductId`) VALUES
(1, 'bluedot1.jpg', 10),
(2, 'bluedot2.jpg', 10),
(3, 'bluedot3.jpg', 10),
(4, 'bluedot4.jpg', 10),
(5, 'bluedot5.jpg', 10),
(6, 'carl1.jpg', 11),
(7, 'carl2.jpg', 11),
(8, 'carl3.jpg', 11),
(9, 'carl4.jpg', 11),
(10, 'carl5.jpg', 11),
(11, 'gubi1.jpg', 12),
(12, 'gubi2.jpg', 12),
(13, 'gubi3.jpg', 12),
(14, 'gubi4.jpg', 12),
(15, 'gubi5.jpg', 12),
(16, 'knoll1.jpg', 13),
(17, 'knoll2.jpg', 13),
(18, 'knoll3.jpg', 13),
(19, 'knoll4.jpg', 13),
(20, 'knoll5.jpg', 13),
(21, 'umage1.jpg', 14),
(22, 'umage2.jpg', 14),
(23, 'umage3.jpg', 14),
(24, 'umage4.jpg', 14),
(25, 'umage5.jpg', 14),
(26, 'caracole1.jpg', 15),
(27, 'caracole2.jpg', 15),
(28, 'caracole3.jpg', 15),
(29, 'caracole4.jpg', 15),
(30, 'caracole5.jpg', 15),
(31, 'ethanicraft1.jpg', 16),
(32, 'ethanicraft2.jpg', 16),
(33, 'ethanicraft3.jpg', 16),
(34, 'ethanicraft4.jpg', 16),
(35, 'ethanicraft5.jpg', 16),
(36, 'gus1.jpg', 17),
(37, 'gus2.jpg', 17),
(38, 'gus3.jpg', 17),
(39, 'gus4.jpg', 17),
(40, 'gus5.jpg', 17),
(41, 'kite1.jpg', 18),
(42, 'kite2.jpg', 18),
(43, 'kite3.jpg', 18),
(44, 'kite4.jpg', 18),
(45, 'kite5.jpg', 18),
(46, 'muuto1.jpg', 19),
(47, 'muuto2.jpg', 19),
(48, 'muuto3.jpg', 19),
(49, 'muuto4.jpg', 19),
(50, 'muuto5.jpg', 19),
(51, 'urbia1.jpg', 20),
(52, 'urbia2.jpg', 20),
(53, 'urbia3.jpg', 20),
(54, 'urbia4.jpg', 20),
(55, 'urbia5.jpg', 20),
(56, 'barlow1.jpg', 21),
(57, 'barlow2.jpg', 21),
(58, 'barlow3.jpg', 21),
(59, 'barlow4.jpg', 21),
(60, 'barlow5.jpg', 21),
(61, 'fermob1.jpg', 22),
(62, 'fermob2.jpg', 22),
(63, 'fermob3.jpg', 22),
(64, 'fermob4.jpg', 22),
(65, 'fermob5.jpg', 22),
(66, 'jut1.jpg', 23),
(67, 'jut2.jpg', 23),
(68, 'jut3.jpg', 23),
(69, 'jut4.jpg', 23),
(70, 'jut5.jpg', 23),
(71, 'adop1.jpg', 24),
(72, 'adop2.jpg', 24),
(73, 'adop3.jpg', 24),
(74, 'adop4.jpg', 24),
(75, 'adop5.jpg', 24),
(76, 'fooger1.jpg', 25),
(77, 'fooger2.jpg', 25),
(78, 'fooger3.jpg', 25),
(79, 'fooger4.jpg', 25),
(80, 'fooger5.jpg', 25),
(81, 'hansen1.jpg', 26),
(82, 'hansen2.jpg', 26),
(83, 'hansen3.jpg', 26),
(84, 'hansen4.jpg', 26),
(85, 'hansen5.jpg', 26),
(86, 'apelini1.jpg', 27),
(87, 'apelini2.jpg', 27),
(88, 'apelini3.jpg', 27),
(89, 'apelini4.jpg', 27),
(90, 'apelini5.jpg', 27),
(91, 'bueld1.jpg', 28),
(92, 'bueld2.jpg', 28),
(93, 'bueld3.jpg', 28),
(94, 'bueld4.jpg', 28),
(95, 'bueld5.jpg', 28),
(96, 'cappel1.jpg', 29),
(97, 'cappel2.jpg', 29),
(98, 'cappel3.jpg', 29),
(99, 'arteriors1.jpg', 30),
(100, 'arteriors2.jpg', 30),
(101, 'arteriors3.jpg', 30),
(102, 'arteriors4.jpg', 30),
(103, 'arteriors5.jpg', 30),
(104, 'cappel4.jpg', 29),
(105, 'cappel5.jpg', 29),
(106, 'Gene1.jpg', 31),
(107, 'Gene2.jpg', 31),
(108, 'Gene3.jpg', 31),
(109, 'Gene4.jpg', 31),
(110, 'Gene5.jpg', 31),
(111, 'Betarios1.jpg', 32),
(112, 'Betarios2.jpg', 32),
(113, 'Betarios3.jpg', 32),
(114, 'Betarios4.jpg', 32),
(115, 'Betarios5.jpg', 32),
(116, 'george1.jpg', 33),
(117, 'george2.jpg', 33),
(118, 'george3.jpg', 33),
(119, 'george4.jpg', 33),
(120, 'george5.jpg', 33),
(121, 'dweLED1.jpg', 34),
(122, 'dweLED2.jpg', 34),
(123, 'dweLED3.jpg', 34),
(124, 'dweLED4.jpg', 34),
(125, 'dweLED5.jpg', 34),
(126, 'modernforms1.jpg', 35),
(127, 'modernforms2.jpg', 35),
(128, 'modernforms3.jpg', 35),
(129, 'modernforms4.jpg', 35),
(130, 'modernforms5.jpg', 35),
(131, 'moooi1.jpg', 36),
(132, 'moooi2.jpg', 36),
(133, 'moooi3.jpg', 36),
(134, 'moooi4.jpg', 36),
(135, 'moooi5.jpg', 36),
(136, 'poulsen1.jpg', 37),
(137, 'poulsen2.jpg', 37),
(138, 'poulsen3.jpg', 37),
(139, 'poulsen4.jpg', 37),
(140, 'poulsen5.jpg', 37);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `RoleName` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id_role`, `RoleName`) VALUES
(1, 'Sale'),
(2, 'Warehouse'),
(3, 'HRM'),
(4, 'Manager'),
(5, 'SuperAdmin'),
(6, 'Customer'),
(7, 'Shipper');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shipoption`
--

CREATE TABLE `shipoption` (
  `ShipOptionId` int(11) NOT NULL,
  `ShippingName` varchar(255) NOT NULL,
  `PricePerKm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `shipoption`
--

INSERT INTO `shipoption` (`ShipOptionId`, `ShippingName`, `PricePerKm`) VALUES
(1, 'Giao hàng khu vực TP. HCM', 3000),
(2, 'Giao hàng liên tỉnh', 1000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `SliderId` int(11) NOT NULL,
  `Images` varchar(255) NOT NULL,
  `URL` varchar(255) NOT NULL,
  `Discount` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`SliderId`, `Images`, `URL`, `Discount`, `Content`, `Active`) VALUES
(7, 'slider1.jpg', '/products/ghe-bluedot', 'Sale up 30%', 'Mùa đông vắng em', 1),
(8, 'slider2.jpg', '/products/ghe-bluedot', 'Sale nhiều lắm', 'Đêm đông lạnh lẽo', 1),
(9, 'slider3.jpg', '/products/ghe-bluedot', 'Nội dung khuyến mãi', 'Nội dung sự kiện', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `StatusId` int(11) NOT NULL,
  `StatusName` varchar(50) NOT NULL,
  `Status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`StatusId`, `StatusName`, `Status`, `Description`) VALUES
(1, 'Đang chờ xử lí', NULL, 'Đơn hàng đang chờ xử lí'),
(2, 'Đã xác nhận', 'Xác nhận đơn hàng', 'Đơn hàng đã được xác nhận'),
(3, 'Đang giao hàng', 'Chuyển cho bộ phận giao hàng', 'Đơn hàng đang được giao'),
(4, 'Giao thành công', 'Giao thành công', 'Đơn hàng đã được giao thành công'),
(5, 'Đã hủy', NULL, 'Đơn hàng đã hủy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `supplier`
--

CREATE TABLE `supplier` (
  `SupplierId` int(11) NOT NULL,
  `SupplierName` varchar(255) NOT NULL,
  `Images` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `supplier`
--

INSERT INTO `supplier` (`SupplierId`, `SupplierName`, `Images`, `Address`, `Phone`, `Email`) VALUES
(1, 'Xuân Hòa', 'xuan-hoa.jpg', '87A Hai Bà Trưng, phường 6, quận 3, TP.HCM', '0985614778', 'xuanhoa@gmail.com'),
(2, 'Hòa Phát', 'hoa-phat.jpg', 'Lô B18/D6 Khu đô thị mới Cầu Giấy, P. Dịch Vọng, Q. Cầu Giấy, TP. Hà Nội', '0355111444', 'hoaphatgruop@gmail.vn'),
(3, 'Fancom', 'fancom.jpg', '12 Nguyễn Thị Búp, phường Tân Chánh Hiệp, quận 12, thành phố Hồ Chí Minh', '036457878', 'fancom@gmail.com'),
(4, 'GreenLines', 'green-line.jpg', '45 Trần Hưng Đạo, Dĩ An, Bình Dương', '0365678789', 'greenlines@gmail.com'),
(5, 'Hoàn Mỹ', 'hoan-my.jpg', 'Tòa nhà số 8, 154. Quận 1, Thành phố Hồ Chí Minh', '0345789699', 'hoanmy@gmail.com'),
(6, 'Molux', 'molux.jpg', '156 Khu phố 4, phường An Phú Đông, Quận 12, TP Hồ Chí Minh', '0656898994', 'molux@gmail.com'),
(7, 'Ngọc Hải', 'ngoc-hai-noi-that.jpg', '60/1 Ung Văn Khiêm,, Phường 25, Quận Bình Thạnh, TP Hồ Chí Minh', '0568897448', 'ngochainoithat@gmail.com'),
(8, 'Nội Thất Hot', 'noi-that-hot.jpg', '1368/51/3/25C Lê Văn Lương,, Xã Phước Kiển, Huyện Nhà Bè, TP Hồ Chí Minh', '095874465', 'noithathot@gmail.com'),
(9, 'Perfect Home', 'perfect-home.jpg', 'Tầng 1, 207A Nguyễn Văn Thủ,, Phường Đa Kao, Quận 1, TP Hồ Chí Minh', '0548878884', 'perfecthome@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `token`
--

CREATE TABLE `token` (
  `TokenID` int(11) NOT NULL,
  `TokenContent` varchar(255) NOT NULL,
  `Activate` int(11) NOT NULL,
  `Date` date NOT NULL,
  `TokenName` varchar(255) NOT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `UserRole` int(11) NOT NULL DEFAULT '6',
  `google_id` varchar(255) DEFAULT NULL,
  `Active` int(11) NOT NULL DEFAULT '1',
  `facebook_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`UserId`, `Fullname`, `Email`, `Phone`, `Password`, `Address`, `UserRole`, `google_id`, `Active`, `facebook_id`) VALUES
(1, 'hoai', 'hoai@gmail.com', '0387991111', '$2y$10$0F51kBi2Y6ah9xZg5637WOCXMFAk7Wm8tz2vY7hze.uHjUwIQSaD6', '123 buôn mê', 6, '', 1, ''),
(2, 'viet', 'viet@gmail.com', '0387999999', '$2y$10$0F51kBi2Y6ah9xZg5637WOCXMFAk7Wm8tz2vY7hze.uHjUwIQSaD6', '123 buôn mê', 6, '', 1, ''),
(3, 'an nguyễn', 'an@gmail.com', '0387999999', '$2y$10$0F51kBi2Y6ah9xZg5637WOCXMFAk7Wm8tz2vY7hze.uHjUwIQSaD6', '123 buôn mê', 6, '', 1, ''),
(4, 'Việt Nguyễn', 'viet.phamcong@gmail.com', '0387777777', '$2y$10$KmgWnhHfZLQRvE6UscyCRe5pSdbVJ3GqxN4eF0xrUoD5Ulaev3BQy', '123 buôn mê thuoc', 6, '', 1, ''),
(5, 'cong viet', 'viet022@gmail.com', '0388888888', '$2y$10$0F51kBi2Y6ah9xZg5637WOCXMFAk7Wm8tz2vY7hze.uHjUwIQSaD6', '123 buôn mê', 6, '', 1, ''),
(16, 'viet pham cong', 'nghiatrang@gmail.com', '0777777777', '$2y$10$0F51kBi2Y6ah9xZg5637WOCXMFAk7Wm8tz2vY7hze.uHjUwIQSaD6', '123 buôn mê', 6, '', 1, ''),
(17, 'toan', 'toan@gmail.com', '0333333333', '$2y$10$iUy8urh3u34A6X8/tqZSUOE69IG.rdRGqNu17NxAVzamTYRXEqNGa', '123 buôn mê', 6, '', 1, ''),
(18, 'trần hưng đạo', 'tranhungdao@gmail.com', '0999999999', '$2y$10$U7gVtJcci5yhhG47L/ETe.eA5POysfC79xr8FUX3r4Uf59UjSKG8e', '123 buôn mê', 6, '', 1, ''),
(19, 'quag', 'quang@domain.com', '0999999999', '$2y$10$7WAEY0Jm1.OsyjyKF1rKU.ebfke3eeNyetQEPuV.akbuUA2rh6dDG', '123 abc@domain.com', 6, '', 1, ''),
(20, 'khai', 'khaipqps15848@fpt.edu.vn', NULL, '$2y$10$.SD7Y2nXFGHy5gYr3XzU7evLOCrslFMPrZHKQmOt2znr53aze2Vhm', NULL, 6, '', 1, ''),
(21, 'hoai pham cong', 'hoaittps16429@fpt.edu.vn', NULL, '$2y$10$Vsp2CnTJ/0QjEQDcDSqAWOqRVST9GzzYuEldbNlujM6raaWVx1RSu', NULL, 6, '', 1, ''),
(23, 'viet pham cong', 'vietpcps15786@fpt.edu.vn', NULL, '$2y$10$ldhsOz5l/aoQvkaf85/pSuiWsqnZqvTNexxxW2dV1I7DFgLB9SfB.', NULL, 6, '107336360895661711882', 1, NULL),
(25, 'Dinh Ngoc Minh Nhat (FPL)', 'nhatdnmps19296@fpt.edu.vn', NULL, '$2y$10$sNzYb4rwfwpR3VTDGZsA/O8fBq40Ui.JjYUX9BOzNCIqKyPQ/DQsm', NULL, 5, '116163166752900653836', 1, NULL),
(27, 'viet pham ', 'viet.phamcong2001@gmail.com', NULL, '$2y$10$uOVE5BLVlbDf8EK1eZ/Qo.nJaqPhqNC8ofRqnwJGIpZrKCuXywGs2', NULL, 6, '106964609824114778714', 1, NULL),
(29, 'sale', 'sale@domain.com', NULL, '$2y$10$7VtHI3C9g0wBfEfNxoJy.OzXN9aKXnvBITopSxpm7xzcyVF2VcvIm', NULL, 1, NULL, 1, NULL),
(30, 'warehouse', 'warehouse@domain.com', NULL, '$2y$10$PjFEGQrj1WSThj.NmlU0V.RdWdu/NN7UY8p1rEPpqsrZ813naZG0O', NULL, 2, NULL, 1, NULL),
(31, 'hr', 'hr@domain.com', NULL, '$2y$10$Rd0Zc4IwaOpOmvdAwJwAEOZhpnEnuxRqkz.P2GPRl9aUFnriKJJfK', NULL, 3, NULL, 1, NULL),
(32, 'manager', 'manager@domain.com', NULL, '$2y$10$jU9X6NGTpRV9jrl3ji3Nku4EVFyjshAya6egsoYVtevZWaMrGutz2', NULL, 4, NULL, 1, NULL),
(33, 'admin', 'admin@domain.com', NULL, '$2y$10$GiQB1tqUUXdQ470v5xdJb.Uq/Brc.C/b3ArEwEjhSuwUSI9FmWGK2', NULL, 5, NULL, 1, NULL),
(34, 'ps', 'vietpcps15regergregreg786@fpt.edu.vnn', NULL, '$2y$10$TIicNmRnxPB0yqjEdwI9lOnqplbcc.vGpD4EjQ9G5oIK/MUvdtJfy', NULL, 2, NULL, 1, NULL),
(35, 'Nhat Dinh', 'nhatdnmps19296@gmail.com', NULL, '$2y$10$zplqD6N3sTK1yH2hbsMVbeYTuPWZqGtWLzgqM2jClWqfvV4zovOd2', NULL, 5, NULL, 1, NULL),
(36, 'nghia tran', 'viet.phamcong812@gmail.com', NULL, '$2y$10$QM1i9C.QOZOJK8.nPPP7Aujz0vnV5IaAFAVbi1vlxm/VrlHPDb7JG', NULL, 6, NULL, 1, NULL),
(37, 'Viet Pham Cong', 'viet.phamcong812@gmail.com', NULL, '$2y$10$QM1i9C.QOZOJK8.nPPP7Aujz0vnV5IaAFAVbi1vlxm/VrlHPDb7JG', NULL, 6, '107423685202037371653', 1, NULL),
(38, 'Tran Thanh Hoai (FPL HCM_K16)', 'hoaittps16429@fpt.edu.vn', NULL, '$2y$10$qwVai.OqXyfi5VD.xhSs6uq4Jy2w6GF.DJtDCnMNA5YUiwLuYERrq', NULL, 5, '101682902761163399879', 1, NULL),
(39, 'Trần Thanh Hoài', 'tranthanhhoai672002@gmail.com', NULL, '$2y$10$WuK.jtDpTWMqiRZyrqI9/.KnbuCdnOti4ny.tx3zCMG02YXxrl1Ga', NULL, 6, '108742372548279880893', 1, NULL),
(40, 'Shipper', 'shipper@domain.com', NULL, '$2y$10$PjFEGQrj1WSThj.NmlU0V.RdWdu/NN7UY8p1rEPpqsrZ813naZG0O', NULL, 7, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_per`
--

CREATE TABLE `user_per` (
  `id_user_per` int(11) NOT NULL,
  `id_per` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `licenced` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_per`
--

INSERT INTO `user_per` (`id_user_per`, `id_per`, `id_user`, `licenced`) VALUES
(1, 2, 30, 1),
(2, 4, 30, 1),
(3, 2, 30, 1),
(4, 3, 30, 1),
(6, 1, 38, 1),
(8, 1, 33, 1),
(9, 1, 33, 1),
(10, 1, 40, 1),
(11, 1, 29, 1),
(12, 1, 30, 1),
(13, 1, 30, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `variant`
--

CREATE TABLE `variant` (
  `VariantId` int(11) NOT NULL,
  `VariantName` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Active` int(11) NOT NULL,
  `Color` varchar(255) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `variant`
--

INSERT INTO `variant` (`VariantId`, `VariantName`, `Price`, `Description`, `Active`, `Color`, `ProductId`, `Quantity`) VALUES
(1, 'Ghế Bluedot Tomato', 0, 'Ghế Bluedot Tomato', 1, 'bluedot1.jpg', 10, 35),
(2, 'Ghế Bluedot Đỏ', 0.08, 'Ghế Bluedot Xanh', 1, 'bluedot_red.jpg', 10, 18),
(3, 'Ghế Carl Đen', 0, 'Ghế Carl Đen', 1, 'carl_black.jpg', 11, 24),
(4, 'Ghế Carl Nâu', 0.02, 'Ghế Carl Nâu', 1, 'carl_brown.jpg', 11, 0),
(5, 'Ghế Gubi Nâu', 0, 'Ghế Gubi Nâu', 1, 'Gubi1.jpg', 12, 72),
(6, 'Ghế Gubi Màu Be', 0, 'Ghế Gubi Màu Be', 1, 'Gubi2.jpg', 12, 25),
(7, 'Ghế Knoll Đen', 0.02, 'Ghế Knoll Đen', 1, 'Knoll4.jpg', 13, 69),
(8, 'Ghế Knoll Vàng', 0.02, 'Ghế Knoll Vàng', 1, 'Knoll2.jpg', 13, 56),
(9, 'Ghế Knoll Xám', 0, 'Ghế Knoll Xám', 1, 'Knoll1.jpg', 13, 45),
(10, 'Ghế Umage Xám', 0, 'Ghế Umage Xám', 1, 'umage1.jpg', 14, 66),
(11, 'Ghế Umage Xanh Đen', 0.05, 'Ghế Umage Xanh Đen', 1, 'umage2.jpg', 14, 45),
(12, 'Ghế Umage Đen', 0.05, 'Ghế Umage Đen', 1, 'umage3.jpg', 14, 77),
(14, 'Ghế Caracole Màu Be', 0, 'Ghế Caracole Màu Be', 1, 'caracole1.jpg', 15, 75),
(15, 'Ghế Ethanicraft Xám', 0.03, 'Ghế Ethanicraft Xám', 1, 'Ethanicraft2.jpg', 16, 64),
(16, 'Ghế Ethanicraft Màu Be', 0.03, 'Ghế Ethanicraft Màu Be', 1, 'Ethanicraft1.jpg', 16, 38),
(17, 'Ghế Gus Nâu', 0, 'Ghế Gus Nâu', 1, 'gus1.jpg', 17, 82),
(18, 'Ghế Gus Màu Be', 0.02, 'Ghế Gus Màu be', 1, 'gus2.jpg', 17, 29),
(19, 'Ghế Kite Màu Be', 0, 'Ghế Kite Be', 1, 'kite1.jpg', 18, 11),
(20, 'Ghế Kite Xám Đậm', 0.03, 'Ghế Kite Xám Đậm', 1, 'kite3.jpg', 18, 11),
(21, 'Ghế Muuto Xám Đậm', 0.03, 'Ghế Muuto Xám Đậm', 1, 'muuto2.jpg', 19, 78),
(22, 'Ghế Muuto Xám', 0, 'Ghế Muuto Xám', 1, 'muuto1.jpg', 19, 41),
(23, 'Ghế Urbia Xám', 0, 'Ghế Urbia Xám', 1, 'urbia1.jpg', 20, 11),
(24, 'Ghế Urbia Xanh Rêu', 0.05, 'Ghế Urbia Xanh Rêu', 1, 'urbia5.jpg', 20, 12),
(25, 'Ghế Bluedot Xám', 0.05, 'Ghế Bluedot Xám', 1, 'bluedot_gray.jpg', 10, 0),
(26, 'Đèn Poulsen Vàng', 0, 'Đèn Poulsen Vàng', 1, 'poulsen.jpg', 37, 50),
(27, 'Đèn Poulsen Cam', 0, 'Không', 1, 'poulsenorange.jpg', 37, 56),
(28, 'Đèn Poulsen Vàng', 0.05, 'Không', 1, 'poulsenyellow.jpg', 37, 23),
(29, 'Đèn Poulsen Trắng', 0.1, 'Không', 1, 'poulsenwhite.jpg', 37, 0),
(30, 'Đèn Moooi Vàng', 0, 'Moooi Vàng', 1, 'moooi4.jpg', 36, 45),
(32, 'Barlow Đen', 0, 'Barlow Đen', 1, 'barlow1.jpg', 21, 100),
(33, 'Barlow Trắng', 0.05, 'Trắng', 1, 'barlow3.jpg', 21, 72),
(34, 'Jut Trắng', 0, 'Trắng', 1, 'Jut1.jpg', 23, 44),
(35, 'Jut Xanh', 0.1, 'Xanh', 1, 'Jut3.jpg', 23, 123),
(36, 'Jut Đỏ', 0.08, 'Đỏ', 1, 'Jut4.jpg', 23, 154),
(37, 'Adop Gỗ', 0, 'Gỗ', 1, 'adop1.jpg', 24, 142),
(38, 'Fooger Xám', 0, 'Xám', 1, 'fooger1.jpg', 25, 78),
(39, 'Fooger Vàng', 0.08, 'Vàng', 1, 'fooger4.jpg', 25, 89),
(40, 'Hansen Gỗ', 0, 'Gỗ', 1, 'Hansen2.jpg', 26, 56),
(41, 'Hansen Đen', 0.05, 'Đen', 1, 'Hansen5.jpg', 26, 59),
(42, 'Apelini Trắng', 0, 'Trắng', 1, 'Apelini5.jpg', 27, 89),
(43, 'Bueld Trắng', 0, 'Trắng', 1, 'Bueld2.jpg', 28, 145),
(44, 'Bueld Xanh', 0.1, 'Xanh', 1, 'Bueld3.jpg', 28, 69),
(45, 'Cappel Đen', 0, 'Đen', 1, 'Cappel1.jpg', 29, 200),
(46, 'Arterious Đen', 0, 'Đen', 1, 'Arteriors1.jpg', 30, 78),
(47, 'Arterious Vàng', 0.1, 'Vàng', 1, 'Arteriors3.jpg', 30, 50),
(48, 'Gene Vàng', 0, 'Vàng', 1, 'Gene3.jpg', 31, 120),
(49, 'Gene Đen', 0.1, 'Đen', 1, 'Gene4.jpg', 31, 56),
(50, 'Betarios Vàng', 0, 'Vàng', 0, 'Betarios3.jpg', 32, 10),
(51, 'dweLED Ánh Bạc', 0, 'Ánh bạc', 1, 'dweLED1.jpg', 34, 80),
(52, 'ModernForms Đen', 0, 'Đen', 1, 'modernforms4.jpg', 35, 60),
(53, 'Fermob Đỏ', 0, 'Fermob Đỏ', 1, 'fermob2.jpg', 22, 50),
(54, 'Fermob Đen', 0.05, 'Fermob Đen', 1, 'fermob3.jpg', 22, 45),
(55, 'Fermob Vàng', 0.05, 'Fermob Vàng', 1, 'fermob4.jpg', 22, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`AboutID`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`BlogID`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `Blog_CategoryID` (`Blog_CategoryID`);

--
-- Chỉ mục cho bảng `blogcomment`
--
ALTER TABLE `blogcomment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postId` (`postId`),
  ADD KEY `userId` (`userId`);

--
-- Chỉ mục cho bảng `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`Blog_CategoryID`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartId`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `VariantId` (`VariantId`) USING BTREE;

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`CommentId`),
  ADD KEY `ProductId` (`ProductId`),
  ADD KEY `UserId` (`UserId`);

--
-- Chỉ mục cho bảng `comp_location`
--
ALTER TABLE `comp_location`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `historyorder`
--
ALTER TABLE `historyorder`
  ADD PRIMARY KEY (`HistoryOrderId`),
  ADD KEY `StatusId` (`StatusId`),
  ADD KEY `OrderId` (`OrderId`),
  ADD KEY `UserId` (`UserId`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`OrderDetailId`),
  ADD KEY `ProductId` (`ProductId`),
  ADD KEY `OrderId` (`OrderId`),
  ADD KEY `orderdetail_ibfk3` (`VariantId`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderId`),
  ADD KEY `PaymentId` (`PaymentId`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `StatusId` (`StatusId`),
  ADD KEY `ShipOptionId` (`ShipOptionId`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentId`);

--
-- Chỉ mục cho bảng `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id_per`);

--
-- Chỉ mục cho bảng `permission_detail`
--
ALTER TABLE `permission_detail`
  ADD PRIMARY KEY (`id_per_detail`),
  ADD KEY `fk_perID_permission_detail` (`id_per`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductId`),
  ADD KEY `SupplierId` (`SupplierId`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `CategoryId` (`CategoryId`);

--
-- Chỉ mục cho bảng `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`ImageId`),
  ADD KEY `fk_pd_img` (`ProductId`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Chỉ mục cho bảng `shipoption`
--
ALTER TABLE `shipoption`
  ADD PRIMARY KEY (`ShipOptionId`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`SliderId`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`StatusId`);

--
-- Chỉ mục cho bảng `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`SupplierId`);

--
-- Chỉ mục cho bảng `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`TokenID`),
  ADD KEY `UserId` (`UserId`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`),
  ADD KEY `fk_user_role` (`UserRole`);

--
-- Chỉ mục cho bảng `user_per`
--
ALTER TABLE `user_per`
  ADD PRIMARY KEY (`id_user_per`),
  ADD KEY `fk_userID_user_per` (`id_user`),
  ADD KEY `fk_perID_user_per` (`id_per`);

--
-- Chỉ mục cho bảng `variant`
--
ALTER TABLE `variant`
  ADD PRIMARY KEY (`VariantId`),
  ADD KEY `ProductId` (`ProductId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `about`
--
ALTER TABLE `about`
  MODIFY `AboutID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `BlogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `blogcomment`
--
ALTER TABLE `blogcomment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `Blog_CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `CartId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `CommentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `historyorder`
--
ALTER TABLE `historyorder`
  MODIFY `HistoryOrderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `OrderDetailId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `permission`
--
ALTER TABLE `permission`
  MODIFY `id_per` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `permission_detail`
--
ALTER TABLE `permission_detail`
  MODIFY `id_per_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `ProductId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `product_image`
--
ALTER TABLE `product_image`
  MODIFY `ImageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `shipoption`
--
ALTER TABLE `shipoption`
  MODIFY `ShipOptionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `SliderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `StatusId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `supplier`
--
ALTER TABLE `supplier`
  MODIFY `SupplierId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `token`
--
ALTER TABLE `token`
  MODIFY `TokenID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `user_per`
--
ALTER TABLE `user_per`
  MODIFY `id_user_per` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `variant`
--
ALTER TABLE `variant`
  MODIFY `VariantId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_2` FOREIGN KEY (`Blog_CategoryID`) REFERENCES `blog_category` (`blog_categoryid`),
  ADD CONSTRAINT `blog_ibfk_3` FOREIGN KEY (`UserId`) REFERENCES `users` (`userid`);

--
-- Các ràng buộc cho bảng `blogcomment`
--
ALTER TABLE `blogcomment`
  ADD CONSTRAINT `blogcomment_ibfk_1` FOREIGN KEY (`postId`) REFERENCES `blog` (`blogid`),
  ADD CONSTRAINT `blogcomment_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`userid`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`VariantId`) REFERENCES `variant` (`variantid`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `product` (`productid`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`UserId`) REFERENCES `users` (`userid`);

--
-- Các ràng buộc cho bảng `historyorder`
--
ALTER TABLE `historyorder`
  ADD CONSTRAINT `historyorder_ibfk_1` FOREIGN KEY (`StatusId`) REFERENCES `status` (`statusid`),
  ADD CONSTRAINT `historyorder_ibfk_2` FOREIGN KEY (`OrderId`) REFERENCES `orders` (`orderid`),
  ADD CONSTRAINT `historyorder_ibfk_3` FOREIGN KEY (`UserId`) REFERENCES `users` (`userid`);

--
-- Các ràng buộc cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk3` FOREIGN KEY (`VariantId`) REFERENCES `variant` (`variantid`),
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `product` (`productid`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`OrderId`) REFERENCES `orders` (`orderid`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`PaymentId`) REFERENCES `payment` (`paymentid`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`UserId`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`StatusId`) REFERENCES `status` (`statusid`),
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`ShipOptionId`) REFERENCES `shipoption` (`shipoptionid`);

--
-- Các ràng buộc cho bảng `permission_detail`
--
ALTER TABLE `permission_detail`
  ADD CONSTRAINT `fk_perID_permission_detail` FOREIGN KEY (`id_per`) REFERENCES `permission` (`id_per`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`SupplierId`) REFERENCES `supplier` (`supplierid`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`UserId`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`CategoryId`) REFERENCES `category` (`categoryid`);

--
-- Các ràng buộc cho bảng `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `fk_pd_img` FOREIGN KEY (`ProductId`) REFERENCES `product` (`productid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `token_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`userid`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_user_role` FOREIGN KEY (`UserRole`) REFERENCES `role` (`id_role`);

--
-- Các ràng buộc cho bảng `user_per`
--
ALTER TABLE `user_per`
  ADD CONSTRAINT `fk_perID_user_per` FOREIGN KEY (`id_per`) REFERENCES `permission` (`id_per`),
  ADD CONSTRAINT `fk_userID_user_per` FOREIGN KEY (`id_user`) REFERENCES `users` (`userid`);

--
-- Các ràng buộc cho bảng `variant`
--
ALTER TABLE `variant`
  ADD CONSTRAINT `variant_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `product` (`productid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
