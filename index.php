<!doctype html>
<html>
<head>
    <link type="text/css" href="css/style.css" rel="stylesheet">
    <script src="script.js"></script>
    <meta charset="utf-8">
    <title>Trang chủ</title>
</head>

<body bgcolor="#EEEEEE">
<?php
include('includes/db_connect.php'); // Kết nối database
// Truy vấn bài viết
$sql = "SELECT * FROM baiviet ORDER BY ngaydang DESC";
$result = $conn->query($sql);

// Hiển thị bài viết
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h2>{$row['tieude']}</h2>";
        echo "<p>{$row['noidung']}</p>";
        echo "<p><em>Tác giả: {$row['tacgia']} - Ngày đăng: {$row['ngaydang']}</em></p>";
        echo "<a href='sua_baiviet.php?id={$row['id']}'>Sửa</a> | ";
        echo "<a href='xoa_baiviet.php?id={$row['id']}'>Xóa</a>";
        echo "<hr>";
    }
} else {
    echo "Không có bài viết nào!";
}
$conn->close();
?>
<div id="wrap">
    <h2 class="h2">Kiến thức - Kinh nghiệm - Hỏi đáp</h2>

    <form>
        <input type="text" name="search" placeholder="Tìm bài viết, sản phẩm...">
    </form>
</div>
<div id="menu">
    <div class="ul">
        <ul>
            <h3>
                <li><a href="index.php" id="a1">Trang chủ</a></li>
                <li><a href="itc.php" id="a1">Tin ICT</a></li>
                <li><a href="tinvideo.php" id="a1">Tin Video</a></li>
                <li><a href="dangky.php" id="a1">Diễn đàn</a></li>
                <li><a href="gopy.php" id="a1">Góp ý</a></li>
            </h3>
        </ul>
    </div>
    <div class="dk"><a href="dangky.php">Đăng ký</a> || <a href="dangnhap.php">Đăng nhập</a></div>
