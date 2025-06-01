<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Con bucle For: ";
    for ($i = 1 ; $i < 11; $i++){echo $i;}
    echo "<br>Con bucle While: ";
    $i = 1;
    while($i < 11)
    {
        echo $i;
        $i++;
    }

    ?>
</body>
</html>