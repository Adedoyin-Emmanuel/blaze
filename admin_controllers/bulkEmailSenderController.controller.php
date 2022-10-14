<?php

/**
 * @author Adedoyin Emmanuel
 * 
 * @var Base Class Component for BulkEmailSender 
 * 
 * 
 * 
 * 
 * */
require_once "connectionController.controller.php";
require_once "../../includes/phpMailer.inc.php";
	
			

	class BulkEmailSender extends ConnectionController{

		/**
		 * constructor requires 3 @prams [ "senderEmail", "EmailHeader", "Email Body"]
		 * 
		 * 
		 * 
		 * */


		 protected $senderEmail;
		 protected $emailHeader;
		 protected $emailBody;


		public function __construct($senderEmail,$emailHeader,$emailBody){


			 parent::__construct();




			if(empty($senderEmail) OR empty($emailHeader) OR empty($emailBody)){
				throw new Exception("Args must be complete");
			}


				$this->senderEmail = $senderEmail;
				$this->emailHeader = $emailHeader;
				$this->emailBody   = $emailBody;
				$this->senderName = "Adedoyin Emmanuel Adeniyi (Senior Developer) @ Blaze";

		}



		public function get_all_waitlist(){

			$this->get_all_waitlist_sql    = "SELECT * FROM blaze_waitlist";
			$this->get_all_waitlist_result = $this->conn->query($this->get_all_waitlist_sql);

			#check if query was successful

			if($this->get_all_waitlist_result == TRUE){
				if($this->get_all_waitlist_result->num_rows > 0){
					return true;
				}else{
					return "no user on waitlist";
				}
			}else{
				return "an error occured";
			}


		}


		public function send_bulk_email($waitlist_array){

			$this->waitlist_array = $waitlist_array;
			$this->mail = new PHPMailer();
			$this->mail->isSMTP();
			$this->mail->Host = "SMTP.gmail.com";
			$this->mail->Port = "80";
			$this->mail->SMTPAuth = true;
			$this->mail->Username = "adedoyine535@gmail.com";
			$this->mail->password = " ";
			$this->mail->SMTPSecure = " ";

			$this->mail->From = $this->senderEmail;
			$this->mail->FromName = $this->senderName;
			$this->mail->addAddress($this->waitlist_array);
			$this->mail->addCC($this->senderEmail,$this->senderName);
			$this->mail->WordWrap = 50;
			$this->mail->isHTML(true);

			$this->mail->Subject = $this->emailHeader;
			$this->mail->Body = $this->emailBody;


			#check if the email send was succesful
			if($this->mail->send()){
				return true;
			}else{
				return "Could not send email";
			}

		}




	}


?>