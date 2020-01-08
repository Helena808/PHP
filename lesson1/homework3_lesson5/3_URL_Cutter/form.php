<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>URL_Cutter</title>
</head>
<body>
	<form action="form_handler.php" method="POST" name="url_form">
		<input type="url" name="url_text">
		<input type="submit" name="Отправить">
	</form>
	
	<div>
		<h3>Сокращённая ссылка:</h3>
		<p id="answer"></p>
		<!-- поле для вывода ответа -->
	</div>
</body>
</html>