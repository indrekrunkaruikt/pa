<?php
    $nation = $_GET[$nation];
    $haridus = $_GET[$haridus];
    $age = $_GET[$age];
    if (strlen($age) > 0){
        if ($nation == 'et' and $age >=18 and $haridus ='põ'){
            echo 'väga hea';
        }

    }
?>
<div id="container">
    <form action="" method="get">
        <div id="input-group">
            <label for="nation">
                Kodakondsus
            </label>
            <select id="nation" name="nation">
                <option value="et">eesti</option>
                <option value="ve">vene</option>
                <option value="in">inglise</option>
                <option value="so">soome</option>
                <option value="lä">läti</option>
            </select>
        </div><br>

        <div>
            <label for="age">vanus</label>
            <input type="number" value="vanus">
        </div>

        <div id="haridus">
            <label for="haridus">
                haridus
            </label>
            <radio id="haridus" name="haridus">
                <option value="alg">alg-haridus</option>
                <option value="põ">põhi-haridus</option>
                <option value="ke">kesk-haridus</option>
                <option value="ku">kutse-haridus</option>
                <option value="ku-ke">kutse-kesk-haridus</option>
                <option value="kõrg"> kõrg haridus</option>
            </radio>
        </div><br>
        <div>
            <button type="submit" value="katseta"></button>
        </div>
    </form>
</div>