<html>
<head>
    <title>Ülesanne 2 </title>
</head>
</html>
<h1>Vastus:</h1>
<?php
$number = $_POST['arv1'];
$number2 = $_POST['arv2'];

echo "Esimene number:" . $number . "<br>";
echo "Teine number:" . $number2 . "<br>";

if ($number < $number2)
{
    echo "Teine number on suurem.";
} else if ($number2 < $number){

    echo "Esimene number on suurem";
}else{
    echo "Numbrid on võrdsed";
}

?>