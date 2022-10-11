<?php

 require_once "../includes/session.inc.php";
//check if the user is logged in

if(isset($_SESSION["login"])){
	echo '<script>location.href = "index.php"; </script>';
}


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php require_once "../includes/component.inc.php" ?>

    <?php require_once "../includes/style.inc.php" ?>
    <title>Blaze Admin Login</title>

    <style>
        


    </style>
        <link rel="icon"  href="../logo.png">

    <script src="includes/processLogin.inc.js"></script>
</head>
<body class="container-fluid p-0">

	<?php require_once "includes/adminNav.inc.php"?>
	
		<div  id="spinner" class="">

			<div class="dot-pulse text-danger"></div>

		</div>


		<div class="p-4">
		
			<div class="row d-flex py-5  flex-md-row" id="content-contain">

	
			<div>
				<h5 class="text-capitalize text-md-center ">Blaze Admin Login</h5>
			</div>

		<form class=" my-5 p-5 px-4 b rounded-3 form m-auto" method="post" action="" id="form" autocomplete="off" >
			<h2 class="fs-4 text-center text-capitalize py-1">Login ⚡</h2>
			<div class=" fw-2 text-center d-flex align-items-center justify-content-center m-auto rounded-3 p-2 d-none text-danger" id="error_alert" style="background: transparent; ">
				*This is an error message*
			</div>
			<div class="form-group my-4">
				<label for="username" class="text-capitalize py-2">Username:</label>
				<input type="text" name="username" class="form-control text-light  rounded-3"  id="productName" placeholder="Enter your username" autocomplete="off" required />
			</div>

			<div class="form-group my-4">
				<label for="password" class="text-capitalize py-2">Password:</label>
				<input type="password" name="password" class="form-control text-light text-start " style="background:#343a40;" id="password"  placeholder="Enter your password" autocomplete="off" required />
				
			</div>

		

	
			<div class="form-group my-2">
				
					<button class="btn btn-primary text-center text-capitalize" name="submit" id="submit">
					<span class="spinner-border spinner-border-sm  bg-primary d-none" id="spinner"></span>	
				Login
					</button>
				

			</div>
		</form>	
		
		</div>


	</div> 

	<?php require_once "../includes/footer.inc.php"?>
</body>
</html>