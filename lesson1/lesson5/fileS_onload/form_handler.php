<?php
$post = $_POST;
var_dump($post);
$files = $_FILES;
var_dump($files);

$file_name = $files['picture']['name'];
var_dump($file_name);

$ext = pathinfo($file_name, PATHINFO_EXTENSION);
var_dump($ext);

// Необходимо изменять имя файцла
$name = md5($file_name); // +data
var_dump($name);

$full_name = $name . '.' . $ext;
var_dump($full_name);

//Перемещение файла из временной папки
$tmp_name = $files['picture']['tmp_name'];
if (move_uploaded_file($tmp_name, "img/$full_name")) {
	echo "Файл успешно загружен";
} else {
	"Ошибка";
};


// ЗАГРУЗКА НЕСКОЛЬКИХ ФАЙЛОВ - ЦИКЛОМ:
// 1. Получаем и меняем имя файлов
// 2. Получаем врменную директторию
// 3. Проверяем тип файла и размер
// 4. Загружаем те, которые прошли проверку успешно
// 5. Пишем, какие файлы загрузились, какие нет и почему