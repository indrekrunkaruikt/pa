

<html>
<head>
    <title>Ülesanne 4 </title>
</head>
</html>
<h1>Vastus:</h1>
<?php
$minu_arv = 3;
$kasutaja_arv = $_POST[arv1];

switch($minu_arv){
    case ($kasutaja_arv < $minu_arv): echo 'Arv on liiga väike';
        break;
    case ($kasutaja_arv > $minu_arv): echo 'Arv on liiga suur';
        break;
    default: echo 'Õige, arvasid ära!';
}
?>