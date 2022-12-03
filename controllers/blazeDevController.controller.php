<?php


	
/**
 * @author Adedoyin Emmanuel
 * @see https://www.github.com/Adedoyin-Emmanuel/Blaze for more information
 * 
 * 
 * 
 * */

	
	namespace Blaze\BlazeGen;

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
			protected $blaze_file_generate_server_type;
			protected $client_server_exe_file_name;

			protected $client_server_directory;

			protected $client_version_control_system;
			protected $client_default_terminal_start;
			protected $client_default_git_start;
			protected $client_multiple_browser_tabs_start;

			protected $blaze_file_generate_version_control_system;
			protected $blaze_file_generate_version_control_system_directory;
			protected $blaze_file_generate_version_control_system_exe;
			protected $corresponding_VCS_website;

			protected $blaze_file_generate_default_terminal;
			protected $blaze_file_generate_default_git_start;



			
		public function __construct($operating_system, $code_editor, $browser = "", $server_type = "",$client_version_control_system = "",$client_default_terminal_start ="",$client_default_git_start = "",$client_multiple_browser_tabs_start = ""){

			#important BLAZE properties
			if(empty($operating_system) OR empty($code_editor)){
				return "can't implement Blaze without an OS or a Code Editor";
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
				

				$this->client_server_exe_file_name = "";
				$this->client_server_directory     = "";
				$this->blaze_file_generate_server_type = "

					rem start the user's server choice next
				";

				$this->client_version_control_system = $client_version_control_system;
				$this->client_default_terminal_start =$client_default_terminal_start;
				$this->client_default_git_start = $client_default_git_start;
				$this->client_multiple_browser_tabs_start = $client_multiple_browser_tabs_start;



				$this->blaze_file_generate_version_control_system = "
					rem start the user's version control choice next.

				";
				$this->blaze_file_generate_default_terminal = "
					rem start the user's terminal next
				";
				$this->blaze_file_generate_default_git_start = "
					rem start the user's version control sytem next
				";

				$this->blaze_file_generate_default_websites = "
					rem start the default websites next
				";


				$this->client_version_control_system_directory = "";
				$this->client_version_control_system_exe = "";

				#VSC => Version Control System
				$this->corresponding_VCS_website = "";




	
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

							//vim code editor
							case "vim":
							//file directory to proceed
							$this->code_editor_directory ="Program Files (x86)\Vim\vim90";

							$this->code_editor_exe_file_name = "vim.exe";

							$this->blaze_file_generate_code_editor .= "

								rem code editor => vim
								rem enter the system root directory
								cd /

								cd ".$this->code_editor_directory."

								rem start the code editor

								start ".$this->code_editor_exe_file_name."




							";

							//emacs code editor
							case "emacs":
							//file directory to proceed
							$this->code_editor_directory ="Program Files\Emacs\emacs-28.2\bin";

							$this->code_editor_exe_file_name = "runemacs.exe";

							$this->blaze_file_generate_code_editor .= "

								rem code editor => emacs
								rem enter the system root directory
								cd /

								cd ".$this->code_editor_directory."

								rem start the code editor

								start ".$this->code_editor_exe_file_name."




							";
								/*bracket code editor*/
							case "bracket":
								
									//file directory to proceed
								$this->code_editor_directory ="Program Files (x86)\Brackets";

								$this->code_editor_exe_file_name = "Brackets.exe";

								$this->blaze_file_generate_code_editor .= "

									rem code editor => brackets 
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
							//file directory to proceed good thing atom is installed globally
							$this->code_editor_directory ="AppData\Local\atom";

							$this->code_editor_exe_file_name = "atom";


							$this->blaze_file_generate_code_editor .= "
								rem code editor => atom 
								rem enter the system root directory
								

								rem start the code editor

								start ".$this->code_editor_exe_file_name."
							";

								break;


							default:
								//code
								break;
						}


							#check for the client's choice of version control system

							switch ($this->client_version_control_system) {
								case "SELECT":
									$this->corresponding_VCS_website = "";
									break;

								case "github":
									$this->corresponding_VCS_website = "www.github.com";

									#when blaze loads, start the websiteb by default
									$this->blaze_file_generate_version_control_system .= "
										start ".$this->corresponding_VCS_website."
									";
									break;

								case "bitbucket":
									$this->corresponding_VCS_website = "www.bitbucket.org";

									#when blaze loads, start the websiteb by default
									$this->blaze_file_generate_version_control_system .= "
										start ".$this->corresponding_VCS_website."
									";
									break;

								case "gitlab":
									$this->corresponding_VCS_website = "www.gitlab.com";

									#when blaze loads, start the websiteb by default
									$this->blaze_file_generate_version_control_system .= "
										start ".$this->corresponding_VCS_website."
									";
									break;
								
								default:
									$this->corresponding_VCS_website = "";
									break;
							}


							#check the client's choice to start the terminal by default or not

							switch ($this->client_default_terminal_start) {
								case 1:
									#start the client's terminal by default
									$this->blaze_file_generate_default_terminal .= "
										start cmd
									";
									break;
								case 0:
									#don't the client's terminal by default
									$this->blaze_file_generate_default_terminal .= "";
									break;
								default:
									#don't the client's terminal by default
									$this->blaze_file_generate_default_terminal .= "";
									break;
							}



							#check the client's choice to start the git BASH by default or not

							switch ($this->client_default_git_start) {
								case 1:
									#start the client's version control system by default
									$this->client_version_control_system_directory = "Program Files\Git";
									$this->client_version_control_system_exe = "git-bash.exe";

									$this->blaze_file_generate_default_git_start .= "
										cd /
										cd ".$this->client_version_control_system_directory."

										start ".$this->client_version_control_system_exe."
									";
									break;
								case 0:
									#don't the client's version control system by default
									$this->blaze_file_generate_default_git_start .= "";
									break;
								default:
									#don't the client's version control system by default
									$this->blaze_file_generate_default_git_start .= "";
									break;

							}




							#check for the multiple websites the client wants to start by default when they start blaze

							#loop through the whole websites append to the blaze file
							if(!empty($this->client_multiple_browser_tabs_start) AND is_array($this->client_multiple_browser_tabs_start)){
								for ($i = 0; $i < count($this->client_multiple_browser_tabs_start); $i++)
									{
								$this->blaze_file_generate_default_websites .= "

									start ".$this->client_multiple_browser_tabs_start[$i]."

								";


								}
							}else{
								$this->client_multiple_browser_tabs_start = " ";
							}
							

							




							//check the server type the client choose

							switch ($this->server_type) {
								case "xampp":
									#client choose xampp server
									$this->client_server_directory ="xampp";
									$this->client_server_exe_file_name = "xampp-control.exe";
									$this->blaze_file_generate_server_type .= "
										rem client's default server => XAMPP SERVER

										cd/

										cd ".$this->client_server_directory."

										start ".$this->client_server_exe_file_name."
									";
									break;
								case "wamp":
									#client choose wamp 
									$this->client_server_directory ="wamp";
									$this->client_server_exe_file_name = "wampmanager.exe";
									$this->blaze_file_generate_server_type .= "
										rem client's default server => WAMP SERVER

										cd/

										cd ".$this->client_server_directory."

										start ".$this->client_server_exe_file_name."
									";
									break;
								case "mamp":
									#client choose mamp server

										//not currently availiable
									break;
								case "node":
									#client choose node js server
							
									$this->client_server_directory ="Program Files/nodejs";
									$this->client_server_exe_file_name = "node.exe";
									$this->blaze_file_generate_server_type .= "
										rem client's default server => NODE SERVER

										cd/

										cd ".$this->client_server_directory."

										start ".$this->client_server_exe_file_name."
									";
									break;

							case "SELECT":
									#client choose select
									$this->client_server_directory ="nothing";
									$this->client_server_exe_file_name = "nothing";
									$this->blaze_file_generate_server_type .= "
										
									";
									break;

									


								default:
									
									$this->client_server_directory ="nothing";
									$this->client_server_exe_file_name = "nothing";
									$this->blaze_file_generate_server_type .= "
										
									";
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
									//the client browser is firefox
									$this->client_browser_directory ="Program Files\Mozilla Firefox";
									$this->client_browser_exe_file_name = "firefox.exe";

									//generate the brower setup code
									$this->blaze_file_generate_browser_type .= "

									    rem client default browser => firefox
										cd /

										cd ".$this->client_browser_directory."

										start ".$this->client_browser_exe_file_name."

									";
									
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
									//the client browser is internet explorer
									$this->client_browser_directory ="Program Files\Internet Explorer";
									$this->client_browser_exe_file_name = "iexplore.exe";

									//generate the brower setup code
									$this->blaze_file_generate_browser_type .= "

									    rem client default browser => internet explorer

										cd /

										cd ".$this->client_browser_directory."

										start ".$this->client_browser_exe_file_name."

									";


									
								break;
							case "SELECT":
									
									//generate the brower setup code
									$this->blaze_file_generate_browser_type .= "

									   

									";


									
								break;
							default:
									//generate the brower setup code
									$this->blaze_file_generate_browser_type .= "

									   

									";

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

		#create a method that downloads the blaze file
		public function download_blaze_file(){

		}
	}



