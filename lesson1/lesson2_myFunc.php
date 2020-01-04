<?php
declare(strict_types = 1);

// Пользовательские функции
// 1. Именованные
function del($x, $y) {
	if ( ((gettype($x) !== "integer") || (gettype($y) !== "integer"))
		&& ((gettype($x) !== "double") || (gettype($y) !== "double"))
		&& ((gettype($x) !== "integer") || (gettype($y) !== "double"))
		&& ((gettype($x) !== "double") || (gettype($y) !== "integer")) ) {
		var_dump("Not a number!");
		return "nothing";
	} else if ($y === 0) {
		var_dump("На ноль делить нельзя=(");
		return "nothing";
	}	return $x / $y;
}

$num1 = 10.8;
$num2 = 2;
var_dump(del($num1, $num2));


$str = "string";

function change_str(&$some_str) {
	$some_str .= " после преобразования";
}
//НЕ НАДО МЕНЯТЬ ИСХОДНЫЕ ДАННЫЕ! НЕ НАДО ИСПОЛЬЗОВАТЬ "&"" В АРГУМЕНТЕ!!!!!!!
change_str($str);
var_dump($str);


function greeting($user = "Гость") {
	echo "Добро пожаловать, ".$user;
}
greeting("Vasya");


function get_sum(...$nums) {
	return array_sum($nums);
}
var_dump(get_sum(3,6,8));


function show_args() {
	var_dump(func_num_args());
	var_dump(func_get_args());
	var_dump(func_get_arg(0));
}

show_args(56, null, [3,78], "str");


function sum(int $a, int $b) : ?int {
	return $a+$b;
}
var_dump(sum(4, 5));

// АНОНИМНЫЕ
$pos_num = function($num) {
	return $num > 0;
};
var_dump(is_callable($pos_num));

function some_func($data, callable $func) {
	if ($func($data)) {
		echo "Data is ok";
	} else {
		echo "Data validation failed";
	};
}
some_func(-78, $pos_num);


function getAllTasks(){
    $task1 = [
        'title'=>'Задача 1',
        'date'=>date_create('yesterday'),
        'participants'=>['Артур', 'Полина'],
        'closed'=>false
    ];
    $task2 = [
        'title'=>'Задача 2',
        'date'=>date_create('tomorrow'),
        'participants'=>['Павел', 'Полина'],
        'closed'=>false
    ];
    $task3 = [
        'title'=>'Задача 3',
        'date'=>date_create(),
        'participants'=>['Артур', 'Глеб'],
        'closed'=>false
    ];
    $task4 = [
        'title'=>'Задача 4',
        'date'=>date_create('yesterday'),
        'participants'=>['Павел', 'Полина'],
        'closed'=>true
    ];
    return [$task1, $task2, $task3, $task4];
}
// новые задачи
// просроченные задачи
// закрытые задачи
// задачи, где участник Артур


$new_tasks = function($task) {
	return $task["date"] > date_create();
};

$old_tasks = function($task) {
	return ($task["date"] < date_create()) && !($task["closed"]);
};

$closed_tasks = function($task) {
	return $task["closed"];
};

$artur_tasks = function($task) {
	return in_array("Артур", $task["participants"]);
};

function find_by_params(array $tasks, callable $func) : array {
	$filtered_tasks = [];
	foreach ($tasks as $task) {
		if ($func($task)) {
			$filtered_tasks[] = $task;
		};
	};
	return $filtered_tasks;
} 

$tasks = getAllTasks();
var_dump(find_by_params($tasks, $artur_tasks));

$some_var = "переменная вне функции";
const OUT_CONST = "константа вне функции";

function func() {
	var_dump($some_var);
	var_dump(OUT_CONST);
	
	$some_var = "локальная переменная функции";

	function func1() {
		echo "hello, Kitty"
	}
}