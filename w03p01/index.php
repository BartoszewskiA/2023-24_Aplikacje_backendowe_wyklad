<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <title></title>
</head>

<body>
    <?php 
    for ($i = 0; $i < 20; $i++) 
        $liczby[$i] = rand(1, 20);

    foreach ($liczby as $element)
        echo "$element ";

    echo "<br><br>";

    foreach ($liczby as &$element)
        if($element>10) $element="#";

    foreach($liczby as $element)
        echo "$element ";

    ?>
</body>

</html>