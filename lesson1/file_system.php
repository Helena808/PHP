<?php
// копирование содержимого
/* if (copy('folder1/file1.1.txt', 'folder1/file1.2.txt')) {
	echo 'Copy - Success';
}

// Переимование файла или директории
if (rename('folder1/file1.1.txt', 'folder1/new_name.txt',)) {
	echo 'Rename - Success';
}


// Удаление ФАЙЛА
if (unlink('folder1/new_name.txt')) {
	echo 'File delete - Success';
}
*/

// Создание директории
/*
mkdir('new_dir');
rmdir('new_dir');
*/



function read_dir($dirname) {
	
	if (is_dir($dirname)) {
		
		if ($dh = opendir($dirname)) {
			var_dump($dh);
			while (($data = readdir($dh)) !== false) {
				echo 'data: '.$data.' type: '.filetype($dirname.'/'.$data)."<br>";
			}
		}
	}
}
read_dir("folder1");

// ЧТЕНИЕ ИЗ ФАЙЛА
$filename = "some_dir/file1.txt";
// 1 вариант - строка
$data = file_get_contents($filename);

//if (file_get_contents() === false) {} - СТРОГОЕ равенство!!
echo "Данные из файла: $data";

	// file_get_contents работает так:
	function read_file_fread ($filename) {
		$fp = fopen($filename, 'r'); //fopen возвращает дескриптор ресурсов
		//$content = fread($fp, filesize($filename)); //прочитали на величину файла

		//чтение кусочками (всё равно выведет всё, но с каждям куском можно что-то делать на каждой итерации => экономим ресуры):
		$content = null;
		while (!feof($fp)) {
			$content .= fread($fp, 4);
		};

		fclose($fp); // закрыли соединение
		return $content;
	}
	$data = read_file_fread($filename);
	var_dump($data);


// 2 вариант - массив
$arr_data= file($filename,FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
var_dump($arr_data);


// ЗАПИСЬ В ФАЙЛ
file_put_contents($filename, "что-то новое записали, 16", FILE_APPEND | LOCK_EX);
echo "$filename";

	// file_put_contents работает так:
	function write_file($filename, $data) {
		$fp = fopen($filename, 'a'); //a - append
		fwrite($fp, $data);
		fclose($fp);
	}

write_file($filename, "hjfvlsehflbvili");
var_dump($data);

// ДОМАШКА: функция рекурсивного удаления файлов и диреторий
/*
function deleteDirectory($dirname) {
	$includes = new FilesystemIterator($dirname); //класс, который позволяет сделать листинг директории с учётом скрытых файлов, имена которых начинаются с . 
	foreach ($includes as $include) {
		if (is_dir($include)) {
			deleteDirectory($include);
		} else {
			unlink($include);
		};
	};
	rmdir($dirname);
}

deleteDirectory("folder1");

*/

/* ДЗ  новое
ЧЕРЕЗ АЯКС:
1.делаем форму с олним импутом для ввода урла, кнопкой отправить и полем для вывода ответа
2. файл JS - получает урл, аяксом отпарвляет на сервер (в пхп)
3. обработчик формы в пхп обрабатывает (проверки, запись в файл [лучше с новой строки, тогда это будет массив, с ним проще работать] и т.п.) и отправляет ответ в JS
4. JS отправляет ответ в форму для вывода ответа на странице