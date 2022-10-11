<?php



	require_once "connectionController.controller.php";
/*

	base class for admin login controller


*/
	class LoginController extends ConnectionController{

		public function __construct(){
			parent::__construct();
		}

		public function custom_input_sanitizer($data){
			$this->data = $data;

			$this->data = trim($data);
			$this->data = stripslashes($data);
			$this->data = htmlspecialchars($data);


			return $this->data;
		}

		public function check_credentials($username,$password){
			if(!empty($username) AND !empty($password)){
				$this->username = mysqli_real_escape_string($this->conn,$this->custom_input_sanitizer($username));
				$this->password = mysqli_real_escape_string($this->conn,$this->custom_input_sanitizer($password));

				$this->credentials_check_sql = "SELECT * FROM blaze_admin WHERE username = '$this->username' AND password = '$this->password'";
				$this->credentials_check_result = $this->conn->query($this->credentials_check_sql);


				if($this->credentials_check_result == TRUE){
					if($this->credentials_check_result->num_rows > 0){
						return true;
					}else{
						return "invalid username or password";
					}
				}else{
					return "an error occured, try again later";
				}


			}else{
				die("username or password can't be empty");
			}
		}


		#create a method to get the Admin details from the dbase
		public function get_admin_info(){
			$this->get_admin_info_sql = "SELECT * FROM blaze_admin";
			$this->get_admin_info_result = $this->conn->query($this->get_admin_info_sql);

			#check if the query was successful
			if($this->get_admin_info_result == TRUE){

				if($this->get_admin_info_result->num_rows > 0){
					return true;
				}else{
					return "couldn't get the admin info";
				}
			}else{
					return "an error occured";
			}
		}
	}


?>