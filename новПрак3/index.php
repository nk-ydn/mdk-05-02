<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Задача 1</h1>
    <form action="">
        <p>Введите число:</p>
        <input name = "number">
</form>
<?php
if (isset($_GET["number"])){
    $a = $_GET["number"];
    switch($a){
    case 0:
        echo "zero";
        break;
    case 1:
        echo "one";
        break;
    case 2:
        echo "two";
        break;
    case 3:
        echo "three";
        break;
    case 4:
        echo "four";
        break;
    case 5:
        echo "five";
        break;
    case 6:
        echo "six";
        break;
    case 7:
        echo "seven";
        break;
    case 8:
        echo "eight";
        break;
    case 9:
        echo "nine";
        break;
    }
} else {
    echo "данные не получены";
}

?>
</body>
</html>