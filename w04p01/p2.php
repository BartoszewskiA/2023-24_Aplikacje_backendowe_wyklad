<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title></title>
  </head>
  <body>
    <?php
    foreach($_SERVER as $klucz=>$wartosc)
        echo "<p> $klucz : $wartosc</p>";
    ?>
  </body>
</html>