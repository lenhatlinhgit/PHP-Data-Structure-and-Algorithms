<?php
function BubbleSort($arr) {
    for ($i = 0; $i < count($arr) - 1; $i++) {
        for ($j = 0; $j < count($arr) - 1 - $i; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}
$arr = [699, 36, 833, 24, 99997677];
$arr = BubbleSort($arr);
for($i = 0; $i < count($arr);$i++){
    echo "$arr[$i] <br/>";
}
?>