<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $connect=new mysqli("localhost", "root","", "baza");
    $sql="SELECT * FROM `user`;";
    $result=$connect->query($sql);
    //$user=$result->fetch_assoc();
    //print_r($user);
    while($user=$result->fetch_assoc()){
        echo<<<USER
        Imię i nazwisko: $user[name] $user[surname] <br>
        Data urodzenia: $user[birth_date]
        <hr>
USER;
    }
?>
</body>
</html>