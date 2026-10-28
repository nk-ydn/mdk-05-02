<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>задание1</h1>
    <?php
    $numA = 6;
    $numB = 4;
    if ($numA < $numB):
        echo($numA+$numB);
    else:
        echo($numA*$numB);
    endif;
    ?>

    <h1>задание2</h1>
    <?php
    $n = 65;
    echo $n, "<br>";
    if ($n%2 == 0):
        echo("четное");
    else:
        echo("нечетное");
    endif;
    ?>

    <h1>задание3</h1>
    <?php
    $sum = 1322;
    if ($sum > 1000):
        $total = $sum - (($sum/100)*10);
    else:
        $total = $sum - (($sum/100)*5);
    ?>
</body>
</html>