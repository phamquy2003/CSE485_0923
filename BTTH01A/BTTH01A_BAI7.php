<?php

$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];

$result = null;

foreach ($array as $number){
    if($number >= 100 && $number <= 200 && $number % 5 == 0){
        $result = $number;
    }
}
echo "Số từ 100 đến 200 và chia hết cho 5 trong mảng là: {$result}";

?>