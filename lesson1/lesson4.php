<?php
// Отправка сообщения клиентом (браузером) серверу
// сервер отвечает сообщением

var_dump("ответ");
$server = $_SERVER; // СУПЕР ГЛОБАЛЬНЫЙ МАССИВ
//var_dump($server);

$document_root = $server["DOCUMENT_ROOT"];
var_dump($document_root);

$http_host = $server["HTTP_HOST"];
var_dump($http_host);

$request_url = $server["REQUEST_URL"];
var_dump($request_url);

$url = "http://".$http_host.$request_url;
var_dump($url);

// функции кодировки
$str_url = "http://host?имя=Михаил&возраст=34 года";
var_dump(urlencode($str_url));
var_dump(rawurlencode($str_url));

var_dump(urldecode(urlencode($str_url)));
var_dump(rawurldecode($str_url));

// Обращение к параметрам (=> элементам массива)
$data = [
	"name" => "Mike",
	"age" => 58
];
$url = "http://hosp/page?".http_build_query($data);
var_dump($url);