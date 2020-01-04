<?php
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

$get = $_GET;
$id = $get["id"];
$id = $id-1;
$city = $cities[$id];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Путешествие в <? echo $city["title"] ?> </title>
</head>
<body>
	<h1><? echo $city["title"] ?></h1>
	<div>
		<img src="img/<? echo $city['img'] ?>">
	</div>
	<p>Всего за <? echo $city['price'] ?></p>

</body>
</html>