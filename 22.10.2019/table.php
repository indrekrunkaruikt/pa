<html>
<style>th, td {border: 2px solid black;
        width: 100px;
        height: 100px;}</style>
<body>
<?php

// Siin anname värvidele alg väärtuse.
$varvid = ["yellow", "green", "white", "steelblue", "red"];
$varvidteine = ["white"];

// Siin loome funktsiooni mida hiljem kasutame värvide suvaliseks muutmiseks.
function ranVarv() {
    $result = rand(0,9);
    for($i = 0; $i<5; $i++){
        $result .= rand(0,9);
    }
    return $result;
}

// Siin loome funktsiooni tableBody mille eesmärk on lasta kasutajal sisestada oma tabeli kõrgus, laius ja värvid millest lähtuda.
function tableBody($rowNum, $colNum, $varv) {
    echo '<table>';
    echo '<tbody>';
    // Mitu rida korge on tabel.
    for ($row = 1; $row <= $rowNum; $row++)
    {
        // Mitu rida lai on tabel.
        echo'<tr>';
        for ($col = 1; $col <= $colNum; $col++){
            // Htmli'is määrame tabeli lahtri taustavärvi mis on varem tehtud funktsiooni abil suvaline.
            echo '<td style="background-color:#'.ranVarv().'">';

            echo '</td>';
        }
        echo'</tr>';
    }
    echo '</tbody>';
    echo '<table>';
}



//Siin sisestame funktsiooni mitu rida kõrge, mitu lahtrit lai, ja millised värvid me tabelina väljastame.
tableBody(4, 4, $varvid);
tableBody(3,2, $varvidteine);
?>
</body>
</html>