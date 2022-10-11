<?php




require_once "../../includes/session.inc.php";

/*
		
		component structor for getAdminDetails.inc.php

*/
require_once "../controllers/loginController.controller.php";



$get_details_controller = new LoginController();


$get_details_result = $get_details_controller->get_admin_info();

if($get_details_result == 1){
	while($admin_details_row =$get_details_controller->get_admin_info_result->fetch_assoc()){
		$admin_details = [

			"username" => $admin_details_row["username"]


		];


		$admin_details_data = json_encode($admin_details);

		echo $admin_details_data;
	}
}


?>