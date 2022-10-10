<?php 









/*


	base class component for the database controller

*/

	error_reporting(0);

		class DBController{


			protected $serverName;
			protected $userName;
			protected $password;
			protected $database;





			public function __construct(){


				try{
					$this->serverName = "localhost";
					$this->userName   = "root";
					$this->password   = "";
					$this->database   = "blaze_waitlist";


					$this->conn = new mysqli($this->serverName,$this->userName,$this->password, $this->database);
				}catch(Exception $e){
					die("An error occured while establishing connection".$e->getMessage());
				}
			}


			public function close_connection(){
				$this->conn->close();
			}



		}



?>