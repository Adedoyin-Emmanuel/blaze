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
					$this->userName   = "id19691524_blaze_admin";
					$this->password   = "Z{rdWe|zQSf9[}(c";
					$this->database   = "id19691524_blaze";
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