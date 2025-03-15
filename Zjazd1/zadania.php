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

foreach ($fibNumbers as $index => $value) {
    if ($index % 2 == 0) {
        echo ($index + 1) . ". " . $value . "\n";
    }
}

echo "Zadanie 4" . "\n";

$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";

$words = explode(" ", $text);
$filteredWords = [];

foreach ($words as $word) {
    $cleanWord = trim($word, ",.?!;:\"'");
    if (!empty($cleanWord)) {
        $filteredWords[$cleanWord] = strlen($cleanWord);
    }
}

foreach ($filteredWords as $word => $length) {
    echo "$word => $length\n";
}