<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Задание1</h1>
    <?php
    $numbers=[
        [1, 2, 3, 4],
        [5, 6, 7, 8],
        [9, 10, 11, 12]
    ];
    foreach($numbers as $number){
        echo "<br>";
        foreach($number as $num)
        {
            echo $num . " ";
        }
        echo "</br>";
    };
    ?>
    <h2>Задание 2</h2>
    <?php
    $numbers=[];
    $num=10
    for ($i=0; $i<9; $i++){
        for ($j=0; $j<10; $j++){
            $numbers[$i][$j]=$num*$num;
            $num++
        }
    }
    for($i=0)
    <
</body>
</html>