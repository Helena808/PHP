<?php
$get = $_GET;
$id = $get["id"];
require "data.php";
$book = getBooks()[$id-1];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<? include_once "header.php"; ?>
	<div>
		<h3>Книга <? echo $book["title"] ?></h3>
		<p><? echo $book["author"] ?></p>
		<img width="400" height="200" src="img/<? echo $book["img"] ?>">
		<p>Стоимость: <? echo $book["price"] ?></p>
		<a href="page.php">Вернутсья</a>
	</div>

</body>
</html>