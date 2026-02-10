<?php
function LinearSearch($arr,$number){
    $address = "";
    for($i = 0; $i < count($arr); $i++){
        if($number == $arr[$i]){
            $address = $address . $i ." , ";
        }
    }
    if ($address == ""){
        return "khong tim thay $number";
    } else {
        return "tim thay $number o vi tri " . substr($address, 0, -3);
    }
}
$arr = [699,24, 36, 833, 24, 99997677,24];
$a = LinearSearch($arr,24);
echo $a;
?>