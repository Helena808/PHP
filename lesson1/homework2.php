<?php
// Задание 1
function toCamelCase($string) {
	$arr = explode("_", $string);
	$camelArr = [];
	for ($i = 0; $i < count($arr); $i++) {
		if ($i === 0) {
			$camelArr[] = lcfirst($arr[$i]);
		} else {
			$camelArr[] = ucfirst($arr[$i]);
		};
	};
	return implode($camelArr);
}

var_dump(toCamelCase("this_is_string"));

// Задание 2
function findFileName($string) {
	$arr = explode('\\', $string);
	$lastPiece = array_pop($arr);
	$pointIndex = strripos($lastPiece, ".");
	return substr($lastPiece, 0, $pointIndex);
	
}

var_dump(findFileName("C:\\OpenServer\\testsite\\www\\someFile.txt"));

//Задание 3
$string1 = "Аксиома силлогизма, по определению, представляет собой неоднозначный предмет деятельности. Интеллект естественно понимает под собой интеллигибельный закон внешнего мира, открывая новые горизонты";
$string2 = "Аксиома силлогизма, по определению, представляет собой неоднозначный предмет деятельности. Интеллект естественно понимает под собой интеллигибельный закон внешнего мира, открывая новые горизонты";
$compare = similar_text($string1, $string2, $perc);
var_dump('Совпадение текста 1 с текстом 2: '.$perc.'%');


// Задание 4

// Функция для рассчёта суммы чисел
function sum ($num) {
	$numSum = 0;
	while ($num > 0) {
		$numSum += $num%10;
		$num /= 10;
	};
	return $numSum;
}

// Функция для сортировки
function sorting ($a, $b) {
	if (sum($a) === sum($b)) {
		return 0;
	} return (sum($a) > sum($b)) ? 1 : -1;
}

$array = [21, 31, 1, 403, 37, 61, 10, 4, 34];
$sortedArr = $array;

// Отсортировали массив
usort($sortedArr, "sorting");

// Записали суммы отсортированного массива
$sums = [];
for ($i=0; $i<count($sortedArr); $i++) {
	$sums[$i] = sum($sortedArr[$i]);
};

var_dump("Исходный массив: ", $array);
var_dump("Отсортированный массив: ", $sortedArr);
var_dump("Суммы отсортированного массива: ", $sums);

