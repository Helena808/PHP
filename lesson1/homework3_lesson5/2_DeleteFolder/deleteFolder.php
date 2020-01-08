<?php
// Задание 2 - Удаление непустого каталога

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