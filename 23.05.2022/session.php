<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sesja 1</h1>
<?php
    session_start();
    echo session_id();

    $_session['name']='Janusz';
    echo '<br>'.$_session['name'].'<hr>';

?>
    <a href="./session2.php">Druga strona</a>
</body>
</html>
