<?php

// Задание 3 - Сокращатель ссылок
//1.делаем форму с олним импутом для ввода урла, кнопкой отправить и //полем для вывода ответа
//2. файл JS - получает урл, аяксом отпарвляет на сервер (в пхп)
//3. обработчик формы в пхп обрабатывает (проверки, запись в файл [лучше с новой строки, тогда это будет массив, с ним проще работать] и т.п.) и отправляет ответ в JS
//4. JS отправляет ответ в форму для вывода ответа на странице
$filename = "url.txt";
$urlArr = file($filename, FILE_IGNORE_NEW_LINES, FILE_SKIP_EMPTY_LINES);

function server_answer() {
	$post = $_POST;
	$url_text = $post['url_text'];
	var_dump($url_text);

	// Проверка на пустоту
	if (!isset($url_text)) {
		var_dump('Данные не введены');
		return;
	};

	//Обрезали лишние пробелы
	trim($url_text);

	//Проверка на URL
	if (!filter_var($url_text, FILTER_VALIDATE_URL)) {
		var_dump('Введённые данные не являются URL');
		return;
	};

	// Проверка наличия в файле
	$in_file = null;
	foreach ($urlArr as $value) {
		if (strripos($url_text, $value) === false) {
			$in_file = false;
		} else {
			$in_file = true;
			// такая строка есть и отвалите
			break
		};
	};
	if (!$in_file) {
		//Хеш-имя
		$symbols = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		do {
			$url_hash = substr(str_shuffle($symbols), 0, 16);
			foreach ($urlArr as $value) {
				if (strripos($url_hash, $value) === false) {
					$in_file_hash = false;
				} else {
					$in_file_hash = true;
					break
				};
			};
		} while ($in_file_hash === true);
		

		// Добавление новой строки
		file_put_contents($filename, $url_text."^^^".$url_hash."\r\n", FILE_APPEND);
		
	}

}








$server = $_SERVER;
if ($server['REQUEST_METHOD'] ==='POST') {
	echo server_answer();
}