<?php
echo "Вывод сообщения в строку<br>";
var_dump ("это для отладки, выведет всё что угодно");

// ПЕРЕМЕННЫЕ
$login = "Boo";
var_dump($login);

echo"<br>";
var_dump("empty", empty($login));
var_dump("isset", isset($login));

echo"<br>";
$pwd = null;
var_dump("empty", empty($pwd));
var_dump("isset", isset($pwd));

echo"<br>";
$auth = "0";
var_dump("empty", empty($auth));
var_dump("isset", isset($auth));


unset($login);
var_dump($login);

$login = (bool) $login;
var_dump(is_bool($login));
var_dump(PHP_INT_MIN);
var_dump(PHP_INT_MAX);
var_dump(PHP_INT_SIZE);

$login = "50";
$login = (int)$login;
var_dump($login);

$first_string = "строки";
var_dump("$login cent");
$login = (string)$year;
var_dump(is_string($login));

define("CONSTANT1", "Ok");
const CONSTANT2 = "Ok";
var_dump(CONSTANT1);

?>
