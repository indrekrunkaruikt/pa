<?php


$jagatav =$_POST['number1'];
$jagaja = $_POST['number2'];

function jagamine($jagatav, $jagaja){

    $vastus = $jagatav /$jagaja;
    if ($jagatav == 0 && $jagaja == 0){
        echo 'Jagatav ja jagaja on nullid!';
    }else if($jagatav !=0 && $jagaja == 0){
        echo 'Jagaja on null!';
    }else if($jagatav == 0 && $jagaja != 0){
        echo 'Jagatav on null!';
    }else if($jagatav !=0 && $jagaja !=0){
        echo 'Sinu vastus on: '. $vastus;
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>jagamine</title>
</head>
<body>

<form action="" method="post">
    <h3>Ülesanne 1</h3>
    <h4>jaga kaks arvu ja ära jaga nulliga!</h4>
    <h5>Sisesta jagatav arv:</h5>
    <label>
        <input type="number" name="number1">
    </label>
    <h5>Sisesta jagaja arv:</h5>
    <input type="number" name="number2" ><br><br>
    <input type="submit" name="jagamine">
</form>
<br>
<br>
<?php

jagamine($jagatav, $jagaja);

?>
</body>
</html>