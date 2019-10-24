<?php



function isPrimeNumber($number) {
    if ($number < 2) {
        echo $number.' - antud arv ei kuulu valitud vahemiku sisse <br>';
    } else {
        $divider = 2;
        while ($number % $divider != 0) {

            $divider++;
        }
        if ($number == $divider) {
            $result = true;
        } else {

            $result = false;
        }
    }
    return $result;
}


function isPrimeNumberDescription($number, $isPrime) {

    if($isPrime) {
        echo $number.' on algarv<br>';
    } else {
        echo $number.' ei ole algarv<br>';
    }
}

$number = rand(1, 1000);
isPrimeNumberDescription($number, isPrimeNumber($number));