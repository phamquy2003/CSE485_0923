<?php

$svid = $_GET['sid'];
// echo $id;
require_once './connect.php';
//caulenh
$xoa_sql = "DELETE FROM sinhvien2 WHERE id = $svid";

mysqli_query($conn, $xoa_sql);
echo "xoa thanh cong";

//tro ve trang liet ke 
header("Location:usermanagment.php ")
?>