<?php






require_once "../controllers/emailController.controller.php";

$get_all_waitlist = new EmailController("adedoyine535@gmail.com");

$waitlist_result = $get_all_waitlist->get_waitlist();


 if($waitlist_result != 1){
 	echo $waitlist_result;
 	die();
 }else{
 	while ($waitlist_row = $get_all_waitlist->get_waitlist_result->fetch_assoc()) {
 	    $waitlist_data = '




 	    	<tr>
			    <td>'.$waitlist_row["ID"].'</td>
			    <td>'.$waitlist_row["email"].'</td>
			</tr>




 	    ';

 	    echo $waitlist_data;
 	}
 }





?>