<?php



/*

*@author Adedoyin Emmanuel
*


*/


#base class controller for the form controller



	class EmailController {

			public $email;

			public function __construct($email){

				if(empty($email)){
					throw new Exception("Email can't be empty");
				}else{
					$this->email = $email;

				}
			}


			#create a custom method to sanitaize the user input
			public function custom_input_sanitizer($data){
				$this->data = $data;
				#trim user inputs => remove whitespaces
				$this->data = trim($data);
				#remove slashes
				$this->data = stripcslashes($data);
				
				#escape html characters
				$this->data =htmlspecialchars($data);

				return $this->data;
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



		 #create a method to connect to the mailchimp API to store the users

		 public function add_subscriber($email){
		 	#we add the subscriber and send them a message

		 }


		 public function save_subscriber_to_db($email){

		 	try{

		 	}catch(Exception $e){

		 	}
		 }






	}







?>