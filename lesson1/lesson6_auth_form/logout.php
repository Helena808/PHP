<?php
//закрытие сессии
//выход пользователя
session_start();

function log_out() {
	unset($_SESSION["login"]);
	unset($_SESSION["auth"]);
	session_destroy();
	header('page.php');
}

log_out();

?>