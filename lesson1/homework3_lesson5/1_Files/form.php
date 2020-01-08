<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Files onload</title>
</head>
<body>
	<form action="form_handler.php" enctype="multipart/form-data" method="POST">
		<input type="hidden" name="MAX_FILE_SIZE" value="30000000">
		<input type="file" accept="image/jpeg" name="userfile[]" multiple>
		<input type="submit" value="Загрузить файлы">
	</form>
	
</body>
</html>