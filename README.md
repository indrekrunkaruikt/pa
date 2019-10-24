
# pa
Programeerimise alused VS19

Antud kursus annab ülevaate programmeerimise aluse baasteadmised.
##ajakava
###20.09.2019
*Tarkvara seadistamine.
    *[phpstorm](https://www.jetbrains.com/phpstorm/?_ga=2.47472999.1146357588.1568957774-635464753.1568957774)
    *[Git](https://git-scm.com/download/win)
    
*Tarkvara seadistamine

*valmistasime litsentsi


-m
*PhpStorm põhiseadistus (line numbers, soft wrap, zoom),

*github.exe ühendus

*github.com repo loomine ning ühendamine.


### 25.09.2019
* git kasutamine käsurealt

kui repo pole initsialiseeritudt tuleb kirjutada ´´´´git init´´´´


kui tahame lisada faili jälgimiseks tuleb kirjutada````git add faili_nimi``

muudatuste tegemiseks peame kirjutama märkuse```git commit -m  "sonum"``

lükka lokaalselt kuhugile mujale oma muudetud materjalid ``git push -uf origin master``
siin origin on ühenduse nimi ja master on peaharu

oleme kasutanud ka php keskkonna käske:

``ctrl+k`` millega saab commit'ida.

``alt+9`` mmillega näeb commitide ajalugu.

Commit changesi all muutsime linnukesi, et perform analysis ja chcek to do ei oleks aktiivsed.

### 27.09.2019

* Php käskude sisestamine

 <a href="https://www.php.net">https://www.php.net</a><br><br>
    round()- Kasutame, et ümardada arve NT:<br>
    kui soovime korduvalt ümardada teeme sellise omaduse.<br><br>

    $ringiPindalaUmmardatud= round($ringiPindala, 3);<br>
    $ringi pindala on summa mida me ümardame, 3 on mitu kohta me ümardame<br><br>

    kui me soovime ümardamist ühe korra kasutada siis võime seda otse programmi sisse kirjutada:<br>
    .round($ringiPindala,5).<br><br>

    pi()- Kasutame et saada pi väärtust NT: $ringiPindala = pi() * pi() * $raadius;<br>
    vardump- kasutame et esitada programmi struktuuri näitajaid.

    var_dump($ringiumbermoot);<br>
    see käsk toob ette ringi ümbermõõdu.
### 08.10.2019

*   Php Tingimuslaused.

    Tingimuslausetega saab teha otsuseid sõltuvalt kasutaja valikutest. NT: Kas kasutaja on sisselogimisel kõik väljad täitnud.

    IF tingimus alustab tegevust siis kui vastus on true.
    
    IF-ELSE tingimusel algab tegevus kui vastus on kas tõene või väär.
    
    IF... IF ELSE ... ELSE tingimusel on võimalik lisada mitmeid vastusevariante.
    
    SWITCH tingimusel on lihtsam lisada suurem kogus vastusevariante
    
### 17.10.2019

*   Php tsüklid.

    FOR - Tegemist on kindla kordustearvuga tsükliga.
        
    while - Tegemist on eelkontrolli tsükliga, mis täidab käsku, kuni etteantud tingimus vastab tõele.

    do… - Do…while on aga järelkontrolliga tsükkel. Selle tsükli puhul väljastatakse lause enne ja siis kontrollitakse tingimust.
    
    Tsükleid saab sisestada tsüklite sisse.

### 21.10.2019

*   Koostasime tabeleid.
