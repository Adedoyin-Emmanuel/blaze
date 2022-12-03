<?php 









/*


	base class component for the database controller

*/

	error_reporting(0);

		class DBController{


			public function __construct(){


				try{

					// $this->serverName = "containers-us-west-95.railway.app";
					// $this->userName   = "root";
					// $this->password   = "XxEYPSIpaEVQTSsqp3n";
					// $this->database   = "railway";
					// $this->port       = 5864;

					$this->serverName = "localhost";
					$this->userName   = "root";
					$this->password   = "";
					$this->database   = "blaze_waitlist";
					$this->port       = 5864;


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