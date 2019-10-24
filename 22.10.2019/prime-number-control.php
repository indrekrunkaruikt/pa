<?php
//Loome funktsiooni algarvu defineerimiseks.
function isPrimeNumber($number) {
    if ($number < 2) {
        //Arv 1 on funktsioonis välistatud sest ta jagub ainult iseendaga ja sellega pole mõtet funktsiooni katsetada.
        echo $number.' - antud arv ei kuulu valitud vahemiku sisse <br>';
    } else {
        $divider = 2;

        //sisestatud arv ei tohi olla murdarv.
        while ($number % $divider != 0) {

            $divider++; // get the next divider value
        }
        // Kui sisestatud number on võrdne jagajaga siis on tegemist algarvuga.
        if ($number == $divider) {
            $result = true;
        } else {
            $result = false;
        }
    }
    //Kui funktsiooni kasutatakse väljastamae oma arvu.
    return $result;
}
//Selle funktsiooniga väljastame kas sisestatud number on algarv või ei ole algarv.
function isPrimeNumberDescription($number, $isPrime) {

    if($isPrime) {
        echo $number.' on algarv<br>';
    } else {
        echo $number.' ei ole algarv<br>';
    }
}
//Anname $number'ile suvalise väärtuse 1-10.
$number = 3.24;
//Kasutame funktsiooni kuhu me sisestame numbri ja eraldi funktsiooni mis echo'b numbri oleku(kas ta on algarv või mitte).
isPrimeNumberDescription($number, isPrimeNumber($number));