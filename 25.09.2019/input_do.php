<?php
// muutuja defineerimine ja väärtuse võtmine vormist
$nimi= $_GET['nimi'];
$kaal= $_GET['kaal'];
$pikkus= $_GET['pikkus'];



echo 'nimi:' .$nimi. '<br>';
echo 'kaal:' .$kaal. '<br>';
echo 'pikkus:' .$pikkus. '<br>';
$kmi= $kaal/($pikkus*$pikkus);
echo  $kmi;
echo '<hr>';
echo '<a href="input.php">sisest andme uuesti</a>';
