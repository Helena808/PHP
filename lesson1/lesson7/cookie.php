<?php
session_id(get_random());
session_name("SESSION_NAME");

function get_random() {
	return rand(10, 40);
}

session_start();

//session_regenerate_id();

//КУКИ
//setcookie();
//$_COOKIE;

//setcookie('name', 'value');
//var_dump($_COOKIE);

$server = $_SERVER;
if ($server['REQUEST_METHOD'] === 'POST') {
	$post = $_POST;
	if (isset($post['color'])) {
		if ($post['color'] != $_COOKIE['color']) {
			$color = $post['color'];
			setcookie('color', $color, time()+3600);
		} else {
			$color = $_COOKIE['color'];
		}
	};
	
};
if ($server['REQUEST_METHOD'] === 'GET') {
	$color = $_COOKIE['color'] ?? 'white';
};

//Хранение данных массивом
setcookie('lang[1]', 'PHP');
setcookie('lang[2]', 'JS');

var_dump($_COOKIE);

if (isset($_COOKIE['lang'])) {
	echo 'Выбранные языки: <br>';
	foreach ($_COOKIE['lang'] as $key => $value) {
		echo "$key: $value <br>";
	};
};

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body style = "background: <? echo $color; ?>" >
	<nav>
		<a href="cookie.php">Cookie</a>
		<a href="some_page.php">Some Page</a>
	</nav>
	<form action="cookie.php" method="post">
		<h5>Изменить цвет фона</h5>
		<select name="color">
			<option value="red">Красный</option>
			<option value="green">Зеленый</option>
			<option value="yellow">Желтый</option>
		</select>
		<input type="submit" value="Изменить">
	</form>
	
</body>
</html>