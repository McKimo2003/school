<?php
    $name="Janusz";
    $surname="Kowalski";
    echo "Imie i nazwisko: $name $surname<br>";
    echo "Imie i nazwisko: $name<br>";
    echo "Imie: ".$name." nazwisko<br>";
    echo "Imie: ",$name," nazwisko<br>";
    //boolean
    $prawda=true;
    $falsz=false;
    echo $prawda; //1
    echo $falsz; //nic nie wyświetli
    //integer
    $calkowita=10;
    //hex, bin, oct
    $bin=0b1011;
    $hex=010;
    $oct=0x10;
    echo "<br>$calkowita"; //10
    echo "<br> $bin $hex $oct";
    echo "<br>".gettype($hex);
    echo "<br>".gettype($prawda);
    //zmiennoprzecinkowe
    $x=10.5;
    echo "<br>$x";
    $name="Anna";
    echo "<br>Nazwa zmiennej $name, imie zmienna \$name";
    //heredoc
    echo <<<ETYKIETA
        <br>
        imie i nazwisko: $name $surname \$surname
        <hr>
ETYKIETA;
?>