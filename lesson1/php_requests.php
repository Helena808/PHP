<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Get и Post запросы</title>
</head>
<body>
	<nav>
		<a href="get_post.php?id=3">Get запрос</a> 
	</nav>

	<form action="get_post.php" method="post">
		<input type="text" name="login">
		<input type="text" name="age">
		<input type="submit" value="Отправить">

	</form>

</body>
</html>