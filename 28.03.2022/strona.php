<?php
    $error=0;
    if(isset($_POST['registration'])){
        $error=1;
        echo "<script>document.getElementById('form').reset();</script>";
        echo "<script>history.back();</script>";
        exit();
    }
    if(empty($_POST['Company']) || empty($_POST['Name']) || empty($_POST['Surname']) || empty($_POST['Email']) || empty($_POST['Title']) || empty($_POST['Phone']) || empty($_POST['date']) || empty($_POST['job']))
    {
        $error=1;
        echo "<script>alert ('Nie masz wszystkiego wypisane');</script>";
        echo "<script>history.back();</script>";
        exit();
    }
    if($error!=0)
    {
        echo "<script>history.back();</script>";
        exit();
    }
    foreach($_POST as $key=>$value){
        echo "$key: $value<br>";
    }
?>