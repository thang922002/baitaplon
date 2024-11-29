<?php
include('includes/db_connect.php');

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tieude = $_POST['tieude'];
    $noidung = $_POST['noidung'];
    $tacgia = $_POST['tacgia'];

    $sql = "UPDATE baiviet SET tieude='$tieude', noidung='$noidung', tacgia='$tacgia' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Cập nhật thành công!";
        header("Location: index.php");
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
$conn->close();
?>
