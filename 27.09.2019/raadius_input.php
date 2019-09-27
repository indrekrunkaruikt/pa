<?php

// raadius_input.php
// defineerime $raadius
// ja otsime kasutaja poolt sisestatud väärtust
$raadius = 10;
//väljastame saadud väärtuse ekraanil

echo 'sisestatud raadius on' .$raadius.'<br>';

// arvutused
//ringi pindala
$ringiPindala = 3.14 * 3.14 * $raadius;
//ümbermõõt
$ringiumbermoot = 3.14 * 2 * $raadius;
//muutujate andmete tüüp ja väärtuste kontroll
/*var_dump($ringiPindala);
var_dump($ringiumbermoot);
var_dump($raadius);*/
//väljastame tulemused
echo 'sisestatud ringi pindala on' .$ringiPindala.'<br>';
echo 'sisestatud ringi ümbermõõt on' .$ringiumbermoot.'<br>';
echo 'sisestatud ringi raadius on' .$raadius.'<br>';
echo 'sisestatud ringi pindala on' .$ringiPindala.'<br>';