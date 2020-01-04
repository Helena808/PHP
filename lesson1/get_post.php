<?php

// Это страница, ссылка на которую указана в хтмл-файле
$server = $_SERVER;

$request_method = $server["REQUEST_METHOD"];

if ($request_method =="GET") {
	$get = $_GET;
	var_dump($get);
};

if ($request_method =="POST") {
	$post = $_POST;
	$login = $post["login"];
	$age = $post['age'];
	var_dump($login);
	var_dump($age);
};



?>
