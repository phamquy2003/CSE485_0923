<?php
//ket noi
require_once './conncert_user.php';

$lietke_sql = "SELECT * FROM main_users order by fullname,email, gender, groups,mobile, date_of_birth";

$result = mysqli_query($conn, $lietke_sql);

while ($row = mysqli_fetch_assoc($result)){
    echo "{$row['fullname']} - {$row['email']} - {$row['gender']} - {$row['groups']} - {$row['mobile']} - {$row['date_of_birth']}";
}

?>