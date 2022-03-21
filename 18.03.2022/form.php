<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Form</title>
    </head>
    <body>
            <h1>Dane używkowników</h1>
            <form method="get">
                <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
                <input type="password" name="password" placeholder="Podaj haslo"><br><br>
                <input type="submit" value="Zatwierdź">
            </form>
<?php
    //echo "<br>".$_GET['surname']."<br>";
    if(isset($_GET['surname'])){
        echo "Nazwisko: ".$_GET['surname']."<br>";
        //echo "Hasło: ".$_GET['password']."<br>";
    }
    echo "<br>";
    if(!empty($_GET['surname']) && !empty($_GET['password'])){
        echo "Nazwisko: ".$_GET['surname']."<br>";
        echo "Hasło: ".$_GET['password']."<br>";
    }
?>
    </body> 
</html>