<?php
    require 'includes/db_connect.php';
    if(
        isset($_POST['btnDangKy'])){
            echo'<pre>';
            print_r( $_POST);
            $tendangnhap = $_POST['tendangnhap'];
            $hoten = $_POST['hoten'];
            $email = $_POST['email'];
            $matkhau = $_POST['matkhau'];
            $gioitinh = $_POST['gioitinh'];
            $ngaysinh = $_POST['ngaysinh'];
        }
        if(!empty($tendangnhap)&&!empty( $hoten )&&!empty($email)&&!empty($matkhau)&&!empty($gioitinh)&&!empty($ngaysinh)){
            echo'<pre>';
            print_r( $_POST);

            $sql = "INSERT INTO nguoidung(tendangnhap,hoten,email,matkhau,gioitinh,ngaysinh) 
            VALUES('$tendangnhap','$hoten','$email','$matkhau','$gioitinh','$ngaysinh')";
            if($conn->query($sql)===TRUE){
                echo'lưu dữ liệu thành công';
            }else{
                    echo 'lưu dữ liệu chưa được {$sql}'.$conn->error;}
        }else{
            echo'bạn cần nhập thêm thông tin';}
    
?>