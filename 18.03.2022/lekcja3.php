<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
            <h1>Dane użytkownika</h1>
            <form action="./scripts/data.php" method="post">
                <input type="text" name="name" placeholder="Podaj imię"><br><br>
                <input type="text" surname="surname" placeholder="Podaj nazwisko"><br><br>
                <select name="city">
                    <option value="Poznan">Poznań</option>
                    <option value="Warszawa">Warszawa</option>
                </select>
                <input type="radio" name="gender" value="man" checked>Mężczyzna
                <input type="radio" name="gender" value="woman">Kobieta
                <input type="submit" value="Zatwierdź">
            </form>
    </body> 
</html>