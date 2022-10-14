<?php


require_once "admin_controllers/loginController.controller.php";

$userName = $_POST["username"];
$password = $_POST["password"];



$login_controller = new LoginController();

$login_result = $login_controller->check_credentials($userName,$password);

if($login_result == 1){

	
	require_once "../includes/session.inc.php";
	setcookie("login", true, time() + (86400 * 30), "/");
	$_SESSION["login"] = $_COOKIE["login"];

	echo "welcome chief, login successful";
	
	

}else{

	echo $login_result;
}


?>