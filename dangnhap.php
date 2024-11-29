<!doctype html>
<html>
<head>
<link type="text/css" href="css/dangnhap.css" rel="stylesheet">
<script src="js/dangnhap.js"></script>
<meta charset="utf-8">
<title>ICT 36 - Đăng nhập</title>
</head>

<body style="background-color:#EFF0F5">
<?php
include('includes/db_connect.php'); // Kết nối đến MySQL thông qua db_connect.php

// Kiểm tra nếu người dùng nhấn nút "Đăng nhập"
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnDangNhap'])) {
    $tenDangNhap = htmlspecialchars($_POST['txtTenDN']);
    $matKhau = htmlspecialchars($_POST['txtMatKhau']);

    // Truy vấn để lấy thông tin người dùng từ cơ sở dữ liệu
    $sql = "SELECT * FROM nguoidung WHERE tendangnhap = '$tenDangNhap'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Kiểm tra mật khẩu (sử dụng password_verify để kiểm tra mật khẩu đã mã hóa)
        if (password_verify($matKhau, $row['matkhau'])) {
            echo "<script>alert('Đăng nhập thành công!');</script>";
            // Chuyển hướng đến trang diễn đàn
            header("Location: diendan.php");
            exit();
        } else {
            echo "<script>alert('Sai tên đăng nhập hoặc mật khẩu!');</script>";
        }
    } else {
        echo "<script>alert('Tên đăng nhập không tồn tại!');</script>";
    }
}
?>
<div id="wrap">
  <h2 class="h2">Kiến thức - Kinh nghiệm - Hỏi đáp</h2>
  
  <form>
    <input type="text" name="search" placeholder="Tìm bài viết, sản phẩm...">
  </form>
</div>
<div id="menu">
  <ul>
     <h3>
        <li> <a href="index.php" id="a1"> Trang chủ</a></li>
        <li> <a href="itc.php" id="a1"> Tin ICT </a> </li>
        <li> <a href="tinvideo.php" id="a1"> Tin Video </a> </li>
        <li> <a href="dangky.php" id="a1"> Diễn đàn </a> </li>
        <li> <a href="gopy.php" id="a1"> Góp ý</a> </li>
      </h3>
  </ul>
</div>
<br>
<div id="contend"> <br>
<div class="divtk"><strong>Chào mừng đến với ICT. Đăng nhập ngay! </strong></div>
<div class="divtk2">Bạn chưa có tài khoản ? <a href="dangky.php">Đăng ký</a> ngay.</div>
<br>
<br>
<div id="contend1">
  <br>
  <!-- Form đăng nhập -->
  <form action="dangnhap.php" method="post">
    Tên đăng nhập :<br>
    <label for="txtTenDN"></label>
    <input name="txtTenDN" type="text" id="txtTenDN" size="20" required>
    <br>
    Mật khẩu : <br>
    <label for="txtMatKhau"></label>
    <input name="txtMatKhau" type="password" id="txtMatKhau" size="20" required>
    <br>
    <p> <a href="#"> Quên mật khẩu ? </a> </p>
</div>
<div id="contend2"> 
<br>
<br>
    <input type="submit" name="btnDangNhap" id="btnDangNhap" value="Đăng nhập">
    <br>Hoặc đăng nhập với :
    <button type="button" onclick="alert('Tính năng đang phát triển!')">Đăng nhập bằng Gmail</button>
  </form>
  <img src="ima/fb.png" width="150" height="41">
  <img src="ima/gg.png" width="150" height="40">
</div>
</div>

<?php
// Kiểm tra nếu người dùng nhấn nút "Đăng nhập"
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnDangNhap'])) {
    $tenDangNhap = htmlspecialchars($_POST['txtTenDN']);
    $matKhau = htmlspecialchars($_POST['txtMatKhau']);

    // Kiểm tra thông tin tài khoản (mẫu cơ bản, cần tích hợp CSDL thực tế)
    if ($tenDangNhap == "admin" && $matKhau == "123456") {
        echo "<script>alert('Đăng nhập thành công!');</script>";
        // Chuyển hướng đến trang diễn đàn
        header("Location: diendan.php");
        exit();
    } else {
        echo "<script>alert('Sai tên đăng nhập hoặc mật khẩu!');</script>";
    }
}
?>

<div id="footer">
  <div class="divft1">
    <p>&nbsp;</p>
    <p><a href="index.php"> TRANG CHỦ</a></p>
  </div>
  <div class="divft">
    <h4>ICT-HDU </h4>
    <a href="#">Khoa học</a> <br>
    <a href="#">Công nghệ</a> <br>
    <a href="#">Kỹ thuật</a> <br>
    <a href="#">Cuộc sống</a> <br>
    <a href="#">Điện máy</a> </div>
  <div class="divft">
    <h4>FORUM </h4>
    <a href="#">Điện thoại</a> <br>
    <a href="#">Máy tính</a> <br>
    <a href="#">Camera</a> <br>
    <a href="#">Xe</a> <br>
    <a href="#">Phụ kiện</a> </div>
  <div class="divft">
    <h4>LIÊN KẾT </h4>
    <a href="#">Bien99</a> <br>
    <a href="#">Study</a> <br>
    <a href="#">Google</a> </div>
    <div class="divft">
      <h4>VỀ CHÚNG TÔI</h4>
      <a href="#"> Nhóm 8</a> <br>
      <a href="#"> Đặng Thắng Việt</a> <br>
      <a href="#"> Phạm Thị Dịu</a> <br>
      <a href="#"> Vũ Trung Hanh</a> <br>
      <a href="#"> Nguyễn Đức Mạnh</a> <br>
      <a href="#"> Nguyễn Văn Hoàng</a> <br>
    </div>
</div>
</body>
</html>
