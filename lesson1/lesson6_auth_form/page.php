<?php
session_start();

/*$_SESSION состоит из:
'auth' => true;
'login' => "lodsgjv";
*/

$auth = $_SESSION['auth'];
?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav>
    <a href="#">Страница 1</a>
    <a href="#">Страница 2</a>
    <? if ($auth): ?>
        <a href="logout.php">Выйти</a>
    <? else: ?>
        <a id="open_modal">Войти</a>
    <? endif; ?>
</nav>
<!--модальное окно-->
<div class="modal">
    <p id="errors"></p>
    <form name="auth_form" action="form_handler.php">
        <p><input class="validate" type="text" name="login" placeholder="логин"></p>
        <p><input class="validate" type="password" name="password" placeholder="пароль"></p>
        <p>
            <input type="submit" value="Отправить">
            <input id="cancel" type="button" value="Отмена">
        </p>
    </form>
</div>
<h3>Страница доступна всем пользователям</h3>

<? if (!$auth): ?>
    <script src="js/form.js"></script>
<? endif; ?>

</body>
</html>
