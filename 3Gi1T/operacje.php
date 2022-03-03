<?php
    echo PHP_VERSION,"<br>";
    //potegowanie
    echo 2**13,"<br>";

    $x=10;
    $y=5;
    echo $x<=>$y,"<br>";
    $x=1;
    $y=1.0;
    echo gettype($x),"<br>";
    echo gettype($y),"<br>";
    //rowne
    if($x==$y)
    {
        echo "Równa<br>";
    }
    else
    {
        echo "Rożne<br>";
    }
    //identyczne
    if($x===$y)
    {
        echo "Równa<br>";
    }
    else
    {
        echo "Rożne<br>";
    }
    //preinkrementacja  ++$i
    //postinkrementacja $i++
    //predekrementacja --$i
    //postdekrementacja $i--
    $x=1;
    echo $x; //1
    $x=$x++;
    echo $x; //1
    $x=++$x;
    echo $x; //2
    $y=++$x;
    echo $x; //3
    echo $y; //3
    $y=$x++;
    echo $x; //4
    echo $y; //3

?>