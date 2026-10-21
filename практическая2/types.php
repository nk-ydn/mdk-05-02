<h1>Типы данных в PHP</h1>
<h2>Целые числа</h2>
<?php
$number = 100;
echo $number;
?>
<h2>Числа с плавающей точкой - float</h2>
<?php
$a = -42.5;
$b = 42.;
$c = 1.5e5;
$d = 2.4E-3;
echo "$a, $b, $c, $d";
?>
<h2>Строки - string</h2>
<?php
$str1 = "Переменная a = $a";
$str2 = "WWW";
echo "<br>", $str1, "<br>", $str2;
?>
<h2>Логические значения -- bool</h2>
$t = "true";
$f = "false";
echo "t = $t, f = $f ";
<h2>Специальное значение null</h2>;
$n = null;
echo "n = $n";