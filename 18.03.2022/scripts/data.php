<?php
    echo "<h4>Pobrane dane z formularza</h4>";
    //print_r($_POST['name']);
    $error=0;
    if(!isset($_POST['gender'])){
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
    if($error!=0){
        echo "<script>history.back();</script>";
        exit();
    }
?>