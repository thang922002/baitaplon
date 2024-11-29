<!doctype html>
<html>
<head>
<link type="text/css" href="css/dangky.css" rel="stylesheet">
<script src="dangky.js"></script>
<meta charset="utf-8">
<title>ICT 36 - Đăng ký</title>
</head>

<body style="background-color:#EFF0F5">
<?php
include('includes/db_connect.php'); // Kết nối đến MySQL thông qua db_connect.php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnDangKy'])) {
    $hoTen = htmlspecialchars($_POST['txtHoTen']);
    $email = htmlspecialchars($_POST['txtEmail']);
    $ngaySinh = $_POST['lstNgay'] . '/' . $_POST['lstThang'] . '/' . htmlspecialchars($_POST['txtNam']);
    $gioiTinh = $_POST['lstGioiTinh'];
    $tenDangNhap = htmlspecialchars($_POST['txtTenDN']);
    $matKhau = htmlspecialchars($_POST['txtMatKhau']);
    $nhapLaiMK = htmlspecialchars($_POST['txtNhapLaiMK']);

    // Kiểm tra mật khẩu
    if ($matKhau !== $nhapLaiMK) {
        echo "<script>alert('Mật khẩu không khớp!');</script>";
    } else {
        // Mã hóa mật khẩu
        $hashedPassword = password_hash($matKhau, PASSWORD_BCRYPT);

        // Thực hiện truy vấn thêm dữ liệu vào bảng nguoidung
        $sql = "INSERT INTO nguoidung (hoten, email, tendangnhap, matkhau, gioitinh) 
                VALUES ('$hoTen', '$email', '$tenDangNhap', '$hashedPassword', '$gioiTinh')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Đăng ký thành công!');</script>";
            header("Location: dangnhap.php"); // Chuyển hướng sau khi thành công
            exit();
        } else {
            echo "<script>alert('Lỗi: " . $conn->error . "');</script>";
        }
    }
}

$conn->close(); // Đóng kết nối
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
<div class="divtk"><strong>TẠO TÀI KHOẢN WEBSITE </strong></div>
<div class="divtk2">Bạn đã là thành viên ? <a href="dangnhap.php">Đăng nhập</a> ngay.</div>
<br>
<br>
<div id="contend1">
  <form action="dangky.php" method="post">
    Họ và tên :(*) <br>
    <input name="txtHoTen" type="text" maxlength="50" required>
    <br>
    Email:(*) <br>
    <input type="email" name="txtEmail" required>
    <br>
    Ngày sinh :<br>
    Ngày:
    <select name="lstNgay" required>
      <?php for ($i = 1; $i <= 31; $i++) {
          echo "<option value='$i'>$i</option>";
      } ?>
    </select>
    Tháng:
    <select name="lstThang" required>
      <?php for ($i = 1; $i <= 12; $i++) {
          echo "<option value='$i'>$i</option>";
      } ?>
    </select>
    Năm:
    <input name="txtNam" type="number" min="1900" max="<?php echo date('Y'); ?>" required>
    <br>
    Giới tính <br>
    <select name="lstGioiTinh" required>
      <option value="Nam">Nam</option>
      <option value="Nữ">Nữ</option>
    </select>
    <br>
    Tên đăng nhập :(*)<br>
    <input name="txtTenDN" type="text" maxlength="20" required>
    <br>
    Mật khẩu :(*) <br>
    <input name="txtMatKhau" type="password" minlength="6" required>
    <br>
    Nhập lại mật khẩu:(*)<br>
    <input type="password" name="txtNhapLaiMK" minlength="6" required>
    <br>
    <br>
    <input type="submit" name="btnDangKy" value="Đăng ký">
  </form>
</div>
<div id="contend2"> 
  <img src="ima/icon.jpg" width="250" height="250"> 
  <br>
  <h2>Một tài khoản. Hoạt động trên mọi sản phẩm và dịch vụ của ICT.<h2>
</div>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnDangKy'])) {
    $hoTen = htmlspecialchars($_POST['txtHoTen']);
    $email = htmlspecialchars($_POST['txtEmail']);
    $ngaySinh = $_POST['lstNgay'] . '/' . $_POST['lstThang'] . '/' . htmlspecialchars($_POST['txtNam']);
    $gioiTinh = $_POST['lstGioiTinh'];
    $tenDangNhap = htmlspecialchars($_POST['txtTenDN']);
    $matKhau = htmlspecialchars($_POST['txtMatKhau']);
    $nhapLaiMK = htmlspecialchars($_POST['txtNhapLaiMK']);

    // Kiểm tra mật khẩu
    if ($matKhau !== $nhapLaiMK) {
        echo "<script>alert('Mật khẩu không khớp!');</script>";
    } else {
        // Lưu thông tin vào cơ sở dữ liệu (giả lập lưu thành công)
        // Thực tế, bạn cần kết nối cơ sở dữ liệu và lưu vào bảng.
        echo "<script>alert('Đăng ký thành công!');</script>";
        // header("Location: dangnhap.php"); // Chuyển hướng sau khi thành công
        // exit();
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
