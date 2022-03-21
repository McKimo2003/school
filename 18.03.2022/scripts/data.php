<?php
    echo "<h4>Pobrane dane z formularza</h4>";
    //print_r($_POST['name']);
    $error=0;
    $gender="";
    if(!isset($_POST['gender'],$_POST['terms'])){
        $error=1;
        echo "<script>history.back();</script>";
        exit();
    }
    foreach($_POST as $key=>$value){
        echo "$key: $value<br>";
        if(empty($value)){
            $error=1;
            echo "<script>history.back();</script>";
            exit();
        }
    }
    switch($_POST['gender']){
        default:
            $gender="-";
            break;
        case "man":
            $gender="Mężczyzna";
            break;
        case "woman":
            $gender="Kobieta";
            break;
    }
    if($error!=0){
        echo "<script>history.back();</script>";
        exit();
    }
    echo <<<widz
    $gender
widz;
?>