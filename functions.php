<?php
require_once "db.php";

function register(array $data){
	$values = [
		$data['name'],
		$data['email'],
		password_hash($data['password'], PASSWORD_ARGON2ID),
		(new DateTime())->format('Y-m-d H:i:s')
	];

	return insert($values);
} 

function validate(array $data){

	$errors = [];

	if (!isset($data['email']) || strlen($data['email']) == 0){
		$errors[]['email'] = "Укажите почту";
	} elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
		$errors[]['email'] = 'Укажите правильный формат почты';
	} elseif (strlen($data['email']) <= 4){
		$errors[]['email'] = 'Имя почты должно быть больше 4';
	} elseif (isEmailExists($data['email'])){
		$errors[]['email'] = "Такой Email уже существует";
	}

	if (!isset($data['name']) || strlen($data['name']) == 0){
		$errors[]['name'] = 'Укажите имя';
	}

	if (!isset($data['password']) || strlen($data['password']) == 0){
		$errors[]['password'] = 'Укажите пароль';
	}

	if (!isset($data['repeat-password']) || strlen($data['repeat-password']) == 0){
		$errors[]['repeat-password'] = 'Повторите пароль';
	} elseif ($data['repeat-password'] != $data['password']){
		$errors[]['repeat-password'] = 'Пароли не совпадают';
	}

	return $errors;
}

function isEmailExists(string $email){
	if (getUserByEmail($email)){
		return true;
	} 
	return false;
}




// $errors = validate(['email' => 'toni.slastikhin@mail.ru','password'=>'']);

// print "<pre>";
// print_r($errors);
// print "</pre>";
?>

