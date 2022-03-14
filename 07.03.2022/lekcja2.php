<?php
    $text=<<<SCHOOL
    ZSŁ - Zespół Szkół
    Łączności
SCHOOL;
    echo "$text<hr>";
    echo nl2br($text);
    echo "<hr>";

    $name="JaNuSz";
    echo $name."<br>";
    echo strtolower($name)."<br>";
    echo strtoupper($name)."<br>";
    $surname="Bąk";
    echo $surname."<br>";
    echo strtolower($surname)."<br>";
    echo strtoupper($surname)."<br>";
    echo mb_strtoupper($surname)."<hr>";
    $text="Jakiś kowalski";
    echo $text."<br>";
    echo mb_strtolower($text)."<br>";
    echo ucfirst(mb_strtolower($text))."<br>";
    echo ucwords(mb_strtolower($text))."<hr>";
    $Lorem="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis mi vitae odio lacinia, et fringilla felis cursus. Aliquam eleifend auctor condimentum. Cras fermentum sit amet libero ac ultricies. Quisque hendrerit placerat mi, at tempus lectus interdum vitae. Sed enim odio, hendrerit eget dolor vel, ultrices malesuada est. Praesent bibendum placerat rutrum. Etiam et massa quis nibh pretium egestas in id dui. Aenean vulputate nulla sed dolor imperdiet vestibulum. Integer maximus imperdiet leo. Proin non accumsan turpis. Fusce egestas orci non est blandit consequat. Nullam ac ipsum et nunc suscipit dapibus ut nec magna. Vivamus non posuere velit, et condimentum ante. Maecenas eget quam convallis, dignissim dolor eu, laoreet mi. Vivamus id quam rutrum, hendrerit risus eu, facilisis mauris.Morbi a aliquet est, at viverra nisl. Proin at ornare libero, aliquam gravida quam. Donec ullamcorper, ex a accumsan accumsan, lectus velit cursus odio, ut pretium odio purus eu augue. Donec arcu urna, suscipit at egestas eu, facilisis et nulla. Morbi sed nisl non orci rutrum commodo at vitae orci. In id varius turpis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas id nibh elementum, gravida nisi eget, imperdiet orci.";
    echo $Lorem."<hr>";
    echo wordwrap($Lorem, 50, "<br>");
    ob_clean();
    $name="  jan ";
    echo $name,"<br>";
    echo "Długość imienia $name wynosi: ".strlen($name)."<br>";
    echo "Długość imienia ".ltrim($name)." wynosi: ".strlen(ltrim($name))."<br>"; //Usuwa lewa
    echo "Długość imienia ".rtrim($name)." wynosi: ".strlen(rtrim($name))."<br>"; //Usuwa Prawa
    echo "Długość imienia ".trim($name)." wynosi: ".strlen(trim($name))."<br>";
    //substring
    $name="Janusz";
    echo substr($name, 0, 3)."<br>";
    echo substr($name, 1, 4)."<br>";
    //str_replace
    $name="Janusz";
    $surname="Kowalski";
    $wyjscie=" *** ";
    echo str_replace($name, $wyjscie, "Janusz tekst jest Anna Janusz bo Janusz to Janusz")."<br>";
    //tabela
    $tab=["ą", "ę"];
    $replace=["a", "e"];
    echo str_replace($replace, $tab, "Jest dobrze wiem o tym esa z toba widz")."<br>";
    //wyciaganie domeny
    $mail="januszkowalski@zsl.poznan.pl";
    echo $mail."<br>";
    echo substr($mail, strpos($mail, "@")+1, 999)."<br>"; //domena
?>