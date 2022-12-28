<!DOCTYPE html>
<html>
<head>

	<?php require_once "includes/component.inc.php"?>

	<?php require_once "includes/style.inc.php"?>
	<script src="includes/manageSpinner.inc.js"></script>
	<title>404 (Not Found)</title>
	
</head>

<body class="container-fluid p-0 d-flex align-items-center justify-content-center m-auto flex-column" id="body" style="background: lightskyblue;">

	<div  id="spinner" class="">

			<div class="dot-pulse text-danger"></div>

	</div>


	<h4 class="text-capitalize text-center my-5 p-5 text-light">the page not found!</h4>

	
	<div class="splash_screen my-5 d-flex align-items-center p-3 justify-content-center" >
	<div class="dot-pulse text-danger d-none" id="pulseSpinner">
		
	</div>
		<img src="logo.png" class="img-fluid logo" height="90" width="90" id="logoImg">

	</div>

	<h5 class="text-center fs-5 p-md-1 p-sm-2 p-2">It appears that you are lost!</h5>
	<br/>
	<button class="btn btn-light text-capitalize lost-btn" id="getStarted"><a href="homePage.php" class="text-decoration-none text-dark">Home</a></button>
</body>
</html>