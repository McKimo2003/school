<?php
    /*echo "<table>";
    echo "<tr><th>Imie</th><th>Nazwisko</th></tr>";
    echo "<tr><td>Janusz</td><td>Kowalski</td></tr>";
    echo "<tr><td>Mietek</td><td>Nowak</td></tr>";
    echo "</table>"*/

    echo <<<TABLE
        <table>
        <tr><th>Imie</th><th>Nazwisko</th><th>Miasto</th></tr>
TABLE;
        for($i=0;$i<5;$i++)
        {
            echo <<<ROW
            <tr>
                <td>Imię$i</td><td>Nazwisko$i</td><td>Miasto$i</td>
            </tr>
ROW;
        }
    echo <<<TABLE
        <tr><td>Iwo</td><td>Wiliński</td><td>Poznan</td></tr>
        <tr><td>Kacper</td><td>Serek</td><td>Warszawa</td></tr>
        </table>
TABLE;
?>