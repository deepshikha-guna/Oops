<?php
function rearrangeHighLow($arr) {
    $result = [];

    while (!empty($arr)) {
        $max = max($arr);
        $result[] = $max;
        unset($arr[array_search($max, $arr)]);

        if (!empty($arr)) {
            $min = min($arr);
            $result[] = $min;
            unset($arr[array_search($min, $arr)]);
        }
    }

    return $result;
}

print_r(rearrangeHighLow([1,2,3,4,5,6,7]));
?>
