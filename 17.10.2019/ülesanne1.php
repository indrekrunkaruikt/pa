
<?php
echo '<h3>Ülesanne 1</h3>';
for($rida=1; $rida<=5; $rida++){
    for($veerg=1; $veerg<= $rida; $veerg++){
        echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
    }
    echo '* <br>' ;
}
echo '<h3>Ülesanne 2</h3>';

for($rida=1; $rida<=5; $rida++){
    for($veerg=1; $veerg<= $rida; $veerg++){
        $num= $veerg;
        echo $num;
    }
    echo '<br>';
}
echo '<br><br>';
echo '<h3>Ülesanne 3</h3>';

$nimed = array('Jaanus', 'Andres', 'Maarek');
$vanused = array(20, 24, 25);

for($nr=0;$nr<count($nimed);$nr++) {
    echo 'Nimi: &nbsp'. $nimed[$nr]. '&nbsp vanus: &nbsp';
    echo $vanused[$nr]. '<br>';
}

echo '<h3>Ülesanne 4</h3>';

echo '<br><br>number, ruut, kuup, ruutjuur<br>';
for($rida=1; $rida<=5; $rida++){
    echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. $rida. '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. pow($rida,2). '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. pow($rida,3). '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. round(sqrt($rida),2). '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. '<br>';

    echo '<br><br>';
}

echo '<h3>Ülesanne 5</h3>';

for($rida=1; $rida<=10; $rida++){

        if($rida %2 == 0){
            echo $rida. '&nbsp paaris <br>';
        }else{
            echo $rida. '&nbsp paaritu<br>';
        }

        '<br>';}
echo '<h3>Ülesanne 6</h3>';
    echo '<form action="ül6vastus.php" method="post">';
        echo '<h3>Sisesta mitu rida kõrget tabelit sa tahad</h3>';
        echo '<input type="number" name="laius">';
        echo '<h3>Sisesta mitu lahtrit laia tabelit sa tahad</h3>';
        echo '<input type="number" name="korgus">';
        echo '&nbsp&nbsp&nbsp <input type="submit">';
    echo '</form>';
?>

