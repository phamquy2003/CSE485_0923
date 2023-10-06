<?php

$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$average = array_sum($numbers) / count($numbers);

$greater_than_average = [];
$less_than_or_equal_to_average = [];

foreach ($numbers as $number) {
    if ($number > $average) {
        $greater_than_average[] = $number;
    } elseif ($number <= $average) {
        $less_than_or_equal_to_average[] = $number;
    }
}

echo "Giá trị trung bình của mảng là: " . $average . "<br>";
echo "Các số lớn hơn giá trị trung bình: " . implode(", ", $greater_than_average) . "<br>";
echo "Các số nhỏ hơn hoặc bằng giá trị trung bình: " . implode(", ", $less_than_or_equal_to_average);


?>