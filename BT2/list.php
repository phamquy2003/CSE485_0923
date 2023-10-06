<?php
//ket noi
require_once 'connect.php';
//cau lenh
$lietke_sql = "SELECT * FROM sinhvien2 order by lop, hoten";

$result = mysqli_query($conn, $lietke_sql);

while ($r = mysqli_fetch_assoc($result)){
    echo "{$r['masv']} - {$r['hoten']} - {$r['lop']}";
}
?>