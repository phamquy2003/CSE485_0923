<?php
$array1 = [
    [77, 87],
    [23, 45]
];

$array2 = [
    'giá trị 1', 'giá trị 2'
];

$result = [];

for ($i = 0; $i < count($array1); $i++) {
    $result[] = [$array2[$i], ...$array1[$i]];
}

print_r($result);

?>