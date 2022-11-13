<?php


	/**
	 * @author Adedoyin Emmanuel
	 * 
	 * @see https://www.github.com/Adedoyin-Emmanuel for more information
	 * 
	 * 
	 * 
	 * */



	namespace Blaze\NonBlazeGen;


	final class BlazeNonDevGenerator
	{


			protected $operating_system;
			protected $default_websites_launch;
			protected $all_app_directory;
			protected $all_exe_name;


		public function __construct($operating_system,$default_websites_launch,
			$all_app_directory,$all_exe_name)
		{

			#error checking
			if(empty($operating_system))
			{
				return "can't implement blaze without an operating system";
			}

			$this->operating_system 	   = $operating_system;
			$this->default_websites_launch = $default_websites_launch;
			$this->all_app_directory       = $all_app_directory;
			$this->all_exe_name 		   = $all_exe_name;

			$this->blaze_file_app_directory = "
				rem enter the corresponding folder of the appliation

			";
			$this->blaze_file_generate_multiple_browser_tabs = "
				rem start the individual browser tabs
			";

			#check for operating system type

			switch ($this->operating_system) 
			{
				case "windows":
					
					#loop through the all the input directory
					for($i = 0; $i < count($this->all_app_directory); $i++){
						
							$this->blaze_file_app_directory += "

								rem change the directory
									cd /
								    cd ".$this->all_app_directory[$i]."
								    rem start the exe file
								    start ".$this->all_exe_name[$i]."
							";

						
							
					}

					#start the website url provided by the user input

			#loop through the whole websites append to the blaze file
					if(!empty($this->default_websites_launch) AND is_array($this->default_websites_launch))
					   {
						for ($i = 0; $i < count($this->default_websites_launch); $i++)
					       {
						$this->blaze_file_generate_multiple_browser_tabs .= "

							start ".$this->default_websites_launch[$i]."

						";


						}
					}else{
						$this->blaze_file_generate_multiple_browser_tabs = " ";
					}

					break;
				case "linux":
					
					break;
				case "mac os":
					
					break;
				case "chromebook":
					
					break;	
				default:
					
					break;
			}


		 }	


		 #generate blaze file

		public function generate_blaze_file(){
			$this->saved_file_folder = "../nonDevsDownload/BLAZE.bat";

			//check if the file already exist and delete if it exists
			if(file_exists($this->saved_file_folder)){
				if(unlink($this->saved_file_folder)){

					//create the blaze file
					$this->file_name = "../download/BLAZE.bat";
					
					$this->blaze_file = fopen($this->file_name,"w");

					//concatenate all the respective blaze written code lines.
					$this->ALL_BLAZE_CODE = $this->blaze_file_generate_code_editor ." ".$this->blaze_file_generate_browser_type." ".$this->blaze_file_generate_server_type . " " .$this->blaze_file_generate_version_control_system . " ".$this->blaze_file_generate_default_terminal . " ".$this->blaze_file_generate_default_git_start . " ".$this->blaze_file_generate_default_websites;
					fwrite($this->blaze_file, $this->ALL_BLAZE_CODE);

					if(file_exists($this->saved_file_folder)){
						return true;
					}else{
						return "an error occured while generating blaze file";
					}


				}else{
					return "an error occured, could not configure file directory";
				}
			}else{
					//the file doesn't exist, create the blaze file
					$this->file_name = "../download/BLAZE.bat";
					
					$this->blaze_file = fopen($this->file_name,"w");

					//concatenate all the respective blaze written code lines.
					$this->ALL_BLAZE_CODE = $this->blaze_file_generate_code_editor ." ".$this->blaze_file_generate_browser_type." ".$this->blaze_file_generate_server_type;
					fwrite($this->blaze_file, $this->ALL_BLAZE_CODE);

					if(file_exists($this->saved_file_folder)){
						return true;
					}else{
						return "an error occured while generating blaze file";
					}
			}
			
			
		}

	}

