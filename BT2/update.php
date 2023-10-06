<?php
//nhan du lieu
$ht = $_POST['hoten'];
$msv = $_POST['masv'];
$lop = $_POST['lop'];
$id = $_POST['sid'];

//ket noi sql
require_once 'connect.php';

// viet lenh sql them u lieu
$update_sql = "UPDATE sinhvien2  SET  masv ='$msv',hoten ='$ht',lop = '$lop' WHERE id = '$id'";

//  echo $update_sql; exit;

//thuc thi cau lenh

if(mysqli_query($conn, $update_sql)){
    echo "them thanh cong";
}

//inn thong bao
header("Location:usermanagment.php")

?>