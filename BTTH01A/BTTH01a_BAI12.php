<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
   ];
   
   $first_element = reset($numbers);
   $last_element = end($numbers);
   
   echo "Phần tử đầu tiên: $first_element<br>";
   echo "Phần tử cuối cùng: $last_element<br>";
   
   $max_value = max($numbers);
   $min_value = min($numbers);
   $sum = array_sum($numbers);
   
   echo "Số lớn nhất: $max_value<br>";
   echo "Số nhỏ nhất: $min_value<br>";
   echo "Tổng các giá trị: $sum<br>";
   
   asort($numbers);
   echo "Mảng sau khi sắp xếp tăng dần theo giá trị:<br>";
   print_r($numbers);
   
   arsort($numbers);
   echo "Mảng sau khi sắp xếp giảm dần theo giá trị:<br>";
   print_r($numbers);
   
   ksort($numbers);
   echo "Mảng sau khi sắp xếp tăng dần theo key:<br>";
   print_r($numbers);
   
   krsort($numbers);
   echo "Mảng sau khi sắp xếp giảm dần theo key:<br>";
   print_r($numbers);
   
?>