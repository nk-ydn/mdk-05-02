<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Задача 1</h1>
    <?php
    $startNum = 3;
    $mult = 2;
    $quant = 6;

    $num = $startNum;
    for ($i = 0; $i < $quant; $i++)
        {
            echo ($num = $num * $mult), "<br>";
            
        }
    echo "startNum: ", $startNum, " mult: ", " quant: ", $quant, "<br>";
    ?>
    <h1>Задача 2</h1>
    
</body>
</html>