</div>
<br>
<div id="noidung">
    <div id="contend">
        <div class="div121">
            <div class="div1211">
                <h3 class="divtb"><a href="dangnhap.php">
                    <p>TIN NỔI BẬT</p>
                </a></h3>
                <img src="ima/win2.jpg" class="img2"><br>
                <a href="http://genk.vn/samsung-galaxy-s10-vs-xiaomi-mi-9-cung-cau-hinh-manh-3-camera-cam-bien-van-tay-duoi-man-hinh-lieu-s10-co-dang-muc-gia-gap-doi-20190301133736815.chn" class="a1">
                    <h2>6 Giải pháp đơn giản giúp khắc phục lỗi khởi động chậm trên Windows 10</h2>
                </a>
            </div>
            <br>
            <div class="div1212"><b>Tin công nghệ <img src="ima/hot.gif" width="30" height="30"></b><br>
                <br>
                <marquee onmouseover="this.stop()" direction="up" onmouseout="this.start()" scrollamount="5">
                    <a href="#">Những chiếc Samsung Galaxy S10 đầu tiên đến tay Khách Hàng Việt Nam</a>
                    <hr>
                    <a href="#">E ngại sức ép từ Mỹ, Huawei cầu cứu các nhà cung cấp Nhật Bản</a>
                    <hr>
                    <a href="#">Các tiện ích Cổng thanh toán PayPal dành cho bạn</a>
                    <hr>
                    <a href="#">Cách cài WordPress cục bộ trên máy tính với ServerPress</a>
                    <hr>
                    <a href="#">Cách gỡ cài đặt Ubuntu an toàn khỏi PC dual boot Windows</a>
                    <hr>
                    <a href="#">Tính năng nhận dạng chữ viết tay mới của Gboard được tích hợp AI, giảm thiểu lỗi tới 40%</a>
                    <hr>
                    <a href="#">10 phím tắt mà người dùng hay vô tình nhấn phải</a>
                    <hr>
                    <a href="#">"Thứ giúp Samsung đả bại Apple chính là jack 3.5mm"</a>
                </marquee>
            </div>
            <br>
            <br>
            <h3 class="divtb"><a href="dangnhap.php">
                <p>ĐỪNG BỎ LỠ</p>
            </a></h3>
            <br>
            <span><img src="ima/anh1.jpg" width="200" height="200"><a href="#">
                <h2>5 công cụ giám sát cơ sở hạ tầng CNTT tốt nhất</h2>
            </a><br>
            Các công cụ và phần mềm giám sát cơ sở hạ tầng CNTT rất quan trọng trong việc theo dõi những hệ thống mạng phức tạp và đang phát triển nhanh chóng như hiện nay.<br>
            <p>6 phút trước</p>
            </span>
            <br>
            <hr>
            <br>
            <span><img src="ima/anh2.jpg" width="200" height="200"><a href="#">
                <h2>Lập trình viên sử dụng 12.000 dòng code ‘lột xác’ hoàn toàn cho đồ họa trong game Quake 2 từ năm 1997</h2>
            </a><br>
            NVIDIA đã bắt tay với các lập trình viên của dự án để có thể tạo ra Quake II RTX, một game thuần hiệu ứng dò tia sáng.<br>
            <p>6 phút trước</p>
            </span>
            <br>
            <hr>
            <br>
            <span><img src="ima/anh3.jpg" width="200" height="200"><a href="#">
                <h2>Chiêm ngưỡng ứng dụng AI mới của Nvidia: Biến nét vẽ nguệch ngoạc theo phong cách MS Paint thành những “kiệt tác” nghệ thuật</h2>
            </a><br>
            Mới đây, các nhà nghiên cứu trí tuệ nhân tạo Nvidia đã phát triển thành công một mô hình học sâu (deep learning) có khả năng...<br>
            <p>6 phút trước</p>
            </span>
            <br>
            <hr>
            <br>
            <span><img src="ima/anh4.jpg" width="200" height="200"><a href="#">
                <h2>Cách mở 178 định dạng ảnh trên Windows 10</h2>
            </a><br>
            Ứng dụng Picture Opener Pro sẽ mở nhiều định dạng ảnh, mà không cần phải chuyển đổi định dạng.<br>
            <p>6 phút trước</p>
            </span>
            <hr>
            <div class="docnhieu">
                <hr>
                <h3 class="divtb">
                    <marquee>
                        <p>TIN ĐỌC NHIỀU</p>
                    </marquee>
                </h3>
                <div><img src="ima/a6.jpg" width="200" height="200"><a href="#">Top ứng dụng Android đang miễn phí và giảm giá</a></div>
                <div><img src="ima/a7.jpg" width="200" height="200"><a href="#">8 ứng dụng iPhone có thể khóa bằng Touch ID hoặc Face ID</a></div>
                <div><img src="ima/a8.png" width="200" height="200"><a href="#">Cách hủy kết bạn Facebook ảo hàng loạt</a></div>
            </div>
            <hr>
        </div>
        <div id="right">
            <img src="https://cdn.fptshop.com.vn/Uploads/Originals/2019/2/28/636869719313136991_H2.png" class="qc1"><br>
            <br>
            <img src="ima/qc4.png" class="qc4"><br>
            <img src="ima/qc3.gif" width="300" height="250"><br>
            <br>
            <b>Tin video</b>
            <video controls height="200" width="300">
                <source src="videos/1.mp4" type="video/mp4">
            </video>
            <br>
            <br>
            <h3>ICT NEWS</h3>
            <br>
            <div id="r1"><b><img src="ima/r1.jpg" width="80" height="80"><a href="#">Cách khắc phục lỗi “Tin nhắn không gửi được” trên điện thoại Android</a></b></div>
            <hr>
            <div id="r1"><img src="ima/r2.png" width="80" height="80"><a href="#">Cách sửa lỗi website hiện tiếng Pháp trên Chrome, Firefox</a></div>
            <hr>
            <div id="r1"><img src="ima/r3.jpg" width="80" height="80"><a href="#">Mẹo khởi động thiết bị Android khi bị hỏng nút nguồn</a></div>
            <hr>
            <div id="r1"><img src="ima/r4.jpg" width="80" height="80"><a href="#">Chiêm ngưỡng 19 bức ảnh tuy thật mà còn vi diệu hơn cả Photoshop</a></div>
            <hr>
            <div id="r1"><img src="ima/r5.jpg" width="80" height="80"><a href="#">Chiêm ngưỡng 19 bức ảnh tuy thật mà còn vi diệu hơn cả Photoshop</a></div>
            <hr>
            <br>
            <img src="ima/vivo.jpg" width="300" height="400">
        </div>
    </div>
    <br>
    <img src="ima/bnp.png" width="100%" height="75">
    <div id="footer">
        <div class="divft1">
            <p>&nbsp;</p>
            <p><a href="http://icthdu36.dx.am">TRANG CHỦ</a></p>
        </div>
        <div class="divft">
            <h4>ICT-HDU</h4>
            <a href="#">Khoa học</a><br>
            <a href="#">Công nghệ</a><br>
            <a href="#">Kỹ thuật</a><br>
            <a href="#">Cuộc sống</a><br>
            <a href="#">Điện máy</a>
        </div>
        <div class="divft">
            <h4>FORUM</h4>
            <a href="#">Điện thoại</a><br>
            <a href="#">Máy tính</a><br>
            <a href="#">Camera</a><br>
            <a href="#">Xe</a><br>
            <a href="#">Phụ kiện</a>
        </div>
        <div class="divft">
            <h4>LIÊN KẾT</h4>
            <a href="#">Bien99</a><br>
            <a href="#">Study</a><br>
            <a href="#">Google</a>
        </div>
        <div class="divft">
            <h4>VỀ CHÚNG TÔI</h4>
            <a href="#">Nhóm 8</a><br>
            <a href="#">Đặng Thắng Việt</a><br>
            <a href="#">Phạm Thị Dịu</a><br>
            <a href="#">Vũ Trung Hanh</a><br>
            <a href="#">Nguyễn Đức Mạnh</a><br>
            <a href="#">Nguyễn Văn Hoàng</a><br>
        </div>
    </div>
</div>
</body>
</html>
