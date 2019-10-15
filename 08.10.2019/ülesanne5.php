<html>
<head>

</head>



    <body>
        <h1>Sisest oma andmed, oma kaitseväkke sobivuse kontrollimiseks.</h1>


        <form action="ül5vastus.php" method="post">
            Sisesta oma sünnipäev: <br>
            <input type="date" name="väli1" ><br>
            Vali oma rahvus: <br>
            <select name="väli2">
                <option value="Eesti">Eesti</option>
                <option value="Vene">Vene</option>
                <option value="Inglise">Inglise</option>
                <option value="Soome">Soome</option>
            </select><br>
            Vali oma haridustase:<br>
            <select name="väli3">
                <option value="alg-haridus">alg-haridus</option>
                <option value="põhi-haridus">põhi-haridus</option>
                <option value="kesk-haridus">kesk-haridus</option>
                <option value="kesk-eri-haridus">kesk-eri-haridus</option>
                <option value="kõrg-haridus">kõrg-haridus</option>
            </select><br><br>
            <input type="submit">
        </form>

    </body>


</html>