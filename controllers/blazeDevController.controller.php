<?php


	

	/*

	@author Adedoyin Emmanuel
	
	*/



	/*

		base class component for BLAZE
	*/



	class BlazeGenerator{


		public function __construct($operating_system, $code_editor $browser = "", $server_type = " "){
			if(empty($operating_system) OR empty($code_editor)){
				return "can't implement Blaze without an OS";
			}

			$this->operating_system = $operating_system;
			$this->code_editor      = $code_editor;
			$this->browser 			= $browser;
			$this->server_type 		= $server_type;


			$this->local_drive = "";

			$this->code_editor_directory = "";
			$this->local_drive_sub_directory = "";
			$this->code_editor_directory = "";
			$this->code_editor_exe_file_name = ""

	
			/*create the default code editor directory based on the OS*/

			switch ($this->operating_system) {
				case "windows":
					$this->local_drive = "C:/";

						switch ($this->code_editor) {
							case "visual studio code":
							//file directory to proceed
							$this->code_editor_directory ="AppData/Local/Programs/Microsoft VS Code";

							$this->code_editor_exe_file_name = "Code.exe";
								break;
							
							default:
								// code...
								break;
						}

					break;
				case "chromebook":
					$this->local_drive = " ";
					break;

				case "linux":
					$this->local_drive = "C:/";
					break;

				case "mac":
					$this->local_drive = " ";
					break;
				default:
					// code...
					break;
			}


			switch ($this->code_editor) {
				case "visual studio code":
					$this->code_editor_directory = $this->local_drive

					break;
				case "sublime text":
					$this->local_drive = " ";
					break;

				case "linux":
					$this->local_drive = "C:/";
					break;

				case "mac":
					$this->local_drive = " ";
					break;
				default:
					// code...
					break;
			}

		}


		/*
			generates a BLAZE.bat file

		*/
		public function generate_file(){

		}
	}
?>