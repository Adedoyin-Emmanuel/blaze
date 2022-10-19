<?php


	
/**
 * @author Adedoyin Emmanuel
 * @see https://www.github.com/Adedoyin-Emmanuel/Blaze for more information
 * 
 * 
 * 
 * */



	final class BlazeGenerator{


			protected $operating_system;
			protected $code_editor;      
			protected $browser;
			protected $server_type; 		


			protected $local_drive; 

			protected $code_editor_directory; 
			protected $code_editor_exe_file_name; 

			protected $blaze_file_generate_code_editor;
			protected $client_browser_directory;
			protected $client_browser_exe_file_name;
			protected $blaze_file_generate_browser_type; 

			
		public function __construct($operating_system, $code_editor, $browser = "", $server_type = " "){
			if(empty($operating_system) OR empty($code_editor)){
				return "can't implement Blaze without an OS";
			}


				 $this->operating_system = $operating_system;
				 $this->code_editor      = $code_editor;
				 $this->browser 		 = $browser;
				 $this->server_type 	 = $server_type;


				 $this->local_drive = "";

				 $this->code_editor_directory = "";
				 $this->code_editor_exe_file_name = "";

				 $this->blaze_file_generate_code_editor ="
					color 0a
					echo BLAZE 
					rem start the code editor by default
				";

				 $this->client_browser_directory = "";
				 $this->client_browser_exe_file_name = "";
				 $this->blaze_file_generate_browser_type = "

					rem start the user's browser choice next

				";


	
			/*create the default code editor directory based on the OS*/

			switch ($this->operating_system) {
				case "windows":
					$this->local_drive = "C:/";

					//check for the code editor type the client is using 
						switch ($this->code_editor) {

							/*visual studio code editor*/
							case "visual studio code":
							//file directory to proceed, good thing vs code is installed on all directory by default
							$this->code_editor_directory ="AppData/Local/Programs/Microsoft VS Code";

							$this->code_editor_exe_file_name = "Code.exe";

							$this->blaze_file_generate_code_editor .= "

								rem code editor => visual studio



								rem start the code editor

								start code
							";
								break;


							/*sublime text code editor*/
							case "sublime text":
							//file directory to proceed
							$this->code_editor_directory ="Program Files\Sublime Text";

							$this->code_editor_exe_file_name = "sublime_text.exe";
							$this->blaze_file_generate_code_editor .= "

								rem code editor => sublime text
								rem enter the system root directory
								cd /

								cd ".$this->code_editor_directory."

								rem start the code editor

								start ".$this->code_editor_exe_file_name."

							";


								break;
							
							case "notepad ++":
							//file directory to proceed
							$this->code_editor_directory ="Program Files (x86)\Notepad++";

							$this->code_editor_exe_file_name = "notepad++.exe";

							$this->blaze_file_generate_code_editor .= "

								rem code editor => notepad ++
								rem enter the system root directory
								cd /

								cd ".$this->code_editor_directory."

								rem start the code editor

								start ".$this->code_editor_exe_file_name."




							";
								break;

							/*notepad code editor*/
							case "notepad":
							//file directory to proceed
							$this->code_editor_directory ="WINDOWS\system32";

							$this->code_editor_exe_file_name = "notepad.exe";

							$this->blaze_file_generate_code_editor .= "

								rem code editor => notepad 
								rem enter the system root directory
								cd /

								cd ".$this->code_editor_directory."

								rem start the code editor

								start ".$this->code_editor_exe_file_name."
							";

								break;

							/*atom code editor*/
							case "atom":
							//file directory to proceed
							$this->code_editor_directory ="AppData\Local\atom";

							$this->code_editor_exe_file_name = "atom.exe";


							$this->blaze_file_generate_code_editor .= "
								rem code editor => atom 
								rem enter the system root directory
								cd ..

								cd ".$this->code_editor_directory."

								rem start the code editor

								start ".$this->code_editor_exe_file_name."
							";

								break;


							default:
								//code
								break;
						}

						//check the type of browser the client is using
						switch ($this->browser) {

							case "chrome":
									//the client browser is chrome
									$this->client_browser_directory ="Program Files\Google\Chrome\Application";
									$this->client_browser_exe_file_name = "chrome.exe";

									//generate the brower setup code
									$this->blaze_file_generate_browser_type .= "

									    rem client default browser => chrome
										cd /

										cd ".$this->client_browser_directory."

										start ".$this->client_browser_exe_file_name."

									";

								break;

							case "firefox":
									
								break;
							case "edge":
									//the client browser is microsoft edge
									$this->client_browser_directory ="Program Files (x86)\Microsoft\Edge\Application";
									$this->client_browser_exe_file_name = "msedge.exe";

									//generate the brower setup code
									$this->blaze_file_generate_browser_type .= "

									    rem client default browser => microsoft edge
										cd /

										cd ".$this->client_browser_directory."

										start ".$this->client_browser_exe_file_name."

									";
								break;
							case "opera":
									
								break;
							case "safari":
									
								break;
							case "internet explorer":
									
								break;
							default:
									
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



		}


		/*
			generates a BLAZE.bat file

		*/
		public function generate_blaze_file(){
			$this->saved_file_folder = "../download/BLAZE.bat";

			//check if the file already exist and delete if it exists
			if(file_exists($this->saved_file_folder)){
				if(unlink($this->saved_file_folder)){

					//create the blaze file
					$this->file_name = "../download/BLAZE.bat";
					
					$this->blaze_file = fopen($this->file_name,"w");

					//concatenate all the respective blaze written code lines.
					$this->ALL_BLAZE_CODE = $this->blaze_file_generate_code_editor ." ".$this->blaze_file_generate_browser_type;
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

					fwrite($this->blaze_file, $this->blaze_file_generate_code_editor);

					if(file_exists($this->saved_file_folder)){
						return true;
					}else{
						return "an error occured while generating blaze file";
					}
			}
			
			
		}

		#create a method that downloads the blaze file
		public function download_blaze_file(){

		}
	}
?>