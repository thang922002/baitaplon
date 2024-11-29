<?php
include('includes/db_connect.php'); // Kết nối database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tieude = $_POST['tieude'];
    $noidung = $_POST['noidung'];
    $tacgia = $_POST['tacgia'];

    $sql = "INSERT INTO baiviet (tieude, noidung, tacgia) VALUES ('$tieude', '$noidung', '$tacgia')";

    if ($conn->query($sql) === TRUE) {
        echo "Thêm bài viết thành công!";
        header("Location: index.php"); // Quay về trang chính
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
$conn->close();
?>
