
<?php
echo '<h3>Ülesanne 1</h3>';

//Diagonaal – loo tsükli abil tärnidest diagonaal.

for($rida=1; $rida<=5; $rida++){
    for($veerg=1; $veerg<= $rida; $veerg++){
        echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
    }
    echo '* <br>' ;
}
echo '<h3>Ülesanne 2</h3>';
//Kasvavad numbrid – loo tsükli abil viis rida numbreid, kusjuures iga rida on ühe numbri võrra suurem.
for($rida=1; $rida<=5; $rida++){
    for($veerg=1; $veerg<= $rida; $veerg++){
        $num= $veerg;
        echo $num;
    }
    echo '<br>';
}
echo '<br><br>';
echo '<h3>Ülesanne 3</h3>';
//Nimi ja vanus – loo kaks massiivi, kus ühes on nimed ja teises vanused. Väljasta nimekiri nime ja vanusega. N: Juhan, 18.
$nimed = array('Jaanus', 'Andres', 'Maarek');
$vanused = array(20, 24, 25);

for($nr=0;$nr<count($nimed);$nr++) {
    echo 'Nimi: &nbsp'. $nimed[$nr]. '&nbsp vanus: &nbsp';
    echo $vanused[$nr]. '<br>';
}

echo '<h3>Ülesanne 4</h3>';
//Ruutude, kuupide ja ruutjuurte tabel – loo tsükkel, mis kuvab arvu ning leiab vastavalt nendele ruudud pow(arv,2), kuubid pow(arv,3) ja ruutjuured sqrt(arv)arvudele
echo '<br><br>number, ruut, kuup, ruutjuur<br>';
for($rida=1; $rida<=5; $rida++){
    echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. $rida. '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. pow($rida,2). '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. pow($rida,3). '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. round(sqrt($rida),2). '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. '<br>';

    echo '<br><br>';
}

echo '<h3>Ülesanne 5</h3>';
//Paaris ja paaritu – väljasta arvud 1-10 ning väljasta pärast iga numbrit, kas tegemist on paaris või paaritu arvuga.
for($rida=1; $rida<=10; $rida++){

        if($rida %2 == 0){
            echo $rida. '&nbsp paaris <br>';
        }else{
            echo $rida. '&nbsp paaritu<br>';
        }

        '<br>';}
echo '<h3>Ülesanne 6</h3>';

//Tabel – kasutajalt küsitakse mitu rida ja veergu ta soovib, ning pärast saada nuppu vajutust luuakse vastav tabel.

    echo '<form action="ül6vastus.php" method="post">';
        echo '<h3>Sisesta mitu rida kõrget tabelit sa tahad</h3>';
        echo '<input type="number" name="laius">';
        echo '<h3>Sisesta mitu lahtrit laia tabelit sa tahad</h3>';
        echo '<input type="number" name="korgus">';
        echo '&nbsp&nbsp&nbsp <input type="submit">';
    echo '</form>';
?>

