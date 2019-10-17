<?php
$date = date('Y/m/d');
$kasutajaDate = $_POST['väli1'];
$vanus =$date - $kasutajaDate;
$lubatudVanus= 18;

$rahvus =  $_POST['väli2'];
$lubatudRahvus= "Eesti";

$haridus = $_POST['väli3'];
$lubatudHaridus = "põhi-haridus" or "kesk-haridus" or "kesk-eri-haridus" or "kõrg-haridus";



if($lubatudVanus<=$vanus && $lubatudRahvus==$rahvus && $lubatudHaridus==$haridus){
    echo "Olete oodatud kaitseväkke";

}else if($lubatudVanus<=$vanus && $lubatudRahvus!=$rahvus &&  $lubatudHaridus==$haridus){
    echo "rahvus ei luba teid kaitseväkke";}

else if($lubatudVanus>$vanus && $lubatudRahvus==$rahvus &&  $lubatudHaridus==$haridus){
    echo "Vanus ei luba teid kaitseväkke";

}else if($lubatudVanus>$vanus && $lubatudRahvus!=$rahvus &&  $lubatudHaridus==$haridus){
    echo "Vanus ja rahvus ei luba teid kaitseväkke";

}else if($lubatudVanus<=$vanus && $lubatudRahvus==$rahvus &&  $lubatudHaridus!=$haridus){
    echo "Hariuds ei luba teid kaitseväkke";

} else if($lubatudVanus<=$vanus && $lubatudRahvus!=$rahvus &&  $lubatudHaridus!=$haridus){
    echo "rahvus ja haridus ei luba teid kaitseväkke";
}else if($lubatudVanus>$vanus && $lubatudRahvus==$rahvus &&  $lubatudHaridus!=$haridus){
    echo "Vanus ja haridus ei luba teid kaitseväkke";

}else if($lubatudVanus>$vanus && $lubatudRahvus!=$rahvus &&  $lubatudHaridus!=$haridus){
    echo "Vanus, rahvus ja haridus ei luba teid kaitseväkke";}
else{
    echo "midagi on valesti";
}
