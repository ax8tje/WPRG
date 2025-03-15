<?php

echo "Zadanie 1" . "\n";

$owoce = array("jablko", "banan", "pomarancza");

foreach ($owoce as $wo) {
    $reversed = "";
    $length = 0;

    while (isset($wo[$length])) {
        $length++;
    }

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $wo[$i];
    }

    echo $reversed;

    if ($wo[0] == "p") {
        echo " zawiera p";
    }

    echo "\n";
}

echo "Zadanie 2" . "\n";

function getPrimeNumbers($start, $end) {
    $primeNumbers = [];

    for ($i = $start; $i <= $end; $i++) {
        if ($i < 2) continue;

        $isPrime = true;

        for ($j = 2; $j * $j <= $i; $j++) {
            if ($i % $j == 0) {
                $isPrime = false;
                break;
            }
        }

        if ($isPrime) {
            $primeNumbers[] = $i;
        }
    }

    return $primeNumbers;
}

$start = 5;
$end = 30;
$primeNumbers = getPrimeNumbers($start, $end);

echo "Liczby pierwsze pomiedzy $start i $end: " . implode(", ", $primeNumbers) . "\n";

echo "Zadanie 3" . "\n";

function fibonacciSeries($num) {
    $fibSeries = [1, 1];

    for ($i = 2; $i < $num; $i++) {
        $fibSeries[$i] = $fibSeries[$i - 1] + $fibSeries[$i - 2];
    }

    return $fibSeries;
}

$n = 20;
$fibNumbers = fibonacciSeries($n);

echo implode(", ", $fibNumbers);
