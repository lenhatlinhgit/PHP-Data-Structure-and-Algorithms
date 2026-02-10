<?php
function SelectionSort($arr) {
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
        $min = $i;

        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min] = $temp;
    }

    return $arr;
}

$arr = [699, 3646, 833, 24, 99997677];
$arr = SelectionSort($arr);
for($i = 0; $i < count($arr);$i++){
    echo "$arr[$i] <br/>";
}
?>