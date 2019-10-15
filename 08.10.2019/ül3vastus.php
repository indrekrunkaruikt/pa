

<html>
<head>
    <title>Ülesanne 3 </title>
</head>
</html>
<h1>Vastus:</h1>
<?php
$vanus = $_POST[arv1];
$viis = 5;
$null = 0;
$last = $vanus[strlen($str)-1];
echo $vanus;
if ($last == 5){
    echo ": See on juubeli aasta";

}else if($last == 0){
    echo ": See on juubeli aasta";
} else {
    echo ": See ei ole juubeli aasta";
}

?>