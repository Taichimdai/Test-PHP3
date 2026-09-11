<?php

function inHinhChuNhat($rong, $cao) {
    for ($i = 1; $i <= $cao; $i++) {
        for ($j = 1; $j <= $rong; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

inHinhChuNhat(5, 3);

?>