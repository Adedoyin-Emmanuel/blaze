<?php


require_once "../admin_controllers/bulkEmailSenderController.controller.php";



$admin_email  = $_POST["admin_email"];
$email_header = $_POST["email_header"];
$email_body   = $_POST["email_body"];



#little validation

if(empty($admin_email) OR empty($email_header) OR empty($email_body)){
	echo "please fill in all fields";
	die();
}






$bulk_email_sender = new BulkEmailSender($admin_email,$email_header,$email_body);

$all_waitlist_data_array = array();

$all_waitlist_data_result = $bulk_email_sender->get_all_waitlist();

$email_send_status =  " ";




// #if successful
 if($all_waitlist_data_result != 1){

	echo $all_waitlist_data_result;
	die();

}else{


	while($waitlist_row = $bulk_email_sender->get_all_waitlist_result->fetch_assoc()){
		array_push($all_waitlist_data_array,$waitlist_row["email"]);
		
	}



	
 	$email_send_status = $bulk_email_sender->send_bulk_email("emmysoftdev@gmail.com");

 	
 
	 if($email_send_status != 1){

	 	echo $email_send_status;

	 }else{
	 	echo "email sent successfully";

 	 }



	// #send the bulk message for each user on the waitlist

	// for($i =0; $i < count($all_waitlist_data_array); $i++){

	

	// }


 }




?>