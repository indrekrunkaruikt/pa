//Jagamine – sisestatakse 2 täisarvulist muutujat. Jaga üks arv teisega.
Väljasta ka hoiatav lause, kui kasutaja üritab jagada nulliga. Lisa kontroll,
mis ei käivita koodi tühjade lahtrite puhul (N: if(!empty($_GET[‘name’])){lause}
, see käivitab koodi siis, kui lahtrisse on midagi lisatud)

<!DOCTYPE HTML>
<html>
<head
<body>
<h1>Sisesta 2 arvu</h1>
<form action="ül1vastus.php" method="post">
    number 1: <input type="number" name="arv1" step=0.01><br>
    number 2: <input type="number" name="arv2" step=0.01><br>
    <input type="submit">
</form>

</body>
</html>
