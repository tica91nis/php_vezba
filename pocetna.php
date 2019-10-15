<?php
    //ovo je jednolinijski komentar
    /* ovo je viselinijski komentar */
    echo "Zdravo svete";
    //Dodela vrednosti promenljivama
    echo "<br>";
    $ime ="Tijana";
    echo $ime;

    $prviBroj = 5;
    $drugiBroj = 3;
    //sabiranje +
    //oduzimanje -
    //mnozenje *
    //deljenje /
    $zbir = $prviBroj + $drugiBroj;
    echo "<br>";
    echo $zbir;
    $zbir = ($prviBroj + $drugiBroj)*2;
    echo "<br>";
    echo $zbir;
    // za unetu cenu robe, unetu novcanicu kojim kupac placa racun
    //ispisati koliki je kusur koji njemu kasirka treba da vrati
    $cena_robe = 753;
    $novcanica = 2000;
    $kusur = $novcanica - $cena_robe;
    echo "<br>";
    echo $kusur . " Republika Srbija" . " dinara";
    echo "<br>";
    echo "$kusur Republika Srbija dinari";
    echo "<br>";
    $ime = "Tijana";
    $prezime = "Jovic";
    $godine = 27;
    echo $ime . " " . $prezime . " " . $godine; 
    echo "<br>";
    echo "$ime $prezime $godine";
    //za uneto vreme u satiima i minuta izracunajte koliko je minuta proslo od pnoci.
    $sati = 14;
    $minuti = 45;
    $sat_ukup = $sati * 60;
    $zbir = $sat_ukup + $minuti;
    echo "<br>";
    echo $zbir;
    //isti zadatak samo sto je vreme preuzeto sa racunara
    date_default_timezone_set ('Europe/Belgrade');
    $trenutno_sati = date ('G');
    $trenutno_minuta = date ('i');
    echo "<br>";
    echo "$trenutno_sati : $trenutno_minuta";

    ?>