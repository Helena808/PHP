<?php
session_start();

const SUCCESS = "success";
const ERR = "error";



function check($login, $pwd) {
	if (!isset($login) || !isset($pwd)) {
		return false;
	}
	if (trim($login) !== 'qwerty' || trim($pwd) !== '123') {
		return false;
	}
	return true;
}

function server_answer() {
	$post = $_POST;
	$login = $post['login'];
	$password = $post['password'];
	if (!check($login, $password)) {
		return ERR;
	};
	
	$_SESSION['login'] = $login;
	$_SESSION['auth'] = "true";


	return SUCCESS;
}

$server = $_SERVER;
if ($server['REQUEST_METHOD'] ==='POST') {
	echo server_answer();
}