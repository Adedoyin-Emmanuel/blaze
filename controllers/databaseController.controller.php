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
					$this->serverName = "containers-us-west-95.railway.app";
					$this->userName   = "root";
					$this->password   = "6XxEYPSIpaEVQTSsqp3n";
					$this->database   = "railway";
					$this->port       = 5864;



					$this->conn = new mysqli($this->serverName,$this->userName,$this->password, $this->database,$this->port);
				}catch(Exception $e){
					die("An error occured while establishing connection".$e->getMessage());
				}
			}


			public function close_connection(){
				$this->conn->close();
			}



		}



?>