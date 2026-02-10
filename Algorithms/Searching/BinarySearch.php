<?php
function BinarySearch($arr, $number, $offset = 0) {
    $n = count($arr);

    if ($n == 0) {
        return "khong tim thay $number";
    }

    $mid = intdiv($n, 2);

    if ($arr[$mid] == $number) {

        $arraddress = [$offset + $mid];

        // quét phải
        for ($i = $mid + 1; $i < $n; $i++) {
            if ($arr[$i] == $number) {
                $arraddress[] = $offset + $i;
            } else break;
        }

        // quét trái
        for ($i = $mid - 1; $i >= 0; $i--) {
            if ($arr[$i] == $number) {
                $arraddress[] = $offset + $i;
            } else break;
        }

        sort($arraddress);

        return "tim thay $number o vi tri " . implode(", ", $arraddress);
    }

    if ($number > $arr[$mid]) {
        return BinarySearch(
            array_slice($arr, $mid + 1),
            $number,
            $offset + $mid + 1
        );
    }

    return BinarySearch(
        array_slice($arr, 0, $mid),
        $number,
        $offset
    );
}
$abc = [1, 3, 5, 7, 7,7,7,7,7,7,7,7,7,7,7,7,7, 7, 9, 11, 13];

echo BinarySearch($abc, 7);

?>