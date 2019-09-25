<?php


// muutuja defineerimine.
// $muutujaNimi= väärtus;

// kasuta alati camelcaseid

// väärtused-andmed-andmetüübid
// tekst - string - "info jutumärkides"
// täisarvud -integer - 2,7,9 -15 jne
// komaga arvud e.reaalarvud - float - 3.5, 7.9 -8.3 jne.

$eesNimi = "indrek";
$pereNimi = "rünkaru";
$email = "indrek93@gmail.com";
$vanus =  "26";
$pikkus = "184";
$kaal = "73kg";

echo $eesNimi."<br>";
echo $email."<br>";
echo "eesnimi: ". $eesNimi."<br>";
echo "vanus: ". $vanus. "<br>";
echo "email:<a href=".$email.">$email</a>".'<br>';
echo "pikkus:". $kaal. "<br>";
echo "kaal:". $kaal. "<br>";
//dünaamiline defineerimine
$kehamassiindeks = $kaal / ($pikkus*$pikkus);

echo $kehamassiindeks;


