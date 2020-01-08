<?php

// Задание 3 - Сокращатель ссылок
//1.делаем форму с олним импутом для ввода урла, кнопкой отправить и //полем для вывода ответа
//2. файл JS - получает урл, аяксом отпарвляет на сервер (в пхп)
//3. обработчик формы в пхп обрабатывает (проверки, запись в файл [лучше с новой строки, тогда это будет массив, с ним проще работать] и т.п.) и отправляет ответ в JS
//4. JS отправляет ответ в форму для вывода ответа на странице
$urlFile = "url.txt";
$urlArr = file($urlFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$server = $_SERVER;
if ($server['REQUEST_METHOD'] ==='POST') {
	echo server_answer($urlFile, $urlArr);
};

function server_answer($filename, $arr) {
	$post = $_POST;
	$url_text = $post['url_text'];
	var_dump($arr);

	// Проверка на пустоту
	if (!isset($url_text)) {
		var_dump('Данные не введены');
		return;
	};

	//Проверка на URL
	if (!filter_var($url_text, FILTER_VALIDATE_URL)) {
		var_dump('Введённые данные не являются URL');
		return;
	};
	var_dump("Тут работает");

	var_dump($arr);

	// Проверка наличия в файле
	if (count($arr) > 0) {
		$in_file = null;
		foreach ($arr as $value) {
			var_dump($url_text);
			var_dump($value);
			if (strripos($value, $url_text) === false) {
				$in_file = false;
				var_dump("Нет такого в файле");
			} else {
				
				// Если такой URL уже есть
				$in_file = true;
				var_dump("Уже есть такой");
				$answer = substr(stristr($value, '^^^'), 3);
				return $answer;
			};
		};
	};
	
	// Если такого URL ещё нет
	if (!$in_file) {
		
		//Хеш-имя
		$symbols = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		do {
			$url_hash = substr(str_shuffle($symbols), 0, 8);
			$in_file_hash = false;
			if (count($arr) > 0) {
				foreach ($arr as $value) {
					if (strripos($value, $url_hash) === false) {
						$in_file_hash = false;
					} else {
						$in_file_hash = true;
					};
				};
			};
		} while ($in_file_hash === true);
		
		// Добавление новой строки
		$new_string = $url_text."^^^".$url_hash."\r\n";
		file_put_contents($filename, $new_string, FILE_APPEND | LOCK_EX);
		return $url_hash;		
	};

}

