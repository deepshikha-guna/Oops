<?php
function rotateNumber($n) {
    $digits = str_split($n);
    $len = count($digits);

    for ($i = 0; $i < $len; $i++) {
        $first = array_shift($digits);
        array_push($digits, $first);

        echo implode("", $digits) . "\n";
    }
}

rotateNumber(1234);
?>
