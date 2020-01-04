<?php
$color = $_COOKIE['color'] ?? 'white';

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

	
</body>
</html>