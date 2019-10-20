
<?php

    $summa=0;
    for ($number = 1; $number <=20; $number++)
    if($number <2){
        echo 'ei sobi<br>';
    }else{
        $divider = 2;
        while ($number % $divider !=0 ){
            $divider++;


        }if($number == $divider){
            echo $number. 'on algarv<br><br>';
            $summa= $summa+$number;
        }else{
            echo $number. ' on not algarv<br><br>';
        }
    }
    echo '<br>';

echo $summa;