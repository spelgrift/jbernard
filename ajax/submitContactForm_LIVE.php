<?php

// CONFIG
$SENDTO = 'spts.devemail@gmail.com'; // Change for production

processRequest($SENDTO);

function processRequest($SENDTO) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$body = $_POST['body'];

	if($name == "") {
		return error("Please enter your name.");
	}
	if($email == "") {
		return error("Please enter your email.");
	}
	if($body == "") {
		return error("Please enter a message.");
	}
	if(!isValidEmail($email)) {
		return error("Invalid email address");
	}

	$emailto = $SENDTO;
	$emailfrom = $email;
	$fromname = $name;
	$subject = 'New message from '.$name;
	$messagebody = $body;
	$headers = 
		'Return-Path: ' . $emailfrom . "\r\n" . 
		'From: <' . $emailfrom . '>' . "\r\n" . 
		'X-Priority: 3' . "\r\n" . 
		'X-Mailer: PHP ' . phpversion() .  "\r\n" . 
		'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
		'MIME-Version: 1.0' . "\r\n" . 
		'Content-Transfer-Encoding: 8bit' . "\r\n" . 
		'Content-Type: text/plain; charset=UTF-8' . "\r\n";
	if(mail($emailto, $subject, $messagebody, $headers)){
		echo json_encode(array(
			'error' => false,
		));
	} else {
		return error('Unknown Error');
	}
}

function isValidEmail($email) {
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function error($message) {
	$results = array(
		'error' => true,
		'error_msg' => $message
	);
	echo json_encode($results);
	return false;
}
