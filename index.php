<!DOCTYPE html>
<html>
<head>

	<?php require_once "includes/component.inc.php"?>

	<?php require_once "includes/style.inc.php"?>
	<script src="includes/manageSpinner.inc.js"></script>
	
	<title>Blaze</title>
	<meta name="author" content="Adedoyin Emmanuel Adeniyi">
	<meta name="keyword" content="A web app that helps to bootstrap development, kickstart your projects today by using blaze, software that opens multiple software, software development, next big thing, bootstraping desktop applications, a software that opens multiple softwares"/>
	<meta name="keyword" content="blaze, full stack application, php, php project, php programming, bootstrap project, bootstraping development blaze web app, BlazeWebApp, BlazeWeb, Blaze, multiple software opener"/>
</head>

<body class="container-fluid p-0 d-flex align-items-center justify-content-center m-auto flex-column" id="body" style="background: lightskyblue;">

	<div  id="spinner" class="">

			<div class="dot-pulse text-danger"></div>

	</div>


	<h4 class="text-capitalize text-center my-5 p-5 text-light">think blaze 🔥 think bootstrap </h4>

	
	<div class="splash_screen my-5 d-flex align-items-center p-3 justify-content-center" >
	<div class="dot-pulse text-danger d-none" id="pulseSpinner">
		
	</div>
		<img src="logo.png" class="img-fluid logo" height="90" width="90" id="logoImg">

	</div>
	<button class="text-capitalize text-center btn btn-light home-btn my-5 " id="getStarted">
		<span class="spinner-border spinner-border-sm d-none text-light" id="btnSpinner"></span>
	get started</button>

</body>
</html>