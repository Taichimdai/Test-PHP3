<?php

$n = 17;
$laSoNguyenTo = true;

if ($n < 2) {
    $laSoNguyenTo = false;
} else {
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            $laSoNguyenTo = false;
            break;
        }
    }
}

if ($laSoNguyenTo) {
    echo $n . " la so nguyen to";
} else {
    echo $n . " khong phai la so nguyen to";
}

?>