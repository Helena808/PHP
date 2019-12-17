<?php
// Задание 1
$arr = [];
for ($i=1; $i<=9; $i++) {
	for ($ii=1; $ii<=9; $ii++) {
		$arr[$ii] = $ii*$i;
	};
	var_dump(implode(" ", $arr));
};


//Задание 2
$x = 2;
$y = 7;
$day = 1;

do {
	$x *= 1.1;
	$day++;
} while ($x<$y);
var_dump($day);

// Задание 3
$num = 800;
$count = 0;
while ($num>=50) {
	$num /= 2;
	$count++;
};
var_dump("После ".$count." итераций осталось число ".$num);


//Задание 4
$book = ['title'=>'PHP 7',
         'pageCount' => 342];
//1 Массив - в переменные
extract($book);
var_dump($title, $pageCount);

//2 Количество эл-тов в массиве
var_dump(count($book));

//3 Наличие значения в массиве
var_dump(in_array(342, $book));


// 4 array_replace /_recursive
$cartoon1 = [
	"title" => "Shrek",
	"heroes" => [
		"mainHero1" => "Shrek",
		"mainHero2" => "Fiona",
		"funnyHero" => "Donkey"
	],
	"genre" => "for kids"
];

$cartoon2 = [
	"title" => "My Neighbour Totoro",
	"heroes" => [
		"mainHero1" => "Totoro",
		"mainHero2" => "May",
		"mainHero3" => "Satsuki"
	],
	"country" => "Japan"
];

$newCartoon = array_replace($cartoon1, $cartoon2);
$newCartoonRecurse = array_replace_recursive($cartoon1, $cartoon2);
var_dump($newCartoon);
var_dump($newCartoonRecurse);

// COMPACT
$name = "Pancakes";
$type = "breakfast";
$price = 200;
$option1 = "milk";
$option2 = "buttermilk";
$ingredient1 = ["option1", "option2"];
$ingredient2 = "flavour";
$ingredient3 = "eggs";

$ingredients = ["ingredient1", "ingredient2", "ingredient3"];

$someMeal = compact("name", "type", $ingredients);
var_dump($someMeal);

// 5 Сортировка массива
$arr = [
    '1'=> [
        'price' => 10,
        'count' => 2
    ],
    '2'=> [
        'price' => 5,
        'count' => 5
    ],
    '3'=> [
        'price' => 8,
        'count' => 5
    ],
    '4'=> [
        'price' => 12,
        'count' => 4
    ],
    '5'=> [
        'price' => 8,
        'count' => 4
    ],
];

function mySort($a, $b) {
	if ($a["price"] == $b["price"]) {
		return 0;
	}
	return ($a["price"] < $b["price"]) ? -1 : 1;
};

uasort($arr, "mySort");
var_dump($arr);

?>