<?php

require_once "databaseController.controller.php";


/*

*@author Adedoyin Emmanuel
*


*/


#base class controller for the form controller



	class EmailController extends DBController {

			public function __construct($email){


				parent::__construct();
				if(empty($email)){
					throw new Exception("Email can't be empty");
				}else{
					$this->email = $email;

				}
			}


			#create a custom method to sanitize the user email, returns true on success

			public function custom_email_sanitizer($email){

				if(!empty($email)){
					$this->email = $email;
				}

				$this->legit_email = filter_var($this->email,FILTER_SANITIZE_EMAIL);

				if (!filter_var($this->legit_email, FILTER_VALIDATE_EMAIL)) {
				 		return "Invalid email format";
				}else{
					
					return true;
				}
			}


			public function get_legit_email(){
				return $this->legit_email;
			}






		 

		 	public function add_subscriber_to_DB(){
				
				$this->email = $this->get_legit_email();
				$this->date_joined = date("d|m|Y");

				$this->legit_email = mysqli_real_escape_string($this->conn,$this->email);

				#check for duplicate

				$this->duplicate_sql = "SELECT * FROM waitlist WHERE email = '$this->email'";
				$this->duplicate_result = $this->conn->query($this->duplicate_sql);



				#check if there is a duplicate row
				if($this->duplicate_result->num_rows > 0){
					return "chief, you are already in the waitlist";
					die();
				}else{
					$this->insert_sql = "INSERT INTO waitlist (email,date_joined) VALUES ('$this->legit_email','$this->date_joined')";

					$this->insert_result = $this->conn->query($this->insert_sql);


					if($this->insert_result == TRUE){
						return true;
					}else{
						return "could not add subscriber ";
					}

				}
			
			
			}


			#create a method to get all the waitlist

			public function get_waitlist(){

				$this->get_waitlist_sql = "SELECT * FROM waitlist";
				$this->get_waitlist_result = $this->conn->query($this->get_waitlist_sql);

				if($this->get_waitlist_result == TRUE){
					if($this->get_waitlist_result->num_rows  > 0){
						return true;
					}else{
						return "server returned 0 results";
						die();
					}
				}else{

						return "an error occured";
						die();
				}
			}





	}







?>