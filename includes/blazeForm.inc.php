<?php


require_once "../controllers/blazeDevController.controller.php";

	#get the necessary inputs from the user form

	$operating_system = $_POST["operating_system"];
	$code_editor	  = $_POST["code_editor"];
	$default_browser  = $_POST["browser_type"];

	$default_server   = $_POST["server_type"];

	$start_terminal_by_default= @$_POST["terminal_start"] OR "";
	$start_git_by_default = @$_POST["git_start"] OR "";
	$version_control_system = $_POST["version_control_system"];

	$default_webistes_launch = $_POST["default_sites"] OR "";





	$client_choice = array();


	if(empty($operating_system) OR empty($code_editor)){
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
			$client_browser = "SELECT";
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
			$client_browser = "SELECT";
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
			$client_server = "SELECT";
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
			$client_server = "SELECT";
			break;
	}


	if(!empty($client_server)){
		array_push($client_choice,$client_server);
	}

	/*
		check for some additional inputs
	*/

	#check for the type of version control system the client wants 
	$client_version_control_system = "";
	switch ($version_control_system) {
		case "0":
			$client_version_control_system = "SELECT";
			break;

		case "1":
			$client_version_control_system = "github";
			break;

		case "2":
			$client_version_control_system = "bitbucket";
			break;

		case "3":
			$client_version_control_system = "gitlab";
			break;

		
		default:
			$client_version_control_system = "SELECT";
			break;

		}


		if(!empty($client_version_control_system)){
			array_push($client_choice,$client_version_control_system);
		}



		#check for the webistes the client want to start by default when they launch blaze
		$default_sites_to_open = " ";
		if(!empty($default_webistes_launch)){
			$default_sites_to_open = explode(",", $default_webistes_launch);
			$url_errors = array();
			#loop through all the sites name and check if they have valid url
				for($i=0; $i < count($default_sites_to_open); $i++){

				    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$default_sites_to_open[$i])) {
				      	
					      	die($default_sites_to_open[$i]. " is not a valid website URL");

				    }
			}
		}
		


		#check for the client's response for the command line default setup
		$start_terminal_by_default_value = 0;

		if(!empty($start_terminal_by_default)){
			if($start_terminal_by_default == "on"){
				$start_terminal_by_default_value = 1;
			}else{
				$start_terminal_by_default_value = 0;
			}
		}



		#check for the client's response for the GIT BASH
		$start_git_by_default_value = 0;

		if(!empty($start_git_by_default )){
			if($start_git_by_default  == "on"){
				$start_git_by_default_value = 1;
			}else{
				$start_git_by_default_value = 0;
			}
		}




//main blaze logic


	use Blaze\BlazeGen\BlazeGenerator;
	 
	$BLAZE = new BlazeGenerator($client_operating_system, $client_code_editor,$client_browser,$client_server,$client_version_control_system,$start_terminal_by_default_value,$start_git_by_default_value,$default_sites_to_open);


	$file_generate_status = $BLAZE->generate_blaze_file();

	if($file_generate_status != 1)
	{
		echo $file_generate_status;
	}else
	{

		echo "blaze file generated successfully";

	}








?>