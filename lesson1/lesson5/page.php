<?php
require_once "data.php";
$books = getBooks();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Main Page</title>
</head>
<body>
	<? include_once "header.php"; ?>
	<? foreach ($books as $book) : ?>
		<div>
			<h3>Книга <? echo $book["title"] ?></h3>
			<h6>Автор <? echo $book["author"] ?></h6>
			<img width="400" height="200" src="img/<? echo $book["img"] ?>" >
			<p>Стоимость: <? echo $book["price"] ?></p>
			<a href="book.php?id=<? echo $book["id"] ?>">Подробнее</a>
		</div>
	<? endforeach ?>

	
</body>
</html>