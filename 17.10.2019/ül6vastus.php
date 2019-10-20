<?php
$laius = $_POST['laius'];
$korgus = $_POST['korgus'];

function drawTable($rows, $cols){
    echo "<table border='2px solid black' >";

    for($tr=1;$tr<=$rows;$tr++){

        echo "<tr>";
        for($td=1;$td<=$cols;$td++){
            echo "<td align='center'>".$tr*$td."</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
drawTable($laius, $korgus);
// https://paulund.co.uk/easily-create-a-table-in-php

?>