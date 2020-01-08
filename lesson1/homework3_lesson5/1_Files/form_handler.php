<?php
// Задание 1 - Загрузка нескольких файлов

$post = $_POST;
$files = $_FILES;
var_dump($files);

$userfile = $files['userfile'];

$good_ext = ['jpg', 'jpeg', 'jfif', 'jpe']; //расширения для проверки

for ($i=0; $i<count($userfile['name']); $i++) {
	
		// 1. Получаем исходное имя файла, расширение и хешированное имя
	$file_name = $userfile['name'][$i];
	var_dump($file_name);

	$extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
	var_dump($extension);

	$hash_name = md5($file_name);
	$full_hash_name = $hash_name.'.'.$extension;
	var_dump($full_hash_name);

		// 2. Получаем врменную директорию
	$tmp_name = $userfile['tmp_name'][$i];

		// 3. Проверяем тип файла и размер
	if (!isset($file_name)) {
		$error = 'У файла нет имени';
		echo $error;
	};

		
	if (!in_array($extension, $good_ext)) {
		$error = "Неверное расширение файла $file_name";
		echo $error;
	};

	if ($userfile['size'][$i] > 30000000) {
		$error = "Файл $file_name слишком большой";
		echo $error;
	};

		// 4. Загружаем те, которые прошли проверку успешно
	if (!isset($error)) {
		if (move_uploaded_file($tmp_name, "onloaded_img/$full_hash_name")) {
			echo "Файл $file_name успешно загружен";
		} else {
			$error = "Ошибка при загрузке файла $file_name";
			echo $error;
		};
	};
		// 5. Чистим лог ошибок для следующей итерации
	unset($error); 

};
