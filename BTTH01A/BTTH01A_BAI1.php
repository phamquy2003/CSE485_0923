<?php

$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
$sum = null;
$total = array_sum($arrs);
$total2 = array_product($arrs);
echo "2 + 5 + 6 + 9 + 2 + 5 + 6 + 12 + 5 = {$total} <br>" ;
echo "2 * 5 * 6 * 9 * 2 * 5 * 6 * 12 * 5 = {$total2} <br>" ;
$hieu;
$chia =null;
for($i = 0; $i < count($arrs); $i++){
    if ( $i == 0 ){
        $hieu = $arrs[0];
    }else{
        $hieu-=$arrs[$i];
    }
}
echo "2 - 5 - 6 - 9 - 2 - 5 - 6 - 12 - 5 = {$hieu} <br>" ;
for($i = 0; $i < count($arrs); $i++){
    if ( $i == 0 ){
        $chia = $arrs[0];
    }else{
        $chia/=$arrs[$i];
    }
}
$chia=number_format($chia,20);
echo("2 / 5 / 6 / 9 / 2 / 5 / 6 / 12 / 5 = {$chia} <br>" ) ;
?>