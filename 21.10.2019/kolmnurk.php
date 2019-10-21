<?php

$arv1 = $_POST['number1'];
$arv2 = $_POST['number2'];

function pythagoras($arv1, $arv2){
    $arv3 = round(sqrt(($arv1 * $arv1)+($arv2 * $arv2)));
    echo $arv3;

};


?>



<form action="" method="post">
    <h3>Ülesanne 3</h3>
    <h4>Arvuta pythagorase teoreemi järgi kolmanda külje pikkus.</h4>
    <h5>Sisesta esimese külje pikkus:</h5>
    <input type="number" name="number1">
    <h5>Sisesta teise külje pikkus:</h5>
    <input type="number" name="number2" ><br><br>
    <input type="submit" name="arvutamine">
</form>

<?php

echo pythagoras($arv1, $arv2);

?>