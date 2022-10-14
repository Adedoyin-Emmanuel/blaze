<?php 









/*


	base class component for the database controller

*/

	error_reporting(0);

		class DBController{


			public function __construct(){


				try{

					// $this->serverName = "localhost";
					// $this->userName   = "id19691524_blaze_admin";
					// $this->password   = "Z{rdWe|zQSf9[}(c";
					// $this->database   = "id19691524_blaze";
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