<html>
<head>
    <title>Ülesanne 1 </title>
</head>
</html>
    <h1>Vastus:</h1>
<?php
$number = $_POST['arv1'];
$number2 = $_POST['arv2'];
$vastus = $number * $number2;
echo "Esimene number:" . $number . "<br>";
echo "Teine number:" . $number2 . "<br>";

if (is_float($vastus))
{
    echo "Kasuta reaalarve palun";
}else{

    echo "Need omavahel korrutatult on:" . $vastus .".<br>";
}

?>
<?php
