<?php
include('includes/db_connect.php');

$id = $_GET['id']; // Lấy ID bài viết từ URL

$sql = "DELETE FROM baiviet WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Xóa bài viết thành công!";
    header("Location: index.php");
} else {
    echo "Lỗi: " . $conn->error;
}

$conn->close();
?>
