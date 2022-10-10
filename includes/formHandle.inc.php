<?php
	
	require_once "../controllers/emailController.controller.php";
#get the form data

$subscriber_email = $_POST["email"];

$email_controller = new EmailController($subscriber_email);

$sanitized_email = $email_controller->custom_email_sanitizer($subscriber_email);

#if there was an error, then send the error
if($sanitized_email != 1){
	echo $sanitized_email;
	die();
}
	#add the subscriber

	

	$add_subscriber_result = $email_controller->add_subscriber_to_DB();


	if($add_subscriber_result == 1){
		echo "subscriber added successfully";

	}else{
		echo $add_subscriber_result;
		die();
	}














?>