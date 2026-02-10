<?php
function MergeSort($arr){
    if(count($arr) <= 1) return $arr;

    $arrleft = array_slice($arr, 0, intdiv(count($arr), 2));
    $arrright = array_slice($arr, intdiv(count($arr), 2));

    $arrleft = MergeSort($arrleft);
    $arrright = MergeSort($arrright);

    $result = [];
    $i = $j = 0 ;

    while ($i < count($arrleft) && $j < count($arrright)){
        $a = $arrleft[$i];
        $b = $arrright[$j];
        if ($a < $b) {
            $result[] = $a;
            $i++;
        } else {
            $result[] = $b;
            $j++;
        }
    }

    while ($i < count($arrleft)) {
        $result[] = $arrleft[$i];
        $i++;
    }

    while ($j < count($arrright)) {
        $result[] = $arrright[$j];
        $j++;
    }

    return $result;
}


$arr = [769, 76, 833, 24, 99997677];
$arr = MergeSort($arr);
for($i = 0; $i < count($arr);$i++){
    echo "$arr[$i] <br/>";
}
?>