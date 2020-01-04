<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Загрузка файлов</title>
	<style type="text/css"></style>
</head>
<body>
	<form action="form_handler.php" method="post" enctype="multipart/form-data">
		<div>
			<input type="text" name="title">
		</div>
		<div>
			<input type="file" accept="image/*" name="picture">
			<input type="submit" name="Загрузить">
		</div>
	</form>
</body>
</html>