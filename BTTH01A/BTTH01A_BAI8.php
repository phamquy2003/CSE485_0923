<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

$max_length = null;     
$min_length = PHP_INT_MAX;

$longest_string = null;
$shortest_string = null;

foreach($array as $str){
       $length = strlen($str);
       
       if($length > $max_length){
              $max_length = $length;
              $longest_string = $str;
       }
       if($length < $min_length){
              $min_length = $length;
              $shortest_string = $str;
       }
}
echo "Chuỗi lớn nhất là $longest_string, độ dài = $max_length<br>
Chuỗi lớn nhất là $shortest_string, độ dài = $min_length";

?>