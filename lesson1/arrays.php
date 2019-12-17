<?php
// МАССИВЫ
$arr = [2,6,9,10,-23];
$arrElem = $arr[2];
var_dump($arrElem);
$arr[4] = 777;
$arr[50] = 777;
var_dump($arr);

$arr = [2,6,8,12];
foreach ($arr as $value) {
	$value *= 2;
	var_dump($value);
};

foreach ($arr as &$value) {
	$value *= 2;
};
unset($value);
var_dump($arr);

$userinfo = [
	"id" => 1,
	"login" => "qwerty",
	"pwd" => "password",
];
var_dump($userinfo);
$arrElem = $userinfo["login"];
var_dump($arrElem);
$userinfo["pwd"] = "boo";
$userinfo["login"] = "Tom";

foreach ($userinfo as $key => $value) {
	var_dump($key. ":".$value);
};

?>