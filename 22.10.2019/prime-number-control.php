<?php


use mysql_xdevapi\Result;
$number= 2;
function is_primeNumber($number){
     if ($number < 2) {
            $Result= $number. '&nbsp ei sobi<br>';
        } else {
            $divider = 2;
            while ($number % $divider != 0) {
                $divider++;
            }
            if ($number == $divider) {
                $Result= true;

            } else {
                $Result= false;
            }
        }
    return $Result;

}

is_primeNumber(rand(0,2000));