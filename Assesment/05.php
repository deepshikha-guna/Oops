<?php

function isPrime($n) {
    if ($n < 2) return false;
    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

function generatePalindromes($limit) {
    $pals = [];
    for ($i = 1; $i <= $limit; $i++) {
        if ($i == strrev($i)) {
            $palindrome[] = $i;
        }
    }
    return $palindrome;
}

$palindromes = generatePalindromes(10000);

foreach ($palindromes as $p) {
    if (isPrime($p)) {
        echo $p . " ";
    }
}
?>
