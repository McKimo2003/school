<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Figury geometryczne</h1>
    <form method="post">
      <input type="radio" name="geometricFigure" checked value="cube">Sześcian
      <input type="radio" name="geometricFigure" value="rectangle">Prostokąt
      <input type="submit" name="button" value="Zatwierdź">
    </form>
<?php
  if ($_POST['geometricFigure']) {
    echo "Wypełnij dane";
    echo "<form action='./scripts/calculate.php' method='post'>";
   switch ($_POST['geometricFigure']) {
     case 'cube':
       echo "<input type='text' name='a' placeholder='Podaj a'> <br><br>";
       break;

     case 'rectangle':
      echo "<input type='text' name='a' placeholder='Podaj a'> <br><br>";
      echo "<input type='text' name='b' placeholder='Podaj b'> <br><br>";
      break;
   }
    echo "<input type=\'hidden' name=\'geometricFigure' value=\'($_POST['geometricFigure']\'>";
    echo "<input type='submit' value='zatwierdź'> </form>";
  }
?>
  </body>
</html>
