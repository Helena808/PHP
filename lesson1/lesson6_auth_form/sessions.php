<?php
session_start();
$_SESSION['auth'] = true;
$_SESSION['username'] = 'qwe';

var_dump($_SESSION);

//Проверка наличия переменной в массиве $_SESSION
var_dump(isset($_SESSION['auth']));
var_dump(isset($_SESSION['username']));

//Удаление пары ключ-значение
unset($_SESSION['auth']);
session_destroy();
?>

<h3><a href="sessions2.php">Sessions 2</a></h3>