<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <title></title>
</head>

<body>

    <?php
    function zwieksz_tablice(&$tablica)
    {
        foreach ($tablica as &$pole)
            $pole++;
        return $tablica;
    }
    $tablica = array(1, 2, 3, 4, 5, 6, 7);
    $tablica = zwieksz_tablice($tablica);

    foreach ($tablica as $pole)
        echo "$pole ";
    ?>
</body>

</html>