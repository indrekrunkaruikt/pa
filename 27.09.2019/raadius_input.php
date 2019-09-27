<?php

// raadius_input.php
// defineerime $raadius
// ja otsime kasutaja poolt sisestatud väärtust
$raadius = 10;
//väljastame saadud väärtuse ekraanil

echo 'sisestatud raadius on' .$raadius.'<br>';

// arvutused
//ringi pindala
$ringiPindala = pi() * pi() * $raadius;
$ringiPindakaUmmardatud= round($ringiPindala, 3);
//ümbermõõt
$ringiumbermoot = pi()* 2 * $raadius;
//muutujate andmete tüüp ja väärtuste kontroll
/*var_dump($ringiPindala);
var_dump($ringiumbermoot);
var_dump($raadius);*/
//väljastame tulemused
echo 'sisestatud ringi pindala ummardatud' .$ringiPindakaUmmardatud.'<br>';
echo 'sisestatud ringi pindala on' .round($ringiPindala,5).'<br>';
echo 'sisestatud ringi ümbermõõt on' .$ringiumbermoot.'<br>';
echo 'sisestatud ringi raadius on' .$raadius.'<br>';
echo 'sisestatud ringi pindala on' .$ringiPindala.'<br>';