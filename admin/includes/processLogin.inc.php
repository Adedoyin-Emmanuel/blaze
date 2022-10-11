<?php


require_once "../controllers/loginController.controller.php";

$userName = $_POST["username"];
$password = $_POST["password"];



$login_controller = new LoginController();

$login_result = $login_controller->check_credentials($userName,$password);

if($login_result == 1){

	echo "welcome chief, login successful";
	require_once "../../includes/session.inc.php";
	setcookie("login", true, time() + (86400 * 30), "/");
	$_SESSION["login"] = true;

	

}else{

	echo $login_result;
}


?>