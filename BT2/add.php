<?php
//nhan du lieu
$ht = $_POST['hoten'];
$msv = $_POST['masv'];
$lop = $_POST['lop'];

//ket noi sql
require_once 'connect.php';

// viet lenh sql them u lieu
$themsql = "INSERT INTO sinhvien2(masv, hoten,lop) VALUES ('$msv','$ht','$lop')";

//  echo $themsql; exit;

//thuc thi cau lenh

if(mysqli_query($conn, $themsql)){
    echo "them thanh cong";
}

//inn thong bao
header("Location:usermanagment.php")

?>