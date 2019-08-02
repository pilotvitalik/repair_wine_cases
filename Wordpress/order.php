<?php
/*
Template Name: Email Send
*/


header('Content-Type: text/html; charset=utf-8');

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$error = '';

	if(trim($name) == ''){
		$error = 'Укажите имя';
	}else if(trim($phone) == ''){
		$error = 'Укажите телефон';
	}else if(strlen($message) < 5){
		$error = 'Напишите сообщение длиной больше 5 букв';
	}
	
	if($error !=''){
		echo $error;
		exit;
	}

	$subject = "=?utf-8?B?".base64_encode('Тестовое сообщение')."?=";
    $message1 .='Name:'.$name."\r\n";
    $message1 .='Phone:'.$phone."\r\n";
    $message1 .='Сообщение:'.$message."\r\n";


	mail('itvkip@yandex.ru',$subject,$message1);

	header("Location: /");
?>