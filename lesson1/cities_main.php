<?php
$auth = true;
$login = "qwerty";
$cities = [
	[
		"id" => 1,
		"title" => "Paris",
		"price" => 1234,
		"img" => "paris.jpg",
	],

	[
		"id" => 2,
		"title" => "New York",
	 	"price" => 4526,
	 	"img" => "ny.jpg",
	],

	["id" => 3,
	 "title" => "London",
	 "price" => 42345,
	 "img" => "london.jpg",],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<? if ($auth): ?>
		<h2> Welcome, <?echo $login; ?> </h2>
		<a href="#">Выйти из личного кабинета</a>
	<? else: ?>
		<h2> Welcome, Guest! </h2>
		<a href="#"> Войти в личный кабинет</a>		
	<? endif; ?>

	<? foreach ($cities as $city) : ?>
	<div> 
		<h2> Путешествие в <? echo $city["title"] ?> </h2>
		<img width="600" height="200" src="img/<? echo $city["img"] ?>">
		<p> Стоимость: <? echo $city["price"] ?> </p>
		<a href="cities_city.php?id=<? echo $city["id"];?>">Перейти по ссылке</a>
	</div>
	<? endforeach; ?>


</body>
</html>