<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str = "привет";
    echo $str[3], "<br>";
    $str[3] = "w";
    $len = strlen($str);
    echo "длмна стороны $str - $len символов"
    ?>
</body>
</html>