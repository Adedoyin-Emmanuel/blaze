<?php


require_once "../controllers/blazeDevController.controller.php";


		/*

			get the necessary inputs from the form

		*/


	$operating_system = $_POST["operating_system"];
	$code_editor	  = $_POST["code_editor"];
	$default_browser  = $_POST["browser_type"];

	$default_server   = $_POST["server_type"];


	$client_choice = array();


	if(empty($operating_system) OR empty($code_editor) OR empty($default_browser)){
		die("please fill the required fields");
	}

	#there are 4 OS by default

	/* 0-> no OS 1-> windows OS 2-> linux OS 3->chromebook OS 4->mac OS*/
	$client_operating_system = "";
	#prepare the switch statement for the operating system
	switch ($operating_system) {
		case "0":
			die("please select your OS");
			break;

		case "1":
			$client_operating_system = "windows";
			break;

		case "2":
			$client_operating_system = "linux";
			break;

		case "3":
			$client_operating_system = "chromebook";
			break;

		
		case "4":
			$client_operating_system = "mac";
			break;

	
		default:
			die("please select your OS");
			break;
	}



	if(!empty($client_operating_system)){
		array_push($client_choice,$client_operating_system);
	}




	/*
		switch statement for code editior
		there are 7 code editor by default

	*/
	/* 

	0-> no code editor 1-> vs code 2-> sublime text 3->bracket 4->notepad ++ 5->notepad 6-> atom 7-> text-edit


	 */
	$client_code_editor = "";
	#prepare the switch statement for the operating system
	switch ($code_editor) {
		case "0":
			die("please select your code-editor");
			break;

		case "1":
			$client_code_editor = "visual studio code";
			break;

		case "2":
			$client_code_editor = "sublime text";
			break;

		case "3":
			$client_code_editor = "bracket";
			break;

		
		case "4":
			$client_code_editor = "notepad ++";
			break;


		case "5":
			$client_code_editor = "notepad";
			break;
		
		case "6":
			$client_code_editor = "atom";
			break;

		case "7":
			$client_code_editor = "text edit";
			break;

		default:
			die("please select your code-editor");
			break;
	}







if(!empty($client_code_editor)){
	array_push($client_choice,$client_code_editor);
}





	/*
		switch statement for browser
		there are 6 browser by default

	*/
	/* 

	0-> no browser 1-> vs code 2-> sublime text 3->bracket 4->notepad ++ 5->notepad 6-> atom 7-> text-edit


	 */
	$client_browser = "";
	#prepare the switch statement for the operating system
	switch ($default_browser) {
		case "0":
			die("please select your code-editor");
			break;

		case "1":
			$client_browser = "chrome";
			break;

		case "2":
			$client_browser = "firefox";
			break;

		case "3":
			$client_browser = "edge";
			break;

		
		case "4":
			$client_browser = "opera";
			break;


		case "5":
			$client_browser = "safari";
			break;
		
		case "6":
			$client_browser = "internet explorer";
			break;

		default:
			die("please select your code-editor");
			break;
	}







if(!empty($client_browser)){
	array_push($client_choice,$client_browser);
}






	/*
		switch statement for server
		there are 4 server by default

	*/
	/* 

	0-> no server 1-> xampp server 2-> wamp server 3-> mamp server 4->node js  


	 */
	$client_server = "";
	#prepare the switch statement for the operating system
	switch ($default_server) {
		case "0":
			die("please select your server");
			break;

		case "1":
			$client_server = "xampp";
			break;

		case "2":
			$client_server = "wamp";
			break;

		case "3":
			$client_server = "mamp";
			break;

		
		case "4":
			$client_server = "node";
			break;

		default:
			die("please select your server");
			break;
	}


if(!empty($client_server)){
	array_push($client_choice,$client_server);
}




//main blaze logic



$BLAZE = new BlazeGenerator($client_operating_system, $client_code_editor,$client_browser);


$file_generate_status = $BLAZE->generate_blaze_file();

if($file_generate_status != 1){
	echo $file_generate_status;
}else{
	echo "blaze file generated successfully";
}








?>