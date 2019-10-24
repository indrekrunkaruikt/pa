Sõjaväekohustus – leia kas kasutaja on sõjaväeteenituse jaoks kõlbulik. Selleks
peab olema täidetud järgmised tingimused: eestlane, 18+ ja vähemalt 9kl haridus

<html>
<head>

</head>



    <body>
        <h1>Sisest oma andmed, oma kaitseväkke sobivuse kontrollimiseks.</h1>


        <form action="ül5vastus.php" method="post">
            Sisesta oma sünnipäev: <br>
            <input type="date" name="väli1" ><br><br>
            Vali oma rahvus: <br>
            <select name="väli2">
                <option value="Eesti">Eesti</option>
                <option value="Vene">Vene</option>
                <option value="Inglise">Inglise</option>
                <option value="Soome">Soome</option>
            </select><br><br>
            Vali oma haridustase:<br><br>
            <input type="radio" id="huey" name="väli3" value="alg-haridus"
                   checked>
            <label for="huey">alg-haridus</label>
            <input type="radio" id="huey" name="väli3" value="põhi-haridus"
                   checked>
            <label for="huey">põhi-haridus</label>
            <input type="radio" id="huey" name="väli3" value="kesk-haridus"
                   checked>
            <label for="huey">kesk-haridus</label><br><br>
            <input type="radio" id="huey" name="väli3" value="kesk-eri-haridus"
                   checked>
            <label for="huey">kesk-eri-haridus</label>
            <input type="radio" id="huey" name="väli3" value="kõrg-haridus"
                   checked>
            <label for="huey">kõrg-haridus</label>


            <br><br>
            <input type="submit">
        </form>

    </body>


</html>