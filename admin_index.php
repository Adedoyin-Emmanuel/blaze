<?php

require_once "includes/session.inc.php";

$_COOKIE["login"] = $_SESSION["login"];

if(!isset($_SESSION["login"])){
	echo '<script>location.href="login.php";</script>';	
}




?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php require_once "includes/component.inc.php" ?>

    <?php require_once "includes/style.inc.php" ?>
    <title>Blaze Admin </title>

    <style>
        


    </style>
        <link rel="icon"  href="logo.png">

    <script src="admin_includes/getWaitlist.inc.js"></script>
    <script src="admin_includes/getAdminDetails.inc.js"></script>
    <script src="admin_includes/sendBulkEmail.inc.js"></script>
</head>
<body class="container-fluid p-0">

	<?php require_once "admin_includes/adminNav.inc.php"?>
	
		<div  id="spinner" class="">

			<div class="dot-pulse text-danger"></div>

		</div>


		<div class="p-3">
		
			<div class="row d-flex py-5  flex-md-row" id="content-contain">

	
			<div class="section">
				<h3 class="text-capitalize text-center fs-3" id="welcome_header">Welcome,</h3>

				<h5 class="text-capitalize my-3 fs-5">select a task to perform below</h5>

			<br/>
				<div class="admin_tasks d-flex flex-column flex-md-row justify-content-start">
					<button class="btn btn-secondary my-2 my-md-4 mx-4 text-capitalize" id="waitlist_view_btn">view total waitlist</button>
					<button class="btn btn-dark my-2 my-md-4 mx-4 text-capitalize"id="send_email_btn">send bulk email</button>
				</div>
			</div>


			<!-- total waitlist members -->

			<div class="total-waitlist my-4 d-none" id="total-waitlist">


			  <table class="table table-bordered  table-responsive p-2 rounded my-5">
					<thead>
					  <tr>
						<th>Id</th>
					    <th>Email</th>

					  </tr>
					</thead>
					<tbody id="waitlist_table_body" class="waitlist_table_body">

					<!-- data would be fetched using AJAX -->
					</tbody>
					</table>

			</div>




			<!-- send bulk email form -->


			<div class="send_bulk_email_form d-none" id="send_bulk_email_form">
				

			<form class=" my-5 p-5 px-4 b rounded-3 form m-auto" method="post" action="" id="form" autocomplete="off" >
			<h2 class="fs-4 text-center text-capitalize py-1">send bulk email⚡</h2>
			<div class=" fw-2 text-center d-flex align-items-center justify-content-center m-auto rounded-3 p-2 d-none text-danger" id="error_alert" style="background: transparent; ">
				*This is an error message*
			</div>
			<div class="form-group my-4">
				<label for="admin_email" class="text-capitalize py-2">Admin's Email</label>
				<input type="text" name="admin_email" class="form-control text-light  rounded-2"  id="admin_email" placeholder="Admin's email" autocomplete="off" required value="adedoyine535@gmail.com" />
			</div>

			<div class="form-group my-4">
				<label for="email_header" class="text-capitalize py-2">Email Header/Subject</label>
				<input type="text" name="email_header" class="form-control text-light text-start p-3" style="background:#343a40;" id="email_header"  placeholder="Enter email header" autocomplete="off" required value="Adedoyin Emmanuel (Senior Developer) @ Blaze"/>
				
			</div>

			<div class="form-group my-4">
				<label for="email_body" class="text-capitalize py-2">Email Body</label>
			

				<textarea placeholder="Email body" rows="3"  class="textarea my-2 form-control  text-light text-small" style="background:#343a40;" autocomplete="off" name= "email_body" required></textarea>
			</div>

		

	
			<div class="form-group my-2">
				
					<button class="btn btn-danger text-center text-capitalize" name="submit" id="submit">
					<span class="spinner-border spinner-border-sm  bg-primary d-none" id="spinner"></span>	
				send bulk email
					</button>
				

			</div>
		</form>	



			</div>


		
		</div>


	</div> 

	<?php require_once "includes/footer.inc.php"?>

	<script>
		
		$(document).ready(($)=>{
			$.noConflict();
			//check if the view waitlist btn was clicked
			$("#waitlist_view_btn").click(()=>{
				$("#total-waitlist").toggleClass("d-none");
			});


			//check if the send bulk email btn was clicked
			$("#send_email_btn").click(()=>{
				$("#send_bulk_email_form").toggleClass("d-none");
			})
		})

	</script>
</body>
</html>